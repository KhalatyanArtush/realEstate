/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/appSingle.js ***!
  \***********************************/
function initMap() {
  // The location of Uluru
  var uluru = {
    lat: 40.179694,
    lng: 44.514234
  };
  var locations = {
    operaHouse: {
      lat: 40.169208,
      lng: 44.513450
    }
  }; // The map, centered at Uluru

  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 8,
    center: uluru
  });
  var markers = [];

  for (var location in locations) {
    var markerOptions = {
      // The marker, positioned at Uluru
      // const marker = new google.maps.Marker({
      position: locations[location],
      map: map
    };
    var marker = new google.maps.Marker(markerOptions);
    markers.push(marker);
  }

  return markers;
}

window.initMap = initMap;
/******/ })()
;