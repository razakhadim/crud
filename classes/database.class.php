<?php

require_once("config.php");

class Database{

    //database properties

    private $host = DB_SERVER;
    private $user = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $dbname = DB_DATABASE;

    // public function __construct()
    // {
    //     $this->connect();
    // }

    public function connect(){
        
        $connection = new mysqli($this->host,$this->user,$this->password,$this->dbname );

        // if($connection) {
        //     echo "connection is OK";
        // }

        if($connection->connect_errno) {
            die ("Unable to connect to Database " . $connection->connect_error);
        } else {

         return $connection;
        }

    }

    //Gets a single record by ID from a table. Takes SQL query as param
    public function single($sql)
    {
        $result = $this->connect()->query($sql);
        if (!$result) {
            echo "Something went wrong";
        }
    }

    //fetches all the records as assoc array from a table. Takes the SQL query as parameter.
    public function allRecords($sql) {
            $result = $this->connect()->query($sql);
            $numRows = $result->num_rows;
    
            if ($numRows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            }
            return $data;
    }

    //deletes a record from a table. Takes the SQL query as parameter
    public function delete($sql)
    {
         $result = $this->connect()->query($sql);
        if (!$result) {
            echo "Something went wrong";
        }
    }

    //Updates image both user profile and product. Takes SQL query as paratemer
    public function updateImage($sql){
        $result = $this->connect()->query($sql);
        if(!$result) {
            echo "Something went wrong";
        }
    }

}
