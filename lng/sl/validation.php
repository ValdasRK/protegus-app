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
    "valid_user_email"       => 'Tega e-poštnega naslova ni možno uporabiti.',
    "not_own_email"          => 'Ne morete uporabiti svojo e-pošto

',
    "recaptcha"              => 'Prepričajte se, da ste človeški!',
    'not_super_admin'        => 'Glede :attribute ni mogoče uporabiti.',
    'old_pass_match'         => 'Gesli se ne ujemata.',
    'possible_email'         => 'Tega e-postnega naslova ni mozno uporabiti.',
    'not_in_system'          => 'Uporabnik je že vključen v sistem.',
    'unique_system'          => 'Sistem že obstaja.',
    'unique_area_queue_no'   => 'Ta številka particije je že dodana.',
    'in_monas'               => 'Številka pogodbe in/ali geslo ni bilo mogoče najti.',
    'pgm_enabled'            => 'Izhodna krmilja so onemogočena.',
    'sensor_enabled'         => 'Senzorji so onemogočene.',
    'unique_zone_queue_no'   => 'Ta cona številka je že dodan.',
    'unique_person_queue_no' => 'To število uporabnikov je že dodan.',
    'unique_pair'            => 'Oznaka dogodka in koda morata biti unikatna',
    'test_monas'             => 'Povezava z MonasMS ni uspela',
    'unique_array'           => 'Številka particije mora biti unikatna',
    'dimensions'             => 'Dimenzija slike ne ustreza zahtevam 165x45 px',

    //Standard validation messages
    'accepted'               => ':attribute mora biti potrjen.',
    'active_url'             => ':attribute ni veljaven URL.',
    'after'                  => ':attribute mora biti datum po :date.',
    'alpha'                  => ':attribute lahko vsebuje le črke.',
    'alpha_dash'             => ':attribute lahko vsebuje samo črke,številke in črtice.',
    'alpha_num'              => ':attribute lahko vsebuje le črke in številke.',
    'array'                  => ':attribute mora biti niz.',
    'before'                 => ':attribute mora biti datum pred :date.',
    'between'                => array(
        'numeric' => ':attribute mora biti med :min in :max.',
        'file'    => ':attribute mora biti med :min in :max kilobajti.',
        'string'  => ':attribute mora biti med :min in :max znaki.',
        'array'   => ':attribute mora biti med :min in :max elementi.',
    ),
    'boolean'                => ':attribute polje mora biti pravilno ali napačno.',
    'confirmed'              => 'Potrditev :attribute se ne ujema.',
    'date'                   => ':attribute ni veljaven datum.',
    'date_format'            => ':attribute se ne ujema z obliko :format.',
    'different'              => ':attribute in :other morata biti različna.',
    'digits'                 => ':attribute mora biti :digits znak.',
    'digits_between'         => ':attribute mora biti med :min in :max števkami.',
    'email'                  => ':attribute mora biti veljaven e-naslov.',
    'exists'                 => 'Izbran :attribute ni veljavno.',
    'filled'                 => 'Polje :attribute je obvezno.',
    'image'                  => ':attribute mora biti slika.',
    'in'                     => 'Izbran :attribute ni veljavno.',
    'integer'                => ':attribute mora biti celo število.',
    'ip'                     => ':attribute mora biti veljaven IP naslov.',
    'json'                   => ':attribute mora biti veljavna JSON povezava.',
    'max'                    => array(
        'numeric' => ':attribute ne sme biti večja od :max.',
        'file'    => ':attribute ne sme biti večja od :max kilobytes.',
        'string'  => ':attribute ne sme biti večja od :max znakov.',
        'array'   => ':attribute ne sme imeti več kot :max elementov.',
    ),
    'mimes'                  => ':attribute mora biti datoteka vrste: :values.',
    'min'                    => array(
        'numeric' => ':attribute mora biti najmanj :min.',
        'file'    => ':attribute mora biti najmanj :min KB.',
        'string'  => ':attribute mora biti najmanj :min znakov.',
        'array'   => ':attribute mora imeti vsaj :min elementov.',
    ),
    'not_in'                 => 'Izbran :attribute ni veljaven.',
    'numeric'                => ':attribute mora biti število.',
    'regex'                  => ':attribute oblika ni veljavna.',
    'required'               => 'Polje :attribute je obvezno.',
    'required_if'            => ':attribute polje je zahtevano kadar :other je :value.',
    'required_unless'        => ':attribute polje je treba izpolniti, razen če :other je v :values.',
    'required_with'          => ':attribute polje je zahtevano kadar :values je prisotno.',
    'required_with_all'      => ':attribute polje je zahtevano kadar :values je prisotno.',
    'required_without'       => ':attribute polje je zahtevano kadar :values ni prisotno.',
    'required_without_all'   => ':attribute polje je zahtevano kadar nobeden od :values ni prisotno.',
    'same'                   => ':attribute in :other se morata ujemati.',
    'size'                   => array(
        'numeric' => ':attribute mora biti :size.',
        'file'    => ':attribute mora biti :size KB.',
        'string'  => ':attribute mora vsebovati :size znakov.',
        'array'   => ':attribute mora vsebovati :size elementov.',
    ),
    'string'                 => ':attribute mora biti niz.',
    'timezone'               => ':attribute mora biti veljavna cona.',
    'unique'                 => ':attribute je že zasedeno.',
    'url'                    => ':attribute oblika ni veljavna.',

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
            'rule-name' => 'sporočilo po meri',
        ),
        'g-recaptcha-response' => array(
            'required' => 'Prepričajte se, da ste človeški!',
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
        'name' => '"Ime"',
        'email' => '"E-pošta"',
        'password' => '"Geslo"',
    ),

);
