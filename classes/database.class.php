<?php

require_once("config/config.php");

class Database{

    //database properties

    private $host = DB_SERVER;
    private $user = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $dbname = DB_DATABASE;

    public function connect(){
        
        $connection = new mysqli($this->host,$this->user,$this->password,$this->dbname );
        if($connection->connect_errno) {
            die ("Unable to connect to Database " . $connection->connect_error);
        } else {
         return $connection;
        }

    }

    //statement to connect to databse and get sql query
    public function stmt($sql){
     return $result =  $this->connect()->query($sql);
      if (!$result) {
          echo "Database Error, see stmt()";
      }
    }

    //fetches all the records as assoc array from a table. Takes the SQL query as parameter.
    public function allRecords($sql) {
            $result = $this->stmt($sql);
            $numRows = $result->num_rows;
    
            if ($numRows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            }
            return $data;
    }

    // public function update($sql){
    //     $this->connect()->query($sql);
    // }

    // //Updates image both user profile and product. Takes SQL query as paratemer
    // public function updateImage($sql){
    //     $result = $this->connect()->query($sql);
    //     if(!$result) {
    //         echo "Something went wrong";
    //     }
    // }

}
