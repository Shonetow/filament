<?php

return [

    'title' => 'Verifikuj svoju email adresu',

    'heading' => 'Verifikuj svoju email adresu',

    'actions' => [

        'resend_notification' => [
            'label' => 'Ponovo pošalji',
        ],

    ],

    'messages' => [
        'notification_not_received' => 'Niste primili email koji smo poslali?',
        'notification_sent' => 'Poslali smo email na :email sa uputstvima kako da verifikujete svoju email adresu.',
    ],

    'notifications' => [

        'notification_resent' => [
            'title' => 'Poslali smo ponovno email.',
        ],

        'notification_resend_throttled' => [
            'title' => 'Previše pokušaja ponovnog slanja',
            'body' => 'Molimo vas da pokušate ponovo za :seconds sekundi.',
        ],

    ],

];
