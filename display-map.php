<?php
// OpenStreetMap can be used to create unlimited map locations and embed them on your website using shortcodes.

// Enqueue the Leaflet CSS and JS files
function display_map_enqueue_scripts() {
	wp_enqueue_style( 'leaflet-style', 'https://cdnjs.cloudflare.com/.../1.7.1/leaflet.min.css' );
	wp_enqueue_script( 'leaflet-script', 'https://cdnjs.cloudflare.com/.../lea.../1.7.1/leaflet.min.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'display_map_enqueue_scripts' );

// Create the shortcode for the map
function display_map_shortcode() {

	$html = '<div id="map" style="height: 500px;"></div>';
	$html .= '<script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>';
	$html .= '<script>
	var map = L.map("map").setView([21.094645, 105.566142], 8);

	L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
	attribution: \'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors\',
	maxZoom: 18
	}).addTo(map);

	var markers = [
	[16.0678, 108.2208, "<b>Đà Nẵng</b><br>Thành phố Đà Nẵng, Việt Nam"],
	[21.0278, 105.8342, "<b>Hà Nội</b><br>Thủ đô Hà Nội, Việt Nam"],
	[21.094645, 105.566142, "Xã Đại Đồng, Huyện Thạch Thất, Thành phố Hà Nội"]
	];

	for (var i = 0; i < markers.length; i++) {
	var marker = L.marker([markers[i][0], markers[i][1]]).addTo(map);
	marker.bindPopup(markers[i][2]);
	}
	</script>';

	return $html;
}

add_shortcode( 'display_map', 'display_map_shortcode' );