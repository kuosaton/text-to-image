<?php
header("Content-type: image/png");

$string = isset($_GET['text']) ? $_GET['text'] : "No Data";
$bg = isset($_GET['bg-color']) ? $_GET['bg-color'] : '#000000';
$bg = ltrim($bg, '#');

$bg_r = hexdec(substr($bg, 0, 2));
$bg_g = hexdec(substr($bg, 2, 2));
$bg_b = hexdec(substr($bg, 4, 2));

$text = isset($_GET['text-color']) ? $_GET['text-color'] : '#ffffff';
$text = ltrim($text, '#');

$text_r = hexdec(substr($text, 0, 2));
$text_g = hexdec(substr($text, 2, 2));
$text_b = hexdec(substr($text, 4, 2));

$font = 4;
$width = ImageFontWidth($font) * strlen($string);
$height = ImageFontHeight($font);

$im = @imagecreate($width, $height);
$background_color = imagecolorallocate($im, $bg_r, $bg_g, $bg_b);
$text_color = imagecolorallocate($im, $text_r, $text_g, $text_b);

imagestring($im, $font, 0, 0, $string, $text_color);
imagepng($im);
?>
