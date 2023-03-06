<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>




  <meta charset="UTF-8">
  <title>VibeGuide</title>

  <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
  <script
    src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
  <link rel="stylesheet"
    href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">

  <link href="index.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/8f4da38e87.js" crossorigin="anonymous"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    #map {
      position: absolute;
      top: 0;
      bottom: 0;
      width: 100%;
    }


    .mapboxgl-ctrl-geocoder {
      width: 330px;
      font-size: 14px;
      border-radius: 10px;
      border: 10px;



    }

    .mapboxgl-ctrl-geocoder input[type='text'] {
      width: 330px;
      padding: 28px;
      border: none;
      box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
      background-color: #f5f5f5;
      font-size: 15px;
    }

    .mapboxgl-ctrl-geocoder .suggestions {
      background-color: #fff;
      border-radius: 4px;
      box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }

    .mapboxgl-ctrl-geocoder .suggestion {
      padding: 22px;
      cursor: pointer;
    }

    .mapboxgl-ctrl-geocoder .suggestion:hover {
      background-color: #f5f5f5;
    }
  </style>

</head>

<body>








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
        <a href='contact.php'><i class="fa fa-fw fa-envelope"></i> Contact</a>
      </nav>
  </div>
  </header>