<?php

return array(
    'email' => array(
        'title' => array(
            'subscriptionDaysLeft0' => 'Abonelik Süresi Doldu',
            'subscriptionDaysLeft1' => 'Aboneliğiniz Yarın Sona Erecek',
            'subscriptionDaysLeft2' => 'Your subscription will end in two days',
            'subscriptionDaysLeft5' => 'Your subscription will end in five days',
        ),
        'body'  => array(
            'subscriptionEnd'       => array(
                'info'       => 'We were unable to receive the periodical payment from your account.',
                'systemName' => 'System: :systemName',
                'linkInfo'   => 'Please check your payment status in <a href=":href">subscription</a> or <a href=":mobileHref">mobile app </a>',
            ),
            'subscriptionDaysLeft0' => 'Your subscription has expired. To renew go to <a href=":href">subscription</a> or <a href=":mobileHref">mobile app </a>',
            'subscriptionDaysLeft1' => 'Your subscription will end in :daysLeft days, and your device will be suspended.',
            'subscriptionDaysLeft2' => 'Your subscription will end in :daysLeft days, and your device will be suspended.',
            'subscriptionDaysLeft5' => 'Your subscription will end in :daysLeft days.',
        ),
    ),
    'popup' => array(
        'subscriptionDaysLeft0' => 'Your subscription has expired or not valid. To renew go to <a href=":href">subscription settings</a>.',
        'subscriptionDaysLeft1' => 'We were unable to receive the periodical payment from your account. System: :system.
        Please check your payment status in <a href=":href">subscription settings</a>. Your subscription will end tomorrow.',
        'subscriptionDaysLeft2' => 'We were unable to receive the periodical payment from your account. System: :system.
        Please check your payment status in <a href=":href">subscription settings</a>. Your subscription will end in :daysLeft days.',
        'subscriptionDaysLeft5' => 'We were unable to receive the periodical payment from your account. System: :system.
        Please check your payment status in <a href=":href">subscription settings</a>. Your subscription will end in :daysLeft days.',
    ),
    'emailPlanChanged' => array(
        'title' => 'Subscription plan price has changed',
        'body'  => array(
            'info'             => 'Your subscription plan pricing has changed',
            'systemName'       => 'System: :systemName',
            'nextBillingPrice' => 'Your next billing price will be :nextBillingPrice :currency, on :billingDate',
        ),
    ),
);
