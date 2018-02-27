<?php

return array(
    'email' => array(
        'title' => array(
            'subscriptionDaysLeft0' => 'Lejárt az előfizetésed',
            'subscriptionDaysLeft1' => 'Az előfizetésed holnap lejár',
            'subscriptionDaysLeft2' => 'Az előfizetésed 2 nap múlva lejár',
            'subscriptionDaysLeft5' => 'Az előfizetésed 5 nap múlva lejár',
        ),
        'body'  => array(
            'subscriptionEnd'       => array(
                'info'       => 'Nem tudjuk lehívni a fizetést a fiókodhoz tartozó előfizetésedhez.',
                'systemName' => 'Rendszer: :systemName',
                'linkInfo'   => 'Ellenőrizd az <a href=":href">előfizetésednél</a> vagy <a href=":mobileHref">mobil alkalmazásban</a> a fizetés állapotát',
            ),
            'subscriptionDaysLeft0' => 'Lejárt az előfizetésed. Az <a href=":href">előfizetésednél</a> vagy <a href=":mobileHref">mobil alkalmazásban</a> megújíthatod',
            'subscriptionDaysLeft1' => 'Az előfizetésed :daysLeft nap múlva lejár és az eszközöd fel lesz függesztve.',
            'subscriptionDaysLeft2' => 'Az előfizetésed :daysLeft nap múlva lejár és az eszközöd fel lesz függesztve.',
            'subscriptionDaysLeft5' => 'Az előfizetésed :daysLeft nap múlva lejár.',
        ),
    ),
    'popup' => array(
        'subscriptionDaysLeft0' => 'Az előfizetésed lejárt vagy érvénytelen. A megújításhoz lépj be az <a href=":href">előfizetés beállításokhoz</a>.',
        'subscriptionDaysLeft1' => 'Nem tudjuk lehívni a fizetést a fiókodhoz tartozó előfizetésedhez. Rendszer: :system.
        Kérlek, ellenőrizd a fizetés állapotát az <a href=":href">előfizetés beállításainál</a>. Az előfizetésed holnap lejár.',
        'subscriptionDaysLeft2' => 'Nem tudjuk lehívni a fizetést a fiókodhoz tartozó előfizetésedhez. Rendszer: :system.
        Kérlek, ellenőrizd a fizetés állapotát az <a href=":href">előfizetés beállításainál</a>. Az előfizetésed :daysLeft nap múlva lejár.',
        'subscriptionDaysLeft5' => 'Nem tudjuk lehívni a fizetést a fiókodhoz tartozó előfizetésedhez. Rendszer: :system.
        Kérlek, ellenőrizd a fizetés állapotát az <a href=":href">előfizetés beállításainál</a>. Az előfizetésed :daysLeft nap múlva lejár.',
    ),
    'emailPlanChanged' => array(
        'title' => 'Az előfizetés árazása megváltozott',
        'body'  => array(
            'info'             => 'Az előfizetésed árazása megváltozott',
            'systemName'       => 'Rendszer: :systemName',
            'nextBillingPrice' => 'A következő számlázott összeged :nextBillingPrice :currency, ekkor :billingDate',
        ),
    ),
);
