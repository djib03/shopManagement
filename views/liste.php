<?php
require './models/produit.php';
require './config/database.php';

$produit = new Produit(
    null,
    '',
    '',
    '',
    '',
    '',
    $conn

);


$produits = $produit->getAll();

foreach ($produits as $prod) {
    echo "id: " . $prod["id"] . " - Nom du Produit : " . $prod["nom"] . "<br>" . "Prix : " . $prod["prix"] . "<br>" . "Description : " . $prod["prod_description"] . "<br>" . "Quantité : " . $prod["quantite"] . "<br>" . "Catégorie : " . $prod["categorie"] . "<br><br>";
}
