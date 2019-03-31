<?php
    $pageName = "Image Compression";
    $pageDescription = "Make your images ready for the internet by compressing them by up to 90%, all without loosing quality.";
?>
<?php include('../_inc/header.php'); ?>

<?php include('../_inc/navigation.php'); ?>

  	<div class="container">
  		<h1>Compress Image</h1>
        <h5>Make your images ready for the internet by compressing them by up to 90%, all without loosing quality.</h5><br>

  		<div class="row">
  			<div class="col">
  				<div class="alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					Image compression brought to you by our friends over at <a href="https://compressionbear.com" target="_blank" class="alert-link">compressionbear.com</a>.
				</div>
  			</div>
  		</div>
  		<br>

  		<div class="row">

			<div class="col">

				<form action="compress.php" id="dropzone" class="dropzone" method="POST" enctype="multipart/form-data"></form>

				<div class="progress" id="progress" style="display: none; height: 30px; padding: 3px;">
				  <div class="progress-bar progress-bar-striped progress-bar-animated progress-bar-danger bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%; font-size: 1rem;">
				  	<span class="progress-text" style="z-index: 9;color: white;">Compressing: <strong>0%</strong></span>
				  </div>
				</div>

		    </div>
		</div>

		<br>
		<div class="row">
			<div class="col">
				<div class="result" id="result" style="display: none;"><span class=result-info></span></div>
			</div>
		</div>

  	</div>

<?php include('../_inc/scripts.php'); ?>

<script src="../assets/js/dropzone.js" type="text/javascript" charset="utf-8"></script>
<script>

var $progress = $(".progress"),
      $bar = $(".progress-bar"),
      $text = $(".progress-text"),
      percent = 0,
      update,
      speed = 1,
      orange = 30,
      yellow = 55,
      green = 85,
      timer,
      checkExist;

  update = function() {
	timer = setTimeout( function() {
		percent += Math.random() * 1.8;
		percent = parseFloat( percent.toFixed(1) );
		$text.find("strong").text( percent + "%" );
		if( percent <= 99 ) {
			speed = Math.floor( Math.random() * 50 );
			update();
			$bar.css({ width: percent + "%" });
		}
    }, speed);
  };

checkExist = setInterval(function() {
    if ($('.dz-started').length) {

    	$('#progress').show();
    	$('#dropzone').hide();

        update();

        setTimeout( function(){
            $('.progress').hide();
            $('#result').show();
        }, 4200 );

        clearInterval(checkExist);
    }
}, 100);


$("#dropzone").dropzone({
	success: function(file, response) {
		var info = $('.result-info');
		info.append(response);
	}
});
</script>


<?php include('../_inc/footer.php'); ?>



