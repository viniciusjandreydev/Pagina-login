<?php
// conexao.php

$host = 'localhost'; // Endereço do servidor MySQL (use 'localhost' se estiver rodando localmente)
$db = 'sistema_login1'; // Nome do banco de dados
$user = 'root'; // Nome de usuário do MySQL
$pass = ''; // Senha do MySQL (deixe em branco se não houver senha)

// Criar conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida!";
?>