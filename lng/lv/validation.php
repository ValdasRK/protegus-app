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
    'not_super_admin'        => 'Dotais :attribute nevar tikt izmantots.',
    'old_pass_match'         => 'Parole nesakrīt.',
    'possible_email'         => 'Šī e-pasta adrese nevar tikt izmantota.',
    'not_in_system'          => 'Lietotājs ir jau iekļauts sistēmā.',
    'unique_system'          => 'Sistēma jau eksistē.',
    'unique_area_queue_no'   => 'Laukuma rindas numuram ir jābūt unikālam.',
    'in_monas'               => 'Līgums Nr. un/vai parole netika atrasta MonasMS.',
    'pgm_enabled'            => 'Izejas ir atslēgtas.',
    'sensor_enabled'         => 'Devēji ir atslēgti.',
    'unique_zone_queue_no'   => 'Zonas rindas numuram ir jābūt unikālam.',
    'unique_person_queue_no' => 'Personas rindas numuram ir jābūt unikālam.',
    'unique_pair'            => 'Event qualifier and code must be unique',
    'test_monas'             => 'Connection to MonasMS has failed',
    'unique_array'           => 'Area numbers must be unique',
    'dimensions'             => 'Image dimensions do not meet the requirements of 165x45 px',

    //Standard validation messages
    'accepted'               => 'The :attribute must be accepted.',
    'active_url'             => 'The :attribute is not a valid URL.',
    'after'                  => 'The :attribute must be a date after :date.',
    'alpha'                  => 'The :attribute may only contain letters.',
    'alpha_dash'             => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'              => 'The :attribute may only contain letters and numbers.',
    'array'                  => 'The :attribute must be an array.',
    'before'                 => 'The :attribute must be a date before :date.',
    'between'                => array(
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ),
    'boolean'                => 'The :attribute field must be true or false.',
    'confirmed'              => 'The :attribute confirmation does not match.',
    'date'                   => 'The :attribute is not a valid date.',
    'date_format'            => 'The :attribute does not match the format :format.',
    'different'              => 'The :attribute and :other must be different.',
    'digits'                 => 'The :attribute must be :digits digits.',
    'digits_between'         => 'The :attribute must be between :min and :max digits.',
    'email'                  => 'The :attribute must be a valid email address.',
    'exists'                 => 'Izvēlētais :attribute ir nederīgs.',
    'filled'                 => 'Ir nepieciešams :attribute lauks.',
    'image'                  => 'The :attribute must be an image.',
    'in'                     => 'Izvēlētais :attribute ir nederīgs.',
    'integer'                => ':attribute ir jābūt veselam skaitlim.',
    'ip'                     => ':attribute ir jābūt derīgai IP adresei.',
    'json'                   => 'The :attribute must be a valid JSON string.',
    'max'                    => array(
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ),
    'mimes'                  => 'The :attribute must be a file of type: :values.',
    'min'                    => array(
        'numeric' => ':attribute ir jābūt vismaz :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ),
    'not_in'                 => 'Izvēlētais :attribute ir nederīgs.',
    'numeric'                => ':attribute ir jābūt skaitlim.',
    'regex'                  => ':attribute formāts ir nederīgs.',
    'required'               => 'Ir nepieciešams :attribute lauks.',
    'required_if'            => 'The :attribute field is required when :other is :value.',
    'required_unless'        => 'The :attribute field is required unless :other is in :values.',
    'required_with'          => 'The :attribute field is required when :values is present.',
    'required_with_all'      => 'The :attribute field is required when :values is present.',
    'required_without'       => 'The :attribute field is required when :values is not present.',
    'required_without_all'   => 'The :attribute field is required when none of :values are present.',
    'same'                   => 'The :attribute and :other must match.',
    'size'                   => array(
        'numeric' => ':attribute ir jābūt :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ),
    'string'                 => 'The :attribute must be a string.',
    'timezone'               => 'The :attribute must be a valid zone.',
    'unique'                 => ':attribute jau ir paņemts.',
    'url'                    => ':attribute formāts ir nederīgs.',

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
            'rule-name' => 'ziņojums klientam',
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
