<!DOCTYPE html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/07fa3d3b0b.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
 
<style>
body {font-family: Arial, sans-serif; background:#fafafa; margin:0; padding:0;}
.container {max-width:400px; margin:80px auto; background:#fff; padding:25px; border-radius:8px; box-shadow:0 4px 14px rgba(0,0,0,0.1);}
h2 {text-align:center; color:#B22222;}
input {width:100%; padding:12px; margin-top:8px; border:1px solid #bbb; border-radius:6px;}
form button {width:100%; background:#B22222; color:#fff; border:none; padding:12px; border-radius:6px; margin-top:15px; cursor:pointer;}
.alert {padding:10px; background:#ffecec; border:1px solid #ffb3b3; color:#a70000; border-radius:6px; margin-bottom:10px;}
</style>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
 <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
  <div class="header-top">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761476209/FB_IMG_1761475995419_boq5m0.jpg" class="logo" alt="Logo">
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
      <a href="#" onclick="showHideAbout()" class="ham-link">About Us ▾</a>
      <ul class="dropdown-menu" id="about-box">
        <li><a href="#history">History</a></li>
        <li><a href="/branch">Our Branch</a></li>
        <li><a href="/values">Our Core Values</a></li>
        <li><a href="/fedt">FEDT</a></li>
        <li><a href="/nec">NEC</a></li>
      </ul>

      <a href="/hall-of-fame" class="ham-link">Hall of Fame</a>
      <a href="/events" class="ham-link">Events</a>
      <a href="/gallery" class="ham-link"><i class="fa fa-image"></i> Gallery</a>
      <a href="/projects" class="ham-link"><i class="fa fa-building"></i> Projects</a>
      <a href="/archives" class="ham-link"><i class="fa fa-box-archive"></i> Archive</a>
    </div>
    </div>
        <!-- RIGHT SIDE (AUTH BUTTONS) -->
        <div class="nav-right">
            @if(!session()->has('user_email'))
                <a href="{{ route('auth.show.create.account') }}" class="cta"><i class="fa fa-user-plus"></i> Sign Up</a>
                <a href="{{ route('login') }}" class="pill"><i class="fa fa-right-to-bracket"></i> Login</a>
            @else
                <a href="/dashboard" class="pill"><i class="fa fa-user-circle"></i> Dashboard</a>
                <a href="{{ route('logout') }}" class="cta"><i class="fa fa-power-off"></i> Logout</a>
            @endif
        <!-- Donate Button -->
<button id="donateBtn" class="donate">Donate <i class="fa fa-outstretched-hand"></i></button>

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
<div class="container">
<h2>Login</h2>

@if(session('success'))
<div class="alert" style="background:#e6ffed;border-color:#b2f0c0;color:#0a662a;">
    {{ session('success') }}
</div>
@endif

@if($errors->any())
<div class="alert">
    {{ $errors->first() }}
</div>
@endif

<form method="POST" action="{{ route('login.submit') }}">
    @csrf
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

</div>
</body>
</html>
 <script src="{{ asset('js/header.js') }}"></script>
