<?php

namespace App\Models;

require_once 'Database.php';
require_once 'Models/personnage.php';

use App\Database;
use PDO;

class personnageModel
{
  private $connection;

  public function __construct()
  {
    $this->connection = new Database();
  }
  public function getAll()
  {
    $query = $this->connection->getPdo()->prepare("SELECT id,name,classe,race,attaque,defense FROM `char`");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS, "App\Models\personnage");
  }

  public function create($perso)
  {
    $query = $this->connection->getPdo()->prepare('INSERT INTO `char` (name,classe,race,attaque,defense ) VALUES (:name,:classe,:race,:attaque,:defense )');
    $query->execute([
      'name' => $perso['name'],
      'classe' => $perso['classe'],
      'race' => $perso['race'],
      'attaque' => $perso['attaque'],
      'defense' => $perso['defense'],
    ]);
  }
}
