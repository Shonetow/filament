<?php

return [

    'title' => 'Prijava',

    'heading' => 'Prijavite se',

    'actions' => [

        'register' => [
            'before' => 'ili',
            'label' => 'kreirajte nalog',
        ],

        'request_password_reset' => [
            'label' => 'Zaboravljena lozinka?',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Email adresa',
        ],

        'password' => [
            'label' => 'Lozinka',
        ],

        'remember' => [
            'label' => 'Zapamti me',
        ],

        'actions' => [

            'authenticate' => [
                'label' => 'Prijavite se',
            ],

        ],

    ],

    'messages' => [

        'failed' => 'Ovi podaci se ne poklapaju sa našim zapisima.',

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Previše pokušaja prijave',
            'body' => 'Pokušajte ponovo za :seconds sekundi.',
        ],

    ],

];
