<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Digital Marketing for Restaurants & SEO Services UK
 </title>

  <!-- Optional font (remove if you want pure system fonts) -->
   <script src='https://www.google.com/recaptcha/api.js'></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="assets/fonts/grift-variable.ttf" rel="stylesheet">

  <style>
    :root{
      --red:#ef233c;
      --red-dark:#d90429;
      --text:#0f172a;
      --muted:#475569;
      --card:#ffffff;
      /* --border:#e5e7eb; */
      --border:#C8C8C8;
      --shadow: 0 18px 45px rgba(15, 23, 42, .12);
      --radius: 18px;
    }

    *{ box-sizing:border-box; }
    body{
      margin:0;
      font-family: 'Grift', sans-serif !important;
      /* font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; */
      color:var(--text);
      background:#fff;
    }

    /* Section background (soft curved feel like screenshot) */
    .hero{
      position:relative;
      overflow:hidden;
      padding:56px 20px;
      min-height: 70vh;
      display:flex;
      align-items:center;
      background-image: url('assets/images/digital-marketing/hero-bg.png');
      background-size: cover;
      background-repeat: no-repeat;
    }
    .hero::before{
      content:"";
      position:absolute;
      inset:-140px -240px -140px -240px;
      background:
        radial-gradient(800px 480px at 18% 55%, rgba(0,0,0,0.06), transparent 65%),
        radial-gradient(900px 520px at 85% 55%, rgba(0,0,0,0.07), transparent 62%),
        radial-gradient(700px 420px at 50% 110%, rgba(0,0,0,0.05), transparent 60%);
      filter: blur(0px);
      opacity:.6;
      pointer-events:none;
    }
    /* Subtle wave overlay using inline SVG */
    .hero::after{
      content:"";
      position:absolute;
      inset:0;
      background:
        url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 700'%3E%3Cpath d='M0,560 C260,430 420,720 730,565 C970,445 1160,580 1600,410 L1600,700 L0,700 Z' fill='%23000000' opacity='0.035'/%3E%3Cpath d='M0,620 C300,470 520,750 820,590 C1040,470 1260,610 1600,460 L1600,700 L0,700 Z' fill='%23000000' opacity='0.03'/%3E%3C/svg%3E")
        center / cover no-repeat;
      opacity:.7;
      pointer-events:none;
      mix-blend-mode:multiply;
    }

    .hero__inner{
      position:relative;
      width:min(1200px, 100%);
      margin:0 auto;
      display:flex;
      align-items:center;
      gap:56px;
    }

    /* LEFT COPY */
    .hero__copy{
      flex:1;
      padding:10px 10px 10px 0;
    }
    .hero__copy h1{
      margin:0 0 18px;
      line-height:1.05;
      /* letter-spacing:-0.02em; */
      text-transform: capitalize;
      font-size: clamp(45px, 3.6vw, 54px);
      font-family: 'Grift', sans-serif !important;
      font-weight: 800;
      color: #090909;
    }
    .hero__copy .accent{
      color:var(--red);
      font-weight:800;
      display:inline-block;
      font-size: clamp(45px, 1.6vw, 54px);
    }
    .hero__copy p{
      margin:0;
      max-width: 52ch;
      color: var(--muted);
      font-size: 16px;
      line-height: 1.6;
      font-weight: 600;
      font-family: 'Grift', sans-serif !important;
    }

    /* RIGHT CARD */
    .hero__cardWrap{
      flex:1;
      display:flex;
      justify-content:flex-end;
    }
    .card{
      width:min(520px, 100%);
      background:var(--card);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding:32px 34px;
    }
    .card__title{
      text-align:center;
      font-size: 26px;
      font-weight: 800;
      margin: 4px 0 22px;
      letter-spacing:-0.01em;
      font-family: 'Grift', sans-serif !important;
    }
    .card__title .brand{
      color:var(--red);
    }

    .fields{
      display:flex;
      flex-direction:column;
      gap:12px;
      margin-top:10px;
    }

    .field{
      position:relative;
      display:flex;
      align-items:center;
      height:46px;
      border:1px solid var(--border);
      border-radius: 10px;
      background:#fff;
      padding-left:44px;
      transition: border-color .15s ease, box-shadow .15s ease;
    }
    .field:focus-within{
      border-color: rgba(239,35,60,.45);
      box-shadow: 0 0 0 4px rgba(239,35,60,.10);
    }

    .field svg{
      position:absolute;
      left:14px;
      width:18px;
      height:18px;
      fill: var(--red);
      opacity: .95;
    }

    .field img{
      position:absolute;
      left:14px;
      width:18px;
      height:18px;
      fill: var(--red);
      opacity: .95;
    }

    .field input{
      width:100%;
      height:100%;
      border:0;
      outline:0;
      padding: 0 14px 0 0;
      font-size: 14px;
      color: var(--text);
      background: transparent;
      font-family: 'Grift', sans-serif !important;
      /* font-weight: 600; */
    }
    .field input::placeholder{
      color:#94a3b8;
      font-weight: 600;
    }

    .btn{
      margin-top:20px;
      width:100%;
      height:52px;
      border:0;
      border-radius: 10px;
      background: var(--red);
      color:#fff;
      font-weight:800;
      font-size: 16px;
      cursor:pointer;
      box-shadow: 0 10px 20px rgba(239,35,60,.25);
      transition: transform .06s ease, filter .15s ease;
    }
    .btn:active{ transform: translateY(1px); background-color: var(--red-dark); color: white;}
    .btn:hover{ filter: brightness(0.98); background-color: var(--red-dark); color: white;}

    /* RESPONSIVE */
    @media (max-width: 980px){
      .hero{ padding:44px 18px; }
      .hero__inner{
        flex-direction:column;
        align-items:stretch;
        gap:26px;
      }
      .hero__cardWrap{ justify-content:stretch; }
      .card{ width:100%; }
      .hero__copy p{ max-width: 65ch; }
      .hero__copy h1{
        font-size: clamp(32px, 3.6vw, 54px);
      }
      .hero__copy .accent{
        font-size: clamp(27px, 3.6vw, 54px);
      }

      .field input { font-size: 13px !important; }
      .hero__copy p{
        margin:0;
        max-width: 52ch;
        color: var(--muted);
        font-size: 14px;
        line-height: 1.6;
        font-weight: 600;
        font-family: 'Grift', sans-serif !important;
      }
    }
  </style>
