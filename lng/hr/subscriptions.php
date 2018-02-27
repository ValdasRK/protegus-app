<?php

return array(
    'menu' => array(
        'subscriptions' => 'Pretplate',
    ),

    'status' => array(
        'free'              => 'Besplatno (:date)',
        'valid'             => 'Vrijedi (plaćeno do :date)',
        'overdue'           => 'Dospjeli dugovi (usluga će biti suspendirana unutar :days dana)',
        'cancelled'         => 'Otkazano (plaćeno do :date)',
        'paymentError'      => 'Greška plaćanja (plaćen do :date)',
        'suspended'         => 'Suspendiran',
        'cardExpired'       => 'Kreditna kartica istekla (plaćeno do :date)',
        'insufficientFunds' => 'Nema sredstava na računu (plaćeno do :date)',
        'waitingForPayment' => 'Čeka za plaćanje',
    ),

    'button' => array(
        'subscribe'       => 'Prijavi',
        'startFreePeriod' => 'Započni besplatni period',
        'ok'              => 'U redu',
    ),

    'label' => array(
        'subscriptions'          => 'Pretplate',
        'availableSubscriptions' => 'Dostupne pretplate',
        'status'                 => 'Status pretplate:',
    ),

    'plan' => array(
        'm2m_month' => 'Mjesečno - ',
        'm2m_year'  => 'Godišnje - ',
    ),

    'type' => array(
        'm2m' => 'm2m',
    ),

    'message' => array(
        'noBillingAddress' => 'Ispuniti podatke naplate kako biste se pretplatili',
        'cancel'           => 'Jesi siguran? Vaš uređaj neće funkcionirati bez plana podataka.',
        'subscribed'       => 'Uspješno ste se pretplatili.',
    ),

    'placeholderCardNumber'     => '0000 0000 0000 0000',
    'placeholderExpirationDate' => 'MM/GG',
    'cardNumber'                => 'Broj kartice',
    'expirationDate'            => 'Datum isteka',
    'cvv'                       => 'cvv',
    'enterCardDetails'          => 'Unesite podatke o kartici',
    'payWithPaypal'             => 'Plati PayPal-om',
    'payWithCard'               => 'Plaćanje karticom',
    'payingForPlan'             => 'Plaćanje za plan:',
    'cancel'                    => 'Poništi',
    'validUntil'                => 'Vrijedi do: :date',
    'nextBillingDate'           => 'Datum sljedećeg plaćanja: :date',
);
