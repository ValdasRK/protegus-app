<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed'               => 'Εσφαλμένο όνομα χρήστη ή κωδικός πρόσβασης.',
    'throttle'             => 'Παρα πολλές προσπάθειες σύνδεσης. Παρακαλώ δοκιμάστε ξανά σε :seconds δευτερόλεπτα',
    'licenseTitle'         => 'Άδεια χρήσης τελικού χρήστη',
    'sendPasswordLink'     => 'Εισαγετε το email σας για επαναφορά κωδικού',
    'triedToRegister'      => 'Είστε ήδη εγγεγραμμένος',
    'notActiveYet'         => 'Ο λογαριασμός σας δεν είναι ενεργός',
    'resendActivation'     => 'Να αποσταλεί ξανά ο σύνδεσμος ενεργοποίησης;',
    'activationResentFail' => 'Ο σύνδεσμος ενεργοποιήσης δεν είναι εγκυρος',
    'activationResent'     => 'Ο σύνδεσμος ενεργοποίησης εστάλη πρόσφατα στο email σας',
    'passwordResetSent'    => 'Ο σύνδεσμος με το κωδικό επαναφοράς εστάλη στο email σας',

    'form'       => array(
        'name'            => 'Ονοματεπώνυμο',
        'email'           => 'E-mail',
        'signUp'          => 'Εγγραφή',
        'password'        => 'Κωδικός πρόσβασης',
        'reenterPassword' => 'Πληκτρολογήστε ξανά τον κωδικό πρόσβασης',
        'confirmPassword' => 'Επιβεβαίωση κωδικού πρόσβασης',
        'phoneNumber'     => 'Τηλεφωνικός αριθμός (πχ +3069.....)',
        'company'         => 'Εταιρεία',
    ),
    'buttons'    => array(
        'remember'       => 'Απομνημόνευση κωδικού πρόσβασης',
        'signUp'         => 'Εγγραφή',
        'signUpInstallers' => 'Εγγραφή για εγκαταστάτες',
        'logIn'          => 'Σύνδεση',
        'forgotPassword' => 'Ξεχάσατε τον κωδικό πρόσβασης;',
        'cancel'         => 'Άκυρο',
        'agree'          => 'Συμφωνώ',
        'disagree'       => 'Δεν συμφωνώ',
        'send'           => 'Αποστολή',
        'resetPassword'  => 'Επαναφορά κωδικού πρόσβασης',
        'skip'           => 'Παράβλεψη',
        'allow'          => 'Αποδοχή',
        'next'           => 'Επόμενο',
        'previous'       => 'Προηγούμενο',
        'finish'         => 'Τερματισμός',
        'loginView'      => 'Πίσω στην αρχική σελίδα Σύνδεσης',
        'backToSystems'  => 'Επιστροφή στη λίστα χρηστών',
    ),
    'activation' => array(
        'required' => 'Θα πρέπει να λάβετε ένα email με το σύνδεσμο ενεργοποίησης.',
        'failed'   => 'Ανεπιτυχής ενεργοποίηση.',
    ),

    'emailChangeError' => 'Το διακριτικό για να αλλάξετε το E-mail δεν είναι έγκυρο.',
    'emailChanged'     => 'Η διεύθυνση E-mail άλλαξε με επιτυχία.',

    'pushNotifications'       => array(
        'title' => 'Ειδοποιήσεις',
        'text'  => 'Το "Protegus" επιθυμεί να σας στείλει "push notifications". Αυτό μπορεί να ρυθμιστεί στις Ρυθμίσεις.',
    ),
    'passwordResetTokenError' => 'Το διακριτικό κωδικού επαναφοράς δεν είναι έγκυρο.',
    'tutorial'                => array(
        'title'  => 'Βοήθεια',
        'title1' => 'Προσθήκη νέου συστήματος',
        'text1'  => 'Για να δημιουργήσετε ένα νέο σύστημα <br>
Πιέστε<b>Επιλέξτε σύστημα</b> και στη συνέχεια <b>Προσθήκη νέου συστήματος +</b>.',
        'title2' => '&nbsp;',
        'text2'  => 'Πληκτρολογήστε το <b>Μοναδικό ID</b> της συσκευής σας. Το Μοναδικό ID αναζητήστε το στη συσκευασία του προϊόντος. <br>Εισάγετε τον <b> κωδικό πρόσβασης στην υπηρεσία «Protegus»</b>. Ο Κωδικός πρόσβασης είναι ένας κωδικός ελέγχου ταυτότητας για να δημιουργήσετε σύνδεση με τη συσκευή σας επικοινωνία. Κώδικα πρέπει να ταιριάζει με αυτόν που είναι γραμμένος στη συσκευή επικοινωνίας. Από προεπιλογή, ο κωδικός είναι 123456. Εάν ο κωδικός πρόσβασης έχει αλλάξει, επικοινωνήστε με το υπεύθυνο προσωπικό.',
        'title3' => '&nbsp;',
        'text3'  => 'Πιέστε <b>Δημιουργία</b> για να προσθέσετε νέο σύστημα. <br>
O πρώτος χρήστης που θα προστεθεί σε ένα σύστημα, γίνεται ο κύριος χρήστης του. Αυτός μπορεί να προσθέσει νέους χρήστες στο σύστημα , να επεξεργαστεί τα ονόματα των περιοχών, ζωνών, εξόδων, αισθητήρων και να επεξεργαστεί διάφορες παραμέτρους του συστηματος.',
    ),

    'pageExpired' => 'Η σελίδα έχει λήξει, παρακαλώ προσπαθήστε ξανά',

    'errors' => array(
        '401' => 'Δεν έχετε άδεια.',
        '503' => 'Επιστρέφω αμέσως.',
        '404' => 'Δεν βρέθηκε.',
        '500' => 'Ο διακομιστής είναι απασχολημένος, Παρακαλώ δοκιμάστε αργότερα.',
        '404_no_system' => 'Το σύστημα δεν βρέθηκε ή έχει διαγραφεί.',
    ),
);
