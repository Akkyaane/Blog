<?php

session_start();
require("../../models/db.php");
require("../../models/functionalities/createComments.php");

$id = $_GET['createComment'];
if (isset($_POST['submit'])) {
    $currentDate = date('Y-m-d');
    $data = ['ia' => $id, ':a' => $_SESSION['username'], ':co' => $_POST['content'], ':pd' => $currentDate];
    if ((count($data) != 4)) {
        echo "Le champ est vide. Veuillez recommencer.";
        echo "<br><button><a href='../../views/functionalities/createComments.php'>Retour</a></button>";
    } else {
        createComments($data);
        header("Location: ../index.php");
    }
}

require("../../views/functionalities/createComments.php");