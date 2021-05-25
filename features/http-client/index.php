<?php

header("Content-type: application/json; charset=utf-8");

$responseContent = [
    'code' => 200,
    'message' => 'Hello, HTTP client',
];

echo json_encode($responseContent);
