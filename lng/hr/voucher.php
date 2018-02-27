<?php

return array(
    'settings' => array(
        'title'  => 'Generiraj kupon',
        'list'   => array(
            'title'         => 'Lista kupona',
            'code'          => 'Kod',
            'status'        => 'Status',
            'addsTime'      => 'Dodaje mjesece',
            'dateCreated'   => 'Datum stvaranja',
            'userCreated'   => 'Korisnik stvoren',
            'assignedTo'    => 'Dodijeljen prodavaču',
            'dateActivated' => 'Datum aktiviran',
            'systemUsed'    => 'Korisnici sustava',
            'userActivated' => 'Korisnik aktivan',
        ),
        'status' => 'Generirani kuponi. Uspješno - :success; Nije uspjelo - :fail',
        'label'  => array(
            'amount' => 'Količina',
            'months' => 'Mjeseci',
            'dealer' => 'Prodavač',
        )
    ),

    'button' => array(
        'useVoucher' => 'Korištenje kupona',
        'generate'   => 'Stvori',
        'download'   => 'Preuzimanje',
        'use'        => 'Koristi',
        'back'       => 'Natrag',
        'ok'         => 'U redu',
    ),

    'mail' => array(
        'blockedUserMailTitle' => 'Blokiran kupon korisnika',

        'blockedUser' => array(
            'body' => 'Korisnik: (:userId - :userName) je blokiran nakon pokušaja primjene kupona previše puta, blokiran do: :blockedTo',
        ),
    ),

    'title' => array(
        'voucher'   => 'Kupon',
        'enterCode' => 'Unesi kod kupona',
    ),

    'notification' => array(
        'userVoucherEntryBlocked' => 'Blokirani ste zbog više grešaka',
        'voucherApplied'          => 'Kupon je uspješno primjenjen',
    ),

    'invoice' => 'Plaćeno kuponom: :code',
    'error'   => array('wrongCode' => 'Pogrešan kod kupona'),
);
