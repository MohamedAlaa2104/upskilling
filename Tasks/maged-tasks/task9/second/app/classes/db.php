<?php


namespace App\classes;
use \PDO;

class DB {
    private const SERVERNAME = "localhost";
    private const USERNAME = "root";
    private const PASSWORD = "";
    private const DBNAME = "ecom2";
    private $connection;

    public  function __construct() {
     $this->connect(); 
    }



    public function connect() {
        try {
            $connection = new PDO("mysql:host=" . self::SERVERNAME, self::USERNAME, self::PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            $connection->exec("CREATE DATABASE IF NOT EXISTS ecom2 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
             echo "✅ قاعدة البيانات 'ecom2' تم إنشاؤها أو موجودة بالفعل.<br>";
          
             $connection = new PDO("mysql:host=" . self::SERVERNAME . ";dbname=". self::DBNAME, self::USERNAME, self::PASSWORD);
             $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             return $this->connection;
        } catch (\PDOException $e) {
            echo "❌ فشل الاتصال: " . $e->getMessage();
        }
    }




    public  function getConnection() {
        return $this->connect();
    }

    public function table(string $tableName) {
       
        try {
            $connection = new PDO("mysql:host=" . self::SERVERNAME . ";dbname=". self::DBNAME, self::USERNAME, self::PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
            
            $sql = "CREATE TABLE IF NOT EXISTS $tableName (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
          
            
            $connection->exec($sql);
            echo "Table $tableName created successfully";
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
          
          $connection = null;
    }
    public function insert(string $tableName, array $data) {
        try {
            $connection = new PDO("mysql:host=" . self::SERVERNAME . ";dbname=". self::DBNAME, self::USERNAME, self::PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $columns = implode(", ", array_keys($data));
            $values = "'" . implode("', '", array_values($data)) . "'";

            $sql = "INSERT INTO $tableName ($columns) VALUES ($values)";

            $connection->exec($sql);
            
            
            echo "New record created successfully";
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
         
          $connection = null;
    }
    public function delete(string $tableName,$id ) {
    try {
        $connection = new PDO("mysql:host=" . self::SERVERNAME . ";dbname=". self::DBNAME, self::USERNAME, self::PASSWORD);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
        
        $sql = "DELETE FROM $tableName WHERE id=$id";
      
       $connection->exec($sql);
       
        echo "Record deleted successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      $connection = null;
    }
    // public function ubdate(string $tableName, array $data,$id) {
    //     try {
    //         $connection = new PDO("mysql:host=" . self::SERVERNAME . ";dbname=". self::DBNAME, self::USERNAME, self::PASSWORD);
    //         $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
    //         $sql = "UPDATE tableName SET lastname='Doe' WHERE id=$id";
          
         
    //         $stmt = $connection->prepare($sql);
    //         $stmt->execute();
        
    //         echo $stmt->rowCount() . " records UPDATED successfully";
    //       } catch(PDOException $e) {
    //         echo $sql . "<br>" . $e->getMessage();
    //       }
          
    //       $connection = null;
    // }
  
}

   
    






