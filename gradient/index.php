<?php
$title = "Gradient Generator";
$description = "Generate linear and radial gradients";
?>

<?php include_once("../_inc/header.php"); ?>

<link rel="stylesheet" href="/gradient/gradient.css">
<script src="/gradient/jscolor.js"></script><!-- https://jscolor.com/examples/ -->

<div class="wrapper" id="gradient">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">Gradient Generator</h1>
					<h2 class="small center">Generate linear and radial gradients</h2>
				</div>
			</div>
		</section>
		
		<section class="content_block" id="output" style="background-image: linear-gradient(90deg, #7950f2 22%, #f783ac 76%);"></section>
		
		<section class="content_block">
			<div class="row">
				<div class="tiny-12">
					<br>
					<div class="gradient-slider" style="background-image: linear-gradient(90deg, #7950f2 22%, #f783ac 76%);"></div>
					<br>
				</div>
			</div>
			<div class="row">
				<div class="tiny-12 medium-6">
					<h3>Settings</h3><hr style="margin:0;background:var(--color-purple-1)">
					<h5>Gradient type</h5>
					<div class="radio">
						<input id="gradientLinear" name="gradientType" class="gradient-type" type="radio" checked="checked">
						<label for="gradientLinear" class="radio-label">Linear Gradient</label>
					</div>
					<div class="radio">
						<input id="gradientRadial" name="gradientType" class="gradient-type" type="radio">
						<label for="gradientRadial" class="radio-label">Radial Gradient</label>
					</div>
					<div class="linear-settings">
						<h5>Gradient angle, deg</h5>
						<div class="directions">
						   <button type="button" class="directional-button" data-degrees="315">
							  <div style="width: 26px; height: 26px; transform: rotate(135deg); display: flex; align-items: center; justify-content: center;">
								 <svg viewBox="0 0 66 36" xmlns="http://www.w3.org/2000/svg" style="flex: 1 1 0%;">
									<path d="M3 3l30 30L63 3" fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-width="6"></path>
								 </svg>
							  </div>
						   </button>
						   <button type="button" class="directional-button" data-degrees="0">
							  <div style="width: 26px; height: 26px; transform: rotate(180deg); display: flex; align-items: center; justify-content: center;">
								 <svg viewBox="0 0 66 36" xmlns="http://www.w3.org/2000/svg" style="flex: 1 1 0%;">
									<path d="M3 3l30 30L63 3" fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-width="6"></path>
								 </svg>
							  </div>
						   </button>
						   <button type="button" class="directional-button" data-degrees="55">
							  <div style="width: 26px; height: 26px; transform: rotate(225deg); display: flex; align-items: center; justify-content: center;">
								 <svg viewBox="0 0 66 36" xmlns="http://www.w3.org/2000/svg" style="flex: 1 1 0%;">
									<path d="M3 3l30 30L63 3" fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-width="6"></path>
								 </svg>
							  </div>
						   </button>
						   <button type="button" class="directional-button" data-degrees="270">
							  <div style="width: 26px; height: 26px; transform: rotate(90deg); display: flex; align-items: center; justify-content: center;">
								 <svg viewBox="0 0 66 36" xmlns="http://www.w3.org/2000/svg" style="flex: 1 1 0%;">
									<path d="M3 3l30 30L63 3" fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-width="6"></path>
								 </svg>
							  </div>
						   </button>
						   <div class="directional-filler"></div>
						   <button type="button" class="directional-button active" data-degrees="90">
							  <div style="width: 26px; height: 26px; transform: rotate(270deg); display: flex; align-items: center; justify-content: center;">
								 <svg viewBox="0 0 66 36" xmlns="http://www.w3.org/2000/svg" style="flex: 1 1 0%;">
									<path d="M3 3l30 30L63 3" fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-width="6"></path>
								 </svg>
							  </div>
						   </button>
						   <button type="button" class="directional-button" data-degrees="225">
							  <div style="width: 26px; height: 26px; transform: rotate(45deg); display: flex; align-items: center; justify-content: center;">
								 <svg viewBox="0 0 66 36" xmlns="http://www.w3.org/2000/svg" style="flex: 1 1 0%;">
									<path d="M3 3l30 30L63 3" fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-width="6"></path>
								 </svg>
							  </div>
						   </button>
						   <button type="button" class="directional-button" data-degrees="180">
							  <div style="width: 26px; height: 26px; transform: rotate(0deg); display: flex; align-items: center; justify-content: center;">
								 <svg viewBox="0 0 66 36" xmlns="http://www.w3.org/2000/svg" style="flex: 1 1 0%;">
									<path d="M3 3l30 30L63 3" fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-width="6"></path>
								 </svg>
							  </div>
						   </button>
						   <button type="button" class="directional-button" data-degrees="135">
							  <div style="width: 26px; height: 26px; transform: rotate(315deg); display: flex; align-items: center; justify-content: center;">
								 <svg viewBox="0 0 66 36" xmlns="http://www.w3.org/2000/svg" style="flex: 1 1 0%;">
									<path d="M3 3l30 30L63 3" fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-width="6"></path>
								 </svg>
							  </div>
						   </button>
						</div>
						
						<h5>Gradient angle, deg</h5>
						<input type="number" min="0" max="360" value="90" step="1" id="degree" >
						<input type="range" min="0" max="360" value="90" step="1" id="degreeRange"><br><br>
					</div>
				</div>
				<div class="tiny-12 medium-6">
					<h3>Colors</h3><hr style="margin:0;background:var(--color-purple-1)">
					<h5>Colors and Opacity, %</h5>
					<div class="colors"></div>
				</div>
			</div>
		</section>
		
		<section class="content_block" id="css-output" style="position: relative;">
			<h3>CSS</h3>
			<pre id="colorOutput"></pre>
			<button class="tiny" id="outputCopy" style="position:absolute;right:1rem;top: 1rem;">Copy CSS</button>
		</section>
		
		<div class="row">
			<div class="tiny-12 center-tiny"><br><h3>Gradients Gallery</h3><br></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: linear-gradient( 109.6deg,  rgba(62,161,219,1) 11.2%, rgba(93,52,236,1) 100.2% );" data-clipboard-text="background-image: linear-gradient( 109.6deg,  rgba(62,161,219,1) 11.2%, rgba(93,52,236,1) 100.2% );"></div></div></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: radial-gradient( circle 759px at -6.7% 50%,  rgba(80,131,73,1) 0%, rgba(140,209,131,1) 26.2%, rgba(178,231,170,1) 50.6%, rgba(144,213,135,1) 74.1%, rgba(75,118,69,1) 100.3% );" data-clipboard-text="background-image: radial-gradient( circle 759px at -6.7% 50%,  rgba(80,131,73,1) 0%, rgba(140,209,131,1) 26.2%, rgba(178,231,170,1) 50.6%, rgba(144,213,135,1) 74.1%, rgba(75,118,69,1) 100.3% );"></div></div></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: radial-gradient( circle 597px at 93% 9.8%,  rgba(255,61,89,1) 1.7%, rgba(252,251,44,1) 97% );" data-clipboard-text="background-image: radial-gradient( circle 597px at 93% 9.8%,  rgba(255,61,89,1) 1.7%, rgba(252,251,44,1) 97% );"></div></div></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: linear-gradient( 179.4deg,  rgba(33,150,243,1) 1.8%, rgba(22,255,245,0.60) 97.1% );" data-clipboard-text="background-image: linear-gradient( 179.4deg,  rgba(33,150,243,1) 1.8%, rgba(22,255,245,0.60) 97.1% );"></div></div></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: linear-gradient( 0.2deg,  rgba(252,220,115,1) -13.1%, rgba(252,194,115,1) 31.9%, rgba(241,84,84,1) 69.6% );" data-clipboard-text="background-image: linear-gradient( 0.2deg,  rgba(252,220,115,1) -13.1%, rgba(252,194,115,1) 31.9%, rgba(241,84,84,1) 69.6% );"></div></div></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: linear-gradient( 69.7deg,  rgba(244,37,243,1) 1.4%, rgba(244,87,1,1) 36.2%, rgba(255,204,37,1) 72.2%, rgba(20,196,6,1) 113% );" data-clipboard-text="background-image: linear-gradient( 69.7deg,  rgba(244,37,243,1) 1.4%, rgba(244,87,1,1) 36.2%, rgba(255,204,37,1) 72.2%, rgba(20,196,6,1) 113% );"></div></div></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: linear-gradient( 112.7deg,  rgba(253,185,83,1) 11.4%, rgba(255,138,0,1) 70.2% );" data-clipboard-text="background-image: linear-gradient( 112.7deg,  rgba(253,185,83,1) 11.4%, rgba(255,138,0,1) 70.2% );"></div></div></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: linear-gradient( 109.6deg,  rgba(254,87,98,1) 11.2%, rgba(255,107,161,1) 99.1% );" data-clipboard-text="background-image: linear-gradient( 109.6deg,  rgba(254,87,98,1) 11.2%, rgba(255,107,161,1) 99.1% );"></div></div></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: linear-gradient( 109.6deg,  rgba(255,174,0,1) 11.2%, rgba(255,0,0,1) 100.2% );" data-clipboard-text="background-image: linear-gradient( 109.6deg,  rgba(255,174,0,1) 11.2%, rgba(255,0,0,1) 100.2% );"></div></div></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: linear-gradient( 109.6deg,  rgba(39,142,255,1) 11.2%, rgba(98,113,255,0.78) 100.2% );" data-clipboard-text="background-image: linear-gradient( 109.6deg,  rgba(39,142,255,1) 11.2%, rgba(98,113,255,0.78) 100.2% );"></div></div></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: linear-gradient( 102.1deg,  rgba(96,221,142,1) 8.7%, rgba(24,138,141,1) 88.1% );" data-clipboard-text="background-image: linear-gradient( 102.1deg,  rgba(96,221,142,1) 8.7%, rgba(24,138,141,1) 88.1% );"></div></div></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: linear-gradient( 181deg,  rgba(225,109,245,1) 6.9%, rgba(78,248,231,1) 112.8% );" data-clipboard-text="background-image: linear-gradient( 181deg,  rgba(225,109,245,1) 6.9%, rgba(78,248,231,1) 112.8% );"></div></div></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: linear-gradient( 67.2deg,  rgba(37,208,199,1) -7.5%, rgba(165,90,240,1) 62.7% );" data-clipboard-text="background-image: linear-gradient( 67.2deg,  rgba(37,208,199,1) -7.5%, rgba(165,90,240,1) 62.7% );"></div></div></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: linear-gradient( 177.8deg,  rgba(255,128,0,1) 9.2%, rgba(232,211,59,1) 86.8% );" data-clipboard-text="background-image: linear-gradient( 177.8deg,  rgba(255,128,0,1) 9.2%, rgba(232,211,59,1) 86.8% );"></div></div></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: linear-gradient( 109.6deg,  rgba(0,191,165,1) 11.2%, rgba(0,140,122,1) 100.2% );" data-clipboard-text="background-image: linear-gradient( 109.6deg,  rgba(0,191,165,1) 11.2%, rgba(0,140,122,1) 100.2% );"></div></div></div>
			<div class="tiny-6 small-4 medium-3 large-2"><div class="gradient-example"><div class="gradient" style="background-image: radial-gradient( circle 929px at 0.6% 1.3%,  rgba(248,251,10,1) 0%, rgba(248,47,47,1) 82.6% );" data-clipboard-text="background-image: radial-gradient( circle 929px at 0.6% 1.3%,  rgba(248,251,10,1) 0%, rgba(248,47,47,1) 82.6% );"></div></div></div>
		</div>
		
		<?php include('../_inc/ad.php'); ?>
		
	</main>
	
