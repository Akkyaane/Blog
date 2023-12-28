<?php

session_start();
require("../../models/db.php");
require("../../models/authentication/signup.php");

if (isset($_POST['submit'])) {
    $data = [':u' => $_POST['username'], ':e' => $_POST['email']];
    if ((count($data) != 2) || empty($_POST['password']) || empty($_POST['password_match'])) {
        echo "Un ou plusieurs champs sont vides. Veuillez recommencer.";
        echo "<br><button><a href='../../views/authentication/signup.php'>Retour</a></button>";
    } elseif ($_POST['password'] != $_POST['password_match']) {
        echo "Les mots de passe ne correspondent pas. Veuillez recommencer.";
        echo "<br><button><a href='../../views/authentication/signup.php'>Retour</a></button>";
    } else {
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $data[':p'] = $hash;
        signup($data);
        $_SESSION = ['id' => $data['id'], 'username' => $data['username'], 'email' => $data['email']];
        header("Location: ../index.php");
    }
} else {
    echo "Un problème est survenu. Veuillez recommencer.";
    echo "<br><button><a href='../../views/authentication/signup.php'>Retour</a></button>";
}