<?php

return [

    'builder' => [

        'actions' => [

            'clone' => [
                'label' => 'Клонирај',
            ],

            'add' => [

                'label' => 'Додај у :label',

                'modal' => [

                    'heading' => 'Додај у :label',

                    'actions' => [

                        'add' => [
                            'label' => 'Додај',
                        ],

                    ],

                ],

            ],

            'add_between' => [

                'label' => 'Убаци између блокова',

                'modal' => [

                    'heading' => 'Додај у :label',

                    'actions' => [

                        'add' => [
                            'label' => 'Додај',
                        ],

                    ],

                ],

            ],

            'delete' => [
                'label' => 'Обриши',
            ],

            'edit' => [

                'label' => 'Измени',

                'modal' => [

                    'heading' => 'Измени блок',

                    'actions' => [

                        'save' => [
                            'label' => 'Сачувај измене',
                        ],

                    ],

                ],

            ],

            'reorder' => [
                'label' => 'Померање',
            ],

            'move_down' => [
                'label' => 'Помери доле',
            ],

            'move_up' => [
                'label' => 'Помери горе',
            ],

            'collapse' => [
                'label' => 'Сажми',
            ],

            'expand' => [
                'label' => 'Прошири',
            ],

            'collapse_all' => [
                'label' => 'Сажми све',
            ],

            'expand_all' => [
                'label' => 'Прошири све',
            ],

        ],

    ],

    'checkbox_list' => [

        'actions' => [

            'deselect_all' => [
                'label' => 'Поништи избор свих',
            ],

            'select_all' => [
                'label' => 'Изабери све',
            ],

        ],

    ],

    'file_upload' => [

        'editor' => [

            'actions' => [

                'cancel' => [
                    'label' => 'Откажи',
                ],

                'drag_crop' => [
                    'label' => 'Режим повлачења "обсеци"',
                ],

                'drag_move' => [
                    'label' => 'Режим повлачења "помери"',
                ],

                'flip_horizontal' => [
                    'label' => 'Хоризонтално окрени слику',
                ],

                'flip_vertical' => [
                    'label' => 'Вертикално окрени слику',
                ],

                'move_down' => [
                    'label' => 'Помери слику доле',
                ],

                'move_left' => [
                    'label' => 'Помери слику лево',
                ],

                'move_right' => [
                    'label' => 'Помери слику десно',
                ],

                'move_up' => [
                    'label' => 'Помери слику горе',
                ],

                'reset' => [
                    'label' => 'Ресетуј',
                ],

                'rotate_left' => [
                    'label' => 'Ротирај слику улево',
                ],

                'rotate_right' => [
                    'label' => 'Ротирај слику удесно',
                ],

                'set_aspect_ratio' => [
                    'label' => 'Постави однос ширине и висине на :ratio',
                ],

                'save' => [
                    'label' => 'Сачувај',
                ],

                'zoom_100' => [
                    'label' => 'Зумирај слику на 100%',
                ],

                'zoom_in' => [
                    'label' => 'Увећај',
                ],

                'zoom_out' => [
                    'label' => 'Умањи',
                ],

            ],

            'fields' => [

                'height' => [
                    'label' => 'Висина',
                    'unit' => 'px',
                ],

                'rotation' => [
                    'label' => 'Ротација',
                    'unit' => 'степени',
                ],

                'width' => [
                    'label' => 'Ширина',
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

                'label' => 'Односи ширине и висине',

                'no_fixed' => [
                    'label' => 'Слободно',
                ],

            ],

            'svg' => [

                'messages' => [
                    'confirmation' => 'Уређивање SVG фајлова се не препоручује јер може довести до губитка квалитета приликом скалирања.\n Да ли сте сигурни да желите да наставите?',
                    'disabled' => 'Уређивање SVG фајлова је онемогућено јер то може узроковати губитак квалитета приликом скалирања.',
                ],

            ],

        ],

    ],

    'key_value' => [

        'actions' => [

            'add' => [
                'label' => 'Додај ред',
            ],

            'delete' => [
                'label' => 'Обриши ред',
            ],

            'reorder' => [
                'label' => 'Преуреди ред',
            ],

        ],

        'fields' => [

            'key' => [
                'label' => 'Кључ',
            ],

            'value' => [
                'label' => 'Вредност',
            ],

        ],

    ],

    'markdown_editor' => [

        'toolbar_buttons' => [
            'attach_files' => 'Приложи фајлове',
            'blockquote' => 'Цитат',
            'bold' => 'Подебљано',
            'bullet_list' => 'Листа са ознакама',
            'code_block' => 'Код блок',
            'heading' => 'Наслов',
            'italic' => 'Курзив',
            'link' => 'Линк',
            'ordered_list' => 'Нумерисана листа',
            'redo' => 'Понови',
            'strike' => 'Прецртано',
            'table' => 'Табела',
            'undo' => 'Поништи',
        ],

    ],

    'radio' => [

        'boolean' => [
            'true' => 'Да',
            'false' => 'Не',
        ],

    ],

    'repeater' => [

        'actions' => [

            'add' => [
                'label' => 'Додај у :label',
            ],

            'add_between' => [
                'label' => 'Убаци између',
            ],

            'delete' => [
                'label' => 'Обриши',
            ],

            'clone' => [
                'label' => 'Клонирај',
            ],

            'reorder' => [
                'label' => 'Померање',
            ],

            'move_down' => [
                'label' => 'Помери доле',
            ],

            'move_up' => [
                'label' => 'Помери горе',
            ],

            'collapse' => [
                'label' => 'Сажми',
            ],

            'expand' => [
                'label' => 'Прошири',
            ],

            'collapse_all' => [
                'label' => 'Сажми све',
            ],

            'expand_all' => [
                'label' => 'Прошири све',
            ],

        ],

    ],

    'rich_editor' => [

        'dialogs' => [

            'link' => [

                'actions' => [
                    'link' => 'Линкуј',
                    'unlink' => 'Уклони линк',
                ],

                'label' => 'URL',

                'placeholder' => 'Унесите URL',

            ],

        ],

        'toolbar_buttons' => [
            'attach_files' => 'Приложи фајлове',
            'blockquote' => 'Цитат',
            'bold' => 'Подебљано',
            'bullet_list' => 'Листа са ознакама',
            'code_block' => 'Код блок',
            'h1' => 'Наслов',
            'h2' => 'Поднаслов',
            'h3' => 'Мањи поднаслов',
            'italic' => 'Курзив',
            'link' => 'Линк',
            'ordered_list' => 'Нумерисана листа',
            'redo' => 'Понови',
            'strike' => 'Прецртано',
            'underline' => 'Подвучено',
            'undo' => 'Поништи',
        ],

    ],

    'select' => [

        'actions' => [

            'create_option' => [

                'label' => 'Направи',

                'modal' => [

                    'heading' => 'Направи',

                    'actions' => [

                        'create' => [
                            'label' => 'Направи',
                        ],

                        'create_another' => [
                            'label' => 'Направи и додај још једно',
                        ],

                    ],

                ],

            ],

            'edit_option' => [

                'label' => 'Измени',

                'modal' => [

                    'heading' => 'Измени',

                    'actions' => [

                        'save' => [
                            'label' => 'Сачувај',
                        ],

                    ],

                ],

            ],

        ],

        'boolean' => [
            'true' => 'Да',
            'false' => 'Не',
        ],

        'loading_message' => 'Учитавање...',

        'max_items_message' => 'Максимално :count може бити изабрано.',

        'no_search_results_message' => 'Нема резултата претраге који одговарају.',

        'placeholder' => 'Изабери опцију',

        'searching_message' => 'Претрага...',

        'search_prompt' => 'Почните да куцате како бисте претражили...',

    ],

    'tags_input' => [
        'placeholder' => 'Нови таг',
    ],

    'text_input' => [

        'actions' => [

            'hide_password' => [
                'label' => 'Сакриј лозинку',
            ],

            'show_password' => [
                'label' => 'Прикажи лозинку',
            ],

        ],

    ],

    'toggle_buttons' => [

        'boolean' => [
            'true' => 'Да',
            'false' => 'Не',
        ],

    ],

    'wizard' => [

        'actions' => [

            'previous_step' => [
                'label' => 'Назад',
            ],

            'next_step' => [
                'label' => 'Напред',
            ],

        ],

    ],

];
