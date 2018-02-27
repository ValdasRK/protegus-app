<?php

return array(
    'email' => array(
        'title' => array(
            'subscriptionDaysLeft0' => 'Вашата претплата е истечена',
            'subscriptionDaysLeft1' => 'Вашата претплата ќе заврши утре',
            'subscriptionDaysLeft2' => 'Вашата претплата ќе заврши за два дена',
            'subscriptionDaysLeft5' => 'Вашата претплата ќе заврши за пет дена',
        ),
        'body'  => array(
            'subscriptionEnd'       => array(
                'info'       => 'Го немаме примено периодичното плаќање од вашата сметка.',
                'systemName' => 'Систем: :systemName',
                'linkInfo'   => 'Проверете го вашиот статус на плаќање во <a href=":href">претплата</a> или <a href=":mobileHref">во мобилната апликација </a>',
            ),
            'subscriptionDaysLeft0' => 'Вашата претплата е истечена. За да ја обновите одете во <a href=":href">претплата</a> или <a href=":mobileHref">во мобилната апликација </a>',
            'subscriptionDaysLeft1' => 'Вашата претплата ќе заврши за :daysLeft денови, и вашиот уред ќе биде исклучен.',
            'subscriptionDaysLeft2' => 'Вашата претплата ќе заврши за :daysLeft денови, и вашиот уред ќе биде исклучен.',
            'subscriptionDaysLeft5' => 'Вашата претплата ќе заврши за :daysLeft денови.',
        ),
    ),
    'popup' => array(
        'subscriptionDaysLeft0' => 'Вашата претплата е истечена или не е валидна. За да ја обновите одете на <a href=":href">поставките за претплата</a>.',
        'subscriptionDaysLeft1' => 'Не можевме да го примиме периодичното плаќање од вашата сметка. Систем: :system.
        Проверете го вашиот статус на плаќање во <a href=":href">поставките за претплата</a>. Вашата претплата ќе заврши утре..',
        'subscriptionDaysLeft2' => 'Не можевме да го примиме периодичното плаќање од вашата сметка. Систем: :system.
        Проверете го вашиот статус на плаќање во <a href=":href">поставките за претплата </a>. Вашата претплата ќе заврши за :daysLeft денови.',
        'subscriptionDaysLeft5' => 'Не можевме да го примиме периодичното плаќање од вашата сметка. Систем: :system.
        Проверете го вашиот статус на плаќање во <a href=":href">поставките за претплата</a>. Вашата претплата ќе заврши за :daysLeft денови.',
    ),
    'emailPlanChanged' => array(
        'title' => 'Планираната цена за претплата е променета',
        'body'  => array(
            'info'             => 'Вашата планирана цена за претплата е променета',
            'systemName'       => 'Систем: :systemName',
            'nextBillingPrice' => 'Вашата следна фактурна цена ќе биде :nextBillingPrice :currency, на :billingDate',
        ),
    ),
);
