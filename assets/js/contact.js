// MAP

function initMap() {
    const uluru = {
        lat: 5.29395,
        lng: -3.9931333
    };
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: uluru,
    });
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}