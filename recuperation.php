<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=animetable', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Sélectionner les données de la colonne "nomAnime" et "link" dans la table "vostfr"
    $query = $bdd->query('SELECT nomAnime, link FROM vostfr');
    
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode(array("data" => $data));
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
