<?php
// Conexión insegura
$user = $_GET['username'];
$query = "SELECT * FROM accounts WHERE username = '" . $user . "'";
// El error está aquí: se concatena el texto directamente
$result = $conn->query($query);
?>