<?php

return array(
    'email' => array(
        'title' => array(
            'subscriptionDaysLeft0' => 'Su suscripción ha caducado',
            'subscriptionDaysLeft1' => 'Su suscripción terminará mañana',
            'subscriptionDaysLeft2' => 'Su suscripción terminará en dos días',
            'subscriptionDaysLeft5' => 'Su suscripción terminará en cinco días',
        ),
        'body'  => array(
            'subscriptionEnd'       => array(
                'info'       => 'Fuimos incapaces de recibir el pago periódico de su cuenta.',
                'systemName' => 'Sistema: :systemName',
                'linkInfo'   => 'Por favor, compruebe su estado de pago en <a href=":href"> subscription</a> o <a href=":mobileHref"> mobile app</a>',
            ),
            'subscriptionDaysLeft0' => 'Su suscripción ha caducado. Para renovar, vaya a<a href=":href">subscription</a> or <a href=":mobileHref">mobile app </a>',
            'subscriptionDaysLeft1' => 'Su suscripción terminará en :daysLeft days y su dispositivo se suspenderá.',
            'subscriptionDaysLeft2' => 'Su suscripción terminará en :daysLeft days y su dispositivo se suspenderá.',
            'subscriptionDaysLeft5' => 'Su suscripción terminará en :daysLeft days.',
        ),
    ),
    'popup' => array(
        'subscriptionDaysLeft0' => 'Su suscripción ha caducado o no es válido. Para renovar, vaya a <a href=":href">subscription settings</a>.',
        'subscriptionDaysLeft1' => 'Fuimos incapaces de recibir el pago periódico de su cuenta. Sistema: :system. 
Compruebe su estado de pago en <a href=":href">subscription settings</a>. Su suscripción terminará mañana.',
        'subscriptionDaysLeft2' => 'Fuimos incapaces de recibir el pago periódico de su cuenta. Sistema: :system.
        Compruebe su estado de pago en <a href=":href">subscription settings</a>. Su suscripción terminará en :daysLeft days.',
        'subscriptionDaysLeft5' => 'Fuimos incapaces de recibir el pago periódico de su cuenta. Sistema: :system.
        Compruebe su estado de pago en <a href=":href">subscription settings</a>. Su suscripción terminará en :daysLeft days.',
    ),
    'emailPlanChanged' => array(
        'title' => 'El precio del plan de suscripción ha cambiado',
        'body'  => array(
            'info'             => 'El precio del plan de suscripción ha cambiado',
            'systemName'       => 'Sistema: :systemName',
            'nextBillingPrice' => 'Su próximo precio de facturación será :nextBillingPrice :currency, on :billingDate',
        ),
    ),
);
