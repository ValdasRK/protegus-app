<?php

return [
    'noConnection' => 'Страницата не е достапна',
    'buttons'      => [
        'save'           => 'Зачувај',
        'delete'         => 'Избриши',
        'addNew'         => 'Додади ново',
        'testConnection' => 'Тест',
    ],
    'connected'    => 'Connected',
    'notConnected' => 'Failed',
    'labels'       => [
        'peerName'       => 'Peer name',
        'host'           => 'Host',
        'port'           => 'Port',
        'userName'       => 'Корисничко име',
        'password'       => 'Лозника',
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
        'title' => 'MonasMS settings',
        'label' => [
            'host'     => 'MonasMS database hostname',
            'database' => 'MonasMS database name',
            'username' => 'MonasMS database username',
            'password' => 'MonasMS database password',
            'use'      => 'Enable MonasMS',
            'sync'     => 'Period in seconds to sync events with Monas',
        ],
    ],
    'grg'          => [
        'title' => 'GRG settings',
        'label' => [
            'host' => 'GRG Host',
            'port' => 'GRG port',
            'code' => 'Default code to send',
            'zone' => 'Default zone number to send',
        ],
    ],
    'global'       => [
        'title' => 'Global settings',
        'label' => [
            'show_zones'                            => 'Enable/Disable zones tab for Master user',
            'show_grg'                              => 'Enable/Disable "React" button for users',
            'main_user_edit_zones'                  => 'Enable Master user to describe zones',
            'main_user_add_zones'                   => 'Enable Master user to add zones',
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
            'notification_sound'         => 'Звук за известување за користење',
            'notification_sound_default' => 'Device default',
            'notification_sound_custom'  => 'Прилагодено',
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
