<?php
// conexao.php

$host = 'meusqlsite.c7oewsgak7wr.sa-east-1.rds.amazonaws.com'; // Endereço do servidor MySQL (use 'localhost' se estiver rodando localmente)
$db = 'sistema-login'; // Nome do banco de dados
$user = 'admin'; // Nome de usuário do MySQL
$pass = 'ViniciusJH12'; // Senha do MySQL (deixe em branco se não houver senha)

// Criar conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida!";
?>