<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
	   		integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
	   		crossorigin=""/>
	    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
	   		integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
	   		crossorigin="">
   		</script>
        <link  rel="stylesheet" href="public/css/style.css" /> 
    </head>
        
    <body>

    	<!-- FIXED MAP BACKGROUND + MENU -->

		<div id="mapid">
			<script type="text/javascript">
				var mymap = L.map('mapid').setView([48.117572, -1.694584], 17); 
				var marker = L.marker([48.119100, -1.700940]).addTo(mymap);
				marker.bindPopup("<h1>Emilien ALVAREZ-VANHARD</h1>").openPopup();
			</script>
		</div>

		<script type="text/javascript">
			L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
		    	
		    	maxZoom: 18,
		    	id: 'mapbox/streets-v11',
			    tileSize: 512,
			    zoomOffset: -1,
			    accessToken: 'pk.eyJ1IjoiYWxkcmluYWx2YSIsImEiOiJjazdlbjR2NXcwejczM2hwYXlteWdzejE2In0.RXY7QLqzjHqnDU9_Ux4g5Q'
			}).addTo(mymap);
		</script>
		

		<div id="blocMenu">
			<ul id="ulMenu"> <!--MENU WID -->
				<li><a href="#">Welcome</a></li>
				<li><a href="#">Publications</a></li>
				<li><a href="#">Teaching</a></li>
				<li><a href="#">Data</a></li>
				<li><a href="#">Phd thesis</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact</a></li>					
			</ul>
		</div>

		<!-- TITLE + CONTENT -->

		<h2><?= $title ?></h2>

        <?= $content ?>

    </body>
</html>