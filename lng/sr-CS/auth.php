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

    'failed'               => 'Neispravan e-mail ili lozinka.',
    'throttle'             => 'Too many login attempts. Please try again in :seconds seconds.',
    'licenseTitle'         => 'Ugovor sa krajnjim korisnikom licence',
    'sendPasswordLink'     => 'Unesite svoj email da biste poništili lozinku',
    'triedToRegister'      => 'Već ste registrovani',
    'notActiveYet'         => 'Vaš nalog nije aktivan',
    'resendActivation'     => 'Ponovo pošalji link za aktivaciju?',
    'activationResentFail' => 'Ponovo pošalji aktivacioni link Token nije ispravan',
    'activationResent'     => 'Aktivacioni link je poslat na vaš email',
    'passwordResetSent'    => 'Pasvord reset link je poslata na vaš email',

    'form'       => array(
        'name'            => 'Vaše puno ime',
        'email'           => 'E-mail',
        'signUp'          => 'Prijavi se',
        'password'        => 'Šifra',
        'reenterPassword' => 'Ponovo unesite lozinku',
        'confirmPassword' => 'Potvrdite lozinku',
        'phoneNumber'     => 'Број телефона (тј 381......)',
        'company'         => 'Kompanija',
    ),
    'buttons'    => array(
        'remember'       => 'Zapamti lozinku',
        'signUp'         => 'Prijavi se',
        'signUpInstallers' => 'Prijavite se za instalatere',
        'logIn'          => 'Uloguj se',
        'forgotPassword' => 'Zaboravili ste šifru?',
        'cancel'         => 'Poništi',
        'agree'          => 'Dogovoriti se',
        'disagree'       => 'Ne slagati se',
        'send'           => 'Pošaljite',
        'resetPassword'  => 'Reset šifre',
        'skip'           => 'Preskoči',
        'allow'          => 'Dozvoli',
        'next'           => 'Sledeći',
        'previous'       => 'Prethodni',
        'finish'         => 'Gotovo',
        'loginView'      => 'Povratak na stranu za prijavu',
        'backToSystems'  => 'Back to System list',
    ),
    'activation' => array(
        'required' => 'Trebalo bi da dobijete mail sa linkom za aktivaciju.',
        'failed'   => 'Activation failed.',
    ),

    'emailChangeError' => 'Token to change the E-mail is invalid.',
    'emailChanged'     => 'E-mail was changed successfully.',

    'pushNotifications'       => array(
        'title' => 'Push notifications',
        'text'  => '"Protegus" would like to send you push notifications. These can be configured in Settings.',
    ),
    'passwordResetTokenError' => 'Password reset token is invalid.',
    'tutorial'                => array(
        'title'  => 'Pomoć',
        'title1' => 'Adding new system',
        'text1'  => 'To create a new system:<br>
Press <b>Select system</b> and then <b>Add new system +</b>.',
        'title2' => '&nbsp;',
        'text2'  => 'Enter the <b>Unique ID</b> of your device. Unique ID can be found on the packaging of the product.<br>
Enter the <b>"Protegus" Service Access code</b>. Access code is an authentication code to establish connection with your communication device. Code must match the one written in the communication device. By default the code is 123456. If Access code has been changed, contact the responsible personnel.',
        'title3' => '&nbsp;',
        'text3'  => 'Press <b>Create</b> to add new system.<br>
The very first user to add the system, becomes its main user. He can add new users to the system, edit names of the areas, zones, outputs, sensors and to edit other various system parameters.',
    ),

    'pageExpired' => 'Page has expired, please try again',

    'errors' => array(
        '401' => 'No permissions.',
        '503' => 'Be right back.',
        '404' => 'Nije pronađeno.',
        '500' => 'Server is busy. Please try again later.',
        '404_no_system' => 'System not found or has been deleted.',
    ),
);
