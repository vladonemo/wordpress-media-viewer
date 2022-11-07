<?php
require 'settings.php';
require 'wp.php';
?>
<html>
<head>
  <title><?php echo $page_title ?></title>
  <link rel="stylesheet" href="styles.css?1827">
  <link rel="manifest" href="/manifest.json">
</head>
<body>
<?php

if (empty($_GET['id'])) {
    $wp_wrapper = new WpWrapper($wp_root_url);
    $current_id = $wp_wrapper->getFirstMediaId($wp_media_search_current);
    echo "<h1>".$translations->current_headline."</h1>";
    echo "<img class=\"img\" src=\"image.php?id=" . $current_id . "\"/>";
    $next_id = $wp_wrapper->getFirstMediaId($wp_media_search_next);
    if (!empty($next_id)) {
        echo "<h1>".$translations->next_headline."</h1>";
        echo "<img class=\"img\" src=\"image.php?id=" . $next_id . "\"/>";
    }
    $previous_id = $wp_wrapper->getFirstMediaId($wp_media_search_previous);
    if (!empty($previous_id)) {
        echo "<h1>".$translations->previous_headline."</h1>";
        echo "<img class=\"img\" src=\"image.php?id=" . $previous_id . "\"/>";
    }

} else {
    echo "<img class=\"img\" src=\"image.php?id=" . $_GET['id'] . "\"/>";
}

?>
<div class="buttons">
  <button class="button"
    onclick="location.href='slide.php';"><?php echo $translations->previous ?></button>
</div>