</div>

<script src="/gradient/gradient.js"></script>

<?php include_once("../_inc/footer.php"); ?>



<div class="w_box bottom right">
	<button class="w_close" onclick="wCloseWidget(this)">✕</button>
	<div class="w_content" style="text-align: left;"></div>
</div>
<script>
	var gradientCSS = new ClipboardJS('#outputCopy');
	gradientCSS.on('success', function(e) {
		var id = window.setTimeout(function() {}, 0);
		while (id--) {
			window.clearTimeout(id);
		}
		document.querySelector('.w_content').innerHTML = "Copied: <code>"+e.text+"</code>";
		document.querySelector('.w_box').classList.add("w_animate");
		setTimeout(function(){ document.querySelector('.w_box').classList.remove("w_animate"); }, 2000);
		e.clearSelection();
	});
	var exampleGradient = new ClipboardJS('.gradient-example .gradient');
	exampleGradient.on('success', function(e) {
		var id = window.setTimeout(function() {}, 0);
		while (id--) {
			window.clearTimeout(id);
		}
		document.querySelector('.w_content').innerHTML = "Copied: <code>"+e.text+"</code>";
		document.querySelector('.w_box').classList.add("w_animate");
		setTimeout(function(){ document.querySelector('.w_box').classList.remove("w_animate"); }, 2000);
		e.clearSelection();
	});
	
</script>





