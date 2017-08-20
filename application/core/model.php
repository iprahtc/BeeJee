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

    function getInsertUser(){
        return $this->db->prepare("INSERT INTO user (email, name) VALUES (:email, :name)");
    }

    function getInsertTask(){
        return $this->db->prepare("INSERT INTO tasks (id_user, status, text, img, name_text) VALUES (:id_user, :status, :text, :img, :name_text)");
    }
}