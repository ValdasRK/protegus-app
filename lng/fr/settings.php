<?php

return [
    'noConnection' => 'La page est indisponible',
    'buttons'      => [
        'save'           => 'Sauvegarder',
        'delete'         => 'Supprimer',
        'addNew'         => 'Ajouter un nouveau',
        'testConnection' => 'Test',
    ],
    'connected'    => 'Connecté',
    'notConnected' => 'Échec',
    'labels'       => [
        'peerName'       => 'Nom du pair',
        'host'           => 'Hôte',
        'port'           => 'Port',
        'userName'       => 'Identifiant',
        'password'       => 'Mot de passe',
        'changeLanguage' => 'Change language',
    ],
    'installer' => [
        'logo' => 'Installer Logo (165x45)',
        'removeLogo' => 'Remove Logo'
    ],
    'ipcom' => [
        'logo' => 'Ipcom Logo',
        'removeLogo' => 'Remove Ipcom Logo',
        'priorityLogo' => 'Priority over installer logo'
    ],
    'monas'        => [
        'title' => 'Paramètres MonasMS',
        'label' => [
            'host'     => 'MonasMS database hostname',
            'database' => 'Nom de la base de données MonasMS',
            'username' => 'MonasMS database username',
            'password' => 'MonasMS database password',
            'use'      => 'Activer MonasMS',
            'sync'     => 'Délai en secondes pour synchroniser les événements avec Monas',
        ],
    ],
    'grg'          => [
        'title' => 'Paramètres GRG',
        'label' => [
            'host' => 'Hôte GRG',
            'port' => 'Port GRG',
            'code' => 'Code par défaut à envoyer',
            'zone' => 'Numéro de zone par défaut à envoyer',
        ],
    ],
    'global'       => [
        'title' => 'Paramètres généraux',
        'label' => [
            'show_zones'                            => 'Activer/Désactiver l\'onglet zones pour l\'Utilisateur principal',
            'show_grg'                              => 'Activer/désactiver le bouton "Réagir" pour les utilisateurs',
            'main_user_edit_zones'                  => 'Autoriser l\'Utilisateur principal à décrire les zones',
            'main_user_add_zones'                   => 'Autoriser l\'Utilisateur principal à ajouter des zones',
            'main_user_enable_additional_fields'    => 'Enable Master user to describe additional user fields when MonasMS is used',
            'main_user_enable_view_users'           => 'Autoriser l\'Utilisateur principal à voir le menu des utilisateurs de secteur',
            'main_user_enable_edit_users'           => 'Autoriser l\'Utilisateur principal à modifier les utilisateurs de secteur',
            'event_full_name'                       => 'Afficher le nom complet de l\'évènement plutôt qu\'un type de réaction uniquement',
            'g10_pgm_output_as_area'                => 'Autoriser l\'Utilisateur principal à modifier la fonctionnalité PGM (pour Activer/Désactiver le système)',
            'show_sensor_window'                    => 'Afficher la fenêtre des capteurs si ne pas pris en charge par le système',
            'show_pgm_window'                       => 'Show PGM window if there is only 1 PGM and it is used to Arm/Disarm',
            'installer_prepaid_sim'                 => 'Montrer l’installateur et les caractéristiques de la carte sim prépayée',
            'enabled_recaptcha'                     => 'Utiliser Recaptcha pour l\'Inscription',
            'braintree_production_merchant_id'      => 'Braintree Merchant Id',
            'braintree_production_public_key'       => 'Braintree Public Key',
            'braintree_production_private_key'      => 'Braintree Private Key',
            'braintree_sandbox_merchant_id'         => 'Braintree Sandbox Merchant Id',
            'braintree_sandbox_public_key'          => 'Braintree Sandbox Public Key',
            'braintree_sandbox_private_key'         => 'Braintree Sandbox Private Key',
            'braintree_production_enabled'          => 'Enable Braintree Payments Production',
            'show_angelcam'                         => 'Enable Angelcam',
        ],
    ],
    'reactions'    => [
        'labels'         => [
            'name'                       => 'Nom de la réaction',
            'monas_id'                   => 'ID de Réaction Monas',
            'type'                       => 'Type de réaction',
            'image'                      => 'Image de la réaction',
            'redirect_to'                => 'La notification Push est redirigée vers',
            'notification_sound'         => 'Son de notification à utiliser',
            'notification_sound_default' => 'Paramètres par défaut de l\'appareil',
            'notification_sound_custom'  => 'Personnalisé',
            'notification_sound_info'    => 'Son de notification : ',
        ],
        'redirects'      => [
            'event'  => 'Page d\'évènements',
            'sensor' => 'Page des détecteurs',
        ],
        'noReaction'     => 'L\'évènement n\'a pas de réaction',
        'translationKey' => 'Clé de traduction',
    ],
];
