<?php

return [
    'empty'       => 'Aucun système ajouté',
    'emptyText'   => 'Veuillez en ajouter un en appuyant sur le bouton "Ajouter un nouveau système" ci-dessous',
    'notFound'    => 'Aucun système détecté',
    'refreshTime' => 'Temps d\'actualisation:',

    'sp231Warnings' => [
        'sensors'      => 'Le module des détecteurs n\'existe pas',
        'pgm'          => 'Le module de sortie n\'existe pas',
        'notConnected' => 'Non connecté',
    ],
    'titles' => [
        'area'                  => 'Secteur :no',
        'system'                => 'Système :no',
        'pgm'                   => 'PGM :no',
        'sensor'                => 'Détecteur :no',
        'systems'               => 'Systèmes',
        'active'                => 'Systèmes actifs',
        'history'               => 'Historique des Systèmes',
        'addSystem'             => 'Ajouter un système',
        'editSystem'            => 'Modifier un système',
        'systemEvents'          => 'Événements système',
        'profileSettings'       => 'Paramètres du profil',
        'settingsIpCom'         => 'Paramètres - serveurs ip com',
        'settingsReactions'     => 'Paramètres - types de réactions',
        'editIpComServer'       => 'Modifier le serveur ip com',
        'addNewIpComServer'     => 'Ajouter un nouveau serveur ip com',
        'addNewUser'            => 'Ajouter un nouvel utilisateur',
        'editUser'              => 'Modifier l\'utilisateur',
        'partitions'            => 'Secteurs',
        'pgmOutputs'            => 'Sorties PGM',
        'rename'                => 'Renommer',
        'sensors'               => 'Température',
        'systemUsers'           => 'Utilisateurs du système',
        'allSystemsUsers'       => 'Utilisateurs de tous les systèmes détenus',
        'zones'                 => 'Zones',
        'editZone'              => 'Modifier',
        'addNewZone'            => 'Ajouter un nouveau',
        'users'                 => 'Utilisateurs',
        'errorMessage'          => 'Message d\'erreur',
        'successMessage'        => 'Opération réussie',
        'config_reread_message' => 'La configuration a été relue avec succès.',
        'reactMessage'          => 'APPELER LA SÉCURITÉ',
        'language'              => 'Langue',
        'zone'                  => ':no ',
        'enterPinCode'          => 'Saisir le code PIN',
        'react'                 => 'Réagir',
        'events'                => 'Évènements',
        'allEvents'             => 'Tous les évènements',
        'bypassZones'           => 'Zones où le contournement a échoué',
        'enterPassword'         => 'Veuillez saisir votre mot de passe',
        'addNewArea'            => 'Ajouter un nouveau secteur',
        'requestInstaller'      => 'Demande d\'assistance de l\'installateur',
        'addNewCameras'         => 'Ajouter une nouvelle caméra',
        'systemCameras'         => 'Vidéo',
   ],
    'zone' => [
        'status' => [
            'tamper' => 'Défaut',
            'bypass' => 'Contourné',
            'open'   => 'Ouvrir'
        ]
    ],
    'types' => [
        'type'   => 'Type de système',
        'type_0' => 'SP231',
        'type_1' => 'G10',
        'type_2' => 'Autre',
        'type_3' => 'G16',
        'type_4' => 'Communicateur'
    ],

    'labels' => [
        'accessPeriod'                 => 'Définir une période d\'accès pour l\'installateur (en heures)',
        'describeIssue'                => 'Veuillez décrire votre problème',
        'name'                         => 'Nom',
        'imei'                         => 'IMEI',
        'mpass'                        => 'Code de service',
        'address'                      => 'Adresse',
        'contractNo'                   => 'Numéro de contrat',
        'objectPassword'               => 'Contester le mot de passe',
        'allAreas'                     => 'Tous les secteurs',
        'email'                        => 'Courriel',
        'editSensorName'               => 'Modifier le nom du détecteur',
        'sensorName'                   => 'Nom du détecteur',
        'system'                       => 'Système',
        'pgmName'                      => 'Nom du contrôleur',
        'pulseTime'                    => 'Temps d’impulsion',
        'pgmType'                      => 'Type de contrôleur',
        'pulse'                        => 'Impulsion',
        'level'                        => 'Niveau',
        'pgmStatus'                    => 'Statut du PGM',
        'areaName'                     => 'Nom du secteur',
        'pin'                          => 'PIN',
        'changeAreaStatus'             => 'Régler le statut du secteur',
        'changeStatus'                 => 'Changer le statut',
        'areasCount'                   => 'Nombre de secteurs',
        'zoneQueueNo'                  => 'File d\'attente N°',
        'zoneName'                     => 'Nom',
        'persons'                      => [
            'name'           => 'Identifiant',
            'email'          => 'E-mail',
            'phone'          => 'Téléphone',
            'address'        => 'Adresse',
            'key'            => 'Phrase secrète',
            'queue_no'       => 'File d\'attente N°',
            'hasKey'         => '*********',
            'system_code_no' => 'Numéro d\'utilisateur dans le système',
        ],
        'editPartitionName'            => 'Modifier le nom du Secteur',
        'enterPartitionName'           => 'Saisir le nom du Secteur',
        'searchPhrase'                 => 'Rechercher en tapant l\'adresse, le nom de l\'utilisateur, l\'adresse de messagerie, l\'IMEI...',
        'pgm_as_area'                  => 'Activer/Désactiver avec PGM',
        'direct_control'               => 'Activer le Contrôle Direct',
        'apps_password_for_arm_disarm' => 'Utiliser le mot de passe d\'Application pour ACTIVER/DÉSACTIVER',
        'timeZone'                     => 'Fuseau horaire',
        'number'                       => 'numéro',
        'enterAreaNumber'              => 'Numéro du secteur',
        'numberOfPgms'                 => 'Sorties',
        'numberOfSensors'              => 'Détecteurs',
        'transferToNewUser'            => 'Transférer au nouvel utilisateur:',
        'systemStatus'                 => 'Niveau',
        'pulse_interval'               => 'Intervalle d’impulsion en secondes',
        'pulse_interval_value'         => ':seconds deuxième | :seconds secondes',
        'seconds_short'                => 'secondes.',
        'angelcamReloginFailed'        => 'Protegus n’a pas pu lire les données de caméra depuis le serveur Angelcam. Veuillez relire ou réessayer plus tard.',
        'angelcamMustLogin'            => 'Caméras non disponibles. Connectez-vous à Angelcam dans Préférences.',
        'addCamera'                    => 'Ajouter une caméra',
        'angelcamReloginFailed'        => 'La reconnexion automatique a échoué. Veuillez réessayer ultérieurement.',
        'angelcamNoNewCameras'         => 'Aucune nouvelle caméra disponible',
        'angelcamReloadInfo'           => 'Recharger les informations de la caméra',
        'angelcamNoCameras'            => 'Ce système n’est lié à aucune caméra. Veuillez ajouter des caméras dans le menu paramètres.',
        'angelcamNoOnlineCameras'      => 'Il semble que les caméras sont en mode hors connexion. Veuillez vérifier vos caméras.',
        'cameraOffline'                => 'Déconnecté',
        'cameraNotAvailable'           => 'Caméra indisponible',
        'cameraDeleted'                => 'Caméra supprimée',
        'angelcamLoginFailed'          => 'N’a pas pu se connecter au service Angelcam.',
    ],

    'buttons'       => [
        'home'            => 'Accueil',
        'save'            => 'Sauvegarder',
        'select'          => 'Sélectionner un système',
        'addNew'          => 'Ajouter un nouveau système',
        'delete'          => 'Supprimer',
        'deleteSystem'    => 'Supprimer un système',
        'cancel'          => 'Annuler',
        'create'          => 'Créer',
        'react'           => 'Réagir',
        'rename'          => 'Renommer',
        'zoneStatus'      => 'Statut de zone',
        'removeUser'      => 'Supprimer un utilisateur',
        'addUser'         => 'Ajouter un utilisateur',
        'changePgmStatus' => 'Changer',
        'setAreaStatus'   => 'Régler',
        'bypassZones'     => 'Zones où le contournement a échoué',
        'edit'            => 'Modifier',
        'addZone'         => 'Ajouter une zone',
        'deleteZone'      => 'Supprimer',
        'editPerson'      => 'Modifier',
        'addPerson'       => 'Ajouter',
        'deletePerson'    => 'Supprimer',
        'savePerson'      => 'Sauvegarder',
        'ok'              => 'Ok',
        'logout'          => 'Se déconnecter',
        'on'              => 'Activé',
        'off'             => 'Désactivé',
        'yes'             => 'Oui',
        'no'              => 'Non',
        'call'            => 'Appeler',
        'clearFilter'     => 'Effacer le filtre',
        'filter'          => 'Filtre',
        'readConfig'      => 'Relire la configuration du système',
        'done'            => 'Effectué',
        'next'            => 'Suivant',
        'retry'           => 'Réessayer',
        'transfer'        => 'Transférer',
        'sensors_reset'   => 'Réinitialiser les détecteurs incendie',
        'deleteSensor'    => 'Supprimer',
        'addCamera'       => 'Ajouter une caméra',
        'deleteCamera'    => 'Supprimer unecaméra',
    ],
    'menu'          => [
        'allEvents'                  => 'Tous les évènements',
        'areas'                      => 'Secteurs',
        'pgms'                       => 'Contrôle',
        'sensors'                    => 'Température',
        'settings'                   => 'Paramètres',
        'mobileSettings'             => 'Préférences',
        'events'                     => 'Évènements',
        'help'                       => 'Aide',
        'logOut'                     => 'Se déconnecter',
        'react'                      => 'Réagir',
        'users'                      => 'Utilisateurs',
        'areaZones'                  => 'Zones',
        'areaUsers'                  => 'Utilisateurs',
        'reactions'                  => 'Types de réactions',
        'ipcom'                      => 'Paramètres IPCom',
        'monas'                      => 'Paramètres MonasMS',
        'systems'                    => 'Liste du système',
        'grg'                        => 'Paramètres GRG',
        'global'                     => 'Paramètres généraux',
        'removeArea'                 => 'Supprimer',
        'subscriptionSettings'       => 'Paramètres d\'abonnement',
        'systemInformation'          => 'Information système',
        'transferOrDeleteSystem'     => 'Transférer ou supprimer un système',
        'transferSystem'             => 'Transférer un système',
        'requestInstallerAssistance' => 'Demande d\'assistance de l\'installateur',
        'cameras'                    => 'Vidéo',
        'systemAngelcam'             => 'Réglages de la caméra',
        'angelcam'                   => 'Réglages de la caméra',
    ],
    'statuses'      => [
        'online'         => 'EN LIGNE',
        'offline'        => 'HORS LIGNE',
        'sensor'         => ':temp ° C',
        'sensorNA'       => 'N/A',
        'sensorDisabled' => 'DÉSACTIVÉ',
        'pgmOn'          => 'ON',
        'pgmOff'         => 'OFF',
        'area'           => [
            'arm'             => 'Activé',
            'armInProgress'   => 'Activation...',
            'stay'            => 'En veille',
            'stayInProgress'  => 'Mise en veille...',
            'sleep'           => 'En veille prolongée',
            'sleepInProgress' => 'Mise en veille prolongée...',
            'off'             => 'Éteint',
            'setArm'          => 'Activer',
            'setStay'         => 'Mettre en veille',
            'setSleep'        => 'Mettre en veille prolongée',
            'setOff'          => 'Désactivé',
            'processing'      => 'En cours de traitement',
            'unknown'         => 'Inconnu',
       ],
    ],
    'notifications' => [
        'areaDisabled'                 => 'Désolé, vous ne pouvez pas changer le statut de zone. Veuillez, contacter votre installateur.',
        'pgmDisabledText'              => 'Désolé, que vous ne pouvez pas contrôler état de la sortie. Veuillez, contacter votre installateur.',
        'sensorDisabledText'           => 'Information de capteur de température n’est pas disponible avec ce système. Veuillez contacter votre installateur.',
        'areYouSure'                   => 'Êtes-vous sûr de que vouloir supprimer ?',
        'logOutConfirm'                => 'Êtes-vous sûr de vouloir vous déconnecter ?',
        'reactMessage'                 => 'Êtes-vous sûr de vouloir générer une alerte/d\'appeler la sécurité ?',
        'pgmUsedAsArea'                => 'La sortie est utilisée pour Activer/Désactiver le système de sécurité',
        'moduleOffline'                => 'Le système est hors ligne, veuillez actualiser ou vérifier la connexion',
        'saved'                        => 'Paramètres enregistrés avec succès.',
        'systemAdded'                  => 'Système ajouté avec succès ! Recommandation : décrire son nom et adresse dans les paramètres système.',
        'systemAddedMonas'             => 'Système ajouté, mais ne peut pas être géré tant que l\'IMEI n\'est pas entré.',
        'systemsAddedMonas'            => 'Systèmes ajoutés, mais ne peuvent pas être gérés tant que l\'IMEI n\'est pas saisi.',
        'systemAddedOffline'           => 'Votre appareil est HORS LIGNE. Système ajouté avec des fonctionnalités limitées. Veuillez vérifier si l\'appareil est connecté au réseau (réseau LED - Vert, Données LED - OFF) et à la configuration de relecture dans les paramètres système',
        'installerAccessGranted'       => 'L’accès est fourni à l’installateur. Si vous souhaitez en révoquer l’accès, allez dans "Paramètres"/"Utilisateurs du système" et supprimez l\'installateur',
        'transferOrDeleteSystem'       => 'Voulez-vous transférer ce système à un autre utilisateur ou supprimer le système ?',
        'transferSystemWarning'        => 'L\'utilisateur que vous avez sélectionné va devenir l\'utilisateur principal et vous perdrez l\'accès au Système. Êtes-vous sûr de vouloir transférer le Système ?',
        'systemTransferChoiceQuestion' => 'Quel utilisateur doit devenir l\'utilisateur principal ?',
        'activating'                   => 'Activation de carte SIM de système. le processus prendra 2-5 minutes. Veuillez patienter...',
        'updating'                     => 'Tentative automatique de relecture de la configuration du système',
        'mustReReadSystem'             => 'Système n’est pas reconnu. Veuillez vérifier si le périphérique est connecté au réseau (réseau LED - vert, données LED - OFF) et relire la configuration dans Panneau de configuration',
        'highDataRateWarning'          => 'AVERTISSEMENT - flux MP4 peut entraîner une forte utilisation de données mobiles . Utilisez ce paramètre avec prudence.',
        'armWithPgmWarning'            => [ 
            'start'                         => 'Vous ne pouvez pas « Arm/Disarm avec PGM » tant que vous n\'avez pas spécifié les zones système. Vous pouvez le faire en cliquant sur ', 
            'link'                          => 'ce',
            'end'                           => ' lien.',
        ],
    ],
    'errors'        => [
        'monasConnection'     => 'La connexion à MonasMS a échoué...',
        'addPerson'           => 'Échec du stockage d\'un individu dans MonasMS',
        'pgmStatus'           => 'Le changement de l\'état de la sortie PGM a échoué. Actualisez la page et essayez à nouveau',
        'addFail'             => 'L\'ajout du système a échoué. Veuillez réessayer ultérieurement.',
        'react'               => 'Impossible de joindre le serveur de réaction',
        'bypassFail'          => 'Contournement de zone infructueux',
        'configRead'          => 'La lecture de la configuration du système a échoué, les données du système peuvent être incorrectes ou incomplètes. Veuillez relire la configuration dans le panneau de configuration',
        'areaStatusFail'      => 'Échec de la modification du statut du secteur',
        'imeiNotFound'        => 'L\'ID Unique du système ou le Code d’accès au Service est incorrect, les données du système peuvent être incomplètes',
        'mpassFail'           => 'Code d\'accès au service incorrect',
        'g10AreaChange'       => 'Changement du statut du système. Veuillez attendre la confirmation "Notification Push" ou rafraîchir la fenêtre de statut',
        'objectNotFound'      => 'System not found. Please check if Unique ID is correct. Also check if device is connected to network (Network LED - Green, Data LED - OFF)',
        'contractNotFound'    => 'Contract number not found',
        'passwordFail'        => 'Password error',
        'autoUpdateFail'      => 'Échec de la lecture de configuration automatique. Veuillez vérifier si l’appareil est allumé, autre configuration, attendez les premières manifestations et pressez sur Relecture de la configuration dans les Paramètres système.',
        'activationFail'      => 'We were unable to activate the Data Service. Please try again later or contact your Protegus representative for support',
        'ipcom_search_denied' => 'Please wait for 5s before adding this system',
        'MPASS_IS_INCORRECT'  => 'Code d’accès de service est incorrect. S’il vous plaît, réglez-le à paramètres-> système d’information.',
    ],
];
