<?php
$title = "IP Lookup";
$description = "Check your public IP, location, ISP and more";

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	$ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
	$ip = $_SERVER['REMOTE_ADDR'];
}

if ($ip == "::1") {
	$ip = "8.8.8.8";
} 

$apiKey = "005f6f1b544dba2440ff466d24b812b8";
$location = file_get_contents('http://api.ipstack.com/'.$ip.'?access_key='.$apiKey);
$location = json_decode($location);
?>

<?php include_once("../_inc/header.php"); ?>

<style>
	li {
		list-style-type: none;
	}
	.text-success {
		color: var(--color-purple-1-2);
		margin-left: 0.45rem;
	}
</style>

<div class="wrapper" id="ip-lookup">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<form id="ipInfo" action="ipinfo.php" method="post" accept-charset="utf-8">
			<section class="content_block">
				<div class="row">
					<div class="tiny">
						<h1 class="headline center">IP Lookup</h1>
						<h2 class="small center">Check your public IP, location, ISP and more</h2>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="tiny-12 small-8 medium-9 large-10">
						<label for="ip">IP Address:</label>
						<input type="text" pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$" name="ip" id="ip" class="form-control my-1" value="<?php echo $ip; ?>" placeholder="<?php echo $ip; ?>" required>
					</div>
					<div class="tiny-12 small-4 medium-3 large-2">
						<button id="buttonSubmit" type="submit" class="btn block" style="margin-top: 1.8rem;">Look Up IP</button>
						<button id="buttonLoad" class="btn block" type="button" style="display:none;margin-top:1.8rem;" disabled>
							<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
							Loading...
						</button>
					</div>
				</div>
			</section>
		</form>
		
		<section class="content_block" id="ipTitle" style="display: none;"></section>
		
		<section class="content_block" id="ip-info" style="display: none;"></section>
		
		<section class="content_block" id="map" style="display: none;height:500px"></section>
		
		<?php include('../_inc/ad.php'); ?>
		
	</main>
	
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="/ip-lookup/maps.js"></script>

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
				url: '/ip-lookup/ipinfo.php',
				data: $('#ipInfo').serialize(),
				success: function(response) {
					$('#buttonLoad').hide();
					$('#buttonSubmit').show();
					$('#ip-info').show();
					$('#ip-info').html(response);
					$('#ipTitle').html("IP: <span class='text-success'>" + selectedIP + "<span>");
				}
			});
		});
	});
	//$('form').submit();
</script>

<?php include_once("../_inc/footer.php"); ?>





