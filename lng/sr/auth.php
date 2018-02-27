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

    'failed'               => 'Неисправна адреса електронске поште или неисправна лозинка.',
    'throttle'             => 'Превише неуспелих покушаја пријављивања. Покушајте поново за :seconds секунди.',
    'licenseTitle'         => 'Уговор са крајњим корисником о лиценцирању',
    'sendPasswordLink'     => 'Enter your email to reset password',
    'triedToRegister'      => 'Већ сте пријављени на систем',
    'notActiveYet'         => 'Ваш налог није активан',
    'resendActivation'     => 'Поново пошаљи линк за активацију?',
    'activationResentFail' => 'Resend activation link token is invalid',
    'activationResent'     => 'Activation link was resent to your email',
    'passwordResetSent'    => 'Password reset link was sent to your email',

    'form'       => array(
        'name'            => 'Ваше пуно име',
        'email'           => 'Електронска пошта',
        'signUp'          => 'Sign up',
        'password'        => 'Лозинка',
        'reenterPassword' => 'Поново унесите своју лозинку',
        'confirmPassword' => 'Потврдите лозинку',
        'phoneNumber'     => 'Phone number (i.e. +370 . . . . . .)',
        'company'         => 'Company',
    ),
    'buttons'    => array(
        'remember'       => 'Запамти лозинку',
        'signUp'         => 'Sign up',
        'signUpInstallers' => 'Sign up for Installers',
        'logIn'          => 'Log in',
        'forgotPassword' => 'Заборавили сте лозинку?',
        'cancel'         => 'Откажи',
        'agree'          => 'Прихватам',
        'disagree'       => 'Не прихватам',
        'send'           => 'Пошаљите',
        'resetPassword'  => 'Поново постави лозинку',
        'skip'           => 'Прескочи',
        'allow'          => 'Дозволи',
        'next'           => 'Даље',
        'previous'       => 'Претходно',
        'finish'         => 'Завршите',
        'loginView'      => 'Back to Login page',
        'backToSystems'  => 'Back to System list',
    ),
    'activation' => array(
        'required' => 'Требало би да примите електронску пошту са линком за активирање.',
        'failed'   => 'Активација није успела.',
    ),

    'emailChangeError' => 'Токен за промену адресе електронске поште није важећи.',
    'emailChanged'     => 'Адреса електронске поште је успешно промењена.',

    'pushNotifications'       => array(
        'title' => 'Пуш обавештења',
        'text'  => '"Protegus" would like to send you push notifications. These can be configured in Settings.',
    ),
    'passwordResetTokenError' => 'Токен за промену лозинке је неважећи.',
    'tutorial'                => array(
        'title'  => 'Помоћ',
        'title1' => 'Додавање новог система',
        'text1'  => 'Да бисте додали нови систем: <br>Притисните <b>Изаберите систем</b> и онда <b>Додајте нови систем +</b>.',
        'title2' => '&nbsp;',
        'text2'  => 'Enter the <b>Unique ID</b> of your device. Unique ID can be found on the packaging of the product.<br>
Enter the <b>"Protegus" Service Access code</b>. Access code is an authentication code to establish connection with your communication device. Code must match the one written in the communication device. By default the code is 123456. If Access code has been changed, contact the responsible personnel.',
        'title3' => '&nbsp;',
        'text3'  => 'Press <b>Create</b> to add new system.<br>
The very first user to add the system, becomes its main user. He can add new users to the system, edit names of the areas, zones, outputs, sensors and to edit other various system parameters.',
    ),

    'pageExpired' => 'Страница је истекла покушајте поново',

    'errors' => array(
        '401' => 'Забрањен приступ.',
        '503' => 'Одмах се враћам',
        '404' => 'Није пронађен.',
        '500' => 'Сервер је заузет покушајте поново касније',
        '404_no_system' => 'System not found or has been deleted.',
    ),
);
