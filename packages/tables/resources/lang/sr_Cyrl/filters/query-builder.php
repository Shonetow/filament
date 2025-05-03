<?php

return [

    'label' => 'Израда упита',

    'form' => [

        'operator' => [
            'label' => 'Оператор',
        ],

        'or_groups' => [

            'label' => 'Групе',

            'block' => [
                'label' => 'Дисјункција (OR)',
                'or' => 'OR',
            ],

        ],

        'rules' => [

            'label' => 'Правила',

            'item' => [
                'and' => 'AND',
            ],

        ],

    ],

    'no_rules' => '(Нема правила)',

    'item_separators' => [
        'and' => 'AND',
        'or' => 'OR',
    ],

    'operators' => [

        'is_filled' => [

            'label' => [
                'direct' => 'Има вредност',
                'inverse' => 'Нема вредност',
            ],

            'summary' => [
                'direct' => ':attribute има вредност',
                'inverse' => ':attribute нема вредност',
            ],

        ],

        'boolean' => [

            'is_true' => [

                'label' => [
                    'direct' => 'Је тачно',
                    'inverse' => 'Није тачно',
                ],

                'summary' => [
                    'direct' => ':attribute је тачно',
                    'inverse' => ':attribute није тачно',
                ],

            ],

        ],

        'date' => [

            'is_after' => [

                'label' => [
                    'direct' => 'Долази после',
                    'inverse' => 'Не долази после',
                ],

                'summary' => [
                    'direct' => ':attribute долази после :date',
                    'inverse' => ':attribute не долази после :date',
                ],

            ],

            'is_before' => [

                'label' => [
                    'direct' => 'Је пре',
                    'inverse' => 'Није пре',
                ],

                'summary' => [
                    'direct' => ':attribute је пре :date',
                    'inverse' => ':attribute није пре :date',
                ],

            ],

            'is_date' => [

                'label' => [
                    'direct' => 'Датум',
                    'inverse' => 'Није датум',
                ],

                'summary' => [
                    'direct' => ':attribute је датум :date',
                    'inverse' => ':attribute није датум :date',
                ],

            ],

            'is_month' => [

                'label' => [
                    'direct' => 'Је месец',
                    'inverse' => 'Није месец',
                ],

                'summary' => [
                    'direct' => ':attribute је :month',
                    'inverse' => ':attribute није :month',
                ],

            ],

            'is_year' => [

                'label' => [
                    'direct' => 'Је година',
                    'inverse' => 'Није година',
                ],

                'summary' => [
                    'direct' => ':attribute је :year',
                    'inverse' => ':attribute није :year',
                ],

            ],

            'form' => [

                'date' => [
                    'label' => 'Датум',
                ],

                'month' => [
                    'label' => 'Месец',
                ],

                'year' => [
                    'label' => 'Година',
                ],

            ],

        ],

        'number' => [

            'equals' => [

                'label' => [
                    'direct' => 'Једнако',
                    'inverse' => 'Није једнако',
                ],

                'summary' => [
                    'direct' => ':attribute је једнако :number',
                    'inverse' => ':attribute није једнако :number',
                ],

            ],

            'is_max' => [

                'label' => [
                    'direct' => 'Је максимум',
                    'inverse' => 'Је више од',
                ],

                'summary' => [
                    'direct' => ':attribute је максимум :number',
                    'inverse' => ':attribute је више од :number',
                ],

            ],

            'is_min' => [

                'label' => [
                    'direct' => 'Је минимум',
                    'inverse' => 'Је мање од',
                ],

                'summary' => [
                    'direct' => ':attribute је минимум :number',
                    'inverse' => ':attribute је мање од :number',
                ],

            ],

            'aggregates' => [

                'average' => [
                    'label' => 'Просек',
                    'summary' => 'Просек :attribute',
                ],

                'max' => [
                    'label' => 'Максимум',
                    'summary' => 'Максимум :attribute',
                ],

                'min' => [
                    'label' => 'Минимум',
                    'summary' => 'Минимум :attribute',
                ],

                'sum' => [
                    'label' => 'Збир',
                    'summary' => 'Збир :attribute',
                ],

            ],

            'form' => [

                'aggregate' => [
                    'label' => 'Агрегација',
                ],

                'number' => [
                    'label' => 'Број',
                ],

            ],

        ],

        'relationship' => [

            'equals' => [

                'label' => [
                    'direct' => 'Има',
                    'inverse' => 'Нема',
                ],

                'summary' => [
                    'direct' => 'Има :count :relationship',
                    'inverse' => 'Нема :count :relationship',
                ],

            ],

            'has_max' => [

                'label' => [
                    'direct' => 'Има максимум',
                    'inverse' => 'Има више од',
                ],

                'summary' => [
                    'direct' => 'Има максимум :count :relationship',
                    'inverse' => 'Има више од :count :relationship',
                ],

            ],

            'has_min' => [

                'label' => [
                    'direct' => 'Има минимум',
                    'inverse' => 'Има мање од',
                ],

                'summary' => [
                    'direct' => 'Има минимум :count :relationship',
                    'inverse' => 'Има мање од :count :relationship',
                ],

            ],

            'is_empty' => [

                'label' => [
                    'direct' => 'Је празно',
                    'inverse' => 'Није празно',
                ],

                'summary' => [
                    'direct' => ':relationship је празно',
                    'inverse' => ':relationship није празно',
                ],

            ],

            'is_related_to' => [

                'label' => [

                    'single' => [
                        'direct' => 'Јесте',
                        'inverse' => 'Није',
                    ],

                    'multiple' => [
                        'direct' => 'Садржи',
                        'inverse' => 'Не садржи',
                    ],

                ],

                'summary' => [

                    'single' => [
                        'direct' => ':relationship је :values',
                        'inverse' => ':relationship није :values',
                    ],

                    'multiple' => [
                        'direct' => ':relationship садржи :values',
                        'inverse' => ':relationship не садржи :values',
                    ],

                    'values_glue' => [
                        0 => ', ',
                        'final' => ' или ',
                    ],

                ],

                'form' => [

                    'value' => [
                        'label' => 'Вредност',
                    ],

                    'values' => [
                        'label' => 'Вредности',
                    ],

                ],

            ],

            'form' => [

                'count' => [
                    'label' => 'Број',
                ],

            ],

        ],

        'select' => [

            'is' => [

                'label' => [
                    'direct' => 'Је',
                    'inverse' => 'Није',
                ],

                'summary' => [
                    'direct' => ':attribute је :values',
                    'inverse' => ':attribute није :values',
                    'values_glue' => [
                        ', ',
                        'final' => ' или ',
                    ],
                ],

                'form' => [

                    'value' => [
                        'label' => 'Вредност',
                    ],

                    'values' => [
                        'label' => 'Вредности',
                    ],

                ],

            ],

        ],

        'text' => [

            'contains' => [

                'label' => [
                    'direct' => 'Садржи',
                    'inverse' => 'Не садржи',
                ],

                'summary' => [
                    'direct' => ':attribute садржи :text',
                    'inverse' => ':attribute не садржи :text',
                ],

            ],

            'ends_with' => [

                'label' => [
                    'direct' => 'Завршава се са',
                    'inverse' => 'Не завршава се са',
                ],

                'summary' => [
                    'direct' => ':attribute завршава се са :text',
                    'inverse' => ':attribute не завршава се са :text',
                ],

            ],

            'equals' => [

                'label' => [
                    'direct' => 'Једнако',
                    'inverse' => 'Није једнако',
                ],

                'summary' => [
                    'direct' => ':attribute је једнако :text',
                    'inverse' => ':attribute није једнако :text',
                ],

            ],

            'starts_with' => [

                'label' => [
                    'direct' => 'Почиње са',
                    'inverse' => 'Не почиње са',
                ],

                'summary' => [
                    'direct' => ':attribute почиње са :text',
                    'inverse' => ':attribute не почиње са :text',
                ],

            ],

            'form' => [

                'text' => [
                    'label' => 'Текст',
                ],

            ],

        ],

    ],

    'actions' => [

        'add_rule' => [
            'label' => 'Додај правило',
        ],

        'add_rule_group' => [
            'label' => 'Додај групу правила',
        ],

    ],

];
