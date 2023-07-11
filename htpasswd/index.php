<?php
$title = "Htpasswd Generator";
$description = "htpasswd generator used to create Htaccess .htpasswd files. All encryption formats are supported, including bcrypt, sha1, md5, and crypt.";

function generateRandomString($length = 10) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
?>

<?php include_once("../_inc/header.php"); ?>

<style>
	h4 {
		margin-top: 0.75rem;
		margin-bottom: 0rem;
	}
</style>

<div class="wrapper" id="htpasswd">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">Htpasswd Generator</h1>
					<h2 class="small center">htpasswd generator used to create Htaccess .htpasswd files. All encryption formats are supported, including bcrypt, sha1, md5, and crypt.</h2>
					<hr>
				</div>
			</div>
			<form method="post" id="htpasswdGenerator">
				<div class="row">
					<div class="tiny-12 small-3">
						Username: 
						<input type="text" name="username" id="username" value="admin" required/> 	
					</div>
					<div class="tiny-12 small-3">
						Password: 
						<input type="text" name="password" id="password" value="<?php echo generateRandomString(); ?>" required/> 	
					</div>
					<div class="tiny-12 small-4">
						Realm or Popup Name: 
						<input type="text" name="realm" id="realm" value="Protected by Apache" required/> 	
					</div>
					<div class="tiny-12 small-2">
						<button id="buttonSubmit" type="submit" class="block" style="margin-top: 1.75rem;padding:0.9rem 0;">Generate</button>
						<button id="buttonLoad" class="block" type="button" style="display:none;margin-top: 2rem;" disabled="">
							<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
							Loading...
						</button>
					</div>
				</div>
				<div class="row">
					<div class="tiny">
						Encryption Algorithm:
						<div class="radio">
							<input id="encryptAll" name="encryption" value="all" class="encryption" type="radio" checked>
							<label for="encryptAll" class="radio-label">All</label>
						</div>
						<div class="radio">
							<input id="encryptBCRYPT" name="encryption" value="bcrypt" class="encryption" type="radio">
							<label for="encryptBCRYPT" class="radio-label">bcrypt</label>
						</div>
						<div class="radio">
							<input id="encryptSHA1" name="encryption" value="sha1" class="encryption" type="radio">
							<label for="encryptSHA1" class="radio-label">SHA1</label>
						</div>
						<div class="radio">
							<input id="encryptMD5" name="encryption" value="md5" class="encryption" type="radio">
							<label for="encryptMD5" class="radio-label">md5</label>
						</div>
						<div class="radio">
							<input id="encryptCRYPT" name="encryption" value="crypt" class="encryption" type="radio">
							<label for="encryptCRYPT" class="radio-label">crypt</label>
						</div>
					</div>
				</div>
			</form>
		</section>
		
		<section class="content_block" id="output-wrapper" style="display: none;">
			<div id="output"></div>
		</section>
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					<h2>Htpasswd Generator Formats</h2>
					<p>Apache Servers recognize 5 formats for representing a password hash in the text file usually named .htpasswd.</p>
					<h4>BCRYPT</h4>
					<p>Use bcrypt encryption for passwords. This is currently considered to be very secure.</p>
					<h4>CRYPT</h4>
					<p>crypt(3) is the library function which is used to compute a password hash. Technically the name is a misnomer since it is actually a cryptographic hash function. The output of the function is not merely the hash: it is a text string which also encodes the salt and identifies the hash algorithm used. Apache uses the traditional Unix crypt function with a randomly-generated 32-bit salt (only 12 bits used) and the first 8 characters of the password. ALG_CRYPT</p>
					<h4>MD5</h4>
					<p>MD5 is one in a series of message digest algorithms designed by Professor Ronald Rivest of MIT. The 128-bit (16-byte) MD5 hashes (also termed message digests) are typically represented as a sequence of 32 hexadecimal digits. In .htpasswd files the hash is: $apr1$ + an Apache-specific algorithm using an iterated (1,000 times) MD5 digest of various combinations of a random 32-bit salt and the password. ALG_APMD5</p>
					<h4>SHA-1</h4>
					<p>The SHA hash functions are a set of cryptographic hash functions designed by the National Security Agency (NSA) and published by the NIST as a U.S. Federal Information Processing Standard. SHA-1 produces a 160-bit digest from a message with a maximum length of (264 - 1) bits. SHA-1 is the most widely employed of the SHA family. It forms part of several widely used security applications and protocols, including TLS and SSL, PGP, SSH, S/MIME, and IPsec. In .htpasswd files the hash is as follows: {SHA} + Base64-encoded SHA-1 digest of the password. ALG_APSHA</p>
					<h4>PLAIN TEXT</h4>
					<p>Unencrypted for Windows, BEOS, & Netware only. ALG_PLAIN</p>
				</div>
			</div>
		</section>
		
		<?php include('../_inc/ad.php'); ?>
		
	</main>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" crossorigin="anonymous"></script>
<script>
	
	$(function () {
		$('form').on('submit', function (e) {
			e.preventDefault();
			$('#buttonSubmit').hide();
			$('#buttonLoad').show();
			setTimeout(function(){
				$.ajax({
					type: 'post',
					url: '/htpasswd/htpasswd.php',
					data: $('#htpasswdGenerator').serialize(),
					success: function(response) {
						$('#buttonLoad').hide();
						$('#buttonSubmit').show();
						$('#output-wrapper').css("display", "block");
						$('#output').html(response);
					}
				});
			}, 1000);
		});
	});

</script>


<?php include_once("../_inc/footer.php"); ?>





