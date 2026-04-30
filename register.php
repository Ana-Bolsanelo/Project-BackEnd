<?php
include 'conexao.php';

$nome = "Usuário Teste";
$email = "usuario@email.com";
$senha = password_hash("123456", PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
if ($conn->query($sql) === TRUE) {
  echo "Usuário regsitrado com sucesso!";
} else {
  echo "Erro ao registrar usuário: " . $conn->error;
}

$conn->close();
?>
