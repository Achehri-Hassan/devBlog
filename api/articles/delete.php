
<?php

header("Content-Type: application/json; charset=UTF-8");

require_once __DIR__ . "/../../src/models/Post.php";

try {
    // Only allow DELETE requests
    if ($_SERVER["REQUEST_METHOD"] !== "DELETE") {
        http_response_code(405);

        echo json_encode([
            "success" => false,
            "message" => "Method not allowed. Use DELETE."
        ]);

        exit;
    }

    // Validate article ID
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

    $articlesModel = new Articles();

    // Check if article exists
    $article = $articlesModel->ReadById($id_article);

    if (!$article) {
        http_response_code(404);

        echo json_encode([
            "success" => false,
            "message" => "Article not found"
        ]);

        exit;
    }

    // Delete article using your existing method
    $result = $articlesModel->DeleteArticle($id_article);

    if ($result === false) {
        http_response_code(500);

        echo json_encode([
            "success" => false,
            "message" => "Failed to delete article"
        ]);

        exit;
    }

    http_response_code(200);

    echo json_encode([
        "success" => true,
        "message" => "Article deleted successfully",
        "id_article" => $id_article
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

} catch (Throwable $e) {
    http_response_code(500);

    echo json_encode([
        "success" => false,
        "message" => "Internal server error"
    ], JSON_UNESCAPED_UNICODE);
}
