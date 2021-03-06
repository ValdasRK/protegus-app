<?php

return [
    'empty'       => 'Hälytysjärjestelmää ei ole lisätty',
    'emptyText'   => 'Lisää yksi painamalla "Lisää uusi järjestelmä" painiketta',
    'notFound'    => 'Järjestelmiä ei ole löydy',
    'refreshTime' => 'Refresh time:',

    'sp231Warnings' => [
        'sensors'      => 'Anturimoduulia ei ole',
        'pgm'          => 'Output-moduulia ei ole',
        'notConnected' => 'Ei yhdistettynä',
    ],
    'titles' => [
        'area'                  => 'Aluenro :no',
        'system'                => 'Järjestelmän :no',
        'pgm'                   => 'Lähtö :no',
        'sensor'                => 'Anturi :no',
        'systems'               => 'Hälytysjärjestelmät',
        'active'                => 'Active Systems',
        'history'               => 'Systems History',
        'addSystem'             => 'Lisää hälytysjärjestelmä',
        'editSystem'            => 'Muokkaa hälytysjärjestelmää',
        'systemEvents'          => 'Hälytysjärjestelmän ilmoitukset',
        'profileSettings'       => 'Profiilin asetukset',
        'settingsIpCom'         => 'Asetukset - ip com-palvelimet',
        'settingsReactions'     => 'Asetukset - Reaktiotyypit',
        'editIpComServer'       => 'Muokkaa IPcom-palvelin',
        'addNewIpComServer'     => 'Lisää uusi IPcom palvelin',
        'addNewUser'            => 'Lisää uusi käyttäjä',
        'editUser'              => 'Muokkaa käyttäjää',
        'partitions'            => 'Osiot',
        'pgmOutputs'            => 'PGM Ohjaukset',
        'rename'                => 'Nimeä uudelleen',
        'sensors'               => 'Temperature',
        'systemUsers'           => 'Järjestelmän käyttäjät',
        'allSystemsUsers'       => 'Käyttäjien kaikki järjestelmät',
        'zones'                 => 'Silmukat',
        'editZone'              => 'Muokkaa',
        'addNewZone'            => 'Lisää uusi',
        'users'                 => 'Käyttäjät',
        'errorMessage'          => 'Virhesanoma',
        'successMessage'        => 'Viesti onnistui',
        'config_reread_message' => 'Configuration was successfully re-read.',
        'reactMessage'          => 'SOITA TURVAPALVELUUN',
        'language'              => 'Kieli',
        'zone'                  => 'Silmukan :no',
        'enterPinCode'          => 'Kirjoita PIN-koodi',
        'react'                 => 'Reagoi',
        'events'                => 'Tapahtumat',
        'allEvents'             => 'Kaikki ilmoitukset',
        'bypassZones'           => 'Ohita virheelliset silmukat',
        'enterPassword'         => 'Syötä salasanasi',
        'addNewArea'            => 'Lisää uusi alue',
        'requestInstaller'      => 'Request Installer Assistance',
        'addNewCameras'         => 'Add new cameras',
        'systemCameras'         => 'Video',
   ],
    'zone' => [
        'status' => [
            'tamper' => 'Fault',
            'bypass' => 'Bypassed',
            'open'   => 'Open'
        ]
    ],
    'types' => [
        'type'   => 'Hälytysjärjestelmän tyyppi',
        'type_0' => 'SP231',
        'type_1' => 'G10',
        'type_2' => 'Muut',
        'type_3' => 'G16',
        'type_4' => 'Ohjain'
    ],

    'labels' => [
        'accessPeriod'                 => 'Set access period for installer (in hours)',
        'describeIssue'                => 'Please describe your issue',
        'name'                         => 'Nimi',
        'imei'                         => 'IMEI',
        'mpass'                        => 'Pääsykoodi',
        'address'                      => 'Osoite',
        'contractNo'                   => 'Sopimuksen numero',
        'objectPassword'               => 'Kohteen salasana',
        'allAreas'                     => 'Kaikki alueet',
        'email'                        => 'Sähköposti',
        'editSensorName'               => 'Anturi nimen muokkaaminen',
        'sensorName'                   => 'Anturin nimi',
        'system'                       => 'Hälytysjärjestelmä',
        'pgmName'                      => 'Controller name',
        'pulseTime'                    => 'Pulse time',
        'pgmType'                      => 'Controller type',
        'pulse'                        => 'Pulse',
        'level'                        => 'Level',
        'pgmStatus'                    => 'PGM tila',
        'areaName'                     => 'Alueen nimi',
        'pin'                          => 'PIN',
        'changeAreaStatus'             => 'Aseta alueen tila',
        'changeStatus'                 => 'Muuta tilaa',
        'areasCount'                   => 'Alueiden määrä',
        'zoneQueueNo'                  => 'Jonon nro',
        'zoneName'                     => 'Nimi',
        'persons'                      => [
            'name'           => 'Käyttäjänimi',
            'email'          => 'Sähköposti',
            'phone'          => 'Puhelin',
            'address'        => 'Osoite',
            'key'            => 'Salasana',
            'queue_no'       => 'Jonon nro.',
            'hasKey'         => '*********',
            'system_code_no' => 'Käyttäjän numero järjestelmässä',
        ],
        'editPartitionName'            => 'Alueen nimen muokkaaminen',
        'enterPartitionName'           => 'Kirjoita osion nimi',
        'searchPhrase'                 => 'Etsi kirjoittamalla osoite, käyttäjän nimi, sähköpostiosoite, imei...',
        'pgm_as_area'                  => 'Päälle/Pois päältä PGM:llä',
        'direct_control'               => 'Ota käyttöön suora ohjaus',
        'apps_password_for_arm_disarm' => 'Käytä sovelluksen salasanaa Päälle/Pois päältä toimintoon',
        'timeZone'                     => 'Aikavyöhyke',
        'number'                       => 'numero',
        'enterAreaNumber'              => 'Alueen numero',
        'numberOfPgms'                 => 'Lähdöt',
        'numberOfSensors'              => 'Anturit',
        'transferToNewUser'            => 'Transfer to new user:',
        'systemStatus'                 => 'Level',
        'pulse_interval'               => 'Pulse interval in seconds',
        'pulse_interval_value'         => ':seconds second|:seconds seconds',
        'seconds_short'                => 'sec.',
        'angelcamReloginFailed'        => 'Protegus was unable to read camera data from Angelcam server. Please reread or try again later.',
        'angelcamMustLogin'            => 'Cameras not available. Please, log in to Angelcam in Preferances.',
        'addCamera'                    => 'Add camera',
        'angelcamReloginFailed'        => 'Automatic relogin failed. Please try again later.',
        'angelcamNoNewCameras'         => 'No new cameras available',
        'angelcamReloadInfo'           => 'Reload camera information',
        'angelcamNoCameras'            => 'This System has no cameras attached. Please, add cameras in Settings menu.',
        'angelcamNoOnlineCameras'      => 'Seems that cameras are offline. Please check Your cameras.',
        'cameraOffline'                => 'Offline',
        'cameraNotAvailable'           => 'Camera not available',
        'cameraDeleted'                => 'Camera deleted',
        'angelcamLoginFailed'          => 'Failed to log in to Angelcam service.',
    ],

    'buttons'       => [
        'home'            => 'Kotisivu',
        'save'            => 'Tallenna',
        'select'          => 'Valitse järjestelmä',
        'addNew'          => 'Lisää uusi järjestelmä',
        'delete'          => 'Poista',
        'deleteSystem'    => 'Poista järjestelmä',
        'cancel'          => 'Peruuta',
        'create'          => 'Luo',
        'react'           => 'Reagoi',
        'rename'          => 'Nimeä uudelleen',
        'zoneStatus'      => 'Zone Status',
        'removeUser'      => 'Poista käyttäjä',
        'addUser'         => 'Lisää käyttäjä',
        'changePgmStatus' => 'Muuta',
        'setAreaStatus'   => 'Aseta',
        'bypassZones'     => 'Ohita virheelliset silmukat',
        'edit'            => 'Muokkaa',
        'addZone'         => 'Lisää silmukka',
        'deleteZone'      => 'Poista',
        'editPerson'      => 'Muokkaa',
        'addPerson'       => 'Lisää',
        'deletePerson'    => 'Poista',
        'savePerson'      => 'Tallenna',
        'ok'              => 'Okei',
        'logout'          => 'Kirjaudu ulos',
        'on'              => 'Päällä',
        'off'             => 'Pois',
        'yes'             => 'Kyllä',
        'no'              => 'Ei',
        'call'            => 'Soita',
        'clearFilter'     => 'Tyhjennä suodatin',
        'filter'          => 'Suodatin',
        'readConfig'      => 'Lue uudelleen järjestelmän asetukset',
        'done'            => 'Valmis',
        'next'            => 'Seuraava',
        'retry'           => 'Yritä uudelleen',
        'transfer'        => 'Transfer',
        'sensors_reset'   => 'Reset fire detectors',
        'deleteSensor'    => 'Poista',
        'addCamera'       => 'Add camera',
        'deleteCamera'    => 'Delete camera',
    ],
    'menu'          => [
        'allEvents'                  => 'Kaikki ilmoitukset',
        'areas'                      => 'Alueet',
        'pgms'                       => 'Control',
        'sensors'                    => 'Temperature',
        'settings'                   => 'Asetukset',
        'mobileSettings'             => 'Asetukset',
        'events'                     => 'Ilmoitukset',
        'help'                       => 'Apua',
        'logOut'                     => 'Kirjaudu ulos',
        'react'                      => 'Reagoi',
        'users'                      => 'Käyttäjät',
        'areaZones'                  => 'Silmukat',
        'areaUsers'                  => 'Käyttäjät',
        'reactions'                  => 'Reagointityypit',
        'ipcom'                      => 'IPCom asetukset',
        'monas'                      => 'MonasMS asetukset',
        'systems'                    => 'Järjestelmäluettelo',
        'grg'                        => 'GRG asetukset',
        'global'                     => 'Yleiset asetukset',
        'removeArea'                 => 'Poista',
        'subscriptionSettings'       => 'Subscription settings',
        'systemInformation'          => 'System information',
        'transferOrDeleteSystem'     => 'Transfer or delete system',
        'transferSystem'             => 'Transfer system',
        'requestInstallerAssistance' => 'Request installer assistance',
        'cameras'                    => 'Video',
        'systemAngelcam'             => 'Camera settings',
        'angelcam'                   => 'Camera settings',
    ],
    'statuses'      => [
        'online'         => 'ONLINE',
        'offline'        => 'OFFLINE',
        'sensor'         => ':temp °C',
        'sensorNA'       => 'N/A',
        'sensorDisabled' => 'POIS',
        'pgmOn'          => 'PÄÄLLÄ',
        'pgmOff'         => 'POIS PÄÄLTÄ',
        'area'           => [
            'arm'             => 'Kytketty',
            'armInProgress'   => 'Arming...',
            'stay'            => 'Pysyä',
            'stayInProgress'  => 'Pysyä...',
            'sleep'           => 'Nukkuminen',
            'sleepInProgress' => 'Nukkuu...',
            'off'             => 'Pois päältä',
            'setArm'          => 'Kytketty',
            'setStay'         => 'Paikalla',
            'setSleep'        => 'Nukutaan',
            'setOff'          => 'Pois',
            'processing'      => 'Käsittely',
            'unknown'         => 'Tuntematon',
       ],
    ],
    'notifications' => [
        'areaDisabled'                 => 'Sorry, you can not change area status. Please contact your Installer.',
        'pgmDisabledText'              => 'Sorry, you can not control output status. Please contact your Installer.',
        'sensorDisabledText'           => 'Temperature sensor information is not available with this system. Please contact your Installer.',
        'areYouSure'                   => 'Are you sure you want to delete?',
        'logOutConfirm'                => 'Haluatko varmasti kirjautua ulos?',
        'reactMessage'                 => 'Oletko varma, että haluat lisätä varoitus/suojauksen?',
        'pgmUsedAsArea'                => 'Lähtöä käytetään järjestelmän Päälle/Pois päältä toimintoon',
        'moduleOffline'                => 'System is Offline, please refresh or check connection',
        'saved'                        => 'Asetukset tallennettu.',
        'systemAdded'                  => 'Järjestelmän lisäys onnistui! Suositus: lisää järjestelmäasetuksissa nimi ja osoite.',
        'systemAddedMonas'             => 'Järjestelmä lisätty, mutta sitä ei voi hallita, ennekuin IMEI ei ole ilmoitettu.',
        'systemsAddedMonas'            => 'Järjestelmä lisätty, mutta sitä ei voi hallita, ennekuin IMEI ei ole ilmoitettu.',
        'systemAddedOffline'           => 'Laite on offline-tilassa. Järjestelmä lisätty rajoitettuna. Liitä laite ja lue uudelleen konfiguraatio',
        'installerAccessGranted'       => 'Access is provided to installer. If you want to revoke access, go to "Settings"/"System users" and remove installer',
        'transferOrDeleteSystem'       => 'Would you like to transfer this system to another user or to delete the system?',
        'transferSystemWarning'        => 'Your selected user will become the main user, and you will lose access to the System. Are you sure, that you want to transfer System?',
        'systemTransferChoiceQuestion' => 'Which user should become the main user?',
        'activating'                   => 'Activating system SIM card. Process will take 2-5 minutes. Please wait...',
        'updating'                     => 'Attempting to re-read system configuration automatically',
        'mustReReadSystem'             => 'System is not recognized. Please check if device is connected to network (Network LED - Green, Data LED - OFF) and Re-read configuration in System settings',
        'highDataRateWarning'          => 'Warning - MP4 stream can cause high mobile data usage. Use this setting wisely.',
        'armWithPgmWarning'            => [ 
            'start'                         => 'You cannot "Arm/Disarm with PGM" until you specify system areas. You can do it by clicking ', 
            'link'                          => 'this',
            'end'                           => ' link.',
        ],
    ],
    'errors'        => [
        'monasConnection'     => 'MonasMS-yheys epäonnistui...',
        'addPerson'           => 'Ei voinut tallentaa henkilö MonasMS-palveluun',
        'pgmStatus'           => 'Changing PGM output status has failed. Refresh the page and try again',
        'addFail'             => 'Lisääminen järjestelmään epäonnistui. Yritä myöhemmin uudelleen.',
        'react'               => 'Ei saada yhteyttä palvelimeen',
        'bypassFail'          => 'Alueen ohitus epäonnistui',
        'configRead'          => 'Reading system configuration has failed, system data may be incorrect or incomplete. Please re-read configuration in System settings',
        'areaStatusFail'      => 'Epäonnistui muuttaa alueen tilaa',
        'imeiNotFound'        => 'System Unique ID or Service Access Code was incorrect, System data may be incomplete',
        'mpassFail'           => 'Virheellinen Huoltokoodi',
        'g10AreaChange'       => 'Järjestelmän tila on muuttumassa. Odotta "Push ilmoitusta" vahvistusta tai Päivitä tila-ikkuna',
        'objectNotFound'      => 'System not found. Please check if Unique ID is correct. Also check if device is connected to network (Network LED - Green, Data LED - OFF)',
        'contractNotFound'    => 'Contract number not found',
        'passwordFail'        => 'Password error',
        'autoUpdateFail'      => 'Reading configuration automatically has failed. Please check if the device is powered on, other configuration, wait for first events and press Re-read configuration in System settings.',
        'activationFail'      => 'We were unable to activate the Data Service. Please try again later or contact your Protegus representative for support',
        'ipcom_search_denied' => 'Please wait for 5s before adding this system',
        'MPASS_IS_INCORRECT'  => 'Service access code is incorrect. Please set it at Settings->System information.',
    ],
];
