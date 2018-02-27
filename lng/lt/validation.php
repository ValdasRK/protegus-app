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
    "valid_user_email"       => 'Šis el. pašto adresas negali būti naudojamas.',
    "not_own_email"          => 'Negalite naudoti savo el. pašto adreso',
    "recaptcha"              => 'Prašome patvirtinti, kad esate žmogus!',
    'not_super_admin'        => 'Pateiktas :attribute negali būti naudojamas.',
    'old_pass_match'         => 'Neatitinka slaptažodis.',
    'possible_email'         => 'Šis el. pašto adresas negali būti naudojamas.',
    'not_in_system'          => 'Vartotojas jau įtrauktas į sistemą.',
    'unique_system'          => 'Sistema jau egzistuoja.',
    'unique_area_queue_no'   => 'Srities eilės numeris turi būti unikalus.',
    'in_monas'               => 'Sutarties Nr. ir/arba objekto slaptažodis sistemoje nerastas.',
    'pgm_enabled'            => 'PGM yra negalimas.',
    'sensor_enabled'         => 'Sensoriai yra negalimi.',
    'unique_zone_queue_no'   => 'Zonos eilės numeris turi būti unikalus.',
    'unique_person_queue_no' => 'Asmens eilės numeris turi būti unikalus.',
    'unique_pair'            => 'Įvykio klasifikatorius ir kodas turi būti unikalūs',
    'test_monas'             => 'Connection to monas has failed',
    'unique_array'           => 'Sričių numeriai turi būri skirtingi',
    'dimensions'             => 'Paveiksliuko matmenys neatitinka reikalavimų - 165x45 px',

    //Standard validation messages
    'accepted'               => 'Atributas :attribute turi būti priimtas.',
    'active_url'             => 'Atributas :attribute nėra galiojantis URL.',
    'after'                  => 'Atributas :attribute turi būti data po :date.',
    'alpha'                  => 'Atributą :attribute gali sudaryti tik raidės.',
    'alpha_dash'             => 'Atributą :attribute gali sudaryti tik raidės, skaičiai ir brūkšniai.',
    'alpha_num'              => 'Atributą :attribute may gali sudaryti tik raidės ir skaičiai.',
    'array'                  => 'Atributas :attribute turi būti masyvas.',
    'before'                 => 'Atributas :attribute turi būti data prieš :date.',
    'between'                => array(
        'numeric' => 'Atributas :attribute turi būti tarp :min ir :max.',
        'file'    => 'Atributas :attribute turi būti tarp :min ir :max kilobaitų.',
        'string'  => 'Atributas :attribute turi būti tarp :min ir :max simbolių.',
        'array'   => 'Atributas :attribute turi būti tarp :min ir :max pozicijų.',
    ),
    'boolean'                => 'Atributo :attribute reikšmė turi būti true arba false.',
    'confirmed'              => 'Atributo :attribute patvirtinimas nesutampa.',
    'date'                   => 'Atributas :attribute nėra teisinga data.',
    'date_format'            => 'Atributas :attribute neatitinka formato :format.',
    'different'              => 'Atributas :attribute ir :other turi skirtis.',
    'digits'                 => 'Atributas :attribute turi būti :digits skaitmenys.',
    'digits_between'         => 'Atributas :attribute turi būti tarp :min ir :max skaitmenų.',
    'email'                  => 'Atributas :attribute Turi būti galiojantis el. pašto adresas.',
    'exists'                 => 'Pasirinktas atributas :attribute negalioja.',
    'filled'                 => 'Atributo :attribute laukas yra privalomas.',
    'image'                  => 'Atributas :attribute turi būti paveiksliukas.',
    'in'                     => 'Pasirinktas atributas :attribute negalioja.',
    'integer'                => 'Atributas :attribute turi būti sveikasis skaičius.',
    'ip'                     => 'Atributas :attribute turi būti galiojantis IP adresas.',
    'json'                   => 'Atributas :attribute turi būti galiojanti JSON eilutė.',
    'max'                    => array(
        'numeric' => 'Atributas :attribute gali būti ne didesnis kaip :max.',
        'file'    => 'Atributas :attribute gali būti ne didesnis kaip :max kilobaitų.',
        'string'  => 'Atributas :attribute gali būti ne didesnis kaip :max simbolių.',
        'array'   => 'Atributas :attribute negali turėti daugiau nei :max pozicijų.',
    ),
    'mimes'                  => 'Atributas :attribute turi būti sekančio tipo failas: :values.',
    'min'                    => array(
        'numeric' => 'Atributas :attribute turi būti ne mažiau kaip :min.',
        'file'    => 'Atributas :attribute turi būti ne mažiau kaip :min kilobaitų.',
        'string'  => 'Atributas :attribute turi būti ne mažiau kaip :min simbolių.',
        'array'   => 'Atributas :attribute turi būti ne mažiau :min pozicijų.',
    ),
    'not_in'                 => 'Pasirinktas atributas :attribute negalioja.',
    'numeric'                => 'Atributas :attribute turi būti skaičius.',
    'regex'                  => 'Atributo :attribute formatas negalioja.',
    'required'               => 'Atributo :attribute laukas yra privalomas.',
    'required_if'            => 'Atributo :attribute laukas būtinas, kai :other yra :value.',
    'required_unless'        => 'Atributo :attribute laukas būtinas, kai :other yra :values.',
    'required_with'          => 'Atributo :attribute laukas būtinas, kai :values egzistuoja.',
    'required_with_all'      => 'Atributo :attribute laukas būtinas, kai visi :values egzistuoja.',
    'required_without'       => 'Atributo :attribute laukas būtinas, kai :values neegzistuoja.',
    'required_without_all'   => 'Atributo :attribute laukas būtinas, kai nei vienas iš :values neegzistuoja.',
    'same'                   => 'Atributas :attribute ir :other turi sutapti.',
    'size'                   => array(
        'numeric' => 'Atributas :attribute turi būti :size.',
        'file'    => 'Atributas :attribute turi būti :size kilobaitų.',
        'string'  => 'Atributas :attribute turi būti :size simbolių.',
        'array'   => 'Atributas :attribute turi turėti :size pozicijų.',
    ),
    'string'                 => 'Atributas :attribute turi būti eilutė (string).',
    'timezone'               => 'Atributas :attribute turi būti galiojanti zona.',
    'unique'                 => 'Atributas :attribute jau yra užimtas.',
    'url'                    => 'Atributo :attribute formatas negalioja.',

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
            'required' => 'Prašome patvirtinti, kad esate žmogus!',
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
        'name' => '"Vardas"',
        'email' => '"El. paštas"',
        'password' => '"Slaptažodis"',
    ),

);
