<?php

return array(
    'filter'    => array(
        'date_from' => 'Data di inizio',
        'date_to'   => 'Data di fine',
        'system'    => 'Selezione del sistema',
        'type'      => array(
            'label'   => 'Tipo di evento:',
            'options' => array(
                'all' => 'Tutti',
            )
        ),
        'day'       => 'Giorno',
        'week'      => 'Settimana',
        'month'     => 'Mese',
        'submit'    => 'Filtro',
        'cancel'    => 'Annullare',
        'filterBy'  => 'FILTRARE PER',
    ),
    'table'     => array(
        'type'      => 'Tipo di evento',
        'system'    => 'Evento di sistema',
        'zone'      => 'Evento di zona',
        'timestamp' => 'Data di evento',
    ),
    'list'      => array(
        'all'       => 'Tutti',
        'allAreas'  => 'Tutte le aree',
        'today'     => 'Oggi',
        'yesterday' => 'Ieri',
        'empty'     => 'Non ci sono eventi',
    ),
    'buttons'   => array(
        'clearFilter' => 'Rimuovere il filtro',
    ),
    'reactions' => array(
        'toggle'  => 'Cambiare lo status',
        'enable'  => 'Attivare',
        'disable' => 'Disattivare',
    ),
    'settings'  => array(
        'title'    => 'Lista eventi',
        'titleAdd' => 'Aggiungere un evento',
        'labels'   => array(
            'active'     => 'Attivo',
            'inactive'   => 'Inattivo',
            'activate'   => 'Attivare',
            'deactivate' => 'Disattivare',
            'on'         => 'ON',
            'off'        => 'OFF',
            'qualifier'  => 'Qualificatore',
            'code'       => 'Codice',
            'name'       => 'Nome',
            'reaction'   => 'Reazione',
            'nameDesc'   => 'Variabili disponibili: <z>- zona; <v>- utente',
        ),
    ),
    'titles'    => array(
        'area' => 'Area \':area\'',
    ),
);
