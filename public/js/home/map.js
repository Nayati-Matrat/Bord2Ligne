document.addEventListener('DOMContentLoaded', function () {
    console.log('je teste le bon chargement de la page');

    var mymap = L.map('map').setView([43.2327, 0.0802], 13); // Coordonnées de Tarbes

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(mymap);

    // Tableau pour stocker les marqueurs
    var markers = [];

    // Créer le menu Gigachad en bas de la page
    var gigachadMenu = document.createElement('div');
    gigachadMenu.id = 'gigachad-menu';
    gigachadMenu.classList.add('bg-light', 'border', 'p-3', 'shadow-sm', 'position-fixed', 'col-md-2');
    gigachadMenu.style.bottom = '-300px'; // Caché au départ
    gigachadMenu.style.left = '0';
    gigachadMenu.style.right = '0';
    gigachadMenu.style.height = '300px';
    gigachadMenu.style.overflowY = 'auto';
    gigachadMenu.style.pointerEvents = 'none'; // Ne pas réagir aux clics

    var gigachadContent = document.createElement('div');
    gigachadContent.innerHTML = '<h5>Liste des points</h5><ul id="marker-list" class="list-group"></ul>';
    gigachadMenu.appendChild(gigachadContent);

    document.body.appendChild(gigachadMenu);

    var gigachadBtn = document.getElementById('gigachad-btn');

    // Fonction pour ajouter un marqueur
    function addMarker(e) {
        var marker = L.marker(e.latlng).addTo(mymap);
        markers.push(marker);

        // Demander un nom pour le marqueur
        var markerName = prompt('Entrez un nom pour ce marqueur:');

        // Ajouter le nom comme propriété au marqueur
        marker.bindPopup(markerName).openPopup();

        // Stocker le marqueur avec son nom et ses coordonnées dans localStorage
        localStorage.setItem(markerName, JSON.stringify({
            name: markerName,
            latlng: e.latlng
        }));

        // Ajouter le marqueur à la liste dans le menu Gigachad
        addMarkerToList(markerName);
    }

    // Fonction pour ajouter un marqueur à la liste dans le menu Gigachad
    function addMarkerToList(markerName) {
        var markerList = document.getElementById('marker-list');
        var listItem = document.createElement('li');
        listItem.classList.add('list-group-item');
        listItem.textContent = markerName;
        listItem.addEventListener('click', function () {
            // Centrer la carte sur le marqueur cliqué
            var markerData = JSON.parse(localStorage.getItem(markerName));
            mymap.setView(markerData.latlng, 13);
        });
        markerList.appendChild(listItem);
    }

    // Charger les marqueurs depuis localStorage et les ajouter au menu Gigachad
    for (var i = 0; i < localStorage.length; i++) {
        var key = localStorage.key(i);
        var markerDataString = localStorage.getItem(key);

        try {
            var markerData = JSON.parse(markerDataString);
            if (markerData && markerData.latlng) {
                var marker = L.marker(markerData.latlng).addTo(mymap);
                marker.bindPopup(markerData.name).openPopup();
                markers.push(marker);

                // Ajouter le marqueur à la liste dans le menu Gigachad
                addMarkerToList(key);
            }
        } catch (error) {
            console.error('Erreur lors de la lecture depuis localStorage :', error);
        }
    }

    // Événement clic sur le bouton Gigachad
    gigachadBtn.addEventListener('click', function (event) {
        gigachadMenu.style.bottom = gigachadMenu.style.bottom === '-300px' ? '0' : '-300px';
        event.stopPropagation(); // Empêcher la propagation du clic sur la carte
    });

    // Écouter le clic sur la carte pour ajouter un marqueur
    mymap.on('click', addMarker);
});
