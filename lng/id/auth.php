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

    'failed'               => 'Email atau kata sandi salah.',
    'throttle'             => 'Terlalu banyak usaha login. Silakan coba lagi di :seconds detik.',
    'licenseTitle'         => 'Perjanjian lisensi pengguna akhir',
    'sendPasswordLink'     => 'Masukkan email Anda untuk mengatur ulang kata sandi',
    'triedToRegister'      => 'Anda telah terdaftar',
    'notActiveYet'         => 'Akun anda tidak aktif',
    'resendActivation'     => 'Kirim ulang tautan aktivasi?',
    'activationResentFail' => 'Kode mengirim ulang tautan aktivasi tidak valid',
    'activationResent'     => 'Tautan aktivasi telah dikirim ulang ke email Anda',
    'passwordResetSent'    => 'Tautan untuk mengatur ulang kata sandi telah dikirim ke email Anda',

    'form'       => array(
        'name'            => 'Nama lengkap anda',
        'email'           => 'E-mail',
        'signUp'          => 'Daftar',
        'password'        => 'Kata sandi',
        'reenterPassword' => 'Masukan kata sandi anda kembali',
        'confirmPassword' => 'Konfirmasi kata sandi',
        'phoneNumber'     => 'Nomor telepon (yaitu +370......)',
        'company'         => 'Perusahaan',
    ),
    'buttons'    => array(
        'remember'       => 'Ingat kata sandi',
        'signUp'         => 'Daftar',
        'signUpInstallers' => 'Daftar untuk instaler',
        'logIn'          => 'Masuk',
        'forgotPassword' => 'Lupa kata sandi anda?',
        'cancel'         => 'Batal',
        'agree'          => 'Setuju',
        'disagree'       => 'Tidak setuju',
        'send'           => 'Kirim',
        'resetPassword'  => 'Atur ulang kata sandi',
        'skip'           => 'Lewati',
        'allow'          => 'Izinkan',
        'next'           => 'Berikutnya',
        'previous'       => 'Sebelumnya',
        'finish'         => 'Selesai',
        'loginView'      => 'Kembali ke halaman masuk',
        'backToSystems'  => 'Kembali ke daftar Sistem',
    ),
    'activation' => array(
        'required' => 'Anda harus menerima email dengan tautan aktivasi.',
        'failed'   => 'Aktivasi gagal.',
    ),

    'emailChangeError' => 'Kode untuk mengubah E-mail tidak valid.',
    'emailChanged'     => 'E-mail telah berhasil diganti.',

    'pushNotifications'       => array(
        'title' => 'Pemberitahuan push',
        'text'  => '"Protegus" ingin mengirimkan notifikasi push. Ini bisa dikonfigurasi di pengaturan.',
    ),
    'passwordResetTokenError' => 'Kode untuk mengatur ulang kata sandi tidak valid.',
    'tutorial'                => array(
        'title'  => 'Bantuan',
        'title1' => 'Menambahkan sistem baru',
        'text1'  => 'Untuk membuat sistem baru<br>
Pencet <b>Pilih sistem</b> dan kemudian <b>Tambahkan sistem baru +</b>.',
        'title2' => '&nbsp;',
        'text2'  => 'Masukkan; crwdn: ht: 1: ht: crwdn; ID unik; crwdn: ht: 1: ht: crwdn; dari perangkat Anda ID unik dapat ditemukan pada kemasan produk.; crwdn: ht: 1: ht: crwdn;
Masukkan kode akses layanan "Protegus"; crwdn: ht: 1: ht: crwdn;. Kode akses adalah kode otentikasi untuk menjalin hubungan dengan perangkat komunikasi Anda. Kode harus sesuai dengan yang tertulis dalam perangkat komunikasi. Secara default kodenya adalah 123456. Jika kode akses telah diubah, hubungi petugas yang bertanggung jawab.',
        'title3' => '&nbsp;',
        'text3'  => 'Tekan; crwdn: ht: 1: ht: crwdn; Buat; crwdn: ht: 1: ht: crwdn; untuk menambahkan sistem baru.; crwdn: ht: 1: ht: crwdn; Pengguna pertama yang menambahkan sistem, menjadi pengguna utamanya. Dia dapat menambahkan pengguna baru ke sistem, mengedit nama area, zona, keluaran, sensor dan untuk mengedit berbagai parameter sistem lainnya.',
    ),

    'pageExpired' => 'Halaman telah kadaluarsa, silakan coba lagi',

    'errors' => array(
        '401' => 'Tidak ada izin.',
        '503' => 'Segera kembali.',
        '404' => 'Tidak Ditemukan.',
        '500' => 'Server sedang sibuk, silakan coba lagi nanti.',
        '404_no_system' => 'Sistem tidak ditemukan atau sudah dihapus.',
    ),
);
