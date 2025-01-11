<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.html"); // Redireciona para a página de login se não estiver logado
    exit();
}

// Redirecionar para a página de portfólios
header("Location: portfolios.php");
exit();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>
    <a href="logout.php">Sair</a>
</body>
</html>