<?php
$width = $_GET['width'];
$height = $_GET['height'];



$text = $width . ' x ' . $height;

$textWidth = $width / 2;
$textHeight = $textWidth / 4;

if ($width <= 300) {
    $textWidth = $width / 1;
    $textHeight = $textWidth / 3;
}

$textX = ($width / 2) - ($textWidth / 2.5);
$textY = ($height / 2) - ($textHeight / 1.5);



$ImageText2Small = imagecreate($width, $height);
$ImageText2Large = imagecreate($width, $height);
$ImageFinal = imagecreate($width, $height);

if (isset($_GET['darkmode'])) {
    $backgroundColor = imagecolorallocate($ImageText2Small, 51,51,51);
    $textColor = imagecolorallocate($ImageText2Small, 204,204,204);
} else {
    $backgroundColor = imagecolorallocate($ImageText2Small, 204,204,204);
    $textColor = imagecolorallocate($ImageText2Small, 51,51,51);
}


imagestring($ImageText2Small, 5, 1, 0, $text,  $textColor);
imagecopyresampled($ImageText2Large, $ImageText2Small, $textX, $textY, 0, 0, $textWidth, $textHeight, 154, 20);

$ImageText2W = imagesx($ImageText2Large);
$ImageText2H = imagesy($ImageText2Large);

imagecopymerge($ImageFinal, $ImageText2Large, 20, 20, 0, 0, $ImageText2W, $ImageText2H, 100);

header("Content-type: image/png");
imagepng($ImageFinal);

imagecolordeallocate($ImageText2, $textColor);
imagedestroy($ImageText2);

