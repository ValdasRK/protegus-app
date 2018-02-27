<?php

return array(
    'settings' => array(
        'title'  => 'Menghasilkan voucher',
        'list'   => array(
            'title'         => 'Daftar Voucher',
            'code'          => 'Kode',
            'status'        => 'Status',
            'addsTime'      => 'Menambahkan bulan',
            'dateCreated'   => 'Tanggal Diciptakan',
            'userCreated'   => 'Pengguna Dibuat',
            'assignedTo'    => 'Ditugaskan ke Dealer',
            'dateActivated' => 'Tanggal Diaktifkan',
            'systemUsed'    => 'Sistem yang digunakan',
            'userActivated' => 'Pengguna Diaktifkan',
        ),
        'status' => 'Voucher yang Dihasilkan. Berhasil - :success ; Gagal - :fail',
        'label'  => array(
            'amount' => 'Jumlah',
            'months' => 'Bulan',
            'dealer' => 'Pedagang',
        )
    ),

    'button' => array(
        'useVoucher' => 'Gunakan voucher',
        'generate'   => 'Menghasilkan',
        'download'   => 'Unduh',
        'use'        => 'Menggunakan',
        'back'       => 'Kembali',
        'ok'         => 'Ok',
    ),

    'mail' => array(
        'blockedUserMailTitle' => 'Pengguna Voucher diblokir',

        'blockedUser' => array(
            'body' => 'Pengguna: (:userId - :userName) diblokir setelah mencoba menerapkan voucher berkali-kali, diblokir sampai: :blockedTo',
        ),
    ),

    'title' => array(
        'voucher'   => 'Voucher',
        'enterCode' => 'Masukkan kode voucher',
    ),

    'notification' => array(
        'userVoucherEntryBlocked' => 'Anda diblokir untuk beberapa kegagalan',
        'voucherApplied'          => 'Voucher Anda berhasil diterapkan',
    ),

    'invoice' => 'Dibayar dengan voucher: :code',
    'error'   => array('wrongCode' => 'Kode voucher salah'),
);
