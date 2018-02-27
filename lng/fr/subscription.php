<?php

return array(
    'email' => array(
        'title' => array(
            'subscriptionDaysLeft0' => 'Votre abonnement a expiré',
            'subscriptionDaysLeft1' => 'Votre abonnement expire demain',
            'subscriptionDaysLeft2' => 'Votre abonnement expire dans deux jours',
            'subscriptionDaysLeft5' => 'Votre abonnement expire dans cinq jours',
        ),
        'body'  => array(
            'subscriptionEnd'       => array(
                'info'       => 'Nous n’avons pas pu recevoir le versement périodique de votre compte.',
                'systemName' => 'Système: :systemName',
                'linkInfo'   => 'Veuillez vérifier l\'état de votre paiement dans <a href=":href">abonnement</a> ou <a href=":mobileHref">application mobile</a>',
            ),
            'subscriptionDaysLeft0' => 'Votre abonnement a expiré. Pour le renouveler, allez sur <a href=":href">abonnement</a> ou <a href=":mobileHref">application mobile</a>',
            'subscriptionDaysLeft1' => 'Votre abonnement prendra fin dans :daysLeft jours et votre appareil sera mis en suspend.',
            'subscriptionDaysLeft2' => 'Votre abonnement prendra fin dans :daysLeft jours et votre appareil sera mis en suspens.',
            'subscriptionDaysLeft5' => 'Votre abonnement prendra fin dans :daysLeft jours.',
        ),
    ),
    'popup' => array(
        'subscriptionDaysLeft0' => 'Votre abonnement a expiré ou n\'est pas valide. Pour le renouveler, allez dans <a href=":href">paramètres d’abonnement</a>.',
        'subscriptionDaysLeft1' => 'Nous n’avons pu recevoir le versement périodique de votre compte. le système : :system.         Veuillez vérifier l\'état de votre paiement dans les <a href=":href"> paramètres d’abonnement</a>. Votre abonnement prendra fin demain.',
        'subscriptionDaysLeft2' => 'Nous n’avons pu recevoir le versement périodique de votre compte. le système : :system.         Veuillez vérifier l\'état de votre paiement dans les <a href=":href"> paramètres d’abonnement</a>. Votre abonnement prendra fin dans :daysLeft jours.',
        'subscriptionDaysLeft5' => 'Nous n’avons pu recevoir le versement périodique de votre compte. le système : :system.         Veuillez vérifier l\'état de votre paiement dans les <a href=":href"> paramètres d’abonnement</a>. Votre abonnement prendra fin dans :daysLeft jours.',
    ),
    'emailPlanChanged' => array(
        'title' => 'Le prix du plan d\'abonnement a changé',
        'body'  => array(
            'info'             => 'Le prix de votre plan d\'abonnement a changé',
            'systemName'       => 'Système : :systemName',
            'nextBillingPrice' => 'Votre prix de facturation suivant sera :nextBillingPrice :currency, le :billingDate',
        ),
    ),
);
