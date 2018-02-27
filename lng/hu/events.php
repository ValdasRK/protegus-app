<?php

return array(
    'filter'    => array(
        'date_from' => 'Kezdő dátum',
        'date_to'   => 'Befejezés dátuma',
        'system'    => 'Rendszer kiválasztása',
        'type'      => array(
            'label'   => 'Esemény típus:',
            'options' => array(
                'all' => 'Minden',
            )
        ),
        'day'       => 'Nap',
        'week'      => 'Hét',
        'month'     => 'Hónap',
        'submit'    => 'Szűrő',
        'cancel'    => 'Mégse',
        'filterBy'  => 'SZŰRÉS',
    ),
    'table'     => array(
        'type'      => 'Esemény típus',
        'system'    => 'Esemény rendszere',
        'zone'      => 'Esemény zóna',
        'timestamp' => 'Esemény dátuma',
    ),
    'list'      => array(
        'all'       => 'Minden',
        'allAreas'  => 'Minden partíció',
        'today'     => 'Ma',
        'yesterday' => 'Tegnap',
        'empty'     => 'Nincsenek események',
    ),
    'buttons'   => array(
        'clearFilter' => 'Szűrő törlése',
    ),
    'reactions' => array(
        'toggle'  => 'Állapot módosítása',
        'enable'  => 'Engedélyezés',
        'disable' => 'Letiltás',
    ),
    'settings'  => array(
        'title'    => 'Eseménylista',
        'titleAdd' => 'Esemény hozzáadása',
        'labels'   => array(
            'active'     => 'Aktív',
            'inactive'   => 'Inaktív',
            'activate'   => 'Bekapcsolás',
            'deactivate' => 'Kikapcsolás',
            'on'         => 'BE',
            'off'        => 'KI',
            'qualifier'  => 'Minősítő',
            'code'       => 'Kód',
            'name'       => 'Név',
            'reaction'   => 'Reakció',
            'nameDesc'   => 'Elérhető változók: <z>- zóna; <v>- felhasználó',
        ),
    ),
    'titles'    => array(
        'area' => 'Partíció \':area\'',
    ),
);
