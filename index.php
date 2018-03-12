<?php
    include "./includes/header.php";
    $page = $_GET['page'] ?? "";
    include "./includes/$page.php";
    include "./includes/footer.php";