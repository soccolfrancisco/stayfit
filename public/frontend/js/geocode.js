var apiGeolocationSuccess = function(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    initMap(lat,lng);
};

var tryAPIGeolocation = function() {
    jQuery.post( "//www.googleapis.com/geolocation/v1/geolocate?key=?", function(success) {
        apiGeolocationSuccess({coords: {latitude: success.location.lat, longitude: success.location.lng}});
    }).fail(function(err) {
            alert("Erro!\n\n Por favor, atualize a página. \n\n"+err);
        });
};

/**
 *
 * @param position
 */
var browserGeolocationSuccess = function(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    initMap(lat,lng);
};

/**
 *
 * @param error
 */
var browserGeolocationFail = function(error) {
    switch (error.code) {
        case error.TIMEOUT:
            alert("Por favor, atualize a página.");
            break;
        case error.PERMISSION_DENIED:
            if(error.message.indexOf("Only secure origins are allowed") == 0) {
                tryAPIGeolocation();
            }
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Posição não encontrada.\nPor favor, atualize a página.");
            break;
    }
};

var tryGeolocation = function() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            browserGeolocationSuccess,
            browserGeolocationFail,
            {maximumAge: 50000, timeout: 20000, enableHighAccuracy: true}
        );
    }
};

tryGeolocation();
