<?php
namespace App;

use PDO;
class Database {
    protected $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=courscrud","root","Anisoara1990@");
    }

    public function getPdo(){
        return $this->pdo;
    }
}