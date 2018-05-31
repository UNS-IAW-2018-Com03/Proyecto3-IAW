var map, heatmap
var pointArray = new google.maps.MVCArray();


$(function() {
      map = new google.maps.Map(document.getElementById('heatMap'), {
      zoom: 13,
      center: {lat: -38.7183177, lng: -62.2663478},
      mapTypeId: 'satellite'
    });
    heatmap = new google.maps.visualization.HeatmapLayer({
      data: pointArray
    });
    getPoints();
    heatmap.setMap(map);

});


/*
Funcion que pone los puntos de los reclamos realizados
*/
function getPoints(){

	//Pide los reclamos realizados del servidor
	$.get("/reclamosRealizados",function(data,status){
		if(data !== null){
			var index;
			var reclamo;
      pointArray = new google.maps.MVCArray();
			//Muestra los reclamos
			for(index = 0; index < data.length; ++index){
				reclamo = data[index];
        pointArray.push(new google.maps.LatLng(reclamo.latitud, reclamo.longitud));
			}
      heatmap.set('data', pointArray);
		}
	});
}
