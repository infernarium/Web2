<?php
$im = imagecreatetruecolor(200, 200);

$blue = imagecolorallocate($im, 0, 0, 255);
$red = imagecolorallocate($im, 255, 0, 0);
$green = imagecolorallocate($im, 0, 255, 0);

imagefilledrectangle($im, 20, 20, 60, 60, $red); //залитый прямоугольник

imagefilledellipse($im, 50, 160, 30, 30, $green); //залитый круг

// массив точек для треугольника
$values = array(
    150,
    110,
    // Point 1 (x, y)
    140,
    130,
    // Point 2 (x, y)
    160,
    130, // Point 3 (x, y)
);

// рисование треугольника
imagefilledpolygon($im, $values, 3, $blue);

// прорисовка
header("Content-type: image/png");
imagepng($im);

// освобождение памяти
imagedestroy($im);

?>