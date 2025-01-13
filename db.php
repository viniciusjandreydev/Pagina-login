<?php
$host = 'meusqlsite.c7oewsgak7wr.sa-east-1.rds.amazonaws.com'; // Endereço do servidor MySQL (use 'localhost' se estiver rodando localmente)
$db = 'sistema-login'; // Nome do banco de dados
$user = 'admin'; // Nome de usuário do MySQL
$pass = 'ViniciusJH12'; // Senha do MySQL (deixe em branco se não houver senha)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>