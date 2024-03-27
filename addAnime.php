<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];

    // Configuration de la connexion à la base de données
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "animetable";

    // Connexion à la base de données
    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("Échec de la connexion : " . $connexion->connect_error);
    }

    // Insérer les données dans la base de données
    $sql = "INSERT INTO vostfr (nomAnime) VALUES ('$nom')";
    if ($connexion->query($sql) === FALSE) {
        echo "Erreur dans la requete";
    } 
    header('Location: index.html');
    exit;

    // Fermer la connexion
    $connexion->close();
}
?>
