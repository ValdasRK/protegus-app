<?php

return array(
    'email' => array(
        'title' => array(
            'subscriptionDaysLeft0' => 'Jūsų abonemento galiojimas baigėsi',
            'subscriptionDaysLeft1' => 'Jūsų abonemento galiojimas baigsis rytoj',
            'subscriptionDaysLeft2' => 'Jūsų abonemento galiojimas baigsis po 2 dienų',
            'subscriptionDaysLeft5' => 'Jūsų abonemento galiojimas baigsis po 5 dienų',
        ),
        'body'  => array(
            'subscriptionEnd'       => array(
                'info'       => 'Mes negavome periodinio mokėjimo iš Jūsų sąskaitos.',
                'systemName' => 'Sistema: :systemName',
                'linkInfo'   => 'Prašome patikrinti mokėjimo būseną <a href=":href">Abonementai</a> arba <a href=":mobileHref">mobiliojoje programėlėje</a>',
            ),
            'subscriptionDaysLeft0' => 'Jūsų abonemento galiojimas baigėsi. Norint atnaujinti, eikite į <a href=":href">Abonementai</a> arba <a href=":mobileHref">mobiliojoje programėlėje</a>',
            'subscriptionDaysLeft1' => 'Jūsų abonemento galiojimas baigsis po :daysLeft dienų ir įrenginys bus sustabdytas.',
            'subscriptionDaysLeft2' => 'Jūsų abonemento galiojimas baigsis po :daysLeft dienų ir įrenginys bus sustabdytas.',
            'subscriptionDaysLeft5' => 'Jūsų abonemento galiojimas baigsis po :daysLeft dienų.',
        ),
    ),
    'popup' => array(
        'subscriptionDaysLeft0' => 'Jūsų abonemento galiojimas baigėsi arba negalioja. Norėdami atnaujinti, eikite į <a href=":href">Abonementai</a>.',
        'subscriptionDaysLeft1' => 'Mes negavome periodinio mokėjimo iš Jūsų sąskaitos. Sistema: :system.
        Prašome patikrinti mokėjimo būseną <a href=":href">Abonementai</a>. Jūsų abonemento galiojimas baigsis rytoj.',
        'subscriptionDaysLeft2' => 'Mes negavome periodinio mokėjimo iš Jūsų sąskaitos. Sistema: :system.
        Prašome patikrinti mokėjimo būseną <a href=":href">Abonementai</a>. Jūsų abonemento galiojimas baigsis po :daysLeft dienų.',
        'subscriptionDaysLeft5' => 'Mes negavome periodinio mokėjimo iš Jūsų sąskaitos. Sistema: :system.
        Prašome patikrinti mokėjimo būseną <a href=":href">Abonementai</a>. Jūsų abonemento galiojimas baigsis po :daysLeft dienų.',
    ),
    'emailPlanChanged' => array(
        'title' => 'Abonementas ir jo kaina pasikeitė',
        'body'  => array(
            'info'             => 'Jūsų abonemento kaina pasikeitė',
            'systemName'       => 'Sistema: :systemName',
            'nextBillingPrice' => 'Jūsų sekančio atsiskaitymo kaina ir data bus: :nextBillingPrice :currency, :billingDate',
        ),
    ),
);
