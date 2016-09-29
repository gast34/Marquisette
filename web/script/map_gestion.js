var map;
var geocoder;

function initMap() {

    geocoder = new google.maps.Geocoder();
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 43.673, lng: 4.133},
        zoom: 12
    });

    var nb_mark = parseInt($('#val').text());

    var tab_coo = new Array();
    var tab_titre = new Array();

    for (var i = 1; i < nb_mark + 1; i++)
    {
        tab_titre.push($('.description' + i).text());
        tab_coo.push({lat: parseFloat($('.latitude' + i).text()), lng: parseFloat($('.longitude' + i).text())});
    }

    var marqueur = {
        coo: tab_coo,
        titre: tab_titre

    };

    for (var x = 1; x < nb_mark + 1; x++)
    {
        var marker = new google.maps.Marker({
            position: marqueur.coo[x - 1],
            map: map,
            title: marqueur.titre[x - 1]
        });

    }


}
function TrouverAdresse() {//Fonction pour ajouter un point de repère sur la carte

    // Récupération de l'adresse tapée dans le formulaire
    var adresse = document.getElementById('adresse').value;
    var description = $('#description').val();
    geocoder.geocode({'address': adresse}, function (results, status) {
        if (status === google.maps.GeocoderStatus.OK) {

            $.ajax({
                url: 'addPoints',
                type: 'POST',
                data: 'adresse=' + adresse + '&longitude=' + results[0].geometry.location.lng()
                        + '&latitude=' + results[0].geometry.location.lat() + '&description=' + description,
                dataType: 'text',
                success: function (data, textStatus, jqXHR) {
                var obj = $.parseJSON(data);
                CreerPoint(obj);
            }

            });

            //Centre la carte sur le point trouvé
            map.setCenter(results[0].geometry.location);

            // Création du marqueur du lieu (épingle)
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });

        } else {
            alert('Adresse introuvable: ' + status);
        }

    });

}
function CreerUser(user) {//Fonction de création de la div user

    $('.scrollable').append('<div class = "div-user"> <a href = "supprimer/users/' + user.username + '"><input class="suppr" type="button" value="Supprimer"/></a>Nom : ' + user.username + '<br>Mot de Passe : ' + user.password + '<br>Email: ' + user.mail + '<br></div>')
    $('#choix').append('<option value="' + user.username + '">' + user.username + '</option>');
    $('#user_username').val("");
    $('#user_password').val("");
    $('#user_mail').val("");
}
function CreerPoint(point) {//Fonction de création de la div point

    $('.liste-points').append('<div class = "point_contain"><a href = "supprimer/points/' + point.description + '"><input class="suppr" type="button" value="Supprimer"/></a><div class = "description' + parseInt($('#val').html()) + 1 + '" > ' + point.description + '</div><div class = "adresse' + parseInt($('#val').html()) + 1 + '">' + point.adresse + '</div><div class = "longitude' + parseInt($('#val').html()) + 1 + '" style="display:none">' + point.longitude + '</div><div class = "latitude' + parseInt($('#val').html()) + 1 + '" style="display:none">' + point.latitude + '  </div></div>')
    $('#description').val("");
    $('#adresse').val("");
    
}
$('document').ready(function () {//Quand jquery est pret

    //Fonction ajouter User//
    $('#ajout').click(function () {

        $.ajax({
            url: 'ajoutUsers',
            type: 'POST',
            data: 'username=' + $('#user_username').val() + '&password=' + $('#user_password').val() +
                    '&mail=' + $('#user_mail').val(),
            dataType: 'text',
            success: function (data, textStatus, jqXHR) {
                var obj = $.parseJSON(data);
                CreerUser(obj);
            }
            

        });
    });
    
    //Fonction ajouter Devis//
    $('#envoy').submit(function (e) {

        e.prevenDefault();//Annule l'envoi du formulaire pour l'envoyer en ajax ci dessous
        $.ajax({
            url: 'http://localhost/Marquisette/web/app_dev.php/ajoutDevis',
            type: "POST",
            data: $("#envoy").serialize(),
            dataType: 'text',
            success: function (data, textStatus, jqXHR) {
                alert(data);
            }

        });
    });

});