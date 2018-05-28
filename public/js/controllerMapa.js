var map;

/*
Funcion que inicializa el mapa
*/
$(function() {
      map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: {lat: -38.7183177, lng: -62.2663478},
      mapTypeId: 'terrain'
    });
});
