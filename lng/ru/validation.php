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
    "valid_user_email"       => 'Этот адрес электронной почты не может быть использован.',
    "not_own_email"          => 'Нельзя использовать свой собственный адрес',
    "recaptcha"              => 'Пожалуйста, подтвердите, что вы являетесь человеком!',
    'not_super_admin'        => 'Представленное значение :attribute не может использоваться.',
    'old_pass_match'         => 'Не совпадает пароль.',
    'possible_email'         => 'Этот адрес электронной почты не может быть использован.',
    'not_in_system'          => 'Пользователь уже добавлен в систему.',
    'unique_system'          => 'Объект уже существует.',
    'unique_area_queue_no'   => 'Номер партиции должен быть уникален.',
    'in_monas'               => 'Номер договора и/или пароль объекта в системе не найден.',
    'pgm_enabled'            => 'Выходы отключены.',
    'sensor_enabled'         => 'Сенсоры не доступны.',
    'unique_zone_queue_no'   => 'Порядковый номер зоны должен быть уникальным.',
    'unique_person_queue_no' => 'Порядковый номер должен быть уникальным.',
    'unique_pair'            => 'Классификатор событий и код должны быть уникальными',
    'test_monas'             => 'Подключение к MonasMS неудалось',
    'unique_array'           => 'Номер партиции должен быть уникален',
    'dimensions'             => 'Размеры изображения не соответствуют требованиям 165x45',

    //Standard validation messages
    'accepted'               => 'Значение :attribute должно быть принято.',
    'active_url'             => 'Значение :attribute не является допустимым URL-адресом.',
    'after'                  => 'Значение :attribute должно быть дата после :date.',
    'alpha'                  => 'Значение :attribute может содержать только буквы.',
    'alpha_dash'             => 'Значение :attribute может содержать только буквы, цифры и тире.',
    'alpha_num'              => 'Значение :attribute может содержать только буквы и цифры.',
    'array'                  => 'Значение :attribute должно быть массивом.',
    'before'                 => 'Значение :attribute должно быть дата до :date.',
    'between'                => array(
        'numeric' => 'Значение :attribute должно быть между :min и :max.',
        'file'    => 'Значение :attribute должно быть между :min и :max килобайт.',
        'string'  => 'Значение :attribute должно быть между :min и :max символов.',
        'array'   => 'Значение :attribute должно быть между :min и :max позиций.',
    ),
    'boolean'                => 'Значение :attribute должно быть правда или ложь.',
    'confirmed'              => 'Не совпадает подтверждение значения :attribute.',
    'date'                   => 'Значение :attribute не является правильной датой.',
    'date_format'            => 'Значение :attribute не соответствует формату :format.',
    'different'              => 'Значение :attribute и :other должны быть разными.',
    'digits'                 => 'Значение :attribute должно быть :digits цифр.',
    'digits_between'         => 'Значение :attribute должно быть между :min и :max цифр.',
    'email'                  => 'Значение :attribute должно быть действительным адресом электронной почты.',
    'exists'                 => 'Выбранное значение :attribute недопустимо.',
    'filled'                 => 'Значение :attribute является обязательным.',
    'image'                  => 'Значение :attribute должно быть картинкой.',
    'in'                     => 'Выбранное значение :attribute недопустимо.',
    'integer'                => 'Значение :attribute должно быть целым числом.',
    'ip'                     => 'Значение :attribute должно быть действительным IP-адресом.',
    'json'                   => 'Значение :attribute должно быть допустимой строкой JSON.',
    'max'                    => array(
        'numeric' => 'Значение :attribute не может быть больше чем :max.',
        'file'    => 'Значение :attribute не может быть больше чем :max килобайт.',
        'string'  => 'Значение :attribute может быть не больше чем :max символов.',
        'array'   => 'Значение :attribute не может иметь более чем :max позиции.',
    ),
    'mimes'                  => 'Значение :attribute должно быть следующим типом файла: :values.',
    'min'                    => array(
        'numeric' => 'Значение :attribute не должно быть меньше чем :min.',
        'file'    => 'Значение :attribute должно быть по крайней мере :min килобайт.',
        'string'  => 'Значение :attribute должно быть по крайней мере :min символов.',
        'array'   => 'Значение :attribute должно быть по крайней мере :min позиций.',
    ),
    'not_in'                 => 'Выбранное значение :attribute недопустимо.',
    'numeric'                => 'Значение :attribute должно быть числом.',
    'regex'                  => 'Значение :attribute недопустимый формат.',
    'required'               => 'Значение :attribute является обязательным.',
    'required_if'            => 'Значение :attribute является обязательным, когда :other является :value.',
    'required_unless'        => 'Значение :attribute является обязательным, если только :other нету между :values.',
    'required_with'          => 'Значение :attribute является обязательным, когда :values существует.',
    'required_with_all'      => 'Значение :attribute обязательно, когда все из следующих значений :values существуют.',
    'required_without'       => 'Значение :attribute является обязательным, когда :values не существует.',
    'required_without_all'   => 'Значение :attribute требуется, когда ни одно из следующих значений :values не существует.',
    'same'                   => 'Значение :attribute и :other должны совпадать.',
    'size'                   => array(
        'numeric' => 'Значение :attribute должно быть :size.',
        'file'    => 'Значение :attribute должно быть :size в килобайтах.',
        'string'  => 'Значение :attribute должно быть :size символов.',
        'array'   => 'Значение :attribute должно иметь следующее количество позиций :size.',
    ),
    'string'                 => 'Значение :attribute должно быть строкой (string).',
    'timezone'               => 'Значение :attribute должно быть допустимой зоной.',
    'unique'                 => 'Значение :attribute уже занято.',
    'url'                    => 'Значение :attribute  недопустимый формат.',

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
            'rule-name' => 'персонализированные сообщения',
        ),
        'g-recaptcha-response' => array(
            'required' => 'Пожалуйста, подтвердите, что вы являетесь человеком!',
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
        'name' => '"Имя"',
        'email' => '"Эл. почта"',
        'password' => '"Пароль"',
    ),

);
