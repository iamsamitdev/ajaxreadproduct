<?php

require_once  './vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'GET', 
    'http://localhost:81/stockrestapi/public/api/v1/products',
    [
        'headers' => [
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjEiLCJlbWFpbCI6InNhbWl0QGVtYWlsLmNvbSIsImlhdCI6MTY3ODg2MzYxOCwiZXhwIjoxNjc4ODY3MjE4fQ.nQELeFKu2EZxDI4_Ld2OSeMRFQKJ8uDI3zr516mrI1o'
        ]
    ]
);

echo "<pre>";
echo json_encode(json_decode($response->getBody()), JSON_PRETTY_PRINT);
echo "</pre>";