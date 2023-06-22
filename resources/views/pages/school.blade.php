<x-app-layout>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
    <h1>Ajout de marqueurs personnalisés avec Google Maps API</h1>
    <div id="map"></div>

    <script>
        // Fonction d'initialisation de la carte
        function initMap() {
            // Coordonnées du centre de la carte
            var center = { lat: 48.8566, lng: 2.3522 };

            // Options de la carte
            var mapOptions = {
                zoom: 12,
                center: center
            };

            // Création de la carte
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            // Tableau des marqueurs avec leurs coordonnées et informations
            var markers = [
                {
                    position: { lat: 48.8566, lng: 2.3522 },
                    title: "Paris",
                    description: "Capitale de la France"
                },
                {
                    position: { lat: 51.5074, lng: -0.1278 },
                    title: "Londres",
                    description: "Capitale du Royaume-Uni"
                },
                {
                    position: { lat: 40.7128, lng: -74.0060 },
                    title: "New York",
                    description: "Ville aux gratte-ciel"
                }
            ];

            // Ajout des marqueurs sur la carte
            markers.forEach(function(markerInfo) {
                var marker = new google.maps.Marker({
                    position: markerInfo.position,
                    map: map,
                    title: markerInfo.title
                });

                // Ajout d'une info-bulle au marqueur
                var infoWindow = new google.maps.InfoWindow({
                    content: markerInfo.description
                });

                // Gestionnaire d'événement pour afficher l'info-bulle au clic sur le marqueur
                marker.addListener('click', function() {
                    infoWindow.open(map, marker);
                });
            });
        }
    </script>
    <script async defer src="
    https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap">
    </script>
</x-app-layout>
