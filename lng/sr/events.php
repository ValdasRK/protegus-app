<?php

return array(
    'filter'    => array(
        'date_from' => 'Starting date',
        'date_to'   => 'Ending date',
        'system'    => 'System selection',
        'type'      => array(
            'label'   => 'Тип догађаја:',
            'options' => array(
                'all' => 'Сви',
            )
        ),
        'day'       => 'Dan',
        'week'      => 'Недеља',
        'month'     => 'Месец',
        'submit'    => 'Филтер',
        'cancel'    => 'Откажи',
        'filterBy'  => 'FILTER BY',
    ),
    'table'     => array(
        'type'      => 'Тип догађаја',
        'system'    => 'Системски догађаји',
        'zone'      => 'Doгaђaји о zonи',
        'timestamp' => 'Датум догађаја',
    ),
    'list'      => array(
        'all'       => 'Сви',
        'allAreas'  => 'Све области',
        'today'     => 'Данас',
        'yesterday' => 'Јуче',
        'empty'     => 'Нема догађаја',
    ),
    'buttons'   => array(
        'clearFilter' => 'Уклони филтер',
    ),
    'reactions' => array(
        'toggle'  => 'Promeni stanje',
        'enable'  => 'Омогући',
        'disable' => 'Онемогући',
    ),
    'settings'  => array(
        'title'    => 'Events List',
        'titleAdd' => 'Add event',
        'labels'   => array(
            'active'     => 'Active',
            'inactive'   => 'Inactive',
            'activate'   => 'Активирај',
            'deactivate' => 'Деактивирај',
            'on'         => 'УКЉУЧЕНО',
            'off'        => 'ИСКЉУЧЕНО',
            'qualifier'  => 'Квалификатор',
            'code'       => 'Šifra',
            'name'       => 'Име',
            'reaction'   => 'Реакција',
            'nameDesc'   => 'Available variables: <z> - zone; <v> - user',
        ),
    ),
    'titles'    => array(
        'area' => 'Area \':area\'',
    ),
);
