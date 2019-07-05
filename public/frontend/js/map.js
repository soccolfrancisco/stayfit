var markerUser;
var infowindowUser;
var map;

/**
 *
 * @param lat
 * @param lng
 */
function initMap(lat, lng) {
    // CODIGO DA POSÇÃO DO USUÁRIO

    // Posição do usuário;
    var positionUser = new google.maps.LatLng(lat, lng);
    // Opção do usuario
    var mapOptions = {
        zoom: 15,
        center: positionUser,
        panControl: false,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        }
    }
    // Caixa de informação
    infowindowUser = new google.maps.InfoWindow({
        content: 'Você está aqui!'
    });
    // Style da caixa do usuário
    google.maps.event.addListener(infowindowUser, 'domready', function () {
        var iwOuter = $('.map-box');
    });
    // Exibir o mapa na div #mapa
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    // Marker do usuário
    markerUser = new google.maps.Marker({
        position: positionUser,
        map: map,
        icon: 'frontend/img/marcadorUser.svg',
        animation: google.maps.Animation.DROP
    });
    // Animação do icone
    markerUser.setAnimation(google.maps.Animation.BOUNCE);
    // Exibir texto ao clicar no icone
    markerUser.addListener('click', function() {
        infowindowUser.open(map, markerUser);
        $('#map-search-access').click();
    });
}