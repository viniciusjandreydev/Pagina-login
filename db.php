<?php
$host = 'localhost'; // Endereço do servidor MySQL (use 'localhost' se estiver rodando localmente)
$db = 'sistema_login1'; // Nome do banco de dados
$user = 'root'; // Nome de usuário do MySQL
$pass = ''; // Senha do MySQL (deixe em branco se não houver senha)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>