<?php

return [
    'empty'       => 'Sistēma nav pievienota',
    'emptyText'   => 'Lūdzu, pievienojiet vienu nospiežot zemāknorādīto pogu "Pievienot jaunu sistēmu"',
    'notFound'    => 'Sistēmas nav atrastas',
    'refreshTime' => 'Atjaunināšanas laiks:',

    'sp231Warnings' => [
        'sensors'      => 'Devēju modulis neeksistē',
        'pgm'          => 'Izejas modulis neeksistē',
        'notConnected' => 'Nav savienots',
    ],
    'titles' => [
        'area'                  => 'Rajoni :no',
        'system'                => 'Sistēmas :no',
        'pgm'                   => 'PGM :no',
        'sensor'                => 'Devējs :no',
        'systems'               => 'Sistēmas',
        'active'                => 'Active Systems',
        'history'               => 'Systems History',
        'addSystem'             => 'Pievienot sistēmu',
        'editSystem'            => 'Rediģēt sistēmu',
        'systemEvents'          => 'Sistēmas notikumi',
        'profileSettings'       => 'Profila iestatījumi',
        'settingsIpCom'         => 'Iestatījumi -ip com serverim',
        'settingsReactions'     => 'Iestatījumi - Reakcijas veidi',
        'editIpComServer'       => 'Rediģēt ip com serveri',
        'addNewIpComServer'     => 'Pievienot jaunu ip com serveri',
        'addNewUser'            => 'Pievienot jaunu lietotāju',
        'editUser'              => 'Rediģēt lietotāju',
        'partitions'            => 'Rajoni',
        'pgmOutputs'            => 'PGM izejas',
        'rename'                => 'Pārdēvēt',
        'sensors'               => 'Temperature',
        'systemUsers'           => 'Sistēmas lietotāji',
        'allSystemsUsers'       => 'Lietotāji no visām piederošām sistēmām',
        'zones'                 => 'Zonas',
        'editZone'              => 'Rediģēt',
        'addNewZone'            => 'Pievienot jaunu',
        'users'                 => 'Lietotāji',
        'errorMessage'          => 'Ziņojums par kļūdu',
        'successMessage'        => 'Ziņojums par veiksmīgu darbību',
        'config_reread_message' => 'Configuration was successfully re-read.',
        'reactMessage'          => 'Izsaukt apsardzi',
        'language'              => 'Valoda',
        'zone'                  => ':no ',
        'enterPinCode'          => 'Ievadiet PIN kodu',
        'react'                 => 'Reaģēt',
        'events'                => 'Notikumi',
        'allEvents'             => 'Visi notikumi',
        'bypassZones'           => 'Apiet zonu neizdevās',
        'enterPassword'         => 'Lūdzu, ievadiet savu paroli',
        'addNewArea'            => 'Add new area',
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
        'type'   => 'Sistēmas veids',
        'type_0' => 'SP231',
        'type_1' => 'G10',
        'type_2' => 'Cits',
        'type_3' => 'G16',
        'type_4' => 'Communicator'
    ],

    'labels' => [
        'accessPeriod'                 => 'Set access period for installer (in hours)',
        'describeIssue'                => 'Please describe your issue',
        'name'                         => 'Vārds',
        'imei'                         => 'IMEI',
        'mpass'                        => 'Pakalpojuma kods',
        'address'                      => 'Adrese',
        'contractNo'                   => 'Līguma numurs',
        'objectPassword'               => 'Objekta parole',
        'allAreas'                     => 'Visi rajoni',
        'email'                        => 'E-pasts',
        'editSensorName'               => 'Rediģēt devēja nosaukumu',
        'sensorName'                   => 'Devēja nosaukums',
        'system'                       => 'Sistēma',
        'pgmName'                      => 'Controller name',
        'pulseTime'                    => 'Pulse time',
        'pgmType'                      => 'Controller type',
        'pulse'                        => 'Pulse',
        'level'                        => 'Level',
        'pgmStatus'                    => 'PGM statuss',
        'areaName'                     => 'Rajona nosaukums',
        'pin'                          => 'PIN kods',
        'changeAreaStatus'             => 'Iestatīt rajona statusu',
        'changeStatus'                 => 'Mainīt statusu',
        'areasCount'                   => 'Rajonu skaits',
        'zoneQueueNo'                  => 'Rindas Nr',
        'zoneName'                     => 'Vārds',
        'persons'                      => [
            'name'           => 'Lietotāja vārds',
            'email'          => 'E-pasts',
            'phone'          => 'Tālrunis',
            'address'        => 'Adrese',
            'key'            => 'Parole',
            'queue_no'       => 'Rindas Nr.',
            'hasKey'         => '*********',
            'system_code_no' => 'User number in system',
        ],
        'editPartitionName'            => 'Rediģēt rajona nosaukumu',
        'enterPartitionName'           => 'Ievadiet rajona nosaukumu',
        'searchPhrase'                 => 'Meklēt pēc adreses, lietotāja vārda, e-pasta, IMEI...',
        'pgm_as_area'                  => 'Ieslēgt/Izslēgt ar PGM',
        'direct_control'               => 'Enable Direct Control',
        'apps_password_for_arm_disarm' => 'Izmantot Aplikācijas paroli Ieslēgt/Izslēgt',
        'timeZone'                     => 'Laika zona',
        'number'                       => 'number',
        'enterAreaNumber'              => 'Area number',
        'numberOfPgms'                 => 'Izejas',
        'numberOfSensors'              => 'Sensori',
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
        'home'            => 'Home',
        'save'            => 'Saglabāt',
        'select'          => 'Izvēlēties sistēmu',
        'addNew'          => 'Pievienot jaunu sistēmu',
        'delete'          => 'Dzēst',
        'deleteSystem'    => 'Dzēst sistēmu',
        'cancel'          => 'Atcelt',
        'create'          => 'Izveidot',
        'react'           => 'Reaģēt',
        'rename'          => 'Pārdēvēt',
        'zoneStatus'      => 'Zone Status',
        'removeUser'      => 'Dzēst lietotāju',
        'addUser'         => 'Pievienot lietotāju',
        'changePgmStatus' => 'Mainīt',
        'setAreaStatus'   => 'Iestatīt',
        'bypassZones'     => 'Apiet bojāto zonu',
        'edit'            => 'Rediģēt',
        'addZone'         => 'Pievienot zonu',
        'deleteZone'      => 'Dzēst',
        'editPerson'      => 'Rediģēt',
        'addPerson'       => 'Pievienot',
        'deletePerson'    => 'Dzēst',
        'savePerson'      => 'Saglabāt',
        'ok'              => 'Labi',
        'logout'          => 'Iziet',
        'on'              => 'Ieslēgt',
        'off'             => 'Izslēgt',
        'yes'             => 'Jā',
        'no'              => 'Nē',
        'call'            => 'Zvanīt',
        'clearFilter'     => 'Attīrīt filtru',
        'filter'          => 'Filtrs',
        'readConfig'      => 'Pārlasiet sistēmas konfigurāciju',
        'done'            => 'Done',
        'next'            => 'Tālāk',
        'retry'           => 'Retry',
        'transfer'        => 'Transfer',
        'sensors_reset'   => 'Reset fire detectors',
        'deleteSensor'    => 'Dzēst',
        'addCamera'       => 'Add camera',
        'deleteCamera'    => 'Delete camera',
    ],
    'menu'          => [
        'allEvents'                  => 'Visi notikumi',
        'areas'                      => 'Rajoni',
        'pgms'                       => 'Control',
        'sensors'                    => 'Temperature',
        'settings'                   => 'Iestatījumi',
        'mobileSettings'             => 'Preferences',
        'events'                     => 'Notikumi',
        'help'                       => 'Palīdzība',
        'logOut'                     => 'Iziet',
        'react'                      => 'Reaģēt',
        'users'                      => 'Lietotāji',
        'areaZones'                  => 'Zonas',
        'areaUsers'                  => 'Lietotāji',
        'reactions'                  => 'Reakcijas veids',
        'ipcom'                      => 'IPCom iestatījumi',
        'monas'                      => 'MonasMS iestatījumi',
        'systems'                    => 'Sistēmas saraksts',
        'grg'                        => 'GRG iestatījumi',
        'global'                     => 'Globālie iestatījumi',
        'removeArea'                 => 'Remove',
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
        'sensor'         => ':temp ° C',
        'sensorNA'       => 'N/A',
        'sensorDisabled' => 'Izslēgt',
        'pgmOn'          => 'Ieslēgt',
        'pgmOff'         => 'Izslēgt',
        'area'           => [
            'arm'             => 'Ieslēgts',
            'armInProgress'   => 'Arming...',
            'stay'            => 'Aizture',
            'stayInProgress'  => 'Aizture...',
            'sleep'           => 'Miega režīms',
            'sleepInProgress' => 'Miega režīmā...',
            'off'             => 'Izslēgts',
            'setArm'          => 'Ieslēgt',
            'setStay'         => 'Palikt',
            'setSleep'        => 'Miega režīms',
            'setOff'          => 'Izslēgt',
            'processing'      => 'Informācija tiek apstrādāta',
            'unknown'         => 'Nezināms',
       ],
    ],
    'notifications' => [
        'areaDisabled'                 => 'Sorry, you can not change area status. Please contact your Installer.',
        'pgmDisabledText'              => 'Sorry, you can not control output status. Please contact your Installer.',
        'sensorDisabledText'           => 'Temperature sensor information is not available with this system. Please contact your Installer.',
        'areYouSure'                   => 'Are you sure you want to delete?',
        'logOutConfirm'                => 'Are you sure you want to log out?',
        'reactMessage'                 => 'Vai esat pārliecināts, ka jūs vēlaties radīt trauksmi/izsaukt apsardzi?',
        'pgmUsedAsArea'                => 'Izeja tiek izmantota apsardzes sistēmas Ieslēgšanai/Izslēgšanai',
        'moduleOffline'                => 'System is Offline, please refresh or check connection',
        'saved'                        => 'Settings saved successfully.',
        'systemAdded'                  => 'System added successfully! Recommended: describe its name and address in system settings.',
        'systemAddedMonas'             => 'System added, but cannot be managed while Unique ID is not entered.',
        'systemsAddedMonas'            => 'Systems added, but cannot be managed while Unique ID is not entered.',
        'systemAddedOffline'           => 'Your device is OFFLINE. System added with limited functionality. Please check if device is connected to network (Network LED - Green, Data LED - OFF) and Re-read configuration in System settings',
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
        'monasConnection'     => 'Savienojums ar MonasMS neizdevās...',
        'addPerson'           => 'Neizdevās saglabāt lietotāju MonasMS',
        'pgmStatus'           => 'Changing PGM output status has failed. Refresh the page and try again',
        'addFail'             => 'Sistēmas pievienošana neizdevās. Lūdzu, mēģiniet vēlreiz vēlāk.',
        'react'               => 'Nevar izveidot savienojumu ar serveri',
        'bypassFail'          => 'Apiet bojāto zonu neizdevās',
        'configRead'          => 'Reading system configuration has failed, system data may be incorrect or incomplete. Please re-read configuration in System settings',
        'areaStatusFail'      => 'Neizdevās nomainīt rajona statusu',
        'imeiNotFound'        => 'System Unique ID or Service Access Code was incorrect, System data may be incomplete',
        'mpassFail'           => 'Incorrect Service Access Code',
        'g10AreaChange'       => 'Sistēmas statuss tiek nomainīts. Gaidiet "Push ziņojuma" apstiprinājumu vai atjaunojiet statusa logu',
        'objectNotFound'      => 'System not found. Please check if Unique ID is correct. Also check if device is connected to network (Network LED - Green, Data LED - OFF)',
        'contractNotFound'    => 'Contract number not found',
        'passwordFail'        => 'Password error',
        'autoUpdateFail'      => 'Reading configuration automatically has failed. Please check if the device is powered on, other configuration, wait for first events and press Re-read configuration in System settings.',
        'activationFail'      => 'We were unable to activate the Data Service. Please try again later or contact your Protegus representative for support',
        'ipcom_search_denied' => 'Please wait for 5s before adding this system',
        'MPASS_IS_INCORRECT'  => 'Service access code is incorrect. Please set it at Settings->System information.',
    ],
];
