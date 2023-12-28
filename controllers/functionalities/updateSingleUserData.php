<?php

session_start();
require("../../models/db.php");
require("../../models/functionalities/displaySingleUserData.php");
require("../../models/functionalities/updateSingleUserData.php");

$id = $_GET['account'];
$data = displaySingleUserData($id);

if (isset($_POST['submit'])) {
    $data = [':u' => $_POST['username'], ':e' => $_POST['email']];
    if ((count($data) != 2)) {
        echo "Un ou plusieurs champs sont vides. Veuillez recommencer.";
        echo "<br><button><a href='../../views/functionalities/updateSingleUserData.php?account='$id'>Retour</a></button>";
    } else {
        updateSingleUserData($data, $id);
        header("Location: ../index.php");
    }
}

require("../../views/functionalities/updateSingleUserData.php");