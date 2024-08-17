<?php

require_once '../app/classes/Database.php';

$routes = [
    '/' => '../app/controllers/index.php',
    '/register' => '../app/controllers/register.php',
    '/consult' => '../app/controllers/consult.php',
    '/vote' => '../app/controllers/vote.php',
    '/report' => '../app/controllers/report.php',
];

if (!isset($db)) {
    $config = require '../app/config.php';
    $db = new Database($config['database']);
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if (isset($post)) {
    require '../app/controllers/process-post.php';
}

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    die('404');
}
