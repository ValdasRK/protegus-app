<?php

return [
    'noConnection' => 'Page is not available',
    'buttons'      => [
        'save'           => 'Saglabāt',
        'delete'         => 'Dzēst',
        'addNew'         => 'Pievienot jaunu',
        'testConnection' => 'Tests',
    ],
    'connected'    => 'Savienots',
    'notConnected' => 'Neizdevās',
    'labels'       => [
        'peerName'       => 'Peer name',
        'host'           => 'Resursdatora nosaukums',
        'port'           => 'Ports',
        'userName'       => 'Lietotāja vārds',
        'password'       => 'Parole',
        'changeLanguage' => 'Change language',
    ],
    'installer' => [
        'logo' => 'Installer Logo (165x45)',
        'removeLogo' => 'Remove Logo'
    ],
    'ipcom' => [
        'logo' => 'Ipcom Logo',
        'removeLogo' => 'Remove Ipcom Logo',
        'priorityLogo' => 'Priority over installer logo'
    ],
    'monas'        => [
        'title' => 'MonasMS iestatījumi',
        'label' => [
            'host'     => 'MonasMS database hostname',
            'database' => 'MonasMS datu bāzes nosaukums',
            'username' => 'MonasMS database username',
            'password' => 'MonasMS database password',
            'use'      => 'Ieslēgt MonasMS',
            'sync'     => 'Periods sekundēs, lai sinhronizētu notikumus ar Monas',
        ],
    ],
    'grg'          => [
        'title' => 'GRG iestatījumi',
        'label' => [
            'host' => 'GRG resursdatora nosaukums',
            'port' => 'GRG ports',
            'code' => 'Pēc noklusējuma kods nosūtīšanai',
            'zone' => 'Pēc noklusējuma zonas numurs nosūtīšanai',
        ],
    ],
    'global'       => [
        'title' => 'Galvenie iestatījumi',
        'label' => [
            'show_zones'                            => 'Enable/Disable zones tab for Master user',
            'show_grg'                              => 'Enable/Disable "React" button for users',
            'main_user_edit_zones'                  => 'Enable Master user to describe zones',
            'main_user_add_zones'                   => 'Enable Master user to add zones',
            'main_user_enable_additional_fields'    => 'Enable Master user to describe additional user fields when MonasMS is used',
            'main_user_enable_view_users'           => 'Enable Master user to see area users menu',
            'main_user_enable_edit_users'           => 'Enable Master user to edit area users',
            'event_full_name'                       => 'Rādīt pilnu notikuma nosaukumu, nevis tikai pēc reakcijas veida',
            'g10_pgm_output_as_area'                => 'Enable Master user to change PGM funcionality (to Arm/Disarm system)',
            'show_sensor_window'                    => 'Show sensors window if not supported by system',
            'show_pgm_window'                       => 'Show PGM window if there is only 1 PGM and it is used to Arm/Disarm',
            'installer_prepaid_sim'                 => 'Show installer and prepaid sim features',
            'enabled_recaptcha'                     => 'Use Recaptcha for Registration',
            'braintree_production_merchant_id'      => 'Braintree Merchant Id',
            'braintree_production_public_key'       => 'Braintree Public Key',
            'braintree_production_private_key'      => 'Braintree Private Key',
            'braintree_sandbox_merchant_id'         => 'Braintree Sandbox Merchant Id',
            'braintree_sandbox_public_key'          => 'Braintree Sandbox Public Key',
            'braintree_sandbox_private_key'         => 'Braintree Sandbox Private Key',
            'braintree_production_enabled'          => 'Enable Braintree Payments Production',
            'show_angelcam'                         => 'Enable Angelcam',
        ],
    ],
    'reactions'    => [
        'labels'         => [
            'name'                       => 'Reakcija nosaukums',
            'monas_id'                   => 'Monas reakcija ID',
            'type'                       => 'Reakcija veids',
            'image'                      => 'Reakcijas attēls',
            'redirect_to'                => 'Piespiediet paziņojuma pāradresācijai uz',
            'notification_sound'         => 'Notification sound to use',
            'notification_sound_default' => 'Device default',
            'notification_sound_custom'  => 'Custom',
            'notification_sound_info'    => 'Notification sound: ',
        ],
        'redirects'      => [
            'event'  => 'Notikumu lapa',
            'sensor' => 'Devēju lapa',
        ],
        'noReaction'     => 'Notikumam nav reakcijas',
        'translationKey' => 'Tulkojuma taustiņš',
    ],
];
