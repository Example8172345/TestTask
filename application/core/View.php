<?php

namespace Application\Core;

class View
{
    public static function render($view, $data)
    {
        require_once ROOT_DIR . '/application/views/templates/header.php';
        require_once ROOT_DIR . "/application/views/$view.php";
        require_once ROOT_DIR . '/application/views/templates/footer.php';
    }
}