<!DOCTYPE html>
<html>
<head> <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css"></head>
<body>
<div id="frm">
<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">LOCATE</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}

</script>
</div>

<div id="frm">
<form action="loc.php" method="post">
    <p>
        <label for="latitude">latitude:</label><br>
        <input type="text" name="latitude" id="latitude">    
    </p>

    <p>
        <label for="longitude">longitude:</label><br>
        <input type="text" name="longitude" id="longitude">    
    </p>
    <input type="submit" id="btn" value="Submit">
</form>
</div>

</body>
</html>

