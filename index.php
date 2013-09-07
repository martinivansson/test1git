<?php
?>
<!doctype html>
<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<style type="text/css">
	
		</style>
		<script type="text/javascript"
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8lX7LeENFD9PyV1hmi7BvC64P0s65ek0&sensor=true">
		</script>
		
		<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.9.0.custom.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function()
			{
			});
		</script>
	</head>
	<body>
		<div id="info"></div>
		<div id="autocompletion">
			<div class="autocompletionList"></div>
		</div>
  		<div class="panel-background"></div>
  		<div class="panel">
  			<div>
  				<input type="input" value="" >
  				<input type="button" value="Sök">
  			</div>
  			<h3>Hej!</h3>
  			<p>Ett klick för att få fram lägg till</p>
  			<p>Ett klick för att få fram sök</p>
  			<p>Lägga till plats, Ett namn, flera taggar, beskrivning(info)</p>
  			<p>Lägga till egna taggar, använda befintliga</p>
  			<p>Filterar på taggar för att få fram vissa platser</p>
  		</div>
		<div id="map-canvas" style="height:100%"></div>
		<!--<div id="bar"></div>-->
		<div id="corner-bar">
			<div id="corner-bar-tag-open" class="corner-bar">TAGS</div>
		</div>
		<div id="corner-bar-tag-open-content"></div>
	</body>
</html>