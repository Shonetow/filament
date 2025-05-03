<?php

return [

    'label' => 'Izvezi :label',

    'modal' => [

        'heading' => 'Izvezi :label',

        'form' => [

            'columns' => [

                'label' => 'Kolone',

                'form' => [

                    'is_enabled' => [
                        'label' => ':column omogućeno',
                    ],

                    'label' => [
                        'label' => ':column oznaka',
                    ],

                ],

            ],

        ],

        'actions' => [

            'export' => [
                'label' => 'Izvezi',
            ],

        ],

    ],

    'notifications' => [

        'completed' => [

            'title' => 'Izvoz završen',

            'actions' => [

                'download_csv' => [
                    'label' => 'Preuzmi .csv',
                ],

                'download_xlsx' => [
                    'label' => 'Preuzmi .xlsx',
                ],

            ],

        ],

        'max_rows' => [
            'title' => 'Izvoz je prevelik',
            'body' => 'Ne možete izvesti više od jednog reda odjednom.|Ne možete izvesti više od :count redova odjednom.',
        ],

        'started' => [
            'title' => 'Izvoz započet',
            'body' => 'Vaš izvoz je započet i jedan red će biti obrađen u pozadini. Dobićete obaveštenje sa linkom za preuzimanje kada bude završeno.|Vaš izvoz je započet i :count redova će biti obrađeno u pozadini. Dobićete obaveštenje sa linkom za preuzimanje kada bude završeno.',
        ],

    ],

    'file_name' => 'izvoz-:export_id-:model',

];
