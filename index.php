<?php
require 'settings.php';
?>
<html>
<head>
    <title><?php echo $page_title ?></title>
    <script src="splide/splide.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="splide/splide.min.css">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Splide('#image-slider', {}).mount();
        });
    </script>
</head>
<body>
<div id="image-slider" class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <?php
            for ($i = 0; $i < $slider_count; $i++) {
                echo '
                <li class="splide__slide">
                    <img src="image.php?id=' . $i . '">
                </li>';
            }
            ?>
        </ul>
    </div>
</div>
