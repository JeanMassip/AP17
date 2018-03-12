<?php
    include "./includes/header.php";
    $page = $_GET['page'] ?? "";
    $files = glob("./includes/*.inc.php");
    var_dump($files);
    include "./includes/$page.php";
    include "./includes/footer.php";