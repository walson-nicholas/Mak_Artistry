<?php


class DataBase
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "mak_artistry";

    public function getInstance(){
        return new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }
}