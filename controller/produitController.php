<?php
include '../models/produit.php';
include '../config/database.php';


$nom = $_POST['nom'];
$prod_description = $_POST['prod_description'];
$prix = $_POST['prix'];
$quantite = $_POST['quantite'];
$categorie = $_POST['categorie'];


$produit = new Produit(
    $nom,
    $prix,
    $prod_description,
    $quantite,
    $categorie,
    $conn

);

$produit->create();
