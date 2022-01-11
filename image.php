<?php
require 'settings.php';
require 'wp.php';

header("Content-type: image/jpeg");


function get_image($url)
{
    $image = imagecreatefromjpeg($url);
    return imagerotate($image, array_values([0, 0, 0, 180, 0, 0, -90, 0, 90])[@exif_read_data($url)['Orientation'] ?: 0], 0);
}

$wpWrapper = new WpWrapper($wp_root_url);

$image = get_image($wpWrapper->getImageUrlById($_GET['id']));
imagejpeg($image);
imagedestroy($image);
