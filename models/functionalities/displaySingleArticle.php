<?php

function displaySingleArticle($id) {
    try {
        $sql = 'SELECT * FROM articles where id = ?';
        $request = dbConnection()->prepare($sql);
        $request->bindParam(1, $id, PDO::PARAM_INT);
        $request->execute();
        $data = $request->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $data;
}