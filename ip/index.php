<?php
    $pageName = "IP Lookup";
    $pageDescription = "Check your public IP, location, ISP and more.";
?>
<?php include('../_inc/header.php'); ?>

<?php include('../_inc/navigation.php'); ?>

<?php

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

// $ip = "87.51.7.240";
$apiKey = "005f6f1b544dba2440ff466d24b812b8";

$location = file_get_contents('http://api.ipstack.com/'.$ip.'?access_key='.$apiKey);
$location = json_decode($location);

?>

  	<div class="container">
  		<h1>Public IP Lookup</h1>
        <h5>Check your public IP, location, ISP and more.</h5><br>

		<form id="ipInfo" action="ipinfo.php" method="post" accept-charset="utf-8">
	  		<div class="row">

				<div class="col-6 col-md-8">
					<div class="form-group">
                        <label for="ip">IP Address:</label>
                        <input type="text" pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$" name="ip" id="ip" class="form-control my-1" placeholder="<?php echo $ip; ?>" required >
					</div>
			    </div>

			    <div class="col-6 col-md-4">
					<button id="buttonSubmit" type="submit" class="btn btn-success btn-block" style="margin-top: 2.2rem;">Look Up IP</button>

					<button id="buttonLoad" class="btn btn-success btn-block" type="button" style="display:none;margin-top:2.2rem;" disabled>
						<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
						Loading...
					</button>
			    </div>
			</div>
		</form>

		<br>

        <h2 id="ipTitle">Your IP: <span class="text-success"><?php echo $ip; ?></span></h2>
  		<div class="row">

			<div class="col" id="ip-info">

				<ul class="list-group">
					<li class="list-group-item d-flex justify-content-between align-items-center">
						IP<span class="text-success"><?php echo $location->ip; ?></span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Type<span class="text-success"><?php echo $location->type; ?></span>
					</li>

					<hr>

					<li class="list-group-item d-flex justify-content-between align-items-center">
						Continent<span class="text-success"><?php echo $location->continent_name . " (" . $location->continent_code . ")"; ?></span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Country<span class="text-success"><?php echo "<img style='max-height:1em;position:relative;top:-1px' src='" .$location->location->country_flag . "'> " . $location->country_name . " (" . $location->country_code . ")"; ?></span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Region<span class="text-success"><?php echo $location->region_name; ?></span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						City<span class="text-success"><?php echo $location->city; ?></span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Postal Code<span class="text-success"><?php echo $location->zip; ?></span>
					</li>

					<hr>

					<li class="list-group-item d-flex justify-content-between align-items-center">
						Latitude<span class="text-success"><?php echo $location->latitude; ?></span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Longitude<span class="text-success"><?php echo $location->longitude; ?></span>
					</li>

				</ul>

				<br><br><br>
				<div id="map" style="height:500px"></div>
				<br><br><br>

		    </div>

		</div>

  	</div>

<?php include('../_inc/scripts.php'); ?>

<script src="../assets/js/maps.js" type="text/javascript" charset="utf-8"></script>

<script>

	<?php
	if ($location->latitude != "" && $location->longitude != "") {
	?>
	//https://github.com/stamen/modestmaps-js/wiki
	var template = 'https://tile.openstreetmap.org/{Z}/{X}/{Y}.png';
	var provider = new MM.TemplatedLayer(template);
	var map = new MM.Map('map', provider);
	map.setZoom(10).setCenter({ lat: <?php echo $location->latitude; ?>, lon: <?php echo $location->longitude; ?> });
	<?php
	}
	?>

	$(function () {
		$('form').on('submit', function (e) {
			e.preventDefault();
			$('#buttonSubmit').hide();
			$('#buttonLoad').show();
			var selectedIP = $('#ip').val();
			$.ajax({
				type: 'post',
				url: 'ipinfo.php',
				data: $('#ipInfo').serialize(),
				success: function(response) {
					$('#buttonLoad').hide();
					$('#buttonSubmit').show();
					$('#ip-info').html(response);
					$('#ipTitle').html("IP: <span class='text-success'>" + selectedIP + "<span>");
				}
			});
		});
	});

</script>

<?php include('../_inc/footer.php'); ?>




