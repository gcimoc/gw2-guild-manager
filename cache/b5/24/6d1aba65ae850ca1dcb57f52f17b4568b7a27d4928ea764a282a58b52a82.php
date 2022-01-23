<?php
/* key = https://api.guildwars2.com/v2/items?ids=43254%2C39551%2C37074%2C37085%2C39575%2C24618%2C44970%2C71130%2C46805%2C73532%2C17884%2C24605%2C26703%2C49308%2C42931%2C41807%2C74046%2C81254%2C21152%2C63717%2C24771%2C10635%2C10579%2C10614%2C10684%2C10544%2C10509%2C24027%2C24628%2C28362%2C24561%2C47522%2C15314%2C44947%2C81339%2C22992%2C22994%2C23007%2C21191%2C24815%2C78440%2C24543%2C78165%2C78391%2C78569%2C78241%2C78325%2C78554%2C78308%2C78186%2C78164%2C78239%2C24615%2C78637%2C78431%2C78442%2C78649%2C21207%2C21155%2C6459%2C6458%2C6461%2C6543%2C33349&lang=es */
$expires = 1642883408; // 2022-01-22 20:30:08
$data = array (
  'headers' => 
  array (
    0 => 'HTTP/1.1 200 OK',
    'date' => 'Sat, 22 Jan 2022 20:24:27 GMT',
    'content-type' => 'application/json; charset=utf-8',
    'content-length' => '71987',
    'connection' => 'keep-alive',
    'cache-control' => 'public,max-age=3600',
    'content-language' => 'es',
    'expires' => 'Sat, 22 Jan 2022 21:24:26 GMT',
    'server' => 'Quaggans',
    'x-result-total' => '61047',
    'x-result-count' => '64',
    'access-control-expose-headers' => 'X-Result-Total,X-Result-Count',
    'x-rate-limit-limit' => '600',
    'x-content-type-options' => 'nosniff, nosniff',
    'access-control-allow-origin' => '*',
    'x-powered-by' => 'ARR/2.5',
    'x-frame-options' => 'SAMEORIGIN',
    'x-xss-protection' => '1; mode=block',
    'strict-transport-security' => 'max-age=31536000; includeSubDomains; preload',
  ),
  'data' => 
  array (
    0 => 
    array (
      'name' => 'Infusión poderosa WvW',
      'description' => 'Haz doble clic para aplicarlo a una casilla de infusión sin usar.',
      'type' => 'UpgradeComponent',
      'level' => 0,
      'rarity' => 'Fine',
      'vendor_value' => 8,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'AccountBound',
        1 => 'NoMysticForge',
        2 => 'NoSalvage',
        3 => 'NoSell',
        4 => 'AccountBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 43254,
      'chat_link' => '[&AgH2qAAA]',
      'icon' => 'https://render.guildwars2.com/file/F1B068BFD7E6AC11ED90FE09CAB916F6D4DC2C63/587075.png',
      'details' => 
      array (
        'type' => 'Default',
        'flags' => 
        array (
          0 => 'ShortBow',
          1 => 'HeavyArmor',
          2 => 'LightArmor',
          3 => 'Dagger',
          4 => 'MediumArmor',
          5 => 'Focus',
          6 => 'Greatsword',
          7 => 'Hammer',
          8 => 'Trinket',
          9 => 'Harpoon',
          10 => 'Mace',
          11 => 'Pistol',
          12 => 'Rifle',
          13 => 'Scepter',
          14 => 'Shield',
          15 => 'Speargun',
          16 => 'Axe',
          17 => 'Staff',
          18 => 'Sword',
          19 => 'Torch',
          20 => 'Trident',
          21 => 'Warhorn',
          22 => 'LongBow',
        ),
        'infusion_upgrade_flags' => 
        array (
          0 => 'Infusion',
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 706,
          'buff' => 
          array (
            'skill_id' => 19063,
            'description' => '+5 potencia
+1 % daño a guardias, líderes y supervisores',
          ),
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 5,
            ),
          ),
        ),
        'suffix' => '',
      ),
    ),
    1 => 
    array (
      'name' => 'Tótem del gorila',
      'description' => '<c=@flavor>Un intrépido artista norn presentó sus respetos a un remoto espíritu de la naturaleza con esta talla.</c>',
      'type' => 'Trinket',
      'level' => 80,
      'rarity' => 'Ascended',
      'vendor_value' => 413,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'AccountBound',
        2 => 'NotUpgradeable',
        3 => 'Unique',
        4 => 'AccountBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 39551,
      'chat_link' => '[&AgF/mgAA]',
      'icon' => 'https://render.guildwars2.com/file/F94523012B513334626E47593E5C49BF1A25FE4F/543894.png',
      'details' => 
      array (
        'type' => 'Accessory',
        'infusion_slots' => 
        array (
          0 => 
          array (
            'flags' => 
            array (
              0 => 'Infusion',
            ),
          ),
        ),
        'attribute_adjustment' => 224.07,
        'infix_upgrade' => 
        array (
          'id' => 657,
          'buff' => 
          array (
            'skill_id' => 17070,
            'description' => '+32 Dureza
+18 Potencia
+18 Precisión',
          ),
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 74,
            ),
            1 => 
            array (
              'attribute' => 'Precision',
              'modifier' => 74,
            ),
            2 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 110,
            ),
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    2 => 
    array (
      'name' => 'Amuleto de Khilbron',
      'description' => '',
      'type' => 'Trinket',
      'level' => 80,
      'rarity' => 'Ascended',
      'vendor_value' => 495,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'AccountBound',
        2 => 'NotUpgradeable',
        3 => 'Unique',
        4 => 'AccountBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 37074,
      'chat_link' => '[&AgHSkAAA]',
      'icon' => 'https://render.guildwars2.com/file/55A6A999A52591BB7607421A13996D5DA6530780/511815.png',
      'details' => 
      array (
        'type' => 'Ring',
        'infusion_slots' => 
        array (
          0 => 
          array (
            'flags' => 
            array (
              0 => 'Infusion',
            ),
          ),
        ),
        'attribute_adjustment' => 268.884,
        'infix_upgrade' => 
        array (
          'id' => 585,
          'buff' => 
          array (
            'skill_id' => 15741,
            'description' => '+32 Daño de condición<br>+18 Precisión<br>+18 Dureza',
          ),
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Precision',
              'modifier' => 85,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 85,
            ),
            2 => 
            array (
              'attribute' => 'ConditionDamage',
              'modifier' => 126,
            ),
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
      'upgrades_into' => 
      array (
        0 => 
        array (
          'upgrade' => 'Infusion',
          'item_id' => 49401,
        ),
        1 => 
        array (
          'upgrade' => 'Attunement',
          'item_id' => 75471,
        ),
      ),
    ),
    3 => 
    array (
      'name' => 'Bucle Ouroboros',
      'description' => '',
      'type' => 'Trinket',
      'level' => 80,
      'rarity' => 'Ascended',
      'vendor_value' => 495,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'AccountBound',
        2 => 'NotUpgradeable',
        3 => 'Unique',
        4 => 'AccountBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 37085,
      'chat_link' => '[&AgHdkAAA]',
      'icon' => 'https://render.guildwars2.com/file/2ACFDD50233369F8CFAB75EDB8761DDDEBDD6AD2/511825.png',
      'details' => 
      array (
        'type' => 'Ring',
        'infusion_slots' => 
        array (
          0 => 
          array (
            'flags' => 
            array (
              0 => 'Infusion',
            ),
          ),
        ),
        'attribute_adjustment' => 268.884,
        'infix_upgrade' => 
        array (
          'id' => 585,
          'buff' => 
          array (
            'skill_id' => 15741,
            'description' => '+32 Daño de condición<br>+18 Precisión<br>+18 Dureza',
          ),
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Precision',
              'modifier' => 85,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 85,
            ),
            2 => 
            array (
              'attribute' => 'ConditionDamage',
              'modifier' => 126,
            ),
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
      'upgrades_into' => 
      array (
        0 => 
        array (
          'upgrade' => 'Infusion',
          'item_id' => 49400,
        ),
        1 => 
        array (
          'upgrade' => 'Attunement',
          'item_id' => 71592,
        ),
      ),
    ),
    4 => 
    array (
      'name' => 'Recuerdo de Osonorn',
      'description' => '<c=@flavor>Un recuerdo doloroso para Jora sobre la maldición de su hermano.</c>',
      'type' => 'Trinket',
      'level' => 80,
      'rarity' => 'Ascended',
      'vendor_value' => 660,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'AccountBound',
        2 => 'NotUpgradeable',
        3 => 'Unique',
        4 => 'AccountBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 39575,
      'chat_link' => '[&AgGXmgAA]',
      'icon' => 'https://render.guildwars2.com/file/C4737C6E6CC01DF2F896B70214545F05CD073952/543906.png',
      'details' => 
      array (
        'type' => 'Amulet',
        'infusion_slots' => 
        array (
          0 => 
          array (
            'flags' => 
            array (
              0 => 'Enrichment',
            ),
          ),
        ),
        'attribute_adjustment' => 358.512,
        'infix_upgrade' => 
        array (
          'id' => 658,
          'buff' => 
          array (
            'skill_id' => 17071,
            'description' => '+32 Precisión
+18 Potencia
+18 Daño de condición',
          ),
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 108,
            ),
            1 => 
            array (
              'attribute' => 'Precision',
              'modifier' => 157,
            ),
            2 => 
            array (
              'attribute' => 'ConditionDamage',
              'modifier' => 108,
            ),
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    5 => 
    array (
      'name' => 'Sello superior de precisión',
      'description' => '<c=@abilitytype>Elemento: </c>Mejora<br>Haz doble clic para aplicar a un arma.',
      'type' => 'UpgradeComponent',
      'level' => 60,
      'rarity' => 'Exotic',
      'vendor_value' => 216,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
      ),
      'restrictions' => 
      array (
      ),
      'id' => 24618,
      'chat_link' => '[&AgEqYAAA]',
      'icon' => 'https://render.guildwars2.com/file/4B0EFF29FD064E5E93E4F8616BE309A451450AED/220661.png',
      'details' => 
      array (
        'type' => 'Sigil',
        'flags' => 
        array (
          0 => 'ShortBow',
          1 => 'Dagger',
          2 => 'Focus',
          3 => 'Greatsword',
          4 => 'Hammer',
          5 => 'Harpoon',
          6 => 'Mace',
          7 => 'Pistol',
          8 => 'Rifle',
          9 => 'Scepter',
          10 => 'Shield',
          11 => 'Speargun',
          12 => 'Axe',
          13 => 'Staff',
          14 => 'Sword',
          15 => 'Torch',
          16 => 'Trident',
          17 => 'Warhorn',
          18 => 'LongBow',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 264,
          'buff' => 
          array (
            'skill_id' => 9325,
            'description' => '+7 % Probabilidad de daño crítico',
          ),
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'de precisión',
      ),
    ),
    6 => 
    array (
      'name' => 'X6-31 Beta',
      'type' => 'Weapon',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 396,
      'default_skin' => 4733,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 44970,
      'chat_link' => '[&AgGqrwAA]',
      'icon' => 'https://render.guildwars2.com/file/A35D93562760151EE1FEED525CDC7B4DEA74DEE9/619761.png',
      'details' => 
      array (
        'type' => 'Speargun',
        'damage_type' => 'Physical',
        'min_power' => 905,
        'max_power' => 1000,
        'defense' => 0,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 682.88,
        'infix_upgrade' => 
        array (
          'id' => 157,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 239,
            ),
            1 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 171,
            ),
            2 => 
            array (
              'attribute' => 'CritDamage',
              'modifier' => 171,
            ),
          ),
        ),
        'suffix_item_id' => 24618,
        'secondary_suffix_item_id' => '',
      ),
    ),
    7 => 
    array (
      'name' => 'Sello superior de inclemencia',
      'description' => '<c=@abilitytype>Elemento: </c>Control<br>Haz doble clic para aplicar a un arma.',
      'type' => 'UpgradeComponent',
      'level' => 60,
      'rarity' => 'Exotic',
      'vendor_value' => 216,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'AccountBound',
        2 => 'NoSell',
        3 => 'AccountBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 71130,
      'chat_link' => '[&AgHaFQEA]',
      'icon' => 'https://render.guildwars2.com/file/2ACE6E1BF2372CD3BEBE541666A7070BA90F5114/1201530.png',
      'details' => 
      array (
        'type' => 'Sigil',
        'flags' => 
        array (
          0 => 'ShortBow',
          1 => 'Dagger',
          2 => 'Focus',
          3 => 'Greatsword',
          4 => 'Hammer',
          5 => 'Harpoon',
          6 => 'Mace',
          7 => 'Pistol',
          8 => 'Rifle',
          9 => 'Scepter',
          10 => 'Shield',
          11 => 'Speargun',
          12 => 'Axe',
          13 => 'Staff',
          14 => 'Sword',
          15 => 'Torch',
          16 => 'Trident',
          17 => 'Warhorn',
          18 => 'LongBow',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 1127,
          'buff' => 
          array (
            'skill_id' => 32496,
            'description' => 'Ganas 5 acumulaciones de poder durante 10 segundos al interrumpir a un enemigo. <c=@reminder>(Recarga: 3 segundos)</c>',
          ),
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'de inclemencia',
      ),
    ),
    8 => 
    array (
      'name' => 'Revólver de Hiendepiedras',
      'description' => '<c=@flavor>Fabricada siguiendo el estilo del gran maestro masón Hiendepiedras, el antiguo armero enano.</c>',
      'type' => 'Weapon',
      'level' => 80,
      'rarity' => 'Ascended',
      'vendor_value' => 10000,
      'default_skin' => 4169,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'AccountBound',
        2 => 'AccountBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 46805,
      'chat_link' => '[&AgHVtgAA]',
      'icon' => 'https://render.guildwars2.com/file/51217142E12EB2FE19B1DB1CAE4F1D275CC9EA03/631608.png',
      'details' => 
      array (
        'type' => 'Pistol',
        'damage_type' => 'Physical',
        'min_power' => 920,
        'max_power' => 1080,
        'defense' => 0,
        'infusion_slots' => 
        array (
          0 => 
          array (
            'flags' => 
            array (
              0 => 'Infusion',
            ),
          ),
        ),
        'attribute_adjustment' => 358.512,
        'infix_upgrade' => 
        array (
          'id' => 157,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 125,
            ),
            1 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 90,
            ),
            2 => 
            array (
              'attribute' => 'CritDamage',
              'modifier' => 90,
            ),
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    9 => 
    array (
      'name' => 'Sello superior de desgarro',
      'description' => '<c=@abilitytype>Elemento: </c>Mejora<br>Haz doble clic para aplicar a un arma.',
      'type' => 'UpgradeComponent',
      'level' => 60,
      'rarity' => 'Exotic',
      'vendor_value' => 216,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'AccountBound',
        2 => 'NoSell',
        3 => 'AccountBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 73532,
      'chat_link' => '[&AgE8HwEA]',
      'icon' => 'https://render.guildwars2.com/file/0B0BEB4BB555DB4D29019E8052ABF34CA91DB11C/1201536.png',
      'details' => 
      array (
        'type' => 'Sigil',
        'flags' => 
        array (
          0 => 'ShortBow',
          1 => 'Dagger',
          2 => 'Focus',
          3 => 'Greatsword',
          4 => 'Hammer',
          5 => 'Harpoon',
          6 => 'Mace',
          7 => 'Pistol',
          8 => 'Rifle',
          9 => 'Scepter',
          10 => 'Shield',
          11 => 'Speargun',
          12 => 'Axe',
          13 => 'Staff',
          14 => 'Sword',
          15 => 'Torch',
          16 => 'Trident',
          17 => 'Warhorn',
          18 => 'LongBow',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 1117,
          'buff' => 
          array (
            'skill_id' => 32673,
            'description' => 'Infliges 5 acumulaciones de vulnerabilidad durante 10 segundos al interrumpir a un enemigo. <c=@reminder>(Recarga: 3 segundos)</c>',
          ),
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'de desgarro',
      ),
    ),
    10 => 
    array (
      'name' => 'Escudo de la Profundidad del Dragón',
      'description' => '',
      'type' => 'Weapon',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 264,
      'default_skin' => 4434,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'AccountBound',
        1 => 'NoSell',
        2 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 17884,
      'chat_link' => '[&AgHcRQAA]',
      'icon' => 'https://render.guildwars2.com/file/6BFB096CC6F27DD493AD091C436F6D970FE7F6D4/455751.png',
      'details' => 
      array (
        'type' => 'Shield',
        'damage_type' => 'Physical',
        'min_power' => 806,
        'max_power' => 909,
        'defense' => 61,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 341.44,
        'infix_upgrade' => 
        array (
          'id' => 161,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 120,
            ),
            1 => 
            array (
              'attribute' => 'Precision',
              'modifier' => 85,
            ),
            2 => 
            array (
              'attribute' => 'CritDamage',
              'modifier' => 85,
            ),
          ),
        ),
        'suffix_item_id' => 24641,
        'secondary_suffix_item_id' => '',
      ),
    ),
    11 => 
    array (
      'name' => 'Sello superior de geomancia',
      'description' => '<c=@abilitytype>Elemento: </c>Dolor<br>Haz doble clic para aplicar a un arma.',
      'type' => 'UpgradeComponent',
      'level' => 60,
      'rarity' => 'Exotic',
      'vendor_value' => 216,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
      ),
      'restrictions' => 
      array (
      ),
      'id' => 24605,
      'chat_link' => '[&AgEdYAAA]',
      'icon' => 'https://render.guildwars2.com/file/B79B430645DDF54E6792909A52F5CA40A4911407/220687.png',
      'details' => 
      array (
        'type' => 'Sigil',
        'flags' => 
        array (
          0 => 'ShortBow',
          1 => 'Dagger',
          2 => 'Focus',
          3 => 'Greatsword',
          4 => 'Hammer',
          5 => 'Harpoon',
          6 => 'Mace',
          7 => 'Pistol',
          8 => 'Rifle',
          9 => 'Scepter',
          10 => 'Shield',
          11 => 'Speargun',
          12 => 'Axe',
          13 => 'Staff',
          14 => 'Sword',
          15 => 'Torch',
          16 => 'Trident',
          17 => 'Warhorn',
          18 => 'LongBow',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 251,
          'buff' => 
          array (
            'skill_id' => 9436,
            'description' => 'Infliges hemorragia durante 8 segundos a los enemigos cercanos tras cambiar a esta arma en combate. <br><c=@reminder>(Recarga: 9 segundos)</c>',
          ),
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'del geomante',
      ),
    ),
    12 => 
    array (
      'name' => 'Brandt',
      'description' => '',
      'type' => 'Weapon',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 264,
      'default_skin' => 5059,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 26703,
      'chat_link' => '[&AgFPaAAA]',
      'icon' => 'https://render.guildwars2.com/file/44095552C10BF50B51377FDFBE561A924E73A7FD/67672.png',
      'details' => 
      array (
        'type' => 'Pistol',
        'damage_type' => 'Physical',
        'min_power' => 876,
        'max_power' => 1029,
        'defense' => 0,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 341.44,
        'infix_upgrade' => 
        array (
          'id' => 160,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 85,
            ),
            1 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 85,
            ),
            2 => 
            array (
              'attribute' => 'ConditionDamage',
              'modifier' => 120,
            ),
          ),
        ),
        'suffix_item_id' => 24600,
        'secondary_suffix_item_id' => '',
      ),
    ),
    13 => 
    array (
      'name' => 'Trillahoz 5000',
      'description' => 'Se usa para cosechar todas las plantas. Uso ilimitado.',
      'type' => 'Gathering',
      'level' => 0,
      'rarity' => 'Rare',
      'vendor_value' => 0,
      'game_types' => 
      array (
        0 => 'PvpLobby',
        1 => 'Activity',
        2 => 'Wvw',
        3 => 'Dungeon',
        4 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'AccountBound',
        2 => 'NoSalvage',
        3 => 'NoSell',
        4 => 'DeleteWarning',
        5 => 'AccountBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 49308,
      'chat_link' => '[&AgGcwAAA]',
      'icon' => 'https://render.guildwars2.com/file/F1C5657FB4F6F269E4763FA754055C9A4D127311/740325.png',
      'details' => 
      array (
        'type' => 'Foraging',
      ),
    ),
    14 => 
    array (
      'name' => 'Hacha de talar cortalotodo',
      'description' => 'Ideal para todo tipo de árboles. Uso ilimitado.',
      'type' => 'Gathering',
      'level' => 0,
      'rarity' => 'Rare',
      'vendor_value' => 192,
      'game_types' => 
      array (
        0 => 'PvpLobby',
        1 => 'Activity',
        2 => 'Wvw',
        3 => 'Dungeon',
        4 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'AccountBound',
        2 => 'NoSalvage',
        3 => 'NoSell',
        4 => 'NotUpgradeable',
        5 => 'DeleteWarning',
        6 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 42931,
      'chat_link' => '[&AgGzpwAA]',
      'icon' => 'https://render.guildwars2.com/file/15CF97BA7DC573E2BCA852FF1364721B98531470/598608.png',
      'details' => 
      array (
        'type' => 'Logging',
      ),
    ),
    15 => 
    array (
      'name' => 'Pico de minería de la Alianza Fundida',
      'description' => 'Sirve para extraer todo tipo de metales. Uso ilimitado.',
      'type' => 'Gathering',
      'level' => 0,
      'rarity' => 'Rare',
      'vendor_value' => 192,
      'game_types' => 
      array (
        0 => 'PvpLobby',
        1 => 'Activity',
        2 => 'Wvw',
        3 => 'Dungeon',
        4 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'AccountBound',
        2 => 'NoSalvage',
        3 => 'NoSell',
        4 => 'NotUpgradeable',
        5 => 'DeleteWarning',
        6 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 41807,
      'chat_link' => '[&AgFPowAA]',
      'icon' => 'https://render.guildwars2.com/file/ACF90CA6BCD9CEEFD4D0DCEF2AA87C97B50BDC56/561815.png',
      'details' => 
      array (
        'type' => 'Mining',
      ),
    ),
    16 => 
    array (
      'name' => 'Runa de liderazgo',
      'description' => 'Haz doble clic para aplicar a una armadura.',
      'type' => 'UpgradeComponent',
      'level' => 0,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'game_types' => 
      array (
        0 => 'Pvp',
        1 => 'PvpLobby',
      ),
      'flags' => 
      array (
        0 => 'NoSalvage',
        1 => 'NoSell',
        2 => 'SoulbindOnAcquire',
        3 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 74046,
      'chat_link' => '[&AgE+IQEA]',
      'icon' => 'https://render.guildwars2.com/file/0CD614069C9917057D1BEC5B060E689E18E8EE51/1201517.png',
      'details' => 
      array (
        'type' => 'Default',
        'flags' => 
        array (
          0 => 'HeavyArmor',
          1 => 'LightArmor',
          2 => 'MediumArmor',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'bonuses' => 
        array (
          0 => '+8 a todas las estadísticas',
          1 => '+2 % Duración de bendición',
          2 => '+12 a todas las estadísticas',
          3 => '+3 % Duración de bendición',
          4 => '+16 a todas las estadísticas',
          5 => '+5 % de duración de bendición; al usar una habilidad de élite conviertes hasta 2 condiciones en bendiciones para los aliados cercanos. <c=@reminder>(Recarga: 45 segundos)</c>',
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 112,
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'de liderazgo',
      ),
    ),
    17 => 
    array (
      'name' => 'Sello de purificación',
      'type' => 'UpgradeComponent',
      'level' => 0,
      'rarity' => 'Exotic',
      'vendor_value' => 216,
      'game_types' => 
      array (
        0 => 'Pvp',
        1 => 'PvpLobby',
      ),
      'flags' => 
      array (
        0 => 'NoSalvage',
        1 => 'NoSell',
        2 => 'SoulbindOnAcquire',
        3 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 81254,
      'chat_link' => '[&AgFmPQEA]',
      'icon' => 'https://render.guildwars2.com/file/207299F19E3DA1BB9E5F037D277DA2933FD2D65E/1691865.png',
      'details' => 
      array (
        'type' => 'Default',
        'flags' => 
        array (
          0 => 'ShortBow',
          1 => 'Dagger',
          2 => 'Focus',
          3 => 'Greatsword',
          4 => 'Hammer',
          5 => 'Harpoon',
          6 => 'Mace',
          7 => 'Pistol',
          8 => 'Rifle',
          9 => 'Scepter',
          10 => 'Shield',
          11 => 'Speargun',
          12 => 'Axe',
          13 => 'Staff',
          14 => 'Sword',
          15 => 'Torch',
          16 => 'Trident',
          17 => 'Warhorn',
          18 => 'LongBow',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 1247,
          'buff' => 
          array (
            'skill_id' => 38731,
            'description' => 'Eliminas una condición tras cambiar a esta arma durante el combate. <c=@reminder>(Recarga: 9 segundos)</c>',
          ),
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'de purificación',
      ),
    ),
    18 => 
    array (
      'name' => 'Sello de energía',
      'type' => 'UpgradeComponent',
      'level' => 0,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'game_types' => 
      array (
        0 => 'Pvp',
        1 => 'PvpLobby',
      ),
      'flags' => 
      array (
        0 => 'NoSalvage',
        1 => 'NoSell',
        2 => 'SoulbindOnAcquire',
        3 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 21152,
      'chat_link' => '[&AgGgUgAA]',
      'icon' => 'https://render.guildwars2.com/file/3A064B97AB7D0E1F1250EFB5F06798A8FE623708/220688.png',
      'details' => 
      array (
        'type' => 'Default',
        'flags' => 
        array (
          0 => 'ShortBow',
          1 => 'Dagger',
          2 => 'Focus',
          3 => 'Greatsword',
          4 => 'Hammer',
          5 => 'Harpoon',
          6 => 'Mace',
          7 => 'Pistol',
          8 => 'Rifle',
          9 => 'Scepter',
          10 => 'Shield',
          11 => 'Speargun',
          12 => 'Axe',
          13 => 'Staff',
          14 => 'Sword',
          15 => 'Torch',
          16 => 'Trident',
          17 => 'Warhorn',
          18 => 'LongBow',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 1177,
          'buff' => 
          array (
            'skill_id' => 34258,
            'description' => 'Gana un 25 % de tu aguante al cambiar a esta arma durante el combate. <c=@reminder>(Recarga: 9 segundos)</c>',
          ),
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'de la energía',
      ),
    ),
    19 => 
    array (
      'name' => 'Correas de preparación para mochila',
      'description' => 'Las correas más cómodas que hay disponibles.',
      'type' => 'Back',
      'level' => 0,
      'rarity' => 'Masterwork',
      'vendor_value' => 1,
      'default_skin' => 2327,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'AccountBound',
        1 => 'NoMysticForge',
        2 => 'NoSalvage',
        3 => 'NoSell',
        4 => 'NotUpgradeable',
        5 => 'AccountBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 63717,
      'chat_link' => '[&AgHl+AAA]',
      'icon' => 'https://render.guildwars2.com/file/BECDA349B3A9D13BA312452C33E4EF21492CB2EB/543792.png',
      'details' => 
      array (
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 2.958,
        'infix_upgrade' => 
        array (
          'id' => 137,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 1,
            ),
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    20 => 
    array (
      'name' => 'Runa superior de Melandru',
      'description' => '<c=@abilitytype>Elemento: </c>Potencia<br>Haz doble clic para aplicar a una armadura.',
      'type' => 'UpgradeComponent',
      'level' => 60,
      'rarity' => 'Exotic',
      'vendor_value' => 216,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
      ),
      'restrictions' => 
      array (
      ),
      'id' => 24771,
      'chat_link' => '[&AgHDYAAA]',
      'icon' => 'https://render.guildwars2.com/file/66A56E6838D707BBBAD0B8D0091425502F7E3AF4/220714.png',
      'details' => 
      array (
        'type' => 'Rune',
        'flags' => 
        array (
          0 => 'HeavyArmor',
          1 => 'LightArmor',
          2 => 'MediumArmor',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'bonuses' => 
        array (
          0 => '+25 Dureza',
          1 => '+35 Vitalidad',
          2 => '+50 Dureza',
          3 => '-10 % Duración de condición recibida',
          4 => '+100 Dureza',
          5 => '-10 % de duración de condición recibida; -20 % de duración de aturdimiento recibido',
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 112,
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'de Melandru',
      ),
    ),
    21 => 
    array (
      'name' => 'Abrigo dracónico de berserker',
      'description' => '',
      'type' => 'Armor',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 240,
      'default_skin' => 131,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 10635,
      'chat_link' => '[&AgGLKQAA]',
      'icon' => 'https://render.guildwars2.com/file/E7FC2F5D02DBA0EE089BC615A5D2F1DFCFE6185F/61563.png',
      'details' => 
      array (
        'type' => 'Coat',
        'weight_class' => 'Heavy',
        'defense' => 363,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 384.12,
        'infix_upgrade' => 
        array (
          'id' => 161,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 134,
            ),
            1 => 
            array (
              'attribute' => 'Precision',
              'modifier' => 96,
            ),
            2 => 
            array (
              'attribute' => 'CritDamage',
              'modifier' => 96,
            ),
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    22 => 
    array (
      'name' => 'Botas dracónicas de berserker',
      'description' => '',
      'type' => 'Armor',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 240,
      'default_skin' => 140,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 10579,
      'chat_link' => '[&AgFTKQAA]',
      'icon' => 'https://render.guildwars2.com/file/ABA5149ABEFE50D5F460E5CF6D50A81D09435091/61562.png',
      'details' => 
      array (
        'type' => 'Boots',
        'weight_class' => 'Heavy',
        'defense' => 182,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 128.04,
        'infix_upgrade' => 
        array (
          'id' => 161,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 45,
            ),
            1 => 
            array (
              'attribute' => 'Precision',
              'modifier' => 32,
            ),
            2 => 
            array (
              'attribute' => 'CritDamage',
              'modifier' => 32,
            ),
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    23 => 
    array (
      'name' => 'Guanteletes dracónicos de berserker',
      'description' => '',
      'type' => 'Armor',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 240,
      'default_skin' => 246,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 10614,
      'chat_link' => '[&AgF2KQAA]',
      'icon' => 'https://render.guildwars2.com/file/0AAAED031F08DDAF665339E8DC060D2BFDE60C7B/61564.png',
      'details' => 
      array (
        'type' => 'Gloves',
        'weight_class' => 'Heavy',
        'defense' => 182,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 128.04,
        'infix_upgrade' => 
        array (
          'id' => 161,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 45,
            ),
            1 => 
            array (
              'attribute' => 'Precision',
              'modifier' => 32,
            ),
            2 => 
            array (
              'attribute' => 'CritDamage',
              'modifier' => 32,
            ),
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    24 => 
    array (
      'name' => 'Yelmo dracónico de berserker',
      'description' => '',
      'type' => 'Armor',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 240,
      'default_skin' => 152,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 10684,
      'chat_link' => '[&AgG8KQAA]',
      'icon' => 'https://render.guildwars2.com/file/0CDB4F0534D023449B6202B3566E23F4B8C10CE6/61565.png',
      'details' => 
      array (
        'type' => 'Helm',
        'weight_class' => 'Heavy',
        'defense' => 121,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 170.72,
        'infix_upgrade' => 
        array (
          'id' => 161,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 60,
            ),
            1 => 
            array (
              'attribute' => 'Precision',
              'modifier' => 43,
            ),
            2 => 
            array (
              'attribute' => 'CritDamage',
              'modifier' => 43,
            ),
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    25 => 
    array (
      'name' => 'Espinilleras dracónicas de berserker',
      'description' => '',
      'type' => 'Armor',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 240,
      'default_skin' => 132,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 10544,
      'chat_link' => '[&AgEwKQAA]',
      'icon' => 'https://render.guildwars2.com/file/5B4F503619F5F5C659E961E76E290BAB6F234816/61566.png',
      'details' => 
      array (
        'type' => 'Leggings',
        'weight_class' => 'Heavy',
        'defense' => 242,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 256.08,
        'infix_upgrade' => 
        array (
          'id' => 161,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 90,
            ),
            1 => 
            array (
              'attribute' => 'Precision',
              'modifier' => 64,
            ),
            2 => 
            array (
              'attribute' => 'CritDamage',
              'modifier' => 64,
            ),
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    26 => 
    array (
      'name' => 'Hombreras dracónicas de berserker',
      'description' => '',
      'type' => 'Armor',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 240,
      'default_skin' => 138,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 10509,
      'chat_link' => '[&AgENKQAA]',
      'icon' => 'https://render.guildwars2.com/file/9A1A03AA6818EACB1E63B43F06150925484B200D/61567.png',
      'details' => 
      array (
        'type' => 'Shoulders',
        'weight_class' => 'Heavy',
        'defense' => 121,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 128.04,
        'infix_upgrade' => 
        array (
          'id' => 161,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 45,
            ),
            1 => 
            array (
              'attribute' => 'Precision',
              'modifier' => 32,
            ),
            2 => 
            array (
              'attribute' => 'CritDamage',
              'modifier' => 32,
            ),
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    27 => 
    array (
      'name' => 'Accesorio de invasor',
      'description' => '',
      'type' => 'Trinket',
      'level' => 80,
      'rarity' => 'Rare',
      'vendor_value' => 3790,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'SoulbindOnAcquire',
        4 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 24027,
      'chat_link' => '[&AgHbXQAA]',
      'icon' => 'https://render.guildwars2.com/file/F4486E0A6651C27F5D720CFF30D8A9CA33A855C7/66808.png',
      'details' => 
      array (
        'type' => 'Accessory',
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 188.64,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 66,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 47,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 47,
            ),
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    28 => 
    array (
      'name' => 'Sello menor de congelación',
      'description' => '<c=@abilitytype>Elemento: </c>Mejora<br>Haz doble clic para aplicar a un arma.',
      'type' => 'UpgradeComponent',
      'level' => 0,
      'rarity' => 'Masterwork',
      'vendor_value' => 16,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
      ),
      'restrictions' => 
      array (
      ),
      'id' => 24628,
      'chat_link' => '[&AgE0YAAA]',
      'icon' => 'https://render.guildwars2.com/file/4FD122E5B800B308FC962558D302191C37B80B33/221020.png',
      'details' => 
      array (
        'type' => 'Sigil',
        'flags' => 
        array (
          0 => 'ShortBow',
          1 => 'Dagger',
          2 => 'Focus',
          3 => 'Greatsword',
          4 => 'Hammer',
          5 => 'Harpoon',
          6 => 'Mace',
          7 => 'Pistol',
          8 => 'Rifle',
          9 => 'Scepter',
          10 => 'Shield',
          11 => 'Speargun',
          12 => 'Axe',
          13 => 'Staff',
          14 => 'Sword',
          15 => 'Torch',
          16 => 'Trident',
          17 => 'Warhorn',
          18 => 'LongBow',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 274,
          'buff' => 
          array (
            'skill_id' => 9303,
            'description' => 'Aumenta la duración de congelación: 10 %',
          ),
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'de congelación',
      ),
    ),
    29 => 
    array (
      'name' => 'Fusil submarino de vapor de congelación de violento',
      'description' => '',
      'type' => 'Weapon',
      'level' => 78,
      'rarity' => 'Masterwork',
      'vendor_value' => 192,
      'default_skin' => 5091,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 28362,
      'chat_link' => '[&AgHKbgAA]',
      'icon' => 'https://render.guildwars2.com/file/935CD7A5037BB9F3C46E0D770D2DD9730ED74A18/62495.png',
      'details' => 
      array (
        'type' => 'Speargun',
        'damage_type' => 'Physical',
        'min_power' => 721,
        'max_power' => 797,
        'defense' => 0,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 539.376,
        'infix_upgrade' => 
        array (
          'id' => 159,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 135,
            ),
            1 => 
            array (
              'attribute' => 'Precision',
              'modifier' => 189,
            ),
            2 => 
            array (
              'attribute' => 'ConditionDamage',
              'modifier' => 135,
            ),
          ),
        ),
        'suffix_item_id' => 24628,
        'secondary_suffix_item_id' => '',
      ),
    ),
    30 => 
    array (
      'name' => 'Sello superior de rabia',
      'description' => '<c=@abilitytype>Elemento: </c>Mejora<br>Haz doble clic para aplicar a un arma.',
      'type' => 'UpgradeComponent',
      'level' => 60,
      'rarity' => 'Exotic',
      'vendor_value' => 216,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
      ),
      'restrictions' => 
      array (
      ),
      'id' => 24561,
      'chat_link' => '[&AgHxXwAA]',
      'icon' => 'https://render.guildwars2.com/file/15310B48271FC15332C65C5E02FEC4FFF298B652/220679.png',
      'details' => 
      array (
        'type' => 'Sigil',
        'flags' => 
        array (
          0 => 'ShortBow',
          1 => 'Dagger',
          2 => 'Focus',
          3 => 'Greatsword',
          4 => 'Hammer',
          5 => 'Harpoon',
          6 => 'Mace',
          7 => 'Pistol',
          8 => 'Rifle',
          9 => 'Scepter',
          10 => 'Shield',
          11 => 'Speargun',
          12 => 'Axe',
          13 => 'Staff',
          14 => 'Sword',
          15 => 'Torch',
          16 => 'Trident',
          17 => 'Warhorn',
          18 => 'LongBow',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 204,
          'buff' => 
          array (
            'skill_id' => 9295,
            'description' => 'Ganas rapidez durante 3 segundos al conseguir un impacto crítico contra un enemigo. <br><c=@reminder>(Recarga: 20 segundos)</c>',
          ),
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'de rabia',
      ),
    ),
    31 => 
    array (
      'name' => 'Martillo ceremonial de rabia nefasto',
      'type' => 'Weapon',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 396,
      'default_skin' => 5221,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 47522,
      'chat_link' => '[&AgGiuQAA]',
      'icon' => 'https://render.guildwars2.com/file/325369BAAD4D68091CA26C1BC5FDB109B258DC13/534095.png',
      'details' => 
      array (
        'type' => 'Hammer',
        'damage_type' => 'Physical',
        'min_power' => 985,
        'max_power' => 1111,
        'defense' => 0,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 682.88,
        'infix_upgrade' => 
        array (
          'id' => 754,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 171,
            ),
            1 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 171,
            ),
            2 => 
            array (
              'attribute' => 'ConditionDamage',
              'modifier' => 239,
            ),
          ),
        ),
        'suffix_item_id' => 24561,
        'secondary_suffix_item_id' => '',
      ),
    ),
    32 => 
    array (
      'name' => 'Sable perlado de berserker',
      'description' => '',
      'type' => 'Weapon',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 264,
      'default_skin' => 4112,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 15314,
      'chat_link' => '[&AgHSOwAA]',
      'icon' => 'https://render.guildwars2.com/file/9BBF12452129E90C7FD30C0EF60A630A507ECDEF/67808.png',
      'details' => 
      array (
        'type' => 'Sword',
        'damage_type' => 'Physical',
        'min_power' => 905,
        'max_power' => 1000,
        'defense' => 0,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 341.44,
        'infix_upgrade' => 
        array (
          'id' => 161,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 120,
            ),
            1 => 
            array (
              'attribute' => 'Precision',
              'modifier' => 85,
            ),
            2 => 
            array (
              'attribute' => 'CritDamage',
              'modifier' => 85,
            ),
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    33 => 
    array (
      'name' => 'Sello superior de renovación',
      'description' => '<c=@abilitytype>Elemento: </c>Control<br>Haz doble clic para aplicar a un arma.',
      'type' => 'UpgradeComponent',
      'level' => 60,
      'rarity' => 'Exotic',
      'vendor_value' => 216,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
      ),
      'restrictions' => 
      array (
      ),
      'id' => 44947,
      'chat_link' => '[&AgGTrwAA]',
      'icon' => 'https://render.guildwars2.com/file/F3F0730D5FEE09A7340E2E24E35A7AF304EDAAB7/619706.png',
      'details' => 
      array (
        'type' => 'Sigil',
        'flags' => 
        array (
          0 => 'ShortBow',
          1 => 'Dagger',
          2 => 'Focus',
          3 => 'Greatsword',
          4 => 'Hammer',
          5 => 'Harpoon',
          6 => 'Mace',
          7 => 'Pistol',
          8 => 'Rifle',
          9 => 'Scepter',
          10 => 'Shield',
          11 => 'Speargun',
          12 => 'Axe',
          13 => 'Staff',
          14 => 'Sword',
          15 => 'Torch',
          16 => 'Trident',
          17 => 'Warhorn',
          18 => 'LongBow',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 749,
          'buff' => 
          array (
            'skill_id' => 20471,
            'description' => 'Cura a los aliados cercanos al cambiar de arma (radio de 360) <br><c=@reminder>(Recarga: 9 segundos)</c>',
          ),
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'de renovación',
      ),
    ),
    34 => 
    array (
      'name' => 'Escudo de héroe forjado en la Niebla',
      'type' => 'Weapon',
      'level' => 80,
      'rarity' => 'Ascended',
      'vendor_value' => 0,
      'default_skin' => 5412,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'AccountBound',
        1 => 'NoSell',
        2 => 'DeleteWarning',
        3 => 'AccountBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 81339,
      'chat_link' => '[&AgG7PQEA]',
      'icon' => 'https://render.guildwars2.com/file/0AEA05B99154046832297711C63B0293E37D0178/819625.png',
      'details' => 
      array (
        'type' => 'Shield',
        'damage_type' => 'Physical',
        'min_power' => 846,
        'max_power' => 954,
        'defense' => 64,
        'infusion_slots' => 
        array (
          0 => 
          array (
            'flags' => 
            array (
              0 => 'Infusion',
            ),
          ),
        ),
        'attribute_adjustment' => 358.512,
        'secondary_suffix_item_id' => '',
        'stat_choices' => 
        array (
          0 => 161,
          1 => 155,
          2 => 159,
          3 => 157,
          4 => 158,
          5 => 160,
          6 => 153,
          7 => 605,
          8 => 700,
          9 => 616,
          10 => 154,
          11 => 156,
          12 => 162,
          13 => 686,
          14 => 559,
          15 => 754,
          16 => 753,
          17 => 799,
          18 => 1026,
          19 => 1067,
          20 => 628,
          21 => 1032,
          22 => 1231,
          23 => 1232,
          24 => 1226,
          25 => 1225,
          26 => 1229,
          27 => 1224,
          28 => 1228,
          29 => 1227,
          30 => 1230,
          31 => 1379,
          32 => 1377,
          33 => 1378,
          34 => 1484,
          35 => 1539,
        ),
      ),
    ),
    35 => 
    array (
      'name' => 'Hoz de recolección de hierro',
      'description' => 'Sirve para recolectar raíces gruesas, espinacas, fresas, brotes de hierbas y otras plantas menores comestibles. También sirve para abrir almejas.',
      'type' => 'Gathering',
      'level' => 10,
      'rarity' => 'Basic',
      'vendor_value' => 7,
      'game_types' => 
      array (
        0 => 'PvpLobby',
        1 => 'Activity',
        2 => 'Wvw',
        3 => 'Dungeon',
        4 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'AccountBound',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'AccountBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 22992,
      'chat_link' => '[&AgHQWQAA]',
      'icon' => 'https://render.guildwars2.com/file/AA1BD042F1EAB6A0F5D614DC6113E356C4B836C1/66591.png',
      'details' => 
      array (
        'type' => 'Foraging',
      ),
    ),
    36 => 
    array (
      'name' => 'Hacha de talar de hierro',
      'description' => 'Se usa para cortar pimpollos de gummo, mimosa, cerezo de las nieves y otras variedades menores.',
      'type' => 'Gathering',
      'level' => 10,
      'rarity' => 'Basic',
      'vendor_value' => 7,
      'game_types' => 
      array (
        0 => 'PvpLobby',
        1 => 'Activity',
        2 => 'Wvw',
        3 => 'Dungeon',
        4 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'AccountBound',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'AccountBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 22994,
      'chat_link' => '[&AgHSWQAA]',
      'icon' => 'https://render.guildwars2.com/file/201CC6E60448CB4BA8AD919C74904EE1F9AEC54F/66597.png',
      'details' => 
      array (
        'type' => 'Logging',
      ),
    ),
    37 => 
    array (
      'name' => 'Pico de minería de aceroscuro',
      'description' => 'Sirve para extraer mineral de platino y otros metales menores.',
      'type' => 'Gathering',
      'level' => 30,
      'rarity' => 'Basic',
      'vendor_value' => 15,
      'game_types' => 
      array (
        0 => 'PvpLobby',
        1 => 'Activity',
        2 => 'Wvw',
        3 => 'Dungeon',
        4 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'AccountBound',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'AccountBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 23007,
      'chat_link' => '[&AgHfWQAA]',
      'icon' => 'https://render.guildwars2.com/file/3CD995B576C8CB39B02D4826EA04690701755ECB/66254.png',
      'details' => 
      array (
        'type' => 'Mining',
      ),
    ),
    38 => 
    array (
      'name' => 'Runa de Lyssa',
      'description' => 'Haz doble clic para aplicar a una armadura.',
      'type' => 'UpgradeComponent',
      'level' => 0,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'game_types' => 
      array (
        0 => 'Pvp',
        1 => 'PvpLobby',
      ),
      'flags' => 
      array (
        0 => 'NoSalvage',
        1 => 'NoSell',
        2 => 'SoulbindOnAcquire',
        3 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 21191,
      'chat_link' => '[&AgHHUgAA]',
      'icon' => 'https://render.guildwars2.com/file/0A5ED9EE533DC7116A7D50EAAECD5A1FF024ACFE/220713.png',
      'details' => 
      array (
        'type' => 'Default',
        'flags' => 
        array (
          0 => 'HeavyArmor',
          1 => 'LightArmor',
          2 => 'MediumArmor',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'bonuses' => 
        array (
          0 => '+25 Precisión',
          1 => '+2 % Duración de condición',
          2 => '+50 Precisión',
          3 => '+3 % Duración de bendición',
          4 => '+100 Precisión',
          5 => '+5 % de duración de condición; al usar una habilidad de élite conviertes hasta 3 condiciones en bendiciones. <c=@reminder>(Recarga: 45 segundos)</c>',
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 112,
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'de Lyssa',
      ),
    ),
    39 => 
    array (
      'name' => 'Runa superior del guardabosques',
      'description' => '<c=@abilitytype>Elemento: </c>Habilidad<br>Haz doble clic para aplicar a una armadura.',
      'type' => 'UpgradeComponent',
      'level' => 60,
      'rarity' => 'Exotic',
      'vendor_value' => 65,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
      ),
      'restrictions' => 
      array (
      ),
      'id' => 24815,
      'chat_link' => '[&AgHvYAAA]',
      'icon' => 'https://render.guildwars2.com/file/74190770191950B5CD9439B93B487816959E9D3B/220729.png',
      'details' => 
      array (
        'type' => 'Rune',
        'flags' => 
        array (
          0 => 'HeavyArmor',
          1 => 'LightArmor',
          2 => 'MediumArmor',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'bonuses' => 
        array (
          0 => '+25 Precisión',
          1 => '+35 Ferocidad',
          2 => '+50 Precisión',
          3 => '+65 Ferocidad',
          4 => '+100 Precisión',
          5 => '+7 % Daño mientras tengas un compañero activo.',
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 112,
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'del guardabosques',
      ),
    ),
    40 => 
    array (
      'name' => 'Respirador submarino de metal',
      'type' => 'Armor',
      'level' => 80,
      'rarity' => 'Masterwork',
      'vendor_value' => 165,
      'default_skin' => 856,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'NoMysticForge',
        2 => 'NoSalvage',
        3 => 'NoSell',
        4 => 'SoulbindOnAcquire',
        5 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 78440,
      'chat_link' => '[&AgFoMgEA]',
      'icon' => 'https://render.guildwars2.com/file/FA1D042B0845BED8DA3CFA0FAA0837D5EB0207A6/61297.png',
      'details' => 
      array (
        'type' => 'HelmAquatic',
        'weight_class' => 'Medium',
        'defense' => 80,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 139.978,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 49,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 35,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 35,
            ),
          ),
        ),
        'suffix_item_id' => 24815,
        'secondary_suffix_item_id' => '',
      ),
    ),
    41 => 
    array (
      'name' => 'Joya de berilo exquisita',
      'description' => 'Haz doble clic para aplicar a un accesorio, amuleto o anillo con una casilla para mejoras sin usar.',
      'type' => 'UpgradeComponent',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 264,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
      ),
      'restrictions' => 
      array (
      ),
      'id' => 24543,
      'chat_link' => '[&AgHfXwAA]',
      'icon' => 'https://render.guildwars2.com/file/62A93E9D5C5D187F9475E3AEAB605ED9F4060D24/220969.png',
      'details' => 
      array (
        'type' => 'Default',
        'flags' => 
        array (
          0 => 'Trinket',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 438,
          'buff' => 
          array (
            'skill_id' => 216,
            'description' => '+25 Potencia
+15 Ferocidad
+15 Vitalidad',
          ),
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 25,
            ),
            1 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 15,
            ),
            2 => 
            array (
              'attribute' => 'CritDamage',
              'modifier' => 15,
            ),
          ),
        ),
        'suffix' => 'de berilo',
      ),
    ),
    42 => 
    array (
      'name' => 'Correas para mochila de soldado de berilo',
      'type' => 'Back',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'default_skin' => 2329,
      'game_types' => 
      array (
        0 => 'Wvw',
        1 => 'Dungeon',
        2 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'NoMysticForge',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'SoulbindOnAcquire',
        4 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 78165,
      'chat_link' => '[&AgFVMQEA]',
      'icon' => 'https://render.guildwars2.com/file/03B65C435B15EB2C10E04F3454B03718AAF3AE90/61004.png',
      'details' => 
      array (
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 85.36,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 30,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 21,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 21,
            ),
          ),
        ),
        'suffix_item_id' => 24543,
        'secondary_suffix_item_id' => '',
      ),
    ),
    43 => 
    array (
      'name' => 'Abrigo de granuja del guardabosques de soldado',
      'type' => 'Armor',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'default_skin' => 179,
      'game_types' => 
      array (
        0 => 'Wvw',
        1 => 'Dungeon',
        2 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'NoMysticForge',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'SoulbindOnAcquire',
        4 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 78391,
      'chat_link' => '[&AgE3MgEA]',
      'icon' => 'https://render.guildwars2.com/file/C4B962E00E64027091BB95AC759BC03915422C7E/61455.png',
      'details' => 
      array (
        'type' => 'Coat',
        'weight_class' => 'Medium',
        'defense' => 338,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 384.12,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 134,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 96,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 96,
            ),
          ),
        ),
        'suffix_item_id' => 24815,
        'secondary_suffix_item_id' => '',
      ),
    ),
    44 => 
    array (
      'name' => 'Botas de granuja del guardabosques de soldado',
      'type' => 'Armor',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'default_skin' => 193,
      'game_types' => 
      array (
        0 => 'Wvw',
        1 => 'Dungeon',
        2 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'NoMysticForge',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'SoulbindOnAcquire',
        4 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 78569,
      'chat_link' => '[&AgHpMgEA]',
      'icon' => 'https://render.guildwars2.com/file/781B5EFE0F08C9A8BAC0FE3F9ECA9D591C1BD2AC/63241.png',
      'details' => 
      array (
        'type' => 'Boots',
        'weight_class' => 'Medium',
        'defense' => 157,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 128.04,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 45,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 32,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 32,
            ),
          ),
        ),
        'suffix_item_id' => 24815,
        'secondary_suffix_item_id' => '',
      ),
    ),
    45 => 
    array (
      'name' => 'Guantes de granuja del guardabosques de soldado',
      'type' => 'Armor',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'default_skin' => 254,
      'game_types' => 
      array (
        0 => 'Wvw',
        1 => 'Dungeon',
        2 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'NoMysticForge',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'SoulbindOnAcquire',
        4 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 78241,
      'chat_link' => '[&AgGhMQEA]',
      'icon' => 'https://render.guildwars2.com/file/46F997FD34A2C24D5E13BBA9AB494349D3A52CE9/61456.png',
      'details' => 
      array (
        'type' => 'Gloves',
        'weight_class' => 'Medium',
        'defense' => 157,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 128.04,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 45,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 32,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 32,
            ),
          ),
        ),
        'suffix_item_id' => 24815,
        'secondary_suffix_item_id' => '',
      ),
    ),
    46 => 
    array (
      'name' => 'Máscara de granuja del guardabosques de soldado',
      'type' => 'Armor',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'default_skin' => 203,
      'game_types' => 
      array (
        0 => 'Wvw',
        1 => 'Dungeon',
        2 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'NoMysticForge',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'SoulbindOnAcquire',
        4 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 78325,
      'chat_link' => '[&AgH1MQEA]',
      'icon' => 'https://render.guildwars2.com/file/466FC49E5FECC6574127F5AFA2D9B454220E52DD/61457.png',
      'details' => 
      array (
        'type' => 'Helm',
        'weight_class' => 'Medium',
        'defense' => 97,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 170.72,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 60,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 43,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 43,
            ),
          ),
        ),
        'suffix_item_id' => 24815,
        'secondary_suffix_item_id' => '',
      ),
    ),
    47 => 
    array (
      'name' => 'Pantalones de granuja del guardabosques de soldado',
      'type' => 'Armor',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'default_skin' => 180,
      'game_types' => 
      array (
        0 => 'Wvw',
        1 => 'Dungeon',
        2 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'NoMysticForge',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'SoulbindOnAcquire',
        4 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 78554,
      'chat_link' => '[&AgHaMgEA]',
      'icon' => 'https://render.guildwars2.com/file/2D2C5A3C7ABC15D3273DCEA8E3F1AF3D16A36865/61458.png',
      'details' => 
      array (
        'type' => 'Leggings',
        'weight_class' => 'Medium',
        'defense' => 218,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 256.08,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 90,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 64,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 64,
            ),
          ),
        ),
        'suffix_item_id' => 24815,
        'secondary_suffix_item_id' => '',
      ),
    ),
    48 => 
    array (
      'name' => 'Hombros de granuja del guardabosques de soldado',
      'type' => 'Armor',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'default_skin' => 191,
      'game_types' => 
      array (
        0 => 'Wvw',
        1 => 'Dungeon',
        2 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'NoMysticForge',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'SoulbindOnAcquire',
        4 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 78308,
      'chat_link' => '[&AgHkMQEA]',
      'icon' => 'https://render.guildwars2.com/file/752907EBD4DAF0556152D89155F0383B0FC35DFA/61459.png',
      'details' => 
      array (
        'type' => 'Shoulders',
        'weight_class' => 'Medium',
        'defense' => 97,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 128.04,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 45,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 32,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 32,
            ),
          ),
        ),
        'suffix_item_id' => 24815,
        'secondary_suffix_item_id' => '',
      ),
    ),
    49 => 
    array (
      'name' => 'Pendiente de soldado de berilo',
      'type' => 'Trinket',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'game_types' => 
      array (
        0 => 'Wvw',
        1 => 'Dungeon',
        2 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'NoMysticForge',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'SoulbindOnAcquire',
        4 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 78186,
      'chat_link' => '[&AgFqMQEA]',
      'icon' => 'https://render.guildwars2.com/file/29F124099BBC31F0AA34B9596A163A99652D6512/433703.png',
      'details' => 
      array (
        'type' => 'Accessory',
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 213.4,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 75,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 53,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 53,
            ),
          ),
        ),
        'suffix_item_id' => 24543,
        'secondary_suffix_item_id' => '',
      ),
    ),
    50 => 
    array (
      'name' => 'Anillo de soldado de berilo',
      'type' => 'Trinket',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'game_types' => 
      array (
        0 => 'Wvw',
        1 => 'Dungeon',
        2 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'NoMysticForge',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'SoulbindOnAcquire',
        4 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 78164,
      'chat_link' => '[&AgFUMQEA]',
      'icon' => 'https://render.guildwars2.com/file/F60D6E7659B061E3BFE95F6A0102EE07A97CCF25/455589.png',
      'details' => 
      array (
        'type' => 'Ring',
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 256.08,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 90,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 64,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 64,
            ),
          ),
        ),
        'suffix_item_id' => 24543,
        'secondary_suffix_item_id' => '',
      ),
    ),
    51 => 
    array (
      'name' => 'Amuleto de soldado de berilo',
      'type' => 'Trinket',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'game_types' => 
      array (
        0 => 'Wvw',
        1 => 'Dungeon',
        2 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'NoMysticForge',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'SoulbindOnAcquire',
        4 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 78239,
      'chat_link' => '[&AgGfMQEA]',
      'icon' => 'https://render.guildwars2.com/file/F211FA612DB698FEF8D19E27C56BF4E6960BE36F/455603.png',
      'details' => 
      array (
        'type' => 'Amulet',
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 341.44,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 120,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 85,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 85,
            ),
          ),
        ),
        'suffix_item_id' => 24543,
        'secondary_suffix_item_id' => '',
      ),
    ),
    52 => 
    array (
      'name' => 'Sello superior de fuerza',
      'description' => '<c=@abilitytype>Elemento: </c>Mejora<br>Haz doble clic para aplicar a un arma.',
      'type' => 'UpgradeComponent',
      'level' => 60,
      'rarity' => 'Exotic',
      'vendor_value' => 216,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
      ),
      'restrictions' => 
      array (
      ),
      'id' => 24615,
      'chat_link' => '[&AgEnYAAA]',
      'icon' => 'https://render.guildwars2.com/file/D7420E430D002E07382035EF0D0F77370C4EE6B8/220662.png',
      'details' => 
      array (
        'type' => 'Sigil',
        'flags' => 
        array (
          0 => 'ShortBow',
          1 => 'Dagger',
          2 => 'Focus',
          3 => 'Greatsword',
          4 => 'Hammer',
          5 => 'Harpoon',
          6 => 'Mace',
          7 => 'Pistol',
          8 => 'Rifle',
          9 => 'Scepter',
          10 => 'Shield',
          11 => 'Speargun',
          12 => 'Axe',
          13 => 'Staff',
          14 => 'Sword',
          15 => 'Torch',
          16 => 'Trident',
          17 => 'Warhorn',
          18 => 'LongBow',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 261,
          'buff' => 
          array (
            'skill_id' => 9322,
            'description' => '+5 % daño',
          ),
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'de fuerza',
      ),
    ),
    53 => 
    array (
      'name' => 'Lanza de bronce de fuerza de soldado',
      'type' => 'Weapon',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'default_skin' => 3977,
      'game_types' => 
      array (
        0 => 'Wvw',
        1 => 'Dungeon',
        2 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'NoMysticForge',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'SoulbindOnAcquire',
        4 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 78637,
      'chat_link' => '[&AgEtMwEA]',
      'icon' => 'https://render.guildwars2.com/file/9AC302D1031B5C31806D0703FBC1944C01D4A240/561998.png',
      'details' => 
      array (
        'type' => 'Harpoon',
        'damage_type' => 'Choking',
        'min_power' => 905,
        'max_power' => 1000,
        'defense' => 0,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 682.88,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 239,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 171,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 171,
            ),
          ),
        ),
        'suffix_item_id' => 24615,
        'secondary_suffix_item_id' => '24618',
      ),
    ),
    54 => 
    array (
      'name' => 'Cañón de arpón de madera verde de fuerza de soldado',
      'type' => 'Weapon',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'default_skin' => 3908,
      'game_types' => 
      array (
        0 => 'Wvw',
        1 => 'Dungeon',
        2 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'NoMysticForge',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'SoulbindOnAcquire',
        4 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 78431,
      'chat_link' => '[&AgFfMgEA]',
      'icon' => 'https://render.guildwars2.com/file/73B70408A1C99BA37B50DA72EA4BCC6AC9384E2B/561999.png',
      'details' => 
      array (
        'type' => 'Speargun',
        'damage_type' => 'Choking',
        'min_power' => 905,
        'max_power' => 1000,
        'defense' => 0,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 682.88,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 239,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 171,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 171,
            ),
          ),
        ),
        'suffix_item_id' => 24615,
        'secondary_suffix_item_id' => '24618',
      ),
    ),
    55 => 
    array (
      'name' => 'Mandoble de bronce de fuerza de soldado',
      'type' => 'Weapon',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'default_skin' => 4005,
      'game_types' => 
      array (
        0 => 'Wvw',
        1 => 'Dungeon',
        2 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'NoMysticForge',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'SoulbindOnAcquire',
        4 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 78442,
      'chat_link' => '[&AgFqMgEA]',
      'icon' => 'https://render.guildwars2.com/file/1EA00FDAAD23FD1B1B9C4BD6E36EB30A43E21D06/64138.png',
      'details' => 
      array (
        'type' => 'Greatsword',
        'damage_type' => 'Choking',
        'min_power' => 995,
        'max_power' => 1100,
        'defense' => 0,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 682.88,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 239,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 171,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 171,
            ),
          ),
        ),
        'suffix_item_id' => 24615,
        'secondary_suffix_item_id' => '24618',
      ),
    ),
    56 => 
    array (
      'name' => 'Arco largo de madera verde de fuerza de soldado',
      'type' => 'Weapon',
      'level' => 80,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'default_skin' => 3921,
      'game_types' => 
      array (
        0 => 'Wvw',
        1 => 'Dungeon',
        2 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'NoMysticForge',
        1 => 'NoSalvage',
        2 => 'NoSell',
        3 => 'SoulbindOnAcquire',
        4 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 78649,
      'chat_link' => '[&AgE5MwEA]',
      'icon' => 'https://render.guildwars2.com/file/C6110F52DF5AFE0F00A56F9E143E9732176DDDE9/65015.png',
      'details' => 
      array (
        'type' => 'LongBow',
        'damage_type' => 'Choking',
        'min_power' => 920,
        'max_power' => 1080,
        'defense' => 0,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 682.88,
        'infix_upgrade' => 
        array (
          'id' => 162,
          'attributes' => 
          array (
            0 => 
            array (
              'attribute' => 'Power',
              'modifier' => 239,
            ),
            1 => 
            array (
              'attribute' => 'Toughness',
              'modifier' => 171,
            ),
            2 => 
            array (
              'attribute' => 'Vitality',
              'modifier' => 171,
            ),
          ),
        ),
        'suffix_item_id' => 24615,
        'secondary_suffix_item_id' => '24618',
      ),
    ),
    57 => 
    array (
      'name' => 'Runa del guardabosques',
      'description' => 'Haz doble clic para aplicar a una armadura.',
      'type' => 'UpgradeComponent',
      'level' => 0,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'game_types' => 
      array (
        0 => 'Pvp',
        1 => 'PvpLobby',
      ),
      'flags' => 
      array (
        0 => 'NoSalvage',
        1 => 'NoSell',
        2 => 'SoulbindOnAcquire',
        3 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 21207,
      'chat_link' => '[&AgHXUgAA]',
      'icon' => 'https://render.guildwars2.com/file/74190770191950B5CD9439B93B487816959E9D3B/220729.png',
      'details' => 
      array (
        'type' => 'Default',
        'flags' => 
        array (
          0 => 'HeavyArmor',
          1 => 'LightArmor',
          2 => 'MediumArmor',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'bonuses' => 
        array (
          0 => '+25 Precisión',
          1 => '+35 Ferocidad',
          2 => '+50 Precisión',
          3 => '+65 Ferocidad',
          4 => '+100 Precisión',
          5 => '+7 % Daño mientras tengas un compañero activo.',
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 112,
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'del guardabosques',
      ),
    ),
    58 => 
    array (
      'name' => 'Sello de batalla',
      'type' => 'UpgradeComponent',
      'level' => 0,
      'rarity' => 'Exotic',
      'vendor_value' => 0,
      'game_types' => 
      array (
        0 => 'Pvp',
        1 => 'PvpLobby',
      ),
      'flags' => 
      array (
        0 => 'NoSalvage',
        1 => 'NoSell',
        2 => 'SoulbindOnAcquire',
        3 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 21155,
      'chat_link' => '[&AgGjUgAA]',
      'icon' => 'https://render.guildwars2.com/file/A25A5E7D74A6B293B5C6B8EC7EDA1A06C649CBEF/220691.png',
      'details' => 
      array (
        'type' => 'Default',
        'flags' => 
        array (
          0 => 'ShortBow',
          1 => 'Dagger',
          2 => 'Focus',
          3 => 'Greatsword',
          4 => 'Hammer',
          5 => 'Harpoon',
          6 => 'Mace',
          7 => 'Pistol',
          8 => 'Rifle',
          9 => 'Scepter',
          10 => 'Shield',
          11 => 'Speargun',
          12 => 'Axe',
          13 => 'Staff',
          14 => 'Sword',
          15 => 'Torch',
          16 => 'Trident',
          17 => 'Warhorn',
          18 => 'LongBow',
        ),
        'infusion_upgrade_flags' => 
        array (
        ),
        'attribute_adjustment' => 0,
        'infix_upgrade' => 
        array (
          'id' => 1255,
          'buff' => 
          array (
            'skill_id' => 38781,
            'description' => 'Ganas 4 acumulaciones de poder (5 segundos) cuando cambias a esta arma en combate. <c=@reminder>(Recarga: 9 segundos)</c>',
          ),
          'attributes' => 
          array (
          ),
        ),
        'suffix' => 'de la batalla',
      ),
    ),
    59 => 
    array (
      'name' => 'Armadura de cadenas oxidada',
      'description' => '',
      'type' => 'Armor',
      'level' => 0,
      'rarity' => 'Basic',
      'vendor_value' => 1,
      'default_skin' => 2,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'NoMysticForge',
        2 => 'NoSalvage',
        3 => 'NotUpgradeable',
        4 => 'SoulbindOnAcquire',
        5 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 6459,
      'chat_link' => '[&AgE7GQAA]',
      'icon' => 'https://render.guildwars2.com/file/A2D0D6DA90056E76F1BE244F0C9EF333F95D9746/61098.png',
      'details' => 
      array (
        'type' => 'Coat',
        'weight_class' => 'Heavy',
        'defense' => 24,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 9.477,
        'infix_upgrade' => 
        array (
          'id' => 112,
          'attributes' => 
          array (
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    60 => 
    array (
      'name' => 'Grebas de cadenas oxidadas',
      'description' => '',
      'type' => 'Armor',
      'level' => 0,
      'rarity' => 'Basic',
      'vendor_value' => 1,
      'default_skin' => 2041,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'NoMysticForge',
        2 => 'NoSalvage',
        3 => 'NotUpgradeable',
        4 => 'SoulbindOnAcquire',
        5 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 6458,
      'chat_link' => '[&AgE6GQAA]',
      'icon' => 'https://render.guildwars2.com/file/061CAE3A9244396F68B543089E43A11EC5E933C3/61096.png',
      'details' => 
      array (
        'type' => 'Boots',
        'weight_class' => 'Heavy',
        'defense' => 12,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 3.159,
        'infix_upgrade' => 
        array (
          'id' => 112,
          'attributes' => 
          array (
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    61 => 
    array (
      'name' => 'Leotardos de cadenas oxidadas',
      'description' => '',
      'type' => 'Armor',
      'level' => 0,
      'rarity' => 'Basic',
      'vendor_value' => 1,
      'default_skin' => 1,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'NoMysticForge',
        2 => 'NoSalvage',
        3 => 'NotUpgradeable',
        4 => 'SoulbindOnAcquire',
        5 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 6461,
      'chat_link' => '[&AgE9GQAA]',
      'icon' => 'https://render.guildwars2.com/file/9321FD09DF90E8D10D80B5C41D722F357FE5970A/61104.png',
      'details' => 
      array (
        'type' => 'Leggings',
        'weight_class' => 'Heavy',
        'defense' => 16,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 6.318,
        'infix_upgrade' => 
        array (
          'id' => 112,
          'attributes' => 
          array (
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    62 => 
    array (
      'name' => 'Manto de conquistador',
      'type' => 'Armor',
      'level' => 0,
      'rarity' => 'Basic',
      'vendor_value' => 1,
      'default_skin' => 2044,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'NoMysticForge',
        2 => 'NoSalvage',
        3 => 'NotUpgradeable',
        4 => 'SoulbindOnAcquire',
        5 => 'SoulBindOnUse',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 6543,
      'chat_link' => '[&AgGPGQAA]',
      'icon' => 'https://render.guildwars2.com/file/C3C3D4FEE2B608EAE865DD4216660CFAE6BEEDA0/61754.png',
      'details' => 
      array (
        'type' => 'Shoulders',
        'weight_class' => 'Heavy',
        'defense' => 8,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 2.925,
        'infix_upgrade' => 
        array (
          'id' => 112,
          'attributes' => 
          array (
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
    63 => 
    array (
      'name' => 'Garrote quebrado',
      'description' => '',
      'type' => 'Weapon',
      'level' => 0,
      'rarity' => 'Basic',
      'vendor_value' => 1,
      'default_skin' => 3861,
      'game_types' => 
      array (
        0 => 'Activity',
        1 => 'Wvw',
        2 => 'Dungeon',
        3 => 'Pve',
      ),
      'flags' => 
      array (
        0 => 'HideSuffix',
        1 => 'NoMysticForge',
        2 => 'NoSalvage',
      ),
      'restrictions' => 
      array (
      ),
      'id' => 33349,
      'chat_link' => '[&AgFFggAA]',
      'icon' => 'https://render.guildwars2.com/file/6E350F079207B60BFBD5A54A9F14E667677E0016/66184.png',
      'details' => 
      array (
        'type' => 'Mace',
        'damage_type' => 'Physical',
        'min_power' => 104,
        'max_power' => 118,
        'defense' => 0,
        'infusion_slots' => 
        array (
        ),
        'attribute_adjustment' => 7.8,
        'infix_upgrade' => 
        array (
          'id' => 112,
          'attributes' => 
          array (
          ),
        ),
        'secondary_suffix_item_id' => '',
      ),
    ),
  ),
);
