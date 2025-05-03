<?php

return [

    'label' => 'Uvoz :label',

    'modal' => [

        'heading' => 'Uvoz :label',

        'form' => [

            'file' => [

                'label' => 'Datoteka',

                'placeholder' => 'Otpremite CSV datoteku',

                'rules' => [
                    'duplicate_columns' => '{0} Datoteka ne sme da sadrži više od jednog praznog zaglavlja kolone.|{1,*} Datoteka ne sme da sadrži duplikate u zaglavljima kolona: :columns.',
                ],

            ],

            'columns' => [
                'label' => 'Kolone',
                'placeholder' => 'Izaberite kolonu',
            ],

        ],

        'actions' => [

            'download_example' => [
                'label' => 'Preuzmite primer CSV datoteke',
            ],

            'import' => [
                'label' => 'Uvoz',
            ],

        ],

    ],

    'notifications' => [

        'completed' => [

            'title' => 'Uvoz završen',

            'actions' => [

                'download_failed_rows_csv' => [
                    'label' => 'Preuzmite informacije o neuspešnom redu|Preuzmite informacije o neuspešnim redovima',
                ],

            ],

        ],

        'max_rows' => [
            'title' => 'Otpremljena CSV datoteka je prevelika',
            'body' => 'Nije dozvoljeno uvoziti više od 1 reda odjednom.|Nije dozvoljeno uvoziti više od :count redova odjednom.',
        ],

        'started' => [
            'title' => 'Uvoz započet',
            'body' => 'Vaš uvoz je započet i obrađivaće se 1 red u pozadini.|Vaš uvoz je započet i obrađivaće se :count redova u pozadini.',
        ],

    ],

    'example_csv' => [
        'file_name' => ':importer-primer',
    ],

    'failure_csv' => [
        'file_name' => 'uvoz-:import_id-:csv_name-neuspesni-redovi',
        'error_header' => 'greška',
        'system_error' => 'Sistemska greška, molimo kontaktirajte podršku.',
        'column_mapping_required_for_new_record' => 'Kolona :attribute nije mapirana na kolonu u datoteci, ali je obavezna za kreiranje novih zapisa.',
    ],

];
