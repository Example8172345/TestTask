<?php

namespace Application\Core;

use PDO;

abstract class Model
{
    /**
     * Return PDO object.
     */
    static function getDB()
    {
        static $db = null;
        if ($db === null) {
            $settings = require_once ROOT_DIR . '/application/config/connect.php';
            try {
                $db = new PDO('mysql:host=' . $settings['host'] . ';dbname=' . $settings['dbname'] . ';charset=utf8',
                    $settings['username'], $settings['password']);
                return $db;

            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
}