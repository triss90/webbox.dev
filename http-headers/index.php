<?php
    $pageName = "HTTP Headers";
?>
<?php include('../_inc/header.php'); ?>

<?php include('../_inc/navigation.php'); ?>

  	<div class="container">
  		<h1>HTTP Headers</h1><br>

		<form id="headersTest" action="getheaders.php" method="post" accept-charset="utf-8">
	  		<div class="row">

				<div class="col-6 col-md-8">
					<div class="form-group">
						<input type="text" name="domainName" id="domainName" class="form-control my-1" placeholder="https://example.com" required>
					</div>
			    </div>

			    <div class="col-6 col-md-4">
					<button id="buttonSubmit" type="submit" class="btn btn-success btn-block">Look Up Headers</button>

					<button id="buttonLoad" class="btn btn-success btn-block" type="button" style="display:none;margin-top:0.25rem;" disabled>
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
                $('#buttonSubmit').hide();
                $('#buttonLoad').show();
                setTimeout(function(){
                    $.ajax({
                        type: 'post',
                        url: 'getheaders.php',
                        data: $('#headersTest').serialize(),
                        success: function(response) {
                            $('#buttonLoad').hide();
                            $('#buttonSubmit').show();
                            $('#output').html(response);
                        }
                    });
                }, 1000);

			});
		});
    </script>

<?php include('../_inc/footer.php'); ?>


