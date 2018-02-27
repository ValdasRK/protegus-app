<?php

return array(
    'menu' => array(
        'subscriptions' => 'Претплати',
    ),

    'status' => array(
        'free'              => 'Бесплатно (:date)',
        'valid'             => 'Валидно (платено до :date)',
        'overdue'           => 'Доспеани долгови (услугата ќе биде суспендирана за :days денови)',
        'cancelled'         => 'Откажано (платено до :date)',
        'paymentError'      => 'Грешка при плаќање (платено до :date)',
        'suspended'         => 'Суспендиран',
        'cardExpired'       => 'Истечена кредитна картичка (платено до :date)',
        'insufficientFunds' => 'Нема средства на сметката (платено до :date)',
        'waitingForPayment' => 'Чека за плаќање',
    ),

    'button' => array(
        'subscribe'       => 'Пријави',
        'startFreePeriod' => 'Започни бесплатен период',
        'ok'              => 'Во ред',
    ),

    'label' => array(
        'subscriptions'          => 'Претплати',
        'availableSubscriptions' => 'Достапни претплати',
        'status'                 => 'Статус на претплати:',
    ),

    'plan' => array(
        'm2m_month' => 'Месечно - ',
        'm2m_year'  => 'Годишно - ',
    ),

    'type' => array(
        'm2m' => 'm2m',
    ),

    'message' => array(
        'noBillingAddress' => 'Пополнете ги податоците за наплата за да се претплатите',
        'cancel'           => 'Дали сте сигурни? Вашиот уред нема да функционира без Data план.',
        'subscribed'       => 'Успешна претплата.',
    ),

    'placeholderCardNumber'     => '0000 0000 0000 0000',
    'placeholderExpirationDate' => 'MM/GG',
    'cardNumber'                => 'Број на картичка',
    'expirationDate'            => 'Датум на истекување',
    'cvv'                       => 'cvv',
    'enterCardDetails'          => 'Внесете податоци за корисникот',
    'payWithPaypal'             => 'Плати со PayPal',
    'payWithCard'               => 'Плаќање со картичка',
    'payingForPlan'             => 'Плаќање за план:',
    'cancel'                    => 'Поништи',
    'validUntil'                => 'Вреди до: :date',
    'nextBillingDate'           => 'Датум до следно плаќање: :date',
);
