<?php

function newColor($im, $endcolor) {

    //determine end-colors in hexdec
    $EndcolorRGB['r'] = hexdec( substr($endcolor, 0, 2));
    $EndcolorRGB['g'] = hexdec( substr($endcolor, 2, 2));
    $EndcolorRGB['b'] = hexdec( substr($endcolor, 4, 2));

  imagealphablending($im, false);
  for ($x = imagesx($im); $x--;) {
    for ($y = imagesy($im); $y--;) {
        $rgb = imagecolorat($im, $x, $y);
        $c = imagecolorsforindex($im, $rgb);
            // here we use the new color, but the original alpha channel
            $colorB = imagecolorallocatealpha($im, $EndcolorRGB['r'], $EndcolorRGB['g'], $EndcolorRGB['b'], $c['alpha']);
            imagesetpixel($im, $x, $y, $colorB);
    }
  }
  imageAlphaBlending($im, true);
  imageSaveAlpha($im, true);

}

$color = $_GET['color'];
$url =  dirname($_SERVER["SCRIPT_FILENAME"]) . '/images/video-button-transp.png';
$img = ImageCreateFromPNG($url);
newColor($img,$color);
header('Content-type: image/png');
imagePng($img);
imagedestroy($img);
?>


