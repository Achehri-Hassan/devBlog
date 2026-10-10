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
        <article class="card">
          <a href="#" class="card__media" tabindex="-1" aria-hidden="true">
            <img src="assets/images/articles/article1.jpg" alt="" loading="lazy">
          </a>
          <div class="card__body">
            <span class="card__category">Technology</span>
            <h3 class="card__title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam neque quibusdam sint asperiores!</a></h3>
            <time class="card__date" datetime="2025-05-19">19 May 2025</time>
            <a href="#" class="card__link">Read More <svg class="arrow" width="28" height="12" viewBox="0 0 28 12" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="1" y1="6" x2="26" y2="6"></line><polyline points="21 1 26.5 6 21 11"></polyline></svg></a>
          </div>
        </article>

        <article class="card">
          <a href="#" class="card__media" tabindex="-1" aria-hidden="true">
            <img src="assets/images/articles/article2.jpg" alt="" loading="lazy">
          </a>
          <div class="card__body">
            <span class="card__category">Technology</span>
            <h3 class="card__title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam neque quibusdam sint asperiores!</a></h3>
            <time class="card__date" datetime="2025-05-19">19 May 2025</time>
            <a href="#" class="card__link">Read More <svg class="arrow" width="28" height="12" viewBox="0 0 28 12" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="1" y1="6" x2="26" y2="6"></line><polyline points="21 1 26.5 6 21 11"></polyline></svg></a>
          </div>
        </article>

        <article class="card">
          <a href="#" class="card__media" tabindex="-1" aria-hidden="true">
            <img src="assets/images/articles/article3.jpg" alt="" loading="lazy">
          </a>
          <div class="card__body">
            <span class="card__category">Technology</span>
            <h3 class="card__title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam neque quibusdam sint asperiores!</a></h3>
            <time class="card__date" datetime="2025-05-19">19 May 2025</time>
            <a href="#" class="card__link">Read More <svg class="arrow" width="28" height="12" viewBox="0 0 28 12" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="1" y1="6" x2="26" y2="6"></line><polyline points="21 1 26.5 6 21 11"></polyline></svg></a>
          </div>
        </article>

      </div>
    </div>
  </section>
  
</body>
</html>