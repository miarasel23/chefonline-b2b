<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Digital Marketing for Restaurants & SEO Services UK</title>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- NOTE: This link won't load a .ttf. Keep for now since you didn't ask here. -->
  <link href="assets/fonts/grift-variable.ttf" rel="stylesheet">

  <style>
    :root {
      --red: #ef233c;
      --red-dark: #d90429;
      --text: #0f172a;
      --muted: #475569;
      --card: #ffffff;
      --border: #C8C8C8;
      --shadow: 0 18px 45px rgba(15, 23, 42, .12);
      --radius: 18px;
    }

    * {
      box-sizing: border-box;
      /* font-family: 'Grift', sans-serif !important; */
    }

    body {
      margin: 0;
      font-family: 'Grift', sans-serif !important;
      color: var(--text);
      background: #fff;
    }

    .hero {
      position: relative;
      overflow: hidden;
      padding: 56px 20px;
      min-height: 70vh;
      display: flex;
      align-items: center;
      background-image: url('assets/images/digital-marketing/hero-bg.png');
      background-size: cover;
      background-repeat: no-repeat;
    }

    .hero::before {
      content: "";
      position: absolute;
      inset: -140px -240px -140px -240px;
      background:
        radial-gradient(800px 480px at 18% 55%, rgba(0, 0, 0, 0.06), transparent 65%),
        radial-gradient(900px 520px at 85% 55%, rgba(0, 0, 0, 0.07), transparent 62%),
        radial-gradient(700px 420px at 50% 110%, rgba(0, 0, 0, 0.05), transparent 60%);
      opacity: .6;
      pointer-events: none;
    }

    .hero::after {
      content: "";
      position: absolute;
      inset: 0;
      background:
        url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 700'%3E%3Cpath d='M0,560 C260,430 420,720 730,565 C970,445 1160,580 1600,410 L1600,700 L0,700 Z' fill='%23000000' opacity='0.035'/%3E%3Cpath d='M0,620 C300,470 520,750 820,590 C1040,470 1260,610 1600,460 L1600,700 L0,700 Z' fill='%23000000' opacity='0.03'/%3E%3C/svg%3E") center / cover no-repeat;
      opacity: .7;
      pointer-events: none;
      mix-blend-mode: multiply;
    }

    .hero__inner {
      position: relative;
      width: min(1200px, 100%);
      margin: 0 auto;
      display: flex;
      align-items: center;
      gap: 56px;
    }

    .hero__copy {
      flex: 1;
      padding: 10px 10px 10px 0;
    }

    .hero__copy h1 {
      margin: 0 0 18px;
      line-height: 1.05;
      text-transform: capitalize;
      font-size: clamp(45px, 3.6vw, 54px);
      font-family: 'Grift', sans-serif !important;
      font-weight: 800;
      color: #090909;
    }

    .hero__copy .accent {
      color: var(--red);
      font-weight: 800;
      display: inline-block;
      font-size: clamp(45px, 1.6vw, 54px);
      font-family: 'Grift', sans-serif !important;
    }

    .hero__copy p {
      margin: 0;
      max-width: 52ch;
      color: var(--muted);
      font-size: 16px;
      line-height: 1.6;
      font-family: 'Grift', sans-serif !important;
      font-weight: 600;
    }

    .hero__cardWrap {
      flex: 1;
      display: flex;
      justify-content: flex-end;
    }

    .card {
      width: min(520px, 100%);
      background: var(--card);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 32px 34px;
    }

    .card__title {
      text-align: center;
      font-size: 26px;
      font-family: 'Grift', sans-serif !important;
      font-weight: 800;
      margin: 4px 0 22px;
      letter-spacing: -0.01em;
    }

    .card__title .brand {
      color: var(--red);
      font-family: 'Grift', sans-serif !important;
    }

    .fields {
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-top: 10px;
    }

    .field {
      position: relative;
      display: flex;
      align-items: center;
      height: 46px;
      border: 1px solid var(--border);
      border-radius: 10px;
      background: #fff;
      padding-left: 44px;
      transition: border-color .15s ease, box-shadow .15s ease;
    }

    .field:focus-within {
      border-color: rgba(239, 35, 60, .45);
      box-shadow: 0 0 0 4px rgba(239, 35, 60, .10);
    }

    .field img {
      position: absolute;
      left: 14px;
      width: 18px;
      height: 18px;
      opacity: .95;
    }

    .field input {
      width: 100%;
      height: 100%;
      border: 0;
      outline: 0;
      padding: 0 14px 0 0;
      font-size: 14px;
      color: var(--text);
      background: transparent;
      font-family: 'Grift', sans-serif !important;
    }

    .field input::placeholder {
      color: #94a3b8;
      font-weight: 600;
    }

    .btn {
      margin-top: 20px;
      width: 100%;
      height: 52px;
      border: 0;
      border-radius: 10px;
      background: var(--red);
      color: #fff;
      font-weight: 800;
      font-size: 16px !important;
      cursor: pointer;
      box-shadow: 0 10px 20px rgba(239, 35, 60, .25);
      transition: filter .15s ease, background-color .15s ease;
    }

    .btn:hover {
      filter: brightness(0.98);
      background-color: var(--red-dark);
      color: white;
    }

    /* ✅ FIX: error messages now show when text exists */
    .error,
    .warning-message {
      font-size: 13px;
      margin-top: 6px;
      margin-bottom: 8px;
      color: #e11d48;
      font-weight: 600;
      display: block;
    }

    .error:empty,
    .warning-message:empty {
      display: none;
    }

    .field.invalid {
      border: 1px solid #e11d48;
      box-shadow: 0 0 0 3px rgba(225, 29, 72, .10);
    }

    @media(max-width: 980px) {
      .hero {
        padding: 44px 18px;
      }

      .hero__inner {
        flex-direction: column;
        align-items: stretch;
        gap: 26px;
      }

      .hero__cardWrap {
        justify-content: stretch;
      }

      .card {
        width: 100%;
      }

      .hero__copy h1 {
        font-size: clamp(32px, 3.6vw, 54px);
      }

      .hero__copy .accent {
        font-size: clamp(27px, 3.6vw, 54px);
      }

      .field input {
        font-size: 13px !important;
      }

      .hero__copy p {
        font-size: 14px;
      }
    }
  </style>
</head>

