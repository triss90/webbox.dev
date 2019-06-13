<?php
$pageName = "Password Checker";
$pageDescription = "Check if password has been leaked by a known hack";
?>
<?php include('../_inc/header.php'); ?>
<?php include('../_inc/navigation.php'); ?>



<div class="container">
    <h1>Password Checker</h1>
    <h5>Check if password has been leaked by a known hack.</h5><br>

    <form id="dnsTest" action="leak.php" method="post" accept-charset="utf-8">
        <div class="row">

            <div class="col-12 col-sm-6 col-md-8">
                <div class="form-group">
                    <label for="domainName">Password</label>
                    <input type="password" name="password" id="password" class="form-control my-1" placeholder="MyS3CuREPa$$W0rD" value="" required>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <button id="buttonSubmit" type="submit" class="btn btn-success btn-block" style="margin-top: 2.2rem;">Test Password</button>

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
            <div id="output" style="text-align: center;"></div>
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
                        url: 'leak.php',
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
</script>
<?php include('../_inc/footer.php'); ?>


