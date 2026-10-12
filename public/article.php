<?php


require_once "../src/models/Post.php";


$calldArticle = new Articles();

$id_article = $_GET['id_article'] ?? 0;

$ReadById = $calldArticle->ReadById($id_article);

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
              src="assets/images/articles/<?= htmlspecialchars($ReadById["image"] ?? '') ?>"
              alt="<?= htmlspecialchars($ReadById["title"] ?? '') ?>">

            <p class="post__description">
              <?= htmlspecialchars($ReadById["description"] ?? '') ?>
            </p>

            <div class="post__content">
              <?= $ReadById["content"] ?? '' ?>
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

                <?php if ($related['id_article'] != $ReadById['id_article']): ?>

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
          <h2 class="bar-title bar-title--lg" id="commentsTitle">Comments (<span id="commentCount">2</span>)</h2>

          <ul class="comments__list" id="commentList">
            <li class="comment">
              <img class="avatar avatar--lg" src="assets/images/hassa.jpg" alt="">
              <div class="comment__body">
                <div class="comment__head"><strong>Ahmed Benali</strong><time datetime="2025-05-19T10:30">May 19, 2025 at 10:30 AM</time></div>
                <p>Very insightful article! AI is shaping our future in incredible ways.</p>
                <button type="button" class="comment__reply">Reply</button>
              </div>
            </li>
            <li class="comment">
              <img class="avatar avatar--lg" src="assets/images/hassa.jpg" alt="">
              <div class="comment__body">
                <div class="comment__head"><strong>Sara El Amrani</strong><time datetime="2025-05-19T11:45">May 19, 2025 at 11:45 AM</time></div>
                <p>I agree! Generative AI tools are already making a huge difference.</p>
                <button type="button" class="comment__reply">Reply</button>
              </div>
            </li>
          </ul>

          <form class="comment-form" id="commentForm">
            <h3>Leave a Comment</h3>
            <div class="comment-form__fields">
              <input type="text" id="cName" placeholder="Your Name" aria-label="Your Name" required>
              <textarea id="cText" placeholder="Your Comment" aria-label="Your Comment" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn-orange">Post Comment</button>
          </form>
        </section>

    </main>

    <!-- Newsletter -->
    <section class="newsletter" aria-labelledby="nlTitle">
      <div class="newsletter__icon" aria-hidden="true">
        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="4" width="20" height="16" rx="3"></rect>
          <polyline points="2 7 12 14 22 7"></polyline>
        </svg>
      </div>
      <div class="newsletter__text">
        <h2 id="nlTitle">Stay Updated</h2>
        <p>Subscribe to our newsletter and never miss an update.</p>
      </div>
      <form class="newsletter__form" onsubmit="return false">
        <input type="email" placeholder="Enter your email" aria-label="Enter your email" required>
        <button type="submit">Subscribe</button>
      </form>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <a href="index.html" class="footer__logo">News</a>
      <nav class="footer__links" aria-label="Footer">
        <a href="index.html">Home</a>
        <a href="index.html#articles">Articles</a>
        <a href="#">Dashboard</a>
        <a href="#">Login</a>
      </nav>
      <p>© 2025 News. All rights reserved.</p>
    </footer>

  </div>


</body>

</html>