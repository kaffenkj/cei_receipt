<?php
header("Content-Type: image/png");
$im = @imagecreate(100, 20)
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 255, 255, 255);
$text_color = imagecolorallocate($im, 0, 0, 0);
$item = $_GET['item'];
if ($item==="Captain America : The Winter Soldier") {
	$date = date('n/d/y',strtotime("+3 days"));
} else {
	$date = date('n/d/y',strtotime("+1 week"));
}
imagestring($im, 6, 5, 5, $date , $text_color);
imagepng($im);
imagedestroy($im);
?>
