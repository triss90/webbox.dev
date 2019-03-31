<?php
    $pageName = "Whois Lookup";
    $pageDescription = "Check domain availability and contact information with a simply whois lookup.";
?>
<?php include('../_inc/header.php'); ?>

<?php include('../_inc/navigation.php'); ?>

  	<div class="container">
  		<h1>Whois Lookup</h1>
        <h5>Check domain availability and contact information with a simply whois lookup.</h5><br>

		<form id="whoisTest" action="whoislookup.php" method="post" accept-charset="utf-8">
	  		<div class="row">

				<div class="col-6 col-md-8">
					<div class="form-group">
                        <label for="domainName">Domain name:</label>
						<input type="text" pattern="^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}$" name="domainName" id="domainName" class="form-control" placeholder="example.com" required>
					</div>
			    </div>

			    <div class="col-6 col-md-4">
					<button id="buttonSubmit" type="submit" class="btn btn-success btn-block" style="margin-top: 2rem;">Check domain availability</button>

					<button id="buttonLoad" class="btn btn-success btn-block" type="button" style="display:none;margin-top: 2rem;" disabled>
						<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
						Loading...
					</button>
			    </div>
			</div>
		</form>
		<br>
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
		$(function () {
			$('form').on('submit', function (e) {
				e.preventDefault();
                $('#buttonSubmit').hide();
                $('#buttonLoad').show();
                setTimeout(function(){
                    $.ajax({
                        type: 'post',
                        url: 'whoislookup.php',
                        data: $('#whoisTest').serialize(),
                        success: function(response) {
                            $('#buttonLoad').hide();
                            $('#buttonSubmit').show();
                            $('#output-wrapper').addClass('active');
                            $('#output').html(response);
                            hljs.initHighlighting.called = false;
                            hljs.initHighlighting();
                        }
                    });
                }, 1000);

			});
		});
    </script>

<?php include('../_inc/footer.php'); ?>


