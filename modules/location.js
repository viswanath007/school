function myMap() {
var mapProp = {
    center:new google.maps.LatLng(13.818538,77.498875),
    zoom:10,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}