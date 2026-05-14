<?php
include 'conexao.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    $stmt = $conn->prepare("SELECT nome, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);

    $stmt->execute();

    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {

        $usuario = $resultado->fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {

            $_SESSION['usuario'] = $usuario['nome'];

            header("Location: painel.php");
            exit();

        } else {

            echo "Senha incorreta.";

        }

    } else {

        echo "Usuário não encontrado.";

    }

    $stmt->close();
}

$conn->close();
?>
