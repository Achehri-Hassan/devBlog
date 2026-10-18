<?php

header("Content-Type: application/json; charset=UTF-8");

require_once __DIR__ . "/../../src/models/Post.php";

try {
    if (!isset($_GET["id"]) || !is_numeric($_GET["id"]) || (int) $_GET["id"] < 1) {
        http_response_code(400);

        echo json_encode([
            "success" => false,
            "message" => "Valid article ID is required"
        ]);

        exit;
    }

    $id_article = (int) $_GET["id"];

    $articlesModel = new Articles();
    $article = $articlesModel->ReadById($id_article);

    if (!$article) {
        http_response_code(404);

        echo json_encode([
            "success" => false,
            "message" => "Article not found"
        ]);

        exit;
    }

    http_response_code(200);

    echo json_encode([
        "success" => true,
        "data" => $article
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

} catch (Throwable $e) {
    http_response_code(500);

    echo json_encode([
        "success" => false,
        "message" => "Internal server error"
    ], JSON_UNESCAPED_UNICODE);
}