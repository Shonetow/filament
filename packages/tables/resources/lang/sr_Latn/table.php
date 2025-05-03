<?php

return [

    'column_toggle' => [

        'heading' => 'Kolone',

    ],

    'columns' => [

        'actions' => [
            'label' => 'Akcija|Akcije',
        ],

        'text' => [

            'actions' => [
                'collapse_list' => 'Prikaži :count manje',
                'expand_list' => 'Prikaži :count više',
            ],

            'more_list_items' => 'i još :count',

        ],

    ],

    'fields' => [

        'bulk_select_page' => [
            'label' => 'Izaberi/poništi izbor svih stavki za grupne akcije.',
        ],

        'bulk_select_record' => [
            'label' => 'Izaberi/poništi izbor stavke :key za grupne akcije.',
        ],

        'bulk_select_group' => [
            'label' => 'Izaberi/poništi izbor grupe :title za grupne akcije.',
        ],

        'search' => [
            'label' => 'Pretraga',
            'placeholder' => 'Pretraga',
            'indicator' => 'Pretraga',
        ],

    ],

    'summary' => [

        'heading' => 'Rezime',

        'subheadings' => [
            'all' => 'Sve :label',
            'group' => 'Rezime :group',
            'page' => 'Ova stranica',
        ],

        'summarizers' => [

            'average' => [
                'label' => 'Prosek',
            ],

            'count' => [
                'label' => 'Broj',
            ],

            'sum' => [
                'label' => 'Zbir',
            ],

        ],

    ],

    'actions' => [

        'disable_reordering' => [
            'label' => 'Završi ponovno uređivanje zapisa',
        ],

        'enable_reordering' => [
            'label' => 'Ponovno uredi zapise',
        ],

        'filter' => [
            'label' => 'Filter',
        ],

        'group' => [
            'label' => 'Grupa',
        ],

        'open_bulk_actions' => [
            'label' => 'Grupne akcije',
        ],

        'toggle_columns' => [
            'label' => 'Podesi kolone',
        ],

    ],

    'empty' => [

        'heading' => 'Nema :model',

        'description' => 'Napravi :model da započneš.',

    ],

    'filters' => [

        'actions' => [

            'apply' => [
                'label' => 'Primeni filtere',
            ],

            'remove' => [
                'label' => 'Ukloni filter',
            ],

            'remove_all' => [
                'label' => 'Ukloni sve filtere',
                'tooltip' => 'Ukloni sve filtere',
            ],

            'reset' => [
                'label' => 'Resetuj',
            ],

        ],

        'heading' => 'Filteri',

        'indicator' => 'Aktivni filteri',

        'multi_select' => [
            'placeholder' => 'Sve',
        ],

        'select' => [
            'placeholder' => 'Sve',
        ],

        'trashed' => [

            'label' => 'Obrisani zapisi',

            'only_trashed' => 'Samo obrisani zapisi',

            'with_trashed' => 'Sa obrisanim zapisima',

            'without_trashed' => 'Bez obrisanih zapisa',

        ],

    ],

    'grouping' => [

        'fields' => [

            'group' => [
                'label' => 'Grupiši po',
                'placeholder' => 'Grupiši po',
            ],

            'direction' => [

                'label' => 'Smer grupisanja',

                'options' => [
                    'asc' => 'Rastuće',
                    'desc' => 'Opadajuće',
                ],

            ],

        ],

    ],

    'reorder_indicator' => 'Prevuci i otpusti zapise da poređaš.',

    'selection_indicator' => [

        'selected_count' => '1 zapis izabran|:count zapisa izabrano',

        'actions' => [

            'select_all' => [
                'label' => 'Izaberi svih :count',
            ],

            'deselect_all' => [
                'label' => 'Poništi izbor svih',
            ],

        ],

    ],

    'sorting' => [

        'fields' => [

            'column' => [
                'label' => 'Sortiraj po',
            ],

            'direction' => [

                'label' => 'Smer sortiranja',

                'options' => [
                    'asc' => 'Rastuće',
                    'desc' => 'Opadajuće',
                ],

            ],

        ],

    ],

];
