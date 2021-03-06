<?php

return [
    'empty'       => 'Tidak ada penambahan sistem',
    'emptyText'   => 'Coba tambahkan satu dengan menekan tombol "Tambah sistem baru" di bawah ini',
    'notFound'    => 'Sistem tidak ditemukan',
    'refreshTime' => 'Segarkan waktu:',

    'sp231Warnings' => [
        'sensors'      => 'Sensor modul tidak ada',
        'pgm'          => 'Modul output tidak ada',
        'notConnected' => 'Tidak terhubung',
    ],
    'titles' => [
        'area'                  => 'Area :no',
        'system'                => 'Sistem :no',
        'pgm'                   => 'PGM :no',
        'sensor'                => 'Sensor :no',
        'systems'               => 'Sistem',
        'active'                => 'Sistem Aktif',
        'history'               => 'Riwayat sistem',
        'addSystem'             => 'Tambahkan sistem baru',
        'editSystem'            => 'Edit sistem',
        'systemEvents'          => 'Acara sistem',
        'profileSettings'       => 'Pengaturan profil',
        'settingsIpCom'         => 'Pengaturan - server ip com',
        'settingsReactions'     => 'Pengaturan - Jenis reaksi',
        'editIpComServer'       => 'Edit server ip com',
        'addNewIpComServer'     => 'Tambahkan server ip com baru',
        'addNewUser'            => 'Tambahkan pengguna baru',
        'editUser'              => 'Edit pengguna',
        'partitions'            => 'Daerah',
        'pgmOutputs'            => 'Hasil PGM',
        'rename'                => 'Ganti nama',
        'sensors'               => 'Suhu',
        'systemUsers'           => 'Sistem pengguna',
        'allSystemsUsers'       => 'Pengguna dari semua yang dimiliki sistem',
        'zones'                 => 'Zona',
        'editZone'              => 'Ubah',
        'addNewZone'            => 'Tambah baru',
        'users'                 => 'Pengguna',
        'errorMessage'          => 'Kesalahan',
        'successMessage'        => 'Berhasil',
        'config_reread_message' => 'Konfigurasi berhasil dibaca ulang.',
        'reactMessage'          => 'Penggil keamanan',
        'language'              => 'Bahasa',
        'zone'                  => ':no ',
        'enterPinCode'          => 'Masukkan sandi PIN',
        'react'                 => 'Reaksi',
        'events'                => 'Acara',
        'allEvents'             => 'Semua acara',
        'bypassZones'           => 'Dengan melewatkan zona gagal',
        'enterPassword'         => 'Silahkan masukkan kata sandi anda',
        'addNewArea'            => 'Tambahkan area baru',
        'requestInstaller'      => 'Meminta Bantuan Penginstal',
        'addNewCameras'         => 'Tambahkan kamera baru',
        'systemCameras'         => 'Video',
   ],
    'zone' => [
        'status' => [
            'tamper' => 'Kesalahan',
            'bypass' => 'Melewati',
            'open'   => 'Buka'
        ]
    ],
    'types' => [
        'type'   => 'Tipe',
        'type_0' => 'SP231',
        'type_1' => 'G10',
        'type_2' => 'Lain',
        'type_3' => 'G16',
        'type_4' => 'Penghubung'
    ],

    'labels' => [
        'accessPeriod'                 => 'Tetapkan periode akses untuk instal (dalam jam)',
        'describeIssue'                => 'Jelaskan masalah Anda',
        'name'                         => 'Nama',
        'imei'                         => 'Identitas unik',
        'mpass'                        => 'Kata sandi akses layanan',
        'address'                      => 'Alamat',
        'contractNo'                   => 'Nomor kontrak',
        'objectPassword'               => 'Kata sandi objek',
        'allAreas'                     => 'Semua area',
        'email'                        => 'Email',
        'editSensorName'               => 'Ubah nama sensor',
        'sensorName'                   => 'Nama sensor',
        'system'                       => 'Sistem',
        'pgmName'                      => 'Nama pengontrol',
        'pulseTime'                    => 'Waktu denyut',
        'pgmType'                      => 'Tipe pengontrol',
        'pulse'                        => 'Denyut',
        'level'                        => 'Tingkat',
        'pgmStatus'                    => 'Status PGM',
        'areaName'                     => 'Nama daerah',
        'pin'                          => 'PIN',
        'changeAreaStatus'             => 'Tetapkan status area',
        'changeStatus'                 => 'Merubah status',
        'areasCount'                   => 'Berapa banyak wilayah yang berada dalam sistem?',
        'zoneQueueNo'                  => 'No zona',
        'zoneName'                     => 'Nama',
        'persons'                      => [
            'name'           => 'Nama pengguna',
            'email'          => 'E-mail',
            'phone'          => 'Telepon',
            'address'        => 'Alamat',
            'key'            => 'Frasa lulus',
            'queue_no'       => 'Antrian No.',
            'hasKey'         => '*********',
            'system_code_no' => 'Nomor pengguna di sistem',
        ],
        'editPartitionName'            => 'Ubah nama daerah',
        'enterPartitionName'           => 'Masukkan nama daerah',
        'searchPhrase'                 => 'Cari dengan mengetikkan alamat, nama pengguna, email, unik ID unik...',
        'pgm_as_area'                  => 'Lengan/Lepas dengan PGM',
        'direct_control'               => 'Aktifkan Kontrol Langsung',
        'apps_password_for_arm_disarm' => 'Gunakan kata sandi aplikasi untuk ARM/DISARM',
        'timeZone'                     => 'Zona waktu',
        'number'                       => 'jumlah',
        'enterAreaNumber'              => 'Nomor daerah',
        'numberOfPgms'                 => 'Keluaran',
        'numberOfSensors'              => 'Sensor',
        'transferToNewUser'            => 'Kirim ke pengguna baru:',
        'systemStatus'                 => 'Tingkat',
        'pulse_interval'               => 'Pulse interval dalam hitungan detik',
        'pulse_interval_value'         => ':seconds second|:seconds seconds',
        'seconds_short'                => 'detik.',
        'angelcamReloginFailed'        => 'Protegus tidak bisa membaca data kamera dari server Angelcam. Silakan baca ulang atau coba lagi nanti.',
        'angelcamMustLogin'            => 'Kamera tidak tersedia. Silakan, masuk ke Angelcam di Preferensi.',
        'addCamera'                    => 'Tambahkan kamera',
        'angelcamReloginFailed'        => 'Relogin otomatis gagal Silakan coba lagi nanti.',
        'angelcamNoNewCameras'         => 'Tidak ada kamera baru yang tersedia',
        'angelcamReloadInfo'           => 'Muat ulang informasi kamera',
        'angelcamNoCameras'            => 'Sistem ini tidak memiliki kamera terpasang. Tolong, tambahkan kamera di menu setelan.',
        'angelcamNoOnlineCameras'      => 'Sepertinya kamera sedang tidak aktif. Silakan periksa kamera Anda.',
        'cameraOffline'                => 'Tidak aktif',
        'cameraNotAvailable'           => 'Kamera tidak tersedia',
        'cameraDeleted'                => 'Kamera dihapus',
        'angelcamLoginFailed'          => 'Failed to log in to Angelcam service.',
    ],

    'buttons'       => [
        'home'            => 'Rumah',
        'save'            => 'Simpan',
        'select'          => 'Pilih sistem',
        'addNew'          => 'Tambahkan sistem baru',
        'delete'          => 'Hapus',
        'deleteSystem'    => 'Hapus',
        'cancel'          => 'Batal',
        'create'          => 'Membuat',
        'react'           => 'Reaksi',
        'rename'          => 'Ganti nama',
        'zoneStatus'      => 'Zona status',
        'removeUser'      => 'Hapus pengguna',
        'addUser'         => 'Tambahkan pengguna',
        'changePgmStatus' => 'Perubahan',
        'setAreaStatus'   => 'Set',
        'bypassZones'     => 'Dengan melewatkan zona gagal',
        'edit'            => 'Ubah',
        'addZone'         => 'Tambahkan zona',
        'deleteZone'      => 'Hapus',
        'editPerson'      => 'Ubah',
        'addPerson'       => 'Menambahkan',
        'deletePerson'    => 'Hapus',
        'savePerson'      => 'Simpan',
        'ok'              => 'Ok',
        'logout'          => 'Keluar',
        'on'              => 'Hidup',
        'off'             => 'Mati',
        'yes'             => 'Ya',
        'no'              => 'Tidak',
        'call'            => 'Hubungi',
        'clearFilter'     => 'Hapus saringan',
        'filter'          => 'Penyaring',
        'readConfig'      => 'Baca ulang konfigurasi sistem',
        'done'            => 'Selesai',
        'next'            => 'Berikutnya',
        'retry'           => 'Mencoba kembali',
        'transfer'        => 'Mengirim',
        'sensors_reset'   => 'Atur ulang detektor api',
        'deleteSensor'    => 'Hapus',
        'addCamera'       => 'Tambahkan kamera',
        'deleteCamera'    => 'Hapus kamera',
    ],
    'menu'          => [
        'allEvents'                  => 'Semua acara',
        'areas'                      => 'Daerah',
        'pgms'                       => 'Mengendalikan',
        'sensors'                    => 'Suhu',
        'settings'                   => 'Pengaturan',
        'mobileSettings'             => 'Preferensi',
        'events'                     => 'Acara',
        'help'                       => 'Bantuan',
        'logOut'                     => 'Keluar',
        'react'                      => 'Reaksi',
        'users'                      => 'Pengguna',
        'areaZones'                  => 'Zona',
        'areaUsers'                  => 'Pengguna',
        'reactions'                  => 'Reaksi jenis',
        'ipcom'                      => 'Pengaturan ipcom',
        'monas'                      => 'Pengaturan MonasMS',
        'systems'                    => 'Daftar sistem',
        'grg'                        => 'Pengaturan GRG',
        'global'                     => 'Setelan Global',
        'removeArea'                 => 'Hapus',
        'subscriptionSettings'       => 'Pengaturan langganan',
        'systemInformation'          => 'Sistem informasi',
        'transferOrDeleteSystem'     => 'Kirim atau menghapus sistem',
        'transferSystem'             => 'Kirim sistem',
        'requestInstallerAssistance' => 'Permintaan bantuan instal',
        'cameras'                    => 'Video',
        'systemAngelcam'             => 'Setelan kamera',
        'angelcam'                   => 'Setelan kamera',
    ],
    'statuses'      => [
        'online'         => 'Aktif',
        'offline'        => 'Tidak aktif',
        'sensor'         => ':temp °C',
        'sensorNA'       => 'N/A',
        'sensorDisabled' => 'Mati',
        'pgmOn'          => 'Aktif',
        'pgmOff'         => 'Mati',
        'area'           => [
            'arm'             => 'Bersenjata',
            'armInProgress'   => 'Arming...',
            'stay'            => 'Sedang tinggal',
            'stayInProgress'  => 'Sedang tinggal...',
            'sleep'           => 'Sedang tidur',
            'sleepInProgress' => 'Sedang tidur...',
            'off'             => 'Dimatikan',
            'setArm'          => 'Lengan',
            'setStay'         => 'Tinggal',
            'setSleep'        => 'Tidur',
            'setOff'          => 'Mati',
            'processing'      => 'Sedang pengolahan',
            'unknown'         => 'Tidak diketahui',
       ],
    ],
    'notifications' => [
        'areaDisabled'                 => 'Maaf, Anda tidak dapat mengubah area status. hubungi installer.',
        'pgmDisabledText'              => 'Maaf, Anda tidak dapat mengontrol penempatkan keluar status. hubungi installer.',
        'sensorDisabledText'           => 'Informasi sensor suhu tidak tersedia dengan sistem ini. Silahkan hubungi Installer anda.',
        'areYouSure'                   => 'Anda yakin ingin menghapusnya?',
        'logOutConfirm'                => 'Apakah anda yakin anda ingin keluar?',
        'reactMessage'                 => 'Apakah Anda yakin ingin memasang alarm / panggilan keamanan?',
        'pgmUsedAsArea'                => 'Output is used to Arm/Disarm the security system',
        'moduleOffline'                => 'Sistem ini tidak tersambung, coba refresh kembali atau periksa koneksi',
        'saved'                        => 'Pengaturan berhasil tersimpan.',
        'systemAdded'                  => 'Sistem berhasil ditambahkan! Disarankan: jelaskan nama dan alamatnya di dalam pengaturan sistem.',
        'systemAddedMonas'             => 'Sistem ditambahkan, tapi tidak bisa dikelola saat ID unik tidak masuk.',
        'systemsAddedMonas'            => 'Sistem ditambahkan, tapi tidak bisa dikelola saat ID unik tidak masuk.',
        'systemAddedOffline'           => 'Perangkat adalah tidak tersambung. Sistem ditambahkan dengan fungsi terbatas. Periksa jika perangkat terhubung ke jaringan (jaringan LED - hijau, Data LED - OFF) dan membaca kembali konfigurasi dalam pengaturan sistem',
        'installerAccessGranted'       => 'Akses disediakan untuk installer. Jika Anda ingin membatalkan akses, pergi ke "Pengaturan" / "Sistem pengguna" dan menghapus installer',
        'transferOrDeleteSystem'       => 'Anda ingin mentransfer sistem ini ke pengguna lain atau menghapus sistem?',
        'transferSystemWarning'        => 'Pengguna yang dipilih Anda akan menjadi pengguna utama, dan Anda akan kehilangan akses ke sistem. Apakah Anda yakin, bahwa Anda ingin sistem transfer?',
        'systemTransferChoiceQuestion' => 'Pengguna mana yang seharusnya menjadi pengguna utama?',
        'activating'                   => 'Mengaktifkan sistem kartu SIM. Proses akan memakan waktu 2-5 menit. Mohon tunggu...',
        'updating'                     => 'Mencoba untuk membaca ulang konfigurasi sistem secara otomatis',
        'mustReReadSystem'             => 'Sistem tidak dikenali. Harap periksa apakah perangkat terhubung ke jaringan (LED Jaringan - Hijau, Data LED - OFF) dan baca ulang konfigurasi di Pengaturan sistem',
        'highDataRateWarning'          => 'Peringatan - Streaming MP4 dapat menyebabkan penggunaan data seluler yang tinggi. Gunakan pengaturan ini dengan bijak.',
        'armWithPgmWarning'            => [ 
            'start'                         => 'You cannot "Arm/Disarm with PGM" until you specify system areas. You can do it by clicking ', 
            'link'                          => 'ini',
            'end'                           => ' link.',
        ],
    ],
    'errors'        => [
        'monasConnection'     => 'Koneksi ke MonasMS gagal...',
        'addPerson'           => 'Gagal menyimpan orang dalam monasme',
        'pgmStatus'           => 'Mengubah status output PGM telah gagal. Segarkan halaman dan coba lagi',
        'addFail'             => 'Penambahan sistem gagal. Mohon coba kembali nantik.',
        'react'               => 'Tidak bisa mencapai server reaksi',
        'bypassFail'          => 'Zona bypass gagal',
        'configRead'          => 'Pembacaan konfigurasi sistem telah gagal, data sistem mungkin salah atau tidak lengkap. Baca kembali konfigurasi di Pengaturan sistem',
        'areaStatusFail'      => 'Gagal mengubah status area',
        'imeiNotFound'        => 'Sitem ID Unik atau Kode Akses Layanan salah, Data sistem mungkin tidak lengkap',
        'mpassFail'           => 'Kode akses layanan salah',
        'g10AreaChange'       => 'Status sistem berubah. Menunggu konfirmasi "Push Notifikasi" atau refresh status window',
        'objectNotFound'      => 'Sistem tidak ditemukan. Harap memeriksa apakah ID unik benar. Juga memeriksa jika perangkat terhubung ke jaringan (jaringan LED - hijau, Data LED - OFF)',
        'contractNotFound'    => 'Kontrak nomor tidak ditemukan',
        'passwordFail'        => 'Kata sandi salah',
        'autoUpdateFail'      => 'Pembacaan konfigurasi otomatis telah gagal. Silakan periksa apakah perangkat dihidupkan, konfigurasi lainnya, menunggu kejadian pertama dan tekan kembali membaca konfigurasi dalam pengaturan sistem.',
        'activationFail'      => 'Kami mampu untuk mengaktifkan layanan Data. Harap coba kembali nanti atau hubungi perwakilan Protegus untuk dukungan',
        'ipcom_search_denied' => 'Harap menunggu 5s sebelum menambahkan sistem ini',
        'MPASS_IS_INCORRECT'  => 'Kode akses layanan salah. Harap atur di pengaturan->sistem informasi.',
    ],
];
