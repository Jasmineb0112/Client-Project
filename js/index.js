function loadMap() {
    
    var location = {lat: 36.750227, lng: -119.781653};
    
    var map = new google.maps.Map(document.getElementsByClassName('map'), {zoom: 4, center: location});
    
    var spot = new google.maps.Spot({position: location, map: map});

}


