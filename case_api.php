<?php
header('Content-Type: application/json');

function clean($v) {
    return htmlspecialchars(trim($v), ENT_QUOTES, 'UTF-8');
}

$name = clean($_POST['name'] ?? '');
$facts = clean($_POST['facts'] ?? '');

if (!$name || !$facts) {
    echo json_encode(['error' => 'Missing fields']);
    exit;
}

echo json_encode([
    'status' => 'ok',
    'message' => 'Case data received'
]);
