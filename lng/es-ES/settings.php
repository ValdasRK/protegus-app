<?php

return [
    'noConnection' => 'La página no está disponible',
    'buttons'      => [
        'save'           => 'Guardar',
        'delete'         => 'Eliminar',
        'addNew'         => 'Añadir nuevo',
        'testConnection' => 'Test',
    ],
    'connected'    => 'Conectado',
    'notConnected' => 'Error de conexión',
    'labels'       => [
        'peerName'       => 'Peer name',
        'host'           => 'Host',
        'port'           => 'Port',
        'userName'       => 'Nombre de usuario',
        'password'       => 'Contraseña',
        'changeLanguage' => 'Elegir idioma',
    ],
    'installer' => [
        'logo' => 'Logo de instalador (165x45)',
        'removeLogo' => 'Eliminar el logotipo'
    ],
    'ipcom' => [
        'logo' => 'Ipcom Logo',
        'removeLogo' => 'Quitar Logotipo de Ipcom',
        'priorityLogo' => 'Priority over installer logo'
    ],
    'monas'        => [
        'title' => 'Configuración de MonasMS',
        'label' => [
            'host'     => 'MonasMS database hostname',
            'database' => 'Nombre de la base de datos de MonasMS',
            'username' => 'MonasMS database username',
            'password' => 'MonasMS database password',
            'use'      => 'Usar MonasMS',
            'sync'     => 'Período en segundos para sincronizar eventos con MonasMS',
        ],
    ],
    'grg'          => [
        'title' => 'Configuración de GRG',
        'label' => [
            'host' => 'Host GRG',
            'port' => 'GRG port',
            'code' => 'Código por defecto para enviar',
            'zone' => 'Número de zona predeterminada para enviar',
        ],
    ],
    'global'       => [
        'title' => 'Configuración global',
        'label' => [
            'show_zones'                            => 'Activar/Desactivar la pestaña de zonas para el usuario Maestro',
            'show_grg'                              => 'Activar/desactivar el botón de "Reaccionar" para usuarios',
            'main_user_edit_zones'                  => 'Habilitar usuario Maestro para describir zonas',
            'main_user_add_zones'                   => 'Habilitar usuario Maestro para agregar zonas',
            'main_user_enable_additional_fields'    => 'Habilitar usuario Maestro para describir campos de usuario adicionales cuando se utiliza MonasMS',
            'main_user_enable_view_users'           => 'Habilitar usuario Maestro para ver el menú de usuarios del área',
            'main_user_enable_edit_users'           => 'Habilitar usuario Maestro para editar usuarios del área',
            'event_full_name'                       => 'Mostrar el nombre completo del evento en lugar del sólo tipo de reacción',
            'g10_pgm_output_as_area'                => 'Habilitar al usuario Maestro para cambiar la funcionalidad de PGM (al sistema Arm/Disarm)',
            'show_sensor_window'                    => 'Mostrar ventana de sensores si no es compatible con el sistema',
            'show_pgm_window'                       => 'Mostrar ventana PGM si sólo hay 1 PGM y se utiliza para Armar/Desarmar',
            'installer_prepaid_sim'                 => 'Mostrar las funciones del instalador y del sim prepagado',
            'enabled_recaptcha'                     => 'Utilizar captcha al registrar usuarios',
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
            'name'                       => 'Nombre de reacción',
            'monas_id'                   => 'MonasMS reacción ID',
            'type'                       => 'Tipo de reacción',
            'image'                      => 'Imagen de reacción',
            'redirect_to'                => 'Redirecciones de notificación Push a',
            'notification_sound'         => 'Notificación de sonido para usar',
            'notification_sound_default' => 'Dispositivo predeterminado',
            'notification_sound_custom'  => 'Personalizado',
            'notification_sound_info'    => 'Sonido de notificación: ',
        ],
        'redirects'      => [
            'event'  => 'Página de eventos',
            'sensor' => 'Página de sensores',
        ],
        'noReaction'     => 'Evento no tiene ninguna reacción',
        'translationKey' => 'Clave de la traducción',
    ],
];
