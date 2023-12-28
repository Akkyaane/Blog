<?php

function deleteArticles($id) {
    try {
        $sql = "DELETE FROM articles where id = ?";
        $request = dbConnection()->prepare($sql);
        $request->bindParam(1, $id, PDO::PARAM_INT);
        $request->execute();
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}