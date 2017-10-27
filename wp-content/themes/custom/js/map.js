/**
 * Google map js
 */

function initMap() {
	var uluru = {lat: parseFloat(custom_map.lat), lng: parseFloat(custom_map.lng)};

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: parseFloat(custom_map.zoom),
		center: uluru
	});

	var marker = new google.maps.Marker({
		position: uluru,
		map: map
	});
}

