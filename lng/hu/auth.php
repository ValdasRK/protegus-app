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

    'failed'               => 'Hibás e-mail cím vagy jelszó.',
    'throttle'             => 'Túl sok sikertelen bejelentkezési kísérlet. Kérjük, próbáld újra :seconds másodperc múlva.',
    'licenseTitle'         => 'Végfelhasználói Licencszerződés',
    'sendPasswordLink'     => 'Kérjük add meg az email címedet a jelszó visszaállításához',
    'triedToRegister'      => 'Már regisztrálva vagy',
    'notActiveYet'         => 'Nem aktiváltad a fiókod',
    'resendActivation'     => 'Kérsz új aktiválási linket?',
    'activationResentFail' => 'Az újra elküldött aktiváló link érvénytelen',
    'activationResent'     => 'Az aktiváló linket elküldtük az email címedre',
    'passwordResetSent'    => 'Küldtünk az e-mail címedre egy linket, amivel megváltoztathatod a jelszavad',

    'form'       => array(
        'name'            => 'A teljes neved',
        'email'           => 'Email cím',
        'signUp'          => 'Regisztráció',
        'password'        => 'Jelszó',
        'reenterPassword' => 'Add meg a jelszót még egyszer',
        'confirmPassword' => 'Jelszó megerősítése',
        'phoneNumber'     => 'Telefonszám (pl. +36...)',
        'company'         => 'Cég neve',
    ),
    'buttons'    => array(
        'remember'       => 'Jelszó megjegyzése',
        'signUp'         => 'Regisztráció',
        'signUpInstallers' => 'Regisztráció telepítők számára',
        'logIn'          => 'Bejelentkezés',
        'forgotPassword' => 'Elfelejtetted a jelszavad?',
        'cancel'         => 'Mégse',
        'agree'          => 'Egyetértek',
        'disagree'       => 'Nem értek egyet',
        'send'           => 'Küldés',
        'resetPassword'  => 'Jelszó visszaállítása',
        'skip'           => 'Kihagyás',
        'allow'          => 'Engedélyezés',
        'next'           => 'Következő',
        'previous'       => 'Előző',
        'finish'         => 'Befejezés',
        'loginView'      => 'Vissza a Belépéshez',
        'backToSystems'  => 'Vissza a Rendszer listához',
    ),
    'activation' => array(
        'required' => 'Egy emailt kell, hogy kapj az aktiváló linkkel.',
        'failed'   => 'Sikertelen aktiválás.',
    ),

    'emailChangeError' => 'Az e-mail változtatás kérelem érvénytelen.',
    'emailChanged'     => 'Az e-mail címet sikeresen megváltoztattad.',

    'pushNotifications'       => array(
        'title' => 'Push értesítések',
        'text'  => 'A "Protegus" (push) értesítéseket szeretne küldeni. Ezeket részletesen testre lehet szabni a beállítások menüben.',
    ),
    'passwordResetTokenError' => 'A jelszó változtatás kérelem érvénytelen.',
    'tutorial'                => array(
        'title'  => 'Segítség',
        'title1' => 'Új rendszer hozzáadása',
        'text1'  => 'Új rendszer létrehozásához:<br>
Nyomj a <b>Rendszer kiválasztása</b>, majd az <b>Új rendszer hozzáadása +</b> gombra.',
        'title2' => '&nbsp;',
        'text2'  => 'Írd be az az eszköz Egyedi azonosítóját <b>(Unique ID)</b>. Az Egyedi azonosítót a termék hátoldalán vagy a dobozon találod.<br>
Add meg a "Protegus" Szerviz kódját <b>(Service Access code)</b>. A szerviz kód, egy hitelesítő jelszó, amivel akár távolról is hozzáférhetsz az eszközhöz. Ennek meg kell egyeznie azzal amit, a telepítéskor beállítottak az eszközben. Alapértelmezetten ez <b>123456</b>. Ha a jelszót megváltoztatták, lépj kapcsolatba a telepítővel.',
        'title3' => '&nbsp;',
        'text3'  => 'Nyomj a <b>Létrehozás</b> gombra új rendszer létrehozásához. <br>
A legelső rendszerhez hozzárendelt felhasználó lesz az elsődleges felhasználói. Ő új felhasználókat adhat hozzá a rendszerhez, átnevezheti a partíciókat, zónákat, kimeneteket, érzékelőket és módosíthatja a rendszer egyéb paramétereit.',
    ),

    'pageExpired' => 'Az oldal érvényessége lejárt, kérlek, próbáld újra',

    'errors' => array(
        '401' => 'Nincs engedély.',
        '503' => 'Rögtön jövök.',
        '404' => 'Nem található.',
        '500' => 'Szerver hiba. Kérlek, próbáld újra később.',
        '404_no_system' => 'A Rendszer nem található vagy ki lett törölve.',
    ),
);
