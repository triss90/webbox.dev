<?php
$title = "CSS Image Filter";
$description = "Customize your images with a variety of CSS filters";

// https://codepen.io/chriscoyier/pen/mdrdNXW
// https://www.blog.duomly.com/8-css-image-filters-with-code-examples/
	
?>

<?php include_once("../_inc/header.php"); ?>

<style>
	.tiny-6 {
		position: relative;
	}
	pre {
		overflow-wrap: break-word;
		word-wrap: break-word;
		hyphens: auto;
	}
	.hidden {
		display: none !important;
	}
	.dropzone {
		width: 100%;
		border: 2px dashed var(--color-purple-1);
		text-align: center;
		border-radius: 0.7rem;
		padding: 100px calc(50% - 42px);
	}
	input[type=range] {
		margin: 12px 0;
		width: 100%;
	}
	.preview {
		border-radius: 0.3rem;
		position: relative;
	}
	.cssOutput {
		position: absolute;
		bottom: 0;
		left: 0;
		background: rgba(255,255,255,0.5);
		margin: 0 0.5rem;
		padding: 0.75rem 0.35rem;
		width: calc(100% - 1rem);
		overflow-wrap: break-word;
		word-wrap: break-word;
		hyphens: auto;
		border-radius: 0 0 0.3rem 0.3rem;
	}
	#loader {
		display: block;
	}
	.loader-fancy {
		position: relative;
		margin: 200px auto;
		width: 100px;
	}
	.loader-fancy.loader-fancy-small {
		width: 50px;
	}
	.loader-fancy.loader-fancy-large {
		width: 150px;
	}
	.loader-fancy::before {
		content: '';
		display: block;
		padding-top: 100%;
	}
	.loader-fancy .circular {
		-webkit-animation: rotate 2s linear infinite;
		animation: rotate 2s linear infinite;
		height: 100%;
		-webkit-transform-origin: center center;
		transform-origin: center center;
		width: 100%;
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		margin: auto;
	}
	.loader-fancy .circular .path {
		stroke-dasharray: 1,200;
		stroke-dashoffset: 0;
		-webkit-animation: dash 1.5s ease-in-out infinite,color 6s ease-in-out infinite;
		animation: dash 1.5s ease-in-out infinite,color 6s ease-in-out infinite;
		stroke-linecap: round;
	}

	@-webkit-keyframes rotate {
		100% {
			-webkit-transform: rotate(360deg);
			transform: rotate(360deg);
		}
	}

	@keyframes rotate {
		100% {
			-webkit-transform: rotate(360deg);
			transform: rotate(360deg);
		}
	}
	@-webkit-keyframes dash {
		0% {
			stroke-dasharray: 1,200;
			stroke-dashoffset: 0;
		}
		50% {
			stroke-dasharray: 89,200;
			stroke-dashoffset: -35px;
		}
		100% {
			stroke-dasharray: 89,200;
			stroke-dashoffset: -124px;
		}
	}
	@keyframes dash {
		0% {
			stroke-dasharray: 1,200;
			stroke-dashoffset: 0;
		}
		50% {
			stroke-dasharray: 89,200;
			stroke-dashoffset: -35px;
		}
		100% {
			stroke-dasharray: 89,200;
			stroke-dashoffset: -124px;
		}
	}
	@-webkit-keyframes color {
		100%,0% {
			stroke: var(--color-blue-1);
		}
		40% {
			stroke: var(--color-blue-2);
		}
		66% {
			stroke: var(--color-purple-1);
		}
		80%,90% {
			stroke: var(--color-purple-2);
		}
	}
	@keyframes color {
		100%,0% {
			stroke: var(--color-blue-1);
		}
		40% {
			stroke: var(--color-blue-2);
		}
		66% {
			stroke: var(--color-purple-1);
		}
		80%,90% {
			stroke: var(--color-purple-2);
		}
	}
</style>

