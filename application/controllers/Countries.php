<?php

namespace Application\Controllers;

use Application\Core\View;
use Application\Models\Country;

class Countries
{
    /**
     * Method controls list of countries page.
     */
    public function index()
    {
        $countries = Country::getAllNames();
        View::render('countries/index', $countries);
    }

    /**
     * Method controls adding countries page.
     */
    public function add()
    {
        View::render('countries/add', null);
    }

    /**
     * Method handles AJAX-query from form. Url: "/countries".
     */
    public function ajaxAdding()
    {
        echo $this->adding();
    }

    /**
     * Method handles query from form. Url: "/countries/add".
     */
    public function postFormAdding()
    {
        $this->adding();
        header('Location: /countries/add');
    }

    /**
     * Method gets value from request, protects, send to model.
     * Returns boolean success flag for adding to the database.
     * @return bool
     */
    private function adding()
    {
        if (array_key_exists('country', $_REQUEST)) {
            $country = htmlspecialchars(trim($_REQUEST['country']));
            if ($country != '') {
                return Country::addName($country);
            }
        }
        return false;
    }
}