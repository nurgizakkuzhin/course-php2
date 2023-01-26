<?php


namespace App;


class Db
{
    protected $dbh;

    public function __construct()
    {
        $configDb = (include __DIR__ . '/config.php')['db'];
        $this->dbh = new \PDO(
            'mysql:host=' . $configDb['host'] . ';dbname=' . $configDb['dbname'],
            $configDb['user'],
            $configDb['password']
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
}