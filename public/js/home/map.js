document.addEventListener('DOMContentLoaded', function() {
    console.log('je teste le bon chargement de la page');
    
    var mymap = L.map('map').setView([43.2327, 0.0802], 13); // Coordonnées de Tarbes

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(mymap);

    // Tableau pour stocker les marqueurs
    var markers = [];

    // Fonction pour ajouter un marqueur
    function addMarker(lat, lng, name) {
        var marker = L.marker([lat, lng]).addTo(mymap);
        marker.bindPopup(name).openPopup();
        
        markers.push(marker);
        
        // Ajouter le bouton de suppression
        var popupContent = '<div>' + name + '</div><button onclick="deleteMarker(' + markers.length + ')">Supprimer</button>';
        marker.bindPopup(popupContent);
    }

    // Fonction pour supprimer un marqueur
    function deleteMarker(index) {
        if (markers[index - 1]) {
            mymap.removeLayer(markers[index - 1]);
            markers.splice(index - 1, 1);
        }
    }

    // Écouter le clic sur la carte pour ajouter un marqueur
    mymap.on('click', function(event) {
        var lat = event.latlng.lat;
        var lng = event.latlng.lng;
        
        var name = prompt("Nom du lieu :");
        
        if (name) {
            addMarker(lat, lng, name);
        }
    });
});
