<?php
$title = "Image Placeholder";
$description = "Generate custom images to use as placeholders in your designs.";
?>

<?php include_once("../_inc/header.php"); ?>

<style>
	.link {
		color: var(--color-white-4);
	}
	.link .value {
		color: var(--color-blue-1);
		border-bottom: 1px dashed var(--color-blue-1);
	}
</style>
<div class="wrapper" id="placeholder">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">Image Placeholder</h1>
					<h2 class="small center">Generate custom images to use as placeholders in your designs.</h2>
					<hr>
				</div>
			</div>
			
			<div class="row">
				<div class="tiny-12">
					<p class="link">https://webbox.dev/placeholder/image.php<wbr>?width=<span class="value" contenteditable="true">600</span><wbr>&height=<span class="value" contenteditable="true">300</span><wbr>&text=<span class="value" contenteditable="true">placeholder</span><wbr>&textColor=<span class="value" contenteditable="true">242,244,246</span><wbr>&backgroundColor=<span class="value" contenteditable="true">82,82,82</span></p>
				</div>
			</div>
		</section>
		
		<section class="content_block" id="output-wrapper">
			<br>
			<img class="example" style="margin:0 auto;max-width:100%;height:auto;" src="https://webbox.dev/placeholder/image.php?width=600&height=300&text=palceholder&textColor=242,244,246&backgroundColor=82,82,82" alt="Placeholder Image">
			<br>
		</section>
		
	</main>
	
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
<script>
$('.value').bind('DOMSubtreeModified',function(event) { 
	$('.example').attr('src', $('.link').text()); 
});
</script>

<?php include_once("../_inc/footer.php"); ?>





