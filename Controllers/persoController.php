<?php

namespace App\Controllers;

require_once 'Models/personnageModel.php';

use App\Models\personnageModel;

class persoController
{
  protected $personnageModel;

  public function __construct()
  {
    $this->personnageModel = new PersonnageModel();
  }

  public function getIndex()
  {
    $persos = $this->personnageModel->getAll();
    require_once 'Views/personnages/index.php';
  }


  public function getCreate()
  {
    require_once 'Views/personnages/create.php';
  }

  public function postCreate()
  {
    $perso = $_POST;
    $this->personnageModel->create($perso);
    header('Location: ../perso/index');
  }
}
