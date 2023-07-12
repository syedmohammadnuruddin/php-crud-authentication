<?php
class Database{
    public $conn;
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ctg_283";

        try {
        $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        echo "Connected successfully";
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }

    //Advance Format
    public function dataWrite($sql, $valuArray){
        $statement = $this->conn->prepare($sql);
        $statement->execute($valuArray);
    }

    //Normal Format
    public function dataSave($sql){
        $statement = $this->conn->prepare($sql);
        $statement->execute();
    }

    public function dataRead($sql){
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }
}

// $db = new Database();
?>