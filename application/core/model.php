<?php

class Model
{

    private $login = 'root';
    private $pass = '';
    private $host = 'localhost';
    private $dbname = 'beejee';
    public $db;

    function __construct(){
        $base = "mysql:host=$this->host;dbname=$this->dbname";
        $this->db = new PDO($base, $this->login, $this->pass);
    }
}