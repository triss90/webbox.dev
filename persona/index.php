<?php
$pageName = "Fake Identity Generator";
$pageDescription = "Generate a fully randomized identity, with name, sex, age and more.";
?>
<?php include('../_inc/header.php'); ?>
<?php include('../_inc/navigation.php'); ?>

<style>
    .loader-fancy {
        position: relative;
        margin: 200px auto;
        width: 100px;
    }
    .loader-fancy.loader-fancy-small {
        width: 50px;
    }
    .loader-fancy.loader-fancy-large {
        width: 150px;
    }
    .loader-fancy::before {
        content: '';
        display: block;
        padding-top: 100%;
    }
    .loader-fancy .circular {
        -webkit-animation: rotate 2s linear infinite;
        animation: rotate 2s linear infinite;
        height: 100%;
        -webkit-transform-origin: center center;
        transform-origin: center center;
        width: 100%;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }
    .loader-fancy .circular .path {
        stroke-dasharray: 1,200;
        stroke-dashoffset: 0;
        -webkit-animation: dash 1.5s ease-in-out infinite,color 6s ease-in-out infinite;
        animation: dash 1.5s ease-in-out infinite,color 6s ease-in-out infinite;
        stroke-linecap: round;
    }

    @-webkit-keyframes rotate {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes rotate {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
    @-webkit-keyframes dash {
        0% {
            stroke-dasharray: 1,200;
            stroke-dashoffset: 0;
        }
        50% {
            stroke-dasharray: 89,200;
            stroke-dashoffset: -35px;
        }
        100% {
            stroke-dasharray: 89,200;
            stroke-dashoffset: -124px;
        }
    }
    @keyframes dash {
        0% {
            stroke-dasharray: 1,200;
            stroke-dashoffset: 0;
        }
        50% {
            stroke-dasharray: 89,200;
            stroke-dashoffset: -35px;
        }
        100% {
            stroke-dasharray: 89,200;
            stroke-dashoffset: -124px;
        }
    }
    @-webkit-keyframes color {
        100%,0% {
            stroke: #515bd4;
        }
        40% {
            stroke: #dd2a7b;
        }
        66% {
            stroke: #feda77;
        }
        80%,90% {
            stroke: #8134af;
        }
    }
    @keyframes color {
        100%,0% {
            stroke: #515bd4;
        }
        40% {
            stroke: #dd2a7b;
        }
        66% {
            stroke: #feda77;
        }
        80%,90% {
            stroke: #8134af;
        }
    }

</style>

<div class="container">
    <button id="buttonSubmit" onClick="getPersona()" type="submit" class="btn btn-success btn pull-right mr-2 mt-3">Generate new Indetity</button>
    <button id="buttonLoad" class="btn btn-success btn pull-right mr-2 mt-3" type="button" style="display:none;" disabled>
        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
        Loading...
    </button>
    <h1>Fake Identity Generator</h1>
    <h5>Generate a fully randomized identity, with name, sex, age and more.</h5><br>
    <hr>

    <div class="row">

        <div class="col">
            <center>
                <div id="loader">
                    <div class="loader-fancy loader-fancy-large">
                        <svg class="circular" viewBox="25 25 50 50">
                            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
                        </svg>
                    </div>
                </div>
            </center>
            <div id="output"></div>
        </div>

    </div>

</div>

<?php include('../_inc/scripts.php'); ?>
<script>
function getPersona() {
    $('#buttonSubmit').hide();
    $('#loader').show();
    $('#output').hide();
    $('#buttonLoad').show();
    setTimeout(function(){
        $.ajax({
            type: 'post',
            url: 'persona.php',
            //data: $('#htpasswd').serialize(),
            success: function(response) {
                $('#buttonLoad').hide();
                $('#buttonSubmit').show();
                $('#loader').hide();
                $('#output').show();
                $('#output').html(response);
            }
        });
    }, 2000);
}
getPersona();
</script>
<?php include('../_inc/footer.php'); ?>


