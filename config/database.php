<?php
$dsn = "mysql:host=localhost;dbname=manage_event;charset=utf8mb4";
$username = "osm";
$password = "osm";
try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo "failed";
}