</head>

<body>
  <!-- Hero Section Start-->
  <section class="hero">
    <div class="hero__inner">
      <!-- LEFT -->
      <div class="hero__copy">
        <h1>
          Boost Your<br>
          Restaurant Orders<br>
          <span class="accent">— With ChefOnline SEO</span>
        </h1>
        <p>
          Stop leaving your visibility to chance. Be seen when customers are ready to order. Get more reservations and
          online orders with expert digital marketing for restaurants designed to increase visibility, engagement and
          sales across the UK. <br> <br>
          We help restaurants and takeaways dominate search results, attract local customers and turn online traffic
          into real bookings and orders.
        </p>
      </div>

      <!-- RIGHT -->
      <div class="hero__cardWrap">
        <div class="card">
          <div class="card__title">
            Become a <span class="brand">ChefOnline Partner</span>
          </div>

          <form class="fields"  action="https://www.chefonline.co.uk/storage-business-details_v2" method="post" onsubmit="return FormValidation();">
            <label class="field">
              <!-- user icon -->
              <!-- <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12 12a4 4 0 1 0-4-4 4 4 0 0 0 4 4Zm0 2c-4.42 0-8 2-8 4.5A1.5 1.5 0 0 0 5.5 20h13A1.5 1.5 0 0 0 20 18.5C20 16 16.42 14 12 14Z"/>
              </svg> -->
              <img src="assets/images/digital-marketing/person-icon.png" alt="restaurant icon" />
              <input type="text" placeholder="Enter Restaurant Name" class="input" id="business_name" name="business_name" maxlength="100"   />
            </label>

            <label class="field">
              <!-- <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12 12a4 4 0 1 0-4-4 4 4 0 0 0 4 4Zm0 2c-4.42 0-8 2-8 4.5A1.5 1.5 0 0 0 5.5 20h13A1.5 1.5 0 0 0 20 18.5C20 16 16.42 14 12 14Z"/>
              </svg> -->
              <img src="assets/images/digital-marketing/user-icon.png" alt="user icon" />
              <input type="text" id="name" name="name" maxlength="50" placeholder="Contact Name"/>
            </label>

            <label class="field">
              <!-- phone icon -->
              <!-- <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M17 2H7a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3Zm-5 19a1.25 1.25 0 1 1 1.25-1.25A1.25 1.25 0 0 1 12 21Z"/>
              </svg> -->
              <img src="assets/images/digital-marketing/phone-icon.png" alt="phone icon" />
              <input type="text"
                                           
                                            id="phone_number"
                                            name="phone_number"
                                            placeholder="Mobile Number" 
                                            oninvalid="this.setCustomValidity('Invalid number')"
                                            oninput="this.setCustomValidity('')"
                                             />
                                          
            </label>

            <label class="field">
              <!-- email/chat icon -->
              <!-- <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M20 4H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h3v3.2a.8.8 0 0 0 1.37.56L13.12 18H20a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Zm0 4.2-8 5.1-8-5.1V6l8 5.1L20 6Z"/>
              </svg> -->
              <img src="assets/images/digital-marketing/message-icon.png" alt="message icon" />
              <input placeholder="Email Address" type="text" id="email" class="input" name="email"
    maxlength="50" />
            </label>

            <label class="field">
              <!-- location icon -->
              <!-- <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 10a3 3 0 1 1 3-3 3 3 0 0 1-3 3Z"/>
              </svg> -->
              <img src="assets/images/digital-marketing/location-icon.png" alt="location icon" />
              <input type="text" placeholder="Post Code" id="business_address" name="business_address" maxlength="100" />
            </label>

             <label class="form-element">
                  <label for="terms" class="pull-left" style="font-weight:normal;">
                      <input type="checkbox" id="terms" name="terms" value="1" checked hidden>

                      <span id="TermsText" class="text-inline" style="color:black">
                          I have read and accepted the <a target="_blank" href="https://www.chefonline.com/terms-conditions"><u>terms and conditions</u></a>.
                      </span>
                      <div class="warning-message" id="CheckTermsErr"></div>
                  </label>
                  <div class="clearfix"></div>
              </label>

            <label class="form-element">
                <div>
                    <!-- REQUIRED reCAPTCHA FIX — ONLY CHANGE MADE -->
                    <div class="g-recaptcha"
                        data-sitekey="6Lc5LU8UAAAAAAfeOoxQUnaFaae0ZlnIWbCEUGf9"
                        data-callback="recaptchaSuccess">
                    </div>
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
  <!-- Hero Section End -->

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
      :root{
        --red:#ef233c;
        --panel:#f43b56;        /* slightly lighter red for right panel */
        --white:#fff;
      }

      .trust{
        background: var(--red);
        padding: 56px 18px;
      }

      .trust__inner{
        width: min(1100px, 100%);
        margin: 0 auto;
      }

      .trust h2{
        margin: 0 0 26px;
        text-align: center;
        color: var(--white);
        font-size: clamp(45px, 3vw, 40px);
        line-height: 1.15;
        font-family: 'Grift', sans-serif !important;
        font-weight: 600;
        letter-spacing: -0.02em;
      }
      .trust h2 span{
        font-weight: 900;
      }

      .trust__row{
        display: flex;
        gap: 26px;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
      }

      /* Left cards */
      .trust__cards{
        display: flex;
        gap: 26px;
        flex-wrap: wrap;
        justify-content: center;
      }

      .trust__card{
        width: 250px;
        max-width: 100%;
        background: var(--white);
        border-radius: 10px;
        /* padding: 18px 18px 16px; */
        display: grid;
        place-items: center;
        box-shadow: 0 14px 28px rgba(0,0,0,.12);
      }

      .trust__logo{
        object-fit: contain;
        display: block;
        width: 100%;
        height: 100%;
      }

      .trust__cardText{
        margin-top: 8px;
        font-size: 18px;
        font-weight: 700;
        color: #111827;
      }

      /* Right panel */
      .trust__panel{
        width: 520px;
        max-width: 100%;
        background: var(--panel);
        border-radius: 2px;
        padding: 22px 22px;
        box-shadow: 0 14px 28px rgba(0,0,0,.10);
      }

      .trust__list{
        list-style: none;
        margin: 0;
        padding: 0;
        display: grid;
        gap: 14px;
      }

      .trust__list li{
        display: flex;
        align-items: center;
        gap: 12px;
        color: var(--white);
        font-size: 16px;
        font-family: 'Grift', sans-serif !important;
        font-weight: 600;
      }

      .trust__check{
        width: 22px;
        height: 22px;
        border-radius: 999px;
        border: 2px solid rgba(255,255,255,.95);
        display: grid;
        place-items: center;
        font-size: 13px;
        font-weight: 900;
        line-height: 1;
        flex: 0 0 22px;
      }

      /* Responsive: stack like screenshot behavior */
      @media (max-width: 980px){
        .trust__row{ gap: 18px; }
        .trust__card{ width: min(360px, 100%); }
        .trust__panel{ width: min(720px, 100%); }
        .trust__list li {
          font-size: 14px;
        }
      }
    </style>
  <!-- Banner Section End -->


  <script>
