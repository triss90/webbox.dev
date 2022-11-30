<?php
$title = "Fake Identity Generator";
$description = "Generate a fully randomized identity, with name, sex, age and more.";
?>

<?php include_once("../_inc/header.php"); ?>

<style>
    .text-success {
        color: var(--color-blue-1);
        margin: 0 0.35rem;
    }
    ul {
        margin: 0;
        padding: 0;
    }
    ul li {
        margin-left: 2rem;
    }
    .avatar {
        display: inline-block;
        border-radius: 50%;
        margin-right: 2rem;
        vertical-align: middle;
    }
    #loader {
        display: block;
    }
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
            stroke: var(--color-blue-1);
        }
        40% {
            stroke: var(--color-blue-2);
        }
        66% {
            stroke: var(--color-purple-1);
        }
        80%,90% {
            stroke: var(--color-purple-2);
        }
    }
    @keyframes color {
        100%,0% {
            stroke: var(--color-blue-1);
        }
        40% {
            stroke: var(--color-blue-2);
        }
        66% {
            stroke: var(--color-purple-1);
        }
        80%,90% {
            stroke: var(--color-purple-2);
        }
    }

</style>

<div class="wrapper" id="identity-generator">
    
    <nav class="navigation"><?php include_once("../_inc/nav.php"); ?></nav>
    
    <main class="content">
        
        <section class="content_block">
            <div class="row">
                <div class="tiny center">
                    <h1 class="headline center">Identity Generator</h1>
                    <h2 class="small center ">Generate a fully randomized identity, with name, sex, age and more.</h2>
                    <hr>
                    <button id="buttonSubmit" onClick="getPersona()" type="submit" class="center">Generate new Indetity</button>
                    <button id="buttonLoad" class="center" type="button" style="display:none;" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                    <br><br>
                </div>
            </div>
        </section>
        
        <section class="content_block" id="output-wrapper" style="display:none;">

            <div class="row">
        
                <div class="tiny">
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
        </section>
        
        <?php include('../_inc/ad.php'); ?>
        
    </main>
    
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
<script>
    function getPersona() {
        $('#buttonSubmit').hide();
        $('#loader').show();
        $('#output').hide();
        $('#buttonLoad').show();
        $('#output-wrapper').show();
        setTimeout(function(){
            $.ajax({
                type: 'post',
                url: '/identity-generator/persona.php',
                success: function(response) {
                    $('#buttonLoad').hide();
                    $('#buttonSubmit').show();
                    $('#loader').hide();
                    $('#output').show();
                    $('#output').html(response);
                }
            });
        }, 20);
    }
    
    getPersona();
    </script>

<?php include_once("../_inc/footer.php"); ?>




