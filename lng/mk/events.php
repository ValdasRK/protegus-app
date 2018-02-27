<?php

return array(
    'filter'    => array(
        'date_from' => 'Почетен датум',
        'date_to'   => 'Краен датум',
        'system'    => 'Избирање на систем',
        'type'      => array(
            'label'   => 'Вид на настан:',
            'options' => array(
                'all' => 'Сите',
            )
        ),
        'day'       => 'Ден',
        'week'      => 'Недела',
        'month'     => 'Месец',
        'submit'    => 'Филтер',
        'cancel'    => 'Откажи',
        'filterBy'  => 'ФИЛТРИРАЈ ПО',
    ),
    'table'     => array(
        'type'      => 'Вид на настан',
        'system'    => 'Настан во системот',
        'zone'      => 'Настан во зона',
        'timestamp' => 'Датум на настанот',
    ),
    'list'      => array(
        'all'       => 'Сите',
        'allAreas'  => 'Сите области',
        'today'     => 'Денес',
        'yesterday' => 'Вчера',
        'empty'     => 'Нема настани',
    ),
    'buttons'   => array(
        'clearFilter' => 'Исчисти филтер',
    ),
    'reactions' => array(
        'toggle'  => 'Промени го статусот',
        'enable'  => 'Овозможи',
        'disable' => 'Оневозможи',
    ),
    'settings'  => array(
        'title'    => 'Попис на настани',
        'titleAdd' => 'Додади настан',
        'labels'   => array(
            'active'     => 'Активен',
            'inactive'   => 'Неактивен',
            'activate'   => 'Активирај',
            'deactivate' => 'Деактивирај',
            'on'         => 'ВКЛУЧИ',
            'off'        => 'ИСКЛУЧИ',
            'qualifier'  => 'Квалификатор',
            'code'       => 'Код',
            'name'       => 'Име',
            'reaction'   => 'Реакција',
            'nameDesc'   => 'Достапни варијабли: <z>- зона; <v>- корисник',
        ),
    ),
    'titles'    => array(
        'area' => 'Област \':area\'',
    ),
);
