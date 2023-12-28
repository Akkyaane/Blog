<?php

function updateArticles($data, $id) {
    try {
        $sql = 'UPDATE articles SET author=:a, category=:ca, title=:t, content=:co, publication_date=:pd WHERE id=:id';
        $request = dbConnection()->prepare($sql);
        $request->bindParam(':a', $data[':a']);
        $request->bindParam(':ca', $data[':ca']);
        $request->bindParam(':t', $data[':t']);
        $request->bindParam(':co', $data[':co']);
        $request->bindParam(':pd', $data[':pd']);
        $request->bindParam(':id', $id, PDO::PARAM_INT);
        $request->execute();
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}