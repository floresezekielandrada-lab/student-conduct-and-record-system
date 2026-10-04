<?php
$host = "localhost";
$db_name = "login_system";
$db_user = "root";
$db_pass = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db_name;charset=utf8mb4",
        $db_user,
        $db_pass
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Hindi kumonekta sa database: " . $e->getMessage());
}
?>