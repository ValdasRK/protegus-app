<?php

return array(
    'email' => array(
        'title' => array(
            'subscriptionDaysLeft0' => 'Langganan anda telah tamat tempoh',
            'subscriptionDaysLeft1' => 'Langganan anda akan berakhir esok',
            'subscriptionDaysLeft2' => 'Langganan anda akan berakhir dalam masa dua hari',
            'subscriptionDaysLeft5' => 'Langganan anda akan tamat dalam tempoh lima hari',
        ),
        'body'  => array(
            'subscriptionEnd'       => array(
                'info'       => 'Kami tidak dapat menerima pembayaran berkala dari akaun anda.',
                'systemName' => 'Sistem: :systemName',
                'linkInfo'   => 'Sila semak status pembayaran anda di <a href=":href"> langganan</a> atau <a href=":mobileHref"> aplikasi mudah alih</a>',
            ),
            'subscriptionDaysLeft0' => 'Langganan anda telah tamat tempoh. Untuk memperbaharui pergi ke <a href=":href"> langganan</a> atau <a href=":mobileHref"> aplikasi mudah alih</a>',
            'subscriptionDaysLeft1' => 'Langganan anda akan berakhir pada :daysLeft hari, dan peranti anda akan digantung.',
            'subscriptionDaysLeft2' => 'Langganan anda akan berakhir pada :daysLeft hari, dan peranti anda akan digantung.',
            'subscriptionDaysLeft5' => 'Langganan anda akan berakhir pada :daysLeft hari.',
        ),
    ),
    'popup' => array(
        'subscriptionDaysLeft0' => 'Langganan anda telah tamat tempoh atau tidak sah. Untuk memperbaharui pergi ke <a href=":href"> seting langganan</a>.',
        'subscriptionDaysLeft1' => 'Kami tidak dapat menerima pembayaran berkala dari akaun anda. Sistem: :system.         Sila semak status pembayaran anda dalam <a href=":href"> tetapan langganan</a>. Langganan anda akan berakhir esok.',
        'subscriptionDaysLeft2' => 'Kami tidak dapat menerima pembayaran berkala dari akaun anda. Sistem: :system.         Sila semak status pembayaran anda dalam <a href=":href"> tetapan langganan</a>. Langganan anda akan berakhir pada :daysLeft hari.',
        'subscriptionDaysLeft5' => 'Kami tidak dapat menerima pembayaran berkala dari akaun anda. Sistem: :system.         Sila semak status pembayaran anda dalam <a href=":href"> tetapan langganan</a>. Langganan anda akan berakhir pada :daysLeft hari.',
    ),
    'emailPlanChanged' => array(
        'title' => 'Harga pelan langganan telah berubah',
        'body'  => array(
            'info'             => 'Harga pelan langganan anda telah berubah',
            'systemName'       => 'Sistem: :systemName',
            'nextBillingPrice' => 'Harga bil anda seterusnya akan :nextBillingPrice :currency, di :billingDate',
        ),
    ),
);
