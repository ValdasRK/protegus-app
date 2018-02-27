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
    "valid_user_email"       => 'Questo indirizzo email non può essere utilizzato.',
    "not_own_email"          => 'Non puoi usare la tua email',
    "recaptcha"              => 'Si prega di verificare che sei un essere umano!',
    'not_super_admin'        => 'Dato :attribute non può essere utilizzato.',
    'old_pass_match'         => 'Le password non corrispondono.',
    'possible_email'         => 'Questo indirizzo e-mail non può essere utilizzato.',
    'not_in_system'          => 'Utente già incluso nel sistema.',
    'unique_system'          => 'Sistema esiste già.',
    'unique_area_queue_no'   => 'Questo numero di area è già stato aggiunto.',
    'in_monas'               => 'Numero di contratto e/o password non è stata trovata in MonasMS.',
    'pgm_enabled'            => 'Uscite sono disattivate.',
    'sensor_enabled'         => 'Sensori sono disttivati.',
    'unique_zone_queue_no'   => 'Questo numero di zona è già stato aggiunto.',
    'unique_person_queue_no' => 'Questo numero di utente è già stato aggiunto.',
    'unique_pair'            => 'Codice ed event di qualificazione devono essere univoci',
    'test_monas'             => 'Connessione a MonasMS non riuscita',
    'unique_array'           => 'I numeri di zona devono essere univoci',
    'dimensions'             => 'Image dimensions do not meet the requirements of 165x45 px',

    //Standard validation messages
    'accepted'               => 'Attributo :attribute deve essere accettato.',
    'active_url'             => 'Attributo :attribute non è un URL valido.',
    'after'                  => 'Attributo :attribute deve essere successivo a :date.',
    'alpha'                  => 'Attributo :attribute può contenere solamente  lettere.',
    'alpha_dash'             => 'Attributo :attribute può contenere solamente lettere, numeri e trattini.',
    'alpha_num'              => 'Attributo :attribute può contenere solamente lettere e numeri.',
    'array'                  => 'Attributo :attribute deve essere un array.',
    'before'                 => 'Attributo :attribute deve essere una data atecedente a :date.',
    'between'                => array(
        'numeric' => 'Attributo :attribute deve essere compreso tra :min e :max.',
        'file'    => 'Attributo :attribute deve essere compreso tra :min e :max kilobytes.',
        'string'  => 'Attributo :attribute deve essere compreso tra :min e :max caratteri.',
        'array'   => 'Attributo :attribute essere compreso tra :min e :max elementi.',
    ),
    'boolean'                => 'Campo di attributo :attribute deve essere vero o falso.',
    'confirmed'              => 'Confirmazione di attributo :attribute non corrisponde.',
    'date'                   => 'Attributo :attribute non è una data valida.',
    'date_format'            => 'Attributo :attribute non corrisponde al formato :format.',
    'different'              => 'Attributo :attribute e :other devono essere diversi.',
    'digits'                 => 'Attributo :attribute deve essere lungo :digits caratteri.',
    'digits_between'         => 'Attributo :attribute deve essere compreso tra :min e :max caratteri.',
    'email'                  => 'Attributo :attribute deve essere un indirizzo email valido.',
    'exists'                 => 'Attributo :attribute selezionato non è valido.',
    'filled'                 => 'Campo di attributo :attribute è richiesto.',
    'image'                  => 'Attributo :attribute deve essere un\'immagine.',
    'in'                     => 'Attributo :attribute selezionato non è valido.',
    'integer'                => 'Attributo :attribute deve essere un intero.',
    'ip'                     => 'Attributo :attribute deve essere un indirizzo IP valido.',
    'json'                   => 'Attributo :attribute deve contenere una stringa JSON valida.',
    'max'                    => array(
        'numeric' => 'Attributo :attribute non può essere superiore a :max.',
        'file'    => 'Attributto :attribute non può essere più grande di :max kilobyte.',
        'string'  => 'Attributo :attribute non può essere più lungo di :max caratteri.',
        'array'   => 'Attributo :attribute non può contenere più di :max elementi.',
    ),
    'mimes'                  => 'Attributo :attribute deve contenere un file di tipo: :values.',
    'min'                    => array(
        'numeric' => 'Attributo :attribute deve essere almeno :min.',
        'file'    => 'Attributo :attribute deve essere almeno :min kilobyte.',
        'string'  => 'Attributo :attribute deve essere almeno :min caratteri.',
        'array'   => 'Attributo :attribute deve avere almeno :min elementi.',
    ),
    'not_in'                 => 'Il selezionato :attribute non è valido.',
    'numeric'                => 'Attributo :attribute deve essere un numero.',
    'regex'                  => 'Formato di :attribute non è valido.',
    'required'               => 'Campo di :attribute è richiesto.',
    'required_if'            => 'Campo di :attribute è richiesto quando :other è :value.',
    'required_unless'        => 'Campo di :attribute è richiesto salvo che :other sia in :values.',
    'required_with'          => 'Campo di :attribute è richiesto quando :values è presente.',
    'required_with_all'      => 'Campo di :attribute è richiesto quando :values è presente.',
    'required_without'       => 'Campo di :attribute è richiesto quando :values non è presente.',
    'required_without_all'   => 'Campo di :attribute è richiesto quando sono presenti :values.',
    'same'                   => 'Attributo :attribute e :other devono corrispondere.',
    'size'                   => array(
        'numeric' => 'Attributo :attribute deve essere :size.',
        'file'    => 'Attributo :attribute deve essere :size kilobytes.',
        'string'  => 'Attributo :attribute deve essere di :size caratteri.',
        'array'   => 'Attributo :attribute deve contenere :size elementi.',
    ),
    'string'                 => 'Attributo :attribute deve essere una stringa.',
    'timezone'               => 'Attributo :attribute deve essere una zona valida.',
    'unique'                 => 'Attributo :attribute è già in uso.',
    'url'                    => 'Formato di :attribute non è valido.',

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
            'rule-name' => 'messaggio personalizzato',
        ),
        'g-recaptcha-response' => array(
            'required' => 'Si prega di verificare che sei un essere umano!',
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
