<?php


require_once "../src/models/Post.php";
require_once "../src/models/Comment.php";


$calldArticle = new Articles();
$callComment = new Comments();

$id_article = $_GET['id_article'] ?? 0;

$ReadById = $calldArticle->ReadById($id_article);

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["send_comment"])) {

  $username = trim($_POST["username"] ?? '');
  $commentText = trim($_POST["comment"] ?? '');

  if (!$ReadById) {
    $error = "Article not found.";
  } elseif ($username !== '' && $commentText !== '') {
    $saved = $callComment->CreatComments(
      $username,
      $commentText,
      (int) $id_article,
      null
    );

    if ($saved) {
      header("Location: article.php?id_article=" . (int) $id_article . "#commentsTitle");
      exit();
    }

    $error = "Could not save your comment. Please try again.";
  } else {
    $error = "Please enter your name and comment.";
  }
}

$comments = $ReadById ? $callComment->ReadByArticleId((int) $id_article) : [];


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Future of Artificial Intelligence: Trends to Watch in 2025 – News</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/article.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/Animations.css">
</head>

<body class="article-page">
  <div class="page">

    <!-- Orange curved background behind the header -->
    <div class="page-bg" aria-hidden="true">
      <svg viewBox="0 0 1440 200" preserveAspectRatio="none" focusable="false">
        <path d="M0 0H1440V120C1200 200 1000 90 720 140C450 190 220 200 0 120Z" fill="#ff8a00" />
      </svg>
    </div>

    <!-- Decorative background -->
    <span class="rings rings--left-1" aria-hidden="true"></span>
    <span class="rings rings--left-2" aria-hidden="true"></span>
    <span class="big-ring" aria-hidden="true"></span>

    <!-- Navbar -->
    <?php require_once __DIR__ . '/include/header.php'; ?>

    <!-- Article -->
    <main class="article-card">
      <?php if ($ReadById): ?>
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="index.html">Home</a>
          <span aria-hidden="true">&gt;</span>
          <a href="index.html#articles">Articles</a>
          <span aria-hidden="true">&gt;</span>
          <span class="breadcrumb__current" aria-current="page">The Future of Artificial Intelligence: Trends to Watch in 2025</span>
        </nav>

        <div class="article-layout">

          <article class="post">

            <span class="post__category">
              <?= htmlspecialchars($ReadById["category"] ?? '') ?>
            </span>

            <h1 class="post__title">
              <?= htmlspecialchars($ReadById["title"] ?? '') ?>
            </h1>

            <div class="post__meta">
              <img
                class="avatar"
                src="assets/images/hassa.jpg"
                alt="Author">

              <span class="post__author">By Hassan</span>

              <span class="dot" aria-hidden="true"></span>

              <time datetime="<?= htmlspecialchars($ReadById["created_at"] ?? '') ?>">
                <?= !empty($ReadById["created_at"])
                  ? date("F d, Y", strtotime($ReadById["created_at"]))
                  : '' ?>
              </time>

              <span class="dot" aria-hidden="true"></span>

              <span>5 min read</span>
            </div>

            <img
              class="post__image"
              src="<?= htmlspecialchars(
                      !empty($ReadById["image"])
                        ? (preg_match('~^(https?://|/)~i', $ReadById["image"])
                          ? $ReadById["image"]
                          : 'assets/images/articles/' . ltrim($ReadById["image"], '/'))
                        : 'assets/images/hassa.jpg',
                      ENT_QUOTES,
                      'UTF-8'
                    ) ?>"
              alt="<?= htmlspecialchars($ReadById["title"] ?? '', ENT_QUOTES, 'UTF-8') ?>"
              onerror="this.onerror=null;this.src='assets/images/hassa.jpg';">

            <p class="post__description">
              <?= htmlspecialchars($ReadById["description"] ?? '') ?>
            </p>

            <div class="post__content">
              <?php
              // Decode content that was saved escaped (&lt;p&gt;), then allow only safe tags
              $postContent = html_entity_decode($ReadById["content"] ?? '', ENT_QUOTES, 'UTF-8');
              echo strip_tags($postContent, '<h2><h3><p><br><strong><em><b><i><ul><ol><li><a><blockquote>');
              ?>
            </div>

          </article>
        <?php else: ?>
          <p>Article not found.</p>
        <?php endif; ?>

        <aside class="sidebar">

          <section class="side-box share">
            <h2 class="share__title">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <circle cx="18" cy="5" r="3"></circle>
                <circle cx="6" cy="12" r="3"></circle>
                <circle cx="18" cy="19" r="3"></circle>
                <line x1="8.6" y1="13.5" x2="15.4" y2="17.5"></line>
                <line x1="15.4" y1="6.5" x2="8.6" y2="10.5"></line>
              </svg>
              Share this article
            </h2>
            <div class="share__icons">
              <a href="#" class="share__btn share__btn--facebook" aria-label="Share on Facebook">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a href="#" class="share__btn share__btn--twitter" aria-label="Share on Twitter">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a href="#" class="share__btn share__btn--linkedin" aria-label="Share on LinkedIn">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"></path>
                  <rect x="2" y="9" width="4" height="12"></rect>
                  <circle cx="4" cy="4" r="2"></circle>
                </svg>
              </a>
              <button type="button" class="share__btn share__btn--copy" aria-label="Copy link" id="copyLink">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <rect x="9" y="9" width="13" height="13" rx="2"></rect>
                  <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"></path>
                </svg>
              </button>
            </div>
          </section>
          <?php
          $relatedArticles = $calldArticle->ReadAll();
          ?>

          <section class="side-box related">
            <h2 class="bar-title">Related Articles</h2>

            <ul>
              <?php foreach ($relatedArticles as $related): ?>

                <?php if (!$ReadById || $related['id_article'] != $ReadById['id_article']): ?>

                  <li>
                    <a
                      href="article.php?id_article=<?= (int) $related['id_article'] ?>"
                      class="related__item">
                      <img
                        src="assets/images/articles/<?= htmlspecialchars($related['image'] ?? '') ?>"
                        alt="<?= htmlspecialchars($related['title']) ?>">

                      <span>
                        <strong>
                          <?= htmlspecialchars($related['title']) ?>
                        </strong>

                        <time datetime="<?= htmlspecialchars($related['created_at'] ?? '') ?>">
                          <?= !empty($related['created_at'])
                            ? date('M d, Y', strtotime($related['created_at']))
                            : '' ?>
                        </time>
                      </span>
                    </a>
                  </li>

                <?php endif; ?>

              <?php endforeach; ?>
            </ul>
          </section>


        </aside>
        </div>

        <!-- Comments -->
        <section class="comments" aria-labelledby="commentsTitle">
          <h2 class="bar-title bar-title--lg" id="commentsTitle">
            Comments (<?= count($comments) ?>)
          </h2>

          <?php if ($error !== ''): ?>
            <p class="comment-message comment-message--error"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
          <?php endif; ?>

          <ul class="comments__list" id="commentList">
            <?php if (empty($comments)): ?>
              <li class="comment-empty">No comments yet. Be the first to comment!</li>
            <?php else: ?>
              <?php foreach ($comments as $item): ?>
                <li class="comment">
                  <?php
                  $commentImage = !empty($item['image'])
                    ? $item['image']
                    : 'assets/images/hassa.jpg';
                  if (!preg_match('~^(https?://|/)~i', $commentImage)) {
                    $commentImage = 'assets/images/' . ltrim($commentImage, '/');
                  }
                  ?>
                  <img class="avatar avatar--lg"
                    src="<?= htmlspecialchars($commentImage, ENT_QUOTES, 'UTF-8') ?>"
                    alt=""
                    onerror="this.onerror=null;this.src='assets/images/hassa.jpg';">
                  <div class="comment__body">
                    <div class="comment__head">
                      <strong><?= htmlspecialchars($item['user_name'] ?? 'Anonymous', ENT_QUOTES, 'UTF-8') ?></strong>
                      <time datetime="<?= htmlspecialchars($item['created_at'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                        <?= !empty($item['created_at']) ? date('M d, Y \\a\\t h:i A', strtotime($item['created_at'])) : '' ?>
                      </time>
                    </div>
                    <p><?= nl2br(htmlspecialchars($item['content'] ?? '', ENT_QUOTES, 'UTF-8')) ?></p>
                  </div>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>

          <form class="comment-form" id="commentForm" method="POST"
            action="article.php?id_article=<?= (int) $id_article ?>#commentsTitle">
            <h3>Leave a Comment</h3>
            <div class="comment-form__fields">
              <input type="text" id="cName" name="username" placeholder="Your Name"
                aria-label="Your Name" maxlength="100" required>
              <textarea id="cText" name="comment" placeholder="Your Comment"
                aria-label="Your Comment" rows="3" maxlength="5000" required></textarea>
            </div>
            <button type="submit" class="btn-orange" name="send_comment" value="1">Post Comment</button>
          </form>
        </section>

    </main>

    
    <!-- call footer -->
     <?php  include_once "include/footer.php" ?>

  </div>

<script src="assets/js/animations.js" defer></script>
</body>

</html>