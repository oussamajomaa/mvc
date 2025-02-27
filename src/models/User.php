<?php

class User {
    public static function getAllUsers($pdo) {
        $stmt = $pdo->prepare("SELECT * FROM utilisateur");
        $stmt->execute(); // Exécuter la requête
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Récupérer les résultats sous forme de tableau associatif
    }
}
