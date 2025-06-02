<?php
    $origin = $_SERVER['HTTP_ORIGIN'] ?? '';
    $allowedOrigin = 'http://localhost:5173'; // or wherever your client runs

    if ($origin === $allowedOrigin) {
        header("Access-Control-Allow-Origin: $origin");
        header("Access-Control-Allow-Credentials: true");
    }
    header("Access-Control-Allow-Headers: Content-Type");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        header('Access-Control-Allow-Origin: http://localhost:5173');
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type');
        exit(0); // Handle preflight
    }
    const BASE_PATH = __DIR__ . '/../';
    require BASE_PATH . 'vendor/autoload.php';
    require BASE_PATH . 'Core/functions.php';
    require BASE_PATH . 'bootstrap.php';


    $router = new \Core\Router();

    include BASE_PATH . 'routes.php';
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    // Remove the base path from the URI
    $basePath = '/KANPAN_FULL_STACK/Backend/public';
    $normalizedUri = str_replace($basePath, '', $uri);

    $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

    try {
        $router->route($normalizedUri, $method);
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