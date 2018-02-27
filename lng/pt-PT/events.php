<?php

return array(
    'filter'    => array(
        'date_from' => 'Starting date',
        'date_to'   => 'Ending date',
        'system'    => 'System selection',
        'type'      => array(
            'label'   => 'Event type:',
            'options' => array(
                'all' => 'All',
            )
        ),
        'day'       => 'Day',
        'week'      => 'Week',
        'month'     => 'Month',
        'submit'    => 'Filter',
        'cancel'    => 'Cancelar',
        'filterBy'  => 'FILTER BY',
    ),
    'table'     => array(
        'type'      => 'Event type',
        'system'    => 'Event system',
        'zone'      => 'Event zone',
        'timestamp' => 'Event date',
    ),
    'list'      => array(
        'all'       => 'All',
        'allAreas'  => 'All areas',
        'today'     => 'Today',
        'yesterday' => 'Yesterday',
        'empty'     => 'There are no events',
    ),
    'buttons'   => array(
        'clearFilter' => 'Clear filter',
    ),
    'reactions' => array(
        'toggle'  => 'Change state',
        'enable'  => 'Enable',
        'disable' => 'Disable',
    ),
    'settings'  => array(
        'title'    => 'Events List',
        'titleAdd' => 'Add event',
        'labels'   => array(
            'active'     => 'Active',
            'inactive'   => 'Inactive',
            'activate'   => 'Activate',
            'deactivate' => 'Deactivate',
            'on'         => 'ON',
            'off'        => 'OFF',
            'qualifier'  => 'Qualifier',
            'code'       => 'Code',
            'name'       => 'Name',
            'reaction'   => 'Reaction',
            'nameDesc'   => 'Available variables: <z> - zone; <v> - user',
        ),
    ),
    'titles'    => array(
        'area' => 'Area \':area\'',
    ),
);
