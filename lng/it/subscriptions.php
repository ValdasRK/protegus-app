<?php

return array(
    'menu' => array(
        'subscriptions' => 'Iscrizioni',
    ),

    'status' => array(
        'free'              => 'Gratis (:date)',
        'valid'             => 'Valido (pagato fino a :date)',
        'overdue'           => 'Ritardi (servizio sarà sospeso fra :days giorni)',
        'cancelled'         => 'Annullato (pagato fino a :date)',
        'paymentError'      => 'Errore di pagamento (pagato fino a :date)',
        'suspended'         => 'Sospeso',
        'cardExpired'       => 'Carta di credito scaduta (pagato fino al :date)',
        'insufficientFunds' => 'Fondi sul conto non sono sufficienti (pagato fino al :date)',
        'waitingForPayment' => 'In attesa di pagamento',
    ),

    'button' => array(
        'subscribe'       => 'Iscriviti',
        'startFreePeriod' => 'Inizia periodo gratuito',
        'ok'              => 'Ok',
    ),

    'label' => array(
        'subscriptions'          => 'Abbonamenti',
        'availableSubscriptions' => 'Abbonamenti disponibili',
        'status'                 => 'Stato di abbonamento:',
    ),

    'plan' => array(
        'm2m_month' => 'Mensile - ',
        'm2m_year'  => 'Annuale - ',
    ),

    'type' => array(
        'm2m' => 'm2m',
    ),

    'message' => array(
        'noBillingAddress' => 'Riempi i dati di fatturazione per iscriverti',
        'cancel'           => 'Sei sicuro? Il dispositivo non funzionerà senza il piano dati.',
        'subscribed'       => 'Ti sei abbonato con successo.',
    ),

    'placeholderCardNumber'     => '0000 0000 0000 0000',
    'placeholderExpirationDate' => 'MM / AA',
    'cardNumber'                => 'Numero di carta',
    'expirationDate'            => 'Data di scadenza',
    'cvv'                       => 'cvv',
    'enterCardDetails'          => 'Inserisci i detagli della carta',
    'payWithPaypal'             => 'Pagare con PayPal',
    'payWithCard'               => 'Pagare con carta',
    'payingForPlan'             => 'Pagamento per il piano:',
    'cancel'                    => 'Annullare',
    'validUntil'                => 'Valido fino a: :date',
    'nextBillingDate'           => 'Prossimo pagamento: :date',
);
