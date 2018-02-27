<?php

return array(
    'filter'    => array(
        'date_from' => 'Začetni datum',
        'date_to'   => 'Končni datum',
        'system'    => 'Izbor sistema',
        'type'      => array(
            'label'   => 'Vrsta dogodka:',
            'options' => array(
                'all' => 'Vse',
            )
        ),
        'day'       => 'dan',
        'week'      => 'Teden',
        'month'     => 'Mesec',
        'submit'    => 'Filter',
        'cancel'    => 'Prekliči',
        'filterBy'  => 'FILTRIRAJ PO',
    ),
    'table'     => array(
        'type'      => 'Vrsta dogodka',
        'system'    => 'Sistemski dogodek',
        'zone'      => 'Dogodek cone',
        'timestamp' => 'Datum dogodka',
    ),
    'list'      => array(
        'all'       => 'Vse',
        'allAreas'  => 'Vse particije',
        'today'     => 'Danes',
        'yesterday' => 'Včeraj',
        'empty'     => 'Ni dogodkov',
    ),
    'buttons'   => array(
        'clearFilter' => 'Počisti filter',
    ),
    'reactions' => array(
        'toggle'  => 'Sprememba stanja',
        'enable'  => 'Omogoči',
        'disable' => 'Onemogoči',
    ),
    'settings'  => array(
        'title'    => 'Seznam dogodkov',
        'titleAdd' => 'Dodaj dogodek',
        'labels'   => array(
            'active'     => 'Aktivni',
            'inactive'   => 'Neaktivni',
            'activate'   => 'Aktiviranje',
            'deactivate' => 'Deaktiviraj',
            'on'         => 'VKLOP',
            'off'        => 'IZKLOP',
            'qualifier'  => 'Kvalifikator',
            'code'       => 'Koda',
            'name'       => 'ime',
            'reaction'   => 'Reakcija',
            'nameDesc'   => 'Spremenljivke ki so na voljo: <z> - cona; <v> uporabnik',
        ),
    ),
    'titles'    => array(
        'area' => 'Particija :area',
    ),
);
