<?php

return [

    'title' => 'Registracija',

    'heading' => 'Registrujte se',

    'actions' => [

        'login' => [
            'before' => 'ili',
            'label' => 'se prijavite na svoj nalog',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'Email adresa',
        ],

        'name' => [
            'label' => 'Ime',
        ],

        'password' => [
            'label' => 'Lozinka',
            'validation_attribute' => 'lozinka',
        ],

        'password_confirmation' => [
            'label' => 'Potvrdite lozinku',
        ],

        'actions' => [

            'register' => [
                'label' => 'Prijavite se',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Previše pokušaja registracije',
            'body' => 'Pokušajte ponovo za :seconds sekundi.',
        ],

    ],

];
