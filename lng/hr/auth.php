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
    'throttle'             => 'Previše pokušaja prijave . Molimo pokušajte ponovo za :seconds sekundi.',
    'licenseTitle'         => 'Licencni ugovor',
    'sendPasswordLink'     => 'Unesite e-mail za resetiranje lozinke',
    'triedToRegister'      => 'Već ste registrirani',
    'notActiveYet'         => 'Vaš račun nije aktivan',
    'resendActivation'     => 'Ponovno pošalji aktivacijski link?',
    'activationResentFail' => 'Token za ponovnu aktivaciju nije valjan',
    'activationResent'     => 'Aktivacijski link poslan na vaš e-mail',
    'passwordResetSent'    => 'Link za resetiranje lozinke poslan na vaš e-mail',

    'form'       => array(
        'name'            => 'Ime i prezime',
        'email'           => 'E-Mail',
        'signUp'          => 'Registracija',
        'password'        => 'Lozinka',
        'reenterPassword' => 'Ponovo unesite lozinku',
        'confirmPassword' => 'Potvrdi Lozinku',
        'phoneNumber'     => 'Broj telefona (tj. +370...)',
        'company'         => 'Tvrtka',
    ),
    'buttons'    => array(
        'remember'       => 'Zapamti lozinku',
        'signUp'         => 'Registracija',
        'signUpInstallers' => 'Prijava za instalatere',
        'logIn'          => 'Prijavi se',
        'forgotPassword' => 'Zaboravili ste lozinku?',
        'cancel'         => 'Poništi',
        'agree'          => 'Slažem se',
        'disagree'       => 'Ne slažem se',
        'send'           => 'Pošalji',
        'resetPassword'  => 'Resetiraj zaporku',
        'skip'           => 'Preskoči',
        'allow'          => 'Dopusti',
        'next'           => 'Slijedeći',
        'previous'       => 'Prethodni',
        'finish'         => 'Završi',
        'loginView'      => 'Natrag na prijavu',
        'backToSystems'  => 'Back to System list',
    ),
    'activation' => array(
        'required' => 'Trebao bi primiti e-mail s aktivacijskim linkom.',
        'failed'   => 'Aktiviranje nije uspjelo.',
    ),

    'emailChangeError' => 'Token za promjenu e-maila nije valjan.',
    'emailChanged'     => 'E-mail uspješno promijenjen.',

    'pushNotifications'       => array(
        'title' => 'Push obavijesti',
        'text'  => '"Protegus" Vam želi slati Push obavijesti. Podešavanja vršite u Postavkama.',
    ),
    'passwordResetTokenError' => 'Token za reset lozinke nije valjan.',
    'tutorial'                => array(
        'title'  => 'Pomoć',
        'title1' => 'Dodavanje novog sustava',
        'text1'  => 'Za stvaranje novog sustava: <br>pritisnite <b>Odaberite sustav</b> i onda <b>Dodavanje novog sustava +</b>.',
        'title2' => '&nbsp;',
        'text2'  => 'Unesite <b>IMEI</b> uređaja. IMEI se nalazi na ambalaži proizvoda. <br>Unesite <b>"Protegus" Access Code</b>. To je sigurnosni kod za uspostavljanje veze s uređajem. Lozinka mora odgovarati onoj što je zapisana u uređaju. Tvornička lozinka je 123456. Ukoliko je promijenjena, obratite se odgovornom osoblju.',
        'title3' => '&nbsp;',
        'text3'  => 'Pritisnite <b>Stvori</b> za dodavanje novog sustava. <br>
Prvi korisnik koji dodaje sustav postaje glavni korisnik gdje može dodati nove korisnike u sustav, uređivati imena područja, zone, PGM izlaze, senzore i druge parametare sustava.',
    ),

    'pageExpired' => 'Stranica je istekla, molimo pokušajte ponovno',

    'errors' => array(
        '401' => 'Nema dozvole.',
        '503' => 'Vraćam se odmah.',
        '404' => 'Nije pronađeno.',
        '500' => 'Poslužitelj je zauzet. Pokušajte ponovo kasnije.',
        '404_no_system' => 'System not found or has been deleted.',
    ),
);
