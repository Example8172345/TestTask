<?php

namespace Application\Controllers;

use Application\Core\View;

class Home
{
    /**
     * Method controls main page.
     */
    public function index()
    {
        View::render('home/index', null);
    }
}