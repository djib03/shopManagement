<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopMan</title>
</head>

<body>

    <h1>Ajouter un produit</h1>
    <form action="../controller/produitController.php" method="post">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <label for="prod_description">Description:</label>
        <textarea id="prod_description" name="prod_description" required></textarea>
        <br>
        <label for="prix">Prix:</label>
        <input type="number" id="prix" name="prix" step="0.01" required>
        <br>
        <label for="quantite">Quantité:</label>
        <input type="number" id="quantite" name="quantite" required>
        <br>
        <label for="categorie">Catégorie:</label>
        <select name="categorie" id="categorie" required>
            <option value="">Sélectionnez une catégorie</option>
            <option value="Electronique">Electronique</option>
            <option value="Vêtements">Vêtements</option>
            <option value="Alimentation">Alimentation</option>
        </select>
        <input type="submit" value="Ajouter">
    </form>
</body>

</html>