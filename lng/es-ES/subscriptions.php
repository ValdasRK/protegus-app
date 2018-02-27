<?php

return array(
    'menu' => array(
        'subscriptions' => 'Suscripciones',
    ),

    'status' => array(
        'free'              => 'Libre (:date)',
        'valid'             => 'Válido (pagado hasta :date)',
        'overdue'           => 'Vencida (se suspenderá servicio en :days days)',
        'cancelled'         => 'Cancelado (pagado hasta :date)',
        'paymentError'      => 'Error de pago (pagado hasta :date)',
        'suspended'         => 'Suspendido',
        'cardExpired'       => 'Tarjeta de crédito vencida (pago hasta :date)',
        'insufficientFunds' => 'No hay fondos en la cuenta (pago hasta :date)',
        'waitingForPayment' => 'Esperando por pago',
    ),

    'button' => array(
        'subscribe'       => 'Suscríbete',
        'startFreePeriod' => 'Comenzar la prueba gratis',
        'ok'              => 'Ok',
    ),

    'label' => array(
        'subscriptions'          => 'Subscripciones',
        'availableSubscriptions' => 'Suscripciones disponibles',
        'status'                 => 'Estado de la suscripción:',
    ),

    'plan' => array(
        'm2m_month' => 'Mensual ',
        'm2m_year'  => 'Anual- ',
    ),

    'type' => array(
        'm2m' => 'm2m',
    ),

    'message' => array(
        'noBillingAddress' => 'Llenar datos de facturación para suscribirse',
        'cancel'           => '¿Está seguro? El dispositivo no funcionará sin el plan de datos.',
        'subscribed'       => 'Se ha suscrito con éxito.',
    ),

    'placeholderCardNumber'     => '0000 0000 0000 0000',
    'placeholderExpirationDate' => 'MM / YY',
    'cardNumber'                => 'Número de Tarjeta',
    'expirationDate'            => 'Fecha de caducidad',
    'cvv'                       => 'cvv',
    'enterCardDetails'          => 'Introduce los datos de su tarjeta de crédito',
    'payWithPaypal'             => 'Pagar con Paypal',
    'payWithCard'               => 'Pagar con tarjeta',
    'payingForPlan'             => 'Pagar por plan:',
    'cancel'                    => 'Cancelar',
    'validUntil'                => 'Válido hasta: :date',
    'nextBillingDate'           => 'Próximo pago: :date',
);
