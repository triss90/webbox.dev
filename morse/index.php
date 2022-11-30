<?php
$title = "Morse Converter";
$description = "Encode or decode morse";
?>

<?php include_once("../_inc/header.php"); ?>

<style>
	pre {
		white-space: pre-wrap;
		white-space: -moz-pre-wrap;
		white-space: -pre-wrap;
		white-space: -o-pre-wrap;
		word-wrap: break-word;
	}
</style>

<div class="wrapper" id="morse">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">Morse Code Converter</h1>
					<h2 class="small center">Encode or decode morse</h2>
					<hr>
				</div>
			</div>
			<form class="lorem-form">
				<div class="row">
					<div class="tiny-12 medium-6">
					     <h2>Text <strong>to</strong> Morse:</h2>
						 <textarea name="textToMorse" id="textToMorse" cols="20" rows="7" placeholder="Enter text here..."></textarea>
					</div>
					<div class="tiny-12 medium-6">
						 <h2>Morse <strong>to</strong> Text:</h2>
						 <textarea name="morseToText" id="morseToText" cols="20" rows="7" placeholder="Enter morse here..." style="font-size: 1rem;"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="tiny-12">
						<pre id="output"></pre>
					</div>
				</div>
			</form>
		</section>
		
		<section class="content_block lorem-text" style="display: none;"></section>
		
		<?php include('../_inc/ad.php'); ?>
		
	</main>
	
</div>

<script>

// Morse to Text Function
function morseToText(morseCode) {
  var ref = { 
	'.-':     'a',
	'-...':   'b',
	'-.-.':   'c',
	'-..':    'd',
	'.':      'e',
	'..-.':   'f',
	'--.':    'g',
	'....':   'h',
	'..':     'i',
	'.---':   'j',
	'-.-':    'k',
	'.-..':   'l',
	'--':     'm',
	'-.':     'n',
	'---':    'o',
	'.--.':   'p',
	'--.-':   'q',
	'.-.':    'r',
	'...':    's',
	'-':      't',
	'..-':    'u',
	'...-':   'v',
	'.--':    'w',
	'-..-':   'x',
	'-.--':   'y',
	'--..':   'z',
	'.----':  '1',
	'..---':  '2',
	'...--':  '3',
	'....-':  '4',
	'.....':  '5',
	'-....':  '6',
	'--...':  '7',
	'---..':  '8',
	'----.':  '9',
	'-----':  '0',
	'.-.-':   'æ',
	'---':    'ø',
	'.--.-':  'å',
	'..--..': '?',
	'-.-.--': '!',
	'.----.': '\'',
	'--..--': ',',
	'.-.-':   'æ',
	'---.':   'ø',
	'.--.-':  'å',
	'-.--.':  '(',
	'-.--.-': ')',
	'.-.-.':  '+',
	'-....-': '-',
	'.-..-.': '"',
	'.-...':  '&',
	'.-.-.-': '.',
  };

  return morseCode
	.split(' / ')
	.map(
	  a => a
		.split(' ')
		.map(
		  b => ref[b]
		).join('')
	).join(' ');
}

