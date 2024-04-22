document.addEventListener('DOMContentLoaded', function() {
    console.log('je teste le bon chargement de la page');
    
    var mymap = L.map('map').setView([43.2327, 0.0802], 13); // Coordonnées de Tarbes

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(mymap);

    // Tableau pour stocker les marqueurs
    var markers = [];

    // Ajouter un marqueur
    function addMarker(e) {
        var marker = L.marker(e.latlng).addTo(mymap);
        markers.push(marker);
        
        // Demander un nom pour le marqueur
        var markerName = prompt('Entrez un nom pour ce marqueur:');
        
        // Ajouter le nom comme propriété au marqueur
        marker.bindPopup(markerName).openPopup();
        
        // Stocker le marqueur avec son nom
        localStorage.setItem(markerName, JSON.stringify(e.latlng));
    }

    // Écouter le clic sur la carte pour ajouter un marqueur
    mymap.on('click', addMarker);

    // Charger les marqueurs depuis localStorage
    for (var i = 0; i < localStorage.length; i++) {
        var key = localStorage.key(i);
        var markerPosition = JSON.parse(localStorage.getItem(key));
        
        if (markerPosition) {
            var marker = L.marker(markerPosition).addTo(mymap);
            marker.bindPopup(key).openPopup();
            markers.push(marker);
        }
    }
});
