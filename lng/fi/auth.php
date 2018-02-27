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

    'failed'               => 'Nämä tunnistetiedot eivät vastaa tietomme.',
    'throttle'             => 'Liikaa kirjautumisyrityksiä. Yritä uudelleen :seconds sekunnin päästä.',
    'licenseTitle'         => 'Käyttöoikeussopimus',
    'sendPasswordLink'     => 'Enter your email to reset password',
    'triedToRegister'      => 'Olet jo rekisteröitynyt',
    'notActiveYet'         => 'Tili ei ole aktiivinen',
    'resendActivation'     => 'Lähetetäänkö aktivointilinkki?',
    'activationResentFail' => 'Aktivointilinkki  ei kelpaa',
    'activationResent'     => 'Activation link was resent to your email',
    'passwordResetSent'    => 'Password reset link was sent to your email',

    'form'       => array(
        'name'            => 'Anna koko nimesi',
        'email'           => 'Sähköposti',
        'signUp'          => 'Sign up',
        'password'        => 'Salasana',
        'reenterPassword' => 'Kirjoita salasanasi uudelleen',
        'confirmPassword' => 'Vahvista salasana',
        'phoneNumber'     => 'Phone number (i.e. +370 . . . . . .)',
        'company'         => 'Company',
    ),
    'buttons'    => array(
        'remember'       => 'Muista salasana',
        'signUp'         => 'Sign up',
        'signUpInstallers' => 'Sign up for Installers',
        'logIn'          => 'Log in',
        'forgotPassword' => 'Unohditko salasanasi?',
        'cancel'         => 'Peruuta',
        'agree'          => 'Samaa mieltä',
        'disagree'       => 'Eri mieltä',
        'send'           => 'Lähetä',
        'resetPassword'  => 'Nollaa salasana',
        'skip'           => 'Ohita',
        'allow'          => 'Salli',
        'next'           => 'Seuraava',
        'previous'       => 'Edellinen',
        'finish'         => 'Valmis',
        'loginView'      => 'Back to Login page',
        'backToSystems'  => 'Back to System list',
    ),
    'activation' => array(
        'required' => 'Saat sähköpostilla aktivointilinkin.',
        'failed'   => 'Aktivointi epäonnistui.',
    ),

    'emailChangeError' => 'Sähköpostitunnus on virheellinen.',
    'emailChanged'     => 'Sähköposti on vaihdettu.',

    'pushNotifications'       => array(
        'title' => 'Ilmoitukset puhelimeen',
        'text'  => '"Protegus" would like to send you push notifications. These can be configured in Settings.',
    ),
    'passwordResetTokenError' => 'Salasanan nollaus ei onnistunut!',
    'tutorial'                => array(
        'title'  => 'Jelppiä!',
        'title1' => 'Lisätään uusi hälytysjärjestelmä',
        'text1'  => 'Luo uusi hälytysjärjestelmä seuraavasti: <br>Valitse <b>Valitse hälytysjärjestelmä</b> ja paina <b>Lisää uusi hälytysjärjestelmä +</b>.',
        'title2' => '&nbsp;',
        'text2'  => 'Enter the <b>Unique ID</b> of your device. Unique ID can be found on the packaging of the product.<br>
Enter the <b>"Protegus" Service Access code</b>. Access code is an authentication code to establish connection with your communication device. Code must match the one written in the communication device. By default the code is 123456. If Access code has been changed, contact the responsible personnel.',
        'title3' => '&nbsp;',
        'text3'  => 'Press <b>Create</b> to add new system.<br>
The very first user to add the system, becomes its main user. He can add new users to the system, edit names of the areas, zones, outputs, sensors and to edit other various system parameters.',
    ),

    'pageExpired' => 'Sivu on vanhentunut, yritä uudelleen',

    'errors' => array(
        '401' => 'Ei käyttöoikeuksia.',
        '503' => 'Tule heti takaisin.',
        '404' => 'Ei löydy.',
        '500' => 'Jotain hirvittävää on tapahtunut.',
        '404_no_system' => 'System not found or has been deleted.',
    ),
);
