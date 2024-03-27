<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomAnime = $_POST["nomAnime"];

    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=animeTable', 'root', '');

    // Préparation de la requête de suppression
    $query = $bdd->prepare('DELETE FROM vostFr WHERE nomAnime = :nomAnime');

    // Exécution de la requête
    $query->execute(array(':nomAnime' => $nomAnime));

    // Vérification du nombre de lignes affectées
    $count = $query->rowCount();

    if ($count > 0) {
        echo "L'anime \"$nomAnime\" a été supprimé avec succès.";
    } else {
        echo "L'anime \"$nomAnime\" n'a pas été trouvé dans la base de données.";
    }
    header('Location: index.html');
    exit;
}

// Rediriger vers index.html après 10 secondes
header("refresh:10;url=index.html");
exit();
?>
