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
    "valid_user_email"       => 'This email address cannot be used.',
    "not_own_email"          => 'Cannot use your own email',
    "recaptcha"              => 'Please ensure that you are a human!',
    'not_super_admin'        => 'Given :attribute cannot be used.',
    'old_pass_match'         => 'Лозинке се не поклапају.',
    'possible_email'         => 'Ова адреса е-поште неможе да се користи',
    'not_in_system'          => 'Корисник је већ у систему',
    'unique_system'          => 'Систем већ постоји',
    'unique_area_queue_no'   => 'This area number is already added.',
    'in_monas'               => 'Contract no and/or password was not found.',
    'pgm_enabled'            => 'Outputs are disabled.',
    'sensor_enabled'         => 'Sensors are disabled.',
    'unique_zone_queue_no'   => 'This zone number is already added.',
    'unique_person_queue_no' => 'This user number is already added.',
    'unique_pair'            => 'Event qualifier and code must be unique',
    'test_monas'             => 'Connection to MonasMS has failed',
    'unique_array'           => 'Area numbers must be unique',
    'dimensions'             => 'Image dimensions do not meet the requirements of 165x45 px',

    //Standard validation messages
    'accepted'               => ':attribute мора бити прихваћен.',
    'active_url'             => ':attribute није важећа URL адреса.',
    'after'                  => 'The :attribute must be a date after :date.',
    'alpha'                  => ':attribute може да садржи само слова.',
    'alpha_dash'             => ':attribute може да садржи само слова, бројеве и цртице.',
    'alpha_num'              => ':attribute може да садржи само слова и бројеве.',
    'array'                  => ':attribute мора бити низ.',
    'before'                 => 'The :attribute must be a date before :date.',
    'between'                => array(
        'numeric' => ':attribute мора бити између :min и :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ),
    'boolean'                => 'The :attribute field must be true or false.',
    'confirmed'              => ':attribute потврда се не подудара.',
    'date'                   => ':attribute није важећи датум.',
    'date_format'            => 'The :attribute does not match the format :format.',
    'different'              => 'The :attribute and :other must be different.',
    'digits'                 => 'The :attribute must be :digits digits.',
    'digits_between'         => ':attribute мора бити између :min и :max цифри.',
    'email'                  => ':attribute мора садржати важећу имејл адресу.',
    'exists'                 => 'The selected :attribute is invalid.',
    'filled'                 => ':attribute поље је неопходно.',
    'image'                  => 'The :attribute must be an image.',
    'in'                     => 'The selected :attribute is invalid.',
    'integer'                => 'The :attribute must be an integer.',
    'ip'                     => 'The :attribute must be a valid IP address.',
    'json'                   => 'The :attribute must be a valid JSON string.',
    'max'                    => array(
        'numeric' => ':attribute не може бити већи од :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => ':attribute не може бити већи од :max знакова.',
        'array'   => ':attribute не може садржати више од :max ставки.',
    ),
    'mimes'                  => 'The :attribute must be a file of type: :values.',
    'min'                    => array(
        'numeric' => ':attribute мора бити најмање :min.',
        'file'    => ':attribute мора бити најмање :min килобајта.',
        'string'  => ':attribute мора бити најмање :min знакова.',
        'array'   => 'The :attribute must have at least :min items.',
    ),
    'not_in'                 => 'The selected :attribute is invalid.',
    'numeric'                => 'The :attribute must be a number.',
    'regex'                  => 'The :attribute format is invalid.',
    'required'               => ':attribute поље је неопходно.',
    'required_if'            => 'The :attribute field is required when :other is :value.',
    'required_unless'        => 'The :attribute field is required unless :other is in :values.',
    'required_with'          => 'The :attribute field is required when :values is present.',
    'required_with_all'      => 'The :attribute field is required when :values is present.',
    'required_without'       => 'The :attribute field is required when :values is not present.',
    'required_without_all'   => 'The :attribute field is required when none of :values are present.',
    'same'                   => 'The :attribute and :other must match.',
    'size'                   => array(
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ),
    'string'                 => 'The :attribute must be a string.',
    'timezone'               => ':attribute мора бити важећа зона.',
    'unique'                 => ':attribute је већ заузет.',
    'url'                    => ':attribute формат је неважећи.',

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
            'rule-name' => 'прилагођена-порука',
        ),
        'g-recaptcha-response' => array(
            'required' => 'Please ensure that you are a human!',
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
