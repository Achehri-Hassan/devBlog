<?php


require_once __DIR__ . "/../../src/config/db.php";
require_once __DIR__ . "/../../src/models/Post.php";

session_start();
if (!isset($_SESSION["is_admin"])) {
    header("Location: ../login.php");
    exit;
}



$id = (int)($_GET["id"] ?? 0);

$articleObj = new Articles();
$article = $id > 0 ? $articleObj->ReadById($id) : false;

if (!$article) {
    header("Location: dashboard.php");
    exit;
}

$categories = ["Cybersecurity", "Web Design", "Technology", "Programming", "Database"];
$errors = [];


$title        = $article["title"];
$description  = $article["description"];
$content      = $article["content"];
$category     = $article["category"];
$currentImage = $article["image"] ?? "";
$uploadDir    = __DIR__ . "/../assets/images/articles/";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title       = trim($_POST["title"] ?? "");
    $description = trim($_POST["description"] ?? "");
    $content     = trim($_POST["content"] ?? "");
    $category    = trim($_POST["category"] ?? "");

    if (empty($title)) {
        $errors["title"] = "Title is required.";
    } elseif (mb_strlen($title) > 255) {
        $errors["title"] = "Title cannot exceed 255 characters.";
    }

    if (empty($description)) {
        $errors["description"] = "Description is required.";
    } elseif (mb_strlen($description) > 1000) {
        $errors["description"] = "Description cannot exceed 1000 characters.";
    }

    if (empty($content)) {
        $errors["content"] = "Content is required.";
    }

    if (empty($category) || !in_array($category, $categories, true)) {
        $errors["category"] = "Please select a valid category.";
    }

    // Image is optional here: if no new image, keep the old one
    $imageName = $currentImage;
    $newImage  = "";

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] !== UPLOAD_ERR_NO_FILE) {
        $file = $_FILES["image"];
        if ($file["error"] === UPLOAD_ERR_OK) {
            $allowedTypes = ['image/png', 'image/jpeg', 'image/webp'];
            $maxSize = 2 * 1024 * 1024; // 2MB
            $mime = mime_content_type($file["tmp_name"]);

            if (!in_array($mime, $allowedTypes, true)) {
                $errors["image"] = "Only PNG, JPG, and WEBP formats are allowed.";
            } elseif ($file["size"] > $maxSize) {
                $errors["image"] = "Image size must not exceed 2MB.";
            } else {
                $ext = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
                $newImage = uniqid("img_", true) . "." . $ext;

                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }

                if (move_uploaded_file($file["tmp_name"], $uploadDir . $newImage)) {
                    $imageName = $newImage;
                } else {
                    $errors["image"] = "Could not save the image on the server.";
                }
            }
        } else {
            $errors["image"] = "Error uploading image.";
        }
    }

    if (empty($errors)) {
        $result = $articleObj->UpdateArticle($id, $title, $description, $content, $imageName, $category);

        if ($result) {
            
            if ($newImage !== "" && $currentImage !== "") {
                @unlink($uploadDir . basename($currentImage));
            }
            header("Location: dashboard.php?updated=1");
            exit;
        } else {
            $errors["general"] = "Failed to update the article. Please try again.";
        }
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Article – Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/create.css">
</head>

<body>

    <div class="app">

        <!-- ================= Sidebar ================= -->
        <aside class="sidebar">
            <a href="dashboard.php" class="brand">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z" />
                    <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z" />
                    <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0" />
                    <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5" />
                </svg>
                <span>DashBoard</span>
            </a>

            <nav class="menu" aria-label="Dashboard">
                <a href="dashboard.php" class="menu__link"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg> Home</a>
                <a href="#" class="menu__link"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <line x1="12" x2="12" y1="20" y2="10" />
                        <line x1="18" x2="18" y1="20" y2="4" />
                        <line x1="6" x2="6" y1="20" y2="16" />
                    </svg> Analytics</a>
                <a href="create-post.php" class="menu__link is-active" aria-current="page"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z" />
                        <polyline points="14 2 14 8 20 8" />
                        <line x1="16" x2="8" y1="13" y2="13" />
                        <line x1="16" x2="8" y1="17" y2="17" />
                        <line x1="10" x2="8" y1="9" y2="9" />
                    </svg> Articles</a>
                <a href="#" class="menu__link"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="8" r="4" />
                        <path d="M4 21v-1a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v1" />
                    </svg> Users</a>
                <a href="#" class="menu__link"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                        <circle cx="12" cy="12" r="3" />
                    </svg> Settings</a>
            </nav>

            <div class="keep">
                <span class="keep__icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z" />
                        <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z" />
                        <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0" />
                        <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5" />
                    </svg></span>
                <p>Create. Publish.<br>Make an impact.</p>
                <span class="keep__line"></span>
            </div>
        </aside>

        <!-- ================= Main ================= -->
        <div class="main">


            <!-- Banner -->
            <section class="banner">
                <span class="banner__icon" aria-hidden="true">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z" />
                        <polyline points="14 2 14 8 20 8" />
                        <line x1="16" x2="8" y1="13" y2="13" />
                        <line x1="16" x2="8" y1="17" y2="17" />
                    </svg>
                </span>
                <div class="banner__text">
                    <p class="banner__kicker">Articles</p>
                    <h1>Edit Article</h1>
                    <span>Update the information, change the image or category, then save.</span>
                </div>
                <span class="banner__dots" aria-hidden="true"></span>
                <svg class="banner__art" viewBox="0 0 220 150" fill="none" stroke="#ff8a00" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M60 130H40a8 8 0 0 1-8-8V30a8 8 0 0 1 8-8h58l30 30v28" />
                    <path d="M98 22v30h30" />
                    <rect x="52" y="60" width="46" height="34" rx="6" />
                    <path d="M58 86l12-12 10 10 6-6 10 10" stroke-width="4" />
                    <circle cx="66" cy="70" r="3" fill="#ff8a00" stroke="none" />
                    <line x1="52" y1="108" x2="100" y2="108" />
                    <line x1="52" y1="120" x2="80" y2="120" />
                    <path d="M168 54l16 16-44 52-22 6 6-22z" fill="#fff" />
                    <path d="M156 66l16 16" />
                    <path d="M20 56l16 4M16 76l14 0M26 40l12 10" />
                    <path d="M160 30l8 10M180 24l-4 14M196 40l-12 6" />
                </svg>
            </section>

            <!-- Form -->
            <form class="layout" method="post" action="edite-post.php?id=<?= $id ?>" enctype="multipart/form-data" id="articleForm">

                <?php if (!empty($errors)): ?>
                    <div style="grid-column:1/-1;background:#fee2e2;color:#991b1b;padding:12px 16px;border-radius:10px;margin-bottom:12px">
                        <?php foreach ($errors as $err): ?>
                            <div><?= htmlspecialchars($err) ?></div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>



                <!-- LEFT column -->
                <div class="col col--left">
                    <section class="card">
                        <h2 class="card__title"><span class="card__bar"></span>
                            <span class="chip"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z" />
                                    <line x1="16" x2="8" y1="13" y2="13" />
                                    <line x1="16" x2="8" y1="17" y2="17" />
                                </svg></span>
                            Article Information
                        </h2>

                        <!-- Title -->
                        <div class="field">
                            <label for="title">Title <b class="req">*</b></label>
                            <div class="input">
                                <svg class="input__icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z" />
                                    <line x1="16" x2="8" y1="13" y2="13" />
                                    <line x1="16" x2="8" y1="17" y2="17" />
                                </svg>
                                <input type="text" id="title" name="title" maxlength="255" placeholder="Enter article title..." value="<?= htmlspecialchars($title) ?>" required>
                            </div>
                            <div class="field__foot">
                                <span class="field__error"></span>
                                <span class="counter">max 255</span>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="field ">
                            <label for="description">Description <b class="req">*</b></label>
                            <div class="input input--area">
                                <svg class="input__icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M12 20h9" />
                                    <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4z" />
                                </svg>
                                <textarea id="description" name="description" rows="3" maxlength="1000" placeholder="Short description of the article..." required><?= htmlspecialchars($description) ?></textarea>
                            </div>
                            <div class="field__foot">
                                <span class="field__error"></span>
                                <span class="counter">max 1000</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="field">
                            <label for="content">Content <b class="req">*</b></label>
                            <div class="input input--area">
                                <textarea id="content" name="content" rows="12" placeholder="Write your article content here..." required><?= htmlspecialchars($content) ?></textarea>
                            </div>
                            <div class="field__foot"><span class="field__error"></span></div>
                        </div>
                    </section>

                    <div class="card actions">
                        <a href="dashboard.php" class="btn btn--ghost">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 12H5" />
                                <path d="m12 19-7-7 7-7" />
                            </svg> Cancel
                        </a>
                        <button type="submit" class="btn btn--primary">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m22 2-7 20-4-9-9-4z" />
                                <path d="M22 2 11 13" />
                            </svg> Save Changes
                        </button>
                    </div>
                </div>

                <!-- RIGHT column -->
                <div class="col col--right">

                    <section class="card">
                        <h2 class="card__title">
                            <span class="chip chip--solid"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="3" />
                                    <circle cx="9" cy="9" r="1.5" />
                                    <path d="m21 15-5-5L5 21" />
                                </svg></span>
                            Featured Image
                        </h2>

                        <label class="drop" id="drop" for="image">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M4 14.9A7 7 0 1 1 15.7 8h1.8a4.5 4.5 0 0 1 2.5 8.2" />
                                <path d="M12 12v9" />
                                <path d="m16 16-4-4-4 4" />
                            </svg>
                            <span class="drop__main">Click to replace the image (optional)</span>
                            <span class="drop__hint">PNG, JPG, WEBP (Max 2MB)</span>
                        </label>
                        <input type="file" id="image" name="image" accept="image/png,image/jpeg,image/webp">
                        <?php if ($currentImage !== ""): ?>
                            <p style="margin:12px 0 4px;font-size:13px">Current image:</p>
                            <img src="../assets/images/articles/<?= htmlspecialchars(basename($currentImage)) ?>" alt="Current image" style="max-width:100%;border-radius:10px">
                        <?php endif; ?>
                        <p class="field__error" id="imageError"><?= htmlspecialchars($errors["image"] ?? "") ?></p>
                    </section>

                    <section class="card">
                        <h2 class="card__title">
                            <span class="chip chip--plain"><svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M20.6 13.4 13.4 20.6a2 2 0 0 1-2.8 0L3 13V4h9l8.6 8.6a2 2 0 0 1 0 2.8zM7.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                </svg></span>
                            Category
                        </h2>
                        <div class="field">
                            <div class="select">
                                <select name="category" id="category" aria-label="Category" required>
                                    <option value="" disabled <?= empty($category) ? "selected" : "" ?>>Select category...</option>
                                    <?php foreach ($categories as $cat): ?>
                                        <option value="<?= htmlspecialchars($cat) ?>" <?= $category === $cat ? "selected" : "" ?>><?= htmlspecialchars($cat) ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="m6 9 6 6 6-6" />
                                </svg>
                            </div>
                            <span class="field__error"></span>
                        </div>
                    </section>

                    <section class="card">
                        <h2 class="card__title">
                            <span class="chip chip--plain"><svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                                    <circle cx="12" cy="7" r="4" />
                                    <path d="M4 21v-1a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v1z" />
                                </svg></span>
                            Admin
                        </h2>
                        <div class="input input--readonly">
                            <svg class="input__icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="8" r="4" />
                                <path d="M4 21v-1a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v1" />
                            </svg>
                            <input type="text" value="<?= htmlspecialchars($_SESSION["admin_name"] ?? "Admin") ?>" readonly aria-label="Author">
                        </div>
                    </section>

                </div>
            </form>
        </div>

        <span class="blob" aria-hidden="true"></span>
    </div>
</body>

</html>