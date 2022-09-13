<?php
$title = "DNS Lookup";
$description = "Look up DNS records on any domain and monitor changes to records.";
$domain = htmlspecialchars($_GET["domain"]);
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

<div class="wrapper" id="dns">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<form id="dnsTest" action="getdns.php" method="post" accept-charset="utf-8">
			<section class="content_block">
				<div class="row">
					<div class="tiny">
						<h1 class="headline center">DNS Lookup</h1>
						<h2 class="small center">Look up DNS records on any domain and monitor changes to records.</h2>
						<hr>
						<code>https://webbox.dev/dns/?domain=<span class="badge badge-success"></span></code>
						<br><br>
					</div>
				</div>
				<div class="row">
					<div class="tiny-12 small-8 medium-9 large-10">
						<label for="domainName">Domain name:</label>
						<input type="text" pattern="^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}$" name="domainName" id="domainName" class="form-control my-1" placeholder="example.com" value="<?php echo $domain; ?>" required>
					</div>
					<div class="tiny-12 small-4 medium-3 large-2">
						<button id="buttonSubmit" type="submit" class="btn block" style="margin-top: 1.8rem;">Look Up DNS</button>
						<button id="buttonLoad" class="btn block" type="button" style="display:none;margin-top:1.8rem;" disabled>
							<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
							Loading...
						</button>
					</div>
				</div>
			</section>
		</form>
		
		<section class="content_block" id="output" style="display: none;"></section>
		
	</main>
	
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>

<script>
const domainOutput = document.querySelector(".badge");
const domainInput = document.querySelector("#domainName");
domainInput.addEventListener('input', function() {
	domainOutput.innerHTML = domainInput.value;
});


$(function () {
	$('form').on('submit', function (e) {
		e.preventDefault();
		if ($('#repeat').is(':checked')) {
			getDNS();
			setInterval(getDNS, 5000);
		} else {
			getDNS();
		}
		function getDNS() {
			$('#buttonSubmit').hide();
			$('#buttonLoad').show();
			setTimeout(function(){
				$.ajax({
					type: 'post',
					url: '/dns/getdns.php',
					data: $('#dnsTest').serialize(),
					success: function(response) {
						console.log(response);
						$('#buttonLoad').hide();
						$('#buttonSubmit').show();
						$('#output').html(response);
						$('#output').show();
					}
				});
			}, 1000);
		}
	});
});

<?php if($domain != "") { ?>
$(document).ready(function(){
	domainOutput.innerHTML = "<? echo $domain; ?>";
	$("#dnsTest").submit();
});
<?php } ?>
</script>

<?php include_once("../_inc/footer.php"); ?>





