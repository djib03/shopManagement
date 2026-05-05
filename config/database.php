<?php
$database = "shop";
$host = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
    die("Connection failure" . $conn->error);
}


$sql =  " CREATE DATABASE IF NOT EXISTS $database";



if ($conn->query($sql) === true) {
    echo "Database"  . $database . " Created  ";
    $conn->select_db($database);
} else {
    die("Erreur SQL" . $conn->error);
}


$sqlCreateTable = "CREATE TABLE IF NOT EXISTS produits (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL,
    prod_description TEXT,
    quantite INT(11) NOT NULL,
    categorie VARCHAR(255) NOT NULL
)";

if ($conn->query($sqlCreateTable) === true){
    echo "Table produits created successfully";
} else {
    die("Error creating table: " . $conn->error);   
}