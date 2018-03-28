<?php

namespace Application\Core;

class Router
{
    private $routes;

    public function __construct()
    {
        // Load routes list from config file.
        $this->routes = require_once ROOT_DIR . '/application/config/routes.php';
    }

    /**
     * Method routes url and run appropriate controller.
     */
    public function run($uri)
    {
        if (!empty($uri)) {
            foreach ($this->routes as $pattern => $path) {
                // Update pattern to RegEx.
                $regexPattern = '/^' . $pattern . '\/*$/';
                if (preg_match($regexPattern, $uri)) {
                    // Parsing controller and action name.
                    $parts = explode('/', $path);
                    $controllerName = $parts[0];
                    $actionName = $parts[1];

                    $controllerPath = 'Application\\Controllers\\' . $controllerName;
                    $controllerObject = new $controllerPath;
                    $controllerObject->$actionName();
                }
            }
        }
    }
}