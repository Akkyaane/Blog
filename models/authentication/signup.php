<?php

function signup($data) {
    try {
        $sql = 'INSERT INTO users (username, email, password) VALUES (:u, :e, :p)';
        $request = dbConnection()->prepare($sql);
        $request->execute($data);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}