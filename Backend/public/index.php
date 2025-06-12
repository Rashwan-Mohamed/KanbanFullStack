<?php
// Set headers early before anything else
    $origin = $_SERVER['HTTP_ORIGIN'] ?? '';

    $allowedOrigins = [
        'http://localhost:5173',
        'https://kanban-full-stack.vercel.app',
    ];

// Handle preflight (OPTIONS) request first
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        if (in_array($origin, $allowedOrigins)) {
            header("Access-Control-Allow-Origin: $origin");
            header("Access-Control-Allow-Credentials: true");
        }
        header("Access-Control-Allow-Headers: Content-Type");
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
        exit(0);
    }

// Set CORS headers for other requests
    if (in_array($origin, $allowedOrigins)) {
        header("Access-Control-Allow-Origin: $origin");
        header("Access-Control-Allow-Credentials: true");
    }
    header("Access-Control-Allow-Headers: Content-Type");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    const BASE_PATH = __DIR__ . '/../';
    require BASE_PATH . 'vendor/autoload.php';
    require BASE_PATH . 'Core/functions.php';
    require BASE_PATH . 'bootstrap.php';


$router = new \Core\Router();

include BASE_PATH . 'routes.php';
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
    $router->route($uri, $method);
} catch (Exception $e) {
    echo($e);
}

    /*
     * it's a new project and I want to implement the following step by step
     *  1. first create the database class with all its methods to query the db find/findOrFail etc.  DONE.
     *  1.1 make a container and wrapper to initiate a DB connection when needed. DONE.
     *  2. initiate the connection between the DB and GraphQl resolver .DONE
     *  3. define schema for graphQl and add the appropriate resolvers .DONE
     *  4. configure the router and make a routes.file
     *  5. make the router handles the incoming HTTP request and redirect to the appropriate resolver
     *  6. make a session class that has the appropriate methods that a session uses
     *  7. (optional) make an Authenticator class that receives a credentials for an existing user and start a new Session if exist
     * */