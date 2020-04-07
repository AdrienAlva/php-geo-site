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
        <link  rel="stylesheet" href="/geo-site-v2/public/css/style.css" /> 
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
			var CartoDB_DarkMatter = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
			attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
			subdomains: 'abcd',
			maxZoom: 19
			}).addTo(mymap);
		</script>
		

		<div id="blocMenu">
			<ul id="ulMenu"> <!--MENU WID -->
				<li><a href="/geo-site-v2/index.php" class='menuLink'>Welcome</a></li>
				<li><a href="/geo-site-v2/view/publications.php" class='menuLink'>Publications</a></li>
				<li><a href="#" class='menuLink'>Teaching</a></li>
				<li><a href="#" class='menuLink'>Data</a></li>
				<li><a href="#" class='menuLink'>Phd thesis</a></li>
				<li><a href="#" class='menuLink'>Gallery</a></li>
				<li><a href="#" class='menuLink'>Blog</a></li>
				<li><a href="#" class='menuLink'>Contact</a></li>					
			</ul>
		</div>

		<!-- TITLE + CONTENT -->

		<h2><?= $title ?></h2>

        <?= $content ?>

    </body>
</html>
