<?php
/**
 * DoubleU - Root Router
 * Manages Pretty URLs by mapping /home and /profile to the /pages/ directory.
 */

// Get the current URL path
$request = $_SERVER['REQUEST_URI'];
// Strip query strings (e.g., /home?id=1 becomes /home)
$path = parse_url($request, PHP_URL_PATH);

// Simple Router Logic
switch ($path) {
    case '/':
    case '/home':
        require __DIR__ . '/pages/home.php';
        break;

    case '/profile':
        require __DIR__ . '/pages/profile.php';
        break;

    // Add more pages here as you create them
    // case '/music':
    //    require __DIR__ . '/pages/music.php';
    //    break;

    default:
        // 404 - Redirect to home or show a 404 page
        http_response_code(404);
        require __DIR__ . '/pages/home.php'; 
        break;
}
