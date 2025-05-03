<?php

return [

    'title' => 'Ресетујте вашу лозинку',

    'heading' => 'Ресетујте вашу лозинку',

    'form' => [

        'email' => [
            'label' => 'Имејл адреса',
        ],

        'password' => [
            'label' => 'Лозинка',
            'validation_attribute' => 'лозинка',
        ],

        'password_confirmation' => [
            'label' => 'Потврдите лозинку',
        ],

        'actions' => [

            'reset' => [
                'label' => 'Ресетујте лозинку',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Превише покушаја ресетовања',
            'body' => 'Покушајте поново за :seconds секунди.',
        ],

    ],

];
