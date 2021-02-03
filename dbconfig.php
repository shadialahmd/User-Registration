<?php

class Database{

    private $host="127.0.0.1";
    private $user="root";
    private $pass="";
    private $dbname="userreg";

    public $conn;

    


    public function getConnection(){

        $conn=mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);
        if(!$conn){
            die("error in DB connection" . mysqli_connect_error());
        }
       // echo 'ok';
        return $conn;
    }





}

// $db=new Database();
// $db->getConnection();


?>