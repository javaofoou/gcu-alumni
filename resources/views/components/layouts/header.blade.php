<head>
    
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <style>
    /* ===== MAIN SECTION ===== */
    .branch-section {
      max-width: 1200px;
      margin: 50px auto;
      padding: 0 20px;
    }

    .branch-title {
      text-align: center;
      font-size: 2rem;
      color: var(--red);
      font-weight: 800;
      margin-bottom: 10px;
      text-transform: uppercase;
      text-shadow: 1px 1px 0 var(--yellow);
    }

    .branch-sub {
      text-align: center;
      color: #333;
      margin-bottom: 50px;
      font-size: 1rem;
    }

    /* ===== BRANCH CATEGORY ===== */
    .branch-category {
      background: var(--white);
      border-left: 6px solid var(--red);
      border-radius: 10px;
      padding: 30px;
      margin-bottom: 40px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .branch-category:hover {
      transform: translateY(-4px);
      box-shadow: 0 6px 18px rgba(179,0,0,0.3);
    }

    .branch-category h2 {
      color: var(--black);
      font-size: 1.6rem;
      margin-bottom: 25px;
      display: flex;
      align-items: center;
      gap: 10px;
      border-bottom: 2px solid var(--yellow);
      padding-bottom: 8px;
    }

    /* ===== BRANCH LIST ===== */
    .branch-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 18px;
      margin-top: 20px;
    }

    .branch-item {
      background: var(--red);
      color: var(--white);
      padding: 14px 15px;
      text-align: center;
      font-weight: 600;
      border-radius: 8px;
      font-size: 1rem;
      border: 2px solid var(--yellow);
      transition: all 0.3s ease;
    }

    .branch-item:hover {
      background: var(--yellow);
      color: var(--black);
      transform: scale(1.05);
      font-weight: 700;
    }

    /* ===== RESPONSIVE DESIGN ===== */
    @media (max-width: 992px) {
      .branch-title { font-size: 1.8rem; }
    }

    @media (max-width: 768px) {
      .branch-category { padding: 25px; }
      .branch-category h2 { font-size: 1.4rem; }
      .branch-item { font-size: 0.95rem; }
    }

    @media (max-width: 480px) {
      .branch-title { font-size: 1.5rem; }
      .branch-item { padding: 12px 10px; font-size: 0.9rem; }
      .branch-category { padding: 20px; }
    }
   
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/07fa3d3b0b.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
 <header>
  <div class="header-top">
   <a href="/"><img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761476209/FB_IMG_1761475995419_boq5m0.jpg" class="logo" alt="Logo"></a> 
     <span id="header-clock" class="header-clock" aria-live="polite" title="Current time (Africa/Lagos)">
      <div class="clock-time" id="clock-time">--:--:--</div>
      <div class="clock-date" id="clock-date">Loading…</div>
    </span>
    <div class="ticker"><marquee>Up Umuahia! Up Umuahia!!</marquee></div>
  </div>

 
<!-- ===== NAVIGATION BAR ===== -->
<div class="nav">
  <div class="nav-left">
    <button class="hamburger" id="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <div class="links" id="nav-links">
       <a href="/" class="ham-link"><i class="fa fa-home"></i></a>
      <a href="#" onclick="showHideAbout()" class="ham-link">About Us ▾</a>
      <ul class="dropdown-menu" id="about-box">
        <li><a href="#history">History</a></li>
        <li><a href="/branch">Our Branch</a></li>
          <li><a href="/values">Core Values</a></li>
         <li><a href="/fedt">FEDT</a></li>
        <li><a href="/nec">NEC</a></li>
        <li><a href="/alumni/classes">Class</a></li>
      </ul> 
      <a href="/hall-of-fame" class="ham-link">Hall of Fame</a>
      <a href="/events" class="ham-link">Events</a>
      <a href="/gallery" class="ham-link"><i class="fa fa-image"></i> Gallery</a>
      <a href="/projects" class="ham-link"><i class="fa fa-building"></i> Projects</a>
      <!--<a href="/archives" class="ham-link"><i class="fa fa-box-archive"></i> Archive</a>-->
    <a href="#" onclick="showHideAbout()" class="ham-link"><i class="fa fa-box-archive"></i>Archive ▾</a>
      <ul class="dropdown-menu" id="about-box">
        <li><a href="/gallery">Gallery</a></li>
        <li><a href="/art">Art Gallery</a></li>
        <li><a href="/social">Social Works</a></li>
        <li><a href="/innovation">Recent Innovations</a></li>
        <li><a href="/award">Awards</a></li>
      </ul>
    </div>
    </div>
        <!-- RIGHT SIDE (AUTH BUTTONS) -->
        <div class="nav-right">
            @if(!session()->has('alumni_user'))
                <a href="{{ route('auth.show.create.account') }}" class="cta"><i class="fa fa-user-plus"></i> Sign Up</a>
                <a href="{{ route('login') }}" class="pill"><i class="fa fa-right-to-bracket"></i> Login</a>
            @else
                <a href="/dashboard" class="pill"><i class="fa fa-user-circle"></i></a>
                <a href="{{ route('logout') }}" class="cta"><i class="fa fa-power-off"></i> Logout</a>
            @endif
        <!-- Donate Button -->
<button id="donateBtn" class="donate">Donate <i class="fa fa-usd"></i></button>

