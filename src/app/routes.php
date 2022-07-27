<?php
$routes = [
    'GET' => [
        '/' => 'app/views/home.php',
        '/home' => 'app/views/home.php',
        '' => 'app/views/home.php',
        '/404' => 'app/views/404.php',
        '/login' => 'app/views/login.php',
        '/register' => 'app/views/register.php',
        '/welcome' => 'app/views/welcome.php',
        '/contact' => 'app/views/contact.php',
        '/logout' => 'app/controllers/logOut.php',
        '/profile' => 'app/views/profile.php',
        '/menu' => 'app/views/menu.php',
        '/addHike' => 'app/views/addHike.php'
    ],
    'POST' => [
        '/signup' => 'app/controllers/signupContr.php',
        '/login' => 'app/controllers/loginContr.php'
    ],
];