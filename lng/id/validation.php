<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    //Custom validation messages
    "valid_user_email"       => 'Alamat email ini tidak dapat digunakan.',
    "not_own_email"          => 'Tidak bisa menggunakan email anda sendiri',
    "recaptcha"              => 'Harap pastikan bahwa Anda adalah manusia!',
    'not_super_admin'        => 'Diberikan :attribute tidak bisa digunakan.',
    'old_pass_match'         => 'Sandi tidak cocok.',
    'possible_email'         => 'Alamat email ini tidak bisa digunakan.',
    'not_in_system'          => 'Pengguna sudah termasuk dalam sistem.',
    'unique_system'          => 'Sistem sudah ada.',
    'unique_area_queue_no'   => 'Nomor area ini sudah ditambahkan.',
    'in_monas'               => 'Kontrak no dan/atau kata sandi tidak ditemukan.',
    'pgm_enabled'            => 'Keluaran dinonaktifkan.',
    'sensor_enabled'         => 'Sensor dinonaktifkan.',
    'unique_zone_queue_no'   => 'Nomor zona ini sudah ditambahkan.',
    'unique_person_queue_no' => 'Nomor pengguna ini sudah ditambahkan.',
    'unique_pair'            => 'Kualifikasi acara dan kode harus unik',
    'test_monas'             => 'Sambungan ke MonasMS telah gagal',
    'unique_array'           => 'Nomor area pasti unik',
    'dimensions'             => 'Image dimensions do not meet the requirements of 165x45 px',

    //Standard validation messages
    'accepted'               => 'The :attribute harus diterima.',
    'active_url'             => 'Itu :attribute bukan URL yang sah.',
    'after'                  => 'Itu :attribute harus tanggal setelah :date.',
    'alpha'                  => 'Itu :attribute hanya dapat berisi huruf.',
    'alpha_dash'             => 'Itu :attribute hanya dapat berisi huruf, angka, dan tanda hubung.',
    'alpha_num'              => 'Itu :attribute hanya dapat berisi huruf dan angka.',
    'array'                  => 'Itu :attribute harus berupa array.',
    'before'                 => 'Itu :attribute harus tanggal sebelum :date.',
    'between'                => array(
        'numeric' => ':attribute ini harus diantara :min dan :max.',
        'file'    => ':attribute ini harus diantara :min dan :max kilobite.',
        'string'  => ':attribute ini harus diantara :min dan :max karakter.',
        'array'   => ':attribute ini harus diantara :min dan :max barang.',
    ),
    'boolean'                => ':attribute lapangan harus menjadi benar atau salah.',
    'confirmed'              => ':attribute ini harus dikonfirmasi ketidakcocokannya.',
    'date'                   => ':attribute ini adalah waktu yang tidak sesuai.',
    'date_format'            => ':attribute ini tidak sesuai dengan format :format.',
    'different'              => ':attribute dan :other harus berbeda.',
    'digits'                 => ':attribute harus menjadi :digits angka.',
    'digits_between'         => ':attribute harus menjadi beda :min dan :max angka.',
    'email'                  => ':attribute harus alamat email yang valid.',
    'exists'                 => 'Dipilih :attribute tidak valid.',
    'filled'                 => 'Kolom :attribute wajib di isi.',
    'image'                  => ':attribute yang dipilih tidak benar.',
    'in'                     => 'Dipilih :attribute tidak valid.',
    'integer'                => ':attribute harus menjadi bilangan bulat.',
    'ip'                     => ':attribute harus alamat IP yang valid.',
    'json'                   => ':attribute harus string JSON yang valid.',
    'max'                    => array(
        'numeric' => ':attribute mungkin tidak lebih besar dari :max.',
        'file'    => ':attribute mungkin tidak lebih besar dari :max kilobyte.',
        'string'  => ':attribute mungkin tidak lebih besar dari :max karakter.',
        'array'   => ':attribute mungkin tidak lebih banyak dari :max item.',
    ),
    'mimes'                  => ':attribute harus sebuah file dari tipe :values.',
    'min'                    => array(
        'numeric' => 'The :attribute minimal harus :min.',
        'file'    => ':attribute harus memiliki :min kilobite.',
        'string'  => ':attribute minimal harus :min karakter.',
        'array'   => ':attribute minimal harus :min item.',
    ),
    'not_in'                 => 'Dipilih :attribute tidak valid.',
    'numeric'                => ':attribute harus berupa sebuah angka.',
    'regex'                  => ':attribute format tidak benar.',
    'required'               => 'Kolom :attribute wajib di isi.',
    'required_if'            => ':attribute bidang yang diperlukan ketika :other adalah :value.',
    'required_unless'        => ':attribute diperlukan minimal :other adalah dalam :values.',
    'required_with'          => ':attribute bidang yang diperlukan bila :values terdapat nilai.',
    'required_with_all'      => ':attribute bidang yang diperlukan bila :values terdapat nilai.',
    'required_without'       => ':attribute bidang yang diperlukan bila :values tidak ada.',
    'required_without_all'   => ':attribute bidang yang diperlukan ketika tidak ada dari :values yang ada.',
    'same'                   => 'The :attribute dan :other harus cocok.',
    'size'                   => array(
        'numeric' => 'The :attribute harus berukuran :size.',
        'file'    => 'The :attribute harus :size kilobite.',
        'string'  => 'The :attribute harus :size karatker.',
        'array'   => 'The :attribute harus berisi :size item.',
    ),
    'string'                 => 'The :attribute harus menjadi sebuah senar.',
    'timezone'               => 'The :attribute harus menjadi zona yang valid.',
    'unique'                 => 'The :attribute hharus sudah diambil.',
    'url'                    => ':attribute format tidak benar.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-pesan',
        ),
        'g-recaptcha-response' => array(
            'required' => 'Harap pastikan bahwa Anda adalah manusia!',
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => array(
        'name' => '"Nama"',
        'email' => '"E-mail"',
        'password' => '"Password"',
    ),

);
