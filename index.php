<?php
require 'config/database.php';
require_once __DIR__. '/models/produit.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopMan</title>
</head>

<body>
    <div class="container">
        <!-- INCLURE LE FORMULAIRE -->
        <div class="form-section">
            <?php include 'views/formulaire.php'; ?>
        </div>

        <!-- INCLURE LA LISTE -->
        <div class="list-section">
            <?php include 'views/liste.php'; ?>
        </div>
    </div>
</body>

</html>