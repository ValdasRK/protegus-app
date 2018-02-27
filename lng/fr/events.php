<?php

return array(
    'filter'    => array(
        'date_from' => 'Date de début',
        'date_to'   => 'Date de fin',
        'system'    => 'Sélection du système',
        'type'      => array(
            'label'   => 'Type d\'évènement :',
            'options' => array(
                'all' => 'Tout',
            )
        ),
        'day'       => 'Jour',
        'week'      => 'Semaine',
        'month'     => 'Mois',
        'submit'    => 'Filtre',
        'cancel'    => 'Annuler',
        'filterBy'  => 'FILTRER PAR',
    ),
    'table'     => array(
        'type'      => 'Type d\'événement',
        'system'    => 'Système d\'évènement',
        'zone'      => 'Zone de l\'évènement',
        'timestamp' => 'Date de l\'évènement',
    ),
    'list'      => array(
        'all'       => 'Tout',
        'allAreas'  => 'Tous les secteurs',
        'today'     => 'Aujourd\'hui',
        'yesterday' => 'Hier',
        'empty'     => 'Il n\'y a aucun évènement',
    ),
    'buttons'   => array(
        'clearFilter' => 'Effacer le filtre',
    ),
    'reactions' => array(
        'toggle'  => 'Changer le statut',
        'enable'  => 'Activer',
        'disable' => 'Désactiver',
    ),
    'settings'  => array(
        'title'    => 'Liste d\'événements',
        'titleAdd' => 'Ajouter un évènement',
        'labels'   => array(
            'active'     => 'Actif',
            'inactive'   => 'Inactif',
            'activate'   => 'Activer',
            'deactivate' => 'Désactiver',
            'on'         => 'ACTIVÉ',
            'off'        => 'DÉSACTIVÉ',
            'qualifier'  => 'Qualificateur',
            'code'       => 'Code',
            'name'       => 'Nom',
            'reaction'   => 'Réaction',
            'nameDesc'   => 'Variables disponibles : <z> - zone; <v> - utilisateur',
        ),
    ),
    'titles'    => array(
        'area' => 'Domaine « :area »',
    ),
);
