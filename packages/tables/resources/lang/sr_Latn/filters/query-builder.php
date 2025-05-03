<?php

return [

    'label' => 'Izrada upita',

    'form' => [

        'operator' => [
            'label' => 'Operator',
        ],

        'or_groups' => [

            'label' => 'Grupe',

            'block' => [
                'label' => 'Disjunkcija (OR)',
                'or' => 'OR',
            ],

        ],

        'rules' => [

            'label' => 'Pravila',

            'item' => [
                'and' => 'AND',
            ],

        ],

    ],

    'no_rules' => '(No rules)',

    'item_separators' => [
        'and' => 'AND',
        'or' => 'OR',
    ],

    'operators' => [

        'is_filled' => [

            'label' => [
                'direct' => 'Ima vrednost',
                'inverse' => 'nema vrednost',
            ],

            'summary' => [
                'direct' => ':attribute ima vrednost',
                'inverse' => ':attribute nema vrednost',
            ],

        ],

        'boolean' => [

            'is_true' => [

                'label' => [
                    'direct' => 'Je tačno',
                    'inverse' => 'Nije tačno',
                ],

                'summary' => [
                    'direct' => ':attribute je tačno',
                    'inverse' => ':attribute nije tačno',
                ],

            ],

        ],

        'date' => [

            'is_after' => [

                'label' => [
                    'direct' => 'Dolazi posle',
                    'inverse' => 'Ne dolazi posle',
                ],

                'summary' => [
                    'direct' => ':attribute dolazi posle :date',
                    'inverse' => ':attribute ine dolazi posle :date',
                ],

            ],

            'is_before' => [

                'label' => [
                    'direct' => 'Je pre',
                    'inverse' => 'Nije pre',
                ],

                'summary' => [
                    'direct' => ':attribute je pre :date',
                    'inverse' => ':attribute nije pre :date',
                ],

            ],

            'is_date' => [

                'label' => [
                    'direct' => 'Datum',
                    'inverse' => 'Nije datum',
                ],

                'summary' => [
                    'direct' => ':attribute je datum :date',
                    'inverse' => ':attribute nije datum :date',
                ],

            ],

            'is_month' => [

                'label' => [
                    'direct' => 'Je mesec',
                    'inverse' => 'Nije mesec',
                ],

                'summary' => [
                    'direct' => ':attribute je :month',
                    'inverse' => ':attribute nije :month',
                ],

            ],

            'is_year' => [

                'label' => [
                    'direct' => 'Je godina',
                    'inverse' => 'Nije godina',
                ],

                'summary' => [
                    'direct' => ':attribute je :year',
                    'inverse' => ':attribute nije :year',
                ],

            ],

            'form' => [

                'date' => [
                    'label' => 'Datum',
                ],

                'month' => [
                    'label' => 'Mesec',
                ],

                'year' => [
                    'label' => 'Godina',
                ],

            ],

        ],

        'number' => [

            'equals' => [

                'label' => [
                    'direct' => 'Jednako',
                    'inverse' => 'Nije jednako',
                ],

                'summary' => [
                    'direct' => ':attribute je jednako :number',
                    'inverse' => ':attribute nije jednako :number',
                ],

            ],

            'is_max' => [

                'label' => [
                    'direct' => 'Je maksimum',
                    'inverse' => 'Je više od',
                ],

                'summary' => [
                    'direct' => ':attribute je maksimum :number',
                    'inverse' => ':attribute je više od :number',
                ],

            ],

            'is_min' => [

                'label' => [
                    'direct' => 'Je minimum',
                    'inverse' => 'Je manje od',
                ],

                'summary' => [
                    'direct' => ':attribute je minimum :number',
                    'inverse' => ':attribute je manje od :number',
                ],

            ],

            'aggregates' => [

                'average' => [
                    'label' => 'Prosek',
                    'summary' => 'Prosek :attribute',
                ],

                'max' => [
                    'label' => 'Maksimum',
                    'summary' => 'Maksimum :attribute',
                ],

                'min' => [
                    'label' => 'Minimum',
                    'summary' => 'Minimum :attribute',
                ],

                'sum' => [
                    'label' => 'Zbir',
                    'summary' => 'Zbir :attribute',
                ],

            ],

            'form' => [

                'aggregate' => [
                    'label' => 'Agregacija',
                ],

                'number' => [
                    'label' => 'Broj',
                ],

            ],

        ],

        'relationship' => [

            'equals' => [

                'label' => [
                    'direct' => 'Ima',
                    'inverse' => 'Nema',
                ],

                'summary' => [
                    'direct' => 'Ima :count :relationship',
                    'inverse' => 'Nema :count :relationship',
                ],

            ],

            'has_max' => [

                'label' => [
                    'direct' => 'Ima maksimum',
                    'inverse' => 'Ima više od',
                ],

                'summary' => [
                    'direct' => 'Ima maksimum :count :relationship',
                    'inverse' => 'Ima više od :count :relationship',
                ],

            ],

            'has_min' => [

                'label' => [
                    'direct' => 'Ima minimum',
                    'inverse' => 'Ima manje od',
                ],

                'summary' => [
                    'direct' => 'Ima minimum :count :relationship',
                    'inverse' => 'Ima manje od :count :relationship',
                ],

            ],

            'is_empty' => [

                'label' => [
                    'direct' => 'Je prazno',
                    'inverse' => 'Nije prazno',
                ],

                'summary' => [
                    'direct' => ':relationship je prazno',
                    'inverse' => ':relationship nije prazno',
                ],

            ],

            'is_related_to' => [

                'label' => [

                    'single' => [
                        'direct' => 'Jeste',
                        'inverse' => 'Nije',
                    ],

                    'multiple' => [
                        'direct' => 'Sadrži',
                        'inverse' => 'Ne sadrži',
                    ],

                ],

                'summary' => [

                    'single' => [
                        'direct' => ':relationship je :values',
                        'inverse' => ':relationship nije :values',
                    ],

                    'multiple' => [
                        'direct' => ':relationship sadrži :values',
                        'inverse' => ':relationship ne sadrži :values',
                    ],

                    'values_glue' => [
                        0 => ', ',
                        'final' => ' ili ',
                    ],

                ],

                'form' => [

                    'value' => [
                        'label' => 'Vrednost',
                    ],

                    'values' => [
                        'label' => 'Vrednosti',
                    ],

                ],

            ],

            'form' => [

                'count' => [
                    'label' => 'Broj',
                ],

            ],

        ],

        'select' => [

            'is' => [

                'label' => [
                    'direct' => 'Je',
                    'inverse' => 'Nije',
                ],

                'summary' => [
                    'direct' => ':attribute je :values',
                    'inverse' => ':attribute nije :values',
                    'values_glue' => [
                        ', ',
                        'final' => ' ili ',
                    ],
                ],

                'form' => [

                    'value' => [
                        'label' => 'Vrednost',
                    ],

                    'values' => [
                        'label' => 'Vrednosti',
                    ],

                ],

            ],

        ],

        'text' => [

            'contains' => [

                'label' => [
                    'direct' => 'Sadrži',
                    'inverse' => 'Ne sadrži',
                ],

                'summary' => [
                    'direct' => ':attribute sadrži :text',
                    'inverse' => ':attribute ne sadrži :text',
                ],

            ],

            'ends_with' => [

                'label' => [
                    'direct' => 'Završava se sa',
                    'inverse' => 'Ne završava se sa',
                ],

                'summary' => [
                    'direct' => ':attribute završava se sa :text',
                    'inverse' => ':attribute ne završava se sa :text',
                ],

            ],

            'equals' => [

                'label' => [
                    'direct' => 'Jednako',
                    'inverse' => 'Nije jednako',
                ],

                'summary' => [
                    'direct' => ':attribute je jednako :text',
                    'inverse' => ':attribute nije jednako :text',
                ],

            ],

            'starts_with' => [

                'label' => [
                    'direct' => 'Počinje sa',
                    'inverse' => 'Ne počinje sa',
                ],

                'summary' => [
                    'direct' => ':attribute počinje sa :text',
                    'inverse' => ':attribute ne počinje sa :text',
                ],

            ],

            'form' => [

                'text' => [
                    'label' => 'Tekst',
                ],

            ],

        ],

    ],

    'actions' => [

        'add_rule' => [
            'label' => 'Dodaj pravilo',
        ],

        'add_rule_group' => [
            'label' => 'Dodaj grupu pravila',
        ],

    ],

];
