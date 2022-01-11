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
        let currentIndex = 0;
        document.addEventListener('DOMContentLoaded', function () {
            const splide = new Splide('#image-slider', {}).mount();
            splide.on('moved', function(newIndex) {
                currentIndex = newIndex;
            })
            splide.on('click', function(slide) {
                location.href='index.php?id='+slide.index;
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
    <div class="buttons">
        <button class="button" onclick="location.href='index.php?id='+currentIndex;"><?php echo $translations->show?></button>
    </div>
</div>