<body>
  <section class="hero" id="partner-form">
    <div class="hero__inner">
      <div class="hero__copy">
        <h1>
          Boost Your<br>
          Restaurant Orders<br>
          <span class="accent">— With ChefOnline SEO</span>
        </h1>
        <p>
          Stop leaving your visibility to chance. Be seen when customers are ready to order. Get more reservations and
          online orders with expert digital marketing for restaurants designed to increase visibility, engagement and
          sales across the UK. <br><br>
          We help restaurants and takeaways dominate search results, attract local customers and turn online traffic
          into real bookings and orders.
        </p>
      </div>

      <div class="hero__cardWrap">
        <div class="card">
          <div class="card__title">
            Get Started with <span class="brand">ChefOnline</span>
          </div>

          <form class="fields" action="https://www.chefonline.co.uk/storage-business-details_v2" method="post"
            onsubmit="return FormValidation();">

            <label class="field">
              <img src="assets/images/digital-marketing/person-icon.png" alt="restaurant icon" />
              <input type="text" placeholder="Enter Restaurant Name" id="business_name" name="business_name"
                maxlength="100" />
            </label>
            <div class="error" id="restaurantError"></div>

            <label class="field">
              <img src="assets/images/digital-marketing/user-icon.png" alt="user icon" />
              <input type="text" id="name" name="name" maxlength="50" placeholder="Contact Name" />
            </label>
            <div class="error" id="nameError"></div>

            <label class="field">
              <img src="assets/images/digital-marketing/phone-icon.png" alt="phone icon" />
              <input type="text" id="phone_number" name="phone_number" placeholder="Mobile Number" />
            </label>
            <div class="error" id="mobileError"></div>

            <label class="field">
              <img src="assets/images/digital-marketing/message-icon.png" alt="message icon" />
              <input placeholder="Email Address" type="text" id="email" name="email" maxlength="50" />
            </label>
            <div class="error" id="emailError"></div>

            <label class="field">
              <img src="assets/images/digital-marketing/location-icon.png" alt="location icon" />
              <input type="text" placeholder="Post Code" id="business_address" name="business_address"
                maxlength="100" />
            </label>
            <div class="error" id="postcodeError"></div>

            <label class="form-element">
              <label for="terms" class="pull-left" style="font-weight:normal;">
                <input type="checkbox" id="terms" name="terms" value="1" checked hidden>
                <span id="TermsText" class="text-inline" style="color:black">
                  I have read and accepted the
                  <a target="_blank" href="https://www.chefonline.com/terms-conditions"><u>terms and conditions</u></a>.
                </span>
                <div class="warning-message" id="CheckTermsErr"></div>
              </label>
              <div class="clearfix"></div>
            </label>

            <label class="form-element">
              <div>
                <div class="g-recaptcha" data-sitekey="6Lc5LU8UAAAAAAfeOoxQUnaFaae0ZlnIWbCEUGf9"
                  data-callback="recaptchaSuccess"></div>

                <input type="hidden" id="recaptcha_required" name="recaptcha_required" required>
                <div class="warning-message" id="CaptchaErr"></div>
              </div>
              <div class="clearfix"></div>
            </label>

            <input class="btn" id="general_info_submit" type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Banner Section Start -->
  <section class="trust">
    <div class="trust__inner">
      <h2>Why Restaurants Trust <span>ChefOnline</span></h2>

      <div class="trust__row">
        <!-- Left: 2 partner cards -->
        <div class="trust__cards">
          <div class="trust__card">
            <!-- Replace with your real image if you have it -->
            <img class="trust__logo" src="assets/images/digital-marketing/google-logo.png" alt="Google Partner">
            <!-- <div class="trust__cardText">Google Partner</div> -->
          </div>

          <div class="trust__card">
            <!-- Replace with your real image if you have it -->
            <img class="trust__logo" src="assets/images/digital-marketing/meta-logo.png" alt="Meta Business Partner">
            <!-- <div class="trust__cardText">Business Partner</div> -->
          </div>
        </div>

        <!-- Right: checklist panel -->
        <div class="trust__panel">
          <ul class="trust__list">
            <li>
              <span class="trust__check" aria-hidden="true">✓</span>
              Google Authorised Digital Marketing Partner
            </li>
            <li>
              <span class="trust__check" aria-hidden="true">✓</span>
              Meta Certified Digital Marketing Member
            </li>
            <li>
              <span class="trust__check" aria-hidden="true">✓</span>
              4,000+ active restaurant partners
            </li>
            <li>
              <span class="trust__check" aria-hidden="true">✓</span>
              Millions of orders processed annually
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <style>
    :root {
      --red: #ef233c;
      --panel: #f43b56;
      /* slightly lighter red for right panel */
      --white: #fff;
    }

    .trust {
      background: var(--red);
      padding: 56px 18px;
    }

    .trust__inner {
      width: min(1100px, 100%);
      margin: 0 auto;
    }

    .trust h2 {
      margin: 0 0 26px;
      text-align: center;
      color: var(--white);
      font-size: clamp(45px, 3vw, 40px);
      line-height: 1.15;
      font-family: 'Grift', sans-serif !important;
      font-weight: 600;
      letter-spacing: -0.02em;
    }

    .trust h2 span {
      font-weight: 600;
      font-family: 'Grift', sans-serif !important;
    }

    .trust__row {
      display: flex;
      gap: 26px;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
    }

    /* Left cards */
    .trust__cards {
      display: flex;
      gap: 26px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .trust__card {
      width: 250px;
      max-width: 100%;
      background: var(--white);
      border-radius: 10px;
      /* padding: 18px 18px 16px; */
      display: grid;
      place-items: center;
      box-shadow: 0 14px 28px rgba(0, 0, 0, .12);
    }

    .trust__logo {
      object-fit: contain;
      display: block;
      width: 100%;
      height: 100%;
    }

    .trust__cardText {
      margin-top: 8px;
      font-size: 18px;
      font-weight: 700;
      color: #111827;
    }

    /* Right panel */
    .trust__panel {
      width: 520px;
      max-width: 100%;
      background: var(--panel);
      border-radius: 2px;
      padding: 22px 22px;
      box-shadow: 0 14px 28px rgba(0, 0, 0, .10);
    }

    .trust__list {
      list-style: none;
      margin: 0;
      padding: 0;
      display: grid;
      gap: 14px;
    }

    .trust__list li {
      display: flex;
      align-items: center;
      gap: 12px;
      color: var(--white);
      font-size: 16px;
      font-family: 'Grift', sans-serif !important;
      font-weight: 600;
    }

    .trust__check {
      width: 22px;
      height: 22px;
      border-radius: 999px;
      border: 2px solid rgba(255, 255, 255, .95);
      display: grid;
      place-items: center;
      font-size: 13px;
      font-weight: 900;
      line-height: 1;
      flex: 0 0 22px;
    }

    /* Responsive: stack like screenshot behavior */
    @media(max-width: 980px) {
      .trust__row {
        gap: 18px;
      }

      .trust__card {
        width: min(360px, 100%);
      }

      .trust__panel {
        width: min(720px, 100%);
      }

      .trust__list li {
        font-size: 14px;
      }

      .trust h2 {
        font-size: clamp(30px, 3vw, 40px);
      }
    }
  </style>
  <!-- Banner Section End -->

  <!-- Trusted Logos Section Start -->
  <section class="partners">
    <div class="partners__inner">
      <h2>Trusted by <span>4,000+</span> Restaurants &amp; Takeaways</h2>

      <div class="partners__grid">
        <!-- Row 1 -->
        <div class="partners__item">
          <img src="assets/images/digital-marketing/asha.png" alt="ASHA" loading="lazy">
        </div>
        <div class="partners__item">
          <img src="assets/images/digital-marketing/akash.png" alt="Akash" loading="lazy">
        </div>
        <div class="partners__item">
          <img src="assets/images/digital-marketing/baldock-spice.png" alt="Baldock Spice" loading="lazy">
        </div>
        <div class="partners__item">
          <img src="assets/images/digital-marketing/bengal-balti.png" alt="Bengal Balti Cuisine" loading="lazy">
        </div>
        <div class="partners__item">
          <img src="assets/images/digital-marketing/curry-palace.png" alt="Curry Palace" loading="lazy">
        </div>
        <div class="partners__item">
          <img src="assets/images/digital-marketing/bay-of-bengal.png" alt="Bay of Bengal" loading="lazy">
        </div>
        <div class="partners__item">
          <img src="assets/images/digital-marketing/brentwood-spice.png" alt="Brentwood Spice" loading="lazy">
        </div>
        <div class="partners__item">
          <img src="assets/images/digital-marketing/cinnamon.png" alt="Cinnamon" loading="lazy">
        </div>

        <!-- Row 2 -->
        <div class="partners__item">
          <img src="assets/images/digital-marketing/bengal-indian.png" alt="Bengal Indian Cuisine"
            loading="lazy">
        </div>
        <div class="partners__item">
          <img src="assets/images/digital-marketing/bombay-blues.png" alt="Bombay Blues" loading="lazy">
        </div>
        <div class="partners__item">
          <img src="assets/images/digital-marketing/deea.png" alt="Deea" loading="lazy">
        </div>
        <div class="partners__item">
          <img src="assets/images/digital-marketing/ahad.png" alt="Ahad Tandoori Restaurant" loading="lazy">
        </div>
        <div class="partners__item">
          <img src="assets/images/digital-marketing/durbar.png" alt="Durbar Restaurant" loading="lazy">
        </div>
        <div class="partners__item">
          <img src="assets/images/digital-marketing/dansak-zone.png" alt="Dansak Zone" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <style>
    .partners {
      background: #fff;
      padding: 56px 18px;
    }

    .partners__inner {
      width: min(1100px, 100%);
      margin: 0 auto;
    }

    .partners h2 {
      margin: 0 0 26px;
      text-align: center;
      color: #0f172a;
      font-size: clamp(45px, 3vw, 40px);
      line-height: 1.15;
      font-family: 'Grift', sans-serif !important;
      font-weight: 600;
      letter-spacing: -0.02em;
    }

    .partners h2 span {
      color: var(--red);
      font-family: 'Grift', sans-serif !important;

    }

    /* grid like the screenshot: clean, airy, logo cards */
    .partners__grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 18px 22px;
      padding-top: 6px;
    }

    .partners__item {
      width: 150px;
      /* height: 64px; */
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 12px 28px rgba(15, 23, 42, .08);
      border: 1px solid rgba(15, 23, 42, .06);
      display: grid;
      place-items: center;
      /* padding: 10px 12px; */
    }

    .partners__item img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      display: block;
      filter: saturate(1.05);
    }

    @media(max-width:980px) {
      .partners {
        padding: 44px 18px;
      }

      .partners__item {
        width: 140px;
        /* height: 60px; */
      }
    }

    @media(max-width:520px) {
      .partners__grid {
        gap: 14px 14px;
      }

      .partners__item {
        width: 46%;
        /* height: 58px; */
      }

      .partners h2 {
        font-size: clamp(30px, 3vw, 40px);
      }
    }
  </style>
  <!-- Trusted Logos Section End -->

  <!-- Complete Plan Section Start -->
  <section class="plan">
    <div class="plan__inner">
      <!-- Left -->
      <div class="plan__copy">
        <h2>
          Complete Digital Marketing for Restaurants and Takeaways in <span>One Powerful Plan</span>
        </h2>

        <p class="plan__sub">
          Everything your restaurant needs to grow — managed in one strategic package.
        </p>

        <ul class="plan__list">
          <li class="plan__item">
            <span class="plan__icon" aria-hidden="true">
              <!-- globe -->
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M12 22a10 10 0 1 0 0-20 10 10 0 0 0 0 20Z" stroke="currentColor" stroke-width="2" />
                <path d="M2 12h20" stroke="currentColor" stroke-width="2" />
                <path d="M12 2c2.6 2.7 4 6.2 4 10s-1.4 7.3-4 10c-2.6-2.7-4-6.2-4-10s1.4-7.3 4-10Z" stroke="currentColor"
                  stroke-width="2" />
              </svg>
            </span>
            <span>Search Engine Optimisation</span>
          </li>

          <li class="plan__item">
            <span class="plan__icon" aria-hidden="true">
              <!-- chat -->
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M21 12a8 8 0 0 1-8 8H7l-4 2 1.2-4A8 8 0 1 1 21 12Z" stroke="currentColor" stroke-width="2"
                  stroke-linejoin="round" />
                <path d="M8 12h8M8 9h6" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
            </span>
            <span>Social Media Marketing</span>
          </li>

          <li class="plan__item">
            <span class="plan__icon" aria-hidden="true">
              <!-- link -->
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M10 13a5 5 0 0 0 7.1.2l1.7-1.7a5 5 0 0 0-7.1-7.1L10.6 5" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round" />
                <path d="M14 11a5 5 0 0 0-7.1-.2L5.2 12.5a5 5 0 0 0 7.1 7.1L13.4 19" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
            <span>Link Building</span>
          </li>

          <li class="plan__item">
            <span class="plan__icon" aria-hidden="true">
              <!-- bulb -->
              <svg viewBox="0 0 24 24" fill="none">
                <path
                  d="M9 18h6M10 22h4M8 10a4 4 0 1 1 8 0c0 1.7-.9 2.6-1.8 3.5-.7.7-1.2 1.3-1.2 2.5h-2c0-1.2-.5-1.8-1.2-2.5C8.9 12.6 8 11.7 8 10Z"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
            <span>Content Management</span>
          </li>

          <li class="plan__item">
            <span class="plan__icon" aria-hidden="true">
              <!-- sms -->
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M21 15a4 4 0 0 1-4 4H7l-4 2 1.2-4A4 4 0 0 1 3 15V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4v8Z"
                  stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                <path d="M7 8h10M7 12h7" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
            </span>
            <span>SMS Marketing</span>
          </li>

          <li class="plan__item">
            <span class="plan__icon" aria-hidden="true">
              <!-- chart -->
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 19V5M4 19h16" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                <path d="M8 15v-4M12 15V7M16 15v-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
            </span>
            <span>Analytical Reporting</span>
          </li>
        </ul>

        <p class="plan__note">
          Our all-in-one approach ensures your marketing works together
          to increase visibility, engagement and revenue.
        </p>

        <div class="plan__cta">
          <a href="https://www.chefonline.com/restaurant-digital-marketing" class="plan__btn plan__btn--primary">Start
            Growing Today</a>
          <!-- <div class="plan__pill">Takes less than 30 seconds</div> -->
        </div>
      </div>

      <!-- Right -->
      <div class="plan__visual">
        <!-- <div class="plan__curve" aria-hidden="true"></div> -->

        <img class="plan__img" src="assets/images/digital-marketing/complete-plan.png"
          alt="Digital marketing plan visuals" loading="lazy">
      </div>
    </div>
  </section>

  <style>
    .plan {
      background: #fff;
      padding: 70px 18px;
      overflow: hidden;
    }

    .plan__inner {
      width: min(1200px, 100%);
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
      /* background-image: url('assets/images/digital-marketing/complete-plan.png') */
    }

    .plan__copy {
      flex: 1;
      min-width: 650px;
    }

    .plan__copy h2 {
      margin: 0 0 10px;
      font-size: clamp(38px, 1.8vw, 44px);
      line-height: 1.12;
      font-weight: 900;
      letter-spacing: -0.02em;
      font-family: 'Grift', sans-serif !important;
      color: #0f172a;
    }

    .plan__copy h2 span {
      color: var(--red);
      font-family: 'Grift', sans-serif !important;
    }

    .plan__sub {
      margin: 0 0 20px;
      color: var(--text);
      font-weight: 600;
      font-size: 15px;
      line-height: 1.6;
      font-family: 'Grift', sans-serif !important;
    }

    .plan__list {
      list-style: none;
      padding: 0;
      margin: 0 0 20px;
      display: grid;
      gap: 14px;
    }

    .plan__item {
      display: flex;
      align-items: center;
      gap: 14px;
      font-size: 16px;
      font-weight: 800;
      font-family: 'Grift', sans-serif !important;
      color: #111827;
    }

    .plan__icon {
      width: 34px;
      height: 34px;
      border-radius: 10px;
      display: grid;
      place-items: center;
      color: var(--red);
      background: rgba(239, 35, 60, .10);
      flex: 0 0 34px;
    }

    .plan__icon svg {
      width: 18px;
      height: 18px;
    }

    .plan__note {
      margin: 10px 0 26px;
      max-width: 54ch;
      color: var(--muted);
      font-size: 14px;
      line-height: 1.7;
      font-weight: 600;
      font-family: 'Grift', sans-serif !important;
    }

    .plan__cta {
      display: flex;
      align-items: center;
      gap: 14px;
      flex-wrap: wrap;
    }

    .plan__btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      height: 52px;
      padding: 0 28px;
      border-radius: 12px;
      text-decoration: none;
      font-weight: 900;
      font-size: 14px;
      letter-spacing: .02em;
      font-family: 'Grift', sans-serif !important;
    }

    .plan__btn--primary {
      background: var(--red);
      color: #fff;
      box-shadow: 0 12px 22px rgba(239, 35, 60, .22);
    }

    .plan__btn--primary:hover {
      background: var(--red-dark);
      color: #fff;
    }

    .plan__pill {
      height: 52px;
      padding: 0 18px;
      border-radius: 12px;
      background: #0b0b0b;
      color: #fff;
      display: inline-flex;
      align-items: center;
      font-weight: 800;
      font-size: 14px;
      font-family: 'Grift', sans-serif !important;
    }

    .plan__visual {
      flex: 1;
      min-width: 340px;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: flex-end;
    }

    /* the big curved/pink area */
    /* .plan__curve {
      position: absolute;
      right: -220px;
      top: 50%;
      transform: translateY(-50%);
      width: 900px;
      height: 900px;
      border-radius: 50%;
      background: radial-gradient(circle at 30% 30%,
          rgba(239, 35, 60, .18),
          rgba(239, 35, 60, .08) 45%,
          rgba(239, 35, 60, .04) 70%,
          rgba(239, 35, 60, .02) 100%);
      pointer-events: none;
    } */

    .plan__img {
      position: relative;
      width: min(680px, 100%);
      height: auto;
      display: block;
      border-radius: 18px;
      filter: saturate(1.02);
    }

    @media(max-width: 980px) {
      .plan {
        padding: 46px 18px;
      }

      .plan__inner {
        flex-direction: column;
        align-items: stretch;
        gap: 24px;
      }

      .plan__visual {
        justify-content: center;
        min-height: 260px;
      }

      .plan__curve {
        right: 50%;
        transform: translate(50%, -50%);
        width: 860px;
        height: 860px;
      }

      .plan__item {
        font-size: 14px;
      }

      .plan__copy {
        min-width: 350px;
      }

      .plan__copy h2 {
        font-size: clamp(22px, 3vw, 44px);
      }

      .plan__visual {
        display: none;
      }

      .plan__img {
        display: none;
      }

      .plan__btn {
        margin: auto;
      }
    }
  </style>
  <!-- Complete Plan Section End -->


  <!-- SEO for Restaurants Section Start -->
  <section class="seo-services">
    <div class="seo-services__inner">
      <h2>SEO for Restaurants and Takeaways <br> That Increases Rankings</h2>
      <p>Our specialised SEO for restaurants is built to improve rankings and drive high-intent traffic ready to order.</p>

      <div class="seo-services__grid">
        <!-- SEO Service 1 -->
        <div class="seo-service__card">
          <div class="seo-service__img-wrapper">
            <img
              src="assets/images/digital-marketing/seo.png"
              alt="On-page optimisation" />
          </div>
          <div class="seo-service__content">
            <h4>Technical SEO improvements</h4>
          </div>
        </div>

        <!-- SEO Service 2 -->
        <div class="seo-service__card">
          <div class="seo-service__img-wrapper">
            <img src="assets/images/digital-marketing/on-page.png" alt="On-page optimisation" />
          </div>
          <div class="seo-service__content">
            <h4>On-page optimisation</h4>
          </div>
        </div>

        <!-- SEO Service 1 -->
        <div class="seo-service__card">
          <div class="seo-service__img-wrapper">
            <img src="assets/images/digital-marketing/keyword.png" alt="On-page optimisation" />
          </div>
          <div class="seo-service__content">
            <h4>Strategic keyword targeting</h4>
          </div>
        </div>

        <!-- SEO Service 2 -->
        <div class="seo-service__card">
          <div class="seo-service__img-wrapper">
            <img src="assets/images/digital-marketing/menu.png" alt="On-page optimisation" />
          </div>
          <div class="seo-service__content">
            <h4>Menu and location optimisation</h4>
          </div>
        </div>

        <!-- SEO Service 1 -->
        <div class="seo-service__card">
          <div class="seo-service__img-wrapper">
            <img src="assets/images/digital-marketing/data.png" alt="On-page optimisation" />
          </div>
          <div class="seo-service__content">
            <h4>Structured data implementation</h4>
          </div>
        </div>
        <!-- SEO Service 2 -->
        <div class="seo-service__card">
          <div class="seo-service__img-wrapper">
            <img src="assets/images/digital-marketing/res-seo.png" alt="On-page optimisation" />
          </div>
          <div class="seo-service__content">
            <h4>Professional SEO services for restaurant growth</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    .seo-services {
      background: #fff;
      padding: 56px 18px;
    }

    .seo-services__inner {
      max-width: 1200px;
      margin: 0 auto;
      text-align: center;
    }

    .seo-services__inner h2 {
      margin-bottom: 20px;
      font-size: clamp(28px, 3vw, 42px);
      font-weight: 900;
      color: #111827;
      font-family: 'Grift', sans-serif !important;
    }

    .seo-services__inner p {
      font-size: 16px;
      font-weight: 600;
      color: #475569;
      line-height: 1.6;
      margin-bottom: 40px;
    }

    .seo-services__grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
    }

    .seo-service__card {
      background: #fff;
      /* padding: 30px; */
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: transform 0.3s ease;
      overflow: hidden;
    }

    .seo-service__card:hover {
      transform: translateY(-8px);
    }

    .seo-service__img-wrapper {
      /* max-height: 120px; */
      overflow: hidden;
      background-color: #FFF3F3;
    }

    .seo-service__content {
      padding: 20px 20px 20px 20px;
      border-top: 2px solid #EC1F3B;
    }

    .seo-service__card img {
      height: 125px;
      padding: 20px 0px;
    }

    .seo-service__card h4 {
      font-size: 16px;
      font-weight: 700;
      color: #111827;
      font-family: 'Grift', sans-serif !important;
      margin: 0px;
      line-height: normal;
    }

    @media (max-width: 768px) {
      .seo-services__inner h2 {
        font-size: clamp(24px, 3vw, 36px);
      }

      .seo-services__inner p {
        font-size: 14px;
      }

      .seo-services__grid {
        grid-template-columns: 1fr 1fr;
      }
    }
  </style>
  <!-- SEO for Restaurants Section End -->

  <!-- Local SEO Section Start -->
  <section class="local-seo">
    <div class="local-seo__inner">
      <!-- Left -->
      <div class="local-seo__copy">
        <h2>
          Local SEO for Restaurants That Boosts <span>Map Rankings</span>
        </h2>

        <p class="local-seo__sub">
          When customers search “restaurant near me”, your business should appear first.
        </p>

        <h5>Our <span>local SEO for restaurants</span> improves:</h5>

        <ul class="local-seo__list">
          <li class="local-seo__item">
            <img src="assets/images/digital-marketing/check-icon-2.png" alt="">
            <span>Google Business Profile optimisation</span>
          </li>

          <li class="local-seo__item">
            <img src="assets/images/digital-marketing/check-icon-2.png" alt="">
            <span>Social Media Marketing</span>
          </li>

          <li class="local-seo__item">
            <img src="assets/images/digital-marketing/check-icon-2.png" alt="">
            <span>Visibility in “near me” searches</span>
          </li>

          <li class="local-seo__item">
            <img src="assets/images/digital-marketing/check-icon-2.png" alt="">
            <span>Local citations and authority</span>
          </li>

          <li class="local-seo__item">
            <img src="assets/images/digital-marketing/check-icon-2.png" alt="">
            <span>Increased footfall and bookings</span>
          </li>

          <li class="local-seo__item">
            <img src="assets/images/digital-marketing/check-icon-2.png" alt="">
            <span>Regular GMB posting</span>
          </li>
        </ul>

        <p class="local-seo__note">
          We help you dominate your local area — not just compete in it.
        </p>

        <div class="local-seo__cta">
          <a href="https://www.chefonline.com/restaurant-digital-marketing"
            class="local-seo__btn local-seo__btn--primary">Start Growing Today</a>
        </div>
      </div>

      <!-- Right -->
      <div class="local-seo__visual">
        <img class="local-seo__img" src="assets/images/digital-marketing/map-ranking.png" alt="Digital marketing plan visuals" loading="lazy">
      </div>
    </div>
  </section>

  <style>
    .local-seo {
      background: #FFF3F3;
      padding: 70px 18px;
      overflow: hidden;
    }

    .local-seo__inner {
      width: min(1200px, 100%);
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
    }

    .local-seo__copy {
      flex: 1;
      min-width: 650px;
    }

    .local-seo__copy h2 {
      margin: 0 0 10px;
      font-size: clamp(38px, 1.8vw, 44px);
      line-height: 1.12;
      font-weight: 900;
      letter-spacing: -0.02em;
      font-family: 'Grift', sans-serif !important;
      color: #0f172a;
    }

    .local-seo__copy h2 span {
      color: var(--red);
      font-family: 'Grift', sans-serif !important;
    }

    .local-seo__copy h5 {
      margin: 20px 0 12px;
      font-size: 18px;
      font-weight: 700;
      color: #111827;
      font-family: 'Grift', sans-serif !important;
    }

    .local-seo__copy h5 span {
      color: var(--red);
    }

    .local-seo__sub {
      margin: 0 0 20px;
      color: var(--text);
      font-weight: 600;
      font-size: 15px;
      line-height: 1.6;
      font-family: 'Grift', sans-serif !important;
    }

    .local-seo__list {
      list-style: none;
      padding: 0;
      margin: 0 0 20px;
      display: grid;
      gap: 14px;
    }

    .local-seo__item {
      display: flex;
      align-items: center;
      gap: 14px;
      font-size: 16px;
      font-weight: 800;
      font-family: 'Grift', sans-serif !important;
      color: #111827;
    }

    .local-seo__icon {
      width: 34px;
      height: 34px;
      border-radius: 10px;
      display: grid;
      place-items: center;
      color: var(--red);
      background: rgba(239, 35, 60, .10);
      flex: 0 0 34px;
    }

    .local-seo__icon svg {
      width: 18px;
      height: 18px;
    }

    .local-seo__note {
      margin: 10px 0 26px;
      max-width: 54ch;
      color: var(--muted);
      font-size: 14px;
      line-height: 1.7;
      font-weight: 600;
      font-family: 'Grift', sans-serif !important;
    }

    .local-seo__cta {
      display: flex;
      align-items: center;
      gap: 14px;
      flex-wrap: wrap;
    }

    .local-seo__btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      height: 52px;
      padding: 0 28px;
      border-radius: 12px;
      text-decoration: none;
      font-weight: 900;
      font-size: 14px;
      letter-spacing: .02em;
      font-family: 'Grift', sans-serif !important;
    }

    .local-seo__btn--primary {
      background: var(--red);
      color: #fff;
      box-shadow: 0 12px 22px rgba(239, 35, 60, .22);
    }

    .local-seo__btn--primary:hover {
      background: var(--red-dark);
      color: #fff;
    }

    .local-seo__visual {
      flex: 1;
      min-width: 340px;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: flex-end;
    }

    .local-seo__img {
      position: relative;
      width: min(680px, 100%);
      height: auto;
      display: block;
      border-radius: 18px;
      filter: saturate(1.02);
    }

    @media(max-width: 980px) {
      .local-seo {
        padding: 46px 18px;
      }

      .local-seo__inner {
        flex-direction: column;
        align-items: stretch;
        gap: 24px;
      }

      .local-seo__visual {
        justify-content: center;
        min-height: 260px;
      }

      .local-seo__curve {
        right: 50%;
        transform: translate(50%, -50%);
        width: 860px;
        height: 860px;
      }

      .local-seo__item {
        font-size: 14px;
      }

      .local-seo__copy {
        min-width: 350px;
      }

      .local-seo__copy h2 {
        font-size: clamp(22px, 3vw, 44px);
      }

      .local-seo__visual {
        display: none;
      }

      .local-seo__img {
        display: none;
      }

      .local-seo__btn {
        margin: auto;
      }
    }
  </style>
  <!-- Local SEO Section End -->



  <!-- Real Impact Section Start -->
  <!-- <section class="impact">
    <div class="impact__inner">
      <div class="impact__text">
        <h2>Real impact. Real growth.</h2>

        <ul class="impact__list">
          <li class="impact__item">
            <span class="impact__icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Z" stroke="currentColor" stroke-width="2" />
                <path d="M2 12h20" stroke="currentColor" stroke-width="2" />
                <path d="M12 2c2.6 2.7 4 6.2 4 10s-1.4 7.3-4 10c-2.6-2.7-4-6.2-4-10s1.4-7.3 4-10Z"
                  stroke="currentColor" stroke-width="2" />
              </svg>
            </span>
            <span>4,000+ Restaurant Partners</span>
          </li>

          <li class="impact__item">
            <span class="impact__icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path
                  d="M21 12a8 8 0 0 1-8 8H7l-4 2 1.2-4A8 8 0 1 1 21 12Z"
                  stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                <path d="M8 12h8M8 9h6" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
            </span>
            <span>UK Nationwide Coverage</span>
          </li>

          <li class="impact__item">
            <span class="impact__icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path
                  d="M10 13a5 5 0 0 0 7.1.2l1.7-1.7a5 5 0 0 0-7.1-7.1L10.6 5"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path
                  d="M14 11a5 5 0 0 0-7.1-.2L5.2 12.5a5 5 0 0 0 7.1 7.1L13.4 19"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
            <span>Millions of Orders Processed</span>
          </li>

          <li class="impact__item">
            <span class="impact__icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M21 15a4 4 0 0 1-4 4H7l-4 2 1.2-4A4 4 0 0 1 3 15V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4v8Z"
                  stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                <path d="M7 8h10M7 12h7" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
            </span>
            <span>Zero Commission on Orders</span>
          </li>
        </ul>
      </div>

      <div class="impact__chart">
        <div class="impact__map">
          <img src="assets/images/digital-marketing/uk-map.png" alt="UK Map" loading="lazy">
        </div>
        <div class="impact__graph">
          <img src="assets/images/digital-marketing/impact-graph.png" alt="Impact Graph" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <style>
    .impact {
      background: #fff;
      padding: 56px 18px;
    }

    .impact__inner {
      width: min(1200px, 100%);
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      gap: 56px;
      align-items: center;
      flex-wrap: wrap;
    }

    .impact__text {
      flex: 1;
      min-width: 300px;
    }

    .impact__text h2 {
      margin-bottom: 18px;
      font-size: clamp(28px, 3vw, 36px);
      line-height: 1.15;
      font-weight: 800;
      color: #111827;
      font-family: 'Grift', sans-serif !important;
    }

    .impact__text h2 span {
      color: var(--red);
    }

    .impact__list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: grid;
      gap: 18px;
    }

    .impact__item {
      display: flex;
      align-items: center;
      gap: 18px;
      font-size: 16px;
      font-weight: 600;
      font-family: 'Grift', sans-serif !important;
    }

    .impact__icon {
      width: 28px;
      height: 28px;
      display: grid;
      place-items: center;
      color: var(--red);
      background: rgba(239, 35, 60, 0.1);
      border-radius: 50%;
    }

    .impact__icon svg {
      width: 16px;
      height: 16px;
    }

    .impact__chart {
      flex: 1;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 20px;
    }

    .impact__map {
      flex: 1;
      max-width: 250px;
      display: flex;
      justify-content: center;
    }

    .impact__graph {
      flex: 1;
      max-width: 400px;
      display: flex;
      justify-content: center;
    }

    .impact__map img,
    .impact__graph img {
      width: 100%;
      height: auto;
    }

    @media (max-width: 980px) {
      .impact {
        padding: 46px 18px;
      }

      .impact__inner {
        flex-direction: column;
        gap: 30px;
        justify-content: center;
      }

      .impact__text {
        min-width: 0;
        text-align: center;
      }

      .impact__chart {
        flex-direction: column;
        align-items: center;
      }

      .impact__graph img {
        width: 80%;
      }
    }
  </style> -->
  <!-- Real Impact Section End -->


  <!-- What You Get Section Start -->
  <!-- <section class="features">
    <div class="features__inner">
      <h2>What You Get as a <span>ChefOnline Partner</span></h2>

      <div class="features__grid">
        <div class="features__item">
          <div class="features__icon">
            <img src="assets/images/digital-marketing/commission-icon.png" alt="Online Ordering" loading="lazy">
          </div>
          <p>Commission-Free Online Ordering System</p>
        </div>

        <div class="features__item">
          <div class="features__icon">
            <img src="assets/images/digital-marketing/pc-phone-icon.png" alt="Mobile Website" loading="lazy">
          </div>
          <p>Mobile-Optimised Restaurant Website</p>
        </div>

        <div class="features__item">
          <div class="features__icon">
            <img src="assets/images/digital-marketing/pc-phone-icon.png" alt="Google Visibility" loading="lazy">
          </div>
          <p>Google Search & Maps Visibility</p>
        </div>

        <div class="features__item">
          <div class="features__icon">
            <img src="assets/images/digital-marketing/wave-icon.png" alt="Meta Marketing" loading="lazy">
          </div>
          <p>Meta (Facebook & Instagram) Marketing Support</p>
        </div>

        <div class="features__item">
          <div class="features__icon">
            <img src="assets/images/digital-marketing/payment-icon.png" alt="Payment Solutions" loading="lazy">
          </div>
          <p>Integrated Payment Solutions</p>
        </div>

        <div class="features__item">
          <div class="features__icon">
            <img src="assets/images/digital-marketing/delivery-icon.png" alt="Delivery Management" loading="lazy">
          </div>
          <p>Delivery & Collection Management</p>
        </div>

        <div class="features__item">
          <div class="features__icon">
            <img src="assets/images/digital-marketing/live-menu-icon.png" alt="Menu Control" loading="lazy">
          </div>
          <p>Live Menu & Pricing Control</p>
        </div>

        <div class="features__item">
          <div class="features__icon">
            <img src="assets/images/digital-marketing/time-icon.png" alt="Performance Tracking" loading="lazy">
          </div>
          <p>Performance Tracking & Reporting</p>
        </div>
      </div>

      <div class="features__cta">
        <a href="#partner-form" class="features__btn">BECOME PARTNER</a>
      </div>
    </div>
  </section>

  <style>
    .features {
      background: #fff;
      padding: 56px 18px;
      background-image: url('assets/images/digital-marketing/hero-bg.png');
      background-repeat: no-repeat;
      background-size: 100%;
    }

    .features__inner {
      width: min(1200px, 100%);
      margin: 0 auto;
      text-align: center;
    }

    .features__inner h2 {
      margin: 0 0 20px;
      font-size: clamp(28px, 2.8vw, 42px);
      line-height: 1.15;
      font-weight: 900;
      color: #111827;
      font-family: 'Grift', sans-serif !important;
    }

    .features__inner h2 span {
      color: var(--red);
    }

    .features__grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 26px;
      margin-bottom: 30px;
    }

    .features__item {
      background: #fff;
      padding: 20px;
      border-radius: 18px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
      text-align: center;
      transition: transform 0.3s ease;
      border: 1px solid #c6c6c638;
    }

    .features__item:hover {
      transform: translateY(-8px);
    }

    .features__icon {
      margin-bottom: 15px;
      display: inline-block;
      width: 60px;
      height: 60px;
      background-color: #fff;
      border-radius: 50%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .features__item p {
      margin: 0;
      font-size: 16px;
      font-weight: 700;
      color: #111827;
      font-family: 'Grift', sans-serif !important;
    }

    .features__cta {
      margin-top: 40px;
    }

    .features__btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 14px 28px;
      background: var(--red);
      color: #fff;
      font-weight: 900;
      font-size: 16px;
      text-decoration: none;
      border-radius: 12px;
      box-shadow: 0 12px 22px rgba(239, 35, 60, 0.22);
      margin-bottom: 10px;
    }

    .features__btn:hover {
      background: var(--red-dark);
    }

    .features__pill {
      background: #111827;
      color: #fff;
      padding: 10px 16px;
      font-weight: 600;
      font-size: 14px;
      border-radius: 12px;
      display: inline-flex;
      align-items: center;
    }

    @media (max-width: 980px) {
      .features__inner h2 {
        font-size: clamp(24px, 3vw, 36px);
      }

      .features__grid {
        gap: 20px;
      }

      .features__item {
        padding: 16px;
      }
    }
  </style> -->
  <!-- What You Get Section End -->


  <!-- How It Works Section Start -->
  <!-- <section class="how-it-works">
    <div class="how-it-works__inner">
      <h2>How It Works</h2>

      <div class="how-it-works__grid">
        <div class="how-it-works__item">
          <div class="how-it-works__icon">
            <img src="assets/images/digital-marketing/send-icon.png" alt="Submit Details" loading="lazy">
          </div>
          <p class="how-it-works__title">Submit Your Restaurant Details</p>
          <p class="how-it-works__desc">Submit your details below and our team will get in touch with you shortly. Your information will only be used to assist you.</p>
        </div>

        <div class="how-it-works__item">
          <div class="how-it-works__icon">
            <img src="assets/images/digital-marketing/people-with-pc-icon.png" alt="Speak with Specialist" loading="lazy">
          </div>
          <p class="how-it-works__title">Speak with a ChefOnline Specialist</p>
          <p class="how-it-works__desc">Get expert guidance, personalized advice, and quick support to make sure you are set up for success.</p>
        </div>

        <div class="how-it-works__item">
          <div class="how-it-works__icon">
            <img src="assets/images/digital-marketing/cart-icon.png" alt="Set up Ordering" loading="lazy">
          </div>
          <p class="how-it-works__title">We Set Up Your Online Ordering & Marketing</p>
          <p class="how-it-works__desc">We set up your online ordering and marketing to help your business grow effortlessly.</p>
        </div>

        <div class="how-it-works__item">
          <div class="how-it-works__icon">
            <img src="assets/images/digital-marketing/donation-icon.png" alt="Start Orders" loading="lazy">
          </div>
          <p class="how-it-works__title">Start Receiving Online Orders</p>
          <p class="how-it-works__desc">Start receiving online orders and increase your profits instantly.</p>
        </div>
      </div>
    </div>
  </section>

  <style>
    .how-it-works {
      background: #fff;
      padding: 56px 18px;
    }

    .how-it-works__inner {
      width: min(1200px, 100%);
      margin: 0 auto;
      text-align: center;
    }

    .how-it-works__inner h2 {
      margin: 0 0 40px;
      font-size: clamp(28px, 2.8vw, 42px);
      line-height: 1.15;
      font-weight: 900;
      color: #111827;
      font-family: 'Grift', sans-serif !important;
    }

    .how-it-works__grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 26px;
      margin-bottom: 30px;
    }

    .how-it-works__item {
      background: #fff;
      padding: 20px;
      border-radius: 18px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
      text-align: left;
      transition: transform 0.3s ease;
      border: 1px solid #c6c6c638;
    }

    .how-it-works__item:hover {
      transform: translateY(-8px);
    }

    .how-it-works__icon {
      text-align: left;
    }

    .how-it-works__icon img {
      margin-bottom: 15px;
      width: 95px;
      height: 115px;
    }

    .how-it-works__title {
      font-size: 18px;
      font-weight: 700;
      color: #111827;
      font-family: 'Grift', sans-serif !important;
      margin: 0 0 10px;
    }

    .how-it-works__desc {
      font-size: 14px;
      font-weight: 600;
      color: #475569;
      font-family: 'Grift', sans-serif !important;
      margin: 0;
    }

    @media (max-width: 980px) {
      .how-it-works__inner h2 {
        font-size: clamp(24px, 3vw, 36px);
      }

      .how-it-works__item {
        padding: 16px;
      }
    }
  </style> -->
  <!-- How It Works Section End -->

  <!-- Engaging Social Media Start -->
  <section class="smm-split">
    <div class="smm-split__inner">
      <!-- LEFT -->
      <div class="smm-split__left">
        <h2 class="smm-split__h2">Engaging Social Media Marketing<br>That Converts</h2>
        <p class="smm-split__lead">Your customers are scrolling daily. We make sure they see you.</p>

        <div class="smm-split__rule"></div>

        <p class="smm-split__sub">
          Our <span>Social Media Marketing</span> includes:
        </p>

        <ul class="smm-split__list">
          <li>
            <!-- <span class="smm-split__tick smm-split__tick--red" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span> -->
            <img src="assets/images/digital-marketing/check-icon-2.png" alt="">
            Brand awareness campaigns
          </li>
          <li>
            <img src="assets/images/digital-marketing/check-icon-2.png" alt="">
            Facebook, Instagram, X and Pinterest marketing
          </li>
          <li>
            <img src="assets/images/digital-marketing/check-icon-2.png" alt="">
            Creative campaign management
          </li>
          <li>
            <img src="assets/images/digital-marketing/check-icon-2.png" alt="">
            Offer and promotion strategies
          </li>
        </ul>

        <p class="smm-split__foot">We build attention and turn it into orders.</p>
      </div>

      <!-- RIGHT -->
      <div class="smm-split__right">
        <h2 class="smm-split__h2 smm-split__h2--white">
          Performance-Led Digital Marketing<br>for Restaurants and Takeaways
        </h2>
        <p class="smm-split__lead smm-split__lead--white">
          Everything we do is built around measurable growth.
        </p>

        <div class="smm-split__rule smm-split__rule--white"></div>

        <ul class="smm-split__list smm-split__list--white">
          <li>
            <img src="assets/images/digital-marketing/check-icon-white.png" alt="">
            Budget-friendly package
          </li>
          <li>
            <img src="assets/images/digital-marketing/check-icon-white.png" alt="">
            Competitive analysis
          </li>
          <li>
            <img src="assets/images/digital-marketing/check-icon-white.png" alt="">
            Data-driven marketing strategies
          </li>
          <li>
            <img src="assets/images/digital-marketing/check-icon-white.png" alt="">
            Improved branding and visibility
          </li>
          <li>
            <img src="assets/images/digital-marketing/check-icon-white.png" alt="">
            Keyword ranking growth and increased traffic
          </li>
          <li>
            <img src="assets/images/digital-marketing/check-icon-white.png" alt="">
            Monthly performance reporting
          </li>
        </ul>
      </div>
    </div>
  </section>

  <style>
    .smm-split {
      padding: 56px 18px;
      /* background: #fff; */
      background-image: url('assets/images/digital-marketing/hero-bg.png');
      background-repeat: no-repeat;
      background-size: 100% 100%;
    }

    .smm-split__inner {
      width: min(1200px, 100%);
      margin: 0 auto;
      background: var(--card);
      border-radius: 20px;
      box-shadow: var(--shadow);
      display: flex;
      overflow: hidden;
      /* border: 1px solid rgba(15, 23, 42, .06); */
      /* border: 1px solid rgba(15, 23, 42, .06); */
      border: 2px solid #EC1F3B;
    }

    .smm-split__left {
      flex: 1;
      padding: 46px 52px;
      position: relative;
      background:
        radial-gradient(540px 380px at 20% 25%, rgba(0, 0, 0, .05), transparent 60%),
        radial-gradient(520px 360px at 35% 85%, rgba(0, 0, 0, .04), transparent 62%),
        #fff;
    }

    .smm-split__right {
      flex: 1;
      padding: 46px 52px;
      background: var(--red);
      border-top-left-radius: 34px;
      border-bottom-left-radius: 34px;
    }

    .smm-split__h2 {
      margin: 0 0 10px;
      color: var(--text);
      font-weight: 900;
      font-size: clamp(24px, 2.2vw, 34px);
      line-height: 1.12;
      font-family: 'Grift', sans-serif !important;
    }

    .smm-split__h2--white {
      color: #fff;
    }

    .smm-split__lead {
      margin: 0 0 18px;
      color: var(--muted);
      font-weight: 600;
      font-size: 14px;
      line-height: 1.7;
      max-width: 58ch;
      font-family: 'Grift', sans-serif;
    }

    .smm-split__lead--white {
      color: rgba(255, 255, 255, .9);
    }

    .smm-split__rule {
      height: 1px;
      width: 78%;
      background: rgba(15, 23, 42, .25);
      margin: 18px 0 18px;
    }

    .smm-split__rule--white {
      background: rgba(255, 255, 255, .6);
    }

    .smm-split__sub {
      margin: 0 0 16px;
      font-weight: 800;
      font-size: 16px;
      color: var(--text);
      font-family: 'Grift', sans-serif;
    }

    .smm-split__sub span {
      color: var(--red);
    }

    .smm-split__list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: grid;
      gap: 16px;
    }

    .smm-split__list li {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      color: var(--text);
      font-weight: 700;
      font-size: 15px;
      line-height: 1.55;
      font-family: 'Grift', sans-serif;
    }

    .smm-split__list--white li {
      color: #fff;
      font-weight: 800;
    }

    .smm-split__tick {
      width: 26px;
      height: 26px;
      border-radius: 999px;
      display: grid;
      place-items: center;
      flex: 0 0 26px;
      margin-top: 1px;
    }

    .smm-split__tick svg {
      width: 16px;
      height: 16px;
    }

    .smm-split__tick--red {
      background: var(--red);
      color: #fff;
    }

    .smm-split__tick--white {
      background: #fff;
      color: var(--red);
    }

    .smm-split__foot {
      margin: 18px 0 0;
      color: var(--muted);
      font-weight: 600;
      font-size: 13px;
      font-family: 'Grift', sans-serif;
    }

    @media (max-width: 980px) {
      /* .smm-split {
        background-size: cover !important;
      } */

      .smm-split__inner {
        flex-direction: column;
      }

      .smm-split__right {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }

      .smm-split__left,
      .smm-split__right {
        padding: 34px 22px;
      }

      .smm-split__rule {
        width: 100%;
      }
    }
  </style>
  <!-- Engaging Social Media End -->

  <!-- Affordable Digital Marketing Start -->
  <section class="dm-banner">
    <div class="dm-banner__inner">
      <!-- LEFT IMAGE (curved cut) -->
      <div class="dm-banner__media">
        <img src="assets/images/digital-marketing/affordable.png" alt="Digital marketing" loading="lazy">
      </div>

      <!-- RIGHT CONTENT -->
      <div class="dm-banner__content">
        <h2>Affordable Digital Marketing<br>for Restaurants</h2>

        <p class="dm-banner__lead">
          Professional digital marketing for restaurants starting from <strong>£249</strong> per month.
        </p>

        <p class="dm-banner__desc">
          No unnecessary extras. No generic packages.<br>
          Just a focused strategy designed for restaurant growth.
        </p>

        <a class="dm-banner__btn" href="#partner-form">Start Growing Today</a>
      </div>
    </div>
  </section>

  <style>
    .dm-banner {
      background: #FFE1E1;
      padding: 70px 18px;
    }

    .dm-banner__inner {
      width: min(1200px, 100%);
      margin: 0 auto;
      background: var(--red);
      display: grid;
      grid-template-columns: 1.1fr 0.9fr;
      overflow: hidden;
      border-radius: 0;
    }

    /* Left image area */
    .dm-banner__media {
      position: relative;
      min-height: 330px;
      overflow: hidden;
      /* background: #111; */
      background-color: #ef233c;
    }

    .dm-banner__media img {
      width: 100%;
      /* height: 100%; */
      object-fit: cover;
      display: block;
      /* transform: scale(1.02); */
    }

    /* Create the big curved cut like the screenshot */
    .dm-banner__media::after {
      content: "";
      position: absolute;
      top: -30%;
      right: -42%;
      width: 80%;
      height: 160%;
      background: var(--red);
      border-radius: 999px;
      pointer-events: none;
      display: none;
    }

    /* Right content */
    .dm-banner__content {
      padding: 28px 54px;
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .dm-banner__content h2 {
      margin: 0 0 14px;
      font-size: clamp(26px, 2.4vw, 40px);
      line-height: 1.12;
      font-weight: 900;
      font-family: 'Grift', sans-serif !important;
      color: #fff;
    }

    .dm-banner__lead {
      margin: 0 0 10px;
      font-size: 16px;
      line-height: 1.55;
      font-weight: 700;
      font-family: 'Grift', sans-serif;
      color: #fff;
    }

    .dm-banner__desc {
      margin: 0 0 26px;
      font-size: 15px;
      line-height: 1.65;
      font-weight: 600;
      opacity: .95;
      font-family: 'Grift', sans-serif;
      color: #fff;
    }

    .dm-banner__btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      height: 54px;
      width: min(420px, 100%);
      background: #fff;
      color: var(--red);
      text-decoration: none;
      font-weight: 900;
      font-size: 16px;
      border-radius: 10px;
      box-shadow: 0 14px 28px rgba(0, 0, 0, .18);
      transition: transform .15s ease, background-color .15s ease, color .15s ease;
      font-family: 'Grift', sans-serif;
    }

    .dm-banner__btn:hover {
      transform: translateY(-1px);
      background: #fff;
      color: var(--red-dark);
    }

    /* Responsive */
    @media (max-width: 980px) {
      .dm-banner {
        padding: 46px 14px;
      }

      .dm-banner__inner {
        grid-template-columns: 1fr;
      }

      .dm-banner__media {
        min-height: 240px;
      }

      .dm-banner__media::after {
        /* Softer curve on mobile */
        top: auto;
        bottom: -55%;
        right: -20%;
        width: 140%;
        height: 120%;
        border-radius: 999px;
        display: none;
      }

      .dm-banner__content {
        padding: 34px 20px;
        text-align: left;
      }

      .dm-banner__btn {
        width: 100%;
      }
    }
  </style>
  <!-- Affordable Digital Marketing End -->

  <!-- Why Trust Section Start -->
  <section class="trust-grid">
    <div class="trust-grid__inner">
      <h2 class="trust-grid__title">
        Why Restaurants Across the UK Trust <span>ChefOnline</span>
      </h2>

      <div class="trust-grid__grid">
        <!-- Card 1 -->
        <article class="trust-grid__card">
          <div class="trust-grid__badge">
            <!-- <img src="assets/images/digital-marketing/send-icon.png" alt="Industry expertise" loading="lazy"> -->
            <img src="assets/images/digital-marketing/cart-icon.png" alt="Industry expertise" loading="lazy">
          </div>
          <h3>Industry-focused restaurant expertise</h3>
          <p>
            ChefOnline specialises in digital marketing and SEO specifically for the restaurant industry,
            understanding its unique challenges and needs.
          </p>
        </article>

        <!-- Card 2 -->
        <article class="trust-grid__card">
          <div class="trust-grid__badge">
            <img src="assets/images/digital-marketing/seo-search-icon.png" alt="Proven SEO" loading="lazy">
          </div>
          <h3>Proven SEO for restaurants</h3>
          <p>
            With a track record of delivering strong search rankings, ChefOnline helps restaurants increase
            visibility and drive more customers to their doors.
          </p>
        </article>

        <!-- Card 3 -->
        <article class="trust-grid__card">
          <div class="trust-grid__badge">
            <img src="assets/images/digital-marketing/reporting-icon.png" alt="Transparent reporting" loading="lazy">
          </div>
          <h3>Transparent reporting</h3>
          <p>
            Clear, easy-to-understand reports provide insights into performance, so restaurant owners can see
            exactly how their investment is driving results.
          </p>
        </article>

        <!-- Card 4 -->
        <article class="trust-grid__card">
          <div class="trust-grid__badge">
            <img src="assets/images/digital-marketing/people-with-pc-icon.png" alt="Dedicated support" loading="lazy">
          </div>
          <h3>Dedicated support team</h3>
          <p>
            A knowledgeable team is always available, offering expert guidance and timely assistance to ensure
            continuous growth and success.
          </p>
        </article>

        <!-- Card 5 -->
        <article class="trust-grid__card">
          <div class="trust-grid__badge">
            <img src="assets/images/digital-marketing/donation-icon.png" alt="ROI strategy" loading="lazy">
          </div>
          <h3>ROI-focused strategy</h3>
          <p>
            Every strategy is designed to maximise return on investment, driving more orders and increasing
            overall profitability for your restaurant.
          </p>
        </article>
      </div>
    </div>
  </section>
  <!-- Why Trust Section End -->

  <style>
    .trust-grid {
      /* position: relative; */
      background-image: url('assets/images/digital-marketing/hero-bg.png');
      background-repeat: no-repeat;
      background-size: 100% 100%;
      padding: 56px 18px;
      /* overflow: hidden; */
    }

    /* soft grey curve background like screenshot */
    /* .trust-grid::before {
      content: "";
      position: absolute;
      inset: -120px -140px -120px -140px;
      background:
        radial-gradient(800px 420px at 22% 60%, rgba(0, 0, 0, .04), transparent 65%),
        radial-gradient(900px 460px at 82% 40%, rgba(0, 0, 0, .035), transparent 62%),
        radial-gradient(700px 420px at 70% 110%, rgba(0, 0, 0, .03), transparent 60%);
      pointer-events: none;
    } */

    .trust-grid__inner {
      /* position: relative; */
      width: min(1200px, 100%);
      margin: 0 auto;
      text-align: center;
    }

    .trust-grid__title {
      margin: 0 0 26px;
      font-family: 'Grift', sans-serif !important;
      font-size: clamp(26px, 2.6vw, 38px);
      font-weight: 900;
      color: var(--text);
      letter-spacing: -0.02em;
    }

    .trust-grid__title span {
      color: var(--red);
      font-weight: 900;
      font-family: 'Grift', sans-serif !important;
    }

    .trust-grid__grid {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 18px;
      align-items: stretch;
    }

    /* Top row: 2 cards spanning 3 columns each */
    .trust-grid__card:nth-child(1),
    .trust-grid__card:nth-child(2) {
      grid-column: span 3;
    }

    /* Bottom row: 3 cards spanning 2 columns each */
    .trust-grid__card:nth-child(3),
    .trust-grid__card:nth-child(4),
    .trust-grid__card:nth-child(5) {
      grid-column: span 2;
    }

    .trust-grid__card {
      background: var(--card);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 22px 22px;
      text-align: left;
      position: relative;
      border: 1px solid rgba(15, 23, 42, .06);
    }

    /* icon badge */
    .trust-grid__badge {
      /* position: absolute;
      top: -18px;
      left: 22px; */
      width: 100px;
      height: 100px;
      border-radius: 999px;
      border: 2px solid rgba(239, 35, 60, .55);
      background: #FFF3F3;
      display: grid;
      place-items: center;
    }

    .trust-grid__badge img {
      width: 60px;
      height: 60px;
      object-fit: contain;
      display: block;
    }

    .trust-grid__card h3 {
      margin: 10px 0 10px 0px;
      font-family: 'Grift', sans-serif !important;
      font-size: 15px;
      font-weight: 900;
      color: var(--text);
      line-height: 1.25;
    }

    .trust-grid__card p {
      margin: 0;
      font-family: 'Grift', sans-serif !important;
      font-size: 13px;
      font-weight: 600;
      color: var(--muted);
      line-height: 1.55;
      max-width: 56ch;
    }

    /* Responsive */
    @media (max-width: 980px) {
      .trust-grid {
        padding: 46px 18px;
      }

      .trust-grid__grid {
        grid-template-columns: 1fr;
        gap: 16px;
      }

      .trust-grid__card:nth-child(1),
      .trust-grid__card:nth-child(2),
      .trust-grid__card:nth-child(3),
      .trust-grid__card:nth-child(4),
      .trust-grid__card:nth-child(5) {
        grid-column: auto;
      }

      .trust-grid__card {
        padding: 44px 18px 18px;
      }

      .trust-grid__badge {
        left: 18px;
      }
    }
  </style>



  <!-- What Our Partners Say Section Start -->
  <section class="testimonials">
    <div class="testimonials__inner">
      <h2>What Our Partners Say</h2>

      <div class="testimonials__grid">
        <!-- Testimonial 1 -->
        <div class="testimonial__card">
          <div class="testimonial__card_inner">
            <p class="testimonial__quote">
              "ChefOnline helped us move away from high-commission platforms. We
              now receive more direct orders and keep our margins."
            </p>
            <div class="testimonial__quote_line"></div>
            <div class="testimonial__info">
              <div class="testimonial__avatar">
                <img
                  src="assets/images/digital-marketing/mohammad.png"
                  alt="Mohammad Mojnu"
                  loading="lazy" />
              </div>
              <p class="testimonial__name">Mohammad Mojnu</p>
              <p class="testimonial__business">
                Vantage Indian Restaurant, London
              </p>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial__card">
          <div class="testimonial__card_inner">
            <p class="testimonial__quote">
              “The dashboard is easy to use and the support team is excellent. Highly recommended.”
            </p>
            <div class="testimonial__quote_line"></div>
            <div class="testimonial__info">
              <div class="testimonial__avatar">
                <img
                  src="assets/images/digital-marketing/kosru.jpg"
                  alt="Mohammad Mojnu"
                  loading="lazy" />
              </div>
              <p class="testimonial__name">Mr Kosru Miah</p>
              <p class="testimonial__business">
                Curry Palace, Cottenham
              </p>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="testimonial__card">
          <div class="testimonial__card_inner">
            <p class="testimonial__quote">
              “My products have been sold a lot from ChefOnline & I' ve made a lot of profit during the Covid-19
              pandemic.”
            </p>
            <div class="testimonial__quote_line"></div>
            <div class="testimonial__info">
              <div class="testimonial__avatar">
                <img
                  src="https://media.istockphoto.com/id/1455343221/photo/video-portrait-of-an-indian-man.jpg?s=612x612&w=0&k=20&c=6vYREgAg_4JnE5sAhe83P5koDuSD3cLrliDp82RRY_g="
                  alt="Mohammad Mojnu"
                  loading="lazy" />
              </div>
              <p class="testimonial__name">Mr Ali Babor Chowdhury</p>
              <p class="testimonial__business">
                Saffron, London
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="testimonials__cta">
        <a href="#partner-form" class="testimonials__btn">Start Growing Today</a>
      </div>
    </div>
  </section>

  <style>
    .testimonials {
      background: #ef233c;
      padding: 56px 18px;
    }

    .testimonials__inner {
      width: min(1200px, 100%);
      margin: 0 auto;
      text-align: center;
    }

    .testimonials__inner h2 {
      margin: 0 0 40px;
      font-size: clamp(28px, 2.8vw, 42px);
      line-height: 1.15;
      font-weight: 900;
      color: #fff;
      font-family: "Grift", sans-serif !important;
    }

    .testimonials__grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 26px;
      justify-items: center;
      margin-bottom: 40px;
    }

    .testimonial__card {
      background: #f33751;
      padding: 60px 30px;
      border-radius: 18px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
      text-align: left;
      transition: transform 0.3s ease;
      position: relative;
      width: 100%;
      max-width: 385px;
      aspect-ratio: auto;
    }

    .testimonial__card::before {
      content: "";
      height: 60%;
      width: 71%;
      position: absolute;
      top: 40px;
      left: -80px;
      right: 0px;
      bottom: 0px;
      margin: auto;
      font-size: 50px;
      background-color: #f594a1;
      border-radius: 18px;
    }

    .testimonial__card_inner {
      background-color: #fff;
      padding: 24px;
      position: relative;
      border-radius: 12px;
    }

    .testimonial__card:hover {
      transform: translateY(-8px);
    }

    .testimonial__quote {
      font-size: 14px;
      font-weight: normal;
      color: #504a4a;
      font-family: "Grift", sans-serif !important;
      margin: 0 0 10px;
      line-height: 1.6;
    }

    .testimonial__quote_line {
      width: 40px;
      height: 4px;
      background: #ef233c;
      border-radius: 2px;
      margin: 0 0 10px;
    }

    .testimonial__info {
      display: flex;
      flex-direction: column;
      gap: 4px;
      padding-top: 8px;
    }

    .testimonial__avatar {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      overflow: hidden;
      position: absolute;
      bottom: -28px;
      right: 28px;
      background-color: white;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 5px;
      flex-shrink: 0;
    }

    .testimonial__avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%;
    }

    .testimonial__name {
      font-weight: 700;
      color: #111827;
      font-size: 16px;
      font-family: "Grift", sans-serif !important;
      line-height: 1.3;
      margin: 0;
    }

    .testimonial__business {
      color: #475569;
      font-size: 13px;
      font-weight: 600;
      font-family: "Grift", sans-serif !important;
      line-height: 1.3;
      margin: 0;
      font-style: italic;
    }

    .testimonials__cta {
      margin-top: 50px;
      display: flex;
      justify-content: center;
    }

    .testimonials__btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 14px 28px;
      background: #111827;
      color: #fff;
      font-weight: 900;
      font-size: 16px;
      text-decoration: none;
      border-radius: 12px;
      box-shadow: 0 12px 22px rgba(17, 24, 39, 0.22);
      transition: background 0.3s ease;
    }

    .testimonials__btn:hover {
      background: #090909;
    }

    /* Tablet/Medium Devices */
    @media (max-width: 1024px) {
      .testimonials {
        padding: 48px 16px;
      }

      .testimonials__inner h2 {
        margin-bottom: 32px;
        font-size: clamp(24px, 2.5vw, 36px);
      }

      .testimonials__grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
      }

      .testimonial__card {
        max-width: 100%;
        padding: 48px 24px;
      }

      .testimonial__card::before {
        height: 50%;
        width: 50%;
        top: 55px;
        left: -55px;
      }

      .testimonial__quote {
        font-size: 13px;
      }

      .testimonials__cta {
        margin-top: 40px;
      }
    }

    /* Small Devices/Mobile */
    @media (max-width: 768px) {
      .testimonials {
        padding: 40px 12px;
      }

      .testimonials__inner h2 {
        margin-bottom: 28px;
        font-size: clamp(22px, 2.2vw, 28px);
      }

      .testimonials__grid {
        grid-template-columns: 1fr;
        gap: 24px;
        padding: 0 8px;
      }

      .testimonial__card {
        max-width: 100%;
        padding: 40px 20px;
        width: 100%;
      }

      .testimonial__card::before {
        height: 55%;
        width: 55%;
        top: 50px;
        left: -50px;
        display: none;
      }

      .testimonial__card_inner {
        padding: 20px;
      }

      .testimonial__quote {
        font-size: 13px;
        line-height: 1.5;
      }

      .testimonial__avatar {
        width: 55px;
        height: 55px;
        bottom: -35px;
        right: 15px;
      }

      .testimonial__name {
        font-size: 15px;
      }

      .testimonial__business {
        font-size: 12px;
      }

      .testimonials__btn {
        padding: 12px 24px;
        font-size: 14px;
      }
    }

    /* Extra Small Devices */
    @media (max-width: 480px) {
      .testimonials {
        padding: 32px 12px;
      }

      .testimonials__inner h2 {
        margin-bottom: 24px;
        font-size: 22px;
      }

      .testimonials__grid {
        gap: 20px;
      }

      .testimonial__card {
        padding: 32px 16px;
      }

      .testimonial__card_inner {
        padding: 16px;
      }

      .testimonial__quote {
        font-size: 12px;
      }

      .testimonial__quote_line {
        width: 35px;
        margin: 8px 0;
      }

      .testimonial__avatar {
        width: 50px;
        height: 50px;
        bottom: -32px;
        right: 12px;
        padding: 4px;
      }

      .testimonial__name {
        font-size: 14px;
      }

      .testimonial__business {
        font-size: 11px;
      }

      .testimonials__cta {
        margin-top: 32px;
      }

      .testimonials__btn {
        padding: 11px 22px;
        font-size: 13px;
      }
    }
  </style>
  <!-- What Our Partners Say Section End -->

  <!-- FAQ Section Start -->
  <section class="faq">
    <div class="faq__inner">
      <h2>Frequently Asked Questions</h2>

      <div class="faq__accordion">
        <div class="faq__item">
          <button class="faq__question active">
            What is digital marketing for restaurants?
            <span class="faq__icon">➔</span>
          </button>
          <div class="faq__answer" style="display: block;">
            Digital marketing for restaurants includes SEO, social media, local search optimisation and performance
            strategies designed to increase visibility and bookings.
          </div>
        </div>

        <div class="faq__item">
          <button class="faq__question">
            How does SEO for restaurants increase bookings?
            <span class="faq__icon">➔</span>
          </button>
          <div class="faq__answer">
            SEO improves your Google rankings, making your restaurant visible when customers search. Higher visibility
            leads to more clicks, more bookings and more online orders.
          </div>
        </div>

        <div class="faq__item">
          <button class="faq__question">
            What is included in our SEO services for a restaurant?
            <span class="faq__icon">➔</span>
          </button>
          <div class="faq__answer">
            Our SEO services for restaurant businesses include technical SEO, on-page optimisation, keyword targeting,
            local SEO and structured data implementation.
          </div>
        </div>

        <div class="faq__item">
          <button class="faq__question">
            How long does local SEO for restaurants take?
            <span class="faq__icon">➔</span>
          </button>
          <div class="faq__answer">
            Most restaurants begin seeing ranking improvements within 6–12 weeks depending on competition and location.
          </div>
        </div>

        <!-- <div class="faq__item">
          <button class="faq__question">
            5. Will you help with marketing?
            <span class="faq__icon">➔</span>
          </button>
          <div class="faq__answer">
            Yes! We provide marketing support to help you grow your online presence.
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <style>
    .faq {
      background: #fff;
      padding: 56px 18px;
      background-image: url('assets/images/digital-marketing/hero-bg.png');
      background-repeat: no-repeat;
      background-size: 100%;
    }

    .faq__inner {
      width: min(1200px, 100%);
      margin: 0 auto;
      text-align: center;
    }

    .faq__inner h2 {
      margin: 0 0 40px;
      font-size: clamp(28px, 2.8vw, 42px);
      line-height: 1.15;
      font-weight: 900;
      color: #111827;
      font-family: 'Grift', sans-serif !important;
    }

    .faq__accordion {
      max-width: 800px;
      margin: 0 auto;
      text-align: left;
    }

    .faq__item {
      border: 1px solid #ccc;
      border-radius: 12px;
      margin: 10px 0;
      background: #f9f9f9;
    }

    .faq__question {
      background: #fff;
      color: #111827;
      padding: 18px 20px;
      font-size: 16px;
      font-weight: 600;
      width: 100%;
      text-align: left;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background-color 0.3s;
    }

    .faq__question:hover {
      background: #f1f1f1;
    }

    .faq__icon {
      font-size: 18px;
      transition: transform 0.3s;
    }

    .faq__question.active .faq__icon {
      transform: rotate(90deg);
    }

    .faq__answer {
      display: none;
      padding: 18px 20px;
      font-size: 14px;
      color: #475569;
      background: #fff;
      border-top: 1px solid #ddd;
      border-radius: 0px 0px 11px 11px;
    }

    .faq__item.active .faq__answer {
      display: block;
    }
  </style>

  <script>
    // Handle accordion toggle
    const faqQuestions = document.querySelectorAll('.faq__question');
    const firstQuestion = faqQuestions[0]; // Get the first question

    // Mark first question as active and show its answer on page load
    firstQuestion.classList.add('active');
    firstQuestion.nextElementSibling.style.display = 'block'; // Show the first answer

    faqQuestions.forEach(question => {
      question.addEventListener('click', () => {
        const isActive = question.classList.contains('active');
        const currentAnswer = question.nextElementSibling;

        // Toggle active class
        faqQuestions.forEach(q => q.classList.remove('active'));
        document.querySelectorAll('.faq__answer').forEach(a => a.style.display = 'none');

        // Open/close clicked FAQ item
        if (!isActive) {
          question.classList.add('active');
          currentAnswer.style.display = 'block';
        }
      });
    });
  </script>
  <!-- FAQ Section End -->

  <!-- Ready to Take Control Section Start -->
  <section class="cta">
    <div class="cta__inner">
      <h2>Ready to Take Control of Your Online Orders?</h2>
      <p>Join thousands of restaurants growing their business with ChefOnline. <br> Quick sign-up • No obligation • Trusted by restaurants nationwide.</p>
      <a href="#partner-form" class="cta__btn">BECOME PARTNER</a>
    </div>
  </section>

  <style>
    .cta {
      background: url('assets/images/digital-marketing/ready-bg.png') center/cover no-repeat;
      padding: 80px 20px;
      text-align: center;
      color: #fff;
      background-blend-mode: overlay;
      position: relative;
    }

    .cta__inner {
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px;
      background: rgba(0, 0, 0, 0.5);
      /* Dark transparent background */
      border-radius: 12px;
    }

    .cta__inner h2 {
      font-size: clamp(28px, 3vw, 42px);
      font-weight: 900;
      margin-bottom: 20px;
      font-family: 'Grift', sans-serif !important;
      color: white !important;
    }

    .cta__inner p {
      font-size: 16px;
      font-weight: 600;
      line-height: 1.6;
      margin-bottom: 40px;
      font-family: 'Grift', sans-serif !important;
      color: white !important;
    }

    .cta__btn {
      padding: 14px 28px;
      background-color: #ef233c;
      color: white;
      font-size: 16px;
      font-weight: 900;
      text-decoration: none;
      border-radius: 12px;
      box-shadow: 0 12px 22px rgba(17, 24, 39, 0.22);
      display: inline-block;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .cta__btn:hover {
      background-color: #d90429;
      transform: scale(1.05);
    }

    @media (max-width: 980px) {
      .cta__inner {
        padding: 20px;
      }

      .cta__inner h2 {
        font-size: clamp(24px, 3vw, 36px);
      }

      .cta__inner p {
        font-size: 14px;
      }
    }
  </style>
  <!-- Ready to Take Control Section End -->

  <!-- Payment & Security Section Start -->
  <section class="payment-security">
    <div class="payment-security__inner">
      <!-- Payment Methods -->
      <div class="payment-methods">
        <div class="online-payments">
          <h3>Secure Payments Via</h3>
          <div class="payment-logos online-payments-logos">
            <img src="assets/images/digital-marketing/barclaycard-logo-2.png" alt="Barclaycard" />
            <img src="assets/images/digital-marketing/ryft-logo-2.png" alt="Ryft" />
            <img src="assets/images/digital-marketing/myguava-logo-2.png" alt="MyGuava" />
          </div>
        </div>

        <div class="payment-logos card-logos">
          <img src="assets/images/digital-marketing/visa-logo.png" alt="Visa" />
          <img src="assets/images/digital-marketing/mastercard-logo.png" alt="MasterCard" />
          <img src="assets/images/digital-marketing/amex-logo.png" alt="American Express" />
          <img src="assets/images/digital-marketing/verifed-visa-logo.png" alt="Verified by Visa" />
          <img src="assets/images/digital-marketing/master-card-logo.png" alt="MasterCard SecureCode" />
          <img src="assets/images/digital-marketing/safekey-logo.png" alt="American Express SafeKey" />
        </div>
      </div>

      <div class="logo-divider"></div>

      <!-- Security Certifications -->
      <div class="security-certifications">
        <h3>Secured by</h3>
        <div class="security-logos">
          <img src="assets/images/digital-marketing/security-1-logo.png" alt="Security 1" />
          <img src="assets/images/digital-marketing/security-2-logo.png" alt="SecurityMetrics PCI DSS" />
          <img src="assets/images/digital-marketing/cyber-essential-logo.png" alt="Cyber Essentials" />
        </div>
      </div>
    </div>
  </section>

  <style>
    .logo-divider {
      width: 2px;
      background-color: #D5D5D5;
    }

    .payment-security {
      background: #FBFBFB;
      padding: 56px 18px;
    }

    .payment-security__inner {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      background-color: #fff;
      padding: 20px 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 1px 0px #ccc;
    }

    .payment-methods,
    .security-certifications {
      width: 48%;
    }

    .online-payments {
      display: flex;
      align-items: center;
      gap: 25px;
      flex-wrap: wrap;
    }

    .security-certifications h3,
    .online-payments h3 {
      font-size: 14px;
      font-weight: 700;
      color: #111827;
      font-family: 'Grift', sans-serif !important;
      margin-bottom: 20px;
      text-align: center;
    }

    .payment-logos,
    .security-logos {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      text-align: center;
      justify-content: center;
    }

    .payment-logos img,
    .security-logos img {
      max-width: 80px;
      height: auto;
    }

    .payment-logos img {
      max-width: 100%;
    }

    .card-logos img {
      width: 100px !important;
    }

    .card-logos {
      justify-content: flex-start;
    }

    /* For smaller screens, stack the logos vertically */
    @media (max-width: 768px) {

      .payment-methods,
      .security-certifications {
        width: 100%;
        margin-bottom: 40px;
      }

      .payment-logos,
      .security-logos {
        justify-content: center;
      }

      .online-payments {
        flex-direction: column;
        gap: 0px;
        margin-bottom: 20px;
      }

      .security-certifications h3 {
        text-align: center;
      }

      /* Stack online payment logos vertically on mobile */
      /* .online-payments-logos {
      display: grid;
      grid-template-columns: 1fr;
      gap: 20px;
    } */
    }
  </style>
  <!-- Payment & Security Section End -->



















  <script>
    // Regex
    const UK_MOBILE_REGEX = /^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/;
    const EMAIL_REGEX = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const UK_POSTCODE_REGEX = /^([A-Z]{1,2}\d[A-Z\d]?|[A-Z]{1,2}\d{2}|[A-Z]{1,2}\d{1,2}[A-Z])\s?\d[A-Z]{2}$/i;

    // Inputs
    const restaurantInput = document.getElementById("business_name");
    const nameInput = document.getElementById("name");
    const mobileInput = document.getElementById("phone_number");
    const emailInput = document.getElementById("email");
    const postcodeInput = document.getElementById("business_address");
    const termsInput = document.getElementById("terms");

    // Error containers
    const restaurantError = document.getElementById("restaurantError");
    const nameError = document.getElementById("nameError");
    const mobileError = document.getElementById("mobileError");
    const emailError = document.getElementById("emailError");
    const postcodeError = document.getElementById("postcodeError");
    const termsError = document.getElementById("CheckTermsErr");
    const captchaError = document.getElementById("CaptchaErr");
    const recaptchaRequired = document.getElementById("recaptcha_required");

    function showError(input, errorEl, message) {
      if (errorEl) errorEl.textContent = message;
      if (input && input.closest(".field")) input.closest(".field").classList.add("invalid");
    }

    function clearError(input, errorEl) {
      if (errorEl) errorEl.textContent = "";
      if (input && input.closest(".field")) input.closest(".field").classList.remove("invalid");
    }

    function formatUkPostcode(value) {
      const v = value.replace(/\s+/g, "").toUpperCase();
      if (v.length <= 3) return v;
      return v.slice(0, -3) + " " + v.slice(-3);
    }

    function validateRequiredText(input, errorEl, message) {
      if (!input.value.trim()) {
        showError(input, errorEl, message);
        return false;
      }
      clearError(input, errorEl);
      return true;
    }

    function validateMobile() {
      const v = mobileInput.value.trim();
      if (!UK_MOBILE_REGEX.test(v)) {
        showError(mobileInput, mobileError, "Enter valid UK mobile (07123XXXXXX or +447123XXXXXX)");
        return false;
      }
      clearError(mobileInput, mobileError);
      return true;
    }

    function validateEmail() {
      const v = emailInput.value.trim();
      if (!EMAIL_REGEX.test(v)) {
        showError(emailInput, emailError, "Enter valid email address");
        return false;
      }
      clearError(emailInput, emailError);
      return true;
    }

    function validatePostcode() {
      postcodeInput.value = formatUkPostcode(postcodeInput.value);
      const v = postcodeInput.value.trim();
      if (!UK_POSTCODE_REGEX.test(v)) {
        showError(postcodeInput, postcodeError, "Enter valid UK postcode (e.g. RG5 4UL)");
        return false;
      }
      clearError(postcodeInput, postcodeError);
      return true;
    }

    function validateTerms() {
      if (!termsInput.checked) {
        termsError.textContent = "Please accept the terms and conditions.";
        return false;
      }
      termsError.textContent = "";
      return true;
    }

    function validateCaptcha() {
      const response = (window.grecaptcha) ? grecaptcha.getResponse() : "";
      if (!response) {
        captchaError.textContent = "Please complete the reCAPTCHA.";
        recaptchaRequired.value = "";
        return false;
      }
      captchaError.textContent = "";
      recaptchaRequired.value = "done";
      return true;
    }

    // Live validation
    restaurantInput.addEventListener("input", () =>
      validateRequiredText(restaurantInput, restaurantError, "Restaurant name is required.")
    );
    nameInput.addEventListener("input", () =>
      validateRequiredText(nameInput, nameError, "Contact name is required.")
    );

    mobileInput.addEventListener("input", validateMobile);
    emailInput.addEventListener("input", validateEmail);

    postcodeInput.addEventListener("input", () => {

      postcodeInput.value = formatUkPostcode(postcodeInput.value);
      validatePostcode();
    });
    postcodeInput.addEventListener("blur", validatePostcode);

    window.recaptchaSuccess = function() {
      validateCaptcha();
    };

    function FormValidation() {
      let ok = true;

      if (!validateRequiredText(restaurantInput, restaurantError, "Restaurant name is required.")) ok = false;
      if (!validateRequiredText(nameInput, nameError, "Contact name is required.")) ok = false;

      if (!validateMobile()) ok = false;
      if (!validateEmail()) ok = false;
      if (!validatePostcode()) ok = false;
      if (!validateTerms()) ok = false;
      if (!validateCaptcha()) ok = false;

      return ok;
    }

    window.FormValidation = FormValidation;
  </script>
</body>

</html>