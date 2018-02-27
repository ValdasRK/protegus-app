<?php

return array(
    'settings' => array(
        'title'  => 'Genera buoni sconto',
        'list'   => array(
            'title'         => 'Lista buoni sconto',
            'code'          => 'Codice',
            'status'        => 'Stato',
            'addsTime'      => 'Aggiungere mesi',
            'dateCreated'   => 'Data di creazione',
            'userCreated'   => 'Utente creato',
            'assignedTo'    => 'Assegnato al rivenditore',
            'dateActivated' => 'Data di attivazione',
            'systemUsed'    => 'Sistema utilizzato',
            'userActivated' => 'Utente attivato',
        ),
        'status' => 'Buoni sconto generati. Con successo - :success ; Errore - :fail',
        'label'  => array(
            'amount' => 'Importo',
            'months' => 'Mesi',
            'dealer' => 'Rivenditore',
        )
    ),

    'button' => array(
        'useVoucher' => 'Utilizzare il buono sconto',
        'generate'   => 'Generare',
        'download'   => 'Scaricare',
        'use'        => 'Usa',
        'back'       => 'Ritornare',
        'ok'         => 'Ok',
    ),

    'mail' => array(
        'blockedUserMailTitle' => 'Utente del buono bloccato',

        'blockedUser' => array(
            'body' => 'Utente: (:userId - :userName) è stato bloccato dopo il tentativo di applicare il buono sconto troppe volte, bloccato fino a: :blockedTo',
        ),
    ),

    'title' => array(
        'voucher'   => 'Buono sconto',
        'enterCode' => 'Inserisci il codice del buono sconto',
    ),

    'notification' => array(
        'userVoucherEntryBlocked' => 'Sei bloccato per fallimenti multipli',
        'voucherApplied'          => 'Buono sconto è stato applicato con successo',
    ),

    'invoice' => 'Pagato con buono sconto: :code',
    'error'   => array('wrongCode' => 'Codice del buono sconto non è valido'),
);
