<?php

return [
    'noConnection' => 'Η σελιδα δεν είναι διαθέσιμη',
    'buttons'      => [
        'save'           => 'Αποθήκευση',
        'delete'         => 'Διαγραφή',
        'addNew'         => 'Προσθήκη νέας',
        'testConnection' => 'Έλεγχος',
    ],
    'connected'    => 'Συνδέθηκε',
    'notConnected' => 'Απέτυχε',
    'labels'       => [
        'peerName'       => 'Όνομα Peer',
        'host'           => 'Διακομιστής',
        'port'           => 'Θύρα',
        'userName'       => 'Όνομα χρήστη',
        'password'       => 'Κωδικός πρόσβασης',
        'changeLanguage' => 'Change language',
    ],
    'installer' => [
        'logo' => 'Λογότυπο εγκαταστάτη (165x45)',
        'removeLogo' => 'Αφαιρέστε το λογότυπο'
    ],
    'ipcom' => [
        'logo' => 'Ipcom λογότυπο',
        'removeLogo' => 'Αφαιρέστε Ipcom λογότυπο',
        'priorityLogo' => 'Priority over installer logo'
    ],
    'monas'        => [
        'title' => 'Ρυθμίσεις MonasMS',
        'label' => [
            'host'     => 'MonasMS database hostname',
            'database' => 'Όνομα βάσης δεδομένων MonasMS',
            'username' => 'MonasMS database username',
            'password' => 'MonasMS database password',
            'use'      => 'Ενεργοποίηση MonasMS',
            'sync'     => 'Περίοδος σε δευτερόλεπτα για το συγχρονισμό των συμβάντων με Monas',
        ],
    ],
    'grg'          => [
        'title' => 'Ρυθμίσεις GRG',
        'label' => [
            'host' => 'Διακομιστής GRG',
            'port' => 'Θύρα GRG',
            'code' => 'Προεπιλεγμένος κωδικός για αποστολή',
            'zone' => 'Προεπιλεγμένος αριθμός ζώνης για αποστολή',
        ],
    ],
    'global'       => [
        'title' => 'Καθολικές ρυθμίσεις',
        'label' => [
            'show_zones'                            => 'Ενεργοποίηση/απενεργοποίηση της καρτέλας των ζωνών για τον χρήστη Master',
            'show_grg'                              => 'Ενεργοποίηση/Απενεργοποίηση του κουμπιού "React" για τους χρήστες',
            'main_user_edit_zones'                  => 'Ενεργοποίηση της περιγραφής των ζωνών για τον χρήστη Master',
            'main_user_add_zones'                   => 'Ενεργοποίηση της προσθήκης ζωνών για τον χρήστη Master',
            'main_user_enable_additional_fields'    => 'Ενεργοποίηση Master χρήστη να περιγράψει χρήστη πρόσθετα πεδία όταν χρησιμοποιείται MonasMS',
            'main_user_enable_view_users'           => 'Ενεργοπόιηση της προβολής του μενού περιοχών των χρηστών για τον χρήστη Master',
            'main_user_enable_edit_users'           => 'Ενεργοποίηση της επεξεργασιας των χρηστών περιοχής για τον χρήστη Master',
            'event_full_name'                       => 'Εμφάνιση ολόκληρου του ονόματος συμβάντος αντί για τύπο αντίδρασης',
            'g10_pgm_output_as_area'                => 'Ενεργοποίησης της αλλαγής της λειτουργίας PGM (να Οπλίζει/Αφοπλίζει το σύστημα) για τον χρήστη Master',
            'show_sensor_window'                    => 'Εμφάνιση παραθύρου αισθητήρες, εάν δεν υποστηρίζεται από το σύστημα',
            'show_pgm_window'                       => 'Εμφάνιση παραθύρου PGM εφόσον υπάρχει μόνο 1 PGM και χρησιμοποιείται για όπλιση/Αφόπλιση',
            'installer_prepaid_sim'                 => 'Εμφάνιση εγκαταστάτη και χαρακτηριστικά προπληρωμένης sim',
            'enabled_recaptcha'                     => 'Χρησιμοποίηση της λειτουργίας ανάκτησης χαρακτήρων για εγγραφή',
            'braintree_production_merchant_id'      => 'Εμπορικής Ταυτότητας Braintree',
            'braintree_production_public_key'       => 'Δημόσιο κλειδί Braintree',
            'braintree_production_private_key'      => 'Ιδιωτικό κλειδί Braintree',
            'braintree_sandbox_merchant_id'         => 'Sandbox Εμπορικής Ταυτότητας Braintree',
            'braintree_sandbox_public_key'          => 'Sandbox Δημόσιο κλειδί Braintree',
            'braintree_sandbox_private_key'         => 'Sandbox Ιδιωτικό κλειδί Braintree',
            'braintree_production_enabled'          => 'Ενεργοποίηση Braintree παραγωγή πληρωμών',
            'show_angelcam'                         => 'Ενεργοποίηση Angelcam',
        ],
    ],
    'reactions'    => [
        'labels'         => [
            'name'                       => 'Όνομα αντίδρασης',
            'monas_id'                   => 'ID αντίδρασης Monas',
            'type'                       => 'Τύπος αντίδρασης',
            'image'                      => 'Εικόνα Αντίδρασης',
            'redirect_to'                => 'Ειδοποίηση ανακατευθύνεται σε',
            'notification_sound'         => 'Ηχος ειδοποίησης για χρήση',
            'notification_sound_default' => 'Προεπιλογή Συσκευής',
            'notification_sound_custom'  => 'Προσαρμογή',
            'notification_sound_info'    => 'Ήχος ειδοποίησης:',
        ],
        'redirects'      => [
            'event'  => 'Σελίδα συμβάντων',
            'sensor' => 'Σελίδα αισθητήρων',
        ],
        'noReaction'     => 'Το συμβάν δεν έχει αντίδραση',
        'translationKey' => 'Κλειδί μετάφρασης',
    ],
];
