<?php
$title = "CSS Pattern Generator";
$description = "Generate custom CSS background patterns.";
?>

<?php include_once("../_inc/header.php"); ?>

<style id="rootStyles">
.hidden {
	display: none;
}
.selected {
	border: 2px solid var(--color-blue-2) !important;
}
:root {
	--pattern-background: #F9F7FF30;
	--pattern-foreground: #5C7CFA90;
	--pattern-spacing: 10px;
}
.pattern-select {
	display: inline-block;
	border-radius: 1rem;
	border: 2px solid var(--color-white-3);
	transform: scale(1);
	transition: all ease-in-out 100ms;
	width: 100%;
	padding: 0 0 100% 0;
	height: 0;
	
}
.pattern-select:hover {
	transform: scale(1.02);
}
</style>

<style id="pattern-2">.pattern-2 {
	background-color: var(--pattern-background);
	background-image: linear-gradient(135deg, var(--pattern-foreground) 25%, transparent 25%),linear-gradient(225deg, var(--pattern-foreground) 25%, transparent 25%),linear-gradient(45deg, var(--pattern-foreground) 25%, transparent 25%),linear-gradient(315deg, var(--pattern-foreground) 25%, var(--pattern-background) 25%);
	background-position:  var(--pattern-spacing) 0, var(--pattern-spacing) 0, 0 0, 0 0;
	background-size: var(--pattern-spacing) var(--pattern-spacing);
	background-repeat: repeat;
}
</style>
<style id="pattern-3">.pattern-3 {
	background-color: var(--pattern-background);
	background-image: linear-gradient(135deg, var(--pattern-foreground) 25%, transparent 25%),linear-gradient(225deg, var(--pattern-foreground) 25%, transparent 25%),linear-gradient(45deg, var(--pattern-foreground) 25%, transparent 25%),linear-gradient(315deg, var(--pattern-foreground) 25%, var(--pattern-background) 25%);
	background-position:  var(--pattern-spacing) 0, var(--pattern-spacing) 0, 0 0, 0 0;
	background-size: calc(var(--pattern-spacing)*2) calc(var(--pattern-spacing)*2);
	background-repeat: repeat;
}
</style>
<style id="pattern-4">.pattern-4 {
	background-color: var(--pattern-background);
	background: repeating-linear-gradient( -45deg, var(--pattern-foreground), var(--pattern-foreground) calc(var(--pattern-spacing)/2), var(--pattern-background) calc(var(--pattern-spacing)/2), var(--pattern-background) calc(var(--pattern-spacing)*2) );
}
</style>
<style id="pattern-5">.pattern-5 {
	background-color: var(--pattern-background);
	background: repeating-linear-gradient( 45deg, var(--pattern-foreground), var(--pattern-foreground) calc(var(--pattern-spacing)/2), var(--pattern-background) calc(var(--pattern-spacing)/2), var(--pattern-background) calc(var(--pattern-spacing)*2) );
}
</style>
<style id="pattern-6">.pattern-6 {
	background-color: var(--pattern-background);
	background-image: linear-gradient(var(--pattern-foreground) 2px, transparent 2px),linear-gradient(90deg, var(--pattern-foreground) 2px, transparent 2px),linear-gradient(var(--pattern-foreground) 1px, transparent 1px),linear-gradient(90deg, var(--pattern-foreground) 1px, var(--pattern-background) 1px);
	background-size: calc(var(--pattern-spacing)*4) calc(var(--pattern-spacing)*4), calc(var(--pattern-spacing)*4) calc(var(--pattern-spacing)*4), var(--pattern-spacing) var(--pattern-spacing), var(--pattern-spacing) var(--pattern-spacing);
	background-position: -2px -2px, -2px -2px, -1px -1px, -1px -1px;
}
</style>
<style id="pattern-7">.pattern-7 {
	background-color: var(--pattern-background);
	background-image: radial-gradient(var(--pattern-foreground) 0.5px, var(--pattern-background) 0.5px);
	background-size: calc(var(--pattern-spacing)*2) calc(var(--pattern-spacing)*2);
}
</style>
<style id="pattern-8">.pattern-8 {
	background-color: var(--pattern-background);
	background-image: radial-gradient(var(--pattern-foreground) 0.5px, transparent 0.5px), radial-gradient(var(--pattern-foreground) 0.5px, var(--pattern-background) 0.5px);
	background-size: var(--pattern-spacing) var(--pattern-spacing);
	background-position: 0 0,var(--pattern-spacing) var(--pattern-spacing);
}
</style>
<style id="pattern-9">.pattern-9 {
	background-color: var(--pattern-foreground);
	background-size: calc(var(--pattern-spacing)*6) calc(var(--pattern-spacing)*6);
	background-image: radial-gradient(transparent var(--pattern-spacing),var(--pattern-background) var(--pattern-spacing),var(--pattern-background) calc(var(--pattern-spacing)*3),transparent calc(var(--pattern-spacing)*3));
}
</style>
<style id="pattern-10">.pattern-10 {
	background-color: var(--pattern-background);
	background-image: linear-gradient(var(--pattern-foreground) 1px, transparent 1px),linear-gradient(to right, var(--pattern-foreground) 1px, var(--pattern-background) 1px);
	background-size: var(--pattern-spacing) var(--pattern-spacing);
}
</style>
<style id="pattern-11">.pattern-11 {
	background-color: var(--pattern-background);
	background-image: linear-gradient(135deg, var(--pattern-foreground) 25%, transparent 25%),linear-gradient(225deg, var(--pattern-foreground) 25%, transparent 25%),linear-gradient(45deg, var(--pattern-foreground) 25%, transparent 25%),linear-gradient(315deg, var(--pattern-foreground) 25%, var(--pattern-background) 25%);
	background-position:  var(--pattern-spacing) 0, var(--pattern-spacing) 0, 0 0, 0 0;
	background-size: var(--pattern-spacing) var(--pattern-spacing);
	background-repeat: repeat;
}
</style>
<style id="pattern-12">.pattern-12 {
	background-color: var(--pattern-background);
	background-image: linear-gradient(0deg, var(--pattern-background) 50%, var(--pattern-foreground) 50%);
	background-size: var(--pattern-spacing) var(--pattern-spacing);
}
</style>
<style id="pattern-13">.pattern-13 {
	background-color: var(--pattern-background);
	background-image: linear-gradient(to right, var(--pattern-foreground), var(--pattern-foreground) 5px, var(--pattern-background) 5px, var(--pattern-background) );
	background-size: var(--pattern-spacing) 100%;
}
</style>
<style id="pattern-14">.pattern-14 {
	background-color: var(--pattern-background);
	background-size: var(--pattern-spacing) var(--pattern-spacing);
	background-image: repeating-linear-gradient(45deg, var(--pattern-foreground) 0, var(--pattern-foreground) 1px, var(--pattern-background) 0, var(--pattern-background) 50%);
}
</style>
<style id="pattern-15">.pattern-15 {
	background-color: var(--pattern-background);
	background-size: var(--pattern-spacing) var(--pattern-spacing);
	background-image: repeating-linear-gradient(0deg, var(--pattern-foreground), var(--pattern-foreground) 1px, var(--pattern-background) 1px, var(--pattern-background));
}
</style>
<style id="pattern-16">.pattern-16 {
	background-color: var(--pattern-background);
	background-size: calc(var(--pattern-spacing)*2) calc(var(--pattern-spacing)*2);
	background-image: repeating-linear-gradient(to right, var(--pattern-foreground), var(--pattern-foreground) 1px, var(--pattern-background) 1px, var(--pattern-background));
}
</style>
<style id="pattern-17">.pattern-17 {
	background-color: var(--pattern-background);
	background: radial-gradient(circle, transparent 20%, var(--pattern-background) 20%, var(--pattern-background) 80%, transparent 80%, transparent),radial-gradient(circle, transparent 20%, var(--pattern-background) 20%, var(--pattern-background) 80%, transparent 80%, transparent) 25px 25px,linear-gradient(var(--pattern-foreground) 2px, transparent 2px) 0 -1px,linear-gradient(90deg, var(--pattern-foreground) 2px, var(--pattern-background) 2px) -1px 0;
	background-size: calc(var(--pattern-spacing)*4) calc(var(--pattern-spacing)*4), calc(var(--pattern-spacing)*4) calc(var(--pattern-spacing)*4), calc(var(--pattern-spacing)*2) calc(var(--pattern-spacing)*2), calc(var(--pattern-spacing)*2) calc(var(--pattern-spacing)*2);
}
</style>
<style id="pattern-18">.pattern-18 {
	background-color: var(--pattern-background);
	background-image: repeating-linear-gradient(45deg, var(--pattern-foreground) 25%, transparent 25%, transparent 75%, var(--pattern-foreground) 75%, var(--pattern-foreground)), repeating-linear-gradient(45deg, var(--pattern-foreground) 25%, var(--pattern-background) 25%, var(--pattern-background) 75%, var(--pattern-foreground) 75%, var(--pattern-foreground));
	background-position: 0 0, var(--pattern-spacing)  var(--pattern-spacing) ;
	background-size: calc(var(--pattern-spacing)*2) calc(var(--pattern-spacing)*2);
}
</style>
<style id="pattern-19">.pattern-19 {
	background-color: var(--pattern-background);
	background-image: linear-gradient(45deg, var(--pattern-foreground) 50%, var(--pattern-background) 50%);
	background-size: var(--pattern-spacing) var(--pattern-spacing) ;
}
</style>
<style id="pattern-20">.pattern-20 {
	background-color: var(--pattern-background);
	background-image: linear-gradient(-45deg, var(--pattern-background), var(--pattern-background) 50%, var(--pattern-foreground) 50%, var(--pattern-foreground));
	background-size: var(--pattern-spacing) var(--pattern-spacing) ;
}
</style>
<style id="pattern-21">.pattern-21 {
	background-color: var(--pattern-foreground);
	background-size: calc(var(--pattern-spacing)*6) calc(var(--pattern-spacing)*6);
	background-image: radial-gradient(transparent var(--pattern-spacing),var(--pattern-background) var(--pattern-spacing),var(--pattern-background) calc(var(--pattern-spacing)*4),transparent calc(var(--pattern-spacing)*4));
}
</style>
<style id="pattern-22">.pattern-22 {
	background-color: var(--pattern-foreground);
	background-size: calc(var(--pattern-spacing)*5) calc(var(--pattern-spacing)*5);
	background-image: radial-gradient(transparent var(--pattern-spacing),var(--pattern-background) var(--pattern-spacing),var(--pattern-background) calc(var(--pattern-spacing)*3),transparent calc(var(--pattern-spacing)*3));
}
</style>
<style id="pattern-23">.pattern-23 {
	background-color: var(--pattern-foreground);
	background-size: calc(var(--pattern-spacing)*4) calc(var(--pattern-spacing)*4);
	background-image: radial-gradient(transparent var(--pattern-spacing),var(--pattern-background) var(--pattern-spacing),var(--pattern-background) calc(var(--pattern-spacing)*2),transparent calc(var(--pattern-spacing)*2));
}
</style>
<style id="pattern-24">.pattern-24 {
	background-color: var(--pattern-foreground);
	background-size: 48px 48px;
	background-image: radial-gradient(transparent calc(var(--pattern-spacing)*2),var(--pattern-background) calc(var(--pattern-spacing)*2),var(--pattern-background) calc(var(--pattern-spacing)*2),transparent 24px),radial-gradient(transparent calc(var(--pattern-spacing)*2),var(--pattern-background) calc(var(--pattern-spacing)*2),var(--pattern-background) calc(var(--pattern-spacing)*2),transparent 24px);
	background-position: 0 0 , 24px 24px;
}
</style>

