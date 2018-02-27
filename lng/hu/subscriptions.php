<?php

return array(
    'menu' => array(
        'subscriptions' => 'Előfizetések',
    ),

    'status' => array(
        'free'              => 'Ingyenes (:date)',
        'valid'             => 'Érvényes (fizetve eddig: :date)',
        'overdue'           => 'Lejárt (a szolgáltatást felfüggesztjük :days napon belül)',
        'cancelled'         => 'Lemondva (fizetve eddig: :date)',
        'paymentError'      => 'Sikertelen fizetés (fizetve eddig: :date)',
        'suspended'         => 'Felfüggesztve',
        'cardExpired'       => 'Lejárt hitelkártya (fizetve eddig: :date)',
        'insufficientFunds' => 'Nincs fedezet a számlán (fizetve eddig: :date)',
        'waitingForPayment' => 'Fizetésre vár',
    ),

    'button' => array(
        'subscribe'       => 'Előfizetés',
        'startFreePeriod' => 'Kipróbálom ingyenesen',
        'ok'              => 'Oké',
    ),

    'label' => array(
        'subscriptions'          => 'Előfizetések',
        'availableSubscriptions' => 'Rendelkezésre álló előfizetések',
        'status'                 => 'Előfizetés állapota:',
    ),

    'plan' => array(
        'm2m_month' => 'Havi - ',
        'm2m_year'  => 'Évi - ',
    ),

    'type' => array(
        'm2m' => 'm2m',
    ),

    'message' => array(
        'noBillingAddress' => 'Töltsd ki a számlázási adatokat az előfizetéshez',
        'cancel'           => 'Biztos vagy benne? A készülék nem fog működni adatkapcsolat nélkül.',
        'subscribed'       => 'Már sikeresen előfizettél.',
    ),

    'placeholderCardNumber'     => '0000 0000 0000 0000',
    'placeholderExpirationDate' => 'HH / ÉÉ',
    'cardNumber'                => 'Bankkártya Szám',
    'expirationDate'            => 'Lejárat dátuma',
    'cvv'                       => 'cvv',
    'enterCardDetails'          => 'Adja meg a bankkártya adatait',
    'payWithPaypal'             => 'Fizetés PayPal-lal',
    'payWithCard'               => 'Bankártyás fizetés',
    'payingForPlan'             => 'Fizetés az előfizetésért:',
    'cancel'                    => 'Mégse',
    'validUntil'                => 'Érvényes: :date',
    'nextBillingDate'           => 'Következő fizetés: :date',
);
