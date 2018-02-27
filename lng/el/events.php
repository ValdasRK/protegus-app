<?php

return array(
    'filter'    => array(
        'date_from' => 'Ημερομηνία έναρξης',
        'date_to'   => 'Ημερομηνία λήξης',
        'system'    => 'Επιλογής συστήματος',
        'type'      => array(
            'label'   => 'Τύπος συμβάντος:',
            'options' => array(
                'all' => 'Όλα',
            )
        ),
        'day'       => 'Ημέρα',
        'week'      => 'Εβδομάδα',
        'month'     => 'Μήνας',
        'submit'    => 'Φίλτρο',
        'cancel'    => 'Άκυρο',
        'filterBy'  => 'ΦΙΛΤΡΑΡΙΣΜΑ ΚΑΤΑ',
    ),
    'table'     => array(
        'type'      => 'Τύπος συμβάντος',
        'system'    => 'Συμβάν συστήματος',
        'zone'      => 'Ζώνη συμβάντος',
        'timestamp' => 'Ημερομηνία συμβάντος',
    ),
    'list'      => array(
        'all'       => 'Όλα',
        'allAreas'  => 'Όλες οι περιοχές',
        'today'     => 'Σήμερα',
        'yesterday' => 'Εχθές',
        'empty'     => 'Δεν υπάρχουν συμβάντα',
    ),
    'buttons'   => array(
        'clearFilter' => 'Καθαρισμός φίλτρου',
    ),
    'reactions' => array(
        'toggle'  => 'Αλλαγή κατάστασης',
        'enable'  => 'Ενεργοποίηση',
        'disable' => 'Απενεργοποίηση',
    ),
    'settings'  => array(
        'title'    => 'Λίστα Συμβάντων',
        'titleAdd' => 'Προσθήκη συμβάντος',
        'labels'   => array(
            'active'     => 'Ενεργό',
            'inactive'   => 'Ανενεργό',
            'activate'   => 'Ενεργοποίηση',
            'deactivate' => 'Απενεργοποίηση',
            'on'         => 'ΑΝΟΙΧΤΟ',
            'off'        => 'ΚΛΕΙΣΤΟ',
            'qualifier'  => 'Προσδιοριστικό',
            'code'       => 'Κωδικός',
            'name'       => 'Όνομα',
            'reaction'   => 'Αντίδραση',
            'nameDesc'   => 'Διαθέσιμες μεταβλητές: <z> - ζώνη: <v> χρήστης',
        ),
    ),
    'titles'    => array(
        'area' => 'Περιοχή \':area\'',
    ),
);
