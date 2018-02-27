<?php

return [
    'empty'       => 'Ningún sistema todavía añadido',
    'emptyText'   => 'Para agregar el objeto protegido, haga clic en el botón de abajo "Añadir nuevo objeto"',
    'notFound'    => 'El objeto no se encuentra en el sistema',
    'refreshTime' => 'Tiempo de actualización:',

    'sp231Warnings' => [
        'sensors'      => 'El sensor no existe',
        'pgm'          => 'La salida no existe',
        'notConnected' => 'No conectado',
    ],
    'titles' => [
        'area'                  => 'Área :no',
        'system'                => 'Sistema :no',
        'pgm'                   => 'PGM :no',
        'sensor'                => 'Sensor :no',
        'systems'               => 'Sistemas',
        'active'                => 'Sistemas activos',
        'history'               => 'Historia de los sistemas',
        'addSystem'             => 'Añadir sistema',
        'editSystem'            => 'Editar sistema',
        'systemEvents'          => 'Eventos del sistema',
        'profileSettings'       => 'Configuración del perfil',
        'settingsIpCom'         => 'Configuración - de ip com servidor',
        'settingsReactions'     => 'Configuración - tipos de reacciones',
        'editIpComServer'       => 'Editar el ip com servidor',
        'addNewIpComServer'     => 'Agregar el nuevo ip com servidor',
        'addNewUser'            => 'Agregar nuevo usuario',
        'editUser'              => 'Editar usuario',
        'partitions'            => 'Particiones',
        'pgmOutputs'            => 'Salidas PGM',
        'rename'                => 'Cambiar el nombre',
        'sensors'               => 'Temperatura',
        'systemUsers'           => 'Usuarios del sistema',
        'allSystemsUsers'       => 'Usuarios de todos los sistemas',
        'zones'                 => 'Zonas',
        'editZone'              => 'Editar',
        'addNewZone'            => 'Añadir nuevo',
        'users'                 => 'Usuarios',
        'errorMessage'          => 'Mensaje de error',
        'successMessage'        => 'Mensaje de éxito',
        'config_reread_message' => 'La configuración se ha vuelto a leer con éxito.',
        'reactMessage'          => 'LLAMADA SEGURIDAD',
        'language'              => 'Idioma',
        'zone'                  => 'Zona :no',
        'enterPinCode'          => 'Introduzca el código PIN',
        'react'                 => 'SOS ayuda',
        'events'                => 'Evento',
        'allEvents'             => 'Todos los eventos',
        'bypassZones'           => 'Evitar zonas (Bypass)',
        'enterPassword'         => 'Por favor introduzca su contraseña',
        'addNewArea'            => 'Añadir nueva área',
        'requestInstaller'      => 'Solicitar asistencia de instalador',
        'addNewCameras'         => 'Add new cameras',
        'systemCameras'         => 'Video',
   ],
    'zone' => [
        'status' => [
            'tamper' => 'Error',
            'bypass' => 'Sobrepasar',
            'open'   => 'Abierto'
        ]
    ],
    'types' => [
        'type'   => 'Tipo de sistema',
        'type_0' => 'SP231',
        'type_1' => 'G10',
        'type_2' => 'Otros',
        'type_3' => 'G16',
        'type_4' => 'Communicator'
    ],

    'labels' => [
        'accessPeriod'                 => 'Periodo de acceso conjunto para el instalador (en horas)',
        'describeIssue'                => 'Por favor describa el problema',
        'name'                         => 'Nombre',
        'imei'                         => 'IMEI',
        'mpass'                        => 'Código de servicio',
        'address'                      => 'Dirección',
        'contractNo'                   => 'Número de contrato',
        'objectPassword'               => 'Contraseña de objeto',
        'allAreas'                     => 'Todas las áreas',
        'email'                        => 'Correo electrónico',
        'editSensorName'               => 'Editar el nombre de sensor',
        'sensorName'                   => 'Nombre del sensor',
        'system'                       => 'Sistema',
        'pgmName'                      => 'Nombre del controlador',
        'pulseTime'                    => 'Tiempo de pulso',
        'pgmType'                      => 'Tipo de controlador',
        'pulse'                        => 'Pulso',
        'level'                        => 'Nível',
        'pgmStatus'                    => 'Estado de salida',
        'areaName'                     => 'Nombre del área',
        'pin'                          => 'PIN',
        'changeAreaStatus'             => 'Cambiar el estado de la partición',
        'changeStatus'                 => 'Cambiar el estado',
        'areasCount'                   => 'Número de particiones',
        'zoneQueueNo'                  => 'Número de zona',
        'zoneName'                     => 'Nombre',
        'persons'                      => [
            'name'           => 'Nombre de usuario',
            'email'          => 'Correo electrónico',
            'phone'          => 'Teléfono',
            'address'        => 'Dirección',
            'key'            => 'Contraseña del objeto',
            'queue_no'       => 'Número de zona.',
            'hasKey'         => '*********',
            'system_code_no' => 'Número de usuario en el sistema',
        ],
        'editPartitionName'            => 'Editar el nombre de la partición',
        'enterPartitionName'           => 'Introduzca nombre de la partición',
        'searchPhrase'                 => 'Búsqueda por la dirección, nombre de usuario, correo electrónico, IMEI...',
        'pgm_as_area'                  => 'Armar/Desarmar con PGM',
        'direct_control'               => 'Activar el Control Directo',
        'apps_password_for_arm_disarm' => 'Usar la contraseña de la aplicación para ARMAR/DESARMAR',
        'timeZone'                     => 'Zona horaria',
        'number'                       => 'número',
        'enterAreaNumber'              => 'Nombre del área',
        'numberOfPgms'                 => 'Salidas',
        'numberOfSensors'              => 'Sensores',
        'transferToNewUser'            => 'Transferencia a nuevo usuario:',
        'systemStatus'                 => 'Nível',
        'pulse_interval'               => 'Intervalo del pulso en segundos',
        'pulse_interval_value'         => ':seconds segundo|:seconds segundos',
        'seconds_short'                => 'seg.',
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
        'home'            => 'Inicio',
        'save'            => 'Guardar',
        'select'          => 'Seleccionar el sistema',
        'addNew'          => 'Añadir nuevo sistema',
        'delete'          => 'Eliminar',
        'deleteSystem'    => 'Eliminar sistema',
        'cancel'          => 'Cancelar',
        'create'          => 'Crear',
        'react'           => 'SOS',
        'rename'          => 'Cambiar el nombre',
        'zoneStatus'      => 'Estado de la Zona',
        'removeUser'      => 'Eliminar usuario',
        'addUser'         => 'Agregar usuario',
        'changePgmStatus' => 'Cambiar',
        'setAreaStatus'   => 'Configurar',
        'bypassZones'     => 'Evitar zonas (Bypass)',
        'edit'            => 'Editar',
        'addZone'         => 'Añadir zona',
        'deleteZone'      => 'Eliminar',
        'editPerson'      => 'Editar',
        'addPerson'       => 'Añadir',
        'deletePerson'    => 'Eliminar',
        'savePerson'      => 'Guardar',
        'ok'              => 'Ok',
        'logout'          => 'Salir',
        'on'              => 'Encender',
        'off'             => 'Apagar',
        'yes'             => 'Sí',
        'no'              => 'No',
        'call'            => 'Llamada',
        'clearFilter'     => 'Eliminar filtro',
        'filter'          => 'Filtro',
        'readConfig'      => 'Vuelva a leer configuración del sistema',
        'done'            => 'Hecho',
        'next'            => 'Siguiente',
        'retry'           => 'Reintentar',
        'transfer'        => 'Transferir',
        'sensors_reset'   => 'Restablecer detectores de incendios',
        'deleteSensor'    => 'Eliminar',
        'addCamera'       => 'Add camera',
        'deleteCamera'    => 'Delete camera',
    ],
    'menu'          => [
        'allEvents'                  => 'Todos los eventos',
        'areas'                      => 'Áreas',
        'pgms'                       => 'Controlar',
        'sensors'                    => 'Temperatura',
        'settings'                   => 'Configuración',
        'mobileSettings'             => 'Configuración',
        'events'                     => 'Eventos',
        'help'                       => 'Ayuda',
        'logOut'                     => 'Salir',
        'react'                      => 'SOS ayuda',
        'users'                      => 'Usuarios',
        'areaZones'                  => 'Zonas',
        'areaUsers'                  => 'Usuarios',
        'reactions'                  => 'Tipos de reacciones',
        'ipcom'                      => 'Configuración de IPCom',
        'monas'                      => 'Configuración de MonasMS',
        'systems'                    => 'Lista de sistemas',
        'grg'                        => 'Configuración de GRG',
        'global'                     => 'Configuración global',
        'removeArea'                 => 'Eliminar',
        'subscriptionSettings'       => 'Configuración de la suscripción',
        'systemInformation'          => 'Información del sistema',
        'transferOrDeleteSystem'     => 'Transferir o eliminar el sistema de',
        'transferSystem'             => 'Transferir sistema',
        'requestInstallerAssistance' => 'Solicitar asistencia de instalador',
        'cameras'                    => 'Video',
        'systemAngelcam'             => 'Camera settings',
        'angelcam'                   => 'Camera settings',
    ],
    'statuses'      => [
        'online'         => 'EN LÍNEA',
        'offline'        => 'FUERA DE LÍNEA',
        'sensor'         => ':temp °C',
        'sensorNA'       => 'N/A',
        'sensorDisabled' => 'Apagar',
        'pgmOn'          => 'Encender',
        'pgmOff'         => 'Apagar',
        'area'           => [
            'arm'             => 'Armado',
            'armInProgress'   => 'Arming...',
            'stay'            => 'Staying',
            'stayInProgress'  => 'El sistema se activa...',
            'sleep'           => 'Sleeping',
            'sleepInProgress' => 'El sistema se activa...',
            'off'             => 'Apagado',
            'setArm'          => 'Armar',
            'setStay'         => 'Stay',
            'setSleep'        => 'Sleep',
            'setOff'          => 'Apagar',
            'processing'      => 'Procesando',
            'unknown'         => 'Desconocido',
       ],
    ],
    'notifications' => [
        'areaDisabled'                 => 'Lo sentimos, no se puede cambiar el estado del área. Por favor, póngase en contacto con su instalador.',
        'pgmDisabledText'              => 'Lo sentimos, usted no puede controlar el estado de la salida. Por favor, póngase en contacto con su instalador.',
        'sensorDisabledText'           => 'Información del sensor de temperatura no está disponible con este sistema. Por favor, póngase en contacto con su instalador.',
        'areYouSure'                   => '¿Está seguro que desea eliminar?',
        'logOutConfirm'                => '¿Seguro que quieres cerrar sesión?',
        'reactMessage'                 => '¿Está seguro de que desea llamar al equipo de seguridad?',
        'pgmUsedAsArea'                => 'Salida utilizada para Armar/Desarmar el sistema de seguridad',
        'moduleOffline'                => 'El módulo está desconectado, por favor actualice o verifique la conexión',
        'saved'                        => 'Configuración guardada con éxito.',
        'systemAdded'                  => 'Sistema añadido con éxito! Recomendado: en la configuración del sistema, establezca un nombre y una dirección.',
        'systemAddedMonas'             => 'Sistema agregado, pero no se puede administrar mientras IMEI no se suministra.',
        'systemsAddedMonas'            => 'Los sistemas se agregaron, pero no se pueden administrar mientras IMEI no se suministra.',
        'systemAddedOffline'           => 'El dispositivo está fuera de línea. Sistema con funcionalidad limitada. Por favor, conecte el dispositivo y vuelva a leer configuración',
        'installerAccessGranted'       => 'Se ofrece acceso al instalador. Si desea denegar el acceso, vaya a "Configuración"/"Usuarios del sistema" y elimina el instalador',
        'transferOrDeleteSystem'       => '¿Te gusta este sistema transferir a otro usuario o eliminar el sistema?',
        'transferSystemWarning'        => 'El usuario seleccionado se convertirá en el usuario principal, y perderá el acceso al sistema. ¿Está seguro, que desea transferir el sistema?',
        'systemTransferChoiceQuestion' => '¿Que usuario debe ser el usuario principal?',
        'activating'                   => 'Activating system SIM card. Process will take 2-5 minutes. Please wait...',
        'updating'                     => 'Intento volver a leer la configuración del sistema automáticamente',
        'mustReReadSystem'             => 'Sistema no se reconoce. Por favor, compruebe si el dispositivo está conectado a red (LED de Red - Verde, Datos LED - Apagado) y vuelve a leer la configuración en la configuración del sistema',
        'highDataRateWarning'          => 'Warning - MP4 stream can cause high mobile data usage. Use this setting wisely.',
        'armWithPgmWarning'            => [ 
            'start'                         => 'You cannot "Arm/Disarm with PGM" until you specify system areas. You can do it by clicking ', 
            'link'                          => 'this',
            'end'                           => ' link.',
        ],
    ],
    'errors'        => [
        'monasConnection'     => 'Error en la conexión a MonasMS...',
        'addPerson'           => 'No se pudo a almacenar persona en MonasMS',
        'pgmStatus'           => 'Cambio de PGM no estado de la salida. Actualizar la página e inténtalo de nuevo. Actualice la página e intente de nuevo',
        'addFail'             => 'La adición de sistema ha fallado. Por favor Inténtalo más tarde.',
        'react'               => 'No se ha podido llegar a los Sos servidores',
        'bypassFail'          => 'Bypass de la zona ha fallado',
        'configRead'          => 'La lectura de La configuración del sistema ha fallado, los datos del sistema pueden ser incorrectos o incompletos. Por favor vuelva a leer configuración en configuración del sistema',
        'areaStatusFail'      => 'No se pudo cambiar el estado',
        'imeiNotFound'        => 'El identificador único ID del sistema o el código de acceso al servicio era incorrecto, los datos del sistema pueden estar incompletos',
        'mpassFail'           => 'Código de acceso de servicio incorrecto',
        'g10AreaChange'       => 'El estado del sistema se está modificando. Espere confirmación "Push notification" o actualice la ventana de estado',
        'objectNotFound'      => 'Sistema no encontrado. Compruebe si la ID única es correcta. También compruebe si el dispositivo está conectado a la red (LED de Red - verde, LED de datos - OFF)',
        'contractNotFound'    => 'Número del contrato no encontrado',
        'passwordFail'        => 'Error de contraseña',
        'autoUpdateFail'      => 'La configuración de lectura automáticamente ha fallado. Por favor compruebe si el dispositivo está encendido, otra configuración, espera para los primeros eventos y prensa vuelva a leer configuración en configuración del sistema.',
        'activationFail'      => 'No hemos podido activar el servicio de datos. Por favor Inténtalo más tarde o comuníquese con su representante de Protegus para soporte',
        'ipcom_search_denied' => 'Por favor, espere 5s antes de añadir este sistema',
        'MPASS_IS_INCORRECT'  => 'Service access code is incorrect. Please set it at Settings->System information.',
    ],
];