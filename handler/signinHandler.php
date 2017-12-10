<?php
    session_start();
    $name = $_POST["name"];
    $password = $_POST["password"];

    if ($name=="user" && $password=="123456") {
        $_SESSION['log'] = 'user';
        header("Location: ../view/mainView/dashboard.php");
    } else if ($name=="admin" && $password=="123456") {
        $_SESSION['log'] = 'admin';
        header("Location: ../view/mainView/dashboard.php");
    } else {
        header("Location: ../view/mainView/signin.php");
    }

?>
