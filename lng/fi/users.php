<?php

return [
    'labels' => [
        'name'                  => 'Nimi',
        'email'                 => 'Sähköposti',
        'active'                => 'Aktiivinen käyttäjä',
        'changePassword'        => 'Vaihda salasana',
        'passwordCurrent'       => 'Nykyinen salasana',
        'passwordNew'           => 'Uusi salasana',
        'password'              => 'Salasana',
        'repeatPassword'        => 'Vahvista uusi salasana',
        'role'                  => 'Käyttäjätyyppi',
        'placeholderPassExists' => '*********',

        'allRoles'      => 'Kaikille käyttäjille',
        'superAdmins'   => 'Vain pääkäyttäjät',
        'simpleUsers'   => 'Vain peruskäyttäjille',
        'activeUsers'   => 'Aktiivisia käyttäjiä',
        'inactiveUsers' => 'Passiiviset käyttäjät',
        'invitedUsers'  => 'Kutsuttujen käyttäjien',
        'searchPhrase'  => 'Etsi nimi tai sähköpostiosoite',

        'sortBy'        => 'Lajittele',
        'sortByNameAZ'  => 'Nimi A-Ö',
        'sortByNameZA'  => 'Nimi Ö-A',
        'sortByEmailAZ' => 'Sähköpostia A-Ö',
        'sortByEmailZA' => 'Sähköposti Ö-A',

        'changeEmail'   => 'Muuta sähköposti',
        'passwordEmail' => 'Nykyinen salasana',
        'editUser'      => 'Muokkaa käyttäjää',

        'phoneNumber' => 'Phone number',
        'company' => 'Company',
        'country' => 'Country',
    ],

    'notifications' => [
        'title' => 'Ilmoitusasetukset',

    ],

    'notifications-sounds' => [
        'title' => 'Ilmoituksen ääniasetukset',
    ],

    'settings' => [
        'title' => 'Asetukset',
        'menu'  => [
            'profile'       => 'Profiiliasetukset',
            'notifications' => 'Ilmoitusasetukset',
            'notifications_sounds' => 'Ilmoituksen ääniasetukset',
            'alert'         => 'Äänihälytys',
            'language'      => 'Kieli',
            'homePage'      => 'Kotisivu',
        ]
    ],

    'homePageSettings' => [
        'title'   => 'Kotisivuasetukset',
        'labels'  => [
            'defaultPage'   => 'Oletussivu',
            'default'       => 'Minun järjestelmäni',
            'defaultAction' => 'Oletustoiminto',
            'events'        => 'Kaikki tapahtumat',
        ],
        'choices' => [
            'main'    => 'Päänäkymä',
            'areas'   => 'Alueet',
            'events'  => 'Tapahtumat',
            'sensors' => 'Anturit',
            'pgms'    => 'Lähdöt',
        ],
    ],

    'emailChangeRequested' => 'Sähköpostin muutoslinkki: :newEmail',

    'buttons' => [
        'save'   => 'Tallenna',
        'create' => 'Luo',
        'addNew' => 'Lisää uusi käyttäjä',
        'cancel' => 'Peruuta',

        'search'       => 'Etsi',
        'clearFilter'  => 'Tyhjennä suodatin',
        'filter'       => 'Suodatin',
        'changeStatus' => 'Muuta tilaa',

        'edit'             => 'Muokkaa',
        'rename'           => 'Nimeä uudelleen',
        'delete'           => 'Poista',
        'resendActivation' => 'Lähetä aktivointiviesti',
        'resendInvitation' => 'Lähetä kutsu sähköpostitse',
    ],

    'headers' => [
        'name'  => 'Nimi',
        'email' => 'Sähköposti',
    ],

    'status' => [
        'active'   => 'Aktiivinen',
        'inactive' => 'Passiivinen',
        'invited'  => 'Kutsuttu',
    ],
    'angelcam' => [
        'loginSubmit'  => 'Log in',
        'logoutSubmit' => 'Kirjaudu ulos',
        'title'        => 'Angelcam service',
        'loggedInText' => 'You are logged into Angelcam service.',
        'firstName'    => 'First name',
        'notSet'       => 'Not set',
        'lastName'     => 'Last name',
        'phone'        => 'Puhelin',
        'logoutSubmit' => 'Logout from Angelcam',
        'userName'     => 'Angelcam username',
        'password'     => 'Angelcam password',
        'loginSubmit'  => 'Login to Angelcam',
        'signupSubmit' => 'Signup to Angelcam service',
    ],
];
