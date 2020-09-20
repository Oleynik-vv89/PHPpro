<?php
namespace App\models;

use App\services\DB;

/**
 * Class Model
 * @property $id
 */
abstract class Model
{
    /**
     * @var DB
     */
    protected $db;

    /**
     * Метод для
     *
     * @return mixed
     */
    abstract protected function getTableName(): string;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->db = DB::getInstance();
    }


    public function getOne($id)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return $this->db->findObject($sql, static::class, [':id' => $id]);
    }

    public function getAll()
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->findObjects($sql, static::class);
    }

    public function insert()
    {
        $columns = [];
        $params = [];
        foreach ($this as $key => $value) {
            if ($key === 'db') {
                continue;
            }
            $columns[] = $key;
            $params[":{$key}"] = $value;
        }

        $tableName = $this->getTableName();
        $fields = implode(',', $columns);
        $placeholders = implode(',', array_keys($params));
        $sql = "INSERT INTO {$tableName} ({$fields}) VALUES ($placeholders)";
        $this->db->execute($sql, $params);

        $this->id = $this->db->lastInsertId();
    }

    protected function update()
    {
        foreach ($this as $key => $value) {
            echo 'Key^ ' . $key;
            var_dump($value);
        }
    }

    public function delete()
    {
        $sql = "DELETE FROM {$this->getTableName()} WHERE id = :id";
        $this->db->execute($sql, [':id' => $this->id]);
    }

    public function save()
    {
        if (!$this->id) {
            $this->insert();
            return;
        }

        $this->update();
    }
}
