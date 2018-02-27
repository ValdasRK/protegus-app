<?php

return [
    'labels' => [
        'name'                  => 'Név',
        'email'                 => 'Email cím',
        'active'                => 'Aktív felhasználó',
        'changePassword'        => 'Jelszó módosítás',
        'passwordCurrent'       => 'Jelenlegi jelszó',
        'passwordNew'           => 'Új jelszó',
        'password'              => 'Jelszó',
        'repeatPassword'        => 'Új jelszó megerősítése',
        'role'                  => 'Felhasználó típusa',
        'placeholderPassExists' => '*********',

        'allRoles'      => 'Minden felhasználó típus',
        'superAdmins'   => 'Csak szuper adminok',
        'simpleUsers'   => 'Csak egyszerű felhasználók',
        'activeUsers'   => 'Aktív felhasználók',
        'inactiveUsers' => 'Inaktív felhasználók',
        'invitedUsers'  => 'Meghívott felhasználók',
        'searchPhrase'  => 'Keresés név vagy e-mail cím alapján',

        'sortBy'        => 'Rendezés a következő szerint',
        'sortByNameAZ'  => 'Név A-Z-ig',
        'sortByNameZA'  => 'Név Z-A-ig',
        'sortByEmailAZ' => 'E-mail A-Z-ig',
        'sortByEmailZA' => 'E-mail Z-A-ig',

        'changeEmail'   => 'E-mail megváltoztatása',
        'passwordEmail' => 'Jelenlegi jelszó',
        'editUser'      => 'Felhasználó szerkesztése',

        'phoneNumber' => 'Telefonszám',
        'company' => 'Cég neve',
        'country' => 'Ország',
    ],

    'notifications' => [
        'title' => 'Értesítés engedélyezése',

    ],

    'notifications-sounds' => [
        'title' => 'Átváltás riasztásra',
    ],

    'settings' => [
        'title' => 'Beállítások',
        'menu'  => [
            'profile'       => 'Profil beállítások',
            'notifications' => 'Értesítések',
            'notifications_sounds' => 'Riasztási hang',
            'alert'         => 'Értesítés hangjelzéssel',
            'language'      => 'Nyelv',
            'homePage'      => 'Kezdőoldal',
        ]
    ],

    'homePageSettings' => [
        'title'   => 'Kezdőoldal beállításai',
        'labels'  => [
            'defaultPage'   => 'Alapértelmezett oldal',
            'default'       => 'Saját rendszereim',
            'defaultAction' => 'Alapértelmezett művelet',
            'events'        => 'Összes esemény',
        ],
        'choices' => [
            'main'    => 'Fő nézet',
            'areas'   => 'Partíciók',
            'events'  => 'Események',
            'sensors' => 'Érzékelők',
            'pgms'    => 'Kimenetek',
        ],
    ],

    'emailChangeRequested' => 'Az e-mail cím változtatáshoz a linket ide küldtük: :newEmail',

    'buttons' => [
        'save'   => 'Mentés',
        'create' => 'Létrehozás',
        'addNew' => 'Új felhasználó hozzáadása',
        'cancel' => 'Mégse',

        'search'       => 'Keresés',
        'clearFilter'  => 'Szűrő törlése',
        'filter'       => 'Szűrő',
        'changeStatus' => 'Állapot módosítása',

        'edit'             => 'Szerkesztés',
        'rename'           => 'Átnevezés',
        'delete'           => 'Törlés',
        'resendActivation' => 'Aktiváló e-mail újraküldése',
        'resendInvitation' => 'Meghívó e-mail újraküldése',
    ],

    'headers' => [
        'name'  => 'Név',
        'email' => 'Email cím',
    ],

    'status' => [
        'active'   => 'Aktív',
        'inactive' => 'Inaktív',
        'invited'  => 'Meghívott',
    ],
    'angelcam' => [
        'loginSubmit'  => 'Bejelentkezés',
        'logoutSubmit' => 'Kijelentkezés',
        'title'        => 'Angelcam service',
        'loggedInText' => 'You are logged into Angelcam service.',
        'firstName'    => 'Keresztnév',
        'notSet'       => 'Not set',
        'lastName'     => 'Vezetéknév',
        'phone'        => 'Phone',
        'logoutSubmit' => 'Logout from Angelcam',
        'userName'     => 'Angelcam username',
        'password'     => 'Angelcam password',
        'loginSubmit'  => 'Login to Angelcam',
        'signupSubmit' => 'Signup to Angelcam service',
    ],
];
