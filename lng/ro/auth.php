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

    'failed'               => 'E-mail / parolă incorecte.',
    'throttle'             => 'Prea multe încercări de autentificare. Vă rugăm să încercați din nou în :seconds secunde.',
    'licenseTitle'         => 'Licența de utilizare',
    'sendPasswordLink'     => 'Enter your email to reset password',
    'triedToRegister'      => 'Sunteți înregistrat deja',
    'notActiveYet'         => 'Contul dumneavoastră nu este activ',
    'resendActivation'     => 'Retransmit link-ul de activare?',
    'activationResentFail' => 'Tokenul pentru activare link este gresit',
    'activationResent'     => 'Activation link was resent to your email',
    'passwordResetSent'    => 'Password reset link was sent to your email',

    'form'       => array(
        'name'            => 'Numele tau complet',
        'email'           => 'E-mail',
        'signUp'          => 'Sign up',
        'password'        => 'Parolă',
        'reenterPassword' => 'Re-Introdu parola',
        'confirmPassword' => 'Confirmare Parola',
        'phoneNumber'     => 'Phone number (i.e. +370 . . . . . .)',
        'company'         => 'Company',
    ),
    'buttons'    => array(
        'remember'       => 'Memorează Parola',
        'signUp'         => 'Sign up',
        'signUpInstallers' => 'Sign up for Installers',
        'logIn'          => 'Log in',
        'forgotPassword' => 'Ți-ai uitat parola?',
        'cancel'         => 'Renunță',
        'agree'          => 'Sunt de acord',
        'disagree'       => 'Nu sunt de acord',
        'send'           => 'Expediază',
        'resetPassword'  => 'Resetare Parolă',
        'skip'           => 'Sari peste',
        'allow'          => 'Permite',
        'next'           => 'Înainte',
        'previous'       => 'Precedent',
        'finish'         => 'Finalizează',
        'loginView'      => 'Back to Login page',
        'backToSystems'  => 'Back to System list',
    ),
    'activation' => array(
        'required' => 'Ar trebui să primiţi un e-mail cu linkul de activare.',
        'failed'   => 'Activare eșuată.',
    ),

    'emailChangeError' => 'Token-ul pentru a schimba adresa de E-mail nu este valid.',
    'emailChanged'     => 'Adresa de E-mail a fost schimbată cu succes.',

    'pushNotifications'       => array(
        'title' => 'Notificari Instant',
        'text'  => '"Protegus" would like to send you push notifications. These can be configured in Settings.',
    ),
    'passwordResetTokenError' => 'Simbol de resetare parola incorect.',
    'tutorial'                => array(
        'title'  => 'Ajutor',
        'title1' => 'Adaugă un nou sistem',
        'text1'  => 'Pentru a crea un nou sistem: <br>
apăsaţi <b>Selectaţi sistemul</b>şi apoi <b>Adauga noul sistem +</b>.',
        'title2' => '&nbsp;',
        'text2'  => 'Enter the <b>Unique ID</b> of your device. Unique ID can be found on the packaging of the product.<br>
Enter the <b>"Protegus" Service Access code</b>. Access code is an authentication code to establish connection with your communication device. Code must match the one written in the communication device. By default the code is 123456. If Access code has been changed, contact the responsible personnel.',
        'title3' => '&nbsp;',
        'text3'  => 'Press <b>Create</b> to add new system.<br>
The very first user to add the system, becomes its main user. He can add new users to the system, edit names of the areas, zones, outputs, sensors and to edit other various system parameters.',
    ),

    'pageExpired' => 'Pagina a expirat, vă rugăm să încercaţi din nou',

    'errors' => array(
        '401' => 'Nu aveti permisiunea.',
        '503' => 'Revin imediat.',
        '404' => 'Nu a fost gasit.',
        '500' => 'Serverul este ocupat. Vă rugăm să încercaţi din nou mai târziu.',
        '404_no_system' => 'System not found or has been deleted.',
    ),
);
