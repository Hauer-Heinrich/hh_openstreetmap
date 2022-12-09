(function() {
    window.addEventListener("load", function() {
        var openStreetMaps = document.getElementsByClassName("openstreetmap");

        for (var index = 0; index < openStreetMaps.length; index++) {
            var element = openStreetMaps[index],
                mapID = element.getAttribute("id"),
                jsonMap = element.getElementsByClassName("jsonMap")[0].text,
                obj = JSON.parse(jsonMap),
                fitMarkerPositions = new Array(),
                markers = obj.markers;

            var zoom = obj.zoom,
                scrollWheelZoom,
                position = [
                    obj.lat,
                    obj.long
                ];

            if(obj.scrollWheelZoom === "0" || obj.scrollWheelZoom === false || obj.scrollWheelZoom === 'false') {
                scrollWheelZoom = false;
            } else {
                scrollWheelZoom = true;
            }

            var osmMap = L.map(mapID, {
                center: position,
                zoom: zoom,
                zoomControl: true,
                scrollWheelZoom: scrollWheelZoom
            });



            // Kartendesign von MapBox (erfordert eigentlich einen API-Key, der hier verwendete API-Key funktioniert auch, ist aber von Leaflet)
            /* L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox.streets'
            }).addTo(osmMap); */

            // Kartendesign von OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(osmMap);

            // PopUp anzeigen lassen - Icon als PNG:
            // https://leafletjs.com/reference-1.3.2.html#icon oder Icon als DIV:
            // https://leafletjs.com/reference-1.3.2.html#icon-default

            for(var i = 0; i < markers.length; i++) {
                var marker = markers[i];
                var parser = new DOMParser;
                var dom = parser.parseFromString(
                    '<!doctype html><body>' + marker.text,
                    'text/html'
                );
                var text = dom.body.textContent;
                var icon = L.icon({
                    iconUrl: marker.icon,
                    // shadowUrl: 'leaf-shadow.png',

                    iconSize:     [40, 40], // size of the icon
                    shadowSize:   [50, 50], // size of the shadow
                    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
                    shadowAnchor: [4, 62],  // the same for the shadow
                    popupAnchor:  [-3, -10] // point from which the popup should open relative to the iconAnchor
                });
                var m = L.marker([marker.lat, marker.long], {icon: icon})
                    .addTo(osmMap)
                    .bindPopup(unescape(text));
                if(marker.openOnStart == true) {
                    m.openPopup();
                }
                if(obj.fitmarkers === "1") {
                    fitMarkerPositions.push([marker.lat, marker.long]);
                }
            }

            if(obj.fitmarkers === "1") {
                osmMap.fitBounds(fitMarkerPositions);
            }
        }
    });
})();