<div class="wrapper" id="filter">
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	<main class="content">
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">CSS Image Filter</h1>
					<h2 class="small center">Customize your images with a variety of CSS filters</h2>
					<hr>
					<input id="dropzone" class="dropzone" type="file" name="image" onchange="previewImage(this)" accept="image/*"/>
					<div id="loader" class="hidden">
						<div class="loader-fancy loader-fancy-large">
							<svg class="circular" viewBox="25 25 50 50">
								<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
							</svg>
						</div>
					</div>
					<br><br>
				</div>
			</div>
			
			<div id="output" class="hidden">
				<div class="row">
					<div class="tiny-6 medium-4 large-3" style="margin-top:1.5rem;">
						<div class="row">
							<div class="tiny"><h3>Grayscale</h3></div>
							<div class="tiny" style="text-align: right;"><input type="range" min="0" max="100" value="100" step="1" id="grayscaleSlider" onInput="grayscale(this)"></div>
						</div>
						<img class="preview" id="grayscaleImage" style="filter: grayscale(100%)" data-type="%" src="" alt="image filter">
					</div>
					<div class="tiny-6 medium-4 large-3" style="margin-top:1.5rem;">
						<div class="row">
							<div class="tiny"><h3>Sepia</h3></div>
							<div class="tiny" style="text-align: right;"><input type="range" min="0" max="100" value="100" step="1" id="sepiaSlider" onInput="sepia(this)"></div>
						</div>
						<img class="preview" id="sepiaImage" style="filter: sepia(100%)" data-type="%" src="" alt="image filter">
					</div>
					<div class="tiny-6 medium-4 large-3" style="margin-top:1.5rem;">
						<div class="row">
							<div class="tiny"><h3>Saturate</h3></div>
							<div class="tiny" style="text-align: right;"><input type="range" min="0" max="25" value="7" step="1" id="saturateSlider" onInput="saturate(this)"></div>
						</div>
						<img class="preview" id="saturateImage" style="filter: saturate(5)" data-type="float" src="" alt="image filter">
					</div>
					<div class="tiny-6 medium-4 large-3" style="margin-top:1.5rem;">
						<div class="row">
							<div class="tiny"><h3>Hue</h3></div>
							<div class="tiny" style="text-align: right;"><input type="range" min="0" max="360" value="360" step="1" id="hueSlider" onInput="hue(this)"></div>
						</div>
						<img class="preview" id="hueImage" style="filter: hue-rotate(360deg)" data-type="angle" src="" alt="image filter">
					</div>
					<div class="tiny-6 medium-4 large-3" style="margin-top:1.5rem;">
						<div class="row">
							<div class="tiny"><h3>Invert</h3></div>
							<div class="tiny" style="text-align: right;"><input type="range" min="0" max="100" value="100" step="1" id="invertSlider" onInput="invert(this)"></div>
						</div>
						<img class="preview" id="invertImage" style="filter: invert(100%)" data-type="%" src="" alt="image filter">
					</div>
					<div class="tiny-6 medium-4 large-3" style="margin-top:1.5rem;">
						<div class="row">
							<div class="tiny"><h3>Opacity</h3></div>
							<div class="tiny" style="text-align: right;"><input type="range" min="0" max="100" value="100" step="1" id="opacitySlider" onInput="opacity(this)"></div>
						</div>
						<img class="preview" id="opacityImage" style="filter: opacity(100%)" data-type="%" src="" alt="image filter">
					</div>
					<div class="tiny-6 medium-4 large-3" style="margin-top:1.5rem;">
						<div class="row">
							<div class="tiny"><h3>Brightness</h3></div>
							<div class="tiny" style="text-align: right;"><input type="range" min="0" max="15" value="5" step="1" id="brightnessSlider" onInput="brightness(this)"></div>
						</div>
						<img class="preview" id="brightnessImage" style="filter: brightness(5)" data-type="float" src="" alt="image filter">
					</div>
					<div class="tiny-6 medium-4 large-3" style="margin-top:1.5rem;">
						<div class="row">
							<div class="tiny"><h3>Contrast</h3></div>
							<div class="tiny" style="text-align: right;"><input type="range" min="0" max="15" value="5" step="1" id="contrastSlider" onInput="contrast(this)"></div>
						</div>
						<img class="preview" id="contrastImage" style="filter: contrast(5)" data-type="float" src="" alt="image filter">
					</div>
					<div class="tiny-6 medium-4 large-3" style="margin-top:1.5rem;">
						<div class="row">
							<div class="tiny"><h3>Blur</h3></div>
							<div class="tiny" style="text-align: right;"><input type="range" min="0" max="50" value="16" step="1" id="blurSlider" onInput="blurs(this)"></div>
						</div>
						<img class="preview" id="blurImage" style="filter: blur(16px)" data-type="px" src="" alt="image filter">
					</div>
					<div class="tiny-6 medium-4 large-3" style="margin-top:1.5rem;">
						<div class="row">
							<div class="tiny"><h3>Shadow</h3></div>
							<div class="tiny" style="text-align: right;"><input type="range" min="0" max="50" value="8" step="1" id="shadowSlider" onInput="shadow(this)"></div>
						</div>
						<img class="preview" id="shadowImage" style="filter: drop-shadow(8px 8px 8px #888)" data-type="px" src="" alt="image filter">
					</div>
				</div>
			</div>
			<br><br>
		</section>
				
	</main>
	
</div>

<script>
function insertAfter(referenceNode, newNode) {
	referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

function previewImage(input) {
	const preview = document.querySelectorAll('.preview');
	const output = document.querySelector('#output');
	const loader = document.querySelector('#loader');	
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			for (let i = 0; i < preview.length; i++) {
				preview[i].setAttribute('src', e.target.result);
				let cssOutputElement = document.createElement('div');
				// cssOutputElement.innerHTML = preview[i].getAttribute('style');
				cssOutputElement.innerHTML = "img {<br>";
				cssOutputElement.innerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;"+preview[i].getAttribute('style')+";<br>";
				cssOutputElement.innerHTML += "}";
				cssOutputElement.classList.add('cssOutput');
				cssOutputElement.classList.add(preview[i].id);
				insertAfter(preview[i], cssOutputElement);
				console.log();
			}
		}
		reader.readAsDataURL(input.files[0]);
		loader.classList.remove('hidden');
		setTimeout(function() {
			loader.classList.add('hidden');
			output.classList.remove('hidden');
		}, 2000);
		
	} else {
		for (let i = 0; i < preview.length; i++) {
			preview[i].setAttribute('src', 'placeholder.png');
		}
	}
}

