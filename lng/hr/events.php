<?php

return array(
    'filter'    => array(
        'date_from' => 'Početni datum',
        'date_to'   => 'Završni datum',
        'system'    => 'Odabir sustava',
        'type'      => array(
            'label'   => 'Vrsta događaja:',
            'options' => array(
                'all' => 'Sve',
            )
        ),
        'day'       => 'Dan',
        'week'      => 'Tjedan',
        'month'     => 'Mjesec',
        'submit'    => 'Filter',
        'cancel'    => 'Poništi',
        'filterBy'  => 'FILTRIRAJ PREMA',
    ),
    'table'     => array(
        'type'      => 'Vrsta događaja',
        'system'    => 'Događaj sustava',
        'zone'      => 'Događaj zone',
        'timestamp' => 'Datum događaja',
    ),
    'list'      => array(
        'all'       => 'Sve',
        'allAreas'  => 'Sva područja',
        'today'     => 'Danas',
        'yesterday' => 'Jučer',
        'empty'     => 'Nema događaja',
    ),
    'buttons'   => array(
        'clearFilter' => 'Očisti filtar',
    ),
    'reactions' => array(
        'toggle'  => 'Promijeni status',
        'enable'  => 'Omogući',
        'disable' => 'Onemogući',
    ),
    'settings'  => array(
        'title'    => 'Popis događaja',
        'titleAdd' => 'Dodaj događaj',
        'labels'   => array(
            'active'     => 'Aktivan',
            'inactive'   => 'Neaktivan',
            'activate'   => 'Aktiviraj',
            'deactivate' => 'Deaktiviraj',
            'on'         => 'UKLJ',
            'off'        => 'ISKLJ',
            'qualifier'  => 'Kvalifikator',
            'code'       => 'Kod',
            'name'       => 'Ime',
            'reaction'   => 'Reakcija',
            'nameDesc'   => 'Dostupne varijable: <z>- zona; <v>- korisnik',
        ),
    ),
    'titles'    => array(
        'area' => 'Area \':area\'',
    ),
);
