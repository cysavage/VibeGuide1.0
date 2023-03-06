<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>VibeGuide</title>

  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnY0bIPMi0otlGrN2PHefpU2TWdGeRFtQ &callback=Function.prototype"></script>
  <script
    src="https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyDnY0bIPMi0otlGrN2PHefpU2TWdGeRFtQ"></script>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="index.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/8f4da38e87.js" crossorigin="anonymous"></script>


  <script>

    function initMap() {
      var longIslandBounds = new google.maps.LatLngBounds(
        new google.maps.LatLng(40.495949, -74.443828), // Southwest corner of Long Island
        new google.maps.LatLng(41.161888, -71.856741)  // Northeast corner of Long Island
      );

      // Try to get the user's current location
      if (navigator.geolocation) {

        navigator.geolocation.getCurrentPosition(function (position) {
          // Check if the user is within the boundaries of Long Island
          if (longIslandBounds.contains(new google.maps.LatLng(position.coords.latitude, position.coords.longitude))) {
            // Create a map centered on the user's current location
            var map = new google.maps.Map(document.getElementById('newmap'), {
              zoom: 15,
              center: { lat: position.coords.latitude, lng: position.coords.longitude },
              restriction: {
                latLngBounds: longIslandBounds,
                strictBounds: true
              }
            });

            // Add a marker at the user's current location
            var marker = new google.maps.Marker({
              position: { lat: position.coords.latitude, lng: position.coords.longitude },
              map: map,
              title: 'Your Location'
            });
          } else {
            // If the user's location is not within Long Island, center the map on a default location
            var centerLatLng = { lat: 40.730610, lng: -73.935242 };

            var map = new google.maps.Map(document.getElementById('newmap'), {
              zoom: 10,
              center: centerLatLng,
              restriction: {
                latLngBounds: longIslandBounds,
                strictBounds: true
              }
            });
          }
        },
          function () {
            // If the user's location cannot be determined, center the map on a default location
            var centerLatLng = { lat: 40.730610, lng: -73.935242 };

            var map = new google.maps.Map(document.getElementById('newmap'), {
              zoom: 10,
              center: centerLatLng,
              restriction: {
                latLngBounds: longIslandBounds,
                strictBounds: true
              }
            });
          });
      } else {
        // If geolocation is not supported, center the map on a default location
        var centerLatLng = { lat: 40.730610, lng: -73.935242 };

        var map = new google.maps.Map(document.getElementById('newmap'), {
          zoom: 10,
          center: centerLatLng,
          restriction: {
            latLngBounds: longIslandBounds,
            strictBounds: true
          }
        });
      }

    }


  </script>
</head>

<body onload="initMap()">

  <div class="box-area">
    <header>
      <div class="wrapper">

      </div>
      <nav>
        <a class="active" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
        <a href="#"><i class="fa-solid fa-bolt"></i>About Us</a>
        <a href="#"><i class="fa-solid fa-magnifying-glass"></i>Search</a>
        <a href="#"><i class="fa-solid fa-location-dot"></i>Vibes</a>
        <?php
        if (isset($_SESSION["username"]) and isset($_SESSION["RoleID"]) == 2) {
          echo "<a href='profile.php'><i class='fa fa-fw fa-user'></i>Profile</a>";
          echo "<a href ='includes/logout.inc.php'><i class='fa fa-fw fa-user'></i>Logout</i></a>";
        } else if (isset($_SESSION["username"]) and isset($_SESSION["RoleID"]) == 1) {
          echo "<a href='admin_profile.php'><i class='fa fa-fw fa-user'></i>Admin</a>";
          echo "<a href ='includes/logout.inc.php'><i class='fa fa-fw fa-user'></i>Logout</i></a>";
        } else {
          echo "<a href='login.php'><i class='fa fa-fw fa-user'></i> Login</a>";
          echo "<a href ='signup.php'><i class='fa fa-fw fa-user'></i>Register</i></a>";
        }

        ?>
        <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
      </nav>
  </div>
  </header>