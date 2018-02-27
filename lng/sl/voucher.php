<?php

return array(
    'settings' => array(
        'title'  => 'Ustvarjanje kupona',
        'list'   => array(
            'title'         => 'Seznam kuponov',
            'code'          => 'Koda',
            'status'        => 'Stanje',
            'addsTime'      => 'Dodaj mesece',
            'dateCreated'   => 'Datum nastanka',
            'userCreated'   => 'Uporabnik ustvarjen',
            'assignedTo'    => 'Prijavljeno pri dobavitelju',
            'dateActivated' => 'Datum aktivacije',
            'systemUsed'    => 'Sistem v uporabi',
            'userActivated' => 'Uporabnik aktiviran',
        ),
        'status' => 'Ustvarjeni kuponi . Uspešnih - :success ; Neuspešnih - :fail',
        'label'  => array(
            'amount' => 'Znesek',
            'months' => 'Mesecev',
            'dealer' => 'Dobavitelj',
        )
    ),

    'button' => array(
        'useVoucher' => 'Uporabi kupon',
        'generate'   => 'Ustvari',
        'download'   => 'Prenos',
        'use'        => 'Uporaba',
        'back'       => 'Nazaj',
        'ok'         => 'V redu',
    ),

    'mail' => array(
        'blockedUserMailTitle' => 'Kupon uporabnika blokiran',

        'blockedUser' => array(
            'body' => 'Uporabnik: (:userId - :userName) je bil blokiran po prevelikem številu poizkusov, blokiran do: :blockedTo',
        ),
    ),

    'title' => array(
        'voucher'   => 'Kupon',
        'enterCode' => 'Vnesite kodo kupona',
    ),

    'notification' => array(
        'userVoucherEntryBlocked' => 'Zaradi večih napak ste blokirani',
        'voucherApplied'          => 'Vaš kupon je bil uspešno prijavljen',
    ),

    'invoice' => 'Plačilo s kuponom: :code',
    'error'   => array('wrongCode' => 'Napačna koda kupona'),
);
