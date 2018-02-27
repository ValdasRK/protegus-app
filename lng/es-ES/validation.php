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
    "valid_user_email"       => 'Esta dirección de correo electrónico no se puede utilizar.',
    "not_own_email"          => 'No puedes usar tu propio email',
    "recaptcha"              => 'Por favor, confirma que eres un ser humano!',
    'not_super_admin'        => 'El atributo :attribute no puede ser usado.',
    'old_pass_match'         => 'Las contraseñas no coinciden.',
    'possible_email'         => 'Esta dirección de correo electrónico no se puede utilizar.',
    'not_in_system'          => 'Usuario ya incluido en el sistema.',
    'unique_system'          => 'Sistema ya existe.',
    'unique_area_queue_no'   => 'Número de partición debe ser único.',
    'in_monas'               => 'Número de contrato y/o la contraseña de objeto no se encuentra en el MonasMS.',
    'pgm_enabled'            => 'Salidas están desactivadas.',
    'sensor_enabled'         => 'Sensores están deshabilitados.',
    'unique_zone_queue_no'   => 'Número de la zona debe ser único.',
    'unique_person_queue_no' => 'Número de serie debe ser único.',
    'unique_pair'            => 'Código y calificador de evento deben ser únicos',
    'test_monas'             => 'Ha fallado la conexión a MonasMS',
    'unique_array'           => 'Número de partición debe ser único',
    'dimensions'             => 'Image dimensions do not meet the requirements of 165x45 px',

    //Standard validation messages
    'accepted'               => 'El atributo :attribute debe ser aceptado.',
    'active_url'             => 'El atributo :attribute no es una URL correcta.',
    'after'                  => 'El atributo :attribute debe ser una fecha posterior :date.',
    'alpha'                  => 'El atributo :attribute sólo puede contener letras.',
    'alpha_dash'             => 'El atributo :attribute sólo puede contener letras, números y guiones.',
    'alpha_num'              => 'El atributo :attribute sólo puede contener letras y números.',
    'array'                  => 'El atributo :attribute debe ser una matriz.',
    'before'                 => 'El atributo :attribute debe ser una fecha posterior :date.',
    'between'                => array(
        'numeric' => 'El atributo :attribute debe estar entre :min y :max.',
        'file'    => 'El atributo :attribute debe estar entre :min y :max de kilobytes.',
        'string'  => 'El atributo :attribute debe estar entre :min y :max de caracteres.',
        'array'   => 'El atributo :attribute debe tener entre :min y :max de posiciones.',
    ),
    'boolean'                => 'El campo de atributo :attribute debe ser verdadero o falso.',
    'confirmed'              => 'La confirmación de atributo :attribute no coincide.',
    'date'                   => 'El atributo :attribute no es una fecha válida.',
    'date_format'            => 'El atributo :attribute no coincide con el formato :format.',
    'different'              => 'El atributo :attribute y :other debe ser diferente.',
    'digits'                 => 'El atributo :attribute debe ser :digits dígitos.',
    'digits_between'         => 'El atributo :attribute debe estar entre :min y :max de dígitos.',
    'email'                  => 'El atributo :attribute debe ser una dirección válida de correo electrónico.',
    'exists'                 => 'El seleccionado atributo :attribute no es válido.',
    'filled'                 => 'El campo del atributo :attribute es obligatorio.',
    'image'                  => 'El atributo :attribute debe ser una imagen.',
    'in'                     => 'El atributo :attribute seleccionado no es correcto.',
    'integer'                => 'El atributo :attribute debe ser un entero.',
    'ip'                     => 'El atributo :attribute debe ser una dirección IP válida.',
    'json'                   => 'El atributo :attribute debe ser una cadena JSON válida.',
    'max'                    => array(
        'numeric' => 'El atributo :attribute no puede ser mayor que :max.',
        'file'    => 'El atributo :attribute no puede ser mayor :max de kilobytes.',
        'string'  => 'El atributo :attribute no puede ser mayor :max de caracteres.',
        'array'   => 'El atributo :attribute no puede tener más de :max de posiciones.',
    ),
    'mimes'                  => 'El atributo :attribute debe ser un archivo de tipo: :values.',
    'min'                    => array(
        'numeric' => 'El atributo :attribute debe ser al menos :min.',
        'file'    => 'El atributo :attribute debe ser al menos :min kilobytes.',
        'string'  => 'El atributo :attribute debe ser al menos :min caracteres.',
        'array'   => 'El atributo :attribute debe tener por lo menos :min de posiciones.',
    ),
    'not_in'                 => 'El seleccionado atributo :attribute no es válido.',
    'numeric'                => 'El atributo :attribute debe ser un número.',
    'regex'                  => 'El formato de atributo :attribute no es válido.',
    'required'               => 'El campo del atributo :attribute es obligatorio.',
    'required_if'            => 'El campo atributo :attribute se requiere cuando :other es :value.',
    'required_unless'        => 'El campo atributo :attribute se requiere a menos que :other se encuentra en :values.',
    'required_with'          => 'El campo atributo :attribute se requiere :values está presente.',
    'required_with_all'      => 'El campo atributo :attribute se requiere :values está presente.',
    'required_without'       => 'El campo atributo :attribute es requerido cuando :values no está presente.',
    'required_without_all'   => 'El campo de atributo :attribute se requiere cuando ninguno de :values están presentes.',
    'same'                   => 'El atributo :attribute y :other deben coincidir.',
    'size'                   => array(
        'numeric' => 'El atributo :attribute debe ser :size.',
        'file'    => 'El atributo :attribute debe ser :size en kilobytes.',
        'string'  => 'El atributo :attribute debe ser :size de caracteres.',
        'array'   => 'El atributo :attribute debe contener :size posiciones.',
    ),
    'string'                 => 'El atributo :attribute debe ser una cadena.',
    'timezone'               => 'El atributo :attribute debe ser una zona válida.',
    'unique'                 => 'El atributo :attribute ya está en uso.',
    'url'                    => 'El formato de atributo :attribute no es válido.',

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
            'rule-name' => 'mensaje personalizado',
        ),
        'g-recaptcha-response' => array(
            'required' => 'Por favor, confirma que eres un ser humano!',
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
