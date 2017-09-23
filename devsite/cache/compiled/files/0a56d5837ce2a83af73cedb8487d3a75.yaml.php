<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/moonlight63/public_html/devsite/user/config/plugins/email.yaml',
    'modified' => 1505543473,
    'data' => [
        'enabled' => true,
        'from' => 'dalen@cascadeap.com',
        'from_name' => 'Cascade AP Grav',
        'to' => 'dalencattmlsp@gmail.com',
        'to_name' => 'Webmaster',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
