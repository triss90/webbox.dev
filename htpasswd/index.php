<?php
$pageName = ".htpasswd Generator";
$pageDescription = "Generate .htpasswd username and password combinations.";
?>
<?php include('../_inc/header.php'); ?>
<?php include('../_inc/navigation.php'); ?>



<div class="container">
    <h1>.htpasswd Generator</h1>
    <h5>Generate .htpasswd username and password combinations.</h5><br>
    <!-- https://gist.github.com/akalongman/b50bc11a9303adb6f2db -->

    <form id="htpasswd" action="htpasswd.php" method="post" accept-charset="utf-8">
        <div class="row">

            <div class="col-12 col-sm-6 col-md-5">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control my-1" placeholder="MyUserName" value="" required>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-5">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control my-1" placeholder="Aw3$0MePa$$w0Rd" value="" required>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-2">
                <button id="buttonSubmit" type="submit" class="btn btn-success btn-block" style="margin-top: 2.2rem;">Generate .htpasswd</button>
                <button id="buttonLoad" class="btn btn-success btn-block" type="button" style="display:none;margin-top:2.2rem;" disabled>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>

        </div>
    </form>

    <div class="row">

        <div class="col">
            <pre id="output" style="display: none"></pre>
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
                    url: 'htpasswd.php',
                    data: $('#htpasswd').serialize(),
                    success: function(response) {
                        $('#buttonLoad').hide();
                        $('#buttonSubmit').show();
                        $('#output').show();
                        $('#output').html(response);
                    }
                });
            }, 1000);
        });
    });
</script>
<?php include('../_inc/footer.php'); ?>


