<?php
header("Content-type: image/jpeg");
$images = ImageCreate(300,200);
$color = ImageColorAllocate($images,200,255,255);
$photo = ImageColorAllocate($images,0,0,0);
ImageRectangle($images, 0, 0, 299, 199, $photo);
ImageJpeg($images);
ImageDestroy($images);
?>