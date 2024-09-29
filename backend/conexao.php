<?php
$host = 'localhost';
$dbname = 'GestaoDeServicos';
$username = 'postgres';
$password = 'root';

try {
    $pdo = new PDO("pgsql:host=$host;port=5432;dbname=$dbname", $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    die("Erro de conexão com o banco de dados: " . $e->getMessage());
}
