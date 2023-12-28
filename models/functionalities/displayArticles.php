<?php

function displayArticles() {
    try {
        $sql = 'SELECT * FROM articles';
        $request = dbConnection()->prepare($sql);
        $request->execute();
        $data = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $data;
}