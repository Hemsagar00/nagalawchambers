<?php
header('Content-Type: application/json');

$ip = $_SERVER['REMOTE_ADDR'];
$limitFile = sys_get_temp_dir() . "/naga_rate_" . md5($ip);
$now = time();

if (file_exists($limitFile)) {
    $last = (int)file_get_contents($limitFile);
    if ($now - $last < 3) {
        http_response_code(429);
        echo json_encode(['error' => 'Rate limit exceeded']);
        exit;
    }
}
file_put_contents($limitFile, $now);

$input = json_decode(file_get_contents("php://input"), true);

if (!$input || !isset($input['prompt']) || strlen($input['prompt']) > 5000) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid input']);
    exit;
}

$apiKey = 'AIzaSyDf0KGImTbEwzwwZs4UT-Off5OO0xHEvuo';

$payload = json_encode([
    "contents" => [[ "parts" => [[ "text" => $input['prompt'] ]]]]
]);

$ch = curl_init("https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=$apiKey");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
