<?php

return [
    'empty'       => 'Ni  dodanega sistema ',
    'emptyText'   => 'Prosimo, da dodate s pritiskom na "Dodaj nov sistem« spodaj',
    'notFound'    => 'Sistem ni najden',
    'refreshTime' => 'Čas osveževanja:',

    'sp231Warnings' => [
        'sensors'      => 'Senzorji modula ne obstajajo',
        'pgm'          => 'Izhodni modul ne obstaja',
        'notConnected' => 'Ni povezan',
    ],
    'titles' => [
        'area'                  => 'Particija :no',
        'system'                => 'Sistem :no',
        'pgm'                   => 'PGM :no',
        'sensor'                => 'Senzor :no',
        'systems'               => 'Sistemi',
        'active'                => 'Aktivni sistemi',
        'history'               => 'Zgodovina sistemov',
        'addSystem'             => 'Dodaj nov sistem',
        'editSystem'            => 'Urejanje sistema',
        'systemEvents'          => 'Dogodki sistema',
        'profileSettings'       => 'Nastavitve profila',
        'settingsIpCom'         => 'Nastavitve - IPCom strežniki',
        'settingsReactions'     => 'Nastavitve - Vrste odziva',
        'editIpComServer'       => 'Urejanje ip com server',
        'addNewIpComServer'     => 'Dodaj nov IPCom strežnik',
        'addNewUser'            => 'Dodaj novega uporabnika',
        'editUser'              => 'Urejanje uporabnika',
        'partitions'            => 'Particije',
        'pgmOutputs'            => 'PGM izhodov',
        'rename'                => 'Preimenovanje',
        'sensors'               => 'Temperatura',
        'systemUsers'           => 'Uporabniki sistema',
        'allSystemsUsers'       => 'Uporabniki iz vseh lastnih sistemov',
        'zones'                 => 'Cone',
        'editZone'              => 'Urejanje',
        'addNewZone'            => 'Dodaj novo',
        'users'                 => 'Uporabniki',
        'errorMessage'          => 'Napaka',
        'successMessage'        => 'Uspešno',
        'config_reread_message' => 'Nastavitve so uspešno prebrane.',
        'reactMessage'          => 'POKLIČITE VARNOSTNO SLUŽBO',
        'language'              => 'Jezik',
        'zone'                  => ':no ',
        'enterPinCode'          => 'Vnesite kodo PIN',
        'react'                 => 'Reakcija',
        'events'                => 'Dogodki',
        'allEvents'             => 'Vsi dogodki',
        'bypassZones'           => 'Premostitev cone ni uspela',
        'enterPassword'         => 'Prosimo, vnesite geslo',
        'addNewArea'            => 'Dodaj novo particijo',
        'requestInstaller'      => 'Zahtevo monter pomoč',
        'addNewCameras'         => 'Dodaj nove kamere',
        'systemCameras'         => 'Video',
   ],
    'zone' => [
        'status' => [
            'tamper' => 'Napaka',
            'bypass' => 'Premostitev izvedena',
            'open'   => 'Izklop'
        ]
    ],
    'types' => [
        'type'   => 'Vrsta',
        'type_0' => 'SP231',
        'type_1' => 'G10',
        'type_2' => 'Ostalo',
        'type_3' => 'G16',
        'type_4' => 'Komunikator'
    ],

    'labels' => [
        'accessPeriod'                 => 'Nastavite časovno okno za instalaterja (v urah)',
        'describeIssue'                => 'Prosimo opišite vašo tažavo',
        'name'                         => 'ime',
        'imei'                         => 'Unikatna ID številka',
        'mpass'                        => 'Servisna dostopna koda',
        'address'                      => 'Naslov',
        'contractNo'                   => 'Številka pogodbe',
        'objectPassword'               => 'Geslo objekta',
        'allAreas'                     => 'Vse particije',
        'email'                        => 'E-pošta',
        'editSensorName'               => 'Uredite ime senzorja',
        'sensorName'                   => 'Senzor ime',
        'system'                       => 'Sistem',
        'pgmName'                      => 'Ime krmilnika',
        'pulseTime'                    => 'Čas impulza',
        'pgmType'                      => 'Vrsta krmilnika',
        'pulse'                        => 'Impulz',
        'level'                        => 'Ravni',
        'pgmStatus'                    => 'PGM stanje',
        'areaName'                     => 'Ime particije',
        'pin'                          => 'PIN',
        'changeAreaStatus'             => 'Nastavite status particije',
        'changeStatus'                 => 'Spremeni stanje',
        'areasCount'                   => 'Koliko particij je v sistemu?',
        'zoneQueueNo'                  => 'Cona št.',
        'zoneName'                     => 'ime',
        'persons'                      => [
            'name'           => 'Uporabniško ime',
            'email'          => 'E-pošta',
            'phone'          => 'Telefon',
            'address'        => 'Naslov:',
            'key'            => 'Namig gesla',
            'queue_no'       => 'Čakalna vrsta Št.',
            'hasKey'         => '*********',
            'system_code_no' => 'Številka uporabnika v sistemu',
        ],
        'editPartitionName'            => 'Uredite ime particije',
        'enterPartitionName'           => 'Vnesite ime particije',
        'searchPhrase'                 => 'Iskanje po naslovu, imenu uporabnika, E-mailu, Unikatni ID številki...',
        'pgm_as_area'                  => 'Vklop/Izklop z PGM',
        'direct_control'               => 'Omogočite neposredni nadzor',
        'apps_password_for_arm_disarm' => 'Uporabite geslo aplikacije za VKLOP/IZKLOP',
        'timeZone'                     => 'Časovni pas',
        'number'                       => 'število',
        'enterAreaNumber'              => 'Številka particije',
        'numberOfPgms'                 => 'Izhodov',
        'numberOfSensors'              => 'Senzorji',
        'transferToNewUser'            => 'Prenos na novega uporabnika:',
        'systemStatus'                 => 'Ravni',
        'pulse_interval'               => 'Pulzni interval v sekundah',
        'pulse_interval_value'         => ':seconds sekund |:seconds sekund',
        'seconds_short'                => 'sek.',
        'angelcamReloginFailed'        => 'Protegus ni uspel pridobiti podatkov kamere iz Angelcam serverja. Prosimo ponovite branje ali poizkusite kasneje.',
        'angelcamMustLogin'            => 'Kamere niso na voljo. Prosimo prijavite se v Angelcam v Prednostne nastavitve.',
        'addCamera'                    => 'Dodaj kamero',
        'angelcamReloginFailed'        => 'Neuspešna Samodejna prijava. Prosimo poizkusite kasneje.',
        'angelcamNoNewCameras'         => 'Na voljo ni novih kamer',
        'angelcamReloadInfo'           => 'Ponovno naloži podatke kamere',
        'angelcamNoCameras'            => 'Sistem ni povezan s kamero. Prosimo, dodajte kamero v Nastavitvah.',
        'angelcamNoOnlineCameras'      => 'Ni povezave s kamerami. Prosimo preverite kamere.',
        'cameraOffline'                => 'Ni povezave',
        'cameraNotAvailable'           => 'Kamera ni na voljo',
        'cameraDeleted'                => 'Kamera je izbrisana',
        'angelcamLoginFailed'          => 'Prijava v Angelcam storitev ni uspela.',
    ],

    'buttons'       => [
        'home'            => 'Domo',
        'save'            => 'Shrani',
        'select'          => 'Izberite sistem',
        'addNew'          => 'Dodaj nov sistem',
        'delete'          => 'Izbriši',
        'deleteSystem'    => 'Izbriši',
        'cancel'          => 'Prekliči',
        'create'          => 'Ustvarite',
        'react'           => 'Reagirajo',
        'rename'          => 'Preimenovanje',
        'zoneStatus'      => 'Status cone',
        'removeUser'      => 'Odstranite uporabnika',
        'addUser'         => 'Dodaj uporabnika',
        'changePgmStatus' => 'Spremembe',
        'setAreaStatus'   => 'Nastavi',
        'bypassZones'     => 'Premostitev cone ni uspela',
        'edit'            => 'Uredi',
        'addZone'         => 'Dodata cona',
        'deleteZone'      => 'Izbriši',
        'editPerson'      => 'Uredi',
        'addPerson'       => 'Dodaj',
        'deletePerson'    => 'Izbriši',
        'savePerson'      => 'Shrani',
        'ok'              => 'v redu',
        'logout'          => 'Odjava',
        'on'              => 'Vklop',
        'off'             => 'Izklop',
        'yes'             => 'da',
        'no'              => 'ne',
        'call'            => 'Klic',
        'clearFilter'     => 'Počisti filter',
        'filter'          => 'Filter',
        'readConfig'      => 'Ponovno preberete sistem config',
        'done'            => 'Končano',
        'next'            => 'Naslednji',
        'retry'           => 'Poizkusi znova',
        'transfer'        => 'Prenos',
        'sensors_reset'   => 'Reset detektorjev dima',
        'deleteSensor'    => 'Izbriši',
        'addCamera'       => 'Dodaj kamero',
        'deleteCamera'    => 'Izbriši kamero',
    ],
    'menu'          => [
        'allEvents'                  => 'Vsi dogodki',
        'areas'                      => 'Particije',
        'pgms'                       => 'Nadzor',
        'sensors'                    => 'Temperatura',
        'settings'                   => 'Nastavitve',
        'mobileSettings'             => 'Možnosti',
        'events'                     => 'Dogodki',
        'help'                       => 'pomoč',
        'logOut'                     => 'Odjava',
        'react'                      => 'Reakcija',
        'users'                      => 'Uporabniki',
        'areaZones'                  => 'Cone',
        'areaUsers'                  => 'Uporabniki',
        'reactions'                  => 'Vrste odziva',
        'ipcom'                      => 'IPCom nastavitve',
        'monas'                      => 'MonasMS nastavitve',
        'systems'                    => 'Seznam sistema',
        'grg'                        => 'GRG nastavitve',
        'global'                     => 'Globalne nastavitve',
        'removeArea'                 => 'Odstrani',
        'subscriptionSettings'       => 'Nastavitev naročnin',
        'systemInformation'          => 'Sistemske informacije',
        'transferOrDeleteSystem'     => 'Prenos ali izbrisati sistem',
        'transferSystem'             => 'Sistem za prenos',
        'requestInstallerAssistance' => 'Zahtevo monter pomoč',
        'cameras'                    => 'Video',
        'systemAngelcam'             => 'Nastavitev kamere',
        'angelcam'                   => 'Nastavitve kamere',
    ],
    'statuses'      => [
        'online'         => 'ONLINE',
        'offline'        => 'Brez povezave',
        'sensor'         => ':temp °C',
        'sensorNA'       => 'N/A',
        'sensorDisabled' => 'IZKLOP',
        'pgmOn'          => 'VKLOPI',
        'pgmOff'         => 'IZKLOP',
        'area'           => [
            'arm'             => 'Vklopljeno',
            'armInProgress'   => 'Vklop...',
            'stay'            => 'Bivanje',
            'stayInProgress'  => 'Bivanje...',
            'sleep'           => 'Spanje',
            'sleepInProgress' => 'Spanje...',
            'off'             => 'Izklopljen',
            'setArm'          => 'Vklop',
            'setStay'         => 'Bivanja',
            'setSleep'        => 'Spanja',
            'setOff'          => 'Izklop',
            'processing'      => 'Obdelujem',
            'unknown'         => 'Neznano',
       ],
    ],
    'notifications' => [
        'areaDisabled'                 => 'Oprostie, ne morete spremeniti status particije. Kontaktirajte instalaterja.',
        'pgmDisabledText'              => 'Oprostite, ne morete nadzorovati krmilnika. Prosimo kontaktirajte instalaterja.',
        'sensorDisabledText'           => 'Informacije o temperaturnem senzorju niso na voljo s tem sistemom. Prosimo kontaktirajte instalaterja.',
        'areYouSure'                   => 'Ali ste prepričani da želite izbrisati?',
        'logOutConfirm'                => 'Ali ste prepričani, da se želite odjaviti?',
        'reactMessage'                 => 'Ali ste prepričani, da želite za Generirati alarm/klic v sili ?',
        'pgmUsedAsArea'                => 'Izhodi krmilnika so uporabljeni za Vklop/Izklop alarmnega sistema',
        'moduleOffline'                => 'Sistem ni v povezavi, prosimo osvežite ali preverite povezavo',
        'saved'                        => 'Nastavitve uspešno shranjene',
        'systemAdded'                  => 'Sistem je uspešno dodan! Priporočamo: vnesite Ime in Naslov v Sistemskih nastavitvah.',
        'systemAddedMonas'             => 'Sistem je dodan, vendar upravljanje ni možno dokler ni vnešena Unikatna ID koda.',
        'systemsAddedMonas'            => 'Sistemi so dodani, vendar ni možno upravljanje dokler ni vnešena unikatna ID koda.',
        'systemAddedOffline'           => 'Vašanaprava je brez povezave. Sistem je dodan z omejeno funkcionalnostjo. Prosimo preverite ali je naprava povezana z omrežjem (Network LED - Zelena, Data LED - izklopljena) in ponovno preberite konfiguracijo v Sistemskih nastavitvah',
        'installerAccessGranted'       => 'Dostop je omogočen instalaterju. Če želite preklicati dostop, pojdite na "Nastavitve"/"Uporabniki sistema" in izbrišite instalaterja',
        'transferOrDeleteSystem'       => 'Ali želite prenesti ta sistem na drugega uporabnika ali izbrisati sistem?',
        'transferSystemWarning'        => 'Vaš izbrani uporabnik bo postal Glavni uporabnik in vi boste izgubili dostop do sistema. Ali ste prepričani, da želite prenesti sistem?',
        'systemTransferChoiceQuestion' => 'Kateri uporabnik naj postane Glavni uporabnik?',
        'activating'                   => 'Poteka Aktivacija sistema SIM kartice. Proces traja 2-5 minut. Prosimo počakajte...',
        'updating'                     => 'Poteka samodejno ponovno branje sistemskih nastavitev',
        'mustReReadSystem'             => 'Sistem ni prepoznan. Prosimo preverite ali je naprava povezana z omrežjem (Network LED - Zelena, Data LED - izklučena) in ponovno preberite konfiguracijo v Sistemskih nastavitvah',
        'highDataRateWarning'          => 'Opozorilo - MP4 pretok lahko povzroči visoko porabo mobilnih podatkov. Uporabite to nastavitev previdno.',
        'armWithPgmWarning'            => [ 
            'start'                         => 'Ni možen "Vklop/Izklop z PGM" dokler ne poimenujete particij. To opravite tako da kliknete ', 
            'link'                          => 'ta',
            'end'                           => ' link.',
        ],
    ],
    'errors'        => [
        'monasConnection'     => 'Povezava MonasMS ni...',
        'addPerson'           => 'Shranjevanje osebe v MonasMS ni uspelo',
        'pgmStatus'           => 'Sprememba PGM izhoda ni uspela. Osvežite stran in poizkusite znova',
        'addFail'             => 'Dodajanje sistema ni uspelo. Prosimo poizkusite kasneje.',
        'react'               => 'Dostop do strežnika ni uspel',
        'bypassFail'          => 'Premostitev cone ni uspela',
        'configRead'          => 'Branje sistemskih nastavitev ni uspelo, podatki sistema so morda napačni ali nepopolni. Prosimo ponovite branje konfiguracije v sistemskih nastavitvah ',
        'areaStatusFail'      => 'Sprememba statusa particije ni uspela',
        'imeiNotFound'        => 'Sistemska unikatna ID številka ali dostopna koda je napačna, Podatki sistema so lahko nepopolni',
        'mpassFail'           => 'Napačna servisna dostopna koda',
        'g10AreaChange'       => 'Status sistema se spreminja. Počakajte na "Potisno sporočilo", potrditev ali osvežite statusno okno',
        'objectNotFound'      => 'Ne najdem sistema. Prosimo preverite ali je Unikatna ID številka pravilna. Prav tako preverite ali je naprava povezana z omrežjem (Network LED - Zelena, Data LED - izključena)',
        'contractNotFound'    => 'Številka pogodbe ni najdena',
        'passwordFail'        => 'Napačno geslo',
        'autoUpdateFail'      => 'Samodejno branje konfiguracije ni uspelo. Preverite ali je naprava vključena, ostale nastavitve, počakajte na prvi dogodek in pritisnite Ponovno branje konfiguracije v Sistemkih nastavitvah. ',
        'activationFail'      => 'Aktivacija podatkovnega strežnika ni uspela. Prosimo poizkusite kasneje ali kontaktirajte predstavnika Protegus za pomoč',
        'ipcom_search_denied' => 'Prosimo počakajte 5 sekund pred dodajanjem tega sistema',
        'MPASS_IS_INCORRECT'  => 'Koda za servisni dostop ni pravilna. Prosimo vnesite jo v Nastavitve->Sistemske informacije.',
    ],
];
