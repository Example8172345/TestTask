<?php

namespace Application\Core;

class App
{
    public function __construct()
    {
        $uri = $_SERVER['REQUEST_URI']; // Get uri;
        $router = new Router();
        $router->run($uri);
    }
}