<?php

return array(
    'settings' => array(
        'title'  => 'Générer des bons',
        'list'   => array(
            'title'         => 'Liste des bons',
            'code'          => 'Code',
            'status'        => 'État',
            'addsTime'      => 'Ajouter des mois',
            'dateCreated'   => 'Date créée',
            'userCreated'   => 'Utilisateur créé',
            'assignedTo'    => 'Assigné au vendeur',
            'dateActivated' => 'Date activée',
            'systemUsed'    => 'Système utilisé',
            'userActivated' => 'Utilisateur activé',
        ),
        'status' => 'Bons générés. Avec succès - :success ; Échec - :fail',
        'label'  => array(
            'amount' => 'Montant',
            'months' => 'Mois',
            'dealer' => 'Vendeur',
        )
    ),

    'button' => array(
        'useVoucher' => 'Utiliser le bon',
        'generate'   => 'Générer',
        'download'   => 'Télécharger',
        'use'        => 'Utiliser',
        'back'       => 'Retour',
        'ok'         => 'Ok',
    ),

    'mail' => array(
        'blockedUserMailTitle' => 'Utilisateur du bon bloqué',

        'blockedUser' => array(
            'body' => 'L\'utilisateur : ( :userId - :userName) a été bloqué après avoir tenté d’appliquer le bon trop de fois, bloqué jusqu\'à: :blockedTo',
        ),
    ),

    'title' => array(
        'voucher'   => 'Bon',
        'enterCode' => 'Entrer le code du bon',
    ),

    'notification' => array(
        'userVoucherEntryBlocked' => 'Vous êtes bloqué pour plusieurs échecs',
        'voucherApplied'          => 'Votre bon a été appliqué avec succès',
    ),

    'invoice' => 'Payé avec le bon : :code',
    'error'   => array('wrongCode' => 'Code du bon erroné'),
);
