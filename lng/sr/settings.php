<?php

return [
    'noConnection' => 'Page is not available',
    'buttons'      => [
        'save'           => 'Сачувај',
        'delete'         => 'Избриши',
        'addNew'         => 'Додај ново',
        'testConnection' => 'Тест',
    ],
    'connected'    => 'Повезан',
    'notConnected' => 'Неуспешно',
    'labels'       => [
        'peerName'       => 'Peer name',
        'host'           => 'Домаћин',
        'port'           => 'Порт',
        'userName'       => 'Корисничко име',
        'password'       => 'Лозинка',
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
        'title' => 'МонасМС подешавања',
        'label' => [
            'host'     => 'MonasMS database hostname',
            'database' => 'Име базе података МонасМС',
            'username' => 'MonasMS database username',
            'password' => 'MonasMS database password',
            'use'      => 'Омогући МонасМС',
            'sync'     => 'Period in seconds to sync events with Monas',
        ],
    ],
    'grg'          => [
        'title' => 'ГРГ подешавање',
        'label' => [
            'host' => 'ГРГ домаћин',
            'port' => 'ГРГ прикључак',
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
            'notification_sound'         => 'Notification sound to use',
            'notification_sound_default' => 'Подразумевано за уређај',
            'notification_sound_custom'  => 'Прилагођено',
            'notification_sound_info'    => 'Звук обавештења: ',
        ],
        'redirects'      => [
            'event'  => 'Страница догађаја',
            'sensor' => 'Страница сензора',
        ],
        'noReaction'     => 'Event has no reaction',
        'translationKey' => 'Translation key',
    ],
];
