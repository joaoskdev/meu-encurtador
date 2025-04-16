<?php
require 'db.php';

header('Content-Type: application/json');

// Verifica se recebeu uma URL
$data = json_decode(file_get_contents('php://input'), true);
$url = $data['url'] ?? null;

if (!$url) {
    http_response_code(400);
    echo json_encode(['erro' => 'URL não fornecida.']);
    exit;
}

// Gera código curto único
$codigo = substr(md5(uniqid(rand(), true)), 0, 6);

// Insere no banco
$stmt = $pdo->prepare("INSERT INTO links (codigo, url) VALUES (:codigo, :url)");
$stmt->execute(['codigo' => $codigo, 'url' => $url]);

echo json_encode(['codigo' => $codigo, 'link_encurtado' => $_SERVER['HTTP_HOST'] . '/' . $codigo]);
