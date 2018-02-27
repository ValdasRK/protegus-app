<?php

return array(
    'settings' => array(
        'title'  => 'Δημιουργία κουπονιών',
        'list'   => array(
            'title'         => 'Λίστα κουπονιών',
            'code'          => 'Κωδικός',
            'status'        => 'Κατάσταση',
            'addsTime'      => 'Προσθέτει μήνες',
            'dateCreated'   => 'Ημερομηνία δημιουργίας',
            'userCreated'   => 'Ο χρήστης δημιουργήθηκε',
            'assignedTo'    => 'Αντιστοίχιθηκε σε έμπορο',
            'dateActivated' => 'Ημερομηνία ενεργοποίησης',
            'systemUsed'    => 'Χρήση συστήματος',
            'userActivated' => 'Χρήστης ενεργός',
        ),
        'status' => 'Δημιουργία κουπονιών. Με επιτυχία - :success ; Απέτυχε - :fail',
        'label'  => array(
            'amount' => 'Ποσότητα',
            'months' => 'Μήνες',
            'dealer' => 'Προμηθευτής',
        )
    ),

    'button' => array(
        'useVoucher' => 'Χρήση κουπονιού',
        'generate'   => 'Δημιουργία',
        'download'   => 'Λήψη',
        'use'        => 'Χρήση',
        'back'       => 'Επιστροφή',
        'ok'         => 'Εντάξει',
    ),

    'mail' => array(
        'blockedUserMailTitle' => 'Ο χρήστης κουπονιού αποκλείστηκε',

        'blockedUser' => array(
            'body' => 'Χρήστης: (:userId - :userName) ήταν αποκλεισμένος μετά από επιχείρηση να εφαρμόσει το κουπόνι πάρα πολλές φορές, αποκλεισμένος μέχρι: :blockedTo',
        ),
    ),

    'title' => array(
        'voucher'   => 'Κουπόνι',
        'enterCode' => 'Εισαγωγή κωδικού κουπονιού',
    ),

    'notification' => array(
        'userVoucherEntryBlocked' => 'Έχετε αποκλειστεί για πολλαπλές αποτυχίες',
        'voucherApplied'          => 'Εφαρμόστηκε με επιτυχία το κουπόνι σας',
    ),

    'invoice' => 'Πληρωμή με κουπόνι: :code',
    'error'   => array('wrongCode' => 'Λανθασμένος κωδικός κουπονιού'),
);
