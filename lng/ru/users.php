<?php

return [
    'labels' => [
        'name'                  => 'Название',
        'email'                 => 'Электронная почта',
        'active'                => 'Пользователь активирован',
        'changePassword'        => 'Изменить пароль',
        'passwordCurrent'       => 'Текущий пароль',
        'passwordNew'           => 'Новый пароль',
        'password'              => 'Пароль',
        'repeatPassword'        => 'Подтвердите новый пароль',
        'role'                  => 'Тип пользователя',
        'placeholderPassExists' => '*********',

        'allRoles'      => 'Все типы пользователей',
        'superAdmins'   => 'Только супер-администраторы',
        'simpleUsers'   => 'Только обычные пользователи',
        'activeUsers'   => 'Активные пользователи',
        'inactiveUsers' => 'Неактивные пользователи',
        'invitedUsers'  => 'Приглашенные пользователи',
        'searchPhrase'  => 'Поиск по имени или по эл. почте',

        'sortBy'        => 'Сортировать по',
        'sortByNameAZ'  => 'Имя А-Я',
        'sortByNameZA'  => 'Имя Я-А',
        'sortByEmailAZ' => 'Электронная почта А-Я',
        'sortByEmailZA' => 'Электронная почта Я-А',

        'changeEmail'   => 'Изменить адрес эл. почты',
        'passwordEmail' => 'Текущий пароль',
        'editUser'      => 'Изменить пользователя',

        'phoneNumber' => 'Hомер телефона',
        'company' => 'Компания',
        'country' => 'Страна',
    ],

    'notifications' => [
        'title' => 'Параметры сообщений',

    ],

    'notifications-sounds' => [
        'title' => 'Параметры звуковых уведомлений',
    ],

    'settings' => [
        'title' => 'Настройки',
        'menu'  => [
            'profile'       => 'Настройки профиля',
            'notifications' => 'Параметры сообщений',
            'notifications_sounds' => 'Параметры звуковых уведомлений',
            'alert'         => 'Звук сообщения',
            'language'      => 'Язык',
            'homePage'      => 'Главная страница',
        ]
    ],

    'homePageSettings' => [
        'title'   => 'Настройки главной страницы',
        'labels'  => [
            'defaultPage'   => 'Страница по умолчанию',
            'default'       => 'Мои объекты',
            'defaultAction' => 'Действие по умолчанию',
            'events'        => 'Все события',
        ],
        'choices' => [
            'main'    => 'Основной вид',
            'areas'   => 'Партиции',
            'events'  => 'События',
            'sensors' => 'Сенсоры',
            'pgms'    => 'Выходы',
        ],
    ],

    'emailChangeRequested' => 'Ссылка для замены адреса электронной почты выслана на: :newEmail',

    'buttons' => [
        'save'   => 'Сохранить',
        'create' => 'Создать',
        'addNew' => 'Добавить нового пользователя',
        'cancel' => 'Отмена',

        'search'       => 'Поиск',
        'clearFilter'  => 'Очистить фильтр',
        'filter'       => 'Фильтр',
        'changeStatus' => 'Изменить статус',

        'edit'             => 'Изменить',
        'rename'           => 'Переименовать',
        'delete'           => 'Удалить',
        'resendActivation' => 'Повторно выслать активацию',
        'resendInvitation' => 'Повторно выслать прилашение',
    ],

    'headers' => [
        'name'  => 'Имя',
        'email' => 'Эл. почта',
    ],

    'status' => [
        'active'   => 'Активный',
        'inactive' => 'Неактивный',
        'invited'  => 'Приглашен',
    ],
    'angelcam' => [
        'loginSubmit'  => 'Вход',
        'logoutSubmit' => 'Выйти',
        'title'        => 'Angelcam service',
        'loggedInText' => 'You are logged into Angelcam service.',
        'firstName'    => 'Имя',
        'notSet'       => 'Not set',
        'lastName'     => 'Фамилия',
        'phone'        => 'Телефон',
        'logoutSubmit' => 'Logout from Angelcam',
        'userName'     => 'Angelcam username',
        'password'     => 'Angelcam password',
        'loginSubmit'  => 'Login to Angelcam',
        'signupSubmit' => 'Signup to Angelcam service',
    ],
];
