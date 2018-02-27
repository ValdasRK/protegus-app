<?php

return [
    'labels' => [
        'name'                  => 'Όνομα',
        'email'                 => 'E-mail',
        'active'                => 'Χρήστης ενεργός',
        'changePassword'        => 'Αλλαγή κωδικού πρόσβασης',
        'passwordCurrent'       => 'Τρέχον κωδικός πρόσβασης',
        'passwordNew'           => 'Νέος κωδικός πρόσβασης',
        'password'              => 'Κωδικός πρόσβασης',
        'repeatPassword'        => 'Επιβεβαίωση νέος κωδικός πρόσβασης',
        'role'                  => 'Τύπος χρήστη',
        'placeholderPassExists' => '*********',

        'allRoles'      => 'Όλοι οι τύποι χρηστών',
        'superAdmins'   => 'Μόνο Υπερ-Διαχειριστές',
        'simpleUsers'   => 'Μόνο απλοί χρήστες',
        'activeUsers'   => 'Ενεργοί χρήστες',
        'inactiveUsers' => 'Ανενεργοί χρήστες',
        'invitedUsers'  => 'Προσκεκλημένοι χρήστες',
        'searchPhrase'  => 'Αναζήτηση βάσει ονόματος ή e-mail',

        'sortBy'        => 'Ταξινόμηση κατά',
        'sortByNameAZ'  => 'Όνομα Α-Ζ',
        'sortByNameZA'  => 'Όνομα Ζ-Α',
        'sortByEmailAZ' => 'E-mail A-Z',
        'sortByEmailZA' => 'E-mail Z-A',

        'changeEmail'   => 'Αλλαγή e-mail',
        'passwordEmail' => 'Τρέχον κωδικός πρόσβασης',
        'editUser'      => 'Επεξεργασία χρήστη',

        'phoneNumber' => 'Αριθμός τηλεφώνου',
        'company' => 'Εταιρεία',
        'country' => 'Χώρα',
    ],

    'notifications' => [
        'title' => 'Ρυθμίσεις ειδοποιήσεων',

    ],

    'notifications-sounds' => [
        'title' => 'Ρυθμίσεις ήχων ειδοποιήσεων',
    ],

    'settings' => [
        'title' => 'Ρυθμίσεις',
        'menu'  => [
            'profile'       => 'Ρυθμίσεις Προφίλ',
            'notifications' => 'Ρυθμίσεις ειδοποιήσεων',
            'notifications_sounds' => 'Ρυθμίσεις ήχων ειδοποιήσεων',
            'alert'         => 'Ειδοποίηση με ήχο',
            'language'      => 'Γλώσσα',
            'homePage'      => 'Αρχική σελίδα',
        ]
    ],

    'homePageSettings' => [
        'title'   => 'Ρυθμίσεις αρχικής σελίδας',
        'labels'  => [
            'defaultPage'   => 'Προεπιλεγμένη σελίδα',
            'default'       => 'Τα συστήματά μου',
            'defaultAction' => 'Προεπιλεγμένη ενέργεια',
            'events'        => 'Όλα τα συμβάντα',
        ],
        'choices' => [
            'main'    => 'Κύρια προβολή',
            'areas'   => 'Περιοχές',
            'events'  => 'Συμβάντα',
            'sensors' => 'Αισθητήρες',
            'pgms'    => 'Έξοδοι',
        ],
    ],

    'emailChangeRequested' => 'Ο σύνδεσμος αλλαγής e-mail στάλθηκε στη διεύθυνση: :newEmail',

    'buttons' => [
        'save'   => 'Αποθήκευση',
        'create' => 'Δημιουργία',
        'addNew' => 'Προσθήκη νέου χρήστη',
        'cancel' => 'Άκυρο',

        'search'       => 'Αναζήτηση',
        'clearFilter'  => 'Καθαρισμός φίλτρου',
        'filter'       => 'Φίλτρο',
        'changeStatus' => 'Αλλαγή κατάστασης',

        'edit'             => 'Επεξεργασία',
        'rename'           => 'Μετονομασία',
        'delete'           => 'Διαγραφή',
        'resendActivation' => 'Επανάληψη αποστολής e-mail ενεργοποίησης',
        'resendInvitation' => 'Επανάληψη αποστολής e-mail πρόσκλησης',
    ],

    'headers' => [
        'name'  => 'Όνομα',
        'email' => 'E-mail',
    ],

    'status' => [
        'active'   => 'Ενεργό',
        'inactive' => 'Ανενεργό',
        'invited'  => 'Προσκεκλημένος',
    ],
    'angelcam' => [
        'loginSubmit'  => 'Σύνδεση',
        'logoutSubmit' => 'Αποσύνδεση',
        'title'        => 'Υπηρεσία Angelcam',
        'loggedInText' => 'Έχετε συνδεθεί στην υπηρεσία Angelcam.',
        'firstName'    => 'Όνομα',
        'notSet'       => 'Μη ορισμένο',
        'lastName'     => 'Επίθετο',
        'phone'        => 'Τηλέφωνο',
        'logoutSubmit' => 'Αποσύνδεση από το Angelcam',
        'userName'     => 'Angelcam όνομα χρήστη',
        'password'     => 'Angelcam Κωδικός Πρόσβασης',
        'loginSubmit'  => 'Συνδεθείτε στο Angelcam',
        'signupSubmit' => 'Εγγραφείτε στην υπηρεσία Angelcam',
    ],
];
