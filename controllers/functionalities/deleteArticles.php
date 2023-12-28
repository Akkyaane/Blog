<?php

session_start();
require("../../models/db.php");
require("../../models/functionalities/deleteArticles.php");

$id = $_GET['deleteArticle'];
deleteArticles($id);
header("Location: ../index.php");