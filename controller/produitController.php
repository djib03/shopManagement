<?php

require './models/produit.php';


$nom = $_POST['nom'];
$prod_description = $_POST['prod_description'];
$prix = $_POST['prix'];
$quantite = $_POST['quantite'];
$categorie = $_POST['categorie'];


$produit = new Produit(
    null,
    $nom,
    $prix,
    $prod_description,
    $quantite,
    $categorie,
    $conn

);

$produit->create();


