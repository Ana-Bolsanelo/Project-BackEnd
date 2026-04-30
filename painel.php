<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
echo "Bem-vindo, ". $SESSION['usuario'];
?>
<a href="logout.php">Sair</a>
