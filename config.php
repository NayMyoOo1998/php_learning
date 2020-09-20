<?php
return [
    'database' => [
        'host' => 'mysql:host=127.0.0.1',
        'dbname' => 'mytodo',
        'username' => 'root',
        'password' => '',
        'options' => [
           PDO::ATTR_ERRMODE =>PDO::ERRMODE_WARNING
        ],
    ],
];