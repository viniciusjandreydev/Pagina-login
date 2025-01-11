<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_email = $_POST['usuario_email'];

    // Verifica se o usuário ou e-mail existe
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario OR email = :email");
    $stmt->execute(['usuario' => $usuario_email, 'email' => $usuario_email]);
    $usuarioEncontrado = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuarioEncontrado) {
        // Gera um token único
        $token = bin2hex(random_bytes(50));
        $stmt = $pdo->prepare("UPDATE usuarios SET token = :token WHERE id = :id");
        $stmt->execute(['token' => $token, 'id' => $usuarioEncontrado['id']]);

        // Envia e-mail com o link de redefinição de senha
        $link = "http://seusite.com/redefinir_senha.php?token=" . $token; // Altere para o seu domínio
        $to = $usuarioEncontrado['email'];
        $subject = "Redefinição de Senha";
        $message = "Clique no link para redefinir sua senha: " . $link;
        mail($to, $subject, $message); // Envia o e-mail

        echo "Um link de redefinição de senha foi enviado para seu e-mail.";
    } else {
        echo "Usuário ou e-mail não encontrado.";
    }
}
?>