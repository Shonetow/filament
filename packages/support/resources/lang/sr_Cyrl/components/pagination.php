<?php

return [

    'label' => 'Навигација за пагинацију',

    'overview' => '{1} Приказан 1 резултат|[2,*] Приказано од :first до :last од укупно :total резултата',

    'fields' => [

        'records_per_page' => [

            'label' => 'По страници',

            'options' => [
                'all' => 'Све',
            ],

        ],

    ],

    'actions' => [

        'first' => [
            'label' => 'Прва',
        ],

        'go_to_page' => [
            'label' => 'Иди на страницу :page',
        ],

        'last' => [
            'label' => 'Последња',
        ],

        'next' => [
            'label' => 'Следећа',
        ],

        'previous' => [
            'label' => 'Претходна',
        ],

    ],

];
