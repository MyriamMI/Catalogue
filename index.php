<?php
require_once 'MonPDO.php';
require_once 'classes/Produit.class.php';
require_once 'classes/Type.class.php';
require_once 'ProduitDAO.php';
require_once 'TypeDAO.php';

// Récupère tous les produits
$produits = ProduitDAO::findAll();
?>