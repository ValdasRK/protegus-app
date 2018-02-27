<?php

return [
    'noConnection' => 'Puslapis nepasiekiamas. Patikrinkite interneto ryšį.',
    'buttons'      => [
        'save'           => 'Išsaugoti',
        'delete'         => 'Pašalinti',
        'addNew'         => 'Pridėti naują',
        'testConnection' => 'Test',
    ],
    'connected'    => 'Prisijungta',
    'notConnected' => 'Prisijungimo klaida',
    'labels'       => [
        'peerName'       => 'Peer name',
        'host'           => 'Host',
        'port'           => 'Port',
        'userName'       => 'Vartotojo vardas',
        'password'       => 'Slaptažodis',
        'changeLanguage' => 'Keisti kalbą',
    ],
    'installer' => [
        'logo' => 'Montuotojo logo (165 x 45)',
        'removeLogo' => 'Pašalinti logotipą'
    ],
    'ipcom' => [
        'logo' => 'IPcom logotipas',
        'removeLogo' => 'Pašalinti Ipcom logo',
        'priorityLogo' => 'Priority over installer logo'
    ],
    'monas'        => [
        'title' => 'MonasMS nustatymai',
        'label' => [
            'host'     => 'MonasMS DB pavadinimas',
            'database' => 'MonasMS database name',
            'username' => 'MonasMS DB vartotojo vardas',
            'password' => 'MonasMS DB slaptažodis',
            'use'      => 'Naudoti MonasMS',
            'sync'     => 'Laiko tarpas įvykių sinchronizavimui su MonasMS, sekundėmis',
        ],
    ],
    'grg'          => [
        'title' => 'SOS mygtuko nustatymai',
        'label' => [
            'host' => 'TCP Serverio adresas',
            'port' => 'TCP portas',
            'code' => 'Siunčiamo įvykio klasifikatorius ir kodas',
            'zone' => 'Siunčiamos zonos numeris',
        ],
    ],
    'global'       => [
        'title' => 'Bendri nustatymai',
        'label' => [
            'show_zones'                            => 'Įjungti/išjungti zonų skirtuką Pagrindiniam vartotojui',
            'show_grg'                              => 'Įjungti/išjungti "Reaguoti" mygtuką vartotojams',
            'main_user_edit_zones'                  => 'Leisti Pagrindiniam vartotojui aprašyti zonas',
            'main_user_add_zones'                   => 'Leisti Pagrindiniam vartotojui pridėti zonas',
            'main_user_enable_additional_fields'    => 'Leisti, kad Master User aprašytų kitų vartotojų laukus, jei naudojamas "Monas MS"',
            'main_user_enable_view_users'           => 'Leisti Pagrindiniam vartotojui matyti vartotojų (atsakingų) meniu',
            'main_user_enable_edit_users'           => 'Leisti Pagrindiniam vartotojui keisti atsakingus asmenis',
            'event_full_name'                       => 'Rodyti pilną įvykio pavadinimą vietoje reakcijos tipo',
            'g10_pgm_output_as_area'                => 'Leisti Pagrindiniam vartotojui keisti PGM funkcionalumą (sistemos Įjungimui/išjungimui)',
            'show_sensor_window'                    => 'Rodyti sensorių langą, jei nepalaikomi sistemos',
            'show_pgm_window'                       => 'Rodyti PGM langą, jei yra tik 1 PGM ir naudojamas išjungimui/įjungimui',
            'installer_prepaid_sim'                 => 'Rodyti instaliuotojo ir M2M funkcijas',
            'enabled_recaptcha'                     => 'Naudoti Recaptcha registracijoje',
            'braintree_production_merchant_id'      => 'Braintree Merchant Id',
            'braintree_production_public_key'       => 'Braintree Public Key',
            'braintree_production_private_key'      => 'Braintree Private Key',
            'braintree_sandbox_merchant_id'         => 'Braintree Sandbox Merchant Id',
            'braintree_sandbox_public_key'          => 'Braintree Sandbox Public Key',
            'braintree_sandbox_private_key'         => 'Braintree Sandbox Private Key',
            'braintree_production_enabled'          => 'Įjungti "Braintree Payments" Production',
            'show_angelcam'                         => 'Enable Angelcam',
        ],
    ],
    'reactions'    => [
        'labels'         => [
            'name'                       => 'Reakcijos pavadinimas',
            'monas_id'                   => 'MonasMS Reakcijos ID',
            'type'                       => 'Reakcijos tipas',
            'image'                      => 'Reakcijos paveiksliukas',
            'redirect_to'                => '"Push" pranešimai nukreipiami į',
            'notification_sound'         => 'Pranešimo garsas: ',
            'notification_sound_default' => 'Įrenginio numatytasis',
            'notification_sound_custom'  => 'Sirena',
            'notification_sound_info'    => 'Pranešimo garsas: ',
        ],
        'redirects'      => [
            'event'  => 'Įvykių langą',
            'sensor' => 'Sensorių langą',
        ],
        'noReaction'     => 'Įvykiui nepriskirta reakcija',
        'translationKey' => 'Vertimo raktas',
    ],
];
