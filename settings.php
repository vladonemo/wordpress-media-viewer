<?php
$wp_root_url = '';
$wp_media_search_current = '';
$wp_media_search_previous = '';
$wp_media_search_next = '';
$wp_media_search_all = '';
$slider_count = 5;
$page_title = 'Wordpress media slider';
$no_image_path = 'no-image.jpg';
$translations = (object)array(
    'previous' => 'Previous',
    'show' => 'Show',
    'current_headline' => 'Current',
    'previous_headline' => 'Previous',
    'next_headline' => 'Next');

if (file_exists(__DIR__ . '/settings.local.php')) {
    include __DIR__ . '/settings.local.php';
}
