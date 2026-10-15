<?php

// No page here: the confirm alert is in dashboard.php. This file only deletes.

use Dom\Comment;

session_start();
if (!isset($_SESSION["is_admin"])) {
  header("Location: ../login.php");
  exit;
}

require_once __DIR__ . "/../../src/models/Post.php";
require_once __DIR__ . "/../../src/models/Comment.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: dashboard.php");
  exit;
}



$id = (int)($_POST["id_article"] ?? 0);
$articleObj = new Articles();
$delete_comment = new Comments();
$article = $id > 0 ? $articleObj->ReadById($id) : false;

if (!$article) {
  header("Location: dashboard.php");
  exit;
}

try {

  $delete_comment->DeleteComments($id);
  $articleObj->DeleteArticle($id);

  if (!empty($article["image"])) {
    @unlink(__DIR__ . "/../assets/images/articles/" . basename($article["image"]));
  }
  header("Location: dashboard.php");
  exit;
} catch (PDOException $e) {
  $_SESSION["flash_error"] = "Could not delete the article. " . $e->getMessage();
  header("Location: dashboard.php");
  exit;
}