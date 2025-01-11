<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha

    // Verifica se o usuário já existe
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario OR email = :email");
    $stmt->execute(['usuario' => $usuario, 'email' => $email]);
    if ($stmt->rowCount() > 0) {
        echo "Usuário ou email já existe.";
    } else {
        // Insere o novo usuário
        $stmt = $pdo->prepare("INSERT INTO usuarios (usuario, email, senha) VALUES (:usuario, :email, :senha)");
        $stmt->execute(['usuario' => $usuario, 'email' => $email, 'senha' => $senha]);
        echo "Registro realizado com sucesso!";
    }
}
?>