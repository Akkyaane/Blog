<?php

session_start();
require("../../models/db.php");
require("../../models/functionalities/deleteComments.php");

$id = $_GET['deleteComment'];
deleteComments($id);
header("Location: ../index.php");