<?php
include 'conexao.php';
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
  if (password_verify($sennha, $usuario['senha'])) {
      $_SESSION['usuario'] = $usuario['nome'];
      header("Location: painel.php");
  } else {
      echo "Senha incorreta.";
  }
} else {
  echo "Usuário não encontrado.";
}
?>
