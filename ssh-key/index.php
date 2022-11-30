<?php
$title = "SSH Key Generator";
$description = "Generate a keypair to be used with openSSH using the ssh-keygen function in javascript.";
?>

<?php include_once("../_inc/header.php"); ?>

<style>
	.btn.block {
		padding: .90rem 0;
	}
	.badge {
		color: var(--color-pink-1);
	}
</style>

<script>module = {};</script>
<script src="/ssh-key/js-keygen-master/base64url.js"></script>
<script src="/ssh-key/js-keygen-master/ssh-util.js"></script>
<script src="/ssh-key/js-keygen-master/js-keygen-ui.js"></script>
<script src="/ssh-key/js-keygen-master/js-keygen.js"></script>

<div class="wrapper" id="ssh">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			
			<div class="row">
				<div class="tiny">
					<h1 class="headline center">Generate SSH Key</h1>
					<h2 class="small center">Generate a keypair to be used with openSSH using the ssh-keygen function in javascript.</h2>
					<hr>
					
				</div>
			</div>
			
			<div class="row">
				<div class="tiny-12 small-6 medium-4 large-4">
					<label for="alg">Algorithm:</label>
					<div class="select">
						<select id="alg" disabled>
							<option value="RSASSA-PKCS1-v1_5" selected>RSASSA-PKCS1-v1_5</option>
							<option value="RSA-PSS">RSA-PSS</option>
							<option value="ECDSA">ECDSA</option>
						</select>
					</div>
				</div>
				<div class="tiny-12 small-6 medium-4 large-4">
					<label for="size">Size:</label>
					<div class="select">
						<select id="size" disabled>
							<option value="1024" selected>1024</option>
							<option value="2048">2048</option>
							<option value="4096">4096</option>
						</select>
					</div>
				</div>
				<div class="tiny-12 small-6 medium-4 large-4">
					<label for="hash">Hash:</label>
					<div class="select">
						<select id="hash" disabled>
							<option value="SHA-1" selected>SHA-1</option>
							<option value="SHA-256">SHA-256</option>
							<option value="SHA-384">SHA-384</option>
							<option value="SHA-512">SHA-512</option>
						</select>
					</div>
				</div>
				
			</div>
			
			<div class="row">
				<div class="tiny-12 small-8 medium-9 large-10">
					<label for="name">Name:</label>
					<input id="name" type="text" value="id_rsa">
				</div>
				<div class="tiny-12 small-4 medium-3 large-2">
					<button id="generate" class="btn block" style="margin-top: 1.8rem;">Generate SSH Key</button>
				</div>
			</div>
			
			<div class="row center">
				<div class="tiny-12">
					<p>The private key is ordinarily saved on the machine initiating the SSH connection, while the public key is copied to the system receiving the connection.</p>
					<b>No data is being sent to our servers whatsoever! Everything happens within the context of this webpage.</b><br><br>
				</div>
			</div>
			
		</section>
		
		<section class="content_block" id="result" style="display:none;">
			<a id="private" style="display: none;" href="" download="id_rsa">id_rsa</a>
			<a id="public" style="display: none;" href="" download="id_rsa.pub">id_rsa.pub</a>
			
			<div class="row">
				<div class="tiny-12 small-12 medium-6 large-6">
					<h2 class="small">Private Key</h2>
					<textarea id="privateKey" style="font-size: 0.85rem;" spellcheck="false" rows="12"></textarea>
					<button id="copyPrivate">Copy</button> or <button id="savePrivate">Save</button>
				</div>
				<div class="tiny-12 small-12 medium-6 large-6">
					<h2 class="small">Public Key</h2>
					<textarea id="publicKey" style="font-size: 0.85rem;" spellcheck="false" rows="4"></textarea>
					<button id="copyPublic">Copy</button> or <button id="savePublic">Save</button>
				</div>
			</div>
		</section>
		
	</main>
	
</div>

<?php include_once("../_inc/footer.php"); ?>





