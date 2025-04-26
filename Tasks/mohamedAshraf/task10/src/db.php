<?php

namespace MohamedAshraf\Task10;

use PDO;
use PDOException;

class Db
{
    private $statement;

    private const SERVER_NAME = "127.0.0.1";
    private const USERNAME = "root";
    private const PASSWORD = "";
    private const DB_NAME = "ecom";
    private string $tableName;
    private $connection;

    public function __construct(string $tableName)
    {
        $this->tableName = $tableName;
        self::connectToDb();
    }

    private function connectToDb()
    {
        try {
            $this->connection = new PDO(
                "mysql:host=" . self::SERVER_NAME . ";dbname=" . self::DB_NAME,
                self::USERNAME,
                self::PASSWORD
            );

            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            throw $e;
        }

    }
    public static function CreateTable(string $tableName)
    {
        return new self($tableName);
    }

    public function select(string $columns = '*', string $condition = '')
    {
        $this->statement = "SELECT $columns FROM " . $this->tableName;
        if (!empty($condition)) {
            $this->statement .= " WHERE $condition";
        }
        return $this;
    }

    // public function insert(string $columns, string $values)
    // {
    //     $this->statement = "INSERT INTO " . $this->tableName . "($columns) VALUES  ($values)";
    //     return $this;
    // }

    public function insert(array $data)
    {
        $columns = implode(',', array_keys($data));
        $values = implode(',', array_map(fn($v) => "'$v'", array_values($data)));
        $this->statement = "INSERT INTO {$this->tableName} ($columns) VALUES ($values)";
        return $this;
    }

    public function update(array $data, $id)
    {
        $query = [];
        foreach ($data as $key => $value) {
            array_push($query, "$key = " . $this->connection->quote($value));
        }

        $modifiedQuery = implode(", ", $query);

        $this->statement = "UPDATE {$this->tableName} SET {$modifiedQuery} WHERE id = {$id}";
        return $this;
    }

    public function delete($id)
    {
        $this->statement = "DELETE FROM $this->tableName WHERE id = $id";
        return $this;
    }

    public function execute()
    {
        $statementToExecute = $this->connection->query($this->statement);
        return $statementToExecute->fetchAll(PDO::FETCH_ASSOC);
    }

}