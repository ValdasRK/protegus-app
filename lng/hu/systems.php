<?php

return [
    'empty'       => 'No system added',
    'emptyText'   => 'Please add one by pressing "Add new system" button below',
    'notFound'    => 'No systems found',
    'refreshTime' => 'Refresh time:',

    'sp231Warnings' => [
        'sensors'      => 'Sensors module does not exist',
        'pgm'          => 'Output module does not exist',
        'notConnected' => 'Not connected',
    ],
    'titles' => [
        'area'                  => 'Area :no',
        'system'                => 'System :no',
        'pgm'                   => 'PGM :no',
        'sensor'                => 'Sensor :no',
        'systems'               => 'Systems',
        'active'                => 'Active Systems',
        'history'               => 'Systems History',
        'addSystem'             => 'Add new system',
        'editSystem'            => 'Edit system',
        'systemEvents'          => 'System events',
        'profileSettings'       => 'Profile settings',
        'settingsIpCom'         => 'Settings - ip com servers',
        'settingsReactions'     => 'Settings - Reactions types',
        'editIpComServer'       => 'Edit ip com server',
        'addNewIpComServer'     => 'Add new ip com server',
        'addNewUser'            => 'Add new user',
        'editUser'              => 'Edit user',
        'partitions'            => 'Areas',
        'pgmOutputs'            => 'PGM Outputs',
        'rename'                => 'Rename',
        'sensors'               => 'Temperature',
        'systemUsers'           => 'System users',
        'allSystemsUsers'       => 'Users from all owned systems',
        'zones'                 => 'Zones',
        'editZone'              => 'Edit',
        'addNewZone'            => 'Új hozzáadása',
        'users'                 => 'Users',
        'errorMessage'          => 'Error',
        'successMessage'        => 'Success',
        'config_reread_message' => 'Configuration was successfully re-read.',
        'reactMessage'          => 'CALL SECURITY',
        'language'              => 'Language',
        'zone'                  => ':no ',
        'enterPinCode'          => 'Enter PIN code',
        'react'                 => 'React',
        'events'                => 'Events',
        'allEvents'             => 'All events',
        'bypassZones'           => 'Bypass failed zones',
        'enterPassword'         => 'Please enter your password',
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
        'type'   => 'Type',
        'type_0' => 'SP231',
        'type_1' => 'G10',
        'type_2' => 'Other',
        'type_3' => 'G16',
        'type_4' => 'Communicator'
    ],

    'labels' => [
        'accessPeriod'                 => 'Set access period for installer (in hours)',
        'describeIssue'                => 'Please describe your issue',
        'name'                         => 'Név',
        'imei'                         => 'Unique ID',
        'mpass'                        => 'Service Access code',
        'address'                      => 'Address',
        'contractNo'                   => 'Contract number',
        'objectPassword'               => 'Object password',
        'allAreas'                     => 'Minden partíció',
        'email'                        => 'Email',
        'editSensorName'               => 'Edit sensor name',
        'sensorName'                   => 'Sensor name',
        'system'                       => 'System',
        'pgmName'                      => 'Controller name',
        'pulseTime'                    => 'Pulse time',
        'pgmType'                      => 'Controller type',
        'pulse'                        => 'Pulse',
        'level'                        => 'Level',
        'pgmStatus'                    => 'PGM status',
        'areaName'                     => 'Area name',
        'pin'                          => 'PIN',
        'changeAreaStatus'             => 'Set area status',
        'changeStatus'                 => 'Change status',
        'areasCount'                   => 'How many Areas are in the system?',
        'zoneQueueNo'                  => 'Zone No',
        'zoneName'                     => 'Név',
        'persons'                      => [
            'name'           => 'Felhasználónév',
            'email'          => 'Email cím',
            'phone'          => 'Phone',
            'address'        => 'Address',
            'key'            => 'Pass phrase',
            'queue_no'       => 'Queue No.',
            'hasKey'         => '*********',
            'system_code_no' => 'User number in system',
        ],
        'editPartitionName'            => 'Edit Area name',
        'enterPartitionName'           => 'Enter Area name',
        'searchPhrase'                 => 'Search by typing address, user name, email, Unique ID...',
        'pgm_as_area'                  => 'Arm/Disarm with PGM',
        'direct_control'               => 'Enable Direct Control',
        'apps_password_for_arm_disarm' => 'Use Application password for ARM/DISARM',
        'timeZone'                     => 'Time zone',
        'number'                       => 'number',
        'enterAreaNumber'              => 'Area number',
        'numberOfPgms'                 => 'Kimenetek',
        'numberOfSensors'              => 'Érzékelők',
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
        'save'            => 'Mentés',
        'select'          => 'Select system',
        'addNew'          => 'Add new system',
        'delete'          => 'Törlés',
        'deleteSystem'    => 'Törlés',
        'cancel'          => 'Mégse',
        'create'          => 'Create',
        'react'           => 'React',
        'rename'          => 'Rename',
        'zoneStatus'      => 'Zone Status',
        'removeUser'      => 'Remove user',
        'addUser'         => 'Add user',
        'changePgmStatus' => 'Change',
        'setAreaStatus'   => 'Set',
        'bypassZones'     => 'Bypass failed zones',
        'edit'            => 'Edit',
        'addZone'         => 'Add zone',
        'deleteZone'      => 'Törlés',
        'editPerson'      => 'Edit',
        'addPerson'       => 'Add',
        'deletePerson'    => 'Törlés',
        'savePerson'      => 'Mentés',
        'ok'              => 'Ok',
        'logout'          => 'Log out',
        'on'              => 'On',
        'off'             => 'Off',
        'yes'             => 'Yes',
        'no'              => 'No',
        'call'            => 'Call',
        'clearFilter'     => 'Szűrő törlése',
        'filter'          => 'Szűrő',
        'readConfig'      => 'Re-read system config',
        'done'            => 'Done',
        'next'            => 'Következő',
        'retry'           => 'Retry',
        'transfer'        => 'Transfer',
        'sensors_reset'   => 'Reset fire detectors',
        'deleteSensor'    => 'Törlés',
        'addCamera'       => 'Add camera',
        'deleteCamera'    => 'Delete camera',
    ],
    'menu'          => [
        'allEvents'                  => 'All events',
        'areas'                      => 'Areas',
        'pgms'                       => 'Control',
        'sensors'                    => 'Temperature',
        'settings'                   => 'Settings',
        'mobileSettings'             => 'Preferences',
        'events'                     => 'Events',
        'help'                       => 'Segítség',
        'logOut'                     => 'Log out',
        'react'                      => 'React',
        'users'                      => 'Users',
        'areaZones'                  => 'Zones',
        'areaUsers'                  => 'Users',
        'reactions'                  => 'Reactions types',
        'ipcom'                      => 'IPCom settings',
        'monas'                      => 'MonasMS settings',
        'systems'                    => 'System list',
        'grg'                        => 'GRG settings',
        'global'                     => 'Global settings',
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
        'sensor'         => ':temp °C',
        'sensorNA'       => 'N/A',
        'sensorDisabled' => 'KI',
        'pgmOn'          => 'BE',
        'pgmOff'         => 'KI',
        'area'           => [
            'arm'             => 'Armed',
            'armInProgress'   => 'Arming...',
            'stay'            => 'Staying',
            'stayInProgress'  => 'Staying...',
            'sleep'           => 'Sleeping',
            'sleepInProgress' => 'Sleeping...',
            'off'             => 'Turned off',
            'setArm'          => 'Arm',
            'setStay'         => 'Stay',
            'setSleep'        => 'Sleep',
            'setOff'          => 'Off',
            'processing'      => 'Processing',
            'unknown'         => 'Unknown',
       ],
    ],
    'notifications' => [
        'areaDisabled'                 => 'Sorry, you can not change area status. Please contact your Installer.',
        'pgmDisabledText'              => 'Sorry, you can not control output status. Please contact your Installer.',
        'sensorDisabledText'           => 'Temperature sensor information is not available with this system. Please contact your Installer.',
        'areYouSure'                   => 'Are you sure you want to delete?',
        'logOutConfirm'                => 'Are you sure you want to log out?',
        'reactMessage'                 => 'Are you sure you want to Generate alarm/call security?',
        'pgmUsedAsArea'                => 'Output is used to Arm/Disarm the security system',
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
        'monasConnection'     => 'Connection to MonasMS failed...',
        'addPerson'           => 'Failed storing person in MonasMS',
        'pgmStatus'           => 'Changing PGM output status has failed. Refresh the page and try again',
        'addFail'             => 'Adding system has failed. Please try again later.',
        'react'               => 'Can not reach react server',
        'bypassFail'          => 'Zone bypass failed',
        'configRead'          => 'Reading system configuration has failed, system data may be incorrect or incomplete. Please re-read configuration in System settings',
        'areaStatusFail'      => 'Failed changing area status',
        'imeiNotFound'        => 'System Unique ID or Service Access Code was incorrect, System data may be incomplete',
        'mpassFail'           => 'Incorrect Service Access Code',
        'g10AreaChange'       => 'System status is changing. Wait for „Push notification“ confirmation or refresh status window',
        'objectNotFound'      => 'System not found. Please check if Unique ID is correct. Also check if device is connected to network (Network LED - Green, Data LED - OFF)',
        'contractNotFound'    => 'Contract number not found',
        'passwordFail'        => 'Password error',
        'autoUpdateFail'      => 'Reading configuration automatically has failed. Please check if the device is powered on, other configuration, wait for first events and press Re-read configuration in System settings.',
        'activationFail'      => 'We were unable to activate the Data Service. Please try again later or contact your Protegus representative for support',
        'ipcom_search_denied' => 'Please wait for 5s before adding this system',
        'MPASS_IS_INCORRECT'  => 'Service access code is incorrect. Please set it at Settings->System information.',
    ],
];
