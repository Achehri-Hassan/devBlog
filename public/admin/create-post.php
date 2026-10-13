
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create New Article – Dashboard</title>
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
      <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>
      <span>DashBoard</span>
    </a>

    <nav class="menu" aria-label="Dashboard">
      <a href="dashboard.php" class="menu__link"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg> Home</a>
      <a href="#" class="menu__link"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="12" x2="12" y1="20" y2="10"/><line x1="18" x2="18" y1="20" y2="4"/><line x1="6" x2="6" y1="20" y2="16"/></svg> Analytics</a>
      <a href="createPost.php" class="menu__link is-active" aria-current="page"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><line x1="10" x2="8" y1="9" y2="9"/></svg> Articles</a>
      <a href="#" class="menu__link"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 21v-1a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v1"/></svg> Users</a>
      <a href="#" class="menu__link"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/></svg> Settings</a>
    </nav>

    <div class="keep">
      <span class="keep__icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg></span>
      <p>Create. Publish.<br>Make an impact.</p>
      <span class="keep__line"></span>
    </div>
  </aside>

  <!-- ================= Main ================= -->
  <div class="main">

  
    <!-- Banner -->
    <section class="banner">
      <span class="banner__icon" aria-hidden="true">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/></svg>
      </span>
      <div class="banner__text">
        <p class="banner__kicker">Articles</p>
        <h1>Create New Article</h1>
        <span>Share your knowledge, publish new content and keep your audience informed.</span>
      </div>
      <span class="banner__dots" aria-hidden="true"></span>
      <svg class="banner__art" viewBox="0 0 220 150" fill="none" stroke="#ff8a00" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M60 130H40a8 8 0 0 1-8-8V30a8 8 0 0 1 8-8h58l30 30v28"/>
        <path d="M98 22v30h30"/>
        <rect x="52" y="60" width="46" height="34" rx="6"/>
        <path d="M58 86l12-12 10 10 6-6 10 10" stroke-width="4"/>
        <circle cx="66" cy="70" r="3" fill="#ff8a00" stroke="none"/>
        <line x1="52" y1="108" x2="100" y2="108"/>
        <line x1="52" y1="120" x2="80" y2="120"/>
        <path d="M168 54l16 16-44 52-22 6 6-22z" fill="#fff"/>
        <path d="M156 66l16 16"/>
        <path d="M20 56l16 4M16 76l14 0M26 40l12 10"/>
        <path d="M160 30l8 10M180 24l-4 14M196 40l-12 6"/>
      </svg>
    </section>

    <!-- Form -->
    <form class="layout" method="post" action="createPost.php" enctype="multipart/form-data" novalidate id="articleForm">
      <input type="hidden" name="csrf" value="">

      

      <!-- LEFT column -->
      <div class="col col--left">
        <section class="card">
          <h2 class="card__title"><span class="card__bar"></span>
            <span class="chip"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/></svg></span>
            Article Information
          </h2>

          <!-- Title -->
          <div class="field">
            <label for="title">Title <b class="req">*</b></label>
            <div class="input">
              <svg class="input__icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/></svg>
              <input type="text" id="title" name="title" maxlength="255" placeholder="Enter article title..." value="" data-counter="titleCount" required>
            </div>
            <div class="field__foot">
              <span class="field__error"></span>
              <span class="counter"><span id="titleCount">0</span>/255</span>
            </div>
          </div>

          <!-- Description -->
          <div class="field ">
            <label for="description">Description <b class="req">*</b></label>
            <div class="input input--area">
              <svg class="input__icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4z"/></svg>
              <textarea id="description" name="description" rows="3" maxlength="1000" placeholder="Short description of the article..." data-counter="descCount" required></textarea>
            </div>
            <div class="field__foot">
              <span class="field__error"></span>
              <span class="counter"><span id="descCount">0</span>/1000</span>
            </div>
          </div>

          <!-- Content (rich text) -->
          <div class="field">
            <label id="contentLabel">Content <b class="req">*</b></label>
            <div class="editor">
              <div class="editor__bar" role="toolbar" aria-label="Text formatting">
                <button type="button" data-cmd="bold" title="Bold" aria-label="Bold"><b>B</b></button>
                <button type="button" data-cmd="italic" title="Italic" aria-label="Italic"><i>I</i></button>
                <button type="button" data-cmd="underline" title="Underline" aria-label="Underline"><u>U</u></button>
                <span class="sep"></span>
                <button type="button" data-cmd="createLink" title="Link" aria-label="Insert link"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></button>
                <span class="sep"></span>
                <button type="button" data-cmd="insertUnorderedList" title="Bulleted list" aria-label="Bulleted list"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="9" x2="20" y1="6" y2="6"/><line x1="9" x2="20" y1="12" y2="12"/><line x1="9" x2="20" y1="18" y2="18"/><circle cx="4.5" cy="6" r="1"/><circle cx="4.5" cy="12" r="1"/><circle cx="4.5" cy="18" r="1"/></svg></button>
                <button type="button" data-cmd="insertOrderedList" title="Numbered list" aria-label="Numbered list"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="10" x2="21" y1="6" y2="6"/><line x1="10" x2="21" y1="12" y2="12"/><line x1="10" x2="21" y1="18" y2="18"/><path d="M4 6h1v4"/><path d="M4 10h2"/><path d="M6 18H4c0-1 2-2 2-3s-1-1.5-2-1"/></svg></button>
                <span class="sep"></span>
                <button type="button" data-cmd="justifyLeft" title="Align left" aria-label="Align left"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="15" y1="12" y2="12"/><line x1="3" x2="18" y1="18" y2="18"/></svg></button>
                <button type="button" data-cmd="justifyCenter" title="Align center" aria-label="Align center"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="7" x2="17" y1="12" y2="12"/><line x1="5" x2="19" y1="18" y2="18"/></svg></button>
                <button type="button" data-cmd="justifyRight" title="Align right" aria-label="Align right"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="9" x2="21" y1="12" y2="12"/><line x1="6" x2="21" y1="18" y2="18"/></svg></button>
                <span class="sep"></span>
                <button type="button" data-cmd="removeFormat" title="Clear formatting" aria-label="Clear formatting"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7V4h16v3"/><path d="M9 20h6"/><path d="M12 4v7"/><path d="m16 15 5 5"/><path d="m21 15-5 5"/></svg></button>
              </div>
              <div class="editor__area" id="editor" contenteditable="true" role="textbox" aria-multiline="true" aria-labelledby="contentLabel" data-placeholder="Write your article content here..."></div>
              <textarea name="content" id="contentInput" hidden></textarea>
            </div>
            <div class="field__foot"><span class="field__error"></span></div>
          </div>
        </section>

        <div class="card actions">
          <a href="dashboard.php" class="btn btn--ghost">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="m12 19-7-7 7-7"/></svg> Cancel
          </a>
          <button type="submit" class="btn btn--primary">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 2-7 20-4-9-9-4z"/><path d="M22 2 11 13"/></svg> Publish Article
          </button>
        </div>
      </div>

      <!-- RIGHT column -->
      <div class="col col--right">

        <section class="card">
          <h2 class="card__title">
            <span class="chip chip--solid"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="3"/><circle cx="9" cy="9" r="1.5"/><path d="m21 15-5-5L5 21"/></svg></span>
            Featured Image
          </h2>

          <label class="drop" id="drop" for="image">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 14.9A7 7 0 1 1 15.7 8h1.8a4.5 4.5 0 0 1 2.5 8.2"/><path d="M12 12v9"/><path d="m16 16-4-4-4 4"/></svg>
            <span class="drop__main">Click to upload or drag and drop</span>
            <span class="drop__hint">PNG, JPG, WEBP (Max 2MB)</span>
          </label>
          <input type="file" id="image" name="image" accept="image/png,image/jpeg,image/webp" hidden>

          <div class="preview" id="preview" hidden>
            <img id="previewImg" alt="Featured image preview">
            <button type="button" class="preview__remove" id="removeImg" aria-label="Remove image">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
          </div>
          <p class="field__error" id="imageError"></p>
        </section>

        <section class="card">
          <h2 class="card__title">
            <span class="chip chip--plain"><svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M20.6 13.4 13.4 20.6a2 2 0 0 1-2.8 0L3 13V4h9l8.6 8.6a2 2 0 0 1 0 2.8zM7.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/></svg></span>
            Category
          </h2>
          <div class="field">
            <div class="select">
              <select name="category" id="category" aria-label="Category" required>
                <option value="" disabled >Select category...</option>
            
              </select>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
            </div>
            <span class="field__error"></span>
          </div>
        </section>

        <section class="card">
          <h2 class="card__title">
            <span class="chip chip--plain"><svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="7" r="4"/><path d="M4 21v-1a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v1z"/></svg></span>
            Admin
          </h2>
          <div class="input input--readonly">
            <svg class="input__icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 21v-1a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v1"/></svg>
            <input type="text" value="" readonly aria-label="Author">
          </div>
        </section>

      </div>
    </form>
  </div>

  <span class="blob" aria-hidden="true"></span>
</div>

</body>
</html>