<?php
$routes = [
    'GET' => [
        '/' => 'app/views/home.php',
        '/home' => 'app/views/home.php',
        '' => 'app/views/home.php',
        '/404' => 'app/views/404.php',
        '/login' => 'app/views/login.php',
        '/register' => 'app/views/register.php',
        '/welcome' => 'app/views/welcome.php'
    ],
    'POST' => [
        '/welcome' => 'app/views/welcome.php'
    ],
];