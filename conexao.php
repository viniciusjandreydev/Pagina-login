<?php
// conexao.php

$host = 'sql106.byethost10.com'; // Endereço do servidor MySQL (use 'localhost' se estiver rodando localmente)
$db = 'b10_38098931_sistemalogin'; // Nome do banco de dados
$user = 'b10_38098931'; // Nome de usuário do MySQL
$pass = 'ViniciusJH12'; // Senha do MySQL (deixe em branco se não houver senha)

// Criar conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida!";
?>