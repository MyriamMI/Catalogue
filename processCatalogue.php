<?php
require_once __DIR__ . "/MonPDO.php";
require_once __DIR__ . "/ProduitDAO.php";
require_once __DIR__ . "/TypeDAO.php";

$types = TypeDAO::findAll();

$typeSelected = isset($_GET["type"]) ? $_GET["type"] : "tous";

if ($typeSelected === "tous") {
    $produits = ProduitDAO::findAll();
} else {
    $produits = ProduitDAO::findByType($typeSelected);
}
