// Generate random number 
function randomNumber() {
	const random = Math.floor((Math.random() * 100000) + 1);
	return random;
}

// Convert HEX to RGB
function hexToRgb(hex) {
	var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
	return result ? {
		r: parseInt(result[1], 16),
		g: parseInt(result[2], 16),
		b: parseInt(result[3], 16)
	} : null;
}

// Reorder items in array
function array_move(arr, old_index, new_index) {
	if (new_index >= arr.length) {
		var k = new_index - arr.length + 1;
		while (k--) {
			arr.push(undefined);
		}
	}
	arr.splice(new_index, 0, arr.splice(old_index, 1)[0]);
	return arr;
};
	
// Update gradient percent slide
function updateGradientPercent() {
	let mousePosition,
		offset = [0,0],
		isDown = false,
		activeSlide;
	const slides = document.querySelectorAll(".slide");
	const slider = document.querySelector(".gradient-slider");
	slides.forEach((slide) => {
		slide.addEventListener('mousedown', function(e) {
			isDown = true;
			activeSlide = this;
			offset = [
				activeSlide.offsetLeft - e.clientX,
			];
		}, true);
		document.addEventListener('mouseup', function() {
			isDown = false;
		}, true);
		document.addEventListener('mousemove', function(event) {
			//event.preventDefault();
			if (isDown) {
				mousePosition = {
					x : event.clientX,
				};
				let newPos = mousePosition.x + offset[0];
				let newPosPercent = (newPos/slider.offsetWidth)*100;
				if (newPosPercent >= 100) {
					activeSlide.style.left = '100%';
				} else if (newPosPercent <= 0) {
					activeSlide.style.left = '0%';
				} else {
					activeSlide.style.left = Math.round(newPosPercent) + '%';
				}
				updateCSS();
			}
		}, true);
	});
}

// Create new color
function newColor(number, color, position) {
	const sliderParent = document.querySelector('.gradient-slider');
	const colorsParent = document.querySelector('.colors');
	let seperator = document.createElement('br');
	
	// Create new color container
	let newColorContainer = document.createElement('div');
	newColorContainer.classList.add('color');
	
	// Create new color value
	let newColorValue = document.createElement('input');
	newColorValue.id = "color"+number;
	newColorValue.setAttribute("data-jscolor", "{alphaElement:'#alp"+number+"'}");
	newColorValue.setAttribute("value", color);
	newColorValue.setAttribute("name", "color"+number+"[value]");
	colorsParent.appendChild(newColorValue);
	
	// Create new color alpha
	let newColorAlpha = document.createElement('input');
	newColorAlpha.id = "alp"+number;
	newColorAlpha.classList.add("alpha")
	newColorAlpha.setAttribute("value", 1);
	newColorAlpha.setAttribute("name", "color"+number+"[alpha]");
	newColorAlpha.setAttribute("size", 5);
	colorsParent.appendChild(newColorAlpha);
	
	// Create new Alpha Range Slider
	let alphaRangeSlider = document.createElement('input');
	alphaRangeSlider.setAttribute("type", "range");
	alphaRangeSlider.setAttribute("min", "0");
	alphaRangeSlider.setAttribute("max", "1");
	alphaRangeSlider.setAttribute("step", "0.1");
	alphaRangeSlider.setAttribute("value", "1");
	alphaRangeSlider.classList.add("alp"+number, "alp-slider");
	alphaRangeSlider.classList.add();
	colorsParent.appendChild(alphaRangeSlider);
	
	// Create new delete color button
	let deleteColorButton = document.createElement('button');
	deleteColorButton.classList.add(number);
	deleteColorButton.classList.add('delete-color');
	deleteColorButton.innerHTML = '<svg class="icon icon-cross" id="icon-cross" viewBox="0 0 32 32"><path d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path></svg>'
	colorsParent.appendChild(deleteColorButton);
	
	seperator.classList.add('seperator'+number);
	colorsParent.appendChild(seperator);

	// Create new slide container
	let newSlideContainer = document.createElement('div');
	newSlideContainer.classList.add('gradient-slider');
	
	// Create new slide
	let newSlide = document.createElement('div');
	newSlide.classList.add("slide");
	newSlide.id = number;
	newSlide.style.left = position;
	newSlide.style.background = color;
	sliderParent.appendChild(newSlide);
	
	updateGradientPercent();
	removeColor();
	
	jscolor.presets.default = {
		position: 'right',
		palette: [
			'#38d9a9', '#ff8787', '#a9e34b', '#69db7c', '#da77f2',
			'#7950f2', '#9775fa', '#f783ac', '#748ffc', '#a349a4',
			'#ffa94d'
		],
	};
}
newColor(randomNumber(), "#7950F2", "22%");
newColor(randomNumber(), "#F783AC", "76%");