<!-- ======= DONATION MODAL ======= -->
<div id="donateModal" class="modal" aria-hidden="true">
  <div class="modal-content">

    <button id="donateClose" class="modal-close">&times;</button>

    <h3>Support GCU Alumni Association</h3>
    <p>Your donations help sustain alumni projects and support our community.</p>

    <div class="donation-box">
      <p><strong>Bank Name:</strong> Signature Bank</p>
      <p><strong>Account Name:</strong> Fisher Educational Development Trust Account</p>

      <p>
        <strong>Account Number:</strong> 
        <span id="acctNumber">2000387708</span>
        <button id="copyBtn" class="copy-btn">Copy</button>
      </p>
    </div>

    <p style="font-size: 0.85rem; color:#444; margin-top:10px;">
      Thank you for supporting Government College Umuahia Alumni.
    </p>

  </div>
</div>
        </div>
    </div>
    </header>
 <!-- Hero Slider -->
<div id="head_animation">
    <swiper-container
      class="mySwiper"
      pagination="true"
      navigation="true"
      space-between="30"
      centered-slides="true"
      autoplay-delay="4000"
      autoplay-disable-on-interaction="false"
      effect="fade"
      loop="true"
      parallax="true">

    <!-- Slide 1 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1764025503/IMG-20251025-WA0036_1_hwjqhs.jpg"/>
        <div class="slide-caption">
            <h2>Umuahians Connect</h2>
            <p>Interact, Chat, Share, and Relate — Building lasting bonds.</p>
        </div>
    </swiper-slide>

    <!-- Slide 2 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761130085/IMG-20251019-WA0000_pkih9q.jpg"/>
        <div class="slide-caption">
            <h2>Celebrating Together</h2>
            <p>Our alumni moments captured with passion and joy.</p>
        </div>
    </swiper-slide>

    <!-- Slide 3 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469800/IMG-20251209-WA0029_axzt4t.jpg"/>
        <div class="slide-caption">
            <h2>Empowering Generations</h2>
            <p>Sharing wisdom, experience, and inspiration across years.</p>
        </div>
    </swiper-slide>

    <!-- Slide 4 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761863055/IMG-20251030-WA0032_fj9fon.jpg"/>
        <div class="slide-caption">
            <h2>Networking Made Easy</h2>
            <p>Connect with alumni across fields and locations.</p>
        </div>
    </swiper-slide>

    <!-- Slide 5 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761128679/boardoftrustees_stnyro.jpg"/>
        <div class="slide-caption">
            <h2>Meet Our Trustees</h2>
            <p>Guiding the alumni community with vision and leadership.</p>
        </div>
    </swiper-slide>

    <!-- Slide 6 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469799/IMG-20251029-WA0045_4_hibcqv.jpg"/>
        <div class="slide-caption">
            <h2>Alumni Engagement</h2>
            <p>Active participation, collaboration, and meaningful impact.</p>
        </div>
    </swiper-slide>

    <!-- Slide 7 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469799/IMG-20251031-WA0014_dghhc8.jpg"/>
        <div class="slide-caption">
            <h2>Sharing Success Stories</h2>
            <p>Highlighting achievements that inspire the next generation.</p>
        </div>
    </swiper-slide>

    <!-- Slide 8 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469799/IMG-20251209-WA0032_ogeumr.jpg"/>
        <div class="slide-caption">
            <h2>Collaborative Learning</h2>
            <p>Engage in knowledge exchange and professional growth.</p>
        </div>
    </swiper-slide>

    <!-- Slide 9 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469823/IMG-20251031-WA0005_uscpnh.jpg"/>
        <div class="slide-caption">
            <h2>Event Highlights</h2>
            <p>Memorable alumni gatherings that bring energy and fun.</p>
        </div>
    </swiper-slide>

    <!-- Slide 10 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469799/IMG-20251209-WA0031_fyqck1.jpg"/>
        <div class="slide-caption">
            <h2>Community Spirit</h2>
            <p>Supporting each other while staying connected globally.</p>
        </div>
    </swiper-slide>

    <!-- Slide 11 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469800/IMG-20251209-WA0030_xzcder.jpg"/>
        <div class="slide-caption">
            <h2>Dynamic Gatherings</h2>
            <p>Alumni events filled with energy, laughter, and collaboration.</p>
        </div>
    </swiper-slide>

    <!-- Slide 12 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761455737/Slide28_e1gpqb.jpg"/>
        <div class="slide-caption">
            <h2>Milestone Moments</h2>
            <p>Capturing unforgettable memories of the alumni journey.</p>
        </div>
    </swiper-slide>

    <!-- Slide 13 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469825/IMG-20251025-WA0026_1_ndtcsc.jpg"/>
        <div class="slide-caption">
            <h2>Inspiring Alumni</h2>
            <p>Stories of dedication, impact, and excellence in every field.</p>
        </div>
    </swiper-slide>

    <!-- Slide 14 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761476210/FB_IMG_1761475899223_o2l5b9.jpg"/>
        <div class="slide-caption">
            <h2>Bonding Through Fun</h2>
            <p>Enjoying moments that strengthen our alumni network.</p>
        </div>
    </swiper-slide>

    <!-- Slide 15 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469824/IMG-20251025-WA0053_1_eubism.jpg"/>
        <div class="slide-caption">
            <h2>Connecting Generations</h2>
            <p>Linking past, present, and future Umuahians in harmony.</p>
        </div>
    </swiper-slide>

    <!-- Slide 16 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761973650/WhatsApp_Image_2025-10-28_at_05.13.50_3f328e18_ry5ftp.jpg"/>
        <div class="slide-caption">
            <h2>Celebrating Achievements</h2>
            <p>Recognizing professional and academic successes of alumni.</p>
        </div>
    </swiper-slide>

    <!-- Slide 17 -->
    <swiper-slide>
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469799/IMG-20251025-WA0033_1_dgd0mm.jpg"/>
        <div class="slide-caption">
            <h2>Legacy & Inspiration</h2>
            <p>Continuing the tradition of excellence for future alumni.</p>
        </div>
    </swiper-slide>

</swiper-container>

    </div>
