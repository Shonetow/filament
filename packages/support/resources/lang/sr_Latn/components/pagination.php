<?php

return [

    'label' => 'Navigacija za paginaciju',

    'overview' => '{1} Prikazan 1 rezultat|[2,*] Prikazano od :first do :last od ukupno :total rezultata',

    'fields' => [

        'records_per_page' => [

            'label' => 'Po stranici',

            'options' => [
                'all' => 'Sve',
            ],

        ],

    ],

    'actions' => [

        'first' => [
            'label' => 'Prva',
        ],

        'go_to_page' => [
            'label' => 'Idi na stranicu :page',
        ],

        'last' => [
            'label' => 'Poslednja',
        ],

        'next' => [
            'label' => 'Sledeća',
        ],

        'previous' => [
            'label' => 'Prethodna',
        ],

    ],

];
