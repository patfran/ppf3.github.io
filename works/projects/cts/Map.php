<!DOCTYPE html>
<html>
<head>
    <title>Cargo Transportation System</title>
    <link href="Site.css" rel="stylesheet">

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCButwEYJEYZPqFcLjvO-VpKSqVL8kCagg&sensor=false">
    </script>

    <script>
    /*Google Map Display, myCenter is location*/
    var myCenter = new google.maps.LatLng(40.7242, -74.1746);
    function initialize() {
        var mapProp = {
            center: myCenter,
            zoom: 9,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        /* Google Map Marker */
        var marker = new google.maps.Marker({ position: myCenter });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<body>
    <?php include("Header.php");?>
    <div id="main">

    <h1>Cargo Transportation System</h1> 
    <h2>MAP</h2>
    
    <div id="googleMap" style="width:500px;height:380px;"></div>

    </div>

</body>
</html>