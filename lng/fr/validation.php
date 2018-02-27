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
    "valid_user_email"       => 'Cette adresse de messagerie ne peut pas être utilisée.',
    "not_own_email"          => 'Vous ne pouvez pas utiliser votre propre adresse de messagerie',
    "recaptcha"              => 'Veuillez confirmer que vous êtes humain !',
    'not_super_admin'        => 'L\'attribut :attribute donné ne peut pas être utilisé.',
    'old_pass_match'         => 'Les mots de passe ne correspondent pas.',
    'possible_email'         => 'Cette adresse de messagerie ne peut pas être utilisée.',
    'not_in_system'          => 'Utilisateur déjà inclus dans le système.',
    'unique_system'          => 'Système déjà existant.',
    'unique_area_queue_no'   => 'Le numéro d\'attente du secteur doit être unique.',
    'in_monas'               => 'Le numéro de contrat et/ou le mot de passe n\'a pas été trouvé dans MonasMS.',
    'pgm_enabled'            => 'Les sorties sont désactivées.',
    'sensor_enabled'         => 'Les détecteurs sont désactivés.',
    'unique_zone_queue_no'   => 'Le numéro d\'attente de la zone doit être unique.',
    'unique_person_queue_no' => 'Le numéro d\'attente de la personne doit être unique.',
    'unique_pair'            => 'Le qualificateur d\'évènement et le code doivent être uniques',
    'test_monas'             => 'Échec de la connexion à MonasMS',
    'unique_array'           => 'Les numéros du secteur doivent être uniques',
    'dimensions'             => 'Dimensions de l’image ne satisfont pas aux exigences de 165 x 45 px',

    //Standard validation messages
    'accepted'               => 'L\'attribut :attribute doit être accepté.',
    'active_url'             => 'L\'attribut :attribute n\'est pas une adresse URL valide.',
    'after'                  => 'L\'attribut :attribute doit être une date après :date.',
    'alpha'                  => 'L\'attribut :attribute ne peut contenir que des lettres.',
    'alpha_dash'             => 'L\'attribut :attribute ne peut contenir que des lettres, des chiffres et des tirets.',
    'alpha_num'              => 'L\'attribut :attribute ne peut contenir que des lettres et des chiffres.',
    'array'                  => 'L\'attribut :attribute doit être un tableau.',
    'before'                 => 'L\'attribut :attribute doit être une date avant :date.',
    'between'                => array(
        'numeric' => 'L\'attribut :attribute doit être entre :min et :max.',
        'file'    => 'L\'attribut :attribute doit être entre :min et :max kilooctets.',
        'string'  => 'L\'attribut :attribute doit être entre :min et :max caractères.',
        'array'   => 'L\'attribut :attribute doit être entre :min et :max articles.',
    ),
    'boolean'                => 'Le champ de l\'attribut :attribute doit être vrai ou faux.',
    'confirmed'              => 'La confirmation de l\'attribut :attribute ne correspond pas.',
    'date'                   => 'L\'attribut :attribute n\'est pas une date valide.',
    'date_format'            => 'L\'attribut :attribute ne correspond pas au format :format.',
    'different'              => 'L\'attribut :attribute et l\'autre :other doivent être différents.',
    'digits'                 => 'L\'attribut :attribute doit être de :digits chiffres.',
    'digits_between'         => 'L\'attribut :attribute doit être entre :min et :max chiffres.',
    'email'                  => 'L\'attribut :attribute doit être une adresse de messagerie valide.',
    'exists'                 => 'L\'attribut :attribute sélectionné est invalide.',
    'filled'                 => 'Le champ de l\'attribut :attribute est nécessaire.',
    'image'                  => 'L\'attribut :attribute doit être une image.',
    'in'                     => 'L\'attribut :attribute sélectionné est invalide.',
    'integer'                => 'L\'attribut :attribute doit être un nombre entier.',
    'ip'                     => 'L\'attribut :attribute doit être une adresse IP valide.',
    'json'                   => 'L\'attribut :attribute doit être une chaîne JSON valide.',
    'max'                    => array(
        'numeric' => 'L\'attribut :attribute ne doit pas faire plus que :max.',
        'file'    => 'L\'attribut :attribute ne doit pas faire plus de :max kilooctets.',
        'string'  => 'L\'attribut :attribute ne doit pas faire plus de :max caractères.',
        'array'   => 'L\'attribut :attribute ne doit pas avoir plus de :max articles.',
    ),
    'mimes'                  => 'L\'attribut :attribute doit être un fichier de type : :values.',
    'min'                    => array(
        'numeric' => 'L\'attribut :attribute doit être au moins de :min.',
        'file'    => 'L\'attribut :attribute doit être au moins de :min kilooctets.',
        'string'  => 'L\'attribut :attribute doit être au moins de :min caractères.',
        'array'   => 'L\'attribut :attribute doit avoir au moins :min articles.',
    ),
    'not_in'                 => 'L\'attribut :attribute sélectionné est invalide.',
    'numeric'                => 'L\'attribut :attribute doit être un nombre.',
    'regex'                  => 'Le format de l\'attribut :attribute est invalide.',
    'required'               => 'Le champ de l\'attribut :attribute est nécessaire.',
    'required_if'            => 'Le champ de l\'attribut :attribute est nécessaire lorsque l\'autre :other est en :value.',
    'required_unless'        => 'Le champ de l\'attribut :attribute est nécessaire à moins que l\'autre :other ne soit en :values.',
    'required_with'          => 'Le champ de l\'attribut :attribute est nécessaire lorsque :values est présent.',
    'required_with_all'      => 'Le champ de l\'attribut :attribute est nécessaire lorsque :values est présent.',
    'required_without'       => 'Le champ de l\'attribut :attribute est nécessaire lorsque :values n\'est pas présent.',
    'required_without_all'   => 'Le champ de l\'attribut :attribute est nécessaire lorsqu\'aucun :values n\'est présent.',
    'same'                   => 'L\'attribut :attribute et l\'autre :other doivent correspondre.',
    'size'                   => array(
        'numeric' => 'L\'attribut :attribute doit faire :size.',
        'file'    => 'L\'attribut :attribute doit faire :size kilooctets.',
        'string'  => 'L\'attribut :attribute doit faire :size caractères.',
        'array'   => 'L\'attribut :attribute doit contenir :size articles.',
    ),
    'string'                 => 'L\'attribut :attribute doit être une chaîne.',
    'timezone'               => 'L\'attribut :attribute doit être une zone valide.',
    'unique'                 => 'L\'attribut :attribute est déjà utilisé.',
    'url'                    => 'Le format de l\'attribut :attribute est invalide.',

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
            'rule-name' => 'message personnalisé',
        ),
        'g-recaptcha-response' => array(
            'required' => 'Veuillez confirmer que vous êtes humain !',
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
        'name' => '"Nom"',
        'email' => '"E-mail"',
        'password' => '"Mot de passe"',
    ),

);
