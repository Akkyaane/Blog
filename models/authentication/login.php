<?php

function login() {
    try {
        $sql = 'SELECT * FROM users WHERE username = ?';
        $request = dbConnection()->prepare($sql);
        $request->bindParam(1, $_POST['username'], PDO::PARAM_STR);
        $request->execute();
        $data = $request->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $data;
}