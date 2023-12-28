<?php

session_start();
require("../models/db.php");
require("../models/functionalities/displayArticles.php");

$data = displayArticles();

if (isset($_GET['signup'])) {
    header("Location: ../views/authentication/signup.php");
    exit();
}
if (isset($_GET['login'])) {
    header("Location: ../views/authentication/login.php");
    exit();
}
if (isset($_GET['logout'])) {
    header("Location: authentication/logout.php");
    exit();
}
if (isset($_GET['account'])) {
    $id = $_GET['account'];
    header("Location: functionalities/updateSingleUserData.php?account=$id");
    exit();
}
if (isset($_GET['createArticle'])) {
    header("Location: functionalities/createArticles.php");
    exit();
}
if (isset($_GET['readArticle'])) {
    $id = $_GET['readArticle'];
    header("Location: functionalities/displaySingleArticle.php?readArticle=$id");
    exit();
}
if (isset($_GET['updateArticle'])) {
    $id = $_GET['updateArticle'];
    header("Location: functionalities/updateArticles.php?updateArticle=$id");
    exit();
}
if (isset($_GET['deleteArticle'])) {
    header("Location: functionalities/createComments.php");
    exit();
}
if (isset($_GET['createComment'])) {
    $id = $_GET['createComment'];
    header("Location: functionalities/createComments.php?createComment=$id");
    exit();
}
if (isset($_GET['deleteComment'])) {
    $id = $_GET['deleteComment'];
    header("Location: functionalities/deleteComments.php?deleteComment=$id");
    exit();
}

require("../views/index.php");