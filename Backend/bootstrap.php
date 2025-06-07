<?php
//    require_once __DIR__ . '';
    require_once __DIR__ . '/vendor/autoload.php';
    use Core\App;
    use Core\Container;
    use Core\Database;

//    $app = new Database();
    $container = new Container();
    $container->bind('Core\Database', function () {
        $config = require base_path('config/config.php');

        return new Database($config);
    });

    App::setContainer($container);
