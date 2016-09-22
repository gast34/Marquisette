var map;
var geocoder;
function initMap() {

    geocoder = new google.maps.Geocoder();
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 43.673, lng: 4.133},
        zoom: 12
    });

}
function TrouverAdresse() {

    // Récupération de l'adresse tapée dans le formulaire
    var adresse = document.getElementById('adresse').value;
    geocoder.geocode({'address': adresse}, function (results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            // Récupération des coordonnées GPS du lieu tapé dans le formulaire
            var strposition = results[0].geometry.location + "";
            strposition = strposition.replace('(', '');
            strposition = strposition.replace(')', '');
            // Affichage des coordonnées dans le <span>
            document.getElementById('text_latlng').innerHTML = 'Coordonnées : ' + strposition;

            // Création du marqueur du lieu (épingle)
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
        } else {
            alert('Adresse introuvable: ' + status);
        }
        $.ajax({
            url: 'gestion',
            type: 'POST', // Le type de la requête HTTP, ici devenu POST

            data: 'adresse=' + adresse + '&longitude=' + results[0].geometry.location.lng()
                    + '&latitude=' + results[0].geometry.location.lat(),
            // On fait passer nos variables, exactement comme en GET, au script more_com.php

            dataType: 'string'

        });

    });
}
$('document').ready(function () {

});




