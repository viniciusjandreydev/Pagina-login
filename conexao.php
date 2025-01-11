<?php
// conexao.php

$host = 'localhost:80'; // Endereço do servidor MySQL
$db = 'pagina login'; // Nome do banco de dados
$user = 'root'; // Nome de usuário do MySQL
$pass = ''; // Senha do MySQL (deixe em branco se não houver senha)

// Criar conexão
$conn = new mysqli($host,  $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida!";
?>