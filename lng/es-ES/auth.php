<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed'               => 'Correo electrónico o la contraseña esta incorrecta.',
    'throttle'             => 'Demasiados intentos de inicio de sesión. Vuelva a intentarlo en :seconds seconds.',
    'licenseTitle'         => 'Contrato de licencia de usuario final',
    'sendPasswordLink'     => 'Ingresa su email para restablecer contraseña',
    'triedToRegister'      => 'Ya estás registrado',
    'notActiveYet'         => 'Su cuenta no está activa',
    'resendActivation'     => '¿Reenviar enlace de activación?',
    'activationResentFail' => 'Clave en el enlace de activación no es válida',
    'activationResent'     => 'Se ha enviado el enlace de activación a su correo electrónico',
    'passwordResetSent'    => 'Enlace de restablecimiento de contraseña fue enviada a su correo electrónico',

    'form'       => array(
        'name'            => 'Nombre completo',
        'email'           => 'Correo electrónico',
        'signUp'          => 'Regístrate',
        'password'        => 'Contraseña',
        'reenterPassword' => 'Vuelva a introducir su contraseña',
        'confirmPassword' => 'Confirmar contraseña',
        'phoneNumber'     => 'Número de teléfono (es decir, de +370....)',
        'company'         => 'Empresa',
    ),
    'buttons'    => array(
        'remember'       => 'Recordar contraseña',
        'signUp'         => 'Regístrate',
        'signUpInstallers' => 'Registro de Instaladores',
        'logIn'          => 'Iniciar',
        'forgotPassword' => '¿Has olvidado tu contraseña?',
        'cancel'         => 'Cancelar',
        'agree'          => 'Estoy de acuerdo',
        'disagree'       => 'No estoy de acuerdo',
        'send'           => 'Enviar',
        'resetPassword'  => 'Restablecer la contraseña',
        'skip'           => 'Saltar',
        'allow'          => 'Permitir',
        'next'           => 'Siguiente',
        'previous'       => 'Anterior',
        'finish'         => 'Terminar',
        'loginView'      => 'Volver a la página de inicio',
        'backToSystems'  => 'Volver a la lista de sistemas',
    ),
    'activation' => array(
        'required' => 'Recibirá un correo electrónico con el enlace de activación.',
        'failed'   => 'Error de activación.',
    ),

    'emailChangeError' => 'La clave de enlace para cambiar la dirección de correo electrónico no es válida.',
    'emailChanged'     => 'Correo electrónico se ha cambiado correctamente.',

    'pushNotifications'       => array(
        'title' => 'Notificaciones Push',
        'text'  => '"Protegus" le gustaría enviar notificaciones Push. Estos pueden ser configurados en Configuración.',
    ),
    'passwordResetTokenError' => 'La clave de enlace para cambiar la contraseña no es válida.',
    'tutorial'                => array(
        'title'  => 'Ayuda',
        'title1' => 'Añadir nuevo sistema',
        'text1'  => 'Para crear un nuevo sistema haz las siguientes:<br>
Pulse <b>Seleccionar sistema</b>y pulse<b>Agregar nuevo sistema +</b>.',
        'title2' => '&nbsp;',
        'text2'  => 'Introduzca el<b>Unique ID</b> de su dispositivo. Identificación ID se puede encontrar en el envase del producto.<br>
Introduzca el <b>"Protegus" Service Access code</b>. Código de acceso es un código de autentificación para establecer la conexión con su dispositivo de comunicación. El código debe coincidir con el escrito en el dispositivo de comunicación. De forma predeterminada, el código es 123456. Si se ha cambiado el código de acceso, póngase en contacto con el personal responsable.',
        'title3' => '&nbsp;',
        'text3'  => 'Presione <b>Create</b> para añadir el nuevo sistema.<br>
El primer usuario para añadir el sistema, se convierte en el principal usuario de la misma, que puede añadir nuevos usuarios al sistema, editar los nombres de las áreas, zonas, salidas, sensores y editar otros varios parámetros del sistema.',
    ),

    'pageExpired' => 'Página ha caducado, por favor, inténtelo de nuevo',

    'errors' => array(
        '401' => 'No tiene permiso.',
        '503' => 'Temporalmente no disponible.',
        '404' => 'No se encuentra la página.',
        '500' => 'El servidor está ocupado. Por favor, inténtelo de nuevo más tarde.',
        '404_no_system' => 'Sistema no encontrado o eliminado.',
    ),
);
