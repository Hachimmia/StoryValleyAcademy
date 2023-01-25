<?php
require_once __DIR__ . '/config.php';
class Query
{
    //Using this class to query something from DB
    function select(string $query, array $params)
    {;
        $db = new Connect;
        $data = $db->prepare($query);
        $data->execute($params);
        $result = $data->fetchAll();
        return $result;
    }

    //Using this class to insert something to DB
    function insert(string $query, array $params)
    {;
        $db = new Connect;
        $data = $db->prepare($query);
        $data->execute($params);
        return $data;
    }

    //Using this class to determine if something exists 
    function checkIfExists(string $query, array $params)
    {;
        $db = new Connect;
        $data = $db->prepare($query);
        $data->execute($params);
        $count = $data->rowCount();
        return $count;
    }
}