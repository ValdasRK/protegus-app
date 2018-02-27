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

    'failed'               => 'Incorrect email or password.',
    'throttle'             => 'Too many login attempts. Please try again in :seconds seconds.',
    'licenseTitle'         => 'End-user license agreement',
    'sendPasswordLink'     => 'Enter your email to reset password',
    'triedToRegister'      => 'You are already registered',
    'notActiveYet'         => 'Your account is not active',
    'resendActivation'     => 'Resend activation link?',
    'activationResentFail' => 'Resend activation link token is invalid',
    'activationResent'     => 'Activation link was resent to your email',
    'passwordResetSent'    => 'Password reset link was sent to your email',

    'form'       => array(
        'name'            => 'Your full name',
        'email'           => 'E-mail',
        'signUp'          => 'Sign up',
        'password'        => 'Password',
        'reenterPassword' => 'Re-enter your password',
        'confirmPassword' => 'Confirm Password',
        'phoneNumber'     => 'Phone number (i.e. +370 . . . . . .)',
        'company'         => 'Company',
    ),
    'buttons'    => array(
        'remember'       => 'Remember password',
        'signUp'         => 'Sign up',
        'signUpInstallers' => 'Sign up for Installers',
        'logIn'          => 'Log in',
        'forgotPassword' => 'Forgot your password?',
        'cancel'         => 'Cancel',
        'agree'          => 'Agree',
        'disagree'       => 'Disagree',
        'send'           => 'Send',
        'resetPassword'  => 'Reset Password',
        'skip'           => 'Skip',
        'allow'          => 'Allow',
        'next'           => 'Next',
        'previous'       => 'Previous',
        'finish'         => 'Finish',
        'loginView'      => 'Back to Login page',
        'backToSystems'  => 'Back to System list',
    ),
    'activation' => array(
        'required' => 'You should receive an email with the activation link.',
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
        'title'  => 'Help',
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
        '404' => 'Not found.',
        '500' => 'Server is busy. Please try again later.',
        '404_no_system' => 'System not found or has been deleted.',
    ),
);
