<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../../config/database.php';

class UserController {
    public function index($pdo) {
        $user = new User();
        $users = $user->getAllUsers($pdo);
        require_once __DIR__ . '/../views/user.php';
    }
}

// Instancier et exécuter le contrôleur
$controller = new UserController();
$controller->index($pdo);
