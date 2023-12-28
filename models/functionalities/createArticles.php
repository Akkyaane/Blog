<?php

function createArticles($data) {
    try {
        $sql = 'INSERT INTO articles (author, category, title, content, publication_date) VALUES (:a, :ca, :t, :co, :pd)';
        $request = dbConnection()->prepare($sql);
        $request->execute($data);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}