<?php
$host = 'mysql.railway.internal';
$port = '3306';
$username = 'root';
$password = 'ewZnDwxmdZzwsZoZwbNbLmwVoaYLMKhN';
$database = 'railway';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    http_response_code(500);
    echo "Erro na conexão: " . $e->getMessage();
    exit;
}
?>