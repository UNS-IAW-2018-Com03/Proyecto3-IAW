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
    mostrarTodosReclamosRealizados();
    //heatMap();
});

/*
Funcion que inicializa el mapa de calor
*/
function heatMap() {
  map = new google.maps.visualization.HeatmapLayer();

}

/*
Funcion que mustra todoso los reclamos realizados que estan almacenados
*/
function mostrarTodosReclamosRealizados(){
	//Pide los reclamos realizados del servidor
	$.get("/reclamosRealizados",function(data,status){
		if(data !== null){
			var index;
			var reclamo;
			//Muestra los reclamos
			for(index = 0; index < data.length; ++index){
				reclamo = data[index];
				mostrarReclamo(reclamo.titulo,reclamo.longitud,reclamo.latitud,reclamo.descripcion,reclamo.fecha,reclamo.estado);
			}
		}
	});
}

/*
Funcion que crea un marcador con los datos ingresados como parametro y lo coloca en el mapa
*/
function mostrarReclamo(titulo,longitud,latitud,descripcion,fecha,estado){
	//Crea locacion google
	var myLatLng = new google.maps.LatLng(latitud, longitud);
	//Crea marcador
	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		animation: google.maps.Animation.DROP,
	});
	//Crea cartel para mostrar en el marcador
	var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h3 id="firstHeading" class="firstHeading">'+titulo+'</h3>'+
            '<div id="bodyContent">'+
			'<h4>Descripcion: </h4>'+descripcion+
			'<h4>Fecha: </h4>'+fecha+
			'<h4>Estado: </h4>'+estado+
            '</div>'+
            '</div>';
	//Asocia cartel con la ventana
	var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
	//Añade un listener al marcador, cuando lo clickeas aparece la ventana con el contenido de la informacion
	marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
}

/*
Funcion que va hasta la posicion de un reclamo
*/
function goTo(lat,lng){
  console.log(lat);
  console.log(lng);
  map.setZoom(17);
  var pos = new google.maps.LatLng(lat, lng);
  map.panTo(pos);
}
