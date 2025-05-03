<?php

return [

    'title' => 'Пријава',

    'heading' => 'Пријавите се',

    'actions' => [

        'register' => [
            'before' => 'или',
            'label' => 'креирајте налог',
        ],

        'request_password_reset' => [
            'label' => 'Заборављена лозинка?',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Имејл адреса',
        ],

        'password' => [
            'label' => 'Лозинка',
        ],

        'remember' => [
            'label' => 'Запамти ме',
        ],

        'actions' => [

            'authenticate' => [
                'label' => 'Пријавите се',
            ],

        ],

    ],

    'messages' => [

        'failed' => 'Ови подаци се не поклапају са нашим записима.',

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Превише покушаја пријаве',
            'body' => 'Покушајте поново за :seconds секунди.',
        ],

    ],

];
