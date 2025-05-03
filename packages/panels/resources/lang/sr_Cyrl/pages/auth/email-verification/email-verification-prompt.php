<?php

return [

    'title' => 'Верификуј своју имејл адресу',

    'heading' => 'Верификуј своју имејл адресу',

    'actions' => [

        'resend_notification' => [
            'label' => 'Поново пошаљи',
        ],

    ],

    'messages' => [
        'notification_not_received' => 'Нисте примили имејл који смо послали?',
        'notification_sent' => 'Послали смо имејл на :email са упутствима како да верификујете своју имејл адресу.',
    ],

    'notifications' => [

        'notification_resent' => [
            'title' => 'Послали смо поново имејл.',
        ],

        'notification_resend_throttled' => [
            'title' => 'Превише покушаја поновног слања',
            'body' => 'Молимо вас да покушате поново за :seconds секунди.',
        ],

    ],

];
