<?php
$title = "Fluid Typography";
$description = "Create automatically scaling, fluid typography";
?>

<style>
:root {
  --computed-clamp: clamp(1.5rem, 8vw - 2rem, 3rem);
}
.textarea {
	width: 100%;
	display: block;
	margin: 0 auto;
	appearance: none;
	border: none;
	font-size: var(--computed-clamp);
	min-height: 0vh;
	font-weight: bold;
	resize: none;
	text-align: center;
	&:hover {
		text-decoration: underline;
	}
}
#code-output {
	background: var(--color-white-2);
	line-break: anywhere;
	border-radius: 1rem;
	min-height: 100%;
	padding: 2rem;
	display: flex;
	align-items: center;
	justify-content: center;
}
h2 {
	font-weight: 400;
}
</style>



<?php include_once("../_inc/header.php"); ?>

<div class="wrapper" id="fluid-typography">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">Fluid Typography</h1>
					<h2 class="small center">Create text that scales with the window size, so that your headings look great on any screen.</h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="tiny-12 small-12 medium-12 large-7 center-tiny  start-large">
					<strong class="inline">Minimum size:</strong>&nbsp;&nbsp;<wbr><span><input type="text" id="min-font-val" class="inline" value="1.5"><span style="color:var(--color-red-1)">rem</span> at a viewport width of <input type="text" id="min-screen-val" class="inline" value="700"><span style="color:var(--color-red-1)">px</span>.</span><br>
					<strong class="inline">Maximum size:</strong>&nbsp;&nbsp;<wbr><span><input type="text" id="max-font-val" class="inline" value="3"><span style="color:var(--color-red-1)">rem</span> at a viewport width of <input type="text" id="max-screen-val" class="inline" value="1000"><span style="color:var(--color-red-1)">px</span>.</span>
					<br><br>
				</div>
				<div class="tiny-12 small-12 medium-12 large-5" id="code-output">
					<pre class="code" style="word-wrap: break-word; word-break: break-all; overflow: scroll;"><span style="color:var(--color-red-1)">font-size:</span> <span style="color:var(--color-green-1)">clamp</span>(<span id="cssVal1">1.5</span>rem, <span id="cssVal2">8</span>vw <span id="cssVal3">- 2</span>rem, <span id="cssVal4">3</span>rem);</pre>
				</div>
			</div>
		</section>
				
		<section class="content_block">
			<textarea class="textarea" id="output">Result (edit me!)</textarea>
		</section>
		
		<?php include('../_inc/ad.php'); ?>
		
	</main>
	
</div>

<script>
const minFontVal = document.getElementById('min-font-val'),
	  maxFontVal = document.getElementById('max-font-val'),
	  minScreenVal = document.getElementById('min-screen-val'),
	  maxScreenVal = document.getElementById('max-screen-val'),
	  cssVal1 = document.getElementById('cssVal1'),
	  cssVal2 = document.getElementById('cssVal2'),
	  cssVal3 = document.getElementById('cssVal3'),
	  cssVal4 = document.getElementById('cssVal4'),
	  output = document.getElementById('output');
let root = document.documentElement;

function oneDecimal(x) {
	return Math.round(10 * x) / 10;
}
function updateFont() {
	let remCoefficient = oneDecimal(minFontVal.value - (minScreenVal.value * (maxFontVal.value - minFontVal.value)) / (maxScreenVal.value - minScreenVal.value));
	let vwCoefficient = oneDecimal((1600 * (maxFontVal.value - minFontVal.value)) / (maxScreenVal.value - minScreenVal.value));
	if (remCoefficient >= 0) {
		remCoefficient = "+ "+remCoefficient;
	} else {
		remCoefficient = "- "+Math.abs(remCoefficient);
	}
	const newFontSize = 'clamp('+minFontVal.value+'rem, '+vwCoefficient+'vw '+remCoefficient+'rem, '+maxFontVal.value+'rem)';
	cssVal1.innerHTML = minFontVal.value;
	cssVal2.innerHTML = vwCoefficient;
	cssVal3.innerHTML = remCoefficient;
	cssVal4.innerHTML = maxFontVal.value;
	output.style.setProperty('--computed-clamp', newFontSize);
}

minFontVal.addEventListener('input', function() {
	updateFont();	
});
maxFontVal.addEventListener('input', function() {
	updateFont();	
});
minScreenVal.addEventListener('input', function() {
	updateFont();	
});
maxScreenVal.addEventListener('input', function() {
	updateFont();	
});
</script>

<?php include_once("../_inc/footer.php"); ?>





