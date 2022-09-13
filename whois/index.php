<?php
$title = "Whois Lookup";
$description = "Check domain availability and contact information with a simple whois lookup.";
?>

<?php include_once("../_inc/header.php"); ?>

<div class="wrapper" id="whois">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<form id="whoisTest" action="whoislookup.php" method="post" accept-charset="utf-8">
			<section class="content_block">
				<div class="row">
					<div class="tiny">
						<h1 class="headline center">Whois Lookup</h1>
						<h2 class="small center">Check domain availability and contact information with a simple whois lookup.</h2>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="tiny-12 small-8 medium-9 large-10">
						<label for="domainName">Domain name:</label>
						<input type="text" pattern="^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}$" name="domainName" id="domainName" class="form-control" placeholder="example.com" required>
					</div>
					<div class="tiny-12 small-4 medium-3 large-2">
						<button id="buttonSubmit" type="submit" class="btn block" style="margin-top: 1.8rem;">Look Up Domain</button>
						<button id="buttonLoad" class="btn block" type="button" style="display:none;margin-top:1.8rem;" disabled>
							<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
							Loading...
						</button>
					</div>
				</div>
			</section>
		</form>
		
		<section class="content_block" id="output" style="display: none;"></section>
		
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
					url: '/whois/whoislookup.php',
					data: $('#whoisTest').serialize(),
					success: function(response) {
						$('#buttonLoad').hide();
						$('#buttonSubmit').show();
						$('#output').show();
						$('#output').html(response);
					}
				});
			}, 1000);

		});
	});
</script>

<?php include_once("../_inc/footer.php"); ?>





