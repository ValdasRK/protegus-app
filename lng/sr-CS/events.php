<?php

return array(
    'filter'    => array(
        'date_from' => 'Starting date',
        'date_to'   => 'Ending date',
        'system'    => 'System selection',
        'type'      => array(
            'label'   => 'Tip događaja:',
            'options' => array(
                'all' => 'Sve',
            )
        ),
        'day'       => 'Dan',
        'week'      => 'Nedelja',
        'month'     => 'Mesec',
        'submit'    => 'Filter',
        'cancel'    => 'Poništi',
        'filterBy'  => 'FILTER BY',
    ),
    'table'     => array(
        'type'      => 'Tip događaja',
        'system'    => 'Event system',
        'zone'      => 'Event zone',
        'timestamp' => 'Event date',
    ),
    'list'      => array(
        'all'       => 'Sve',
        'allAreas'  => 'All areas',
        'today'     => 'Danas',
        'yesterday' => 'Juče',
        'empty'     => 'There are no events',
    ),
    'buttons'   => array(
        'clearFilter' => 'Ukloni filter',
    ),
    'reactions' => array(
        'toggle'  => 'Change state',
        'enable'  => 'Enable',
        'disable' => 'Onemogući',
    ),
    'settings'  => array(
        'title'    => 'Events List',
        'titleAdd' => 'Add event',
        'labels'   => array(
            'active'     => 'Aktivan',
            'inactive'   => 'Neaktivan',
            'activate'   => 'Aktiviraj',
            'deactivate' => 'Deaktiviraj',
            'on'         => 'ON',
            'off'        => 'OFF',
            'qualifier'  => 'Qualifier',
            'code'       => 'Kod',
            'name'       => 'Imе',
            'reaction'   => 'Reaction',
            'nameDesc'   => 'Available variables: <z> - zone; <v> - user',
        ),
    ),
    'titles'    => array(
        'area' => 'Area \':area\'',
    ),
);
