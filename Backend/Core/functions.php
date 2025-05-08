<?php


    function base_path($path)
    {
        return BASE_PATH . $path;
    }

    function abort($code = 404)
    {
        http_response_code($code);


        die();
    }

    function dd($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";

        die();
    }