var map;
function initMap() {
    var nb_mark = parseInt($('#val').text());


    var tab_coo = new Array();
    var tab_titre = new Array();

    for (var i = 1; i < nb_mark + 1; i++)
    {
        tab_titre.push($('.description' + i).text())
        tab_coo.push({lat: parseFloat($('.latitude' + i).text()), lng: parseFloat($('.longitude' + i).text())});
    }

    var marqueur = {
        coo: tab_coo,
        titre: tab_titre

    };


    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 43.673, lng: 4.133},
        zoom: 12
    });

    for (var x = 1; x < nb_mark + 1; x++)
    {
        var marker  = new google.maps.Marker({
            position: marqueur.coo[x - 1],
            map: map,
            title: marqueur.titre[x - 1]
        });

    }
   
}
$('document').ready(function () {



});




