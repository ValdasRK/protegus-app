<?php

return array(
    'email' => array(
        'title' => array(
            'subscriptionDaysLeft0' => 'Langganan Anda telah berakhir',
            'subscriptionDaysLeft1' => 'Langganan Anda akan berakhir besok',
            'subscriptionDaysLeft2' => 'Langganan Anda akan berakhir dalam dua hari',
            'subscriptionDaysLeft5' => 'Langganan Anda akan berakhir dalam lima hari',
        ),
        'body'  => array(
            'subscriptionEnd'       => array(
                'info'       => 'Kami tidak dapat menerima pembayaran berkala dari akun Anda.',
                'systemName' => 'Sistem: :systemName',
                'linkInfo'   => 'Silahkan periksa status pembayaran dalam <a href=":href">langganan</a> atau <a
href=":mobileHref">aplikasi handphone </a>',
            ),
            'subscriptionDaysLeft0' => 'Kamu berlangganan telah kadaluarsa. Untuk memperbaharui pergi ke <a href=":href">langganan<a/> atau <a
href=":mobileHref">aplikasi handphone </a>',
            'subscriptionDaysLeft1' => 'Langganan Anda akan berakhir dalam :daysLeft hari, dan perangkat Anda akan ditangguhkan.',
            'subscriptionDaysLeft2' => 'Langganan Anda akan berakhir dalam :daysLeft hari, dan perangkat Anda akan ditangguhkan.',
            'subscriptionDaysLeft5' => 'Langganan Anda akan berakhir pada :daysLeft hari.',
        ),
    ),
    'popup' => array(
        'subscriptionDaysLeft0' => 'Berlangganan kamu telah kadaluarsa atau tidak valid. Untuk memperbaharui pergi ke <a href=":href">pengaturan langganan</a>.',
        'subscriptionDaysLeft1' => 'Kami tidak dapat menerima pembayaran berkala dari akun anda. Sistem: :system. Silahkan periksa status pembayaran anda dalam <a href=":href">pengaturan langganan</a>. Langganan anda akan berakhir besok hari.',
        'subscriptionDaysLeft2' => 'Kami tidak dapat menerima pembayaran berkala dari akun anda. Sistem: :system. Silahkan periksa status pembayaran anda dalam <a href=":href">pengaturan langganan</a>. Langganan anda akan berakhir dalam :daysLeft beberapa hari.',
        'subscriptionDaysLeft5' => 'Kami tidak dapat menerima pembayaran berkala dari akun anda. Sistem: :system. Silahkan periksa status pembayaran anda dalam <a href=":href">pengaturan langganan</a>. Langganan anda akan berakhir dalam :daysLeft beberapa hari.',
    ),
    'emailPlanChanged' => array(
        'title' => 'Rencana harga berlangganan telah berubah',
        'body'  => array(
            'info'             => 'Rencana Harga berlangganan kamu telah berubah',
            'systemName'       => 'Sistem: :systemName',
            'nextBillingPrice' => 'Harga penagihan anda berikutnya sebesar :nextBillingPrice :currency, on :billingDate',
        ),
    ),
);
