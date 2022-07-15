class Leaflet {
    constructor() {
        let mapOptions = {
            center: [52.26,21.04 ],
            zoom: 12
        }

        let map = L.map('map', mapOptions);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        let marker = L.marker([52.26,21.04]).addTo(map);

        marker.bindPopup("<b>MedicalHouse!</b><br>Witebska, 8, Warsaw.").openPopup();
}
}
export default Leaflet