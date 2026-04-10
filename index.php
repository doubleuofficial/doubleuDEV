<?php
$request = $_SERVER['REQUEST_URI'];
$basePath = '/pages/';

switch ($request) {
    case '/' :
    case '/home' :
        require __DIR__ . $basePath . 'home.php';
        break;
    case '/profile' :
        require __DIR__ . $basePath . 'profile.php';
        break;
    default:
        // Handle 404 or redirect back home
        require __DIR__ . $basePath . 'home.php';
        break;
}
