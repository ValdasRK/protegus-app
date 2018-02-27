<?php

return [
    'noConnection' => 'Stranica nije dostupna',
    'buttons'      => [
        'save'           => 'Spremi',
        'delete'         => 'Izbriši',
        'addNew'         => 'Dodaj novo',
        'testConnection' => 'Test',
    ],
    'connected'    => 'Povezan',
    'notConnected' => 'Neuspjelo',
    'labels'       => [
        'peerName'       => 'Ime veze',
        'host'           => 'Server',
        'port'           => 'Port',
        'userName'       => 'Korisničko ime',
        'password'       => 'Lozinka',
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
        'title' => 'MonasMS postavke',
        'label' => [
            'host'     => 'MonasMS database hostname',
            'database' => 'MonasMS naziv baze podataka',
            'username' => 'MonasMS database username',
            'password' => 'MonasMS database password',
            'use'      => 'Omogući MonasMS',
            'sync'     => 'Vrijeme u sekundama za sinkronizaciju događaja s Monas-om',
        ],
    ],
    'grg'          => [
        'title' => 'GRG postavke',
        'label' => [
            'host' => 'GRG host',
            'port' => 'GRG port',
            'code' => 'Zadani kod za slanje',
            'zone' => 'Zadani broj zona za poslati',
        ],
    ],
    'global'       => [
        'title' => 'Globalne postavke',
        'label' => [
            'show_zones'                            => 'Omogući/Onemogući karticu zona za Master korisnika',
            'show_grg'                              => 'Omogući/Onemogući gumb "Reakcija"za korisnike',
            'main_user_edit_zones'                  => 'Omogući Master korisniku opisivanje zone',
            'main_user_add_zones'                   => 'Omogućiti Master korisniku dodavanje zone',
            'main_user_enable_additional_fields'    => 'Omogući Master korisniku opisivanje dodatnih korisničkih polja kada se koristi MonasMS',
            'main_user_enable_view_users'           => 'Omogući Master korisniku da vidi izbornik korisnici',
            'main_user_enable_edit_users'           => 'Omogući Master korisniku uređivanje korisnika',
            'event_full_name'                       => 'Pokaži pun naziv događaja umjesto samo vrste reakcije',
            'g10_pgm_output_as_area'                => 'Omogući Master korisniku promijenu PGM funkcija (za Uključenje/Isključenje sustava)',
            'show_sensor_window'                    => 'Prikaži prozor senzora ako ih sustav ne podržava',
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
            'name'                       => 'Ime reakcije',
            'monas_id'                   => 'Reakcijski ID Monas-a',
            'type'                       => 'Tip reakcije',
            'image'                      => 'Slika reakcije',
            'redirect_to'                => 'Push notifikacije preusmjeri prema',
            'notification_sound'         => 'Zvuk obavijesti za korištenje',
            'notification_sound_default' => 'Zadane postavke uređaja',
            'notification_sound_custom'  => 'Prilagođeno',
            'notification_sound_info'    => 'Zvuk obavijesti: ',
        ],
        'redirects'      => [
            'event'  => 'Stranica događaja',
            'sensor' => 'Stranica senzora',
        ],
        'noReaction'     => 'Događaj nema reakcije',
        'translationKey' => 'Ključ prijevoda',
    ],
];
