<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verifica se o usuário existe
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
    $stmt->execute(['usuario' => $usuario]);
    $usuarioEncontrado = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuarioEncontrado && password_verify($senha, $usuarioEncontrado['senha'])) {
        $_SESSION['usuario'] = $usuarioEncontrado['usuario'];
        header("Location: dashboard.php"); // Redireciona para a página inicial ou dashboard
        exit();
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>