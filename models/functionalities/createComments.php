<?php

function createComments($data) {
    try {
        $sql = 'INSERT INTO comments (id_article, author, content, publication_date) VALUES (:ia, :a, :co, :pd)';
        $request = dbConnection()->prepare($sql);
        $request->execute($data);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}