<div class="wrapper" id="pattern">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block" style="background:rgba(255,255,255,0.9)">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">CSS Pattern Generator</h1>
					<h2 class="small center">Generate custom CSS background patterns</h2>
					<hr>
					
					<h2>Patterns</h2>
					<div class="row">
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-2" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-3" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-4" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-5" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-6" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-7" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-8" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-9" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-10" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-11" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-12" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-13" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-14" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-15" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-16" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-17" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-18" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-19" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-20" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-21" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-22" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-23" onclick="selectPattern(this)"></button></div>
						<div class="tiny-4 small-3 medium-2 large-1"><button class="pattern-select pattern-24" onclick="selectPattern(this)"></button></div>
					</div>
					
					<div id="options" class="hidden">
						<h2>Settings</h2><br>
						
						<div class="row" >
							<div class="tiny-12 small-12 medium-6 large-4">
								<h3>Background Color:</h3>
								<input value="#F9F7FF00" class="form-control" id="bgColor" style="background: var(--color-white-1); border: 2px solid var(--color-purple-3); border-radius: 0.5rem; padding: 0.3rem;" data-jscolor="{}">
							</div>
							<div class="tiny-12 small-6 medium-6 large-4">
								<h3>Foreground Color:</h3>
								<input value="#5c7cfa80" class="form-control" id="fgColor" style="background: var(--color-white-1); border: 2px solid var(--color-purple-3); border-radius: 0.5rem; padding: 0.3rem;" data-jscolor="{}">
							</div>
							<div class="tiny-12 small-6 medium-6 large-4">
								<h3>Size:</h3>
								<input type="range" min="1" max="50" step="1" value="10" class="spacing" id="spacing">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="tiny">
							<pre id="output" class="hidden" style="overflow-x: scroll; background:var(--color-black-2);color:var(--color-white-1);padding: 1rem;border-radius:0.5rem;"></pre>
						</div>
					</div>
							
				</div>
			</div>
		</section>

	</main>
	
