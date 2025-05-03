<?php

return [

    'label' => 'Увоз :label',

    'modal' => [

        'heading' => 'Увоз :label',

        'form' => [

            'file' => [

                'label' => 'Датотека',

                'placeholder' => 'Отпремите CSV датотеку',

                'rules' => [
                    'duplicate_columns' => '{0} Датотека не сме да садржи више од једног празног заглавља колоне.|{1,*} Датотека не сме да садржи дупликате у заглављима колона: :columns.',
                ],

            ],

            'columns' => [
                'label' => 'Колоне',
                'placeholder' => 'Изаберите колону',
            ],

        ],

        'actions' => [

            'download_example' => [
                'label' => 'Преузмите пример CSV датотеке',
            ],

            'import' => [
                'label' => 'Увоз',
            ],

        ],

    ],

    'notifications' => [

        'completed' => [

            'title' => 'Увоз завршен',

            'actions' => [

                'download_failed_rows_csv' => [
                    'label' => 'Преузмите информације о неуспешном реду|Преузмите информације о неуспешним редовима',
                ],

            ],

        ],

        'max_rows' => [
            'title' => 'Отпремљена CSV датотека је превелика',
            'body' => 'Није дозвољено увозити више од 1 реда одједном.|Није дозвољено увозити више од :count редова одједном.',
        ],

        'started' => [
            'title' => 'Увоз започет',
            'body' => 'Ваш увоз је започет и обрађиваће се 1 ред у позадини.|Ваш увоз је започет и обрађиваће се :count редова у позадини.',
        ],

    ],

    'example_csv' => [
        'file_name' => ':importer-пример',
    ],

    'failure_csv' => [
        'file_name' => 'uvoz-:import_id-:csv_name-neuspesni-redovi',
        'error_header' => 'greška',
        'system_error' => 'Системска грешка, молимо контактирајте подршку.',
        'column_mapping_required_for_new_record' => 'Колона :attribute није мапирана на колону у датотеци, али је обавезна за креирање нових записа.',
    ],

];
