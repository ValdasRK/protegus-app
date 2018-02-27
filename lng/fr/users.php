<?php

return [
    'labels' => [
        'name'                  => 'Nom',
        'email'                 => 'Courriel',
        'active'                => 'Utilisateur actif',
        'changePassword'        => 'Changer le mot de passe',
        'passwordCurrent'       => 'Mot de passe actuel',
        'passwordNew'           => 'Nouveau mot de passe',
        'password'              => 'Mot de passe',
        'repeatPassword'        => 'Confirmer le nouveau mot de passe',
        'role'                  => 'Type d\'utilisateur',
        'placeholderPassExists' => '*********',

        'allRoles'      => 'Tous types d\'utilisateurs',
        'superAdmins'   => 'Super Administrateurs uniquement',
        'simpleUsers'   => 'Simples utilisateurs uniquement',
        'activeUsers'   => 'Utilisateurs actifs',
        'inactiveUsers' => 'Utilisateurs inactifs',
        'invitedUsers'  => 'Utilisateurs invités',
        'searchPhrase'  => 'Rechercher par nom ou adresse de messagerie',

        'sortBy'        => 'Trier par',
        'sortByNameAZ'  => 'Nom A-Z',
        'sortByNameZA'  => 'Nom Z-A',
        'sortByEmailAZ' => 'Adresse de messagerie A-Z',
        'sortByEmailZA' => 'Adresse de messagerie Z-A',

        'changeEmail'   => 'Changer l\'adresse de messagerie',
        'passwordEmail' => 'Mot de passe actuel',
        'editUser'      => 'Modifier l\'utilisateur',

        'phoneNumber' => 'Numéro de téléphone',
        'company' => 'Société',
        'country' => 'Pays',
    ],

    'notifications' => [
        'title' => 'Notifications activées',

    ],

    'notifications-sounds' => [
        'title' => 'Changer le Signal Sonore',
    ],

    'settings' => [
        'title' => 'Paramètres',
        'menu'  => [
            'profile'       => 'Paramètres du profil',
            'notifications' => 'Notifications',
            'notifications_sounds' => 'Signal sonore',
            'alert'         => 'Notification avec son',
            'language'      => 'Langue',
            'homePage'      => 'Page d\'accueil',
        ]
    ],

    'homePageSettings' => [
        'title'   => 'Paramètres de la page d\'accueil',
        'labels'  => [
            'defaultPage'   => 'Page par défaut',
            'default'       => 'Mes Systèmes',
            'defaultAction' => 'Action par défaut',
            'events'        => 'Tous les évènements',
        ],
        'choices' => [
            'main'    => 'Vue Principale',
            'areas'   => 'Secteurs',
            'events'  => 'Évènements',
            'sensors' => 'Détecteurs',
            'pgms'    => 'Sorties',
        ],
    ],

    'emailChangeRequested' => 'Lien de modification d\'adresse de messagerie envoyé à : :newEmail',

    'buttons' => [
        'save'   => 'Sauvegarder',
        'create' => 'Créer',
        'addNew' => 'Ajouter un nouvel utilisateur',
        'cancel' => 'Annuler',

        'search'       => 'Rechercher',
        'clearFilter'  => 'Effacer le filtre',
        'filter'       => 'Filtre',
        'changeStatus' => 'Changer le statut',

        'edit'             => 'Modifier',
        'rename'           => 'Renommer',
        'delete'           => 'Supprimer',
        'resendActivation' => 'Renvoyer un courriel d\'activation',
        'resendInvitation' => 'Renvoyer un courriel d\'invitation',
    ],

    'headers' => [
        'name'  => 'Nom',
        'email' => 'Courriel',
    ],

    'status' => [
        'active'   => 'Actif',
        'inactive' => 'Inactif',
        'invited'  => 'Invité',
    ],
    'angelcam' => [
        'loginSubmit'  => 'Connexion',
        'logoutSubmit' => 'Se déconnecter',
        'title'        => 'Service de Angelcam',
        'loggedInText' => 'Vous êtes connecté à Angelcam service.',
        'firstName'    => 'Prénom',
        'notSet'       => 'Non configuré',
        'lastName'     => 'Nom',
        'phone'        => 'Téléphone',
        'logoutSubmit' => 'Déconnexion de Angelcam',
        'userName'     => 'Nom d’utilisateur Angelcam',
        'password'     => 'Angelcam mot de passe',
        'loginSubmit'  => 'Se connecter sur Angelcam',
        'signupSubmit' => 'Inscription au service de Angelcam',
    ],
];
