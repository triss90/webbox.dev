// Select Random From String
function selectRandom(stringLength, charset) {
	let randomString = "";	
	for (let i = 0; i < stringLength; i++) {
		randomString += charset[Math.floor(Math.random() * charset.length)];
	}
	return randomString;
}

// Shuffle String
String.prototype.shuffle = function () {
	var a = this.split(""),
		n = a.length;
	for(var i = n - 1; i > 0; i--) {
		var j = Math.floor(Math.random() * (i + 1));
		var tmp = a[i];
		a[i] = a[j];
		a[j] = tmp;
	}
	return a.join("");
}

// Generate Password
function generatePassword() {
	
	let passwordString = "",
		password = "",
		selectedLowercase = "",
		selectedUppercase = "",
		selectedNumber = "",
		selectedSymbol = "",
		randomLowercaseRemainder = "",
		randomUppercaseRemainder = "",
		randomNumberRemainder = "",
		randomSymbolRemainder = "",
		wholeNumberPassword = "",
	    remainderNumberPassword = "",
	    selectedRemainder = "";
	
	// Password characters
	const lowercase = "abcdefghijklmnopqrstuvwxyz",
		  uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
		  numbers = "0123456789",
		  symbols = "~!?@#-%&+.^";
		  		  	
	// Options
	const passwordLength = document.getElementById('password-length').value,
		  lowercaseSelect = document.getElementById('lowercase').checked,
		  uppercaseSelect = document.getElementById('uppercase').checked,
		  numbersSelect = document.getElementById('numbers').checked,
		  symbolsSelect = document.getElementById('symbols').checked,
		  numberOfSelectedOptions = document.querySelectorAll("input[class=checkbox-input]:checked").length,
		  passwordOutput = document.getElementById('password-output');
		  copyButton = document.getElementById('outputCopy');

	// Whole String Length and Remainder
	const wholeNumber = (passwordLength / numberOfSelectedOptions) >> 0,
		  remainder = passwordLength%numberOfSelectedOptions;
		  	
	// Select datasets
	if(lowercaseSelect) {
		selectedLowercase = selectRandom(wholeNumber, lowercase);
		randomLowercaseRemainder = selectRandom(remainder, lowercase);
	}
	if(uppercaseSelect) {
		selectedUppercase = selectRandom(wholeNumber, uppercase);
		randomUppercaseRemainder = selectRandom(remainder, uppercase);
	}
	if(numbersSelect) {
		selectedNumber = selectRandom(wholeNumber, numbers);
		randomNumberRemainder = selectRandom(remainder, numbers);
	}
	if(symbolsSelect) {
		selectedSymbol = selectRandom(wholeNumber, symbols);
		randomSymbolRemainder = selectRandom(remainder, symbols);
	}
	
	// Merge Datasets to string 
	wholeNumberPassword = selectedLowercase+selectedUppercase+selectedNumber+selectedSymbol;
	remainderNumberPassword = randomLowercaseRemainder+randomUppercaseRemainder+randomNumberRemainder+randomSymbolRemainder;
	selectedRemainder = selectRandom(remainder, remainderNumberPassword);
	passwordString = selectedLowercase+selectedUppercase+selectedNumber+selectedSymbol+selectedRemainder;
		
	// Shuffle and Output password string
	let newPassword = passwordString.shuffle();
	passwordOutput.innerHTML = "<h1>" + newPassword + "</h1>";
	copyButton.setAttribute("data-clipboard-text", newPassword);
}


