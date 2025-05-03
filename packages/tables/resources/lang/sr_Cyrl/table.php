<?php

return [

    'column_toggle' => [

        'heading' => 'Колоне',

    ],

    'columns' => [

        'actions' => [
            'label' => 'Акција|Акције',
        ],

        'text' => [

            'actions' => [
                'collapse_list' => 'Прикажи :count мање',
                'expand_list' => 'Прикажи :count више',
            ],

            'more_list_items' => 'и још :count',

        ],

    ],

    'fields' => [

        'bulk_select_page' => [
            'label' => 'Изабери/поништи избор свих ставки за групне акције.',
        ],

        'bulk_select_record' => [
            'label' => 'Изабери/поништи избор ставке :key за групне акције.',
        ],

        'bulk_select_group' => [
            'label' => 'Изабери/поништи избор групе :title за групне акције.',
        ],

        'search' => [
            'label' => 'Претрага',
            'placeholder' => 'Претрага',
            'indicator' => 'Претрага',
        ],

    ],

    'summary' => [

        'heading' => 'Резиме',

        'subheadings' => [
            'all' => 'Све :label',
            'group' => 'Резиме :group',
            'page' => 'Ова страница',
        ],

        'summarizers' => [

            'average' => [
                'label' => 'Просек',
            ],

            'count' => [
                'label' => 'Број',
            ],

            'sum' => [
                'label' => 'Збир',
            ],

        ],

    ],

    'actions' => [

        'disable_reordering' => [
            'label' => 'Заврши поновно уређивање записа',
        ],

        'enable_reordering' => [
            'label' => 'Поновно уреди записе',
        ],

        'filter' => [
            'label' => 'Филтер',
        ],

        'group' => [
            'label' => 'Група',
        ],

        'open_bulk_actions' => [
            'label' => 'Групне акције',
        ],

        'toggle_columns' => [
            'label' => 'Подеси колоне',
        ],

    ],

    'empty' => [

        'heading' => 'Нема :model',

        'description' => 'Направи :model да започнеш.',

    ],

    'filters' => [

        'actions' => [

            'apply' => [
                'label' => 'Примени филтере',
            ],

            'remove' => [
                'label' => 'Уклони филтер',
            ],

            'remove_all' => [
                'label' => 'Уклони све филтере',
                'tooltip' => 'Уклони све филтере',
            ],

            'reset' => [
                'label' => 'Ресетуј',
            ],

        ],

        'heading' => 'Филтери',

        'indicator' => 'Активни филтери',

        'multi_select' => [
            'placeholder' => 'Све',
        ],

        'select' => [
            'placeholder' => 'Све',
        ],

        'trashed' => [

            'label' => 'Обрисани записи',

            'only_trashed' => 'Само обрисани записи',

            'with_trashed' => 'Са обрисаним записима',

            'without_trashed' => 'Без обрисаних записа',

        ],

    ],

    'grouping' => [

        'fields' => [

            'group' => [
                'label' => 'Групиши по',
                'placeholder' => 'Групиши по',
            ],

            'direction' => [

                'label' => 'Смер груписања',

                'options' => [
                    'asc' => 'Растуће',
                    'desc' => 'Опадајуће',
                ],

            ],

        ],

    ],

    'reorder_indicator' => 'Превуци и отпусти записе да поређаш.',

    'selection_indicator' => [

        'selected_count' => '1 запис изабран|:count записа изабрано',

        'actions' => [

            'select_all' => [
                'label' => 'Изабери свих :count',
            ],

            'deselect_all' => [
                'label' => 'Поништи избор свих',
            ],

        ],

    ],

    'sorting' => [

        'fields' => [

            'column' => [
                'label' => 'Сортирај по',
            ],

            'direction' => [

                'label' => 'Смер сортирања',

                'options' => [
                    'asc' => 'Растуће',
                    'desc' => 'Опадајуће',
                ],

            ],

        ],

    ],

];
