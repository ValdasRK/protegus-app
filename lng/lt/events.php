<?php

return array(
    'filter'    => array(
        'date_from' => 'Data Nuo',
        'date_to'   => 'Data Iki',
        'system'    => 'Pasirinkite Objektą/Sistemą',
        'type'      => array(
            'label'   => 'Įvykio tipas:',
            'options' => array(
                'all' => 'Visi',
            )
        ),
        'day'       => 'Diena',
        'week'      => 'Savaitė',
        'month'     => 'Mėnuo',
        'submit'    => 'Filtras',
        'cancel'    => 'Atšaukti',
        'filterBy'  => 'FILTRUOTI PAGAL',
    ),
    'table'     => array(
        'type'      => 'Įvykio tipas',
        'system'    => 'Objektas/Sistema',
        'zone'      => 'Įvykio zona',
        'timestamp' => 'Įvykio data',
    ),
    'list'      => array(
        'all'       => 'Visi',
        'allAreas'  => 'Visos sritys',
        'today'     => 'Šiandien',
        'yesterday' => 'Vakar',
        'empty'     => 'Įvykių nėra',
    ),
    'buttons'   => array(
        'clearFilter' => 'Išvalyti filtrą',
    ),
    'reactions' => array(
        'toggle'  => 'Pakeisti būseną',
        'enable'  => 'Įjingti',
        'disable' => 'Išjungti',
    ),
    'settings'  => array(
        'title'    => 'Įvykių Sąrašas',
        'titleAdd' => 'Pridėti įvykį',
        'labels'   => array(
            'active'     => 'Aktyvus',
            'inactive'   => 'Neaktyvus',
            'activate'   => 'Aktyvuoti',
            'deactivate' => 'Deaktyvuoti',
            'on'         => 'ON',
            'off'        => 'OFF',
            'qualifier'  => 'Klasifikatorius',
            'code'       => 'Kodas',
            'name'       => 'Pavadinimas',
            'reaction'   => 'Reakcija',
            'nameDesc'   => 'Galimi kintamieji: <z> - zona; <v> - vartotojas',
        ),
    ),
    'titles'    => array(
        'area' => 'Sritis \':area\'',
    ),
);
