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
    "valid_user_email"       => 'Alamat e-mel ini tidak boleh digunakan.',
    "not_own_email"          => 'Tidak boleh menggunakan e-mel anda sendiri',
    "recaptcha"              => 'Sila pastikan bahawa anda adalah seorang manusia!',
    'not_super_admin'        => 'Diberi :attribute tidak boleh digunakan.',
    'old_pass_match'         => 'Kata laluan tidak sepadan.',
    'possible_email'         => 'Alamat e-mel ini tidak boleh digunakan.',
    'not_in_system'          => 'Pengguna sudah dimasukkan ke dalam sistem.',
    'unique_system'          => 'Sistem telah wujud.',
    'unique_area_queue_no'   => 'Nombor giliran kawasan mestilah unik.',
    'in_monas'               => 'Nombor kontrak dan/atau kata laluan tidak dijumpai dalam MonasMS.',
    'pgm_enabled'            => 'Output dilumpuhkan.',
    'sensor_enabled'         => 'Pengesan dilumpuhkan.',
    'unique_zone_queue_no'   => 'Nombor giliran zon mestilah unik.',
    'unique_person_queue_no' => 'Nombor giliran orang mestilah unik.',
    'unique_pair'            => 'Kelayakan acara dan kod mestilah unik',
    'test_monas'             => 'Sambungan kepada MonasMS telah gagal',
    'unique_array'           => 'Kawasan nombor mestilah unik',
    'dimensions'             => 'Image dimensions do not meet the requirements of 165x45 px',

    //Standard validation messages
    'accepted'               => 'The :attribute mesti diterima.',
    'active_url'             => 'The :attribute URL yang tidak sah.',
    'after'                  => 'The :attribute mesti tarikh selepas :date.',
    'alpha'                  => 'The :attribute hanya boleh mengandungi huruf.',
    'alpha_dash'             => 'The :attribute hanya boleh mengandungi huruf, nombor dan tanda tolak.',
    'alpha_num'              => 'The :attribute hanya boleh mengadungi huruf dan nombor.',
    'array'                  => 'The :attribute mesti pelbagai.',
    'before'                 => 'The :attribute mestilah tarikh sebelum :date.',
    'between'                => array(
        'numeric' => 'The :attribute mesti berada diantara :min - :max.',
        'file'    => 'The :attribute mesti diantara :min - :max kilobytes.',
        'string'  => 'The :attribute mesti diantara :min - :max characters.',
        'array'   => 'The :attribute mesti mempunyai antara :min dan :max barang-barang.',
    ),
    'boolean'                => 'The :attribute Medan mestilah benar atau palsu.',
    'confirmed'              => 'The :attribute pengesahan tidak sama.',
    'date'                   => 'The :attribute tarikh yang tidak sah.',
    'date_format'            => 'The :attribute tidak mengikut format :format.',
    'different'              => 'The :attribute dan :other lainmesti berbeza.',
    'digits'                 => 'The :attribute mesti :digits digit.',
    'digits_between'         => 'The :attribute mesti diantara :min and :max digit.',
    'email'                  => 'The :attribute mestilah alamat email yang sah.',
    'exists'                 => 'Pilihan :attribute tidak sah.',
    'filled'                 => 'The :attribute ruangan diperlukan.',
    'image'                  => 'The :attribute mesti imej.',
    'in'                     => 'Pilihan :attribute tidak sah.',
    'integer'                => ':attribute mesti integer.',
    'ip'                     => 'The :attribute mesti alamat IP yang sah.',
    'json'                   => 'The :attribute mestilah rentetan JSON sah.',
    'max'                    => array(
        'numeric' => 'The :attribute tidak boleh lebih besar dari :max .',
        'file'    => 'The :attribute tidak boleh lebih besar dari :max kilobytes.',
        'string'  => 'The :attribute tidak boleh lebih besar dari :max watak.',
        'array'   => 'The :attribute mungkin tidak lebih daripada :max barang-barang.',
    ),
    'mimes'                  => 'The :attribute mesti fail jenis: :values.',
    'min'                    => array(
        'numeric' => 'The :attribute mesti sekurang2nya :min.',
        'file'    => 'The :attribute mesti sekurang2nya :min kilobytes.',
        'string'  => ':attribute mesti sekurang2nya :min watak.',
        'array'   => 'The :attribute mesti mempunyai sekurang-kurangnya :min barang.',
    ),
    'not_in'                 => 'Pilihan :attribute tidak sah.',
    'numeric'                => 'The :attribute mesti nombor.',
    'regex'                  => 'The :attribute format tidak sah.',
    'required'               => 'The :attribute ruangan diperlukan.',
    'required_if'            => 'The :attribute ruangan diperlukan bila :other adalah :value.',
    'required_unless'        => 'The :attribute Medan yang diperlukan kecuali :other adalah di :values.',
    'required_with'          => 'The :attribute ruangan diperlukan bila :values wujud.',
    'required_with_all'      => ':attribute ruangan diperlukan bila :values wujud.',
    'required_without'       => 'The :attribute ruangan diperlukan bila :values tidak wujud.',
    'required_without_all'   => 'The :attribute Medan yang diperlukan apabila tiada seorang pun daripada :values yang ada.',
    'same'                   => 'The :attribute :other lain mesti sama.',
    'size'                   => array(
        'numeric' => 'The :attribute mesti :size.',
        'file'    => 'The :attribute mesti :size kilobytes.',
        'string'  => 'The :attribute mesti :size aksara.',
        'array'   => 'The :attribute mesti mengandungi :size item.',
    ),
    'string'                 => 'The :attribute mestilah sebuah string.',
    'timezone'               => 'The :attribute mestilah zon yang sah.',
    'unique'                 => 'The :attribute telah diambil.',
    'url'                    => 'The :attribute format tidak sah.',

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
            'rule-name' => 'reka-mesej',
        ),
        'g-recaptcha-response' => array(
            'required' => 'Sila pastikan bahawa anda adalah seorang manusia!',
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
        'name' => '"Name"',
        'email' => '"E-mail"',
        'password' => '"Password"',
    ),

);
