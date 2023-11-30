<?php

//MAMP
try {
    $dbConnect = new PDO('mysql:host=localhost:8889; dbname=db_blog; charset=utf8', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>