// Add new color
document.querySelector(".gradient-slider").addEventListener("click", function(e) {
	if (e.srcElement.classList.contains('gradient-slider')) {
		const colors = [
			'#38d9a9', '#ff8787', '#a9e34b', '#69db7c', '#da77f2',
			'#7950f2', '#9775fa', '#f783ac', '#748ffc', '#a349a4',
			'#ffa94d'
		];
		const random = Math.floor(Math.random() * colors.length);
		const offset = Math.abs(e.srcElement.offsetLeft - e.clientX);
		const newPosition = (offset/e.srcElement.offsetWidth)*100
		newColor(randomNumber(), colors[random], Math.round(newPosition)+"%");
		jscolor.install();
		updateCSS();
		updateColor();
		updateAlphaSlide();
	} 
});

// Create and update CSS Output
function updateCSS() {
	const colors = document.querySelectorAll('.colors input');
	const positions = document.querySelectorAll('.slide');
	const sliderExample = document.querySelector('.gradient-slider');
	const linearSettings = document.querySelector('.linear-settings');
	const output = document.getElementById('output');
	const degreesOutput = document.getElementById('degreesOutput');
	const colorOutput = document.getElementById('colorOutput');
	const degreeInput = document.querySelector('#degree').value;
	const radialGradient = document.getElementById('gradientRadial');
	// const copyButton = document.getElementById('outputCopy');
	let gradients = [];
	let gradientsSorted = [];
	let colorValues = [];
	let sliderID;
	for (let i = 0; i < positions.length; i++) {
		const position = positions[i];
		const color = document.getElementById('color'+positions[i].id);
		const alpha = document.getElementById('alp'+positions[i].id);
		let colorValue;
		if (alpha.value < 1) {
			colorValue = "rgba("+hexToRgb(color.value).r+", "+hexToRgb(color.value).g+", "+hexToRgb(color.value).b+", "+alpha.value+")";
		} else {
			colorValue = color.value;
		}
		gradients.push([parseInt(position.style.left.replace('%', '')), colorValue]);
		sliderID = color.id.replace('color','');
		positions[i].style.backgroundColor = colorValue;
	}

	gradients.sort(function(a, b) {
	  return a[0] - b[0];
	});

	for (let y = 0; y < gradients.length; y++) {
		gradientString = array_move(gradients[y], 0, 1).join(' ');
		gradientsSorted.push(gradientString);
	}

	// Generate color and position string with append %
	gradientsOutput = gradientsSorted.join('%, ').concat("%");
	if(radialGradient.checked == true) {
		colorOutput.innerHTML = "background-image: radial-gradient(circle, "+gradientsOutput+");";
		outputCopy.setAttribute("data-clipboard-text", "background-image: radial-gradient(circle, "+gradientsOutput+");");
		sliderExample.setAttribute("style","background-image: radial-gradient(circle, "+gradientsOutput+")");
		output.setAttribute("style","background-image: radial-gradient(circle, "+gradientsOutput+")");
		linearSettings.style.display = "none";
	} else {
		colorOutput.innerHTML = "background-image: linear-gradient("+degreeInput+"deg, "+gradientsOutput+");";
		outputCopy.setAttribute("data-clipboard-text","background-image: linear-gradient("+degreeInput+"deg, "+gradientsOutput+");");
		sliderExample.setAttribute("style","background-image: linear-gradient("+degreeInput+"deg, "+gradientsOutput+")");
		output.setAttribute("style","background-image: linear-gradient("+degreeInput+"deg, "+gradientsOutput+")");
		linearSettings.style.display = "block";
	}
}
updateCSS();

