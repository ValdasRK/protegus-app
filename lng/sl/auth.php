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

    'failed'               => 'Napačna e-pošta ali geslo.',
    'throttle'             => 'Prekoračili ste število možnih prijav. Poskusite znova čez :seconds sekund.',
    'licenseTitle'         => 'Licenčna pogodba za končnega uporabnika

',
    'sendPasswordLink'     => 'Vnesite vaš elektronski naslov za ponastavitev gesla',
    'triedToRegister'      => 'Ste že registrirani',
    'notActiveYet'         => 'Vaš račun ni aktiven',
    'resendActivation'     => 'Ponovno pošljem aktivacijski mail?',
    'activationResentFail' => 'Aktivacijski link zahtevka je neveljaven',
    'activationResent'     => 'Aktivacijski link je bil poslan na vaš elektronski naslov',
    'passwordResetSent'    => 'Link za resetiranje gesla je bil poslan na vaš elektronski naslov',

    'form'       => array(
        'name'            => 'Vaše polno ime',
        'email'           => 'E-pošta',
        'signUp'          => 'Prijava',
        'password'        => 'Geslo',
        'reenterPassword' => 'Ponovno vnesite geslo',
        'confirmPassword' => 'Potrditev gesla',
        'phoneNumber'     => 'Telefonska številka (+386......)',
        'company'         => 'Podjetje',
    ),
    'buttons'    => array(
        'remember'       => 'Zapomni si geslo',
        'signUp'         => 'Registracija',
        'signUpInstallers' => 'Prijava za instalaterje',
        'logIn'          => 'Prijava',
        'forgotPassword' => 'Ste pozabili geslo?',
        'cancel'         => 'Prekliči',
        'agree'          => 'Strinjam se',
        'disagree'       => 'Ne strinjam se',
        'send'           => 'Pošlji',
        'resetPassword'  => 'Reset gesla',
        'skip'           => 'Preskoči',
        'allow'          => 'Dovoli',
        'next'           => 'Naslednji',
        'previous'       => 'Prejšnje',
        'finish'         => 'Konec',
        'loginView'      => 'Nazaj na prijavo strani',
        'backToSystems'  => 'Nazaj na sistemski list',
    ),
    'activation' => array(
        'required' => 'Morali bi prejeti sporočilo z aktivacijskim linkom.',
        'failed'   => 'Aktivacija ni uspela.',
    ),

    'emailChangeError' => 'Zahteva za spremembo E-naslova ni veljavna.',
    'emailChanged'     => 'E-mail je uspešno spremenjen.',

    'pushNotifications'       => array(
        'title' => 'Potisna sporočila',
        'text'  => '"Protegus" vam želi poslati potisno sporočilo. To lahko nastavite v Nastavitvah.',
    ),
    'passwordResetTokenError' => 'Zahteva za reset gesla ni veljavna.',
    'tutorial'                => array(
        'title'  => 'pomoč',
        'title1' => 'Dodajanje novega sistema',
        'text1'  => 'Za dodajanje novega sistema:<br>
Pritisnite<b> Izberi sistem<b> in nato Dodaj nov sistem +<br>.',
        'title2' => '&nbsp;',
        'text2'  => 'Vnesite <b>Unikatni ID</b>vaše naprave. Unikatni ID lahko najdete na embalaži izdelka.<br>
Vnesite <b>"Protegus"servisno dostopno kodo</b>. Dostopna koda je potrebna za preverjanje pristnosti pri vzpostavljanju povezave z vašo komunikacijsko napravo. Koda se mora ujemati s tisto, ki je vnešena v napravi. Tovarniška koda je 123456. Če je bila koda spremenjena, kontaktirajte pooblaščeno osebo.',
        'title3' => '&nbsp;',
        'text3'  => 'Pritisnite <b>Ustvari</b> za dodajanje novega sistema.<br>
Prvi uporabnik, ki doda sistem, postane Glavni uporabnik. On lahko dodaja nove uporabnike v sistem, ureja imena particij, con, izhodov, senzorjev in ostalim različnim parametrom sistema.',
    ),

    'pageExpired' => 'Spletni naslov je potekel, prosim poskusite ponovno',

    'errors' => array(
        '401' => 'Ni dovoljeno.',
        '503' => 'Trenutek prosim.',
        '404' => 'Ni najdeno.',
        '500' => 'Strežnik je zaseden. Poizkusite znova kasneje.',
        '404_no_system' => 'Sistema ni mogoče najti ali pa je izbrisan.',
    ),
);
