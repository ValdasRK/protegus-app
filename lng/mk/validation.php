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
    "valid_user_email"       => 'Не може да ја користите оваа e-mail адреса.',
    "not_own_email"          => 'Не може да го користите својот e-mail',
    "recaptcha"              => 'Потврдете дека не сте робот!',
    'not_super_admin'        => 'Следниот :attribute не може да се користи.',
    'old_pass_match'         => 'Лозинките не се исти.',
    'possible_email'         => 'Не може да ја користите оваа e-mail адреса.',
    'not_in_system'          => 'Корисникот е веќе вклучен во системот.',
    'unique_system'          => 'Системот веќе постои.',
    'unique_area_queue_no'   => 'Партицијата е веќе додадена.',
    'in_monas'               => 'Бројот на договор и/или лозинката не се пронајдени.',
    'pgm_enabled'            => 'Излезите се овозможени.',
    'sensor_enabled'         => 'Сензорите се овозможени.',
    'unique_zone_queue_no'   => 'Зоната е веќе додадена.',
    'unique_person_queue_no' => 'Корисникот е веќе додаден.',
    'unique_pair'            => 'Квалификаторот и кодот мора да бидат единствени',
    'test_monas'             => 'Врската со MonasMS не е успешна',
    'unique_array'           => 'Ознаката на партицијата мора да биде единствена',
    'dimensions'             => 'Димензиите на сликата не ги задоволуваат барањата од 165x45 px',

    //Standard validation messages
    'accepted'               => ':attribute мора да биде потврден.',
    'active_url'             => ':attribute не е важечка URL.',
    'after'                  => ':attribute мора да биде после датумот :date.',
    'alpha'                  => ':attribute може да содржи само букви.',
    'alpha_dash'             => ':attribute може да содржи само букви, броеви и празни места.',
    'alpha_num'              => ':attribute може да содржи само букви и броеви.',
    'array'                  => ':attribute мора да биде поле.',
    'before'                 => ':attribute мора да биде датум пред :date.',
    'between'                => array(
        'numeric' => ':attribute мора да биде помеѓу :min и :max.',
        'file'    => ':attribute мора да биде помеѓу :min и :max килобајти.',
        'string'  => ':attribute мора да биде :min и :max знаци.',
        'array'   => ':attribute мора да биде помеѓу :min и :max ставки.',
    ),
    'boolean'                => ':attribute полето мора да биде Точно или Неточно.',
    'confirmed'              => ':attribute потврдата не се совпаѓа.',
    'date'                   => ':attribute не е валиден датум.',
    'date_format'            => ':attribute не одговара на форматот :format.',
    'different'              => ':attribute и :other мора да бидат различни.',
    'digits'                 => ':attribute мора да биде :digits цифри.',
    'digits_between'         => ':attribute мора да биде помеѓу :min и :max цифри.',
    'email'                  => ':attribute мора да биде валидна  e-mail адреса.',
    'exists'                 => 'Избраниот :attribute е неважечки.',
    'filled'                 => ':attribute полето е задолжително.',
    'image'                  => ':attribute мора да биде слика.',
    'in'                     => 'Избраниот :attribute е неважечки.',
    'integer'                => ':attribute мора да биде цел број.',
    'ip'                     => ':attribute мора да биде валидна IP адреса,.',
    'json'                   => ':attribute мора да биде валидна JSON низа.',
    'max'                    => array(
        'numeric' => ':attribute можеби е поголем од :max.',
        'file'    => ':attribute можеби е поголема од :max кило бајти.',
        'string'  => ':attribute можеби е поголем од :max знаци.',
        'array'   => ':attribute може да има повеќе од :max ставки.',
    ),
    'mimes'                  => ':attribute мора да биде датотека од типот :values.',
    'min'                    => array(
        'numeric' => ':attribute мора да биде најмалку :min.',
        'file'    => ' :attribute мора да биде најмалку :min кило бајти.',
        'string'  => ' :attribute мора да биде најмалку :min карактери.',
        'array'   => ' :attribute мора да има најмалку :min ставки.',
    ),
    'not_in'                 => 'Избраниот :attribute е неважечки.',
    'numeric'                => ':attribute мора да биде број.',
    'regex'                  => ':attribute форматот е невалиден.',
    'required'               => ':attribute полето е задолжително.',
    'required_if'            => ' :attribute полето е потребно кога :other е :value.',
    'required_unless'        => ' :attribute полето е потребно освен ако :other е во :values.',
    'required_with'          => ' :attribute полето е потребно кога :values е присутен.',
    'required_with_all'      => ' :attribute полето е потребно кога :values е присутен.',
    'required_without'       => ' :attribute полето е потребно кога :values не е присутен.',
    'required_without_all'   => ' :attribute полето е потребно кога ниедна од :values не се присутни.',
    'same'                   => ' :attribute и :other мора да се совпаѓаат.',
    'size'                   => array(
        'numeric' => ' :attribute мора да биде :size.',
        'file'    => ' :attribute мора да биде :size кило бајти.',
        'string'  => ' :attribute мора да биде :size карактери.',
        'array'   => ' :attribute мора да содржи :size ставки.',
    ),
    'string'                 => ' :attribute мора да биде стринг.',
    'timezone'               => ' :attribute мора да биде валидна зона.',
    'unique'                 => ' :attribute веќе е зафатен.',
    'url'                    => ' :attribute форматот е невалиден.',

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
            'rule-name' => 'custom-message',
        ),
        'g-recaptcha-response' => array(
            'required' => 'Потврдете дека не сте робот!',
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
        'name' => '"Име"',
        'email' => 'Е-пошта',
        'password' => '"Лозинка"',
    ),

);
