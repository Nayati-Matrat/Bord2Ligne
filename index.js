$(document).ready(function() {
    $.ajax({
        url: 'recuperation.php', // Assurez-vous que le chemin vers votre fichier PHP est correct
        method: 'GET',
        dataType: 'json',
        success: function(response) {
            var tableBody = $('#table-body');
            
            if (response && response.data && response.data.length > 0) {
                response.data.forEach(function(row) {
                    var nomAnime = row.nomAnime;
                    var link = row.link;
                    var newRow = '<tr><td>' + nomAnime + '</td><td>' + link + '</td></tr>';
                    tableBody.append(newRow);
                });
            } else {
                // Aucune donnée n'a été renvoyée ou la structure de la réponse est incorrecte
                console.log('Aucune donnée disponible.');
            }
        },
        error: function(xhr, status, error) {
            console.log('Erreur AJAX : ' + status + ', ' + error);
        }
    });
});
