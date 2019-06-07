<?php
$pageName = "Image Placeholder";
$pageDescription = "Generate image in any size to use as placeholder for your projects";
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
    <h1>Generate Placeholder Image</h1>
    <h5>Quickly generate and download placeholder images for you project</h5><br>

    <br>

        <div class="row">

            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <label for="width">Width in pixels</label>
                    <input type="text" name="width" id="width" class="form-control my-1" placeholder="1200" value="1200" required>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <label for="height">Height in pixels</label>
                    <input type="text" name="height" id="height" class="form-control my-1" placeholder="450" value="450" required>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-3 offset-md-1">
                <button id="buttonSubmit" onClick="getPlaceholder()" type="submit" class="btn btn-success btn-block" style="margin-top: 2.2rem;">Generate image</button>
                <button id="buttonLoad" class="btn btn-success btn-block" type="button" style="display:none;margin-top:2.2rem;" disabled>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>
        </div>


    <br>
    <br>

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
        </div>
    </div>

    <div class="row">
        <style>
            img#placeholder {
                max-width: 100%;
                height: auto;
            }
        </style>

        <div class="col" id="output">
        </div>

    </div>

    <br>

</div>

<?php include('../_inc/scripts.php'); ?>
<script>
function getPlaceholder() {
    $('#buttonSubmit').hide();
    $('#loader').show();
    $('#output').hide();
    $('#buttonLoad').show();
    $('#placeholder').remove();
    var widthVal = $('#width').val();
    var heightVal = $('#height').val();
    var img = $('<img id="dynamic">');
    img.attr('src', 'placeholder.php?width='+widthVal+'&height='+heightVal);
    img.attr('alt', 'Image created by a PHP script');
    img.attr('id', 'placeholder');
    setTimeout(function(){
        $('#buttonLoad').hide();
        $('#buttonSubmit').show();
        $('#loader').hide();
        $('#output').show();
        img.appendTo('#output');
    }, 1000);
}

getPlaceholder();
</script>
<?php include('../_inc/footer.php'); ?>



