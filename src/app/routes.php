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
        '/addHike' => 'app/views/addHike.php',
        '/myHikes' => 'app/views/myHikes.php',
        '/imgForm' => 'app/views/imgForm.php',
        '/fourHikes' => 'app/views/fourHikes.php',
        '/singleHike' => 'app/views/singleHike.php',
        '/allHikes' => 'app/views/allHikes.php',
        '/userManage' => 'app/views/userManage.php',
        '/hikeManage' => 'app/views/hikeManage.php',
        '/deleteUser' => 'app/views/deleteUser.php',
        '/deleteHike' => 'app/views/deleteHike.php',
        '/sendMail' => 'app/views/sendMail.php'
    ],
    'POST' => [
        '/signup' => 'app/controllers/signupContr.php',
        '/login' => 'app/controllers/loginContr.php',
        '/addHikeContr' => 'app/controllers/addHikesContr.php',
        '/addImg' => 'app/controllers/addImgContr.php',
        '/addHike' => 'app/views/addHike.php',
        '/delHike' => 'app/controllers/delHikeContr.php',
        '/editHikeContr' => 'app/controllers/editHikeContr.php',
        '/editProfile' => 'app/views/register.php',
        '/editProfileContr' => 'app/controllers/editProfileContr.php'

    ],
];