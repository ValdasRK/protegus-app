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

    'failed'               => 'Estas credenciais não coincidem com os nossos registos.',
    'throttle'             => 'Demasiadas tentativas de Login. Por favor tente novamente em :seconds segundos.',
    'licenseTitle'         => 'Fim-utilizador contrato de licença',
    'sendPasswordLink'     => 'Enter your email to reset password',
    'triedToRegister'      => 'Você já está registado',
    'notActiveYet'         => 'Sua conta não está ativa',
    'resendActivation'     => 'Reenviar link de ativação?',
    'activationResentFail' => 'Reenviar link de ligação token é inválido',
    'activationResent'     => 'Activation link was resent to your email',
    'passwordResetSent'    => 'Password reset link was sent to your email',

    'form'       => array(
        'name'            => 'Seu nome completo',
        'email'           => 'E-mail',
        'signUp'          => 'Sign up',
        'password'        => 'Senha',
        'reenterPassword' => 'Rescreva sua senha',
        'confirmPassword' => 'Confirme sua Senha',
        'phoneNumber'     => 'Phone number (i.e. +370 . . . . . .)',
        'company'         => 'Company',
    ),
    'buttons'    => array(
        'remember'       => 'Lembrar senha',
        'signUp'         => 'Sign up',
        'signUpInstallers' => 'Sign up for Installers',
        'logIn'          => 'Log in',
        'forgotPassword' => 'Esqueceu-se da sua senha?',
        'cancel'         => 'Cancelar',
        'agree'          => 'Aceitar',
        'disagree'       => 'Discordar',
        'send'           => 'Enviar',
        'resetPassword'  => 'Redefinir Senha',
        'skip'           => 'Saltar',
        'allow'          => 'Autorizar',
        'next'           => 'Seguinte',
        'previous'       => 'Anterior',
        'finish'         => 'Terminar',
        'loginView'      => 'Back to Login page',
        'backToSystems'  => 'Back to System list',
    ),
    'activation' => array(
        'required' => 'Você deve receber um email com o link de ativação.',
        'failed'   => 'Ativação falhou.',
    ),

    'emailChangeError' => 'Token para alterar o E-mail é inválido.',
    'emailChanged'     => 'E-mail foi alterado com êxito.',

    'pushNotifications'       => array(
        'title' => 'Notificações push',
        'text'  => '"Protegus" would like to send you push notifications. These can be configured in Settings.',
    ),
    'passwordResetTokenError' => 'Token de redefinição de senha é inválido.',
    'tutorial'                => array(
        'title'  => 'Ajuda',
        'title1' => 'Adicionando novo sistema',
        'text1'  => 'Para criar um novo sistema:<br>Carregue <b>Selecione um sistema</b> e depois <b>Adicionar novo sistema +</b>.',
        'title2' => '&nbsp;',
        'text2'  => 'Enter the <b>Unique ID</b> of your device. Unique ID can be found on the packaging of the product.<br>
Enter the <b>"Protegus" Service Access code</b>. Access code is an authentication code to establish connection with your communication device. Code must match the one written in the communication device. By default the code is 123456. If Access code has been changed, contact the responsible personnel.',
        'title3' => '&nbsp;',
        'text3'  => 'Press <b>Create</b> to add new system.<br>
The very first user to add the system, becomes its main user. He can add new users to the system, edit names of the areas, zones, outputs, sensors and to edit other various system parameters.',
    ),

    'pageExpired' => 'Página expirou, por favor, tente novamente',

    'errors' => array(
        '401' => 'Sem permissão.',
        '503' => 'Volto logo.',
        '404' => 'Não encontrado.',
        '500' => 'Servidor está ocupado. Por favor, tente novamente mais tarde.',
        '404_no_system' => 'System not found or has been deleted.',
    ),
);
