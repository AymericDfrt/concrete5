/<?php

return [
    'default-connection' => 'concrete',
    'connections' => [
        'concrete' => [
            'driver' => 'c5_pdo_mysql',
            'server' => 'localhost',
            'database' => 'concrete5',
            'unix_socket' => '/tmp/mysql5.sock',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];
