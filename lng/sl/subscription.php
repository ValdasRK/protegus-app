<?php

return array(
    'email' => array(
        'title' => array(
            'subscriptionDaysLeft0' => 'Vaša naročnina je potekla',
            'subscriptionDaysLeft1' => 'Vaša naročnina bo jutri konec',
            'subscriptionDaysLeft2' => 'Vaša naročnina bo potekla v dveh dneh',
            'subscriptionDaysLeft5' => 'Vaša naročnina bo potekla v petih dneh',
        ),
        'body'  => array(
            'subscriptionEnd'       => array(
                'info'       => 'Ne moremo prejemati periodičnih plačil z vašega računa.',
                'systemName' => 'Sistem: :systemName',
                'linkInfo'   => 'Prosimo preverite izvedbo plačila v <a href=":href">naročnina</a> ali <a href=":mobileHref">mobilna app </a>',
            ),
            'subscriptionDaysLeft0' => 'Vaša naročnina je potekla. Za ponovno aktivacijo pojdite na <a href=":href">naročnine</a> ali <a href=":mobileHref">mobilna app </a>',
            'subscriptionDaysLeft1' => 'Naročnina vam poteče čez :daysLeft dni, nato bo vaša naprava izključena iz sistema.',
            'subscriptionDaysLeft2' => 'Naročnina vam poteče čez :daysLeft dni, nato bo vaša naprava izključena iz sistema.',
            'subscriptionDaysLeft5' => 'Vaša naročnina bo potekla v :daysLeft dneh.',
        ),
    ),
    'popup' => array(
        'subscriptionDaysLeft0' => 'Vaša naročnina je potekla ali ni veljavna. Za prenovo pojdite na <a href=":href">naročniške nastavitve</a>.',
        'subscriptionDaysLeft1' => 'Iz vašega računa nismo prejeli plačila. Sistem: :system.
        Prosimo preverite status plačil v <a href=":href">nastavitve plačil</a>. Vaša naročnina poteče jutri.',
        'subscriptionDaysLeft2' => 'Iz vašega računa nismo prejeli plačila. Sistem: :system.
        Prosimo preverite status plačil v <a href=":href">nastavitve plačil</a>. Vaša naročnina poteče čez :daysLeft dni .',
        'subscriptionDaysLeft5' => 'Iz vašega računa nismo prejeli plačila. Sistem: :system.
        Prosimo preverite status plačil v <a href=":href">nastavitve plačil</a>. Vaša naročnina poteče čez :daysLeft dni .',
    ),
    'emailPlanChanged' => array(
        'title' => 'Znesek naročnine je spremenjen',
        'body'  => array(
            'info'             => 'Vaša naročnina je spremenjena',
            'systemName'       => 'Sistem: :systemName',
            'nextBillingPrice' => 'Vaš naslednji znesek za plačilo je :nextBillingPrice :currency, na dan :billingDate',
        ),
    ),
);
