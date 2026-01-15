<?php
// Représente un type de produit (JavaScript, PHP, SQL, Jeux web)

class Type
{
    private $idType;
    private $libelle;

    public function __construct($idType, $libelle)
    {
        $this->idType  = $idType;
        $this->libelle = $libelle;
    }

    public function getIdType()
    {
        return $this->idType;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
}
