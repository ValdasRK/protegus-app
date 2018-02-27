<?php

return array(
    'email' => array(
        'title' => array(
            'subscriptionDaysLeft0' => 'L\'abbonamento è scaduto',
            'subscriptionDaysLeft1' => 'Il tuo abbonamento scade domani',
            'subscriptionDaysLeft2' => 'Il tuo abbonamento scade fra due giorni',
            'subscriptionDaysLeft5' => 'Il tuo abbonamento scade fra cinque giorni',
        ),
        'body'  => array(
            'subscriptionEnd'       => array(
                'info'       => 'Siamo stati in grado di ricevere il pagamento periodico dal tuo account.',
                'systemName' => 'Sistema: :systemName',
                'linkInfo'   => 'Si prega di controllare lo stato del pagamento in <a href=":href">abbonamento</a> o <a href=":mobileHref">mobile app </a>',
            ),
            'subscriptionDaysLeft0' => 'Il tuo abbonamento è scaduto. Per rinovarlo devi andare a <a href=":href">sottoscrizione</a> o <a href=":mobileHref">mobile app </a>',
            'subscriptionDaysLeft1' => 'Il tuo abbonamento scadrà fra :daysLeft giorni ed il tuo dispositivo verrà sospeso.',
            'subscriptionDaysLeft2' => 'Il tuo abbonamento scadrà fra :daysLeft giorni ed il tuo dispositivo verrà sospeso.',
            'subscriptionDaysLeft5' => 'Il tuo abbonamento scadrà fra:daysLeft giorni.',
        ),
    ),
    'popup' => array(
        'subscriptionDaysLeft0' => 'Il tuo abbonamento è scaduto o non è valido. Per rinovarlo devi andare a <a href=":href">impostazioni di sottoscrizione</a>.',
        'subscriptionDaysLeft1' => 'Siamo stati in grado di ricevere il pagamento periodico dal tuo conto. Sistema::system.         
        Si prega di controllare lo stato del pagamento in <a href=":href">impostazioni di sottoscrizione</a>. Il tuo abbonamento scade domani.',
        'subscriptionDaysLeft2' => 'Siamo stati in grado di ricevere il pagamento periodico dal tuo conto. Sistema::system.         
        Si prega di controllare lo stato del tuo pagamento in <a href=":href">impostazioni di sottoscrizione</a>. Il tuo abbonamento scadrà fra :daysLeft giorni.',
        'subscriptionDaysLeft5' => 'Siamo stati in grado di ricevere il pagamento periodico dal tuo conto. Sistema::system.         
        Si prega di controllare lo stato del tuo pagamento in <a href=":href">impostazioni di sottoscrizione</a>. Il tuo abbonamento scadrà fra :daysLeft giorni.',
    ),
    'emailPlanChanged' => array(
        'title' => 'Il prezzo del piano di abbonamento è cambiato',
        'body'  => array(
            'info'             => 'Il prezzo del tuo piano di abbonamento è cambiato',
            'systemName'       => 'Sistema: :systemName',
            'nextBillingPrice' => 'Il tuo prossimo prezzo di fatturazione sarà :nextBillingPrice :currency, :billingDate',
        ),
    ),
);
