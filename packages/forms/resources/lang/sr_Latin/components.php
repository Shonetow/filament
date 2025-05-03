<?php

return [

    'builder' => [

        'actions' => [

            'clone' => [
                'label' => 'Kloniraj',
            ],

            'add' => [

                'label' => 'Dodaj u :label',

                'modal' => [

                    'heading' => 'Dodaj u :label',

                    'actions' => [

                        'add' => [
                            'label' => 'Dodaj',
                        ],

                    ],

                ],

            ],

            'add_between' => [

                'label' => 'Ubaci između blokova',

                'modal' => [

                    'heading' => 'Dodaj u :label',

                    'actions' => [

                        'add' => [
                            'label' => 'Dodaj',
                        ],

                    ],

                ],

            ],

            'delete' => [
                'label' => 'Obriši',
            ],

            'edit' => [

                'label' => 'Izmeni',

                'modal' => [

                    'heading' => 'Izmeni blok',

                    'actions' => [

                        'save' => [
                            'label' => 'Sačuvaj izmene',
                        ],

                    ],

                ],

            ],

            'reorder' => [
                'label' => 'Pomeranje',
            ],

            'move_down' => [
                'label' => 'Pomeri dole',
            ],

            'move_up' => [
                'label' => 'Pomeri gore',
            ],

            'collapse' => [
                'label' => 'Sažmi',
            ],

            'expand' => [
                'label' => 'Proširi',
            ],

            'collapse_all' => [
                'label' => 'Sažmi sve',
            ],

            'expand_all' => [
                'label' => 'Proširi sve',
            ],

        ],

    ],

    'checkbox_list' => [

        'actions' => [

            'deselect_all' => [
                'label' => 'Poništi izbor svih',
            ],

            'select_all' => [
                'label' => 'Izaberi sve',
            ],

        ],

    ],

    'file_upload' => [

        'editor' => [

            'actions' => [

                'cancel' => [
                    'label' => 'Otkaži',
                ],

                'drag_crop' => [
                    'label' => 'Režim povlačenja "obseci"',
                ],

                'drag_move' => [
                    'label' => 'Režim povlačenja "pomeri"',
                ],

                'flip_horizontal' => [
                    'label' => 'Horizontalno okreni sliku',
                ],

                'flip_vertical' => [
                    'label' => 'Vertikalno okreni sliku',
                ],

                'move_down' => [
                    'label' => 'Pomeri sliku dole',
                ],

                'move_left' => [
                    'label' => 'Pomeri sliku levo',
                ],

                'move_right' => [
                    'label' => 'Pomeri sliku desno',
                ],

                'move_up' => [
                    'label' => 'Pomeri sliku gore',
                ],

                'reset' => [
                    'label' => 'Resetuj',
                ],

                'rotate_left' => [
                    'label' => 'Rotiraj sliku ulevo',
                ],

                'rotate_right' => [
                    'label' => 'Rotiraj sliku udesno',
                ],

                'set_aspect_ratio' => [
                    'label' => 'Postavi odnos širine i visine na :ratio',
                ],

                'save' => [
                    'label' => 'Sačuvaj',
                ],

                'zoom_100' => [
                    'label' => 'Zumiraj sliku na 100%',
                ],

                'zoom_in' => [
                    'label' => 'Uvećaj',
                ],

                'zoom_out' => [
                    'label' => 'Umanji',
                ],

            ],

            'fields' => [

                'height' => [
                    'label' => 'Visina',
                    'unit' => 'px',
                ],

                'rotation' => [
                    'label' => 'Rotacija',
                    'unit' => 'stepeni',
                ],

                'width' => [
                    'label' => 'Širina',
                    'unit' => 'px',
                ],

                'x_position' => [
                    'label' => 'X',
                    'unit' => 'px',
                ],

                'y_position' => [
                    'label' => 'Y',
                    'unit' => 'px',
                ],

            ],

            'aspect_ratios' => [

                'label' => 'Odnosi širine i visine',

                'no_fixed' => [
                    'label' => 'Slobodno',
                ],

            ],

            'svg' => [

                'messages' => [
                    'confirmation' => 'Uređivanje SVG fajlova se ne preporučuje jer može dovesti do gubitka kvaliteta prilikom skaliranja.\n Da li ste sigurni da želite da nastavite?',
                    'disabled' => 'Uređivanje SVG fajlova je onemogućeno jer to može uzrokovati gubitak kvaliteta prilikom skaliranja.',
                ],

            ],

        ],

    ],

    'key_value' => [

        'actions' => [

            'add' => [
                'label' => 'Dodaj red',
            ],

            'delete' => [
                'label' => 'Obriši red',
            ],

            'reorder' => [
                'label' => 'Preuredi red',
            ],

        ],

        'fields' => [

            'key' => [
                'label' => 'Ključ',
            ],

            'value' => [
                'label' => 'Vrednost',
            ],

        ],

    ],

    'markdown_editor' => [

        'toolbar_buttons' => [
            'attach_files' => 'Priloži fajlove',
            'blockquote' => 'Citat',
            'bold' => 'Podebljano',
            'bullet_list' => 'Lista sa oznakama',
            'code_block' => 'Kod blok',
            'heading' => 'Naslov',
            'italic' => 'Kurziv',
            'link' => 'Link',
            'ordered_list' => 'Numerisana lista',
            'redo' => 'Ponovi',
            'strike' => 'Precrtano',
            'table' => 'Tabela',
            'undo' => 'Poništi',
        ],

    ],

    'radio' => [

        'boolean' => [
            'true' => 'Da',
            'false' => 'Ne',
        ],

    ],

    'repeater' => [

        'actions' => [

            'add' => [
                'label' => 'Dodaj u :label',
            ],

            'add_between' => [
                'label' => 'Ubaci između',
            ],

            'delete' => [
                'label' => 'Obriši',
            ],

            'clone' => [
                'label' => 'Kloniraj',
            ],

            'reorder' => [
                'label' => 'Pomeranje',
            ],

            'move_down' => [
                'label' => 'Pomeri dole',
            ],

            'move_up' => [
                'label' => 'Pomeri gore',
            ],

            'collapse' => [
                'label' => 'Sažmi',
            ],

            'expand' => [
                'label' => 'Proširi',
            ],

            'collapse_all' => [
                'label' => 'Sažmi sve',
            ],

            'expand_all' => [
                'label' => 'Proširi sve',
            ],

        ],

    ],

    'rich_editor' => [

        'dialogs' => [

            'link' => [

                'actions' => [
                    'link' => 'Linkuj',
                    'unlink' => 'Ukloni link',
                ],

                'label' => 'URL',

                'placeholder' => 'Unesite URL',

            ],

        ],

        'toolbar_buttons' => [
            'attach_files' => 'Priloži fajlove',
            'blockquote' => 'Citat',
            'bold' => 'Podebljano',
            'bullet_list' => 'Lista sa oznakama',
            'code_block' => 'Kod blok',
            'h1' => 'Naslov',
            'h2' => 'Podnaslov',
            'h3' => 'Manji podnaslov',
            'italic' => 'Kurziv',
            'link' => 'Link',
            'ordered_list' => 'Numerisana lista',
            'redo' => 'Ponovi',
            'strike' => 'Precrtano',
            'underline' => 'Podvučeno',
            'undo' => 'Poništi',
        ],

    ],

    'select' => [

        'actions' => [

            'create_option' => [

                'label' => 'Napravi',

                'modal' => [

                    'heading' => 'Napravi',

                    'actions' => [

                        'create' => [
                            'label' => 'Napravi',
                        ],

                        'create_another' => [
                            'label' => 'Napravi i dodaj još jedno',
                        ],

                    ],

                ],

            ],

            'edit_option' => [

                'label' => 'Izmeni',

                'modal' => [

                    'heading' => 'Izmeni',

                    'actions' => [

                        'save' => [
                            'label' => 'Sačuvaj',
                        ],

                    ],

                ],

            ],

        ],

        'boolean' => [
            'true' => 'Da',
            'false' => 'Ne',
        ],

        'loading_message' => 'Učitavanje...',

        'max_items_message' => 'Maksimalno :count može biti izabrano.',

        'no_search_results_message' => 'Nema rezultata pretrage koji odgovaraju.',

        'placeholder' => 'Izaberi opciju',

        'searching_message' => 'Pretraga...',

        'search_prompt' => 'Počnite da kucate kako biste pretražili...',

    ],

    'tags_input' => [
        'placeholder' => 'Novi tag',
    ],

    'text_input' => [

        'actions' => [

            'hide_password' => [
                'label' => 'Sakrij lozinku',
            ],

            'show_password' => [
                'label' => 'Prikaži lozinku',
            ],

        ],

    ],

    'toggle_buttons' => [

        'boolean' => [
            'true' => 'Da',
            'false' => 'Ne',
        ],

    ],

    'wizard' => [

        'actions' => [

            'previous_step' => [
                'label' => 'Nazad',
            ],

            'next_step' => [
                'label' => 'Napred',
            ],

        ],

    ],

];
