<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/wamp64/www/project_i&i/user/config/plugins/email.yaml',
    'modified' => 1712043146,
    'size' => 242,
    'data' => [
        'enabled' => true,
        'from' => 'joe@test.com',
        'from_name' => 'Joe',
        'to' => 'joe@test.com',
        'to_name' => 'Joe',
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
