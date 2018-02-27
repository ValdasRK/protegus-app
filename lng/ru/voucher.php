<?php

return array(
    'settings' => array(
        'title'  => 'Генерировать купоны',
        'list'   => array(
            'title'         => 'Список купонов',
            'code'          => 'Код',
            'status'        => 'Статус',
            'addsTime'      => 'Добавляет месяцев',
            'dateCreated'   => 'Дата создания',
            'userCreated'   => 'Создал пользователь',
            'assignedTo'    => 'Предазначено дилеру',
            'dateActivated' => 'Дата активации',
            'systemUsed'    => 'Использовано в системе',
            'userActivated' => 'Активирован пользователем',
        ),
        'status' => 'Сгенерированны купоны. Успешно - :success; Не удалось - :fail',
        'label'  => array(
            'amount' => 'Количество',
            'months' => 'Кол-во месяцев',
            'dealer' => 'Дилер',
        )
    ),

    'button' => array(
        'useVoucher' => 'Использовать купон',
        'generate'   => 'Генерировать',
        'download'   => 'Скачать',
        'use'        => 'Использовать',
        'back'       => 'Назад',
        'ok'         => 'Ok',
    ),

    'mail' => array(
        'blockedUserMailTitle' => 'Пользователь купона заблокирован',

        'blockedUser' => array(
            'body' => 'Пользователь: (:userId - :userName) был заблокирован после попытки применить купон слишком много раз; блокируется до: :blockedTo',
        ),
    ),

    'title' => array(
        'voucher'   => 'Купон',
        'enterCode' => 'Введите код купона',
    ),

    'notification' => array(
        'userVoucherEntryBlocked' => 'Вы заблокированы многочисленные неудачные попытки',
        'voucherApplied'          => 'Ваш купон был успешно применен',
    ),

    'invoice' => 'Оплачено купоном: :code',
    'error'   => array('wrongCode' => 'Неправильный код купона'),
);
