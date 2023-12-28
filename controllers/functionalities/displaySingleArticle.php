<?php

session_start();
require("../../models/db.php");
require("../../models/functionalities/displaySingleArticle.php");
require("../../models/functionalities/displayComments.php");

$id = $_GET['readArticle'];
$data = displaySingleArticle($id);
$data2 = displayComments($id);

require("../../views/functionalities/displaySingleArticle.php");