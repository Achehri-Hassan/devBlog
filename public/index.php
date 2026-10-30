<?php

require_once "../src/models/Post.php";

$callArticle = new Articles();
$articleRead = $callArticle->ReadAll();



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>News – Discover The Latest Stories</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/article.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/Animations.css">
</head>

<body>
  <section class="hero">

    <!-- Decorative elements -->
    <span class="dots dots--top-left" aria-hidden="true"></span>
    <span class="dots dots--bottom-left" aria-hidden="true"></span>
    <span class="dots dots--right" aria-hidden="true"></span>
    <span class="ring" aria-hidden="true"></span>

    <!-- Circular hero image -->
    <div class="hero__image">
      <img src="assets/images/hero.jpg" alt="Person reading articles on a laptop while sitting in a bean bag">
    </div>

    <!-- Navigation -->
    <?php require_once __DIR__ . '/include/header.php'; ?>

    <!-- Hero content -->
    <div class="hero__content">
      <h1>Discover The<br>Latest Stories</h1>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>

      <form class="search" role="search" onsubmit="return false">
        <input type="search" placeholder="Search Article" aria-label="Search Article">
        <button type="submit" aria-label="Search">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <circle cx="11" cy="11" r="7"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </button>
      </form>
    </div>

  </section>

  <section class="articles" id="articles">
    <div class="articles__inner">
      <div class="articles__head">
        <h2>Latest Article</h2>
        <a href="#" class="articles__all">View all Articles</a>
      </div>


      <div class="articles__grid">
        <?php foreach ($articleRead as $re): ?>
          <article class="card">
            <div class="card__media">
              <img src="assets/images/articles/<?= htmlspecialchars($re["image"]) ?>" alt="" loading="lazy">
              <span class="card__category"><?= htmlspecialchars($re["category"]) ?></span>
            </div>

            <div class="card__body">
              <time class="card__date" datetime="<?= date('Y-m-d', strtotime($re['created_at'])) ?>">
                <?= date("d M Y", strtotime($re["created_at"])) ?>
              </time>

              <h3 class="card__title">
                <a href="article.php?id_article=<?= (int) $re['id_article'] ?>">
                  <?= htmlspecialchars($re["description"]) ?>
                </a>
              </h3>

              <div class="card__foot">
                <span>Read more</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


    <!-- call footer -->
     <?php  include_once "include/footer.php" ?>


   
<script src="assets/js/animations.js" defer></script>
</body>

</html>