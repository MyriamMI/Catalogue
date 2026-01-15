<?php

require_once 'MonPDO.php';
require_once 'classes/Type.class.php';

class TypeDAO
{
    public static function findAll()
    {
        $pdo = MonPDO::getPDO();
        $sql = "SELECT idType, libelle FROM type";
        $stmt = $pdo->query($sql);

        $types = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $types[] = new Type(
                $row['idType'],
                $row['libelle']
            );
        }

        return $types;
    }

    /*
      findById()
      Retourne un objet Type correspondant à l'id donné
      ou null si aucun type trouvé
    */
      
    public static function findById($idType)
    {
        $pdo = MonPDO::getPDO();
        $sql = "SELECT idType, libelle FROM type WHERE idType = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $idType]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row === false) {
            return null;
        }

        return new Type(
            $row['idType'],
            $row['libelle']
        );
    }
}
