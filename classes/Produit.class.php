<?php

class Produit
{
    private $idCours;
    private $libelle;
    private $description;
    private $image;
    private $idType;

    public function __construct(
        $idCours,
        $libelle,
        $description,
        $image,
        $idType
    ) {
        $this->idCours     = $idCours;
        $this->libelle     = $libelle;
        $this->description = $description;
        $this->image       = $image;
        $this->idType      = $idType;
    }

    // Getters

    public function getIdCours()
    {
        return $this->idCours;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getIdType()
    {
        return $this->idType;
    }

    // Setters

    public function setLibelle(string $libelle)
    {
        $this->libelle = $libelle;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function setIdType(int $idType)
    {
        $this->idType = $idType;
    }
}
