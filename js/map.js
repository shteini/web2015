function initialize()
{
	var mapDiv = document.getElementById('map');
	var mapOptions = 
	{
      center: new google.maps.LatLng(-37.8082282,144.9627324),
      zoom: 18,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
	var map = new google.maps.Map(mapDiv, mapOptions);
}