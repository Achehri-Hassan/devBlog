<?php

   session_start();
   


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard – Welcome back, Hassan</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>
<body>

  <!-- Shared gradient used by the small charts -->
  <svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
    <defs>
      <linearGradient id="sparkGrad" x1="0" y1="0" x2="0" y2="1">
        <stop offset="0" stop-color="#ff8a00" stop-opacity=".30"/>
        <stop offset="1" stop-color="#ff8a00" stop-opacity="0"/>
      </linearGradient>
    </defs>
  </svg>

  <div class="app">

    <!-- ================= Sidebar ================= -->
    <aside class="sidebar">
      <a href="dashboard.html" class="brand">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" fill="currentColor"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>
        <span>DashBoard</span>
      </a>

      <nav class="menu" aria-label="Dashboard">
        <a href="../index.php" class="menu__link is-active" aria-current="page"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg> Home</a>
        <a href="#" class="menu__link"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" x2="12" y1="20" y2="10"/><line x1="18" x2="18" y1="20" y2="4"/><line x1="6" x2="6" y1="20" y2="16"/></svg> Analytics</a>
        <a href="index.html#articles" class="menu__link"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><line x1="10" x2="8" y1="9" y2="9"/></svg> Articles</a>
        <a href="#" class="menu__link"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 21v-1a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v1"/></svg> Users</a>
        <a href="#" class="menu__link"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg> Settings</a>
      </nav>

      <div class="keep">
        <span class="keep__icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg></span>
        <h3>Keep going!</h3>
        <p>Great things take time.</p>
        <span class="keep__line"></span>
      </div>
    </aside>

    <!-- ================= Main ================= -->
    <div class="main">

      <!-- Top bar -->
      <header class="topbar">
        <label class="search">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
          <input type="search" placeholder="Search anything..." aria-label="Search anything">
        </label>

        <div class="topbar__right">
          <button type="button" class="bell" aria-label="Notifications (new)">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg><span class="bell__dot"></span>
          </button>
          <a href="#" class="user">
            <img src="../assets/images/hassa.jpg" alt="">
            <span>Hassan Achehri</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
          </a>
        </div>
      </header>

      <!-- Welcome banner -->
      <section class="banner">
        <span class="banner__orange" aria-hidden="true"></span>
        <span class="banner__dots banner__dots--tl" aria-hidden="true"></span>
        <span class="banner__dots banner__dots--tr" aria-hidden="true"></span>
        <span class="banner__ring" aria-hidden="true"></span>
        <img class="banner__img" src="../assets/images/hero.jpg" alt="">
        <div class="banner__text">
          <p>Welcome back,</p>
          <h1><?= $_SESSION["is_admin"] ?></h1>
          <span>Here's what's happening with your platform today.</span>
        </div>
      </section>

      <!-- Stats -->
      <section class="stats" aria-label="Key numbers">
        <article class="stat">
          <span class="stat__icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><line x1="10" x2="8" y1="9" y2="9"/></svg></span>
          <h3>Total Articles</h3>
          <p class="stat__value">24</p>
          <p class="stat__change"><span class="up"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 19V5"/><path d="m5 12 7-7 7 7"/></svg> +12%</span> <small>vs last week</small></p>
          <svg class="spark" viewBox="0 0 90 34" aria-hidden="true"><polygon points="1.0,31.0 12.0,25.8 23.0,28.4 34.0,20.6 45.0,21.9 56.0,15.4 67.0,16.7 78.0,8.9 89.0,5.0 89.0,34 1.0,34" fill="url(#sparkGrad)"/><polyline points="1.0,31.0 12.0,25.8 23.0,28.4 34.0,20.6 45.0,21.9 56.0,15.4 67.0,16.7 78.0,8.9 89.0,5.0" class="spark__line"/></svg>
        </article>
        <article class="stat">
          <span class="stat__icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 21v-1a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v1"/></svg></span>
          <h3>Total Users</h3>
          <p class="stat__value">1,248</p>
          <p class="stat__change"><span class="up"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 19V5"/><path d="m5 12 7-7 7 7"/></svg> +8%</span> <small>vs last week</small></p>
          <svg class="spark" viewBox="0 0 90 34" aria-hidden="true"><polygon points="1.0,31.0 12.0,25.2 23.0,28.1 34.0,20.9 45.0,23.8 56.0,15.1 67.0,10.8 78.0,12.2 89.0,5.0 89.0,34 1.0,34" fill="url(#sparkGrad)"/><polyline points="1.0,31.0 12.0,25.2 23.0,28.1 34.0,20.9 45.0,23.8 56.0,15.1 67.0,10.8 78.0,12.2 89.0,5.0" class="spark__line"/></svg>
        </article>
        <article class="stat">
          <span class="stat__icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg></span>
          <h3>Page Views</h3>
          <p class="stat__value">8,532</p>
          <p class="stat__change"><span class="up"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 19V5"/><path d="m5 12 7-7 7 7"/></svg> +16%</span> <small>vs last week</small></p>
          <svg class="spark" viewBox="0 0 90 34" aria-hidden="true"><polygon points="1.0,28.4 12.0,31.0 23.0,23.2 34.0,25.8 45.0,18.0 56.0,20.6 67.0,12.8 78.0,14.1 89.0,5.0 89.0,34 1.0,34" fill="url(#sparkGrad)"/><polyline points="1.0,28.4 12.0,31.0 23.0,23.2 34.0,25.8 45.0,18.0 56.0,20.6 67.0,12.8 78.0,14.1 89.0,5.0" class="spark__line"/></svg>
        </article>
        <article class="stat">
          <span class="stat__icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></span>
          <h3>Comments</h3>
          <p class="stat__value">342</p>
          <p class="stat__change"><span class="up"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 19V5"/><path d="m5 12 7-7 7 7"/></svg> +9%</span> <small>vs last week</small></p>
          <svg class="spark" viewBox="0 0 90 34" aria-hidden="true"><polygon points="1.0,31.0 12.0,23.8 23.0,29.6 34.0,20.9 45.0,22.3 56.0,13.7 67.0,18.0 78.0,9.3 89.0,5.0 89.0,34 1.0,34" fill="url(#sparkGrad)"/><polyline points="1.0,31.0 12.0,23.8 23.0,29.6 34.0,20.9 45.0,22.3 56.0,13.7 67.0,18.0 78.0,9.3 89.0,5.0" class="spark__line"/></svg>
        </article>
      </section>

      <!-- Analytics + Recent -->
      <div class="grid">

        <section class="card analytics">
          <div class="card__head">
            <h2 class="bar-title">Analytics Overview</h2>
            <label class="select">
              <span class="visually-hidden">Date range</span>
              <select>
                <option>Last 7 days</option>
                <option>Last 30 days</option>
                <option>Last 90 days</option>
              </select>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
            </label>
          </div>

          <svg class="chart" viewBox="0 0 620 226" role="img" aria-label="Line chart of page views from May 14 to May 20, rising from about 40 to about 146">
            <defs>
              <linearGradient id="areaGrad" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0" stop-color="#ff8a00" stop-opacity=".38"/>
                <stop offset="1" stop-color="#ff8a00" stop-opacity=".03"/>
              </linearGradient>
            </defs>
            <line x1="44" x2="610" y1="190.0" y2="190.0" class="c-grid"/><text x="36" y="194.0" class="c-label" text-anchor="end">0</text><line x1="44" x2="610" y1="145.0" y2="145.0" class="c-grid"/><text x="36" y="149.0" class="c-label" text-anchor="end">50</text><line x1="44" x2="610" y1="100.0" y2="100.0" class="c-grid"/><text x="36" y="104.0" class="c-label" text-anchor="end">100</text><line x1="44" x2="610" y1="55.0" y2="55.0" class="c-grid"/><text x="36" y="59.0" class="c-label" text-anchor="end">150</text><line x1="44" x2="610" y1="10.0" y2="10.0" class="c-grid"/><text x="36" y="14.0" class="c-label" text-anchor="end">200</text>
            <path d="M50.0,154.0 C75.9,142.3 88.2,128.0 140.0,113.5 C191.8,99.0 178.2,102.8 230.0,103.6 C281.8,104.4 268.2,120.3 320.0,116.2 C371.8,112.1 358.2,95.2 410.0,89.2 C461.8,83.2 448.2,104.3 500.0,95.5 C551.8,86.7 564.1,69.2 590.0,58.6 L590.0,190 L50.0,190 Z" fill="url(#areaGrad)"/>
            <path d="M50.0,154.0 C75.9,142.3 88.2,128.0 140.0,113.5 C191.8,99.0 178.2,102.8 230.0,103.6 C281.8,104.4 268.2,120.3 320.0,116.2 C371.8,112.1 358.2,95.2 410.0,89.2 C461.8,83.2 448.2,104.3 500.0,95.5 C551.8,86.7 564.1,69.2 590.0,58.6" class="c-line"/>
            <circle cx="50.0" cy="154.0" r="4" class="c-dot"/><circle cx="140.0" cy="113.5" r="4" class="c-dot"/><circle cx="230.0" cy="103.6" r="4" class="c-dot"/><circle cx="320.0" cy="116.2" r="4" class="c-dot"/><circle cx="410.0" cy="89.2" r="4" class="c-dot"/><circle cx="500.0" cy="95.5" r="4" class="c-dot"/><circle cx="590.0" cy="58.6" r="4" class="c-dot"/>
            <text x="50" y="214" class="c-label" text-anchor="middle">May 14</text><text x="140" y="214" class="c-label" text-anchor="middle">May 15</text><text x="230" y="214" class="c-label" text-anchor="middle">May 16</text><text x="320" y="214" class="c-label" text-anchor="middle">May 17</text><text x="410" y="214" class="c-label" text-anchor="middle">May 18</text><text x="500" y="214" class="c-label" text-anchor="middle">May 19</text><text x="590" y="214" class="c-label" text-anchor="middle">May 20</text>
          </svg>

          <h3 class="quick__title"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" fill="currentColor"><path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"/></svg> Quick Actions</h3>
          <div class="quick">
          <a href="#" class="action"><span class="action__icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="12" x2="12" y1="18" y2="12"/><line x1="9" x2="15" y1="15" y2="15"/></svg></span><span class="action__label">Add Article</span><span class="action__arrow"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span></a>
          <a href="#" class="action"><span class="action__icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span><span class="action__label">Manage Users</span><span class="action__arrow"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span></a>
          <a href="#" class="action"><span class="action__icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" x2="12" y1="20" y2="10"/><line x1="18" x2="18" y1="20" y2="4"/><line x1="6" x2="6" y1="20" y2="16"/></svg></span><span class="action__label">View Analytics</span><span class="action__arrow"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span></a>
          <a href="#" class="action"><span class="action__icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg></span><span class="action__label">Settings</span><span class="action__arrow"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span></a>
          </div>
        </section>

        <section class="card recent">
          <div class="card__head">
            <h2 class="bar-title">Recent Articles</h2>
            <a href="index.html#articles" class="view-all">View all</a>
          </div>
          <ul>
          <li class="recent__item">
            <img src="../assets/images/articles/article3.jpg" alt="" loading="lazy">
            <div class="recent__text">
              <a href="article.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
              <time>19 May 2025</time>
            </div>
            <span class="tag">Technology</span>
            <button class="kebab" type="button" aria-label="More options"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><circle cx="12" cy="5" r="1.8"/><circle cx="12" cy="12" r="1.8"/><circle cx="12" cy="19" r="1.8"/></svg></button>
          </li>
          <li class="recent__item">
            <img src="../assets/images/articles/article2.jpg" alt="" loading="lazy">
            <div class="recent__text">
              <a href="article.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
              <time>18 May 2025</time>
            </div>
            <span class="tag">Business</span>
            <button class="kebab" type="button" aria-label="More options"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><circle cx="12" cy="5" r="1.8"/><circle cx="12" cy="12" r="1.8"/><circle cx="12" cy="19" r="1.8"/></svg></button>
          </li>
          <li class="recent__item">
            <img src="../assets/images/articles/article1.jpg" alt="" loading="lazy">
            <div class="recent__text">
              <a href="article.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
              <time>17 May 2025</time>
            </div>
            <span class="tag">Design</span>
            <button class="kebab" type="button" aria-label="More options"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><circle cx="12" cy="5" r="1.8"/><circle cx="12" cy="12" r="1.8"/><circle cx="12" cy="19" r="1.8"/></svg></button>
          </li>
         
          </ul>
        </section>
      </div>

      <!-- Bottom banner -->
      <section class="success">
        <span class="success__plant"><svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 20h10"/><path d="M10 20c5.5-2.5.8-6.4 3-10"/><path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z"/><path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z"/></svg></span>
        <div class="success__text">
          <h3>Success is a journey, not a destination.</h3>
          <p>Keep building, keep growing.</p>
        </div>
        <span class="success__arrow"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></span>
        <svg class="success__mountain" width="84" height="64" viewBox="0 0 84 64" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M2 60 30 22l12 16 10-12 30 34z" fill="rgba(255,138,0,.18)"/>
          <path d="M52 26V6"/><path d="M52 6l14 5-14 5z" fill="currentColor"/>
        </svg>
      </section>

    </div>
  </div>
</body>
</html>