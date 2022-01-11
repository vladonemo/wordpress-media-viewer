<?php
$wp_root_url = '';
$wp_media_params = '';
$slider_count = 5;
$page_title = 'Wordpress media slider';
$no_image_path = 'no-image.jpg';
$translations = (object)array(
    'previous' => 'Previous',
    'show' => 'Show');

if (file_exists(__DIR__ . '/settings.local.php')) {
    include __DIR__ . '/settings.local.php';
}
