<?php

class Produit
{
    public string $id;
    public string $nom;
    public int $prix;
    public string $prod_description;
    public int $quantite;
    public string $categorie;
    private $conn; // Connexion à la base de données


    public function __construct($id, $nom, $prix, $prod_description, $quantite, $categorie, $conn)
    {

        $this->id = $id;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->prod_description = $prod_description;
        $this->quantite = $quantite;
        $this->categorie = $categorie;
        $this->conn = $conn;
    }

    // Méthodes pour les opérations CRUD

    // Récupérer tous les produits
    public  function getAll()
    {
        $sql = "SELECT * FROM produits";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"] . " - Nom du Produit : " . $row["nom"] . "<br>" . "Prix : " . $row["prix"] . "<br>" . "Description : " . $row["prod_description"] . "<br>" . "Quantité : " . $row["quantite"] . "<br>" . "Catégorie : " . $row["categorie"] . "<br><br>";
            }
        } else {
            echo "0 results";
        }
    }
    // Récupérer un produit par son ID
    public  function getById($id) {}
    // Créer un nouveau produit
    public  function create()
    {
        $sql = "INSERT INTO produit(nom, prix, prod_description, quantite, categorie ) VALUE($this->nom, $this->prix, $this->prod_description, $this->quantite, $this->categorie)";


        if (($this->conn->query($sql) === true)) {
            echo "Produit inserer avec succes";
        }
    }
    // Mettre à jour un produit existant
    public  function update()
    {
        $sqlUpdateProd =$this->conn->prepare( "UPDATE produits SET nom= ?, prix= ?, prod_description= ?, quantite= ?, categorie= ? WHERE id= ?");

        $sqlUpdateProd->bind_pram( "sssis", $this->nom, $this->prix, $this->prod_description, $this->quantite, $this->categorie);

        $sqlUpdateProd->execute();




        if (($this->conn->query($sqlUpdateProd) === true)) {
            echo "Produit inserer avec succes";;
        }
    }
    // Supprimer un produit
    public  function delete($id) {
        $sqlDeleteProd = "DELETE FROM produits WHERE id= $id";

        if (($this->conn->query($sqlDeleteProd) === true)) {
            echo "Produit supprimer avec succes";
        }
    }
}
