<?php
require 'settings.php';
require 'wp.php';

?>
<html>
<head>
    <title><?php echo $page_title ?></title>
    <script src="splide/splide.min.js"></script>
    <link rel="stylesheet" href="styles.css?1806">
    <link rel="stylesheet" href="splide/splide.min.css">
    <script>
        let currentIndex = 0;
        document.addEventListener('DOMContentLoaded', function () {
            const splide = new Splide('#image-slider', {}).mount();
            splide.on('moved', function(newIndex) {
                currentIndex = newIndex;
            })
            splide.on('click', function(slide) {
                location.href='index.php?id='+slide.slide.getAttribute('image-id');
            })
        });
    </script>
</head>
<body>
<div style="height: 100%">
    <div id="image-slider" class="splide">
        <div class="splide__track">
            <ul class="splide__list" style="height: 90%">
                <?php
                $media = (new WpWrapper($wp_root_url))->getMediaIds($wp_media_search_all);
                foreach ($media as $id) {
                    echo '
                <li class="splide__slide" image-id="' . $id . '">
                    <img src="image.php?id=' . $id . '">
                </li>';
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="buttons">
        <button class="button" onclick="location.href='index.php?id='+currentIndex;"><?php echo $translations->show?></button>
    </div>
</div>