function grayscale(e) {
	const grayscaleImage = document.getElementById('grayscaleImage');
	const grayscaleImageCSS = document.querySelector('.grayscaleImage');
	grayscaleImageCSS.innerHTML = "img {<br>";
	grayscaleImageCSS.innerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;filter: grayscale("+e.value+"%);<br>";
	grayscaleImageCSS.innerHTML += "}";
	grayscaleImage.style.filter = "grayscale("+e.value+"%)";
}

function sepia(e) {
	const sepiaImage = document.getElementById('sepiaImage');
	const sepiaImageCSS = document.querySelector('.sepiaImage');
	sepiaImageCSS.innerHTML = "img {<br>";
	sepiaImageCSS.innerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;filter: sepia("+e.value+"%);<br>";
	sepiaImageCSS.innerHTML += "}";
	sepiaImage.style.filter = "sepia("+e.value+"%)";
}

function saturate(e) {
	const saturateImage = document.getElementById('saturateImage');
	const saturateImageCSS = document.querySelector('.saturateImage');
	saturateImageCSS.innerHTML = "img {<br>";
	saturateImageCSS.innerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;filter: saturate("+e.value+");<br>";
	saturateImageCSS.innerHTML += "}";
	saturateImage.style.filter = "saturate("+e.value+")";
}

function hue(e) {
	const hueImage = document.getElementById('hueImage');
	const hueImageCSS = document.querySelector('.hueImage');
	hueImageCSS.innerHTML = "img {<br>";
	hueImageCSS.innerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;filter: hue-rotate("+e.value+"deg);<br>";
	hueImageCSS.innerHTML += "}";
	hueImage.style.filter = "hue-rotate("+e.value+"deg)";
}

function invert(e) {
	const invertImage = document.getElementById('invertImage');
	const invertImageCSS = document.querySelector('.invertImage');
	invertImageCSS.innerHTML = "img {<br>";
	invertImageCSS.innerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;filter: invert("+e.value+"%);<br>";
	invertImageCSS.innerHTML += "}";
	invertImage.style.filter = "invert("+e.value+"%)";
}

function opacity(e) {
	const opacityImage = document.getElementById('opacityImage');
	const opacityImageCSS = document.querySelector('.opacityImage');
	opacityImageCSS.innerHTML = "img {<br>";
	opacityImageCSS.innerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;filter: opacity("+e.value+"%);<br>";
	opacityImageCSS.innerHTML += "}";
	opacityImage.style.filter = "opacity("+e.value+"%)";
}

function brightness(e) {
	const brightnessImage = document.getElementById('brightnessImage');
	const brightnessImageCSS = document.querySelector('.brightnessImage');
	brightnessImageCSS.innerHTML = "img {<br>";
	brightnessImageCSS.innerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;filter: brightness("+e.value+");<br>";
	brightnessImageCSS.innerHTML += "}";
	brightnessImage.style.filter = "brightness("+e.value+")";
}

function contrast(e) {
	const contrastImage = document.getElementById('contrastImage');
	const contrastImageCSS = document.querySelector('.contrastImage');
	contrastImageCSS.innerHTML = "img {<br>";
	contrastImageCSS.innerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;filter: contrast("+e.value+");<br>";
	contrastImageCSS.innerHTML += "}";
	contrastImage.style.filter = "contrast("+e.value+")";
}

function blurs(e) {
	const blurImage = document.getElementById('blurImage');
	const blurImageCSS = document.querySelector('.blurImage');
	blurImageCSS.innerHTML = "img {<br>";
	blurImageCSS.innerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;filter: blur("+e.value+"px);<br>";
	blurImageCSS.innerHTML += "}";
	blurImage.style.filter = "blur("+e.value+"px)";
}

function shadow(e) {
	const shadowImage = document.getElementById('shadowImage');
	const shadowImageCSS = document.querySelector('.shadowImage');
	shadowImageCSS.innerHTML = "img {<br>";
	shadowImageCSS.innerHTML += "&nbsp;&nbsp;&nbsp;&nbsp;filter: drop-shadow("+e.value+"px "+e.value+"px "+e.value+"px #000);<br>";
	shadowImageCSS.innerHTML += "}";
	shadowImage.style.filter = "drop-shadow("+e.value+"px "+e.value+"px "+e.value+"px #888)";
}

</script>

<?php include_once("../_inc/footer.php"); ?>





