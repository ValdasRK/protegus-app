<?php

return array(
    'filter'    => array(
        'date_from' => 'Дата c',
        'date_to'   => 'Дата до',
        'system'    => 'Выберите объект',
        'type'      => array(
            'label'   => 'Тип события:',
            'options' => array(
                'all' => 'Все',
            )
        ),
        'day'       => 'День',
        'week'      => 'Неделя',
        'month'     => 'Месяц',
        'submit'    => 'Фильтр',
        'cancel'    => 'Отмена',
        'filterBy'  => 'ФИЛЬТРОВАТЬ ПО',
    ),
    'table'     => array(
        'type'      => 'Тип события',
        'system'    => 'Объект',
        'zone'      => 'Зона события',
        'timestamp' => 'Дата события',
    ),
    'list'      => array(
        'all'       => 'Все',
        'allAreas'  => 'Все партиции',
        'today'     => 'Сегодня',
        'yesterday' => 'Вчера',
        'empty'     => 'Нет событий',
    ),
    'buttons'   => array(
        'clearFilter' => 'Очистить фильтр',
    ),
    'reactions' => array(
        'toggle'  => 'Изменить статус',
        'enable'  => 'Включить',
        'disable' => 'Выключить',
    ),
    'settings'  => array(
        'title'    => 'Список событий',
        'titleAdd' => 'Добавить событие',
        'labels'   => array(
            'active'     => 'Активный',
            'inactive'   => 'Неактивный',
            'activate'   => 'Активировать',
            'deactivate' => 'Деактивировать',
            'on'         => 'ВКЛ',
            'off'        => 'ВЫКЛ',
            'qualifier'  => 'Классификатор',
            'code'       => 'Код',
            'name'       => 'Название',
            'reaction'   => 'Реакция',
            'nameDesc'   => 'Доступны переменные: <z> - зоны; <v> - пользователь',
        ),
    ),
    'titles'    => array(
        'area' => 'Партиция \':area\'',
    ),
);
