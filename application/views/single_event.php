<?php require_once('header.php'); ?>

    <div id="map" style="width: 100%; height: 300px;"></div>

    <div class="container wrapper">
      <div class="row">
        <div class="col-sm-7">
          <h1><?= $event['name'] ?></h1>
          <hr>
          <p class="right"><strong>From:</strong>  <?= $event['departure_location'] ?></p>
          <p class="right"><strong>To:</strong>  <?= $event['hike_location'] ?></p>
          <p class="right"><strong>We'll be leaving: </strong>  <?= $event['departure_date'] ?></p>
          <p><strong>Distance:</strong> <?= $event['distance'] ?>mi</p>
          <p><strong>Elevation:</strong> <?= $event['elevation'] ?></p>
          <p><strong>Duration:</strong> <?= $event['duration'] ?> days</p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<?= $event['description'] ?>
          </p>
        </div>
        <div class="sidebar col-sm-4 col-sm-offset-1">
          <h4>People already going...</h4>
          <hr>
          <p></p>
        </div>
        <div class="messages col-sm-7">
          <form action="">
            <textarea name="message" class="form-control" rows="7" placeholder="Write a message..."></textarea>
          </form>
        </div>
      </div>
    </div>
<script>

// CAN ADD GEOCODING CAPABILITIES IN FUTURE

// var origin_coordinates;

// function geocode_center()
// {
//   $.get("https://maps.googleapis.com/maps/api/geocode/json?address=<?= $event['departure_location'] ?>&key=AIzaSyApbO-TW6-gkolVfdL1uKgqDCP2rC3fg2A", function(res) {
//       origin_coordinates = res['results'][0]['geometry']['location'];
//     }, 'json');
//   //console.log(origin_coordinates);

//   var center = new google.maps.LatLng(origin_coordinates['lat'], origin_coordinates['lon']);
//   return center;
// }

// initialize the map with line between the departure location and the hike location
function initMap() {

  var origin = "<?= $event['departure_location'] ?>";
  var destination = "<?= $event['hike_location'] ?>";

  var map = new google.maps.Map(document.getElementById('map'), {
    // center: center,
    scrollwheel: false,
    zoom: 8
  });

  var directionsDisplay = new google.maps.DirectionsRenderer({
    map: map
  });

  // Set destination, origin and travel mode.
  var request = {
    destination: destination,
    origin: origin,
    travelMode: google.maps.TravelMode.DRIVING
  };

  // Pass the directions request to the directions service.
  var directionsService = new google.maps.DirectionsService();
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      // Display the route on the map.
      directionsDisplay.setDirections(response);
    }
  });
}

// map takes up half of the window height
$(function () {
  $("#map").css("height", $(window).height() / 2);
});

</script>
<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApbO-TW6-gkolVfdL1uKgqDCP2rC3fg2A&callback=initMap">
    </script>



<?php require_once('footer.php'); ?>

