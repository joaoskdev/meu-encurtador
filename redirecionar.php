<?php
require 'db.php';

$codigo = $_GET['codigo'] ?? '';

if (!$codigo) {
    http_response_code(400);
    echo "Código não fornecido.";
    exit;
}

$stmt = $pdo->prepare("SELECT url FROM links WHERE codigo = :codigo");
$stmt->execute(['codigo' => $codigo]);

$link = $stmt->fetch(PDO::FETCH_ASSOC);

if ($link) {
    header("Location: " . $link['url']);
    exit;
} else {
    http_response_code(404);
    echo "Link não encontrado.";
}
