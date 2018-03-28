<?php

namespace Application\Models;

use Application\Core\Model;
use PDO;

class Country extends Model
{
    public static function getAllNames()
    {
        $pdo = static::getDB();
        $sql = 'SELECT country FROM countries ORDER BY id;';
        $countriesListStmt = $pdo->query($sql);
        return $countriesListStmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function addName($countryName)
    {
        $pdo = static::getDB();
        $sql = 'INSERT INTO countries ( country ) values ( :cname );';
        $countryStmt = $pdo->prepare($sql);
        $result = $countryStmt->execute(array(
            'cname' => $countryName
        ));
        return $result;
    }

}