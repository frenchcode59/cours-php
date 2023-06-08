<?php 
namespace App\Controllers;

require_once 'Models/personnageModel.php';

use App\Models\personnageModel;

class persoController {
    protected $PersonnageModel;

    public function __construct() {
        $this->PersonnageModel = new personnageModel();
    }

    public function getIndex() {
        $perso = $this->PersonnageModel->getAll();
        require_once 'Views/personnage/index.php';
    }
    

    public function getCreate() {
        require_once 'Views/perso/create.php';
    }

    public function postCreate() {
        $perso = $_POST;
        $this->PersonnageModel->create($perso);
        header('Location: ../perso/index');
    }
}
