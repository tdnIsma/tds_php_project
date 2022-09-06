<?php

class Database {

    private $user = "root"; 
    private $password = "";
    private $server_ip = "localhost";
    private $dbname = "pontodb";

    public function connect(){ 

        $con = new PDO("mysql:host=".$this->server_ip.";dbname=".$this->dbname, $this->user, $this->password); //instanciar
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;

    }

    public function disconnect(){

    }

}

//$db = new Database();
//$db->connect();

?>