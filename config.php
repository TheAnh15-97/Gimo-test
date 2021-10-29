<?php

return [
    'debug' => true,

    'database' => [
        'host' => 'localhost',
        'user' => 'admin',
        'pass' => '1',
        'db_name' => 'php_test',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    ]
];
