<?php

return array(
    'filter'    => array(
        'date_from' => 'Fecha de inicio',
        'date_to'   => 'Fecha de finalización',
        'system'    => 'Seleccione un objeto/sistema',
        'type'      => array(
            'label'   => 'Tipo de evento:',
            'options' => array(
                'all' => 'Todos',
            )
        ),
        'day'       => 'Día',
        'week'      => 'Semana',
        'month'     => 'Mes',
        'submit'    => 'Filtro',
        'cancel'    => 'Cancelar',
        'filterBy'  => 'FILTRAR POR',
    ),
    'table'     => array(
        'type'      => 'Tipo de evento',
        'system'    => 'Sistema de eventos',
        'zone'      => 'Zona del evento',
        'timestamp' => 'Fecha del evento',
    ),
    'list'      => array(
        'all'       => 'Todos',
        'allAreas'  => 'Todas las áreas',
        'today'     => 'Hoy',
        'yesterday' => 'Ayer',
        'empty'     => 'No hay eventos',
    ),
    'buttons'   => array(
        'clearFilter' => 'Eliminar filtro',
    ),
    'reactions' => array(
        'toggle'  => 'Cambiar estado',
        'enable'  => 'Activar',
        'disable' => 'Desactivar',
    ),
    'settings'  => array(
        'title'    => 'Lista de eventos',
        'titleAdd' => 'Añadir evento',
        'labels'   => array(
            'active'     => 'Activo',
            'inactive'   => 'Inactivo',
            'activate'   => 'Activar',
            'deactivate' => 'Desactivar',
            'on'         => 'Encendido',
            'off'        => 'Apagado',
            'qualifier'  => 'Calificador',
            'code'       => 'Código',
            'name'       => 'Nombre',
            'reaction'   => 'Reacción',
            'nameDesc'   => 'Variables disponibles: <z> - zone; <v> - user',
        ),
    ),
    'titles'    => array(
        'area' => 'Área de \':area\'',
    ),
);