// Update color
function updateColor() {
	const colors = document.querySelectorAll('.colors input:not(.alpha)');
	const positions = document.querySelectorAll('.slide');
	for (let i = 0; i < colors.length; i++) {
		colors[i].addEventListener('input', function() {
			updateCSS();
		});
	}	
}
updateColor();

// Edit Gradient type
function gradientType() {
	const gradientTypeElements = document.querySelectorAll('.gradient-type');
	for (let i = 0; i < gradientTypeElements.length; i++) {
		gradientTypeElements[i].addEventListener('change', function() {
			updateCSS();
		});
		
	}
}
gradientType();

// Update color with alpha slider
function updateAlphaSlide() {
	const alphaSlideElements = document.querySelectorAll('.alp-slider');
	let alphaInputElement;
	let alphaSlideElement;
	for (let i = 0; i < alphaSlideElements.length; i++) {
		// When updating slider
		alphaSlideElements[i].addEventListener('input', function() {
			document.getElementById(alphaSlideElements[i].classList[0]).value = this.value;
			updateColor();
		});
		// When updating input
		document.getElementById(alphaSlideElements[i].classList[0]).addEventListener('input', function() {
			alphaSlideElements[i].value = document.getElementById(alphaSlideElements[i].classList[0]).value;
			updateColor();
		});
		updateColor();
	}
}
updateAlphaSlide();

// Remove color
function removeColor() {
	const deleteButtons = document.querySelectorAll('.delete-color');
	let sliderElement,
		colorElement,
		alphaElement,
		alphaSliderElement,
		seperatorElement,
		identifier;
	for (let i = 0; i < deleteButtons.length; i++) {
		deleteButtons[i].addEventListener('click', function(){
			identifier = this.classList[0];
			sliderElement = document.getElementById(identifier);
			colorElement = document.getElementById('color'+identifier);
			alphaElement = document.getElementById('alp'+identifier);
			alphaSliderElement = document.querySelector('.alp'+identifier);
			seperatorElement = document.querySelector('.seperator'+identifier);
			console.log(sliderElement);
			sliderElement.remove();
			colorElement.remove();
			alphaElement.remove();
			alphaSliderElement.remove();
			seperatorElement.remove();
			this.remove();
			updateCSS();
			updateColor();
			updateAlphaSlide();
			updateAngle();
		});
	}
}
removeColor();

// Update angle
const degree = document.getElementById("degree");
const degreeRange = document.getElementById("degreeRange");
const directionalButtons = document.querySelectorAll('.directional-button');
function syncParaNumbers(e) {
	const value = e.target.value;
	degree.value = value;
	degreeRange.value = value;
	for (let x = 0; x < directionalButtons.length; x++) {
		directionalButtons[x].classList.remove('active');
	}
	updateCSS();
}
degree.addEventListener('input', syncParaNumbers);
degreeRange.addEventListener('input', syncParaNumbers);
function updateAngle() {
	const directionalButtons = document.querySelectorAll('.directional-button');
	const degreeInput = document.querySelector('#degree');
	for (let i = 0; i < directionalButtons.length; i++) {
		directionalButtons[i].addEventListener('click', function() {
			for (let y = 0; y < directionalButtons.length; y++) {
				directionalButtons[y].classList.remove('active');
			}
			degree.value = this.dataset.degrees;
			degreeRange.value = this.dataset.degrees;
			this.classList.add('active');
			updateCSS();
		});
	}
	degreeInput.addEventListener('input', function() {
		updateCSS();
		console.log('changed!');
	});
}
updateAngle();
