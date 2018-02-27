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
    "valid_user_email"       => 'Αυτή η διεύθυνση ηλεκτρονικού ταχυδρομείου δεν μπορεί να χρησιμοποιηθεί.',
    "not_own_email"          => 'Δεν είναι δυνατό να χρησιμοποιήσετε το δικό σας email',
    "recaptcha"              => 'Παρακαλώ βεβαιώστε ότι είστε άνθρωπος!',
    'not_super_admin'        => 'Το δεδομένο :attribute δεν μπορεί να χρησιμοποιηθεί.',
    'old_pass_match'         => 'Οι κωδικοί πρόσβασης δεν ταιριάζουν.',
    'possible_email'         => 'Αυτή η διεύθυνση e-mail δεν μπορεί να χρησιμοποιηθεί.',
    'not_in_system'          => 'Ο χρήστης περιλαμβάνεται ήδη στο σύστημα.',
    'unique_system'          => 'Το σύστημα υπάρχει ήδη.',
    'unique_area_queue_no'   => 'Ο αύξων αριθμός περιοχής πρέπει να είναι μοναδικός.',
    'in_monas'               => 'Ο αριθμός συμβολαίου και/ή ο κωδικός πρόσβασης δεν βρέθηκε στο MonasMS.',
    'pgm_enabled'            => 'Οι έξοδοι είναι απενεργοποιημένες.',
    'sensor_enabled'         => 'Οι αισθητήρες είναι απενεργοποιημένοι.',
    'unique_zone_queue_no'   => 'Ο αριθμός της ζώνης πρέπει να είναι μοναδικός.',
    'unique_person_queue_no' => 'Ο αριθμός ατόμου πρέπει να είναι μοναδικός.',
    'unique_pair'            => 'Ο κωδικός συμβάντος πρέπει να είναι μοναδικός',
    'test_monas'             => 'Η σύνδεση με το MonasMS απέτυχε',
    'unique_array'           => 'Ο αριθμός περιοχής πρέπει να είναι μοναδικός',
    'dimensions'             => 'Η διάσταστη της εικόνας δεν πληρεί τις απαιτήσεις 165 x 45 px',

    //Standard validation messages
    'accepted'               => 'Το :attribute πρέπει να είναι αποδεκτό.',
    'active_url'             => 'Το :attribute δεν είναι ένα έγκυρο URL.',
    'after'                  => 'Το :attribute πρέπει να είναι μια ημερομηνία μετά τις :date.',
    'alpha'                  => 'Το :attribute μπορεί να περιέχει μόνο γράμματα.',
    'alpha_dash'             => 'Το :attribute μπορεί να περιέχει μόνο γράμματα, αριθμούς και παύλες.',
    'alpha_num'              => 'Το :attribute μπορεί να περιέχει μόνο γράμματα και αριθμούς.',
    'array'                  => 'Το :attribute πρέπει να είναι ένας πίνακας.',
    'before'                 => 'The :attribute πρέπει να είναι μια ημερομηνία πριν τις :date.',
    'between'                => array(
        'numeric' => 'The :attribute πρέπει να είναι μεταξύ :min και :max.',
        'file'    => 'The :attribute πρέπει να είναι μεταξύ :min και :max kilobytes.',
        'string'  => 'The :attribute πρέπει να είναι μεταξύ :min και :max χαρακτήρες.',
        'array'   => 'The :attribute πρέπει να είναι μεταξύ :min και :max αντικείμενα.',
    ),
    'boolean'                => 'Το :attribute πεδίο πρέπει να είναι σωστό ή λάθος.',
    'confirmed'              => 'Το :attribute επιβεβαίωσης δεν ταιριάζει.',
    'date'                   => 'Το :attribute δεν είναι μια έγκυρη ημερομηνία.',
    'date_format'            => 'Το :attribute δεν ταιριάζει με τη :format.',
    'different'              => 'Το :attribute και :other πρέπει να είναι διαφορετικά.',
    'digits'                 => 'Το :attribute πρέπει να περιέχει :digits ψηφία.',
    'digits_between'         => 'To :attribute πρέπει να είναι μεταξύ :min και :max ψηφία.',
    'email'                  => 'Η :attribute πρέπει να είναι μια έγκυρη διεύθυνση email.',
    'exists'                 => 'Το επιλεγμένο :attribute είναι μη έγκυρο.',
    'filled'                 => 'Το πεδίο :attribute είναι υποχρεωτικό.',
    'image'                  => 'Το :attribute πρέπει να είναι εικόνα.',
    'in'                     => 'Το επιλεγμένο :attribute δεν είναι έγκυρο.',
    'integer'                => 'To :attribute πρέπει να είναι ακέραιος αριθμός.',
    'ip'                     => 'H :attribute πρέπει να είναι μια έγκυρη διεύθυνση IP.',
    'json'                   => 'H :attribute πρεπει να είναι μια έγκυρη συμβολοσειρά JSON.',
    'max'                    => array(
        'numeric' => 'Η :attribute δεν μπορεί να είναι μεγαλύτερη από :max.',
        'file'    => 'To :attribute δεν μπορεί να είναι μεγαλύτερο από :max kilobytes.',
        'string'  => 'To :attribute δεν μπορεί να είναι μεγαλύτερο από :max χαρακτήρες.',
        'array'   => 'Το :attribute δεν μπορεί να περιέχει περισσότερα από :max αντικείμενα.',
    ),
    'mimes'                  => 'Το :attribute πρέπει να είναι αρχείο τύπου: :values.',
    'min'                    => array(
        'numeric' => 'To :attribute πρέπει να είναι τουλάχιστον :min.',
        'file'    => 'To :attribute πρέπει να είναι τουλάχιστον :min kilobytes.',
        'string'  => 'To :attribute πρέπει να είναι τουλάχιστον :min χαρακτήρες.',
        'array'   => 'To :attribute πρέπει να περιέχει τουλάχιστον :min αντικείμενα.',
    ),
    'not_in'                 => 'Το επιλεγμένο :attribute είναι μη έγκυρο.',
    'numeric'                => 'To :attribute πρέπει να είναι αριθμός.',
    'regex'                  => 'Το :attribute έχει μη έγκυρη μορφή.',
    'required'               => 'Το πεδίο :attribute είναι υποχρεωτικό.',
    'required_if'            => 'Το :attribute πεδίο είναι απαραίτητο όταν η τιμή :other είναι :value.',
    'required_unless'        => 'To πεδίο :attribute είναι απαραίτητο εκτός αν :other είναι σε :values.',
    'required_with'          => 'To πεδίο :attribute είναι απαραίτητο όταν :values είναι παρούσες.',
    'required_with_all'      => 'To πεδίο :attribute είναι απαραίτητο όταν :values είναι παρούσες.',
    'required_without'       => 'To πεδίο :attribute είναι απαραίτητο όταν :values δεν είναι παρούσες.',
    'required_without_all'   => 'To πεδίο :attribute είναι απαραίτητο όταν καμία από :values δεν είναι παρούσες.',
    'same'                   => 'Το :attribute και :other δεν ταιριάζουν.',
    'size'                   => array(
        'numeric' => 'Το :attribute πρέπει να είναι :size.',
        'file'    => 'Το :attribute πρέπει να έχει μέγεθος :size kilobytes.',
        'string'  => 'Το :attribute πρέπει να έχει μήκος :size χαρακτήρων.',
        'array'   => 'Το :attribute πρέπει να περιέχει :size αντικείμενα.',
    ),
    'string'                 => 'Το :attribute πρέπει να είναι συμβολοσειρά.',
    'timezone'               => 'Η :attribute πρέπει να είναι έγκυρη ζώνη.',
    'unique'                 => 'Το :attribute δεν είναι διαθέσιμο.',
    'url'                    => 'Το :attribute έχει μη έγκυρη μορφή.',

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
            'rule-name' => 'Προσαρμοσμένο μήνυμα',
        ),
        'g-recaptcha-response' => array(
            'required' => 'Παρακαλώ βεβαιώστε ότι είστε άνθρωπος!',
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
        'name' => '"Όνομα"',
        'email' => '"E-mail"',
        'password' => '"Κωδικός πρόσβασης"',
    ),

);
