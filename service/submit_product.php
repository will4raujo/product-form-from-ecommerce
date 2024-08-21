<?php
    phpinfo();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = 'https://url.example.com.br/api/products';
    $token = 'ZGV2ZWxvcGVyLXNlcnZlckBkZXZlbG9wZXI6ZGV2ZWxvcGVyLXNlcnZlckBkZXZlbG9wZXI='; // this is the base64 encoding of 'developer-server:developer' for example

    $productData = json_decode(file_get_contents('php://input'), true);
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Basic ' . $token,
        'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($productData));

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($response === false || $httpCode >= 400) {
        echo json_encode(['error' => curl_error($ch)]);
    } else {
        echo $response;
    }

    curl_close($ch);
}
?>