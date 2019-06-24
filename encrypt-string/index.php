<?php
$pageName = "Encrypt / Decrypt Message";
$pageDescription = "Encrypt and decrypt text strings or messages - A free, fast, secure and serverless string encryption.";
?>
<?php include('../_inc/header.php'); ?>
<?php include('../_inc/navigation.php'); ?>


<div class="container">
    <h1>Encrypt / Descrypt message</h1>
    <h5>Encrypt and decrypt text strings or messages - A free, fast, secure and serverless string encryption.</h5><br>
    <!-- https://www.npmjs.com/package/aes256 -->

        <div class="row">

            <div class="col-12">
                <div class="form-group">
                    <label for="textMessage">Text message</label>
                    <textarea class="form-control" id="textMessage" name="textMessage" rows="3" placeholder="All their equipment and instruments are alive."></textarea>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control my-1" placeholder="Aw3$0MePa$$w0Rd" value="" required>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-3">
                <button id="encrypt" type="submit" onclick="encrypt()" class="btn btn-info btn-block" style="margin-top: 2.2rem;">Encrypt</button>
            </div>

            <div class="col-12 col-sm-12 col-md-3">
                <button id="decrypt" type="submit" onclick="decrypt()" class="btn btn-info btn-block" style="margin-top: 2.2rem;">Decrypt</button>
            </div>

        </div>

    <div class="row">

        <div class="col" id="output" style="display: none; word-wrap: break-word;">
        </div>

    </div>

</div>


<?php include('../_inc/scripts.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>


<script>


    function encrypt() {
        var output = document.getElementById("output");
        var message = document.getElementById("textMessage").value;
        var password = document.getElementById("password").value;

        var encrypted = CryptoJS.AES.encrypt(message, password);

        output.style.display = 'block';
        output.innerHTML = encrypted;

    }

    function decrypt() {
        var output = document.getElementById("output");
        var message = document.getElementById("textMessage").value;
        var password = document.getElementById("password").value;
        var decrypted = CryptoJS.AES.decrypt(message, password);

        output.style.display = 'block';
        output.innerHTML = decrypted.toString(CryptoJS.enc.Utf8);
    }


</script>
<?php include('../_inc/footer.php'); ?>


