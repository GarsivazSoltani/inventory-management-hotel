<?php
// Enable CORS if needed
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// Set response content type
header('Content-Type: application/json');

// Simple routing logic
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/ping':
        echo json_encode(["message" => "Pong"]);
        break;
    default:
        http_response_code(404);
        echo json_encode(["message" => "Not Found"]);
        break;
}
