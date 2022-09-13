<?php
$ip = $_POST['ip'];
if (!filter_var($ip, FILTER_VALIDATE_IP)) {
	die();
}

$apiKey = "005f6f1b544dba2440ff466d24b812b8";
$location = file_get_contents('http://api.ipstack.com/'.$ip.'?access_key='.$apiKey);
$location = json_decode($location);
?>



<ul class="list-group">
	<li class="list-group-item d-flex justify-content-between align-items-center">
		<h1 style="display:block;"><span style="color:var(--color-black-2);">IP:</span> <?php echo $location->ip; ?></h1>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-center">
		Type:<span class="text-success"><?php echo $location->type; ?></span>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-center">
		Continent:<span class="text-success"><?php echo $location->continent_name . " (" . $location->continent_code . ")"; ?></span>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-center">
		Country:<span class="text-success"><?php echo $location->country_name . " (" . $location->country_code . ")"; ?></span>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-center">
		Regio:<span class="text-success"><?php echo $location->region_name; ?></span>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-center">
		City:<span class="text-success"><?php echo $location->city; ?></span>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-center">
		Postal Code:<span class="text-success"><?php echo $location->zip; ?></span>
	</li>

	<li class="list-group-item d-flex justify-content-between align-items-center">
		Latitude:<span class="text-success"><?php echo $location->latitude; ?></span>
	</li>
	<li class="list-group-item d-flex justify-content-between align-items-center">
		Longitude:<span class="text-success"><?php echo $location->longitude; ?></span>
	</li>

</ul>

<br>
<div id="map" style="height:500px; border-radius: 2rem;"></div>
<br>

<script>
	var template = 'http://tile.openstreetmap.org/{Z}/{X}/{Y}.png';
	var provider = new MM.TemplatedLayer(template);
	var map = new MM.Map('map', provider);
	map.setZoom(10).setCenter({ lat: <?php echo $location->latitude; ?>, lon: <?php echo $location->longitude; ?> });
</script>