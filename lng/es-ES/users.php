<?php

return [
    'labels' => [
        'name'                  => 'Nombre',
        'email'                 => 'Correo electrónico',
        'active'                => 'Usuario activo',
        'changePassword'        => 'Cambiar contraseña',
        'passwordCurrent'       => 'Contraseña actual',
        'passwordNew'           => 'Nueva contraseña',
        'password'              => 'Contraseña',
        'repeatPassword'        => 'Confirme nueva contraseña',
        'role'                  => 'Tipo de usuario',
        'placeholderPassExists' => '*********',

        'allRoles'      => 'Todo tipo de usuarios',
        'superAdmins'   => 'Sólo super administradores',
        'simpleUsers'   => 'Sólo los usuarios simples',
        'activeUsers'   => 'Usuarios activos',
        'inactiveUsers' => 'Usuarios inactivos',
        'invitedUsers'  => 'Usuarios invitados',
        'searchPhrase'  => 'Buscar por nombre o correo electrónico',

        'sortBy'        => 'Ordenar por',
        'sortByNameAZ'  => 'Nombre A-Z',
        'sortByNameZA'  => 'Nombre Z-A',
        'sortByEmailAZ' => 'Correo electrónico A-Z',
        'sortByEmailZA' => 'Correo electrónico Z-A',

        'changeEmail'   => 'Cambiar correo electrónico',
        'passwordEmail' => 'Contraseña actual',
        'editUser'      => 'Editar usuario',

        'phoneNumber' => 'Número de teléfono',
        'company' => 'Empresa',
        'country' => 'País',
    ],

    'notifications' => [
        'title' => 'Configuración de notificaciones',

    ],

    'notifications-sounds' => [
        'title' => 'Cambiar a un sonido de alerta',
    ],

    'settings' => [
        'title' => 'Configuración',
        'menu'  => [
            'profile'       => 'Configuración del perfil',
            'notifications' => 'Configuración de notificaciones',
            'notifications_sounds' => 'Sonido de alerta',
            'alert'         => 'Alerta con sonido',
            'language'      => 'Idioma',
            'homePage'      => 'Página de inicio',
        ]
    ],

    'homePageSettings' => [
        'title'   => 'Configuración de página de inicio',
        'labels'  => [
            'defaultPage'   => 'Página predeterminada',
            'default'       => 'Mis sistemas',
            'defaultAction' => 'Acción predeterminada',
            'events'        => 'Todos los eventos',
        ],
        'choices' => [
            'main'    => 'Vista principal',
            'areas'   => 'Áreas',
            'events'  => 'Eventos',
            'sensors' => 'Sensores',
            'pgms'    => 'Salidas',
        ],
    ],

    'emailChangeRequested' => 'Enlace para cambiar la dirección de correo electrónico enviado a: :newEmail',

    'buttons' => [
        'save'   => 'Guardar',
        'create' => 'Crear',
        'addNew' => 'Agregar nuevo usuario',
        'cancel' => 'Cancelar',

        'search'       => 'Búscar',
        'clearFilter'  => 'Eliminar filtro',
        'filter'       => 'Filtro',
        'changeStatus' => 'Cambiar el estado',

        'edit'             => 'Editar',
        'rename'           => 'Cambiar el nombre',
        'delete'           => 'Eliminar',
        'resendActivation' => 'Reenviar correo electrónico de activación',
        'resendInvitation' => 'Reenviar el correo de invitación',
    ],

    'headers' => [
        'name'  => 'Nombre',
        'email' => 'Correo electrónico',
    ],

    'status' => [
        'active'   => 'Activo',
        'inactive' => 'Inactivo',
        'invited'  => 'Invitado',
    ],
    'angelcam' => [
        'loginSubmit'  => 'Iniciar',
        'logoutSubmit' => 'Salir',
        'title'        => 'Angelcam service',
        'loggedInText' => 'You are logged into Angelcam service.',
        'firstName'    => 'Nombre',
        'notSet'       => 'Not set',
        'lastName'     => 'Apellido',
        'phone'        => 'Teléfono',
        'logoutSubmit' => 'Logout from Angelcam',
        'userName'     => 'Angelcam username',
        'password'     => 'Angelcam password',
        'loginSubmit'  => 'Login to Angelcam',
        'signupSubmit' => 'Signup to Angelcam service',
    ],
];
