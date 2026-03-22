<?php
// Conexión segura usando PDO y Prepared Statements
$user = $_GET['username'];
$stmt = $pdo->prepare('SELECT * FROM accounts WHERE username = :name');
$stmt->execute(['name' => $user]);
$user_data = $stmt->fetch();
// Aquí el input se trata como texto, no como código SQL
?>