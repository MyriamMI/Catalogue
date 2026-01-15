<?php
require_once __DIR__ . "/MonPDO.php";
require_once __DIR__ . "/classes/Produit.class.php";
require_once __DIR__ . "/ProduitDAO.php";

$produits = ProduitDAO::findAll();
