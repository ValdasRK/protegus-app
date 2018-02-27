<?php

return array(
    'menu' => array(
        'subscriptions' => 'Naročnina',
    ),

    'status' => array(
        'free'              => 'Brezplačno (:date)',
        'valid'             => 'Veljaven (plačano do :date)',
        'overdue'           => 'Zapadlo (storitev se prekine čez :days dni)',
        'cancelled'         => 'Preklican (plačane do :date)',
        'paymentError'      => 'Napaka pri plačilu (plačajte pred :date)',
        'suspended'         => 'Preklicano',
        'cardExpired'       => 'Kreditna kartica je potekla (plačajte do :date)',
        'insufficientFunds' => 'Ni sredstev na računu (plačajte do :date)',
        'waitingForPayment' => 'Čakamo na plačilo',
    ),

    'button' => array(
        'subscribe'       => 'Naroči se:',
        'startFreePeriod' => 'Začnite z brezplačnim preizkusom',
        'ok'              => 'v redu',
    ),

    'label' => array(
        'subscriptions'          => 'Naročnine',
        'availableSubscriptions' => 'Naročnine, ki so na voljo',
        'status'                 => 'Stanje naročnine:',
    ),

    'plan' => array(
        'm2m_month' => 'Mesečno- ',
        'm2m_year'  => 'Letno- ',
    ),

    'type' => array(
        'm2m' => 'M2M',
    ),

    'message' => array(
        'noBillingAddress' => 'Vnesite podatke za naročnino',
        'cancel'           => 'Ali ste prepričani? Vaša naprava ne bo delovala brez podatkov.',
        'subscribed'       => 'Uspešno ste se naročili.',
    ),

    'placeholderCardNumber'     => '0000 0000 0000 0000',
    'placeholderExpirationDate' => 'MM / YY',
    'cardNumber'                => 'Številka kartice',
    'expirationDate'            => 'Datum poteka',
    'cvv'                       => 'cvv',
    'enterCardDetails'          => 'Vnesite podatke iz kartice',
    'payWithPaypal'             => 'Plačilo z paypal',
    'payWithCard'               => 'Plačilo s kartico',
    'payingForPlan'             => 'Plačilo za načrt:',
    'cancel'                    => 'Prekliči',
    'validUntil'                => 'Veljaven do :date',
    'nextBillingDate'           => 'Naslednja plačila :date',
);
