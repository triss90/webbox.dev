<?php
$title = "Port Scanner";
$description = "Scan IP or domain for open ports";
?>

<?php include_once("../_inc/header.php"); ?>

<div class="wrapper" id="portscanner">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">Port Scanner</h1>
					<h2 class="small center">Scan IP or domain for open ports</h2>
					<hr>
				</div>
			</div>
			<form method="post" id="portScanner">
				<div class="row">
					<div class="tiny-12 small-6">
						Domain/IP: 
						<input type="text" name="domain" id="domain" required/> 	
					</div>
					<div class="tiny-12 small-4">
						Port(s):
						<input type="text" name="ports" id="ports" placeholder="21, 22, 23, 25, 53, 80, 443, 110, 1433, 3306" /> 
					</div>
					<div class="tiny-12 small-2">
						<button id="buttonSubmit" type="submit" class="block" style="margin-top: 1.75rem;padding:0.9rem 0;">Scan</button>
						<button id="buttonLoad" class="block" type="button" style="display:none;margin-top: 2rem;" disabled="">
							<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
							Loading...
						</button>
					</div>
				</div>
			</form>
		</section>
		
		<section class="content_block" id="output-wrapper" style="display: none;">
			<div class="row">
				<div class="tiny">
					<pre id="output"></pre>
				</div>
			</div>
		</section>
		
		<?php include('../_inc/ad.php'); ?>
		
	</main>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
<script>
	
	$(function () {
		$('form').on('submit', function (e) {
			e.preventDefault();
			$('#buttonSubmit').hide();
			$('#buttonLoad').show();
			setTimeout(function(){
				$.ajax({
					type: 'post',
					url: '/port-scanner/portscanner.php',
					data: $('#portScanner').serialize(),
					success: function(response) {
						$('#buttonLoad').hide();
						$('#buttonSubmit').show();
						$('#output-wrapper').css("display", "block");
						$('#output').html(response);
					}
				});
			}, 1000);
		});
	});

</script>


<?php include_once("../_inc/footer.php"); ?>





