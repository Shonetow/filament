<?php

return [

    'title' => 'Resetujte vašu lozinku',

    'heading' => 'Resetujte vašu lozinku',

    'form' => [

        'email' => [
            'label' => 'Email adresa',
        ],

        'password' => [
            'label' => 'Lozinka',
            'validation_attribute' => 'lozinka',
        ],

        'password_confirmation' => [
            'label' => 'Potvrdite lozinku',
        ],

        'actions' => [

            'reset' => [
                'label' => 'Resetujte lozinku',
            ],

        ],

    ],

    'notifications' => [

        'throttled' => [
            'title' => 'Previše pokušaja resetovanja',
            'body' => 'Pokušajte ponovo za :seconds sekundi.',
        ],

    ],

];
