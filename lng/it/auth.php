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

    'failed'               => 'Email o password errati.',
    'throttle'             => 'Troppi tentativi di accesso. Si prega di riprovare in :seconds secondi.',
    'licenseTitle'         => 'Contratto di licenza con l\'utente finale',
    'sendPasswordLink'     => 'Inserisci la tua email per reimpostare la password',
    'triedToRegister'      => 'Sei già registrato',
    'notActiveYet'         => 'Il tuo account non è attivo',
    'resendActivation'     => 'Inviare di nuovo il link di attivazione?',
    'activationResentFail' => 'Token per il link di attivazione reinviato non è valido',
    'activationResent'     => 'Il link di attivazione è stato inviato al tuo indirizzo email',
    'passwordResetSent'    => 'Il link di ripristino password è stato inviato alla tua email',

    'form'       => array(
        'name'            => 'Il tuo nome completo',
        'email'           => 'E-mail',
        'signUp'          => 'Registrazione',
        'password'        => 'Password',
        'reenterPassword' => 'Inserisci nuovamente la password',
        'confirmPassword' => 'Conferma la password',
        'phoneNumber'     => 'Numero di telefono (ad esempio: +370 . . . . . .)',
        'company'         => 'Azienda',
    ),
    'buttons'    => array(
        'remember'       => 'Ricorda la password',
        'signUp'         => 'Registrazione',
        'signUpInstallers' => 'Registrazione installatori',
        'logIn'          => 'Accedi',
        'forgotPassword' => 'Hai dimenticato la password?',
        'cancel'         => 'Annulla',
        'agree'          => 'Accetto',
        'disagree'       => 'Non accetto',
        'send'           => 'Inviare',
        'resetPassword'  => 'Reimpostare la password',
        'skip'           => 'Saltare',
        'allow'          => 'Permettere',
        'next'           => 'Seguente',
        'previous'       => 'Precedente',
        'finish'         => 'Terminare',
        'loginView'      => 'Torna alla pagina di login',
        'backToSystems'  => 'Torna alla lista sistemi',
    ),
    'activation' => array(
        'required' => 'Dovresti ricevere una e-mail con il link di attivazione.',
        'failed'   => 'Attivazione fallita.',
    ),

    'emailChangeError' => 'Token per cambiare l\'indirizzo e-mail non è valido.',
    'emailChanged'     => 'Indirizzo e-mail è stato cambiato con successo.',

    'pushNotifications'       => array(
        'title' => 'Notifiche Push',
        'text'  => '"Protegus" vorrebbe inviarti notifiche Push. Queste possono essere configurate nelle impostazioni.',
    ),
    'passwordResetTokenError' => 'Token di reimpostazione della password non è valido.',
    'tutorial'                => array(
        'title'  => 'Assistenza',
        'title1' => 'Aggiugere un nuovo sistema',
        'text1'  => 'Per creare un nuovo sistema: <br>Premere <b>Selezionare sistema</b> e poi <b>Aggiungere un nuovo sistema +</b>.',
        'title2' => '&nbsp;',
        'text2'  => 'Inserite <b> ID unico </b> del vostro dispositivo. ID unico può essere trovato sulla confezione del prodotto.<br>
Inserite <b> il codice di accesso al servizio "Protegus"</b>. Il codice di accesso è un codice di autentificazione per stabilire la connessione con il vostro dispositivo di comunicazione. Il codice deve corrispondere a quello scritto nel dispositivo di comunicazione. Per impostazione predefinita, il codicè è 123456. Se il codice è stato modificato, si prega contattare il personale responsabile.',
        'title3' => '&nbsp;',
        'text3'  => 'Prema su <b> Crea </b> per aggiungere un nuovo sistema.<br> 
Il primo utente che aggiunge il sistema diventa  il principale utente. Egli può aggiungere nuovi utenti al sistema, modificare i nomi delle aree, zone, uscite, sensori e modificare i vari parametri  di sistema.',
    ),

    'pageExpired' => 'La pagina è scaduta, si prega di riprovare',

    'errors' => array(
        '401' => 'Nessuna autorizzazione.',
        '503' => 'Torno subito.',
        '404' => 'Pagina non trovata.',
        '500' => 'Il server è occupato. Si prega di riprovare più tardi.',
        '404_no_system' => 'Sistema non trovato o eliminato.',
    ),
);
