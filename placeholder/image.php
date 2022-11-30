<?php
header("Content-Type: image/png");

$imageWidth = $_GET['width'];
$imageHeight = $_GET['height'];
$imageText = $_GET['text'];
$imageTextSize = 5;
$imageTextConstant = 0.9;
$imageTextColor = explode(",", $_GET['textColor']);
$imageBackgroundColor = explode(",", $_GET['backgroundColor']);

// Default text if none is provided
if (empty($imageText) || $imageText == "") {
	$imageText = $imageWidth."x".$imageHeight;
}

// Define max resolution (4K)
if($imageWidth > 3840) {$imageWidth = 3840;}
if($imageHeight > 2160) {$imageHeight = 2160;}

// Position Text on image
$imageTextOffsetTop = ($imageHeight/2)-$imageTextSize;
$imageTextOffsetLeft = ($imageWidth/2-((strlen($imageText)*$imageTextSize)*$imageTextConstant));

// Generate image
$image = @imagecreate($imageWidth, $imageHeight) or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($image, $imageBackgroundColor[0],$imageBackgroundColor[1],$imageBackgroundColor[2]);
$text_color = imagecolorallocate($image, $imageTextColor[0],$imageTextColor[1],$imageTextColor[2]);
imagestring($image, $imageTextSize, $imageTextOffsetLeft, $imageTextOffsetTop, $imageText, $text_color);
imagepng($image);
imagedestroy($image);
