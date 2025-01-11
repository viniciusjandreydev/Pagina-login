<?php
include 'db.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Verifica se o token é válido
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE token = :token");
    $stmt->execute(['token' => $token]);
    $usuarioEncontrado = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$usuarioEncontrado) {
        die("Token inválido.");
    }
} else {
    die("Token não fornecido.");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Redefinir Senha</title>
</head>
<body>
    <div class