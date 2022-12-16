<?php 

function dd($value) {
    echo '<pre>';
die(var_dump($value));
echo '</pre>';
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);
    
    require "views/{$code}.php";

    die();
}


