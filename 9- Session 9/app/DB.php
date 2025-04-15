<?php

namespace App;

use PDO;
use PDOException;

class DB {

    private const SERVERNAME = "localhost";
    private const USERNAME = "root";
    private const PASSWORD = "";
    private const DBNAME = "ecom";
    private $connection;
    private $tableName;
    private $statment;
    

    private function __construct(string $tableName) {
        $this->tableName = $tableName;
        try {
            $connection = new PDO("mysql:host=" . self::SERVERNAME . ";dbname=". self::DBNAME, self::USERNAME, self::PASSWORD);
            // set the PDO error mode to exception
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        

        $this->connection = $connection;
    }



    public static function table(string $tableName) {
        return  new self($tableName);

    }

    public function select(string $columns = "*") {
        $this->statment = "SELECT $columns FROM " . $this->tableName;

        return $this;
    }

    // public function insert(string $columns, string $values){
    //     $this->statment = "INSERT INTO {$this->tableName} ($columns) values ($values)";       

    //     return $this;
    // }

    public function insert(array $data){

        $columns = implode(',', array_keys($data));
        $values = implode(',', array_values($data));
        
        $this->statment = "INSERT INTO {$this->tableName} ($columns) values ($values)";       

        return $this;
    }

    public function execute() {
        $stmt = $this->connection->query($this->statment);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



}