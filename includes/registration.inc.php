<h1>REGISTER</h1>
<?php
    if(isset($_POST['frmRegistration'])) {
        echo "Je viens du formulaire";
        $name = $_POST['name'] ?? "";
        $firstName = $_POST['firstName'] ?? "";
        $mail =  $_POST['mail'] ?? "";
        $password =  $_POST['password'] ?? "";
    } else {
        include "frmRegistration.php";
    }