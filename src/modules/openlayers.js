import Map from 'ol/Map';
import View from 'ol/View';
import TileLayer from 'ol/layer/Tile';
import XYZ from 'ol/source/XYZ';

class OpenLayers {
    constructor() {
        var attribution = new ol.control.Attribution({
            collapsible: false
        });

        var map = new ol.Map({
            controls: ol.control.defaults({attribution: false}).extend([attribution]),
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM({
                        url: 'https://tile.openstreetmap.be/osmbe/{z}/{x}/{y}.png',
                        attributions: [ ol.source.OSM.ATTRIBUTION, 'Tiles courtesy of <a href="https://geo6.be/">GEO-6</a>' ],
                        maxZoom: 18
                    })
                })
            ],
            target: 'map',
            view: new ol.View({
                center: ol.proj.fromLonLat([52.26, 21.04]),
                maxZoom: 18,
                zoom: 12
            })
        });
        // Add a marker
        var layer = new ol.layer.Vector({
            source: new ol.source.Vector({
                features: [
                    new ol.Feature({
                        geometry: new ol.geom.Point(ol.proj.fromLonLat([52.26, 21.04]))
                    })
                ]
            })
        });
        map.addLayer(layer);

        //Add a pop up
        var container = document.getElementById('popup');
        var content = document.getElementById('popup-content');
        var closer = document.getElementById('popup-closer');

        var overlay = new ol.Overlay({
            element: container,
            autoPan: true,
            autoPanAnimation: {
                duration: 250
            }
        });
        map.addOverlay(overlay);

        //Close the pop up
        closer.onclick = function() {
            overlay.setPosition(undefined);
            closer.blur();
            return false;
        };
        //Open the popup when you click on the marker
        map.on('singleclick', function (event) {
            if (map.hasFeatureAtPixel(event.pixel) === true) {
                var coordinate = event.coordinate;

                content.innerHTML = '<b>Hello world!</b><br />I am a popup.';
                overlay.setPosition(coordinate);
            } else {
                overlay.setPosition(undefined);
                closer.blur();
            }
        });
        //
        content.innerHTML = '<b>MedicalHouse!</b><br>Witebska, 8, Warsaw.';
        overlay.setPosition(ol.proj.fromLonLat([52.26,21.04]));

    }
}
export default OpenLayers

