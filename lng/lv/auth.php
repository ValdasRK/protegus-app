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

    'failed'               => 'Nepareizs e-pasts vai parole.',
    'throttle'             => 'Pārāk daudz pieteikšanās mēģinājumu. Lūdzu, mēģiniet vēlreiz :seconds seconds.',
    'licenseTitle'         => 'Gala lietotāja licences līgums',
    'sendPasswordLink'     => 'Enter your email to reset password',
    'triedToRegister'      => 'Jūs jau esat reģistrējies',
    'notActiveYet'         => 'Konts nav aktivizēts',
    'resendActivation'     => 'Atkārtoti nosūtīt aktivizācijas saiti?',
    'activationResentFail' => 'Atkārtoti nosūtīta aktivizācijas saite nav derīga',
    'activationResent'     => 'Activation link was resent to your email',
    'passwordResetSent'    => 'Password reset link was sent to your email',

    'form'       => array(
        'name'            => 'Jūsu pilnais vārds',
        'email'           => 'E-pasts',
        'signUp'          => 'Sign up',
        'password'        => 'Parole',
        'reenterPassword' => 'Lūdzu, ievadiet savu paroli atkārtoti',
        'confirmPassword' => 'Apstipriniet paroli',
        'phoneNumber'     => 'Phone number (i.e. +370 . . . . . .)',
        'company'         => 'Company',
    ),
    'buttons'    => array(
        'remember'       => 'Atcerēties paroli',
        'signUp'         => 'Sign up',
        'signUpInstallers' => 'Sign up for Installers',
        'logIn'          => 'Log in',
        'forgotPassword' => 'Aizmirsāt savu paroli?',
        'cancel'         => 'Atcelt',
        'agree'          => 'Piekrītu',
        'disagree'       => 'Nepiekrītu',
        'send'           => 'Nosūtīt',
        'resetPassword'  => 'Atiestatīt paroli',
        'skip'           => 'Izlaist',
        'allow'          => 'Atļaut',
        'next'           => 'Tālāk',
        'previous'       => 'Iepriekšējais',
        'finish'         => 'Pabeigt',
        'loginView'      => 'Back to Login page',
        'backToSystems'  => 'Back to System list',
    ),
    'activation' => array(
        'required' => 'Jūs saņemsiet e-pastu ar aktivizēšanas saiti.',
        'failed'   => 'Aktivēšana neizdevās.',
    ),

    'emailChangeError' => 'E-pasta izmaiņas zīme ir nederīga.',
    'emailChanged'     => 'E-pasts tika veiksmīgi mainīts.',

    'pushNotifications'       => array(
        'title' => 'Uznirstošais paziņojums',
        'text'  => '"Protegus" would like to send you push notifications. These can be configured in Settings.',
    ),
    'passwordResetTokenError' => 'Paroles atjaunošanas zīme ir nederīga.',
    'tutorial'                => array(
        'title'  => 'Palīdzība',
        'title1' => 'Pievieno jaunu sistēmu',
        'text1'  => 'Lai izveidotu jaunu sistēmu:<br>
Nospiediet <b>Atlasiet sistēmu</b> un pēc tam <b>Pievienot jaunu sistēmu +</b>.',
        'title2' => '&nbsp;',
        'text2'  => 'Enter the <b>Unique ID</b> of your device. Unique ID can be found on the packaging of the product.<br>
Enter the <b>"Protegus" Service Access code</b>. Access code is an authentication code to establish connection with your communication device. Code must match the one written in the communication device. By default the code is 123456. If Access code has been changed, contact the responsible personnel.',
        'title3' => '&nbsp;',
        'text3'  => 'Press <b>Create</b> to add new system.<br>
The very first user to add the system, becomes its main user. He can add new users to the system, edit names of the areas, zones, outputs, sensors and to edit other various system parameters.',
    ),

    'pageExpired' => 'Lapas lietošanas laiks ir beidzies, lūdzu, mēģiniet vēlreiz',

    'errors' => array(
        '401' => 'Nav atļaujas.',
        '503' => 'Atgriezties.',
        '404' => 'Nav atrasts.',
        '500' => 'Serveris ir aizņemts. Lūdzu, pamēģiniet vēlreiz vēlāk.',
        '404_no_system' => 'System not found or has been deleted.',
    ),
);
