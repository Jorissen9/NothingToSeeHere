$(document).ready(function() {
	var initialLocation;
	var hasselt = new google.maps.LatLng(50.9333, 5.3333);
	var browserSupportFlag = new Boolean();

	function initialize() {
		var mapOptions = {
			zoom : 15
		};
		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		// Try W3C Geolocation (Preferred)
		if (navigator.geolocation) {
			browserSupportFlag = true;
			navigator.geolocation.getCurrentPosition(function(position) {
				initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
				map.setCenter(initialLocation);
			}, function() {
				handleNoGeolocation(browserSupportFlag);
			});
		}
		// Browser doesn't support Geolocation
		else {
			browserSupportFlag = false;
			handleNoGeolocation(browserSupportFlag);
		}

		var input = /** @type {HTMLInputElement} */(
			document.getElementById('address'));

		var address = new google.maps.places.Autocomplete(input);
		address.bindTo('bounds', map);

		var infowindow = new google.maps.InfoWindow();
		var marker = new google.maps.Marker({
			map : map,
			anchorPoint : new google.maps.Point(0, -29)
		});

		google.maps.event.addListener(address, 'place_changed', function() {
			infowindow.close();
			marker.setVisible(false);
			var place = address.getPlace();
			if (!place.geometry) {
				window.alert("Autocomplete's returned place contains no geometry");
				return;
			}

			// If the place has a geometry, then present it on a map.
			if (place.geometry.viewport) {
				map.fitBounds(place.geometry.viewport);
			} else {
				map.setCenter(place.geometry.location);
				map.setZoom(17);
				// Why 17? Because it looks good.
			}
			marker.setIcon(/** @type {google.maps.Icon} */( {
				url : place.icon,
				size : new google.maps.Size(71, 71),
				origin : new google.maps.Point(0, 0),
				anchor : new google.maps.Point(17, 34),
				scaledSize : new google.maps.Size(35, 35)
			}));
			marker.setPosition(place.geometry.location);
			marker.setVisible(true);

			var address = '';
			if (place.address_components) {
				address = [(place.address_components[0] && place.address_components[0].short_name || ''), (place.address_components[1] && place.address_components[1].short_name || ''), (place.address_components[2] && place.address_components[2].short_name || '')].join(' ');
			}

			infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
			infowindow.open(map, marker);
		});

		function handleNoGeolocation(errorFlag) {
			if (errorFlag == true) {
				alert("Geolocation service failed.");
				initialLocation = hasselt;
			} else {
				alert("Your browser doesn't support geolocation. We've placed you in Hasselt.");
				initialLocation = hasselt;
			}
			map.setCenter(initialLocation);
		}

	}


	google.maps.event.addDomListener(window, 'load', initialize);
}); 