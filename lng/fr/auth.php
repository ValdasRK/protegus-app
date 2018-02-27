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

    'failed'               => 'L\'adresse de messagerie ou le mot de passe est incorrect.',
    'throttle'             => 'Trop de tentatives de connexion. Veuillez essayer à nouveau dans :seconds secondes.',
    'licenseTitle'         => 'Contrat de Licence Utilisateur Final',
    'sendPasswordLink'     => 'Saisissez votre adresse de messagerie pour récupérer votre mot de passe',
    'triedToRegister'      => 'Vous êtes déjà enregistré',
    'notActiveYet'         => 'Votre compte n\'est pas activé',
    'resendActivation'     => 'Renvoyer le lien d\'activation ?',
    'activationResentFail' => 'Bouton de renvoi de lien d’activation n’est pas valide',
    'activationResent'     => 'Le lien d\'activation a été renvoyé à votre adresse',
    'passwordResetSent'    => 'Le lien de récupération du mot de passe a été envoyé à votre adresse',

    'form'       => array(
        'name'            => 'Votre nom complet',
        'email'           => 'E-mail',
        'signUp'          => 'Inscription',
        'password'        => 'Mot de passe',
        'reenterPassword' => 'Ressaisir le mot de passe',
        'confirmPassword' => 'Confirmer le mot de passe',
        'phoneNumber'     => 'Numéro de téléphone (i.e. +370 . . . . . .)',
        'company'         => 'Société',
    ),
    'buttons'    => array(
        'remember'       => 'Mémorisez mot de passe',
        'signUp'         => 'Inscription',
        'signUpInstallers' => 'Inscription pour les Installateurs',
        'logIn'          => 'Connexion',
        'forgotPassword' => 'Mot de passe oublié?',
        'cancel'         => 'Annuler',
        'agree'          => 'Accepter',
        'disagree'       => 'Refuser',
        'send'           => 'Envoyer',
        'resetPassword'  => 'Réinitialiser le mot de passe',
        'skip'           => 'Passer',
        'allow'          => 'Autoriser',
        'next'           => 'Suivant',
        'previous'       => 'Précédent',
        'finish'         => 'Terminer',
        'loginView'      => 'Retour à la page de connexion',
        'backToSystems'  => 'Retour à la liste du système',
    ),
    'activation' => array(
        'required' => 'Vous devriez recevoir un courriel avec le lien d\'activation.',
        'failed'   => 'L\'activation a échoué.',
    ),

    'emailChangeError' => 'La clé pour changer l\'adresse de messagerie est invalide.',
    'emailChanged'     => 'L\'e-mail a été modifié avec succès.',

    'pushNotifications'       => array(
        'title' => 'Notifications Push',
        'text'  => '"Protegus" souhaiterait vous envoyer des Notifications Push. Celles-ci peuvent être configurées dans les Paramètres.',
    ),
    'passwordResetTokenError' => 'La clé pour réinitialiser le mot de passe est invalide.',
    'tutorial'                => array(
        'title'  => 'Aide',
        'title1' => 'Ajouter un nouveau système',
        'text1'  => 'Pour créer un nouveau système :<br> 
Appuyer sur <b>Sélectionner un système</b> puis sur <b>Ajouter un nouveau système +</b>.',
        'title2' => '&nbsp;',
        'text2'  => 'Insérez l\'adresse <b>IMEI</b> de votre appareil. L\'IMEI est indiqué sur l\'emballage du produit.<br>
Insérez le <b>Code d\'accès au service "Protegus"</b>. Le code d\'accès est un code d\'authentification établissant la connexion avec votre appareil de communication. Le code doit correspondre à celui écrit dans l\'appareil de communication. Le code par défaut est 123456. Si le code d\'accès a été modifié, veuillez contacter le personnel compétent.',
        'title3' => '&nbsp;',
        'text3'  => 'Appuyer sur <b>Créer</b> pour ajouter un nouveau système.<br>
Le premier utilisateur à ajouter le système en devient l\'utilisateur principal. Il peut ajouter de nouveaux utilisateurs au système, modifier les noms des lieux, des zones, des sorties, des détecteurs et modifier de nombreux autres paramètres du système.',
    ),

    'pageExpired' => 'La page a expiré, veuillez réessayer',

    'errors' => array(
        '401' => 'Accès refusé.',
        '503' => 'De retour dans un instant.',
        '404' => 'Élément introuvable.',
        '500' => 'Le serveur est occupé. Veuillez réessayer plus tard.',
        '404_no_system' => 'Système introuvable ou a été supprimé.',
    ),
);
