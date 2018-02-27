<?php

return array(
    'menu' => array(
        'subscriptions' => 'Abonnements',
    ),

    'status' => array(
        'free'              => 'Gratuit (:date)',
        'valid'             => 'Valable (payé jusqu\'au :date)',
        'overdue'           => 'En retard (service suspendu dans :days jours)',
        'cancelled'         => 'Annulé (payé jusqu\'au :date)',
        'paymentError'      => 'Erreur de paiement (payé jusqu\'au :date)',
        'suspended'         => 'Interrompu',
        'cardExpired'       => 'Carte de crédit expirée (payé jusqu’au :date)',
        'insufficientFunds' => 'Pas de fonds dans le compte (payé jusqu’au :date)',
        'waitingForPayment' => 'En attente de paiement',
    ),

    'button' => array(
        'subscribe'       => 'S\'abonner',
        'startFreePeriod' => 'Commencer la période d\'essai gratuite',
        'ok'              => 'Ok',
    ),

    'label' => array(
        'subscriptions'          => 'Abonnements',
        'availableSubscriptions' => 'Abonnements disponibles',
        'status'                 => 'État de l\'abonnement :',
    ),

    'plan' => array(
        'm2m_month' => 'Mensuel - ',
        'm2m_year'  => 'Annuel - ',
    ),

    'type' => array(
        'm2m' => 'm2m',
    ),

    'message' => array(
        'noBillingAddress' => 'Remplissez les données de facturation pour vous abonner',
        'cancel'           => 'Êtes-vous sûr ? Votre appareil ne fonctionnera pas sans le plan de données.',
        'subscribed'       => 'Vous vous êtes abonné avec succès.',
    ),

    'placeholderCardNumber'     => '0000 0000 0000 0000',
    'placeholderExpirationDate' => 'MM / AA',
    'cardNumber'                => 'Numéro de carte',
    'expirationDate'            => 'Date d\'expiration',
    'cvv'                       => 'cvv',
    'enterCardDetails'          => 'Entrez les coordonnées de la carte',
    'payWithPaypal'             => 'Payer avec PayPal',
    'payWithCard'               => 'Payer par carte',
    'payingForPlan'             => 'Paiement pour le plan :',
    'cancel'                    => 'Annuler',
    'validUntil'                => 'Valable jusqu\'au : :date',
    'nextBillingDate'           => 'Prochain paiement : :date',
);
