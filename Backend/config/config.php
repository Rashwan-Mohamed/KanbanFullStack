<?php


    return [
        'env' => 'local', // change to 'local' when developing locally

        'database' => [
            'production' => [
                'host' => 'sql100.infinityfree.com',
                'port' => 3306,
                'dbname' => 'if0_39158119_kanban',
                'charset' => 'utf8mb4',
                'user' => 'if0_39158119',
                'password' => 'isvnqvYkQgq9H',
            ],
            'local' => [
                'host' => 'localhost',
                'port' => 3306,
                'dbname' => 'kanban',
                'charset' => 'utf8mb4',
                'password' => '123321',
                'user' => 'root'
            ],
        ],
    ];