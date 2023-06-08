<?php

namespace App\Models;

require_once 'Database.php';
require_once 'Models/personnage.php';

use App\Database;

use PDO;

class personnageModel{
    private $connection;

    public function __construct(){
        $this->connection = new Database();
    }
    public function getAll(){
        $query = $this->connection->getPdo()->prepare("SELECT id,name FROM perso");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, "App\Models\perso");
    }

    public function create($perso){
        $query = $this->connection->getPdo()->prepare('INSERT INTO perso (name) VALUES (:name)');
        $query->execute([
            'name' => $perso['name']
        ]);
    }
}