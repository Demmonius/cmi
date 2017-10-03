var map_wrapper = 'map_container';
var longitude = 4.88231159999998;
var latitude = 45.81555609999999;
var bubble_content =	"<p class='map_contacts'>" +
						"<span>Adresse : </span>" +
						"392 Rue des Mercières, 69140 Rillieux-la-Pape, France" +
						"</p>";





function initialize() {
	var mapOptions = {
		zoom: 15,
		center: new google.maps.LatLng(latitude, longitude),
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: false,
		streetViewControl:false,
		scrollwheel : false,
		zoomControlOptions: {
	      style: google.maps.ZoomControlStyle.SMALL
	    }
	};

	var map = new google.maps.Map(document.getElementById(map_wrapper),mapOptions);

	var marker = new google.maps.Marker({
	  position:  new google.maps.LatLng(latitude, longitude),
	  map: map,
	  icon     : "img/marker.png"
	});

	var infowindow = new google.maps.InfoWindow({
			content: bubble_content
		});

	google.maps.event.addListener(marker, 'click', function() {
	  infowindow.open(map,marker);
	});
}

//google.maps.event.addDomListener(window, 'load', initialize);
