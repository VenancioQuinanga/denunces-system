<?php

class Database{
    public function getConnection(){
        try {

            $conn = new PDO("mysql:dbname=bluestar;host=localhost","root","");
            return $conn;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}