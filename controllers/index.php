<?php

session_start();
if (!$_SESSION) {
    header("Location: ../views/authentication/login/login.php");
} else {
    header("Location: ../views/home.php");
}

?>