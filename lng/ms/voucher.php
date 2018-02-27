<?php

return array(
    'settings' => array(
        'title'  => 'Menjana baucar',
        'list'   => array(
            'title'         => 'Senarai baucar',
            'code'          => 'Kod',
            'status'        => 'Status',
            'addsTime'      => 'Menambah bulan',
            'dateCreated'   => 'Tarikh dicipta',
            'userCreated'   => 'Pengguna yang dicipta',
            'assignedTo'    => 'Diperuntukkan kepada \'dealer\'',
            'dateActivated' => 'Tarikh pengaktifan',
            'systemUsed'    => 'Sistem yang digunakan',
            'userActivated' => 'Pengguna yang diaktifkan',
        ),
        'status' => 'Baucar yang dihasilkan. Berjaya - :success ; Gagal - :fail',
        'label'  => array(
            'amount' => 'Jumlah',
            'months' => 'Bulan',
            'dealer' => '\'Dealer\'',
        )
    ),

    'button' => array(
        'useVoucher' => 'Penggunaan baucar',
        'generate'   => 'Menjana',
        'download'   => 'Muat Turun',
        'use'        => 'Guna',
        'back'       => 'Kembali',
        'ok'         => 'Ok',
    ),

    'mail' => array(
        'blockedUserMailTitle' => 'Baucer pengguna disekat',

        'blockedUser' => array(
            'body' => 'Pengguna: (:userId - :userName) adalah disekat selepas cuba untuk memohon baucar terlalu banyak kali, disekat sehingga: :blockedTo',
        ),
    ),

    'title' => array(
        'voucher'   => 'Baucar',
        'enterCode' => 'Masukkan kod baucar',
    ),

    'notification' => array(
        'userVoucherEntryBlocked' => 'Anda akan dihalang untuk beberapa kegagalan',
        'voucherApplied'          => 'Baucer anda berjaya mengaplikasikan',
    ),

    'invoice' => 'Dibayar dengan baucar: :code',
    'error'   => array('wrongCode' => 'Kod Baucar yang salah'),
);
