<?php
$host = 'sql106.byethost10.com'; // Endereço do servidor MySQL (use 'localhost' se estiver rodando localmente)
$db = 'b10_38098931_sistemalogin'; // Nome do banco de dados
$user = 'b10_38098931'; // Nome de usuário do MySQL
$pass = 'ViniciusJH12'; // Senha do MySQL (deixe em branco se não houver senha)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>