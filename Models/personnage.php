<?php

namespace App\Models;


class personnage
{
  private $id;
  private $name;

  private $classe;

  private $race;

  private $attaque;

  private $defense;

  public function __construct()
  {
  }

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getClasse()
  {
    return $this->classe;
  }

  public function getRace()
  {
    return $this->race;
  }

  public function getAttaque()
  {
    return $this->attaque;
  }

  public function getDefense()
  {
    return $this->defense;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setClasse($classe)
  {
    $this->classe = $classe;
  }

  public function setRace($race)
  {
    $this->race = $race;
  }

  public function setAttaque($attaque)
  {
    $this->attaque = $attaque;
  }

  public function setDefense($defense)
  {
    $this->defense = $defense;
  }
}
