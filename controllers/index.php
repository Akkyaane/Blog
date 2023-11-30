<?php
session_start();

if (!$_SESSION) {
    header("Location: ../views/authentication/login/login.php");
} else {
    if ($_SESSION['role'] == 1) {
        header("Location: ../views/home.php");
    } elseif ($_SESSION['role'] == 2) {
        header("Location: ../views/home2.php");
}
}
?>