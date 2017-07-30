<?php

header("Content-type: image/png");
$string = $_GET['string'];
$im = imagecreatefrompng("sert.png");
$color = imagecolorallocate($im, 0, 0, 0);
imagettftext($im, 20, 0, 90, 280, $color, 'arial.ttf', $string);
//imagestring($im, 3, 90, 319, $string, $color);
imagepng($im);
imagedestroy($im);
?>
