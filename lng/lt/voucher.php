<?php

return array(
    'settings' => array(
        'title'  => 'Genruoti nuolaidų kuponus',
        'list'   => array(
            'title'         => 'Kuponų sąrašas',
            'code'          => 'Kodas',
            'status'        => 'Statusas',
            'addsTime'      => 'Prideda mėnesių',
            'dateCreated'   => 'Sukūrimo data',
            'userCreated'   => 'Sukūrė vartotojas',
            'assignedTo'    => 'Priskirta atstovui',
            'dateActivated' => 'Aktyvavimo data',
            'systemUsed'    => 'Panaudota sistemai',
            'userActivated' => 'Aktyvavo vartotojas',
        ),
        'status' => 'Sugeneruoti nuolaidų kuponai. Sėkmingai - :success ; Nepavyko - :fail',
        'label'  => array(
            'amount' => 'Kiekis',
            'months' => 'Mėnesiai (pratęsimo)',
            'dealer' => 'Atstovas (dealer)',
        )
    ),

    'button' => array(
        'useVoucher' => 'Kuponas',
        'generate'   => 'Generuoti',
        'download'   => 'Atsisiųsti',
        'use'        => 'Naudoti',
        'back'       => 'Grįžti',
        'ok'         => 'Ok',
    ),

    'mail' => array(
        'blockedUserMailTitle' => 'Kupono vartotojas užblokuotas',

        'blockedUser' => array(
            'body' => 'Vartotojas: (:userId - :userName) buvo užblokuotas dėl daugelio bandymų panaudoti kuponą. Užblokuotas iki: :blockedTo',
        ),
    ),

    'title' => array(
        'voucher'   => 'Nuolaidos kuponas',
        'enterCode' => 'Įveskite kupono kodą',
    ),

    'notification' => array(
        'userVoucherEntryBlocked' => 'Jūs esate užblokuotas dėl daugelio nesėkmingų bandymų',
        'voucherApplied'          => 'Jūsų kuponas panaudotas sėkmingai',
    ),

    'invoice' => 'Sumokėta kuponu: :code',
    'error'   => array('wrongCode' => 'Neteisingas Kupono kodas'),
);
