<?php
$title = "HTML Entity Converter";
$description = "Encode and decode HTML entities.";

?>

<?php include_once("../_inc/header.php"); ?>

<style>
	h4 {
		margin-top: 0.75rem;
		margin-bottom: 0rem;
	}
</style>

<div class="wrapper" id="html-entities">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">HTML Entity Converter</h1>
					<h2 class="small center">Encode and decode HTML entities.</h2>
					<hr>
				</div>
			</div>

            <form method="post" id="entityData">
				<div class="row">
					<div class="tiny-12">
						HTML Input: 
                        <textarea type="text" id="text" name="text" cols="30" rows="10" placeholder="&lt;a href=&quot;https://webbox.dev&quot;&gt;webbox.dev&lt;/a&gt;" required></textarea>
					</div>					
					<div class="tiny-12 small-2">
						<button id="buttonSubmit" type="submit" class="block" style="margin-top: 1.75rem;padding:0.9rem 0;">Convert</button>
						<button id="buttonLoad" class="block" type="button" style="display:none;margin-top: 2rem;" disabled="">
							<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
							Loading...
						</button>
					</div>
				</div>
			</form>
			
		</section>
		
		<section class="content_block" id="output-wrapper" style="display: none;">
            Converted HTML:
            <textarea id="output" name="output" cols="30" rows="10"></textarea>
		</section>

		
		<?php include('../_inc/ad.php'); ?>
		
	</main>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(function () {
		$('#entityData').on('submit', function (e) {
			e.preventDefault();
			$('#buttonSubmit').hide();
			$('#buttonLoad').show();
			setTimeout(function() {
				$.ajax({
					type: 'POST',
					url: '/entity-converter/entities.php',
					data: $('#entityData').serialize(),
                    beforeSend: function(xhr){xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")},
					success: function(response) {
						$('#buttonLoad').hide();
						$('#buttonSubmit').show();
						$('#output-wrapper').css("display", "block");
						$('#output').text(response);
					}
				});
			}, 1000);
		});
	});
</script>


<?php include_once("../_inc/footer.php"); ?>
