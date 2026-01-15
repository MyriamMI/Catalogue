<?php
require_once 'MonPDO.php';
require_once 'classes/Produit.class.php';

class ProduitDAO
{

    // findAll()
    // Retourne tous les produits (tous les cours)
     
    public static function findAll()
    {
        $pdo = MonPDO::getPDO();
        $sql = "SELECT idCours, libelle, description, image, idType FROM cours";
        $stmt = $pdo->query($sql);

        $produits = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produits[] = new Produit(
                $row['idCours'],
                $row['libelle'],
                $row['description'],
                $row['image'],
                $row['idType']
            );
        }

        return $produits;
    }

    
    // findById()
    // Retourne un seul produit par son id, ou null s'il n'existe pas
    
    public static function findById(int $idCours)
    {
        $pdo = MonPDO::getPDO();
        $sql = "SELECT idCours, libelle, description, image, idType
                FROM cours
                WHERE idCours = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $idCours]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row === false) {
            return null;
        }

        return new Produit(
            $row['idCours'],
            $row['libelle'],
            $row['description'],
            $row['image'],
            $row['idType']
        );
    }
    //  findByType()
    //  Retourne tous les produits d'un type donné (par idType)
    
    public static function findByType($idType): array
    {
        $pdo = MonPDO::getPDO();
        $sql = "SELECT idCours, libelle, description, image, idType
                FROM cours
                WHERE idType = :idType";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':idType' => $idType]);

        $produits = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produits[] = new Produit(
                $row['idCours'],
                $row['libelle'],
                $row['description'],
                $row['image'],
                $row['idType']
            );
        }

        return $produits;
    }
}
