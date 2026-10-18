
<?php

header("Content-Type: application/json; charset=UTF-8");

require_once __DIR__ . "/../../src/models/Post.php";

try {
    // Read JSON data
    $data = json_decode(file_get_contents("php://input"), true);

    if (!is_array($data)) {
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
        "admin_id",
        "category"
    ];

    foreach ($requiredFields as $field) {
        if (
            !isset($data[$field]) ||
            (is_string($data[$field]) && trim($data[$field]) === "")
        ) {
            http_response_code(400);

            echo json_encode([
                "success" => false,
                "message" => "$field is required"
            ]);

            exit;
        }
    }

    if (
        !is_numeric($data["admin_id"]) ||
        (int) $data["admin_id"] < 1
    ) {
        http_response_code(400);

        echo json_encode([
            "success" => false,
            "message" => "Invalid admin_id"
        ]);

        exit;
    }

    // Get article data
    $title = trim($data["title"]);
    $description = trim($data["description"]);
    $content = $data["content"];
    $image = $data["image"] ?? "";
    $admin_id = (int) $data["admin_id"];
    $category = trim($data["category"]);

    // Create article
    $articlesModel = new Articles();

    $created = $articlesModel->CreateArticle(
        $title,
        $description,
        $content,
        $image,
        $admin_id,
        $category
    );

    if (!$created) {
        http_response_code(500);

        echo json_encode([
            "success" => false,
            "message" => "Failed to create article"
        ]);

        exit;
    }

    http_response_code(201);

    echo json_encode([
        "success" => true,
        "message" => "Article created successfully"
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

} catch (Throwable $e) {
    http_response_code(500);

    echo json_encode([
        "success" => false,
        "message" => "Internal server error"
    ], JSON_UNESCAPED_UNICODE);
}
