<?php
    header("Access-Control-Allow-Origin: *"); // Allow frontend access
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");

    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        http_response_code(200);
        exit; // Preflight request; no need to continue
    }
    const BASE_PATH = __DIR__ . '/../';
    require BASE_PATH . 'vendor/autoload.php';
    require BASE_PATH . 'Core/functions.php';
    require BASE_PATH . 'bootstrap.php';
//    dd('ALIVE');


//    session_start();
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