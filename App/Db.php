<?php


namespace App;


class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = Config::instance();
        $this->dbh = new \PDO(
            'mysql:host=' . $config->data['db']['host'] . ';dbname=' . $config->data['db']['dbname'],
            $config->data['db']['user'],
            $config->data['db']['password']
        );
    }

    public function query($sql, $params, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        $res = $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        return $res;
    }

    public function execute($sql, $params)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if ($res) {
            return true;
        }
        return false;
    }

    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }
}