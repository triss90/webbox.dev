<?php
    $pageName = "SMTP Test";
    $pageDescription = "Test your connection to Sendgrid, Mailgun, Amazon SES, or any other SMTP server. See the exact SMTP \"conversation\" to help you troubleshoot email issues.";
    $pageKeywords = "smtp, test, check, server, connection, port, host, mail, email, auth, tool, online, secure, free, simple, smtper"
?>
<?php include('../_inc/header.php'); ?>

<?php include('../_inc/navigation.php'); ?>

  	<div class="container">
  		<h1>Test SMTP Settings</h1>
        <h5>Test your connection to Sendgrid, Mailgun, Amazon SES, or any other SMTP server. See the exact SMTP "conversation" to help you troubleshoot email issues.</h5><br>

		<form id="smtpTest" action="smtptest.php" method="post" accept-charset="utf-8">

			<div class="row">
			    <div class="col-md-8">
					<label class="my-1 mr-2" for="server">SMTP Server</label>
					<input type="text" name="server" id="server" class="form-control" placeholder="smtp.server.com">
					<button type="button" id="button_sendgrid" class="btn btn-outline-success btn-sm">Sendgrid</button>
					<button type="button" id="button_mailgun" class="btn btn-outline-success btn-sm">Mailgun</button>
					<button type="button" id="button_gmail" class="btn btn-outline-success btn-sm">Gmail</button>
					<button type="button" id="button_jango" class="btn btn-outline-success btn-sm">JangoSMTP</button>
					<button type="button" id="button_smtp2go" class="btn btn-outline-success btn-sm">SMTP2GO</button>
					<button type="button" id="button_office365" class="btn btn-outline-success btn-sm">Office365</button>
			    </div>
			    <div class="col-6 col-md-2">
					<label class="my-1 mr-2" for="port">Port</label>
					<input type="text" name="port" id="port" class="form-control" placeholder="25">
			    </div>
			    <div class="col-6 col-md-2">
					<label class="my-1 mr-2" for="security">Security</label>
					<select class="custom-select" id="security">
						<option id="security_auto" value="auto">Auto</option>
						<option id="security_ssl" value="SSL">SSL</option>
						<option id="security_tls" value="TLS">TLS</option>
					</select>
		    	</div>
			</div>

			<br>

			<div class="row">
				<div class="col mb-3">
					<label class="my-1 mr-2" for="username">Username</label>
					<input type="text" name="username" id="username" class="form-control" placeholder="Username">
				</div>
				<div class="col mb-3">
					<label class="my-1 mr-2" for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Passw0rd" data-toggle="tooltip" data-placement="top" title="" data-original-title="We don't save or log this!">
				</div>
			</div>

			<br>

			<div class="row">
				<div class="col mb-3">
					<label class="my-1 mr-2" for="fromEmail">From email address</label>
					<input type="text" name="fromEmail" id="fromEmail" class="form-control" placeholder="From Email">
				</div>
				<div class="col mb-3">
					<label class="my-1 mr-2" for="toEmail">To email address</label>
					<input type="text" name="toEmail" id="toEmail" class="form-control" placeholder="To Email">
				</div>
			</div>

			<br>

			<button id="buttonSubmit" type="submit" class="btn btn-success">Test SMTP</button>

			<button id="buttonLoad" class="btn btn-success" type="button" style="display:none;" disabled>
				<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
				Loading...
			</button>

		</form>

		<div class="row">
			<div class="col">
				<div id="output-wrapper">
					<span class="circle c-1"></span>
					<span class="circle c-2"></span>
					<span class="circle c-3"></span>
					<pre><code class="Properties" id="output"></code></pre>
				</div>
			</div>
		</div>

  	</div>

   <?php include('../_inc/scripts.php'); ?>

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
					url: 'smtptest.php',
					data: $('#smtpTest').serialize(),
					success: function(response) {
						$('#buttonLoad').hide();
						$('#buttonSubmit').show();
						$('#output-wrapper').addClass('active');
						$('#output').html(response);
						hljs.initHighlighting();
					}
				});
			});
		});
    </script>

<?php include('../_inc/footer.php'); ?>
