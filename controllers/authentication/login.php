<?php

session_start();
require("../../models/db.php");
require("../../models/authentication/login.php");

if (isset($_POST['submit'])) {
    $data = login();
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo "Un ou plusieurs champs sont vides. Veuillez recommencer.";
        echo "<br><button><a href='../../views/authentication/login.php'>Retour</a></button>";
    } elseif ($_POST['username'] != $data['username']) {
        echo 'Aucun utilisateur trouvé avec ce pseudo. Veuillez recommencer.';
        echo "<br><button><a href='../../views/authentication/login.php'>Retour</a></button>";
    } elseif (!password_verify($_POST['password'], $data['password'])) {
        echo 'Le mot de passe est incorrect. Veuillez recommencer.';
        echo "<br><button><a href='../../views/authentication/login.php'>Retour</a></button>";
    } else {
        $_SESSION = ['id' => $data['id'], 'username' => $data['username'], 'email' => $data['email']];
        header("Location: ../index.php");
    }
} else {
    echo "Un problème est survenu. Veuillez recommencer.";
    echo "<br><button><a href='../../views/authentication/login.php'>Retour</a></button>";
}