// Text to Morse Function
function textToMorse(text) {
	let textArray = Array.from(text);
	let morseString = "";
	for (var i = 0; i < textArray.length; i++) {
		//morseString += textArray[i];
		if (textArray[i] === " ") {
			morseString += " / "
		} else if (textArray[i].toLowerCase() === "\n") {
			morseString += " / "
		} else if (textArray[i].toLowerCase() === "?") {
			morseString += "..--.. "
		} else if (textArray[i].toLowerCase() === "!") {
			morseString += "-.-.-- "
		} else if (textArray[i].toLowerCase() === ",") {
			morseString += "--..-- "
		} else if (textArray[i].toLowerCase() === ".") {
			morseString += ".-.-.- "
		} else if (textArray[i].toLowerCase() === "'") {
			morseString += ".----. "
		} else if (textArray[i].toLowerCase() === "a") {
			morseString += ".- "
		} else if (textArray[i].toLowerCase() === "b") {
			morseString += "-... "
		} else if (textArray[i].toLowerCase() === "c") {
			morseString += "-.-. "
		} else if (textArray[i].toLowerCase() === "d") {
			morseString += "-.. "
		} else if (textArray[i].toLowerCase() === "e") {
			morseString += ". "
		} else if (textArray[i].toLowerCase() === "f") {
			morseString += "..-. "
		} else if (textArray[i].toLowerCase() === "g") {
			morseString += "--. "
		} else if (textArray[i].toLowerCase() === "h") {
			morseString += ".... "
		} else if (textArray[i].toLowerCase() === "i") {
			morseString += ".. "
		} else if (textArray[i].toLowerCase() === "j") {
			morseString += ".--- "
		} else if (textArray[i].toLowerCase() === "k") {
			morseString += "-.- "
		} else if (textArray[i].toLowerCase() === "l") {
			morseString += ".-.. "
		} else if (textArray[i].toLowerCase() === "m") {
			morseString += "-- "
		} else if (textArray[i].toLowerCase() === "n") {
			morseString += "-. "
		} else if (textArray[i].toLowerCase() === "o") {
			morseString += "---. "
		} else if (textArray[i].toLowerCase() === "p") {
			morseString += ".--. "
		} else if (textArray[i].toLowerCase() === "q") {
			morseString += "--.- "
		} else if (textArray[i].toLowerCase() === "r") {
			morseString += ".-. "
		} else if (textArray[i].toLowerCase() === "s") {
			morseString += "... "
		} else if (textArray[i].toLowerCase() === "t") {
			morseString += "- "
		} else if (textArray[i].toLowerCase() === "u") {
			morseString += "..- "
		} else if (textArray[i].toLowerCase() === "v") {
			morseString += "...- "
		} else if (textArray[i].toLowerCase() === "y") {
			morseString += "-.-- "
		} else if (textArray[i].toLowerCase() === "w") {
			morseString += ".-- "
		} else if (textArray[i].toLowerCase() === "x") {
			morseString += "-..- "
		} else if (textArray[i].toLowerCase() === "z") {
			morseString += "--.. "
		} else if (textArray[i].toLowerCase() === "æ") {
			morseString += ".-.- "
		} else if (textArray[i].toLowerCase() === "ø") {
			morseString += "---. "
		} else if (textArray[i].toLowerCase() === "å") {
			morseString += ".--.- "
		} else if (textArray[i].toLowerCase() === "0") {
			morseString += "----- "
		} else if (textArray[i].toLowerCase() === "1") {
			morseString += ".---- "
		} else if (textArray[i].toLowerCase() === "2") {
			morseString += "..--- "
		} else if (textArray[i].toLowerCase() === "3") {
			morseString += "...-- "
		} else if (textArray[i].toLowerCase() === "4") {
			morseString += "....- "
		} else if (textArray[i].toLowerCase() === "5") {
			morseString += "..... "
		} else if (textArray[i].toLowerCase() === "6") {
			morseString += "-.... "
		} else if (textArray[i].toLowerCase() === "7") {
			morseString += "--... "
		} else if (textArray[i].toLowerCase() === "8") {
			morseString += "---.. "
		} else if (textArray[i].toLowerCase() === "9") {
			morseString += "----. "
		} else if (textArray[i].toLowerCase() === "(") {
			morseString += "-.--. "
		} else if (textArray[i].toLowerCase() === ")") {
			morseString += "-.--.- "
		} else if (textArray[i].toLowerCase() === "+") {
			morseString += ".-.-. "
		} else if (textArray[i].toLowerCase() === "-") {
			morseString += "-....- "
		} else if (textArray[i].toLowerCase() === "\"") {
			morseString += ".-..-. "
		} else if (textArray[i].toLowerCase() === "&") {
			morseString += ".-... "
		} else {
			morseString += "INVALID "
		}
		//console.log(textArray[i].toLowerCase());
	}
	return morseString;
}

// Check input and run function
let textToMorseInput = document.getElementById('textToMorse');
let morseToTextInput = document.getElementById('morseToText');
let output = document.getElementById('output');

textToMorseInput.addEventListener('input', function() {
	output.innerHTML = textToMorse(textToMorseInput.value);
	morseToTextInput.value = textToMorse(textToMorseInput.value);
});
morseToTextInput.addEventListener('input', function() {
	output.innerHTML = morseToText(morseToTextInput.value);
	textToMorseInput.value = morseToText(morseToTextInput.value);
});

</script>

<?php include_once("../_inc/footer.php"); ?>





