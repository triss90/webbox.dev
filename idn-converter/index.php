<?php
$title = "IDN Converter";
$description = "Convert international domain names or email addresses to ACE/Punycode. To use for configuring DNS servers, e-mail programs and webbrowsers without support for IDN domains.";
?>

<?php include_once("../_inc/header.php"); ?>

<style>
#output {
	color: var(--color-blue-1);
}
</style>

<div class="wrapper" id="idn-converter">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">IDN Converter</h1>
					<h2 class="small center">Convert international domain names or email addresses to ACE/Punycode.</h2>
					<hr>
				</div>
			</div>
					
			<form id="idnConverter" action="idn.php" method="post" accept-charset="utf-8">
				  
				<div class="row">
					<div class="tiny-12 small-10 medium-9">
						<div class="form-group">
							<label for="idn">Domain name / Email address:</label>
							<input type="text" name="idn" id="idn" class="form-control" placeholder="täst.com / xn--tst-qla.com" required="">
						</div>
					</div>
					<div class="tiny-12 small-2 medium-3">
						<button id="buttonSubmit" type="submit" class="block" style="margin-top: 2rem;">Convert</button>
						<button id="buttonLoad" class="block" type="button" style="display:none;margin-top: 2rem;" disabled="">
							<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
							Loading...
						</button>
					</div>
				</div>
			
			</form>
					
				
		</section>
		
		<section class="content_block" id="output-wrapper" style="display:none;">
			<div class="row">
				<div class="tiny">
					<h3>Converted Punycode: <span id="output"></span></h3>
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
					url: '/idn-converter/idn.php',
					data: $('#idnConverter').serialize(),
					success: function(response) {
						$('#buttonLoad').hide();
						$('#buttonSubmit').show();
						$('#output-wrapper').css("display", "block");
						$('#output').html(response);
						console.log(response);
						// hljs.initHighlighting.called = false;
						// hljs.initHighlighting();
					}
				});
			}, 1000);

		});
	});

</script>

<?php include_once("../_inc/footer.php"); ?>





