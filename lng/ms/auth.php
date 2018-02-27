<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed'               => 'E-mel atau kata laluan tidak sah.',
    'throttle'             => 'Terlalu banyak cubaan log masuk. Sila cuba sebentar lagi :seconds.',
    'licenseTitle'         => 'Lesen perjanjian pengguna',
    'sendPasswordLink'     => 'Masukkan email anda untuk set semula kata laluan',
    'triedToRegister'      => 'Anda sudah berdaftar',
    'notActiveYet'         => 'Akaun anda tidak aktif',
    'resendActivation'     => 'Hantar semula pautan pengaktifan?',
    'activationResentFail' => 'Token penghantar semula pautan pengaktifan tidak sah',
    'activationResent'     => 'Pautan pengaktifan telah dihantar ke email anda',
    'passwordResetSent'    => 'Pautan set semula kata laluan telah dihantar ke email anda',

    'form'       => array(
        'name'            => 'Nama penuh anda',
        'email'           => 'E-mel',
        'signUp'          => 'Daftar',
        'password'        => 'Kata laluan',
        'reenterPassword' => 'Masukkan semula kata laluan anda',
        'confirmPassword' => 'Sahkan kata laluan',
        'phoneNumber'     => 'Nombor telefon (contoh +370......)',
        'company'         => 'Syarikat',
    ),
    'buttons'    => array(
        'remember'       => 'Simpan kata laluan',
        'signUp'         => 'Daftar',
        'signUpInstallers' => 'Daftar untuk pemasang',
        'logIn'          => 'Log masuk',
        'forgotPassword' => 'Lupa kata laluan?',
        'cancel'         => 'Batal',
        'agree'          => 'Setuju',
        'disagree'       => 'Tidak setuju',
        'send'           => 'Hantar',
        'resetPassword'  => 'Tetapkan semula kata laluan',
        'skip'           => 'Langkau',
        'allow'          => 'Benarkan',
        'next'           => 'Teruskan',
        'previous'       => 'Sebelum',
        'finish'         => 'Selesai',
        'loginView'      => 'Kembali ke Laman Log masuk',
        'backToSystems'  => 'Back to System list',
    ),
    'activation' => array(
        'required' => 'Anda patut menerima e-mel dengan pautan pengaktifan.',
        'failed'   => 'Pengaktifan gagal.',
    ),

    'emailChangeError' => 'Token untuk menukar e-mel tidak sah.',
    'emailChanged'     => 'E-mel telah berjaya ditukar.',

    'pushNotifications'       => array(
        'title' => 'Tolak notifikasi',
        'text'  => '"Protegus" ingin menghantar notifikasi kepada anda. Ini boleh dikonfigurasi di dalam tetapan.',
    ),
    'passwordResetTokenError' => 'Token set semula kata laluan tidak sah.',
    'tutorial'                => array(
        'title'  => 'Bantuan',
        'title1' => 'Menambah sistem baru',
        'text1'  => 'Untuk mewujudkan sistem baru:<br> Tekan <b> Pilih sistem</b> <br> tambah sistem baru +</b>.',
        'title2' => '&nbsp;',
        'text2'  => 'Masukkan<b>IMEI</b>alamat peranti anda. IMEI boleh dijumpai pada pembungkusan produk. <br>Masukkan <b>kod akses</b>. Kod akses adalah kod pengesahan untuk mewujudkan sambungan dengan peranti komunikasi anda. Kod mesti sepadan dengan yang ditulis dalam peranti komunikasi. Kod asal adalah 123456. Jika kod akses telah berubah, hubungi pegawai yang bertanggungjawab.',
        'title3' => '&nbsp;',
        'text3'  => 'Tekan <b>Cipta</b> untuk menambah sistem baru. Pengguna yang pertama menambah sistem, akan menjadi pengguna utama, yang memboleh menambah pengguna baru ke dalam sistem, pengubah nama kawasan, zon, output, sensor dan mengubah pelbagai sistem parameter lain.',
    ),

    'pageExpired' => 'Halaman telah tamat tempoh, sila cuba lagi',

    'errors' => array(
        '401' => 'Tiada keizinan.',
        '503' => 'Kembali selepas ini.',
        '404' => 'Tidak dijumpai.',
        '500' => 'Pelayan sedang sibuk. Sila cuba lagi nanti.',
        '404_no_system' => 'System not found or has been deleted.',
    ),
);
