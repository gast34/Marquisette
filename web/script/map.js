var map;
function initMap() {
    
    
    var home = {lat: parseFloat($('.latitude1').text()) , lng: parseFloat($('.longitude1').text())};
    var lycee = {lat: parseFloat($('.latitude2').text()), lng: parseFloat($('.longitude2').text())};

    var tab = new Array();
    tab.push(home);
    tab.push(lycee);

    var marqueur = {
        coo: tab
    };


    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 43.673, lng: 4.133},
        zoom: 12
    });

    var marker = new google.maps.Marker({
        position: marqueur.coo[0],
        map: map,
        title: 'Sweet Home'
    });
    var marker2 = new google.maps.Marker({
        position: marqueur.coo[1],
        map: map,
        title: 'Lycée de MERDE!'
    });

}
$('document').ready(function () {

    

});




