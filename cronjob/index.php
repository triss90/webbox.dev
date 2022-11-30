<?php
$title = "Crontab Generator";
$description = "Generate Cron jobs easily with a visual generator";

?>

<?php include_once("../_inc/header.php"); ?>


<div class="wrapper" id="cron">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">Crontab Generator</h1>
					<h2 class="small center">Generate Cron jobs easily with a visual generator</h2>
					<hr>
				</div>
			</div>
			<form method="post" id="cron">
				<div class="row">
					<div class="tiny-12 small-3">
						<div class="radio">
							<input id="gradientLinear" name="gradientType" class="gradient-type" type="radio" checked="checked">
							<label for="gradientLinear" class="radio-label">Linear Gradient</label>
						</div>
						<div class="radio">
							<input id="gradientRadial" name="gradientType" class="gradient-type" type="radio">
							<label for="gradientRadial" class="radio-label">Radial Gradient</label>
						</div>
					</div>
				</div>
			</form>
		</section>
		
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					hj
				</div>
			</div>
		</section>
		
	</main>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
<script>

</script>


<?php include_once("../_inc/footer.php"); ?>





