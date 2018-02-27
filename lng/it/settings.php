<?php

return [
    'noConnection' => 'Pagina non disponibile',
    'buttons'      => [
        'save'           => 'Salva',
        'delete'         => 'Elimina',
        'addNew'         => 'Aggiungi nuovo',
        'testConnection' => 'Prova',
    ],
    'connected'    => 'Collegato',
    'notConnected' => 'Non riuscito',
    'labels'       => [
        'peerName'       => 'Nome peer',
        'host'           => 'Host',
        'port'           => 'Porta',
        'userName'       => 'Nome utente',
        'password'       => 'Password',
        'changeLanguage' => 'Cambia lingua',
    ],
    'installer' => [
        'logo' => 'Logo installatore (165x45)',
        'removeLogo' => 'Rimuovi logo'
    ],
    'ipcom' => [
        'logo' => 'Logo Ipcom',
        'removeLogo' => 'Rimuovi logo Ipcom',
        'priorityLogo' => 'Priority over installer logo'
    ],
    'monas'        => [
        'title' => 'MonasMS impostazioni',
        'label' => [
            'host'     => 'MonasMS database hostname',
            'database' => 'Nome del database MonasMS',
            'username' => 'MonasMS database username',
            'password' => 'MonasMS database password',
            'use'      => 'Attivare MonasMS',
            'sync'     => 'Periodo in secondi per sincronizzare eventi con Monas',
        ],
    ],
    'grg'          => [
        'title' => 'Impostazioni GRG',
        'label' => [
            'host' => 'GRG Host',
            'port' => 'GRG porta',
            'code' => 'Codice predefinito da inviare',
            'zone' => 'Numero di zona predefinito da inviare',
        ],
    ],
    'global'       => [
        'title' => 'Impostazioni globali',
        'label' => [
            'show_zones'                            => 'Abilitare/disabilitare scheda zone per utente Master',
            'show_grg'                              => 'Abilitare/disabilitare pulsante "Reagire" per gli utenti',
            'main_user_edit_zones'                  => 'Abilitare utente Master per descrivere zone',
            'main_user_add_zones'                   => 'Abilitare utente Master per aggiungere zone',
            'main_user_enable_additional_fields'    => 'Abilitare utente Master per descrivere i campi utente aggiuntivo quando MonasMS viene utilizzato',
            'main_user_enable_view_users'           => 'Abilitare utente Master per vedere menu area utenti',
            'main_user_enable_edit_users'           => 'Abilitare utente Master per modificare gli utenti dell\'area',
            'event_full_name'                       => 'Mostra il nome completo evento anziché solo il tipo di reazione',
            'g10_pgm_output_as_area'                => 'Abilitare utente Master a modificare la funzionalità PGM (per Inserire/disinserire il sistema)',
            'show_sensor_window'                    => 'Visualizza finestra sensori se non supportata dal sistema',
            'show_pgm_window'                       => 'Mostra la finestra di PGM se c\'è solo 1 PGM ed è usato per armare/disarmare',
            'installer_prepaid_sim'                 => 'Mostrare le fonzionalità di installazione e di sim prepagata',
            'enabled_recaptcha'                     => 'Utilizzare Recaptcha per la registrazione',
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
            'name'                       => 'Nome di reazione',
            'monas_id'                   => 'Monas ID reazione',
            'type'                       => 'Tipo di reazione',
            'image'                      => 'Immagine di reazione',
            'redirect_to'                => 'Notifica Push reindirizza a',
            'notification_sound'         => 'Suono di notifica da utilizzare',
            'notification_sound_default' => 'Dispositivo predefinito',
            'notification_sound_custom'  => 'Personalizzata',
            'notification_sound_info'    => 'Suono di notifica: ',
        ],
        'redirects'      => [
            'event'  => 'Pagina eventi',
            'sensor' => 'Pagina sensori',
        ],
        'noReaction'     => 'Evento non ha nessuna reazione',
        'translationKey' => 'Chiave di traduzione',
    ],
];
