<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.html"); // Redireciona para a página de login se não estiver logado
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólios</title>
    <link rel="stylesheet" href="index.css"> <!-- Inclua seu CSS aqui -->
</head>
<body>
    <h1>Portfólios de <?php echo $_SESSION['usuario']; ?></h1>
    <div class="portfolio-container">
        <!-- Exemplo de portfólios -->
        <div class="portfolio-item">
            <h2>Portfólio 1</h2>
            <p>Descrição do portfólio 1.</p>
        </div>
        <div class="portfolio-item">
            <h2>Portfólio 2</h2>
            <p>Descrição do portfólio 2.</p>
        </div>
        <div class="portfolio-item">
            <h2>Portfólio 3</h2>
            <p>Descrição do portfólio 3.</p>
        </div>
    </div>
    <a href="logout.php">Sair</a> <!-- Link para logout -->
</body>
</html>