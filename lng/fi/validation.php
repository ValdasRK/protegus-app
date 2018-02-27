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
    'not_super_admin'        => 'Annettu :attribute määritettä ei voi käyttää.',
    'old_pass_match'         => 'Salasanat eivät täsmää.',
    'possible_email'         => 'Tätä sähköpostiosoitetta ei voida käyttää.',
    'not_in_system'          => 'Käyttäjä on jo luotu järjestelmään.',
    'unique_system'          => 'Hälytysjärjestelmä on Jo käytössä.',
    'unique_area_queue_no'   => 'Alueen jonon numeron tulee olla yksilöivä.',
    'in_monas'               => 'Sopimuksen numero ja/tai salasana ei löytynyt MonasMS-järjestelmästä',
    'pgm_enabled'            => 'Lähdöt ovat poistettu käytöstä.',
    'sensor_enabled'         => 'Anturit eivät ole käytössä',
    'unique_zone_queue_no'   => 'Silmukan numero on oltava yksilöllinen.',
    'unique_person_queue_no' => 'Henkilön jononumeron tulee olla yksilöivä.',
    'unique_pair'            => 'Tapahtuman koodin on oltava yksilöllinen',
    'test_monas'             => 'MonasMS-yhteys epäonnistui',
    'unique_array'           => 'Area numbers must be unique',
    'dimensions'             => 'Image dimensions do not meet the requirements of 165x45 px',

    //Standard validation messages
    'accepted'               => ':attribute on hyväksyttävä.',
    'active_url'             => ':attribute ei ole kelvollinen URL-osoite.',
    'after'                  => ':attribute jälkeen on oltava määrite :date.',
    'alpha'                  => 'Määrite :attribute voi sisältää vain kirjaimia.',
    'alpha_dash'             => 'Määrite :attribute voi sisältää vain kirjaimia, numeroita ja väliviivoja.',
    'alpha_num'              => 'Määrite :attribute voi sisältää vain kirjaimia ja numeroita.',
    'array'                  => 'Määritteen :attribute on oltava taulukko.',
    'before'                 => 'Määritteen :attribute on oltava ennen päivämäärää :date.',
    'between'                => array(
        'numeric' => 'Määritteen :attribute on oltava :min ja :max.',
        'file'    => 'Määritteen :attribute on oltava :min ja :max kilotavua.',
        'string'  => 'Määritteen :attribute on oltava :min ja :max merkkiä.',
        'array'   => 'Määritteen :attribute on oltava välillä :min ja :max kohteita.',
    ),
    'boolean'                => 'Määritekenttä :attribute on oltava tosi tai epätosi.',
    'confirmed'              => 'Määrite :attribute vahvistus ei täsmää.',
    'date'                   => 'Määrite :attribute ei ole kelvollinen päivämäärä.',
    'date_format'            => 'Määrite :attribute ei vastaa muotoa :format.',
    'different'              => 'L\'attribut :attribute et :other doivent être différents.',
    'digits'                 => 'Määritteen :attribute on oltava :digits merkkiä.',
    'digits_between'         => 'Määritteen :attribute on oltava :min ja :max numeroa.',
    'email'                  => 'Määritteen :attribute on oltava voimassa oleva sähköpostiosoite.',
    'exists'                 => 'Valinta määrite :attribute ei kelpaa.',
    'filled'                 => 'Määritekenttä :attribute on pakollinen.',
    'image'                  => 'Määritteen :attribute on oltava kuva.',
    'in'                     => 'Valinta :attribute määrite ei kelpaa.',
    'integer'                => 'Määritteen :attribute arvon on oltava kokonaisluku.',
    'ip'                     => 'Määritteen :attribute arvon on oltava kelvollinen IP-osoite.',
    'json'                   => 'Määritteen :attribute arvon on oltava kelvollinen JSON merkkijono.',
    'max'                    => array(
        'numeric' => 'Määritettä :attribute ei saa olla suurempi kuin :max.',
        'file'    => 'Määritettä :attribute ei saa olla suurempi kuin :max kilotavua.',
        'string'  => 'Määritettä :attribute ei saa olla suurempi kuin :max merkkiä.',
        'array'   => 'Määritettä :attribute ei saa olla yli :max kohteita.',
    ),
    'mimes'                  => 'Määritteen :attribute on oltava tiedosto, jonka tyyppi: :values.',
    'min'                    => array(
        'numeric' => 'Määritteen :attribute on oltava vähintään :min.',
        'file'    => 'Määritteen :attribute on oltava vähintään :min kilotavua.',
        'string'  => 'Määritteen :attribute on oltava vähintään :min merkkiä.',
        'array'   => 'Määritteen :attribute on oltava vähintään :min kohteita.',
    ),
    'not_in'                 => 'Valinta :attribute määrite ei kelpaa.',
    'numeric'                => 'Määritteen :attribute on oltava luku.',
    'regex'                  => 'Määritteen :attribute muoto on virheellinen.',
    'required'               => 'Määritekenttä :attribute on pakollinen.',
    'required_if'            => 'Määritekenttä :attribute tarvitaan :other on :value.',
    'required_unless'        => 'Määritekenttä :attribute on pakollinen, ellei :other on :values.',
    'required_with'          => 'Määritekenttä :attribute tarvitaan :values ovat tässä.',
    'required_with_all'      => 'Määritekenttä :attribute tarvitaan :values on läsnä.',
    'required_without'       => 'Määritekenttä :attribute tarvitaan :values eivät ole tässä.',
    'required_without_all'   => 'Määritekenttä :attribute on pakollinen, kun yksikään :values ovat tässä.',
    'same'                   => 'Määrite :attribute ja :other on vastattava.',
    'size'                   => array(
        'numeric' => 'Määritteen :attribute on oltava :size.',
        'file'    => 'Määritteen :attribute on oltava :size kilotavuina.',
        'string'  => 'Määritteen :attribute on oltava :size merkkiä.',
        'array'   => 'Määritteen :attribute on oltava :size kohteita.',
    ),
    'string'                 => 'Määritteen :attribute on oltava merkkijono.',
    'timezone'               => 'Määritteen :attribute arvon on oltava kelvollinen alue.',
    'unique'                 => 'Määrite :attribute on jo käytetty.',
    'url'                    => 'Määritteen :attribute muoto on virheellinen.',

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
            'rule-name' => 'Oma viesti',
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
