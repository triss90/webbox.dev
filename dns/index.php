<?php
    $pageName = "DNS Lookup";
    $pageDescription = "Look up DNS records on any domain and monitor changes to records.";
    $pageKeywords = "dns lookup, dns details, dns information";
    $domain = htmlspecialchars($_GET["domain"]);
    $repeat = htmlspecialchars($_GET["repeat"]);
?>


<?php include('../_inc/header.php'); ?>

<?php include('../_inc/navigation.php'); ?>

  	<div class="container">
  		<h1>DNS Lookup</h1>
        <h5>Look up DNS records on any domain and monitor changes to records.</h5><br>
        <code>https://webbox.dev/dns/index.php?domain=<span class="badge badge-success">example.com</span>&repeat=<span class="badge badge-success">1</code>
        <br><br>

		<form id="dnsTest" action="getdns.php" method="post" accept-charset="utf-8">
	  		<div class="row">

				<div class="col-12 col-sm-6 col-md-8">
					<div class="form-group">
                        <label for="domainName">Domain name:</label>
                        <input type="text" pattern="^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}$" name="domainName" id="domainName" class="form-control my-1" placeholder="example.com" value="<?php echo $domain; ?>" required>
					</div>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="repeat" id="repeat" <?php if($repeat == 1) {echo "checked"; } ?>>
						<label class="custom-control-label" for="repeat">Repeat every 5 seconds</label>
					</div>
			    </div>

			    <div class="col-12 col-sm-6 col-md-4">
					<button id="buttonSubmit" type="submit" class="btn btn-success btn-block" style="margin-top: 2.2rem;">Look Up DNS</button>

					<button id="buttonLoad" class="btn btn-success btn-block" type="button" style="display:none;margin-top:2.2rem;" disabled>
						<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
						Loading...
					</button>
			    </div>
			</div>
		</form>
		<br>
		<div class="row">
			<div class="col">
				<div id="output"></div>
			</div>
		</div>

  	</div>

    <?php include('../_inc/scripts.php'); ?>

	<script>
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
							url: 'getdns.php',
							data: $('#dnsTest').serialize(),
							success: function(response) {
								$('#buttonLoad').hide();
								$('#buttonSubmit').show();
								$('#output').html(response);
							}
						});
					}, 1000);
				}
			});
		});

		<?php if($domain != "") { ?>
        $(document).ready(function(){
            $("#dnsTest").submit();
        });
        <?php } ?>

    </script>

<?php include('../_inc/footer.php'); ?>


