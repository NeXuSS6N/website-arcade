<?php
$servername = "localhost"; // Adresse du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL
$dbname = "arcade website"; // Nom de la base de données MySQL

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
} else {
    echo "Connexion à la base de donnée réussi.";
}

// Fonction pour créer un nouvel utilisateur
function createUser($username, $password) {
    global $conn;
    
    // Hash du mot de passe
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Requête SQL pour insérer un nouvel utilisateur dans la base de données
    $sql = "INSERT INTO account (A_Username, A_Mdp) VALUES ('$username', '$hashed_password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Nouvel utilisateur créé avec succès.";
    } else {
        echo "Erreur lors de la création de l'utilisateur : " . $conn->error;
    }
}