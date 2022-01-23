<?php
/*
Plugin Name: GW2 Guild Manager
Version: 0.1
Plugin URI:  
Description: Plugin to display the live scores of WvW in Guild Wars 2. Working with the API developed by ArenaNet.
Author: gcimoc
Author URI: https://martillodethor.com
License: GPLv2 or later
*/

// don't load directly
if ( ! defined( 'WPINC' ) ) { die; }

// Do a PHP version check, require 5.3 or newer
if (version_compare(PHP_VERSION, '5.3.0', '<') ) {
	// Silently deactivate plugin, keeps admin usable
	if( function_exists('deactivate_plugins') ) { deactivate_plugins(plugin_basename(__FILE__), true); }
	//Spit out die messages
	wp_die(sprintf(__('Your PHP version is too old, please upgrade to a newer version. Your version is %s, Guild Wars 2 Guild Manager requires %s. 
		Remove the plugin from WordPress plugins directory with FTP client.', 'gw2-guild-manager'), phpversion(), '5.3.0 +'));
}

function gw2_guild_manager_load_textdomain() {
	load_plugin_textdomain('gw2-guild-manager', false, dirname(plugin_basename( __FILE__ ) ) . '/i18n/');
}
add_action( 'plugins_loaded', 'gw2_guild_manager_load_textdomain' );

wp_register_style('gw2-guild-manager', plugins_url('/css/gw2-guild-manager.css',__FILE__ ));
wp_enqueue_style('gw2-guild-manager');

// require (dirname(__FILE__).'/vesu/SDK/Gw2/Gw2SDK.php');
// require (dirname(__FILE__) .'/vesu/SDK/Gw2/Gw2Exception.php');

require (dirname(__FILE__).'/vendor/gw2apiclient-master/src/autoload.php');

// use vesu\SDK\Gw2\Gw2SDK;
// use vesu\SDK\Gw2\Gw2Exception;

class gw2_guild_manager_widget extends WP_Widget {

	public function __construct() {
		parent::__construct(
	 		'gw2_guild_manager',
			__('Guild Wars 2 Guild Manager', 'gw2-guild-manager'),
			array('description' => __('Displays real-time scores of Guild Wars 2', 'gw2-guild-manager' ))
		);
	}	


	/**
	 * Widget - Display on front-end result of API
	 */
	public function widget($args, $instance) {
		extract($args);		
		$world_home_id = $instance['world'];
		$lang = $instance['lang']; if (!$lang) { $lang = "es"; } 
		$skin = $instance['skin']; if (!$skin) { $skin = "default"; } 		
		
		// init Environment
		$env = new Arnapou\GW2Api\Environment();
		// cache
		$cachedir = dirname(__FILE__).'/cache';
		$cache   = new Arnapou\GW2Api\Cache\FileCache($cachedir);
		$env->setCache($cache);		
		// set lang (en, fr, de, es)		
		$env->setLang('es');
		// Aloord:  9B41A892-202E-E14C-92F3-F9A7817902C2226B0772-1C6A-458F-852A-EBC42F92F4B2
		// Test
		$env->setAccessToken('9B41A892-202E-E14C-92F3-F9A7817902C2226B0772-1C6A-458F-852A-EBC42F92F4B2');
		
		$account = new Arnapou\GW2Api\Model\Account($env);
		$world = $account->getWorld()->getName();
		// $helmet = $account->getCharacter('Aloord')->getEquipment('Helm')->getName();
		
		$guilds = $account->getGuilds();		
		$characters = $account->getCharacters();
		
		$title = apply_filters('widget_title', $instance['title']);
		
		echo $before_widget;	
		if (!empty($title)) { echo $before_title . $title . $after_title; }		
		
		// Test: recuperar Personajes de un jugador
		echo '<p>Characters ('.$world.')</p>
				<ul>';
		foreach($characters as $character){
			echo '<li>'.$character->getName().'</li>';
		}
		echo '</ul>';
		
		// Recuperar Guilds de un jugador
		echo '<p>Guilds</p>
				<ul>';		
		foreach($guilds as $guild){
			echo '<li>'.$guild->getName(). ' - '.$guild->getId(). '</li>';
		}
		echo '</ul>';		
		
		// Recuperar Jugadores de una guild
		//  Mdt:  2A1C9F66-26E9-4618-9DE8-F8D9905F41C6
		echo '<p>Miembros</p>
			<ul>';			
		$miembrosMdt = $env->getClientVersion2()->apiGuildMembers('2A1C9F66-26E9-4618-9DE8-F8D9905F41C6');			
		foreach($miembrosMdt as $miembro){				
				echo '<li>'.$miembro['name']. '  ('.$miembro['rank'].')</li>';				
		}
		echo '</ul>';
				
		echo $after_widget;
	}


	/**
	 * Back-end widget form.
	 */
	public function form( $instance ) {
		if (isset( $instance['title'])) { $title = $instance[ 'title' ]; }
		else { $title = __('WvW Score', 'gw2-guild-manager'); }
		$world = esc_attr( $instance['world']);
		$lang = esc_attr($instance['lang']);
		$objectives = esc_attr($instance['objectives']);
		$cachedir = dirname(__FILE__).'/cache';
		if (substr(decoct(fileperms($cachedir)),2) != '777') { $gw2 = new Gw2SDK; }
		
		?>
		<p>
			<label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:', 'gw2-guild-manager'); ?></label> 
			<input name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" class="widefat" />
		</p>		
		<p>
			<label for="<?php echo $this->get_field_id('lang'); ?>"><?php _e('Language:', 'gw2-guild-manager'); ?> <small><?php _e('(English only temporarily)', 'gw2-guild-manager'); ?></small></label>
			<select name="<?php echo $this->get_field_name('lang'); ?>" id="<?php echo $this->get_field_id('lang'); ?>" class="widefat">
			<?php		
				$languages = array(
					"en" => array("lang_id" => "en", "lang_name" => __('English (EN)', 'gw2-guild-manager')),
					"fr" => array("lang_id" => "fr", "lang_name" => __('French (FR)', 'gw2-guild-manager')),
					"de" => array("lang_id" => "de", "lang_name" => __('German (DE)', 'gw2-guild-manager')),
					"es" => array("lang_id" => "es", "lang_name" => __('Spanish (SP)', 'gw2-guild-manager'))
				);
				foreach($languages as $lang) {
					?><option value="<?php echo $lang['lang_id']; ?>" <?php selected($instance['lang'], $lang['lang_id']); ?>><?php echo $lang['lang_name']; ?></option><?php	
				} 	
			?>
			</select>
		</p>		
		<p>
			<label for="<?php echo $this->get_field_id('world'); ?>"><?php _e('World:', 'gw2-guild-manager'); ?></label>
			<select name="<?php echo $this->get_field_name('world'); ?>" id="<?php echo $this->get_field_id('world'); ?>" class="widefat">
						
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('skin'); ?>"><?php _e('Skin:', 'gw2-guild-manager'); ?></label>
			<select name="<?php echo $this->get_field_name('skin'); ?>" id="<?php echo $this->get_field_id('skin'); ?>" class="widefat">
			<?php		
				$skins = array(
					"default" => array("skin_id" => "default", "skin_name" => __('Default', 'gw2-guild-manager')),
					"vivid-colors" => array("skin_id" => "vivid-colors", "skin_name" => __('Vivid Colors', 'gw2-guild-manager'))
				);
				foreach($skins as $skin) {
					?><option value="<?php echo $skin['skin_id']; ?>" <?php selected($instance['skin'], $skin['skin_id']); ?>><?php echo $skin['skin_name']; ?></option><?php	
				} 	
			?>
			</select>
		</p>
		<p>
			<input name="<?php echo $this->get_field_name('objectives'); ?>" id="<?php echo $this->get_field_id('objectives'); ?>" type="checkbox" value="1" <?php checked( '1', $objectives ); ?> />
			<label for="<?php echo $this->get_field_id('objectives'); ?>"><?php _e('Show objectives table?', 'gw2-guild-manager'); ?></label>
		</p> 
		<?php // Check the permission for the cache
		$cachedir = dirname(__FILE__).'/cache'; if (substr(decoct(fileperms($cachedir)),2) != '777') : ?>			
			<p style="background: red; color: #fff; padding: 5px; margin-top: 20px;"><?php echo sprintf(__('<b>IMPORTANT:</b> To reduce load time you should 
			look at the permissions on the folder "cache" in the plugin directory %s. You have to give write permissions (777).', 
			'gw2-guild-manager'), '"/wp-content/plugins/gw2-guild-manager/cache"'); ?></p>
		<?php endif; ?>
		<?php
	}


	/**
	 * Sanitize widget form values as they are saved.
	 */
	public function update($new_instance, $old_instance) {
		$instance = array();
		$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
		$instance['world'] = strip_tags($new_instance['world']);
		$instance['lang'] = strip_tags($new_instance['lang']);
		$instance['skin'] = strip_tags($new_instance['skin']);
		$instance['objectives'] = strip_tags($new_instance['objectives']);
		return $instance;
	}

}

// Load Widget - GW2 Guild Manager
add_action('widgets_init', function() { register_widget('gw2_guild_manager_widget'); } );