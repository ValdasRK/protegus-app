<?php

return [
    'labels' => [
        'name'                  => 'Ime',
        'email'                 => 'E-Mail',
        'active'                => 'Korisnik aktivan',
        'changePassword'        => 'Promijenite lozinku',
        'passwordCurrent'       => 'Trenutna lozinka',
        'passwordNew'           => 'Nova lozinka',
        'password'              => 'Lozinka',
        'repeatPassword'        => 'Potvrdi novu lozinku',
        'role'                  => 'Vrsta korisnika',
        'placeholderPassExists' => '*********',

        'allRoles'      => 'Sve vrste korisnika',
        'superAdmins'   => 'Samo super korisnici',
        'simpleUsers'   => 'Samo obični korisnici',
        'activeUsers'   => 'Aktivni korisnici',
        'inactiveUsers' => 'Neaktivni korisnici',
        'invitedUsers'  => 'Pozvani korisnici',
        'searchPhrase'  => 'Pretraga po imenu ili emailu',

        'sortBy'        => 'Posloži po',
        'sortByNameAZ'  => 'Ime A-Z',
        'sortByNameZA'  => 'Ime Z-A',
        'sortByEmailAZ' => 'E-mail A-Z',
        'sortByEmailZA' => 'E-mail Z-A',

        'changeEmail'   => 'Promjena e-maila',
        'passwordEmail' => 'Trenutna lozinka',
        'editUser'      => 'Uređivanje korisnika',

        'phoneNumber' => 'Phone number',
        'company' => 'Tvrtka',
        'country' => 'Country',
    ],

    'notifications' => [
        'title' => 'Obavijesti omogućene',

    ],

    'notifications-sounds' => [
        'title' => 'Promijeniti u zvuk upozorenja',
    ],

    'settings' => [
        'title' => 'Postavke',
        'menu'  => [
            'profile'       => 'Postavke profila',
            'notifications' => 'Obavijesti',
            'notifications_sounds' => 'Zvuk upozorenja',
            'alert'         => 'Obavijest sa zvukom',
            'language'      => 'Jezik',
            'homePage'      => 'Početna stranica',
        ]
    ],

    'homePageSettings' => [
        'title'   => 'Postavke početne stranice',
        'labels'  => [
            'defaultPage'   => 'Zadane stranice',
            'default'       => 'Sustavi',
            'defaultAction' => 'Zadana akcija',
            'events'        => 'Svi događaji',
        ],
        'choices' => [
            'main'    => 'Glavni prikaz',
            'areas'   => 'Područja',
            'events'  => 'Događaji',
            'sensors' => 'Senzori',
            'pgms'    => 'Izlazi',
        ],
    ],

    'emailChangeRequested' => 'Saite, lai mainītu e-pastu nosūtīta uz: :newEmail',

    'buttons' => [
        'save'   => 'Spremi',
        'create' => 'Kreiraj',
        'addNew' => 'Dodavanje novog korisnika',
        'cancel' => 'Poništi',

        'search'       => 'Pretraživaje',
        'clearFilter'  => 'Očisti filtar',
        'filter'       => 'Filter',
        'changeStatus' => 'Promjena statusa',

        'edit'             => 'Promjeni',
        'rename'           => 'Preimenovati',
        'delete'           => 'Izbriši',
        'resendActivation' => 'Ponovno slanje aktivacijskog linka',
        'resendInvitation' => 'Ponovno slanje pozivnice',
    ],

    'headers' => [
        'name'  => 'Ime',
        'email' => 'E-Mail',
    ],

    'status' => [
        'active'   => 'Aktivan',
        'inactive' => 'Neaktivan',
        'invited'  => 'Pozvani',
    ],
    'angelcam' => [
        'loginSubmit'  => 'Prijavi se',
        'logoutSubmit' => 'Odjava',
        'title'        => 'Angelcam service',
        'loggedInText' => 'You are logged into Angelcam service.',
        'firstName'    => 'Ime',
        'notSet'       => 'Not set',
        'lastName'     => 'Prezime',
        'phone'        => 'Telefon',
        'logoutSubmit' => 'Logout from Angelcam',
        'userName'     => 'Angelcam username',
        'password'     => 'Angelcam password',
        'loginSubmit'  => 'Login to Angelcam',
        'signupSubmit' => 'Signup to Angelcam service',
    ],
];
