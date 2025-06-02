<?php

//    require_once __DIR__ . '/../public/index.php'; // If you have a custom bootstrap for DB/App init
    const BASE_PATH = __DIR__ . '/../';

    function base_path($path)
    {
        return BASE_PATH . $path;
    }
    require_once __DIR__ . '/../vendor/autoload.php'; // adjust path if needed
    require_once __DIR__ . '/../bootstrap.php'; // If you have a custom bootstrap for DB/App init


    use App\GraphQL\Resolvers\Mutation\GuestAuth;

    (new GuestAuth(0))->deleteAllGuestSession();