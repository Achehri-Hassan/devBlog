
<?php

header("Content-Type: application/json; charset=UTF-8");

require_once __DIR__ . "/../../src/models/Post.php";

try {
    $articlesModel = new Articles();
    $articles = $articlesModel->ReadAll();

    http_response_code(200);

    echo json_encode([
        "success" => true,
        "data" => $articles
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

} catch (Throwable $e) {
    http_response_code(500);

    echo json_encode([
        "success" => false,
        "message" => "Internal server error"
    ], JSON_UNESCAPED_UNICODE);
}
