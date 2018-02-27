<?php

return array(
    'filter'    => array(
        'date_from' => 'Aloituspäivämäärä',
        'date_to'   => 'Viimeinen päivämäärä',
        'system'    => 'Hälytysjärjestelmän valinta',
        'type'      => array(
            'label'   => 'Tapahtumalaji:',
            'options' => array(
                'all' => 'Kaikki',
            )
        ),
        'day'       => 'Päivä',
        'week'      => 'Viikko',
        'month'     => 'Kuukausi',
        'submit'    => 'Suodatin',
        'cancel'    => 'Peruuta',
        'filterBy'  => 'SUODATA',
    ),
    'table'     => array(
        'type'      => 'Tapahtumalaji',
        'system'    => 'Ilmoitusjärjestelmä',
        'zone'      => 'Ilmoituksen silmukka',
        'timestamp' => 'Ilmoituksen päivämäärä',
    ),
    'list'      => array(
        'all'       => 'Kaikki',
        'allAreas'  => 'Kaikki alueet',
        'today'     => 'Tänään',
        'yesterday' => 'Eilen',
        'empty'     => 'Ei ilmoituksia',
    ),
    'buttons'   => array(
        'clearFilter' => 'Tyhjennä suodatin',
    ),
    'reactions' => array(
        'toggle'  => 'Muuta tilaa',
        'enable'  => 'Ota käyttöön',
        'disable' => 'Poista käytöstä',
    ),
    'settings'  => array(
        'title'    => 'Tapahtumaluettelo',
        'titleAdd' => 'Lisää tapahtuma',
        'labels'   => array(
            'active'     => 'Aktiivinen',
            'inactive'   => 'Passiivinen',
            'activate'   => 'Aktivoi',
            'deactivate' => 'Poista käytöstä',
            'on'         => 'PÄÄLLÄ',
            'off'        => 'POIS PÄÄLTÄ',
            'qualifier'  => 'Karsinta',
            'code'       => 'Koodi',
            'name'       => 'Nimi',
            'reaction'   => 'Reaktio',
            'nameDesc'   => 'Käytettävissä olevista muuttujista: <z> - Zone; <v> - user',
        ),
    ),
    'titles'    => array(
        'area' => 'Area \':area\'',
    ),
);
