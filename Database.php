<?php

namespace app;

use PDO;

class Database
{
    public PDO $pdo;
    public static Database $db;

    /**
     * Database constructor.
     */
    public function __construct()
    {
        $this->pdo = new PDO("mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;port=8889;dbname=stat;charset=utf8", 'root', 'root');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db = $this;
    }

    /**
     * @param string $tblName
     * @return array
     */
    public function getData(string $tblName)
    {
        $statement = $this->pdo->prepare('SELECT * FROM '.$tblName);
        $statement->execute();
        return $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param string $tblName
     * @param string $nameId
     * @param $id
     * @return array
     */
    public function getDatasById(string $tblName, string $nameId,  $id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM $tblName WHERE $nameId = :id");
        $statement->bindValue(':id', $id);
        $statement->execute();
        return $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param string $sql
     * @param array $params
     * @param string $optionCheck
     * @return mixed
     */
    public function getDataBySqlString(string $sql, $params=[],$optionCheck = 'fetchAll')
    {
        $statement = $this->pdo->prepare($sql);
        foreach ($params as $k => $param){
            $statement->bindValue($k, $param);
        }
        $statement->execute();
        return $data = $statement->$optionCheck(PDO::FETCH_ASSOC);
    }

    /**
     * @param string $tblName
     * @param string $nameId
     * @param $id
     * @return mixed
     */
    public function getSingleDataById(string $tblName, string $nameId,  $id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM $tblName WHERE $nameId = :id");
        $statement->bindValue(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $obj
     * @param $sql
     * @param array $params
     * @return string
     */
    public function insertInDB($obj,$sql,$params=[])
    {
        $statement = $this->pdo->prepare($sql);
        foreach ($params as $k => $param){
            $statement->bindValue($k, $param);
        }
        $statement->execute();
        return $this->pdo->lastInsertId();
    }
}



