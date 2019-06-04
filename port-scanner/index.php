<?php
    $pageName = "Crontab Generator";
    $pageDescription = "The quick and simple editor for cron schedule expressions.";
?>
<?php include('../_inc/header.php'); ?>
<?php include('../_inc/navigation.php'); ?>

  	<div class="container">
  		<h1>Port Scanner</h1>
        <h5>Check if a port is online or not. Enter a hostname or an IP address and comma separated ports to check those ports status.</h5><br>
        <!-- https://gist.github.com/akalongman/b50bc11a9303adb6f2db -->

        <form id="portScanner" action="portScanner.php" method="post" accept-charset="utf-8">
            <div class="row">

                <div class="col-12 col-sm-6 col-md-7">
                    <div class="form-group">
                        <label for="domainName">Hostname / IP Address</label>
                        <input type="text" name="host" id="host" class="form-control my-1" placeholder="example.com or 12.234.567.89" value="" required>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="form-group">
                        <label for="domainName">Ports</label>
                        <input type="text" name="ports" id="ports" class="form-control my-1" placeholder="80, 443, 8080" value="" required>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-2">
                    <button id="buttonSubmit" type="submit" class="btn btn-success btn-block" style="margin-top: 2.2rem;">Scan Ports</button>
                    <button id="buttonLoad" class="btn btn-success btn-block" type="button" style="display:none;margin-top:2.2rem;" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </div>
            </div>
        </form>

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
                    url: 'portScanner.php',
                    data: $('#portScanner').serialize(),
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


