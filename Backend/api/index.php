<?php
// (A) Enable error reporting during troubleshooting (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// (B) Determine the request’s Origin (or fall back to Referer if Origin is missing)
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if (empty($origin) && !empty($_SERVER['HTTP_REFERER'])) {
    $ref = parse_url($_SERVER['HTTP_REFERER']);
    if (isset($ref['scheme'], $ref['host'])) {
        $origin = $ref['scheme'] . '://' . $ref['host'];
        if (!empty($ref['port'])) {
            $origin .= ':' . $ref['port'];
        }
    }
}


// (E) If this is a preflight request (OPTIONS), stop here
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    // We’ve already sent the appropriate headers above
    exit(0);
}
    require __DIR__ .'/..' . '/vendor/autoload.php';
    require __DIR__ . '/..' . '/Core/functions.php';
    require __DIR__ .'/..'. '/bootstrap.php';


    $router = new \Core\Router();
    const BASE_PATH = __DIR__ . '/../';

    include __DIR__ . '/..' . '/routes.php';
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    // Remove the base path from the URI
    $basePath = '/api';
    $normalizedUri = str_replace($basePath, '', $uri);

    $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

    try {
        $router->route($normalizedUri, $method);
    } catch (Exception $e) {
        echo($e);
    }
