<?php
require_once __DIR__. '/../models/produit.php';
require_once __DIR__ . '/../config/database.php';

$produit = new Produit(
    '',
    0,
    '',
    0,
    '',
    $conn
);


$produits = $produit->getAll();

// foreach ($produits as $prod) {
//     echo "id: " . $prod["id"] . " - Nom du Produit : " . $prod["nom"] . "<br>" . "Prix : " . $prod["prix"] . "<br>" . "Description : " . $prod["prod_description"] . "<br>" . "Quantité : " . $prod["quantite"] . "<br>" . "Catégorie : " . $prod["categorie"] . "<br><br>";
// }


?>


<h1>Liste des produits</h1>
<table>
    <tr>
        <th>id</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Description</th>
        <th>Quantité</th>
        <th>Catégorie</th>
    </tr>

    <?php foreach ($produits as $prod): ?>
    <tr>
        <td><?= $prod["id"] ?></td>
        <td><?= $prod["nom"] ?></td>
        <td><?= $prod["prix"] ?></td>
        <td><?= $prod["prod_description"] ?></td>
        <td><?= $prod["quantite"] ?></td>
        <td><?= $prod["categorie"] ?></td>
    </tr>
    <?php endforeach; ?>

</table>
