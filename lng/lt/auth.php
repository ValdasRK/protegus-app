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

    'failed'               => 'Neatitinka el. pašto adresas arba slaptažodis',
    'throttle'             => 'Per daug bandymų prisijungti. Bandykite po :seconds sekundžių.',
    'licenseTitle'         => 'Galutinio vartotojo licencijos sutartis',
    'sendPasswordLink'     => 'Įrašykite savo el. pašto adresą jei norite atstatyti slaptažodį',
    'triedToRegister'      => 'Jūsų vartotojo vardas jau yra užregistruotas',
    'notActiveYet'         => 'Jūsų paskyra neaktyvuota',
    'resendActivation'     => 'Pakartotinai išsiųsti aktyvacijos nuorodą?',
    'activationResentFail' => 'Persiųstos aktyvacijos nuorodos raktas yra neteisingas',
    'activationResent'     => 'Aktyvacijos nuoroda buvo išsiųsta Jūsų nurodytu el. pašto adresu',
    'passwordResetSent'    => 'Slaptažodžio atstatymo nuoroda buvo išsiųsta Jūsų nurodytu el. pašto adresu',

    'form'       => array(
        'name'            => 'Jūsų Vardas Pavardė',
        'email'           => 'El. pašto adresas',
        'signUp'          => 'Registruotis',
        'password'        => 'Slaptažodis',
        'reenterPassword' => 'Pakartokite slaptažodį',
        'confirmPassword' => 'Patvirtinkite slaptažodį',
        'phoneNumber'     => 'Telefono numeris (pvz. + 370......)',
        'company'         => 'Įmonė',
    ),
    'buttons'    => array(
        'remember'       => 'Atsiminti slaptažodį',
        'signUp'         => 'Registruotis',
        'signUpInstallers' => 'Registracija instaliuotojams',
        'logIn'          => 'Prisijungti',
        'forgotPassword' => 'Pamiršote savo slaptažodį?',
        'cancel'         => 'Atšaukti',
        'agree'          => 'Sutinku',
        'disagree'       => 'Nesutinku',
        'send'           => 'Siųsti',
        'resetPassword'  => 'Atstatyti slaptažodį',
        'skip'           => 'Praleisti',
        'allow'          => 'Leisti',
        'next'           => 'Toliau',
        'previous'       => 'Atgal',
        'finish'         => 'Pabaigti',
        'loginView'      => 'Grįžti į prisijungimo puslapį',
        'backToSystems'  => 'Atgal į Sistemų sąrašą',
    ),
    'activation' => array(
        'required' => 'Netrukus turėtumėte gauti el. laišką su paskyros aktyvacijos nuoroda.',
        'failed'   => 'Aktyvacija nepavyko.',
    ),

    'emailChangeError' => 'Nuorodos raktas el. pašto adreso pakeitimui yra negaliojantis.',
    'emailChanged'     => 'El. pašto adresas sėkmingai pakeistas.',

    'pushNotifications'       => array(
        'title' => '"Push" pranešimai',
        'text'  => '"Protegus" norėtų Jums siųsti pranešimus apie įvykius. Funkcija gali būti pakeista Nustatymuose.',
    ),
    'passwordResetTokenError' => 'Nuorodos raktas slaptažodžio pakeitimui yra negaliojantis.',
    'tutorial'                => array(
        'title'  => 'Pagalba',
        'title1' => 'Sitemos pridėjimas',
        'text1'  => 'Sukuriant naują sistemą darykite taip: <br>pasirinkite <b>Pasirinkti sistemą</b> ir paspauskite <b>Pridėti sistemą +</b>.',
        'title2' => '&nbsp;',
        'text2'  => 'Įveskite savo prietaiso <b>Unikalų numerį</b>. Unikalų numerį galima rasti ant produkto pakuotės.<br>Įveskite <b>Prieigos kodą</b>. "Prieigos kodas" yra autentifikavimo kodas skirtas užmegzti ryšį su Jūsų prietaisu. Kodas turi sutapti su įvestu ryšio įrenginyje. Pagal nutylėjimą kodas yra 123456. Jei buvo pakeistas Prieigos kodas, kreipkitės į atsakingus asmenis.',
        'title3' => '&nbsp;',
        'text3'  => 'Norint sukurti naują sistemą, paspauskite <b>Pridėti</b>. <br>
Pirmasis vartotojas pridėjęs sistemą, tampa pagrindiniu vartotoju. Jis gali pridėti naujus sistemos vartotojus, redaguoti sričių, zonų, valdiklių, jutiklių pavadinimus ir redaguoti įvairius sistemos parametrus.',
    ),

    'pageExpired' => 'Puslapio galiojimo laikas baigėsi, bandykite dar kartą.',

    'errors' => array(
        '401' => 'Nėra leidimo.',
        '503' => 'Servisas laikinai nepasiekiamas.',
        '404' => 'Puslapis nerastas.',
        '500' => 'Įvyko klaida. Pabandykite vėliau.',
        '404_no_system' => 'Sistema nerasta arba buvo pašalinta.',
    ),
);
