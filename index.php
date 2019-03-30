<?php include('_inc/header.php'); ?>

<?php include('_inc/navigation.php'); ?>

<div class="container">

	<div class="row">

		<div class="col">
			<div class="alert alert-dismissible alert-light">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Disclaimer!</strong> We do <i><u>not</u></i> log any of your data or track any of your usage on this site. <br>
				The entire project is open source, and can be found on <i class="fa fa-github" aria-hidden="true"></i> <a href="#" class="alert-link">GitHub</a>.
			</div>
		</div>

	</div>

	<div class="row">

		<div class="col-md-6">
			<div class="card border-dark">
				<div class="card-header"><span class="badge badge-success">networking</span></div>
				<div class="card-body">
					<h4 class="card-title"><i class="fa fa-paper-plane" aria-hidden="true"></i> SMTP Test</h4>
					<p class="card-text">Test your connection to Sendgrid, Mailgun, Amazon SES, or any other SMTP server. See the exact SMTP "conversation" to help you troubleshoot email issues.</p>
					<a href="/smtp" class="btn btn-outline-secondary">Test SMTP</a>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card border-dark">
				<div class="card-header"><span class="badge badge-success">networking</span></div>
				<div class="card-body">
					<h4 class="card-title"><i class="fa fa-globe" aria-hidden="true"></i> DNS Lookup</h4>
					<p class="card-text">Look up DNS records on any domain and monitor changes to records.</p>
					<a href="/dns" class="btn btn-outline-secondary">Look up DNS</a>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card border-dark">
				<div class="card-header"><span class="badge badge-danger">graphic</span></div>
				<div class="card-body">
					<h4 class="card-title"><i class="fa fa-paint-brush" aria-hidden="true"></i> Color Converter</h4>
					<p class="card-text">Convert any color code to a number of different formats among which are HEX, RGB, HSV, HSL and CMYK</p>
					<a href="/color-converter" class="btn btn-outline-secondary">Convert colors</a>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card border-dark">
				<div class="card-header"><span class="badge badge-danger">graphic</span></div>
				<div class="card-body">
					<h4 class="card-title"><i class="fa fa-picture-o" aria-hidden="true"></i> Image Compression</h4>
					<p class="card-text">Make your images ready for the internet by compressing them by up to 90%, all without loosing quality</p>
					<a href="/image-compression" class="btn btn-outline-secondary">Compress image</a>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="card border-dark">
				<div class="card-header"><span class="badge badge-success">networking</span></div>
				<div class="card-body">
					<h4 class="card-title"><i class="fa fa-compress" aria-hidden="true"></i> IP Lookup</h4>
					<p class="card-text">Check your public IP, location, ISP and more.</p>
					<a href="/ip" class="btn btn-outline-secondary">Look up IP</a>
				</div>
			</div>
		</div>

	</div>

</div>

<?php include('_inc/scripts.php'); ?>

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

<?php include('_inc/footer.php'); ?>
