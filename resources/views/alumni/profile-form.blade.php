<!DOCTYPE html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/07fa3d3b0b.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
<style>
/* -----------------------------------------
   Global Styles
----------------------------------------- */
body {
    font-family: "Segoe UI", Arial, sans-serif;
    margin: 0;
    background: #f4f6f8;
    color: #333;
}

/* -----------------------------------------
   Form Container
----------------------------------------- */
.form-container {
    width: 95%;
    max-width: 900px;
    margin: 40px auto;
    background: #ffffff;
    padding: 35px 40px;
    border-radius: 12px;
    box-shadow: 0px 5px 25px rgba(0,0,0,0.07);
}

.form-container h2 {
    font-size: 28px;
    text-align: center;
    margin-bottom: 25px;
    font-weight: 700;
    color: rgb(179, 0, 0);
}

/* -----------------------------------------
   Alerts (Success & Error)
----------------------------------------- */
.alert {
    padding: 15px 18px;
    border-radius: 8px;
    margin-bottom: 20px;
    font-size: 14px;
    line-height: 1.5;
}

.alert.success {
    background: #d4edda;
    color: #155724;
    border-left: 5px solid #28a745;
}

.alert.error {
    background: #f8d7da;
    color: #721c24;
    border-left: 5px solid #dc3545;
}

/* -----------------------------------------
   Form Grids & Fields
----------------------------------------- */
.grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 22px;
}

.fields {
    display: flex;
    flex-direction: column;
}

.fields.full {
    grid-column: span 2;
}

.fields label {
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 6px;
    color: #444;
}

.fields input {
    padding: 12px 14px;
    font-size: 15px;
    border: 1px solid #cfd6df;
    border-radius: 8px;
    background: #fafbfd;
    transition: border 0.25s ease, box-shadow 0.25s ease;
}

.fields input:focus {
    outline: none;
    border-color: #a50000;
    box-shadow: 0px 0px 0px 3px rgba(0,123,255,0.15);
}

/* -----------------------------------------
   Submit Button
----------------------------------------- */
button[type="submit"] {
    width: 100%;
    background: rgb(196, 0, 0);
    color: #fff;
    padding: 14px 0;
    border: none;
    border-radius: 10px;
    font-size: 17px;
    cursor: pointer;
    margin-top: 25px;
    font-weight: 600;
    transition: background 0.25s ease, transform 0.15s ease;
}

button[type="submit"]:hover {
    background: #0056b3;
    transform: translateY(-2px);
}

button[type="submit"]:active {
    transform: translateY(0px);
}

/* -----------------------------------------
   Responsive Design
----------------------------------------- */
@media (max-width: 768px) {
    .grid {
        grid-template-columns: 1fr;
    }

    .fields.full {
        grid-column: span 1;
    }

    .form-container {
        padding: 25px 20px;
    }

    .form-container h2 {
        font-size: 24px;
    }
}

@media (max-width: 480px) {
    .form-container {
        margin-top: 20px;
        padding: 20px 18px;
    }

    button[type="submit"] {
        font-size: 16px;
        padding: 12px 0;
    }
}

select {
    padding: 10px 12px;
    border-radius: 8px;
    border: 1px solid #333;
    background: #222;
    color: #fff;
    font-size: 14px;
    outline: none;
    transition: all 0.3s ease;
}

 select:focus {
    border-color: #e10600;
    box-shadow: 0 0 6px rgba(225,6,0,0.5);
}
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
<div class="form-container">
  <h2>Alumni Registration Form</h2>

  {{-- Success flash --}}
  @if(session('success'))
    <div class="alert success">{{ session('success') }}</div>
  @endif

  {{-- Validation errors --}}
  @if ($errors->any())
    <div class="alert error">
      <ul style="margin:0; padding-left:18px;">
        @foreach ($errors->all() as $e)
          <li>{{ $e }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('alumni.register.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="grid">
      <div class="fields">
        <label>Full Name *</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
      </div>

      <div class="fields">
        <label>Nick Name</label>
        <input type="text" name="nickname" value="{{ old('nickname') }}">
      </div>

      <div class="fields">
        <label>Class (Year of Entry) *</label>
        <select name="entry" required>
          <option value="">Select Year</option>
          @for($y = date('Y'); $y >= 1929; $y--)
            <option value="{{ $y }}" {{ old('entry') == $y ? 'selected' : '' }}>{{ $y }}</option>
          @endfor
        </select>
      </div>

      <div class="fields">
        <label>Past Class Captain's Name</label>
        <input type="text" name="past_class_captain" value="{{ old('past_class_captain') }}">
      </div>

      <div class="fields">
        <label>House *</label>
        <select name="house" required>
          <option value="">Select House</option>
          <option value="Cozens" {{ old('house') == 'Cozens' ? 'selected' : '' }}>Cozens</option>
          <option value="Erekosima" {{ old('house') == 'Erekosima' ? 'selected' : '' }}>Erekosima</option>
          <option value="Extension" {{ old('house') == 'Extension' ? 'selected' : '' }}>Extension</option>
          <option value="Fisher" {{ old('house') == 'Fisher' ? 'selected' : '' }}>Fisher</option>
          <option value="Kent" {{ old('house') == 'Kent' ? 'selected' : '' }}>Kent</option>
          <option value="New" {{ old('house') == 'New' ? 'selected' : '' }}>New</option>
          <option value="Niger" {{ old('house') == 'Niger' ? 'selected' : '' }}>Niger</option>
          <option value="Nile" {{ old('house') == 'Nile' ? 'selected' : '' }}>Nile</option>
          <option value="School" {{ old('house') == 'School' ? 'selected' : '' }}>School</option>
          <option value="Simpson" {{ old('house') == 'Simpson' ? 'selected' : '' }}>Simpson</option>
          <option value="Wareham" {{ old('house') == 'Wareham' ? 'selected' : '' }}>Wareham</option>
        </select>
      </div>

      <div class="fields">
        <label>Old Principal's Name</label>
        <input type="text" name="old_principal" value="{{ old('old_principal') }}">
      </div>

      <div class="fields">
        <label>Current Residence</label>
        <input type="text" name="residence" value="{{ old('residence') }}" placeholder="City / State / Country">
      </div>

      <div class="fields">
        <label>Country</label>
        <input type="text" name="country" value="{{ old('country') }}">
      </div>

      <div class="fields">
        <label>City / Location</label>
        <input type="text" name="location" value="{{ old('location') }}">
      </div>

      <div class="fields">
        <label>Profession</label>
        <input type="text" name="profession" value="{{ old('profession') }}">
      </div>

      <div class="fields">
        <label>Business Category</label>
        <input type="text" name="business_category" value="{{ old('business_category') }}">
      </div>

      <div class="fields">
        <label>Business Interest</label>
        <input type="text" name="business_interest" value="{{ old('business_interest') }}">
      </div>

      <div class="fields">
        <label>Current Trade</label>
        <input type="text" name="trade" value="{{ old('trade') }}">
      </div>

      <div class="fields">
        <label>Contact</label>
        <input type="text" name="contact" value="{{ old('contact') }}">
      </div>

      <div class="fields">
        <label>NIN</label>
        <input type="text" name="nin" value="{{ old('nin') }}">
      </div>

      <div class="fields">
        <label>Your Email *</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
      </div>

      <div class="fields full">
        <label>Passport Photo</label>
        <input type="file" name="image" accept="image/*">
      </div>
    </div>

    <button type="submit">Submit</button>
  </form>
  <script src="{{ asset('js/header.js') }}"></script>
</div>
