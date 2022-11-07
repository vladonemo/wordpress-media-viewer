<?php
require 'settings.php';
require 'wp.php';

header("Content-type: image/jpeg");

function get_image($url)
{
    $image = imagecreatefromjpeg($url);
    return imagerotate($image, array_values([0, 0, 0, 180, 0, 0, -90, 0, 90])[@exif_read_data($url)['Orientation'] ?: 0], 0);
}

$wp_wrapper = new WpWrapper($wp_root_url);

$url = $wp_wrapper->getImageUrlById($_GET['id']);
if (!$url) {
    echo file_get_contents(realpath( $_SERVER['DOCUMENT_ROOT'].$no_image_path));
}
else {
    $image = get_image($url);
    imagejpeg($image);
    imagedestroy($image);
}
