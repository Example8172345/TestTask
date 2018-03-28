<?php

define('ROOT_DIR', dirname(dirname(__DIR__)));

/**
 * Autoloader
 */
spl_autoload_register(function ($class) {

    $file = ROOT_DIR . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)) {
        require_once $file;
    }
});