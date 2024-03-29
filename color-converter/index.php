<?php
$title = "Color Converter";
$description = "Convert any color code to a number of different formats among which are HEX, RGB, HSV, HSL and CMYK.";
?>

<?php include_once("../_inc/header.php"); ?>

<style>
	.btn.block {
		padding: .90rem 0;
		top: 0;
	}
</style>

<div class="wrapper" id="color-converter">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">Color Code Converter</h1>
					<h2 class="small center">Convert any color code to a number of different formats among which are HEX, RGB, HSV, HSL and CMYK.</h2>
					<hr>
					
					<div class="row">
						  <div class="tiny">
							  <div class="alert alert-dismissible alert-danger">
								<button type="button" class="close" onclick="closeAliert(this)">&times;</button>
								Color converter brought to you by our friends over at <a href="https://colordrop.io" target="_blank" class="alert-link">colordrop.io</a>.
							</div>
						  </div>
					  </div>
			
					 <div id="converter">
						<form action="">
			
							<div class="row"><div class="tiny"><h3>HEX</h3></div></div>
							<div class="row">
								<div class="tiny-8 medium-10">
									<input type="text" class="form-control color-input-hex" maxlength="7" placeholder="#f06d06">
								</div>
								<div class="tiny-4 medium-2">
									<button class="btn block color-submit-hex" type="button">Convert</button>
								</div>
							</div>
			
							<br>
							
							<div class="row"><div class="tiny"><h3>RGB</h3></div></div>
							<div class="row">
								<div class="tiny-6 medium-4"><input type="text" class="form-control color-input-rgb-r" maxlength="3" placeholder="240"></div>
								<div class="tiny-6 medium-3"><input type="text" class="form-control color-input-rgb-g" maxlength="3" placeholder="109"></div>
								<div class="tiny-6 medium-3"><input type="text" class="form-control color-input-rgb-b" maxlength="3" placeholder="6"></div>
								<div class="tiny-6 medium-2"><button class="btn block color-submit-rgb" type="button">Convert</button></div>
							</div>
			
							<br>
							
							<div class="row"><div class="tiny"><h3>HSV</h3></div></div>
							<div class="row">
								<div class="tiny-6 medium-3"><input type="text" class="form-control color-input-hsv-h" maxlength="3" placeholder="142"></div>
								<div class="tiny-6 medium-4"><input type="text" class="form-control color-input-hsv-s" maxlength="3" placeholder="89"></div>
								<div class="tiny-6 medium-3"><input type="text" class="form-control color-input-hsv-v" maxlength="3" placeholder="121"></div>
								<div class="tiny-6 medium-2"><button class="btn block color-submit-hsv" type="button">Convert</button></div>
							</div>
			
							<br>
			
							<div class="row"><div class="tiny"><h3>HSL</h3></div></div>
							<div class="row">
								<div class="tiny-6 medium-3"><input type="text" class="form-control color-input-hsl-h" maxlength="3" placeholder="26"></div>
								<div class="tiny-6 medium-3"><input type="text" class="form-control color-input-hsl-s" maxlength="3" placeholder="95"></div>
								<div class="tiny-6 medium-4"><input type="text" class="form-control color-input-hsl-l" maxlength="3" placeholder="48"></div>
								<div class="tiny-6 medium-2"><button class="btn block color-submit-hsl" type="button">Convert</button></div>
							</div>
			
							<br>
							
							<div class="row"><div class="tiny"><h3>CMYK</h3></div></div>
							<div class="row">
								<div class="tiny-6 medium-3"><input type="text" class="form-control color-input-cmyk-c" maxlength="12" placeholder="0"></div>
								<div class="tiny-6 medium-2"><input type="text" class="form-control color-input-cmyk-m" maxlength="12" placeholder="0.3321"></div>
								<div class="tiny-6 medium-3"><input type="text" class="form-control color-input-cmyk-y" maxlength="12" placeholder="0.1123"></div>
								<div class="tiny-6 medium-2"><input type="text" class="form-control color-input-cmyk-k" maxlength="12" placeholder="0"></div>
								<div class="tiny-12 medium-2"><button class="btn block color-submit-cmyk" type="button">Convert</button></div>
							</div>
			
						</form>
					<div>
					
				</div>
			</div>
		</section>
		
		<?php include('../_inc/ad.php'); ?>
		
	</main>
	
</div>

