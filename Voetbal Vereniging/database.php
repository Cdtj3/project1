<?php
/**
 * Created by PhpStorm.
 * User: enrico
 * Date: 21-9-2018
 * Time: 13:38
 */
class database{

    public $db_host = "localhost";
    public $db_username = "root";
    public $db_password = "root";
    public $db_database = "avv";
    public $conn = "";

    public function connect(){
        $this->conn = mysqli_connect($this->db_host, $this->db_username, $this->db_password, $this->db_database);

        if(!$this->conn){

        }
        else{

        }
    }

    public function execute($query){
        $connection = $this->conn;
        $connection->query($query);
    }

    public function read($query){
        $connection = $this->conn;
        $result = $connection->query($query);
        return ($result);
    }
}
$database = new database;
?>