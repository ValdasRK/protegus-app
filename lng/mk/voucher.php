<?php

return array(
    'settings' => array(
        'title'  => 'Генерирај купон',
        'list'   => array(
            'title'         => 'Листа на купони',
            'code'          => 'Код',
            'status'        => 'Статус',
            'addsTime'      => 'Додади месеци',
            'dateCreated'   => 'Датум на креирање',
            'userCreated'   => 'Корисникот е креиран',
            'assignedTo'    => 'Доделен на продавач',
            'dateActivated' => 'Датумот е активиран',
            'systemUsed'    => 'Корисници на системот',
            'userActivated' => 'Корисникот е активен',
        ),
        'status' => 'Генериран купон. Успешно - :success; Не успешно - :fail',
        'label'  => array(
            'amount' => 'Количина',
            'months' => 'Месеци',
            'dealer' => 'Продавач',
        )
    ),

    'button' => array(
        'useVoucher' => 'Користење на купон',
        'generate'   => 'Креирај',
        'download'   => 'Превземање',
        'use'        => 'Користи',
        'back'       => 'Назад',
        'ok'         => 'ОК',
    ),

    'mail' => array(
        'blockedUserMailTitle' => 'Блокиран купон на корисникот',

        'blockedUser' => array(
            'body' => 'Корисникот: (:userId - :userName) е блокиран после обидите за примена на купонот премногу пати, блокиран до: :blockedTo',
        ),
    ),

    'title' => array(
        'voucher'   => 'Купон',
        'enterCode' => 'Внесете го кодот на купонот',
    ),

    'notification' => array(
        'userVoucherEntryBlocked' => 'Блокирани сте поради повеќе грешки',
        'voucherApplied'          => 'Вашиот ваучер е успешно аплициран',
    ),

    'invoice' => 'Платено со купон: :code',
    'error'   => array('wrongCode' => 'Погрешен код на купонот'),
);
