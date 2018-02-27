<?php

return [
    'noConnection' => 'Laman tidak dapat di akses',
    'buttons'      => [
        'save'           => 'Simpan',
        'delete'         => 'Padam',
        'addNew'         => 'Tambah baru',
        'testConnection' => 'Ujian',
    ],
    'connected'    => 'Bersambung',
    'notConnected' => 'Gagal',
    'labels'       => [
        'peerName'       => 'Nama peer',
        'host'           => 'Hos',
        'port'           => 'Port',
        'userName'       => 'Nama pengguna',
        'password'       => 'Kata laluan',
        'changeLanguage' => 'Change language',
    ],
    'installer' => [
        'logo' => 'Installer Logo (165x45)',
        'removeLogo' => 'Remove Logo'
    ],
    'ipcom' => [
        'logo' => 'Ipcom Logo',
        'removeLogo' => 'Remove Ipcom Logo',
        'priorityLogo' => 'Priority over installer logo'
    ],
    'monas'        => [
        'title' => 'Tetapan MonasMS',
        'label' => [
            'host'     => 'Nama hos pangkalan data MonasMS',
            'database' => 'MonasMS pangkalan data nama',
            'username' => 'Nama pengguna pangkalan data MonasMS',
            'password' => 'Kata laluan pangkalan data MonasMS',
            'use'      => 'Membolehkan MonasMS',
            'sync'     => 'Tempoh dalam saat untuk selaraskan aktiviti dengan Monas',
        ],
    ],
    'grg'          => [
        'title' => 'Tetapan GRG',
        'label' => [
            'host' => 'Hos pelayan GRG',
            'port' => 'GRG port',
            'code' => 'Kod asal untuk menghantar',
            'zone' => 'Nombor zon asal untuk menghantar',
        ],
    ],
    'global'       => [
        'title' => 'Tetapan global',
        'label' => [
            'show_zones'                            => 'Membolehkan/Melumpuhkan zon tab untuk penguna utama',
            'show_grg'                              => 'Membolehkan/Melumpuhkan butang bertindak untuk pengguna',
            'main_user_edit_zones'                  => 'Membolehkan pengguna utama untuk mengambarkan zon',
            'main_user_add_zones'                   => 'Membolehkan pengguna utama untuk menambah zon',
            'main_user_enable_additional_fields'    => 'Membolehkan pengguna utama untuk menerangkan bidang tambahan pengguna apabila MonasMS digunakan',
            'main_user_enable_view_users'           => 'Membolehkan pengguna utama untuk melihat menu pengguna kawasan',
            'main_user_enable_edit_users'           => 'Membolehkan pengguna utama untuk mengubah kawasan pengguna',
            'event_full_name'                       => 'Tayang nama penuh aktiviti dan bukannya hanya jenis tindak balas',
            'g10_pgm_output_as_area'                => 'Membolehkan pengguna utama untuk menukar kegunaan PGM (untuk sistem Aktif/Nyahaktif)',
            'show_sensor_window'                    => 'Tayang tetingkap sensor jika tidak disokong oleh sistem',
            'show_pgm_window'                       => 'Show PGM window if there is only 1 PGM and it is used to Arm/Disarm',
            'installer_prepaid_sim'                 => 'Papar pemasang dan ciri-ciri sim prabayar',
            'enabled_recaptcha'                     => 'Gunakan Recaptcha untuk pendaftaran',
            'braintree_production_merchant_id'      => 'Braintree mesin Id',
            'braintree_production_public_key'       => 'Braintree kekunci awam',
            'braintree_production_private_key'      => 'Braintree kunci persendirian',
            'braintree_sandbox_merchant_id'         => 'Braintree Sandbox mesin Id',
            'braintree_sandbox_public_key'          => 'Braintree Sandbox kekunci awam',
            'braintree_sandbox_private_key'         => 'Braintree Sandbox kunci persendirian',
            'braintree_production_enabled'          => 'Membolehkan pengeluaran pembayaran Braintree',
            'show_angelcam'                         => 'Enable Angelcam',
        ],
    ],
    'reactions'    => [
        'labels'         => [
            'name'                       => 'Nama tindak balas',
            'monas_id'                   => 'Monas reaksi ID',
            'type'                       => 'Jenis tindak balas',
            'image'                      => 'Gambar reaksi',
            'redirect_to'                => 'Pelencongan pemberitahuan tolak untuk',
            'notification_sound'         => 'Mengunakan pemberitahuan bunyi',
            'notification_sound_default' => 'Peranti asal',
            'notification_sound_custom'  => 'Pilihan',
            'notification_sound_info'    => 'Pemberitahuan bunyi: ',
        ],
        'redirects'      => [
            'event'  => 'Laman Aktiviti',
            'sensor' => 'Laman pengesan',
        ],
        'noReaction'     => 'Aktiviti  tiada reaksi',
        'translationKey' => 'Kunci penterjemahan',
    ],
];
