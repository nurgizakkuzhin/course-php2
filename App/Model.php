<?php


namespace App;

/**
 * Class Model
 * @package App
 *
 * @property int $id
 */
abstract class Model
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

    protected function insert()
    {
        $props = get_object_vars($this);
        $columns = [];
        $binds = [];
        $data = [];
        foreach ($props as $name => $value) {
            if ($name === 'id') {
                continue;
            }
            $columns[] = $name;
            $binds[] = ':' . $name;
            $data[':' . $name] = $value;
        }
        $sql = 'INSERT INTO ' . static::TABLE . ' 
        (' . implode(', ', $columns) . ') 
        VALUES (' . implode(', ', $binds) . ')';

        $db = new Db();
        $db->execute($sql, $data);
        $this->id = $db->getLastId();
    }

    protected function update()
    {
        $props = get_object_vars($this);
        $columns = [];
        $binds = [];
        $data = [];
        foreach ($props as $columns => $value) {
            $data[':' . $columns] = $value;
            if ($columns === 'id') {
                continue;
            }
            $binds[] = $columns . '=:' . $columns;
        }
        $sql = 'UPDATE ' . static::TABLE . ' SET ' . implode(', ', $binds) . ' WHERE id=:id';

        $db = new Db();
        $db->query($sql, $data, static::class);
    }

    public function delete()
    {
        $data = [':id' => $this->id];
        $db = new Db();
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';
        $db ->execute($sql, $data);
    }

    public function save()
    {
        if (isset($this->id)) {
            $this->update();
        } else {
            $this->insert();
        }
    }
}