// const input = document.getElementById("phone_number");

// input.addEventListener("input", function () {
//     // Only digits
//     let v = this.value.replace(/\D/g, "");

//     // Force prefix 07
//     if (!v.startsWith("07")) {
//         v = "07" + v.replace(/^0*/, "");
//     }

//     // Limit to 11 digits total
//     v = v.substring(0, 11);

//     this.value = v;
// })

// document.getElementById("email").addEventListener("input", function () {

//     const email = this.value.trim(); // <-- FIXED
//     const emailErr = document.getElementById("BusinessEmailErr");

//     const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,10}(\.[a-zA-Z]{2,10})*$/;

//     if (email === "") {
//         emailErr.innerHTML = "Required";
//         emailErr.style.color = "red";
//     }
//     else if (!emailRegex.test(email)) {
//         emailErr.innerHTML = "Invalid email";
//         emailErr.style.color = "red";
//     } 
//     else {
//         emailErr.innerHTML = "";
//     }
// });
// function recaptchaSuccess() {
//     document.getElementById("recaptcha_required").value = "done";
//     document.getElementById("CaptchaErr").innerHTML = "";
// }

function FormValidation() {

    let valid = true;


//     const phone = document.getElementById("phone_number").value.trim();
//     const phoneErr = document.getElementById("RestaurantPhoneErr");
//     const phoneRegex = /^07\d{9}$/;  // 07 + 9 digits

//     if (!phoneRegex.test(phone)) {
//         phoneErr.innerHTML = "Invalid number";
//         phoneErr.style.color = "red";
//         valid = false;
//     } else {
//         phoneErr.innerHTML = "";
//     }

//      // -------------------------
//     // EMAIL VALIDATION ADDED
//     // -------------------------
//     const email = document.getElementById("email").value.trim();
//     const emailErr = document.getElementById("BusinessEmailErr");

//     // Regex supporting .com, .co.uk, multi-level domains
//     const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,10}(\.[a-zA-Z]{2,10})*$/;

//     if (!emailRegex.test(email)) {
//         emailErr.innerHTML = "Invalid email";
//         emailErr.style.color = "red";
//         valid = false;
//     } 
//     else {
//         emailErr.innerHTML = "";
//     }


   

    if (!document.getElementById("terms").checked) valid = false;

    var captchaResponse = grecaptcha.getResponse();
    if (captchaResponse.length === 0) {
        document.getElementById("recaptcha_required").value = "";
        document.getElementById("CaptchaErr").innerHTML = "Please complete the reCAPTCHA.";
        valid = false;
    }

    return valid;
}


</script>
</body>
</html>