<?php
$host = 'localhost'; // ou o endereço do seu servidor
$db = 'sistema_login';
$user = 'seu_usuario'; // seu usuário do MySQL
$pass = 'sua_senha'; // sua senha do MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>