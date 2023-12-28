<?php

function updateSingleUserData($data, $id) {
    try {
        $sql = 'UPDATE users SET username=:u, email=:e WHERE id=:id';
        $request = dbConnection()->prepare($sql);
        $request->bindParam(':u', $data[':u']);
        $request->bindParam(':e', $data[':e']);
        $request->bindParam(':id', $id, PDO::PARAM_INT);
        $request->execute();
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}