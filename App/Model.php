<?php


namespace App;


class Model
{
    public $id;

    const TABLE = '';

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class );

    }

    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id LIMIT 1';
        $result = $db->query($sql, [':id' => $id], static::class);
        return $result[0];
    }

    public static function findByLast($limit = 3)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $limit;
        return $db->query($sql, [], static::class);
    }
}