<?php

function displayComments($id) {
    try {
        $sql = 'SELECT a.id, c.* FROM articles a INNER JOIN comments c ON a.id = c.id_article WHERE a.id = ?';
        $request = dbConnection()->prepare($sql);
        $request->bindParam(1, $id, PDO::PARAM_INT);
        $request->execute();
        $data = $request->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $data;
}