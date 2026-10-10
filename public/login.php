<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login – DashBoard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main class="login">

    <!-- Right side: orange curved panel with illustration -->
    <div class="login__art" aria-hidden="true">
      <svg class="login__shape" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 0 H100 V100 H58 C22 86 2 70 12 56 C22 42 30 34 18 20 C12 12 4 6 0 0 Z"></path>
      </svg>
      <span class="dots dots--top"></span>
      <span class="dots dots--bottom"></span>
      <img class="login__illustration" src="assets/images/hero.jpg" alt="">
    </div>

    <!-- Left side: form -->
    <section class="login__panel">

      <a href="index.html" class="brand">
        <svg width="30" height="30" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path>
          <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
          <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0" fill="none"></path>
          <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5" fill="none"></path>
        </svg>
        <span>DashBoard</span>
      </a>

      <div class="login__content">
        <h1>Welcome Back,<br><span>Admin</span></h1>
        <p class="login__sub">Sign in to your account and continue managing your platform.</p>

        <form class="card" id="loginForm" novalidate>

          <div class="field" id="emailField">
            <svg class="field__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
            <div class="field__body">
              <label for="email">Email address</label>
              <input type="email" id="email" name="email" placeholder="admin@yourdomain.com" autocomplete="username" required>
            </div>
          </div>

          <div class="field" id="passwordField">
            <svg class="field__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
            <div class="field__body">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" placeholder="••••••••" autocomplete="current-password" required>
            </div>
            <button type="button" class="field__toggle" id="togglePw" aria-label="Show password" aria-pressed="false">
              <svg class="icon-eye-off" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path><path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path><path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path><line x1="2" x2="22" y1="2" y2="22"></line></svg>
              <svg class="icon-eye" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </button>
          </div>

          <p class="form-error" id="formError" role="alert" hidden></p>

          <div class="row">
            <label class="check">
              <input type="checkbox" name="remember" checked>
              <span class="check__box" aria-hidden="true">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
              </span>
              Remember me
            </label>
            <a href="#" class="forgot">Forget password?</a>
          </div>

          <button type="submit" class="btn btn--primary">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" x2="3" y1="12" y2="12"></line></svg>
            Login
          </button>
        </form>

        <div class="or"><span>or</span></div>

        <a href="#" class="btn btn--outline">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="4"></circle><path d="M4 21v-1a6 6 0 0 1 6-6h4a6 6 0 0 1 6 6v1z"></path></svg>
          Register as Admin
        </a>
      </div>

      <p class="secure">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
        Only authorized admins can access the dashboard.
      </p>

    </section>
  </main>


</body>
</html>