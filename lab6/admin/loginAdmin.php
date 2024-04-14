<main class="main">
  <div class="container">
    <div class="main__inner">
      <div class="title-name">
        <h1 class="title">Escape.<span>author</span></h1>
        <p class="subtitle">Log in to start creating</p>
      </div>
      <div class="login--form">
        <div class="login--form__inner">
          <h2 class="form-title">Log In</h2>
          <div class="form_errors">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#E86961" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M12 8V12" stroke="#E86961" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M12 16H12.01" stroke="#E86961" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p class="error-text"></p>
          </div>

          <form name="login" class="login" method="POST" action="http://localhost:8001/admin">
            <div>
              <label for="Email">Email</label>
              <input type="text" id="Email" name="Email" require>
              <div class="error-form--text" data-error="Email">Email is required.</div>
            </div>
            <div class="password-form">
              <label for="Password">Password</label>
              <input type="password" id="Password" name="Password" autocomplete="off" require>
              <div class="error-form--text" data-error="Password">Password is required.</div>
              <div class="button--password">
                
                <svg class="closed-pass show" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="#2E2E2E" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#2E2E2E" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <svg class="opened-pass" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_1_861)">
                  <path d="M17.94 17.94C16.2306 19.243 14.1491 19.9649 12 20C5 20 1 12 1 12C2.24389 9.68192 3.96914 7.65663 6.06 6.06003M9.9 4.24002C10.5883 4.0789 11.2931 3.99836 12 4.00003C19 4.00003 23 12 23 12C22.393 13.1356 21.6691 14.2048 20.84 15.19M14.12 14.12C13.8454 14.4148 13.5141 14.6512 13.1462 14.8151C12.7782 14.9791 12.3809 15.0673 11.9781 15.0744C11.5753 15.0815 11.1752 15.0074 10.8016 14.8565C10.4281 14.7056 10.0887 14.4811 9.80385 14.1962C9.51897 13.9113 9.29439 13.572 9.14351 13.1984C8.99262 12.8249 8.91853 12.4247 8.92563 12.0219C8.93274 11.6191 9.02091 11.2219 9.18488 10.8539C9.34884 10.4859 9.58525 10.1547 9.88 9.88003" stroke="#2E2E2E" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M1 1L23 23" stroke="#2E2E2E" stroke-linecap="round" stroke-linejoin="round"/>
                  </g>
                  <defs>
                    <clipPath id="clip0_1_861">
                      <rect width="24" height="24" fill="white"/>
                    </clipPath>
                  </defs>
                </svg>

              </div>
            </div>
            <button type="submit" class="button-login">Log In</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<script type="module" src="./js/adminLogin.js"></script>