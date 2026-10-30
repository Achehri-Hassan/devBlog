<?php

header("Content-Type: application/json; charset=UTF-8");

require_once __DIR__ . "/../../src/models/Post.php";

try {
    // Only allow PUT requests
    if ($_SERVER["REQUEST_METHOD"] !== "PUT") {
        http_response_code(405);

        echo json_encode([
            "success" => false,
            "message" => "Method not allowed. Use PUT."
        ]);

        exit;
    }

    // Get article ID from URL
    if (
        !isset($_GET["id"]) ||
        !is_numeric($_GET["id"]) ||
        (int) $_GET["id"] < 1
    ) {
        http_response_code(400);

        echo json_encode([
            "success" => false,
            "message" => "Valid article ID is required"
        ]);

        exit;
    }

    $id_article = (int) $_GET["id"];

    // Read JSON body
    $input = json_decode(
        file_get_contents("php://input"),
        true
    );

    if (!is_array($input) || json_last_error() !== JSON_ERROR_NONE) {
        http_response_code(400);

        echo json_encode([
            "success" => false,
            "message" => "Invalid JSON data"
        ]);

        exit;
    }

    // Validate required fields
    $requiredFields = [
        "title",
        "description",
        "content",
        "image",
        "category"
    ];

    foreach ($requiredFields as $field) {
        if (
            !isset($input[$field]) ||
            !is_string($input[$field]) ||
            trim($input[$field]) === ""
        ) {
            http_response_code(400);

            echo json_encode([
                "success" => false,
                "message" => "Missing or invalid field: " . $field
            ]);

            exit;
        }
    }

    // Check if article exists
    $articlesModel = new Articles();
    $existingArticle = $articlesModel->ReadById($id_article);

    if (!$existingArticle) {
        http_response_code(404);

        echo json_encode([
            "success" => false,
            "message" => "Article not found"
        ]);

        exit;
    }

    // Update article using your existing method
    $result = $articlesModel->UpdateArticle(
        $id_article,
        trim($input["title"]),
        trim($input["description"]),
        trim($input["content"]),
        trim($input["image"]),
        trim($input["category"])
    );

    if ($result === false) {
        http_response_code(500);

        echo json_encode([
            "success" => false,
            "message" => "Failed to update article"
        ]);

        exit;
    }

    http_response_code(200);

    echo json_encode([
        "success" => true,
        "message" => "Article updated successfully",
        "data" => $articlesModel->ReadById($id_article)
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

} catch (Throwable $e) {
    http_response_code(500);

    echo json_encode([
        "success" => false,
        "message" => "Internal server error"
    ], JSON_UNESCAPED_UNICODE);
}
