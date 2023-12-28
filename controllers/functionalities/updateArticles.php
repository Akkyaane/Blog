<?php

session_start();
require("../../models/db.php");
require("../../models/functionalities/displaySingleArticle.php");
require("../../models/functionalities/updateArticles.php");

$id = $_GET['updateArticle'];
$data = displaySingleArticle($id);

if (isset($_POST['submit'])) {
    $currentDate = date('Y-m-d');
    $data = [':a' => $_SESSION['username'], ':ca' => $_POST['category'], ':t' => $_POST['title'], ':co' => $_POST['content'], ':pd' => $currentDate];
    if ((count($data) != 5)) {
        echo "Un ou plusieurs champs sont vides. Veuillez recommencer.";
        echo "<br><button><a href='../../views/functionalities/updateArticles.php='$id'>Retour</a></button>";
    } else {
        updateArticles($data, $id);
        header("Location: ../index.php");
    }
}

require("../../views/functionalities/updateArticles.php");

