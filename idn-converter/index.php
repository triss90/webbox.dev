<?php
    $pageName = "IDN Converter";
    $pageDescription = "Convert international domain names or email addresses to ACE/Punycode. To use for configuring DNS servers, e-mail programs and webbrowsers without support for IDN domains.";
    $pageKeywords = "IDN, ACE, Punycode, converter, homepage, email, address";
?>
<?php include('../_inc/header.php'); ?>

<?php include('../_inc/navigation.php'); ?>

  	<div class="container">
  		<h1>IDN Converter</h1>
        <h5>Convert international domain names or email addresses to ACE/Punycode.</h5><br>

		<form id="idnConverter" action="idn.php" method="post" accept-charset="utf-8">
	  		<div class="row">

				<div class="col-12 col-sm-6 col-md-8">
					<div class="form-group">
                        <label for="idn">Domain name / Email address:</label>
						<input type="text" name="idn" id="idn" class="form-control" placeholder="täst.com / xn--tst-qla.com" required>
					</div>
			    </div>

			    <div class="col-12 col-sm-6 col-md-4">
					<button id="buttonSubmit" type="submit" class="btn btn-primary btn-block" style="margin-top: 2rem;">Convert</button>

					<button id="buttonLoad" class="btn btn-primary btn-block" type="button" style="display:none;margin-top: 2rem;" disabled>
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
                        url: 'idn.php',
                        data: $('#idnConverter').serialize(),
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


