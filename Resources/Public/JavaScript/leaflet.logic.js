window.hhOsmArray = {};
(function() {
    window.addEventListener("load", function() {
        const openStreetMaps = document.querySelectorAll(".hh-openstreetmap");

        if(openStreetMaps) {
            openStreetMaps.forEach(map => {
                const mapID = map.dataset.id,
                    jsonMap = document.querySelector("#osm-config-"+mapID).text,
                    obj = JSON.parse(jsonMap),
                    fitMarkerPositions = new Array(),
                    markers = obj.markers,
                    zoom = obj.zoom;

                let scrollWheelZoom = false,
                    position = [];

                // set center map position
                if(obj.lat && obj.long) {
                    position[0] = obj.lat;
                    position[1] = obj.long;
                } else if(markers.length > 0) {
                    position[0] = markers[0].lat;
                    position[1] = markers[0].long;
                }

                if(obj.scrollWheelZoom === "0" || obj.scrollWheelZoom === false || obj.scrollWheelZoom === 'false') {
                    scrollWheelZoom = false;
                } else {
                    scrollWheelZoom = true;
                }

                const osmMap = L.map("map-"+mapID, {
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
                    const marker = markers[i],
                            parser = new DOMParser,
                            dom = parser.parseFromString(
                                '<!doctype html><body>' + marker.text,
                                'text/html'
                            ),
                            text = dom.body.textContent;

                    const icon = L.icon({
                        iconUrl: marker.icon,
                        // shadowUrl: 'leaf-shadow.png',

                        iconSize:     [40, 40], // size of the icon
                        shadowSize:   [50, 50], // size of the shadow
                        iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
                        shadowAnchor: [4, 62],  // the same for the shadow
                        popupAnchor:  [-3, -10] // point from which the popup should open relative to the iconAnchor
                    });

                    const m = L.marker([marker.lat, marker.long], {icon: icon})
                        .addTo(osmMap)
                        .bindPopup(text);

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

                window.hhOsmArray[mapID] = osmMap;
            });
        }
    });
})();
