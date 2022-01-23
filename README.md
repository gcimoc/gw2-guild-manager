# gw2-guild-manager
Display the live data of Guild Wars 2.

== Description == 

Plugin for WordPress to display the live scores and objectives of Guild Wars 2.

Very simple to use, simply create a WIDGETS and drag it to your sidebars and select your favourite world!

The worlds, scores and objetives are fully translated into 4 languages ​​(English, German, French and Spanish)

The plugin refreshes its data by ArenaNet API 
https://wiki.guildwars2.com/wiki/API:2


Using Guild Wars 2 SDK for PHP.
Guild Wars 2 SDK is a PHP wrapper for the Guild Wars 2 API.
https://github.com/arnapou/gw2apiclient


= Requirements =

* PHP 5.3+
* cURL enabled


= Guild Wars 2 - Copyright =

©2010–2013 ArenaNet, LLC. and NC Interactive, LLC. All rights reserved. Guild Wars, Guild Wars 2, ArenaNet, NCSOFT, the Interlocking NC Logo, and all associated logos and designs are trademarks or registered trademarks of NCSOFT Corporation. All other trademarks are the property of their respective owners.

"Guild Wars 2 - Content Terms of Use"
https://www.guildwars2.com/en/legal/guild-wars-2-content-terms-of-use/


== Installation ==

1. Upload the `gw2-guild-manager` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin using the 'Plugins' menu in your WordPress admin panel.
1. You will find 'GW2 - Guild Manager' in your Widgets page on WordPress admin panel.
1. Drag the widget to where you want to have and set the world who want to appear to show the match with scores.

* If the load times on your website increases, you should look at the permissions on the folder 'cache' in the plugin directory `/wp-content/plugins/gw2-guild-manager`. You have to give write permissions (777).

= Requeriments =

* PHP 5.3+
* cURL enabled

== Frequently Asked Questions ==

= Increases load times slightly on its website after installing the plugin? =

If the load times on your website increases, you should look at the permissions on the folder 'cache' in the plugin directory `/wp-content/plugins/gw2-guild-manager/cache`. You have to give write permissions (777).

