<?php

return [
    'noConnection' => 'Страница не доступна. Проверьте подключение к Интернету',
    'buttons'      => [
        'save'           => 'Сохранить',
        'delete'         => 'Удалить',
        'addNew'         => 'Добавить новый',
        'testConnection' => 'Тест',
    ],
    'connected'    => 'Подключено',
    'notConnected' => 'Ошибка соединения',
    'labels'       => [
        'peerName'       => 'Peer name',
        'host'           => 'Хост',
        'port'           => 'Порт',
        'userName'       => 'Имя пользователя',
        'password'       => 'Пароль',
        'changeLanguage' => 'Изменить язык',
    ],
    'installer' => [
        'logo' => 'Логотип инсталлятора (165 x 45)',
        'removeLogo' => 'Удалить логотип'
    ],
    'ipcom' => [
        'logo' => 'IPCOM логотип',
        'removeLogo' => 'Удалить IPcom логотип',
        'priorityLogo' => 'Priority over installer logo'
    ],
    'monas'        => [
        'title' => 'Установки MonasMS',
        'label' => [
            'host'     => 'MonasMS database hostname',
            'database' => 'MonasMS database name',
            'username' => 'MonasMS database username',
            'password' => 'MonasMS database password',
            'use'      => 'Использовать MonasMS',
            'sync'     => 'Время синхронизации событий с MonasMS, в секундах',
        ],
    ],
    'grg'          => [
        'title' => 'Установки кнопки SOS',
        'label' => [
            'host' => 'Адрес сервера TCP',
            'port' => 'TCP-порт',
            'code' => 'Классификатор и код высылаемого события',
            'zone' => 'Номер высылаемой зоны',
        ],
    ],
    'global'       => [
        'title' => 'Общие установки',
        'label' => [
            'show_zones'                            => 'Включение/выключение вкладки зон Главному пользователю',
            'show_grg'                              => 'Включить/выключить «Реагировать» кнопку для пользователей',
            'main_user_edit_zones'                  => 'Разрешить Главному пользователю описать зоны',
            'main_user_add_zones'                   => 'Разрешить Мастер пользователю добавлять зоны',
            'main_user_enable_additional_fields'    => 'Разрешить Главному пользователю описать дополнительные поля пользователей при использовании MonasMS',
            'main_user_enable_view_users'           => 'Разрешить Главному пользователю видеть пользователей партиции',
            'main_user_enable_edit_users'           => 'Разрешить Мастер пользователю добавлять зоны',
            'event_full_name'                       => 'Показывать название события вместо типа реакции',
            'g10_pgm_output_as_area'                => 'Разрешить Главному пользователю изменить PGM функциональность (Вкл/Выкл системы)',
            'show_sensor_window'                    => 'Показать окно датчиков, если не поддерживается системой',
            'show_pgm_window'                       => 'Показать окно PGM, если есть только 1 PGM, и используется для постановки/снятия с охраны',
            'installer_prepaid_sim'                 => 'Показывать функции инсталера и M2M',
            'enabled_recaptcha'                     => 'Использовать Recaptcha для регистрации',
            'braintree_production_merchant_id'      => 'Braintree Merchant Id',
            'braintree_production_public_key'       => 'Braintree Public Key',
            'braintree_production_private_key'      => 'Braintree Private Key',
            'braintree_sandbox_merchant_id'         => 'Braintree Sandbox Merchant Id',
            'braintree_sandbox_public_key'          => 'Braintree Sandbox Public Key',
            'braintree_sandbox_private_key'         => 'Braintree Sandbox Private Key',
            'braintree_production_enabled'          => 'Вкплючить "Braintree Payments" Production',
            'show_angelcam'                         => 'Enable Angelcam',
        ],
    ],
    'reactions'    => [
        'labels'         => [
            'name'                       => 'Название реакции',
            'monas_id'                   => 'ID реакции MonasMS',
            'type'                       => 'Тип реакции',
            'image'                      => 'Икона реакции',
            'redirect_to'                => '«Push» сообщения направляются в',
            'notification_sound'         => 'Параметры звуковых уведомлений',
            'notification_sound_default' => 'Звук устройства по-умолчанию',
            'notification_sound_custom'  => 'Особый',
            'notification_sound_info'    => 'Звук уведомления: ',
        ],
        'redirects'      => [
            'event'  => 'Окно событий',
            'sensor' => 'Окно сенсоров',
        ],
        'noReaction'     => 'Для события не назначена реакция',
        'translationKey' => 'Ключ перевода',
    ],
];