<script src="/color-converter/xolor.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
	// https://github.com/fresheneesz/xolor
	// https://getbootstrap.com/docs/4.1/layout/grid/
	// https://html-color-codes.info/convert-color-format/
	
	var colorSubmitHex = document.querySelector('.color-submit-hex'),
		colorSubmitHsv = document.querySelector('.color-submit-hsv'),
		colorSubmitHsl = document.querySelector('.color-submit-hsl'),
		colorSubmitCmyk = document.querySelector('.color-submit-cmyk'),
		colorSubmitRgb = document.querySelector('.color-submit-rgb');
	
	
	// Convert HEX to CMYK
	function hexToCMYK (hex) {
	var computedC = 0;
	var computedM = 0;
	var computedY = 0;
	var computedK = 0;
	
	hex = (hex.charAt(0)=="#") ? hex.substring(1,7) : hex;
	
	if (hex.length != 6) {
		alert ('Invalid length of the input hex value!');
		return;
	}
	if (/[0-9a-f]{6}/i.test(hex) != true) {
		alert ('Invalid digits in the input hex value!');
		return;
	}
	
	var r = parseInt(hex.substring(0,2),16);
	var g = parseInt(hex.substring(2,4),16);
	var b = parseInt(hex.substring(4,6),16);
	
	// BLACK
	if (r==0 && g==0 && b==0) {
		computedK = 1;
		return [0,0,0,1];
	}
	
	computedC = 1 - (r/255);
	computedM = 1 - (g/255);
	computedY = 1 - (b/255);
	
	var minCMY = Math.min(computedC,Math.min(computedM,computedY));
	
	computedC = (computedC - minCMY) / (1 - minCMY) ;
	computedM = (computedM - minCMY) / (1 - minCMY) ;
	computedY = (computedY - minCMY) / (1 - minCMY) ;
	computedK = minCMY;
	
	return [computedC,computedM,computedY,computedK];
	}
	
	
	// Convert CMYK to RGB
	function cmykToHex(c,m,y,k) {
	
	function padZero(str) {
		return "000000".substr(str.length)+str
	}
	
	var cyan = (c * 255 * (1-k)) << 16;
	var magenta = (m * 255 * (1-k)) << 8;
	var yellow = (y * 255 * (1-k)) >> 0;
	
	var black = 255 * (1-k);
	var white = black | black << 8 | black << 16;
	
	var color = white - (cyan | magenta | yellow );
	
	return ("#"+padZero(color.toString(16)));
	
	}
	
	// Convert from RGB
	colorSubmitRgb.addEventListener('click', function(e) {
	var colorInputRgbR = document.querySelector('.color-input-rgb-r').value,
			colorInputRgbG = document.querySelector('.color-input-rgb-g').value,
			colorInputRgbB = document.querySelector('.color-input-rgb-b').value,
			colorInputHex = document.querySelector('.color-input-hex'),
			colorInputHsvH = document.querySelector('.color-input-hsv-h'),
			colorInputHsvS = document.querySelector('.color-input-hsv-s'),
			colorInputHsvV = document.querySelector('.color-input-hsv-v'),
			colorInputHslH = document.querySelector('.color-input-hsl-h'),
			colorInputHslS = document.querySelector('.color-input-hsl-s'),
			colorInputHslL = document.querySelector('.color-input-hsl-l'),
			colorInputCmykC = document.querySelector('.color-input-cmyk-c'),
			colorInputCmykM = document.querySelector('.color-input-cmyk-m'),
			colorInputCmykY = document.querySelector('.color-input-cmyk-y'),
			colorInputCmykK = document.querySelector('.color-input-cmyk-k');
	
	var colorInput = xolor([colorInputRgbR,colorInputRgbG,colorInputRgbB]);
	var hex = colorInput.hex;
	var hsv = xolor(hex);
	hsv = hsv.hsv;
	var hsl = xolor(hex);
	hsl = hsl.hsl;
	var cmyk = hexToCMYK(hex);
	var arrayLength = cmyk.length;
	for (var i = 0; i < arrayLength; i++) {
		colorInputCmykC.value = cmyk[0];
		colorInputCmykM.value = cmyk[1];
		colorInputCmykY.value = cmyk[2];
		colorInputCmykK.value = cmyk[3];
	}
	
	colorInputHex.value = hex;
	colorInputHsvH.value = hsv.h;
	colorInputHsvS.value = hsv.s;
	colorInputHsvV.value = hsv.v;
	colorInputHslH.value = hsl.h;
	colorInputHslS.value = hsl.s;
	colorInputHslL.value = hsl.l;
	
	//document.querySelector('.side-menu').style.background = hex;
	e.preventDefault();
	});
	
	
	// Convert from Hex
	colorSubmitHex.addEventListener('click', function(e) {
	var colorInputHex = document.querySelector('.color-input-hex').value,
			colorInputRgbR = document.querySelector('.color-input-rgb-r'),
			colorInputRgbG = document.querySelector('.color-input-rgb-g'),
			colorInputRgbB = document.querySelector('.color-input-rgb-b'),
			colorInputHsvH = document.querySelector('.color-input-hsv-h'),
			colorInputHsvS = document.querySelector('.color-input-hsv-s'),
			colorInputHsvV = document.querySelector('.color-input-hsv-v'),
			colorInputHslH = document.querySelector('.color-input-hsl-h'),
			colorInputHslS = document.querySelector('.color-input-hsl-s'),
			colorInputHslL = document.querySelector('.color-input-hsl-l'),
			colorInputCmykC = document.querySelector('.color-input-cmyk-c'),
			colorInputCmykM = document.querySelector('.color-input-cmyk-m'),
			colorInputCmykY = document.querySelector('.color-input-cmyk-y'),
			colorInputCmykK = document.querySelector('.color-input-cmyk-k');
	
	var colorInput = xolor(colorInputHex);
	var rgb = colorInput.rbg;
	var hsv = colorInput.hsv;
	var hsl = xolor(rgb);
	hsl = hsl.hsl;
	var cmyk = hexToCMYK(colorInputHex);
	var arrayLength = cmyk.length;
	for (var i = 0; i < arrayLength; i++) {
		colorInputCmykC.value = cmyk[0];
		colorInputCmykM.value = cmyk[1];
		colorInputCmykY.value = cmyk[2];
		colorInputCmykK.value = cmyk[3];
	}
	
	colorInputRgbR.value = rgb.r;
	colorInputRgbG.value = rgb.g;
	colorInputRgbB.value = rgb.b;
	colorInputHsvH.value = hsv.h;
	colorInputHsvS.value = hsv.s;
	colorInputHsvV.value = hsv.v;
	colorInputHslH.value = hsl.h;
	colorInputHslS.value = hsl.s;
	colorInputHslL.value = hsl.l;
	
	//document.querySelector('.side-menu').style.background = colorInputHex;
	e.preventDefault();
	});
	
	
	// Convert from HSV
	colorSubmitHsv.addEventListener('click', function(e) {
	var colorInputHex = document.querySelector('.color-input-hex'),
			colorInputRgbR = document.querySelector('.color-input-rgb-r'),
			colorInputRgbG = document.querySelector('.color-input-rgb-g'),
			colorInputRgbB = document.querySelector('.color-input-rgb-b'),
			colorInputHslH = document.querySelector('.color-input-hsl-h'),
			colorInputHslS = document.querySelector('.color-input-hsl-s'),
			colorInputHslL = document.querySelector('.color-input-hsl-l'),
			colorInputHsvH = document.querySelector('.color-input-hsv-h').value,
			colorInputHsvS = document.querySelector('.color-input-hsv-s').value,
			colorInputHsvV = document.querySelector('.color-input-hsv-v').value,
			colorInputCmykC = document.querySelector('.color-input-cmyk-c'),
			colorInputCmykM = document.querySelector('.color-input-cmyk-m'),
			colorInputCmykY = document.querySelector('.color-input-cmyk-y'),
			colorInputCmykK = document.querySelector('.color-input-cmyk-k');
	
	var hsv = "hsv("+colorInputHsvH+","+colorInputHsvS+","+colorInputHsvV+")";
	var colorInput = xolor(hsv);
	var hex = colorInput.hex;
	var rgb = xolor(hex);
	var hsl = xolor(hex);
	hsl = hsl.hsl;
	var cmyk = hexToCMYK(hex);
	var arrayLength = cmyk.length;
	for (var i = 0; i < arrayLength; i++) {
		colorInputCmykC.value = cmyk[0];
		colorInputCmykM.value = cmyk[1];
		colorInputCmykY.value = cmyk[2];
		colorInputCmykK.value = cmyk[3];
	}
	
	colorInputRgbR.value = rgb.r;
	colorInputRgbG.value = rgb.g;
	colorInputRgbB.value = rgb.b;
	colorInputHslH.value = hsl.h;
	colorInputHslS.value = hsl.s;
	colorInputHslL.value = hsl.l;
	colorInputHex.value = hex;
	
	//document.querySelector('.side-menu').style.background = hex;
	e.preventDefault();
	});
	
	
	// Convert from HSL
	colorSubmitHsl.addEventListener('click', function(e) {
	var colorInputHex = document.querySelector('.color-input-hex'),
			colorInputRgbR = document.querySelector('.color-input-rgb-r'),
			colorInputRgbG = document.querySelector('.color-input-rgb-g'),
			colorInputRgbB = document.querySelector('.color-input-rgb-b'),
			colorInputHsvH = document.querySelector('.color-input-hsv-h'),
			colorInputHsvS = document.querySelector('.color-input-hsv-s'),
			colorInputHsvV = document.querySelector('.color-input-hsv-v'),
			colorInputHslH = document.querySelector('.color-input-hsl-h').value,
			colorInputHslS = document.querySelector('.color-input-hsl-s').value,
			colorInputHslL = document.querySelector('.color-input-hsl-l').value,
			colorInputCmykC = document.querySelector('.color-input-cmyk-c'),
			colorInputCmykM = document.querySelector('.color-input-cmyk-m'),
			colorInputCmykY = document.querySelector('.color-input-cmyk-y'),
			colorInputCmykK = document.querySelector('.color-input-cmyk-k');
	
	var hsl = "hsl("+colorInputHslH+","+colorInputHslS+","+colorInputHslL+")";
	var colorInput = xolor(hsl);
	var hex = colorInput.hex;
	var rgb = xolor(hex);
	var hsv = xolor(hex);
	hsv = hsv.hsv;
	var cmyk = hexToCMYK(hex);
	var arrayLength = cmyk.length;
	for (var i = 0; i < arrayLength; i++) {
		colorInputCmykC.value = cmyk[0];
		colorInputCmykM.value = cmyk[1];
		colorInputCmykY.value = cmyk[2];
		colorInputCmykK.value = cmyk[3];
	}
	
	colorInputRgbR.value = rgb.r;
	colorInputRgbG.value = rgb.g;
	colorInputRgbB.value = rgb.b;
	colorInputHsvH.value = hsv.h;
	colorInputHsvS.value = hsv.s;
	colorInputHsvV.value = hsv.v;
	colorInputHex.value = hex;
	
	//document.querySelector('.side-menu').style.background = hex;
	e.preventDefault();
	});
	
	
	
	// Convert from CMYK
	colorSubmitCmyk.addEventListener('click', function(e) {
	var colorInputHex = document.querySelector('.color-input-hex'),
			colorInputRgbR = document.querySelector('.color-input-rgb-r'),
			colorInputRgbG = document.querySelector('.color-input-rgb-g'),
			colorInputRgbB = document.querySelector('.color-input-rgb-b'),
			colorInputHsvH = document.querySelector('.color-input-hsv-h'),
			colorInputHsvS = document.querySelector('.color-input-hsv-s'),
			colorInputHsvV = document.querySelector('.color-input-hsv-v'),
			colorInputHslH = document.querySelector('.color-input-hsl-h'),
			colorInputHslS = document.querySelector('.color-input-hsl-s'),
			colorInputHslL = document.querySelector('.color-input-hsl-l'),
			colorInputCmykC = document.querySelector('.color-input-cmyk-c').value,
			colorInputCmykM = document.querySelector('.color-input-cmyk-m').value,
			colorInputCmykY = document.querySelector('.color-input-cmyk-y').value,
			colorInputCmykK = document.querySelector('.color-input-cmyk-k').value;
	var hex = cmykToHex(colorInputCmykC,colorInputCmykM,colorInputCmykY,colorInputCmykK);;
	var rgb = xolor(hex).rbg;
	var hsv = xolor(hex).hsv;
	var hsl = xolor(hex).hsl;
	colorInputRgbR.value = rgb.r;
	colorInputRgbG.value = rgb.g;
	colorInputRgbB.value = rgb.b;
	colorInputHsvH.value = hsv.h;
	colorInputHsvS.value = hsv.s;
	colorInputHsvV.value = hsv.v;
	colorInputHslH.value = hsl.h;
	colorInputHslS.value = hsl.s;
	colorInputHslL.value = hsl.l;
	colorInputHex.value = hex;
	//document.querySelector('.side-menu').style.background = hex;
	e.preventDefault();
	});
	
	</script>

<?php include_once("../_inc/footer.php"); ?>