</div>

<script src="jscolor.js"></script>

<script>
	const output = document.querySelector('#output');
	
	function replaceCustomProperties(input) {
		const styles = getComputedStyle(document.documentElement);
		const spacingValue = styles.getPropertyValue('--pattern-spacing');
		const backgroundValue = styles.getPropertyValue('--pattern-background');
		const foregroundValue = styles.getPropertyValue('--pattern-foreground');
		let output = input;
		output = output.replaceAll("var(--pattern-spacing)",spacingValue);
		output = output.replaceAll("var(--pattern-background)",backgroundValue);
		output = output.replaceAll("var(--pattern-foreground)",foregroundValue);
		output = output.replaceAll("  "," ");
		return output;
	}

	function selectPattern(e) {
		const styles = document.querySelector('#'+e.classList[1]);
		const patterns = document.querySelectorAll('.selected');
		const options = document.getElementById('options');
		output.innerHTML = replaceCustomProperties(styles.innerHTML);
		output.classList.remove('hidden');
		options.classList.remove('hidden');
		document.body.className = '';
		document.body.classList.add(e.classList[1]);
		for(let i = 0; i < patterns.length; i++) {
			patterns[i].classList.remove('selected');
		}
		e.classList.add('selected');
	}
	
	const spacing = document.getElementById('spacing');
	const bgColor = document.getElementById('bgColor');
	const fgColor = document.getElementById('fgColor');
	const r = document.querySelector(':root');
	
	spacing.addEventListener('input', function(e) {
		r.style.setProperty('--pattern-spacing', e.srcElement.value+'px');
		const pattern = document.querySelector('.selected');
		const style = document.querySelector('#'+pattern.getAttribute('class').split(' ')[1]);
		output.innerHTML = replaceCustomProperties(style.innerHTML);
	});
	
	bgColor.addEventListener('input', function(e) {
		r.style.setProperty('--pattern-background', e.srcElement.value);
		const pattern = document.querySelector('.selected');
		const style = document.querySelector('#'+pattern.getAttribute('class').split(' ')[1]);
		output.innerHTML = replaceCustomProperties(style.innerHTML);
	});
	
	fgColor.addEventListener('input', function(e) {
		r.style.setProperty('--pattern-foreground', e.srcElement.value);
		const pattern = document.querySelector('.selected');
		const style = document.querySelector('#'+pattern.getAttribute('class').split(' ')[1]);
		output.innerHTML = replaceCustomProperties(style.innerHTML);
	});
			
</script>

<?php include_once("../_inc/footer.php"); ?>





