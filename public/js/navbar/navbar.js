// Afficher la liste des marqueurs
function showMarkerList() {
    var markerList = document.getElementById('markerList');
    markerList.style.display = 'block';
}

// Écouter le clic sur le bouton pour afficher la liste des marqueurs
document.addEventListener('DOMContentLoaded', function () {
    var showMarkerListBtn = document.getElementById('showMarkerListBtn');
    if (showMarkerListBtn) {
        showMarkerListBtn.addEventListener('click', showMarkerList);
    }
});
