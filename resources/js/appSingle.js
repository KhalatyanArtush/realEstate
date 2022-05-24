
function initMap() {
    // The location of Uluru
    const uluru = { lat: 40.179694, lng: 44.514234 };

    const locations = {
        operaHouse: { lat: 40.169208, lng: 44.513450 },


    }
    // The map, centered at Uluru

    const map = new google.maps.Map(document.getElementById("map"),{
        zoom: 8,
        center: uluru,
    });



    const markers = [];
    for (const location in locations) {
        const markerOptions = {
            // The marker, positioned at Uluru
            // const marker = new google.maps.Marker({
            position: locations[location],
            map: map,

        }

        const marker = new google.maps.Marker(markerOptions);
        markers.push(marker);
    }

    return markers;
}
window.initMap = initMap;
