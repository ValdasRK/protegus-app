<?php

return array(
    'menu' => array(
        'subscriptions' => 'Абонементы',
    ),

    'status' => array(
        'free'              => 'Бесплатно до (:date)',
        'valid'             => 'Действителен (оплачено до :date)',
        'overdue'           => 'Просрочен (услуга будет приостановлена через :days дней)',
        'cancelled'         => 'Отменен (оплачено до :date)',
        'paymentError'      => 'Ошибка платежа (оплачено до :date)',
        'suspended'         => 'Приостановлен',
        'cardExpired'       => 'Истек срок действия кредитной карты (оплачено до :date)',
        'insufficientFunds' => 'Нет средств на счете (оплачено до :date)',
        'waitingForPayment' => 'Ожидание платежа',
    ),

    'button' => array(
        'subscribe'       => 'Заказать',
        'startFreePeriod' => 'Начать бесплатный период',
        'ok'              => 'Ok',
    ),

    'label' => array(
        'subscriptions'          => 'Абонементы',
        'availableSubscriptions' => 'Доступные абонементы',
        'status'                 => 'Статус абонемента:',
    ),

    'plan' => array(
        'm2m_month' => 'Ежемесячный - ',
        'm2m_year'  => 'Ежегодный - ',
    ),

    'type' => array(
        'm2m' => 'm2m',
    ),

    'message' => array(
        'noBillingAddress' => 'Заполните платежные данные, чтобы подписаться',
        'cancel'           => 'Вы уверены? Устройство не будет работать без плана данных.',
        'subscribed'       => 'Абонемент заказан успешно.',
    ),

    'placeholderCardNumber'     => '0000 0000 0000 0000',
    'placeholderExpirationDate' => 'MM / YY',
    'cardNumber'                => 'Номер кредитной карты',
    'expirationDate'            => 'Действителен до',
    'cvv'                       => 'cvv',
    'enterCardDetails'          => 'Введите данные бынковской карты',
    'payWithPaypal'             => 'Оплата через PayPal',
    'payWithCard'               => 'Оплатить картой',
    'payingForPlan'             => 'Оплата за план:',
    'cancel'                    => 'Отмена',
    'validUntil'                => 'Действителен до: :date',
    'nextBillingDate'           => 'Следующий платеж: :date',
);
