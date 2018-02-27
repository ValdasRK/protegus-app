<?php

return array(
    'menu' => array(
        'subscriptions' => 'Subscriptions',
    ),

    'status' => array(
        'free'              => 'Free (:date)',
        'valid'             => 'Valid (paid until :date)',
        'overdue'           => 'Overdue (service will be suspended in :days days)',
        'cancelled'         => 'Cancelled (paid until :date)',
        'paymentError'      => 'Payment error (paid until :date)',
        'suspended'         => 'Suspended',
        'cardExpired'       => 'Credit card expired (paid until :date)',
        'insufficientFunds' => 'No funds in account (paid until :date)',
        'waitingForPayment' => 'Waiting for payment',
    ),

    'button' => array(
        'subscribe'       => 'Subscribe',
        'startFreePeriod' => 'Start free period',
        'ok'              => 'Ok',
    ),

    'label' => array(
        'subscriptions'          => 'Subscriptions',
        'availableSubscriptions' => 'Available subscriptions',
        'status'                 => 'Subscription status:',
    ),

    'plan' => array(
        'm2m_month' => 'Monthly - ',
        'm2m_year'  => 'Yearly - ',
    ),

    'type' => array(
        'm2m' => 'm2m',
    ),

    'message' => array(
        'noBillingAddress' => 'Fill billing data to subscribe',
        'cancel'           => 'Are you sure? Your device will not function without the data plan.',
        'subscribed'       => 'You have subscribed successfully.',
    ),

    'placeholderCardNumber'     => '0000 0000 0000 0000',
    'placeholderExpirationDate' => 'MM / YY',
    'cardNumber'                => 'Card Number',
    'expirationDate'            => 'Expiration date',
    'cvv'                       => 'cvv',
    'enterCardDetails'          => 'Enter card details',
    'payWithPaypal'             => 'Pay with paypal',
    'payWithCard'               => 'Pay with Card',
    'payingForPlan'             => 'Paying for plan:',
    'cancel'                    => 'Откажи',
    'validUntil'                => 'Valid until: :date',
    'nextBillingDate'           => 'Next payment: :date',
);
