<?php

return [

    'title' => 'Регистрација',

    'heading' => 'Региструјте се',

    'actions' => [

        'login' => [
            'before' => 'или',
            'label' => 'се пријавите на свој налог',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Имејл адреса',
        ],

        'name' => [
            'label' => 'Име',
        ],

        'password' => [
            'label' => 'Лозинка',
            'validation_attribute' => 'лозинка',
        ],

        'password_confirmation' => [
            'label' => 'Потврдите лозинку',
        ],

        'actions' => [

            'register' => [
                'label' => 'Пријавите се',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Превише покушаја регистрације',
            'body' => 'Покушајте поново за :seconds секунди.',
        ],

    ],

];
