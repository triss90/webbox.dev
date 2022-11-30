<?php
$title = "SMTP Test";
$description = "Test your connection to Sendgrid, Mailgun, Amazon SES, or any other SMTP server. See the exact SMTP \"conversation\" to help you troubleshoot email issues.";
?>

<?php include('../_inc/header.php'); ?>

<div class="wrapper" id="smtp">
	
	<nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
	
	<main class="content">
		
		<section class="content_block">
			<div class="row">
				<div class="tiny">
					
					<h1 class="headline center">Test SMTP Settings</h1>
					<h2 class="small center">Test your connection to Sendgrid, Mailgun, Amazon SES, or any other SMTP server. See the exact SMTP "conversation" to help you troubleshoot email issues.</h2>
					<hr>
		
					<form id="smtpTest" action="/smtp/smtptest.php" method="post" accept-charset="utf-8">
			
						<div class="row">
							<div class="tiny-9 medium-8">
								<label for="server">SMTP Server</label>
								<input type="text" name="server" id="server" class="form-control" placeholder="smtp.server.com">
								<button class="btn tiny" type="button" id="button_sendgrid">Sendgrid</button>
								<button class="btn tiny" type="button" id="button_mailgun">Mailgun</button>
								<button class="btn tiny" type="button" id="button_gmail">Gmail</button>
								<button class="btn tiny" type="button" id="button_jango">JangoSMTP</button>
								<button class="btn tiny" type="button" id="button_smtp2go">SMTP2GO</button>
								<button class="btn tiny" type="button" id="button_office365">Office365</button>
							</div>
							<div class="tiny-3 medium-2">
								<label for="port">Port</label>
								<input type="text" name="port" id="port" class="form-control" placeholder="25">
							</div>
							<div class="tiny-12 medium-2">
								<label for="security">Security</label>
								<div class="select">
									<select title="Selecty security type" name="security" id="security">
										<option id="security_auto" value="auto">Auto</option>
										<option id="security_ssl" value="SSL">SSL</option>
										<option id="security_tls" value="TLS">TLS</option>
									</select>
								</div>
							</div>
						</div>
			
						<br>
			
						<div class="row">
							<div class="tiny-6">
								<label for="username">Username</label>
								<input type="text" name="username" id="username" class="form-control" placeholder="Username">
							</div>
							<div class="tiny-6">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" class="form-control" placeholder="Passw0rd" data-toggle="tooltip" data-placement="top" title="" data-original-title="We don't save or log this!">
							</div>
						</div>
			
						<br>
			
						<div class="row">
							<div class="tiny-6">
								<label for="fromEmail">From email address</label>
								<input type="text" name="fromEmail" id="fromEmail" class="form-control" placeholder="From Email">
							</div>
							<div class="tiny-6">
								<label for="toEmail">To email address</label>
								<input type="text" name="toEmail" id="toEmail" class="form-control" placeholder="To Email">
							</div>
						</div>
			
						<br>
			
						<div class="row">
							<div class="tiny-12">
								<button id="buttonSubmit" type="submit" class="btn btn-success">Test SMTP</button>
					
								<button id="buttonLoad" class="btn btn-success" type="button" style="display:none;" disabled>
									<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
									Loading...
								</button>
							</div>
						</div>
			
					</form>
			
				</div>
			</div>
		</section>
		
		<section class="content_block" id="output-wrapper" style="display: none;">
			<pre class="Properties" id="output"></pre>
		</section>
		
		<?php include('../_inc/ad.php'); ?>
		
	</main>
	
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>

<script>
	$('#button_sendgrid').click(function() {
		$('#server').val('smtp.sendgrid.net');
		$('#port').val('25');
		$('#security').val('auto');
		$('#server').focus();
	});
	$('#button_mailgun').click(function() {
		$('#server').val('smtp.mailgun.org');
		$('#port').val('25');
		$('#security').val('auto');
		$('#server').focus();
	});
	$('#button_jango').click(function() {
		$('#server').val('express-relay.jangosmtp.net');
		$('#port').val('2525');
		$('#security').val('auto');
		$('#server').focus();
	});
	$('#button_smtp2go').click(function() {
		$('#server').val('mail.smtp2go.com');
		$('#port').val('2525');
		$('#security').val('auto');
		$('#server').focus();
	});
	$('#button_office365').click(function() {
		$('#server').val('smtp.office365.com');
		$('#port').val('587');
		$('#security').val('TLS');
		$('#server').focus();
	});
	$('#button_gmail').click(function() {
		$('#server').val('smtp.gmail.com');
		$('#port').val('465');
		$('#security').val('SSL');
		$('#server').focus();
	});
	$(function () {
		$('form').on('submit', function (e) {
			e.preventDefault();
			$('#buttonSubmit').hide();
			$('#buttonLoad').show();
			$.ajax({
				type: 'post',
				url: '/smtp/smtptest.php',
				data: $('#smtpTest').serialize(),
				success: function(response) {
					$('#buttonLoad').hide();
					$('#buttonSubmit').show();
					$('#output-wrapper').css('display', 'block');
					$('#output').html(response);
				}
			});
		});
	});
</script>

<?php include('../_inc/footer.php'); ?>
