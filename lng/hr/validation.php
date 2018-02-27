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
    "valid_user_email"       => 'Ne mogu koristiti ovu e-mail adresu.',
    "not_own_email"          => 'Ne možete koristiti svoj e-mail',
    "recaptcha"              => 'Molimo osigurajte da ste ljudsko biće!',
    'not_super_admin'        => 'Sljedeći :attribute ne može se koristiti.',
    'old_pass_match'         => 'Lozinke nisu iste.',
    'possible_email'         => 'Ne mogu koristiti ovu e-mail adresu.',
    'not_in_system'          => 'Korisnik već uključen u sustav.',
    'unique_system'          => 'Sustav već postoji.',
    'unique_area_queue_no'   => 'Particija je već dodana.',
    'in_monas'               => 'Contract no and/or password was not found.',
    'pgm_enabled'            => 'Outputs are disabled.',
    'sensor_enabled'         => 'Senzori su onemogućeni.',
    'unique_zone_queue_no'   => 'Zona je već dodana.',
    'unique_person_queue_no' => 'Korisnik je već dodan.',
    'unique_pair'            => 'Kvalifikator i kod moraju biti jedinstveni',
    'test_monas'             => 'Veza s MonasMS nije uspjela',
    'unique_array'           => 'Oznaka particija mora biti jedinstvena',
    'dimensions'             => 'Image dimensions do not meet the requirements of 165x45 px',

    //Standard validation messages
    'accepted'               => ':attribute mora biti potvrđen.',
    'active_url'             => ':attribute nije važeći URL.',
    'after'                  => ':attribute mora biti nakon datuma :date.',
    'alpha'                  => ':attribute može sadržavati samo slova.',
    'alpha_dash'             => ':attribute može sadržavati samo slova, brojeve, i razmake.',
    'alpha_num'              => ':attribute može sadržavati samo slova, i brojeve.',
    'array'                  => ':attribute mora biti polje.',
    'before'                 => ':attribute mora biti datum prije :date.',
    'between'                => array(
        'numeric' => ':attribute mora biti između :min i :max.',
        'file'    => ':attribute mora biti između :min i :max kilobita.',
        'string'  => ':attribute mora biti :min i :max znakova.',
        'array'   => ':attribute mora biti između :min i :max stavke.',
    ),
    'boolean'                => ':attribute polje mora biti True ili False.',
    'confirmed'              => ':attribute potvrda se ne podudara.',
    'date'                   => ':attribute nije valjan datum.',
    'date_format'            => ':attribute ne odgovara formatu :format.',
    'different'              => ':attribute i :other mora biti različite.',
    'digits'                 => ':attribute mora biti :digits znamenke.',
    'digits_between'         => ':attribute mora biti između :min i :max znamenki.',
    'email'                  => ':attribute mora biti valjana e-mail adresa.',
    'exists'                 => 'Odabrani :attribute je nevažeći.',
    'filled'                 => ':attribute polje je obvezno.',
    'image'                  => ':attribute mora biti slika.',
    'in'                     => 'Odabrani :attribute je nevažeći.',
    'integer'                => ':attribute mora biti cijeli broj.',
    'ip'                     => ':attribute mora biti valjana IP adresa,.',
    'json'                   => ':attribute mora biti valjan JSON niz.',
    'max'                    => array(
        'numeric' => ':attribute možda bude veća od :max.',
        'file'    => ':attribute Može biti veća od :max kilobita.',
        'string'  => ':attribute može biti veća od :max znakova.',
        'array'   => ':attribute može imati više pd :max stavki.',
    ),
    'mimes'                  => ':attribute mora biti fajl od tipa :values.',
    'min'                    => array(
        'numeric' => ':attribute mora biti najmanje :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ),
    'not_in'                 => 'Odabrani :attribute je nevažeći.',
    'numeric'                => 'The :attribute must be a number.',
    'regex'                  => 'The :attribute format is invalid.',
    'required'               => ':attribute polje je obvezno.',
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
    'timezone'               => 'The :attribute must be a valid zone.',
    'unique'                 => 'The :attribute has already been taken.',
    'url'                    => 'The :attribute format is invalid.',

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
            'required' => 'Molimo osigurajte da ste ljudsko biće!',
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
