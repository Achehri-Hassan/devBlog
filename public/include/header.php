<?php

$currentPage = basename($_SERVER['SCRIPT_NAME']);

function navActive(string $page, string $current): string
{
  return $page === $current ? ' class="is-active" aria-current="page"' : '';
}
?>
<!-- Navigation -->
<header class="navbar" id="navbar">
  <a href="index.php" class="navbar__logo">News</a>

  <nav class="navbar__links" id="navLinks" aria-label="Main">
    <a href="index.php" <?= navActive('index.php', $currentPage) ?>>Home</a>
    <a href="index.php#articles" <?= navActive('article.php', $currentPage) ?>>Articles</a>
    <a href="admin/dashboard.php" <?= navActive('dashboard.php', $currentPage) ?>>Dashboard</a>
  </nav>

  <a href="login.php" class="navbar__login">Login</a>

  <button
    type="button"
    class="navbar__toggle"
    id="navToggle"
    aria-label="Open menu"
    aria-expanded="false"
    aria-controls="navLinks">
    <span class="navbar__bar"></span>
    <span class="navbar__bar"></span>
    <span class="navbar__bar"></span>
  </button>
</header>

<script src="assets/js/header.js" defer></script>