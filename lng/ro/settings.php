<?php

return [
    'noConnection' => 'Pagina nu este disponibilă',
    'buttons'      => [
        'save'           => 'Salvare',
        'delete'         => 'Ștergeți',
        'addNew'         => 'Adaugare noua',
        'testConnection' => 'Test',
    ],
    'connected'    => 'Conectat',
    'notConnected' => 'Nereușit',
    'labels'       => [
        'peerName'       => 'Nume pereche',
        'host'           => 'Gazdă',
        'port'           => 'Port',
        'userName'       => 'Nume utilizator',
        'password'       => 'Parolă',
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
        'title' => 'Setări MonasMS',
        'label' => [
            'host'     => 'MonasMS database hostname',
            'database' => 'Nume bază de date MonasMS',
            'username' => 'MonasMS database username',
            'password' => 'MonasMS database password',
            'use'      => 'Permite MonasMS',
            'sync'     => 'Perioada în secunde pentru sincronizare evenimente cu Monas',
        ],
    ],
    'grg'          => [
        'title' => 'Setările GRG',
        'label' => [
            'host' => 'Gazdă GRG',
            'port' => 'Portul GRG',
            'code' => 'Codul trimis implicit',
            'zone' => 'Numărul de zone implicit pentru a fi trimis',
        ],
    ],
    'global'       => [
        'title' => 'Setări globale',
        'label' => [
            'show_zones'                            => 'Activează/dezactivează zone pentru utilizator Master',
            'show_grg'                              => 'Activează/dezactivează butonul "Reacţionează" pentru utilizatori',
            'main_user_edit_zones'                  => 'Permite utilizatorului Master să definească zonele',
            'main_user_add_zones'                   => 'Master permite utilizatorului să adauge zone',
            'main_user_enable_additional_fields'    => 'Enable Master user to describe additional user fields when MonasMS is used',
            'main_user_enable_view_users'           => 'Enable Master user to see area users menu',
            'main_user_enable_edit_users'           => 'Enable Master user to edit area users',
            'event_full_name'                       => 'Show full event name instead of only reaction type',
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
            'name'                       => 'Reaction name',
            'monas_id'                   => 'Monas Reaction ID',
            'type'                       => 'Reaction type',
            'image'                      => 'Reaction image',
            'redirect_to'                => 'Push notification redirects to',
            'notification_sound'         => 'Notification sound to use',
            'notification_sound_default' => 'Device default',
            'notification_sound_custom'  => 'Custom',
            'notification_sound_info'    => 'Notification sound: ',
        ],
        'redirects'      => [
            'event'  => 'Events page',
            'sensor' => 'Sensors page',
        ],
        'noReaction'     => 'Event has no reaction',
        'translationKey' => 'Translation key',
    ],
];
