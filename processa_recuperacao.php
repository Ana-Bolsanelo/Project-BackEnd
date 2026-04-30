<?php
include 'conexao.php';

$email = $_POST['email'];
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query(sql);

if ($result->num_rows > 0) {
  $nova_senha = substr(md5(time()), 0, 6); // Gera uma senha aleatória de 6 caracteres
  $senha_criptografada = password_hash($nova_senha, PASSWORD_DEFAULT);
  
  $sql_update = "UPDATE usuarios SET senha='$senha_criptografada 'WHERE email='$email'";
  if ($conn->query($sqlupdate) === TRUE) {
    echo "Nova senha gerada: $nova_senha (altere-a após o login)";
  } else {
    echo "E-mail não encontrado.";
  }

$conn->close();
  ?>
