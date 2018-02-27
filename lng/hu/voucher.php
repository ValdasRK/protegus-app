<?php

return array(
    'settings' => array(
        'title'  => 'Utalvány létrehozása',
        'list'   => array(
            'title'         => 'Utalvány lista',
            'code'          => 'Kód',
            'status'        => 'Állapot',
            'addsTime'      => 'Hozzáad hónapokat',
            'dateCreated'   => 'Létrehozás Dátuma',
            'userCreated'   => 'Felhasználó Létrehozva',
            'assignedTo'    => 'Kapcsolódó Kereskedő',
            'dateActivated' => 'Aktiválva',
            'systemUsed'    => 'Használt Rendszer',
            'userActivated' => 'Felhasználó Aktiválva',
        ),
        'status' => 'Generált Utalványok. Sikeresen - :success; Sikertelen - :fail',
        'label'  => array(
            'amount' => 'Összeg',
            'months' => 'Hónapok',
            'dealer' => 'Kereskedő',
        )
    ),

    'button' => array(
        'useVoucher' => 'Utalvány felhasználása',
        'generate'   => 'Létrehozás',
        'download'   => 'Letöltés',
        'use'        => 'Felhasználás',
        'back'       => 'Vissza',
        'ok'         => 'Oké',
    ),

    'mail' => array(
        'blockedUserMailTitle' => 'Az Utallvány felhasználója kizárva',

        'blockedUser' => array(
            'body' => 'A felhasználó (:userId - :userName) túl sok próbálkozás miatt kizárásra került eddig: :blockedTo',
        ),
    ),

    'title' => array(
        'voucher'   => 'Utalvány',
        'enterCode' => 'Add meg az utalvány kódot',
    ),

    'notification' => array(
        'userVoucherEntryBlocked' => 'Többszöri tévedés miatt kizárásra kerültél',
        'voucherApplied'          => 'Az utalványt sikeresen beváltottad',
    ),

    'invoice' => 'Utalvánnyal fizetve: :code',
    'error'   => array('wrongCode' => 'Hibás utalvány kód'),
);
