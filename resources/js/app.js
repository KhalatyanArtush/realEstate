// require('./bootstrap');


//
// function myFunction() {
//     document.getElementById("creatDiv").style.display = "block";
// }



$(document).ready(function(){

    $("#filterOpen").click(function(){
        $("#filterHome").css("display","block");
    });



    $(".filterClose").click(function(){
        $("#filterHome").css("display","none");
    });


});



function initMap() {
    // The location of Uluru
    const uluru = { lat: 40.179694, lng: 44.514234 };

    const locations = {
        operaHouse: { lat: 40.169208, lng: 44.513450 },
        tarongaZoo: { lat: 40.179694, lng: 44.514234 },
        manlyBeach: { lat: 40.170266, lng: 44.489019 },
        hyderPark: { lat: 40.176317, lng: 44.631250 },
        theRocks: { lat: 40.220603, lng: 44.504305 },
        circularQuay: { lat: 40.285746, lng: 44.480304 },
        harbourBridge: { lat: 39.970228, lng: 44.501698 },
        kingsCross: { lat: 40.188922, lng: 44.613693 },

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

