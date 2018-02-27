<?php

return [
    'noConnection' => 'Sivu ei ole käytettävissä',
    'buttons'      => [
        'save'           => 'Tallenna',
        'delete'         => 'Poista',
        'addNew'         => 'Lisää uusi',
        'testConnection' => 'Testi',
    ],
    'connected'    => 'Yhdistetty',
    'notConnected' => 'Epäonnistui',
    'labels'       => [
        'peerName'       => 'Vertaiskoneen nimi',
        'host'           => 'Isäntä',
        'port'           => 'Portti',
        'userName'       => 'Käyttäjänimi',
        'password'       => 'Salasana',
        'changeLanguage' => 'Vaihda kieli',
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
        'title' => 'MonasMS asetukset',
        'label' => [
            'host'     => 'MonasMS database hostname',
            'database' => 'MonasMS tietokannan nimi',
            'username' => 'MonasMS database username',
            'password' => 'MonasMS database password',
            'use'      => 'Ota käyttöön MonasMS',
            'sync'     => 'Tapahtumien synkronointi MonasMS-palvelimelle (sek)',
        ],
    ],
    'grg'          => [
        'title' => 'GRGi asetukset',
        'label' => [
            'host' => 'GRG isäntä',
            'port' => 'GRG portti',
            'code' => 'Lähtevä oletuskoodi',
            'zone' => 'Oletussilmukan numero lähetetty',
        ],
    ],
    'global'       => [
        'title' => 'Yleiset asetukset',
        'label' => [
            'show_zones'                            => 'Ota käyttöön/poista käytöstä Pääkäyttäjän silmukat painike',
            'show_grg'                              => 'Ota käyttöön/poista käytöstä käyttäjien "React" painike',
            'main_user_edit_zones'                  => 'Pääkäyttäjän saa tehdä silmukoiden kuvauksia',
            'main_user_add_zones'                   => 'Ota Pääkäyttäjän silmukoiden lisäykset käyttöön',
            'main_user_enable_additional_fields'    => 'Pääkäyttäjän saa tehdä käyttäjäkenttien kuvauksia, kun kaytössä on MonasMS',
            'main_user_enable_view_users'           => 'Pääkäyttäjän saa katsella alueen käyttäjien valikkoa',
            'main_user_enable_edit_users'           => 'Pääkäyttäjän saa muokata alueiden käyttäjiä',
            'event_full_name'                       => 'Näytä tapahtuman nimen sijasta vain vartointi',
            'g10_pgm_output_as_area'                => 'Pääkäyttäjän saa tehdä muutoksia PGM toimintoihin (Hälytys päälle/pois päältä)',
            'show_sensor_window'                    => 'Näytä anturit-ikkuna, jos järjestelmä ei tue',
            'show_pgm_window'                       => 'Näytä PGM-ikkuna, jos on vain PGM 1 ja sitä käytetään Päälle/Pois päältä toiminnossa',
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
            'name'                       => 'Reaktio nimi',
            'monas_id'                   => 'MonasMS vartioliikkeen tunnus',
            'type'                       => 'Toimintotyyppi',
            'image'                      => 'Reaktion kuva',
            'redirect_to'                => 'Puhelinilmoitus ohjataan',
            'notification_sound'         => 'Äänimalli',
            'notification_sound_default' => 'Laitteen oletusarvot',
            'notification_sound_custom'  => 'Oma',
            'notification_sound_info'    => 'Ilmoitusääni: ',
        ],
        'redirects'      => [
            'event'  => 'Ilmoitukset',
            'sensor' => 'Anturit',
        ],
        'noReaction'     => 'Ei ilmoituksia',
        'translationKey' => 'Käännösavain',
    ],
];
