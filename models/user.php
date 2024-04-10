<?php

class user extends Database{

    private $conn;
    private $uri ;

    public function __construct(){
        $this->conn = $this->getConnection();
    }

    public function index(){

    }
}

?>