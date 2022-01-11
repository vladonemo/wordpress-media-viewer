<?php
require 'settings.php';
?>
<html>
<head>
    <title><?php echo $page_title ?></title>
    <link rel="stylesheet" href="styles.css">
    <link rel="manifest" href="/manifest.json">
</head>
<body>
<img class="img" src="image.php?id=<?php echo $_GET['id'] ?? 0 ?>"/>
<div class="buttons">
    <button class="button" onclick="location.href='slide.php';"><?php echo $translations->previous ?></button>
</div>
