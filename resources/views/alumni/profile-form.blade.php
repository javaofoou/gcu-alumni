<x-layouts.app/>
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
        <label>Current Class Captain's Name</label>
        <input type="text" name="current_class_captain" value="{{ old('current_class_captain') }}">
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
  <label>Profession *</label>
  <select name="profession" required>
    <option value="">Select Profession</option>
    <option value="Academia" {{ old('profession') == 'Academia' ? 'selected' : '' }}>Academia</option>
    <option value="Accountant" {{ old('profession') == 'Accountant' ? 'selected' : '' }}>Accountant</option>
    <option value="Activist" {{ old('profession') == 'Activist' ? 'selected' : '' }}>Activist</option>
    <option value="Actor" {{ old('profession') == 'Actor' ? 'selected' : '' }}>Actor</option>
    <option value="Administrator" {{ old('profession') == 'Administrator' ? 'selected' : '' }}>Administrator</option>
    <option value="Agriculture" {{ old('profession') == 'Agriculture' ? 'selected' : '' }}>Agriculture</option>
    <option value="Air Force" {{ old('profession') == 'Air Force' ? 'selected' : '' }}>Air Force</option>
    <option value="Anthropologist" {{ old('profession') == 'Anthropologist' ? 'selected' : '' }}>Anthropologist</option>
    <option value="Architect" {{ old('profession') == 'Architect' ? 'selected' : '' }}>Architect</option>
    <option value="Artist" {{ old('profession') == 'Artist' ? 'selected' : '' }}>Artist</option>
    <option value="Athlete" {{ old('profession') == 'Athlete' ? 'selected' : '' }}>Athlete</option>
    <option value="Automobile Engineer" {{ old('profession') == 'Automobile Engineer' ? 'selected' : '' }}>Automobile Engineer</option>
    <option value="Aeronautical Engineer" {{ old('profession') == 'Aeronautical Engineer' ? 'selected' : '' }}>Aeronautical Engineer</option>
    <option value="Author" {{ old('profession') == 'Author' ? 'selected' : '' }}>Author</option>
    <option value="Aviation Professional" {{ old('profession') == 'Aviation Professional' ? 'selected' : '' }}>Aviation Professional</option>
    <option value="Banker" {{ old('profession') == 'Banker' ? 'selected' : '' }}>Banker</option>
    <option value="Biologist" {{ old('profession') == 'Biologist' ? 'selected' : '' }}>Biologist</option>
    <option value="Biotechnologist" {{ old('profession') == 'Biotechnologist' ? 'selected' : '' }}>Biotechnologist</option>
    <option value="Botanist" {{ old('profession') == 'Botanist' ? 'selected' : '' }}>Botanist</option>
    <option value="Broadcaster" {{ old('profession') == 'Broadcaster' ? 'selected' : '' }}>Broadcaster</option>
    <option value="Businessperson" {{ old('profession') == 'Businessperson' ? 'selected' : '' }}>Businessperson</option>
    <option value="Caterer" {{ old('profession') == 'Caterer' ? 'selected' : '' }}>Caterer</option>
    <option value="Chemical Engineer" {{ old('profession') == 'Chemical Engineer' ? 'selected' : '' }}>Chemical Engineer</option>
    <option value="Civil Engineer" {{ old('profession') == 'Civil Engineer' ? 'selected' : '' }}>Civil Engineer</option>
    <option value="Civil Servant" {{ old('profession') == 'Civil Servant' ? 'selected' : '' }}>Civil Servant</option>
    <option value="Clergy" {{ old('profession') == 'Clergy' ? 'selected' : '' }}>Clergy</option>
    <option value="Computer / IT Professional" {{ old('profession') == 'Computer / IT Professional' ? 'selected' : '' }}>Computer / IT Professional</option>
    <option value="Construction Professional" {{ old('profession') == 'Construction Professional' ? 'selected' : '' }}>Construction Professional</option>
    <option value="Consultant" {{ old('profession') == 'Consultant' ? 'selected' : '' }}>Consultant</option>
    <option value="Craftsperson" {{ old('profession') == 'Craftsperson' ? 'selected' : '' }}>Craftsperson</option>
    <option value="Diplomat" {{ old('profession') == 'Diplomat' ? 'selected' : '' }}>Diplomat</option>
    <option value="Economist" {{ old('profession') == 'Economist' ? 'selected' : '' }}>Economist</option>
    <option value="Educationist" {{ old('profession') == 'Educationist' ? 'selected' : '' }}>Educationist</option>
    <option value="Electrical Engineer" {{ old('profession') == 'Electrical Engineer' ? 'selected' : '' }}>Electrical Engineer</option>
    <option value="Entertainer" {{ old('profession') == 'Entertainer' ? 'selected' : '' }}>Entertainer</option>
    <option value="Entrepreneur" {{ old('profession') == 'Entrepreneur' ? 'selected' : '' }}>Entrepreneur</option>
    <option value="Environmentalist" {{ old('profession') == 'Environmentalist' ? 'selected' : '' }}>Environmentalist</option>
    <option value="Evangelist" {{ old('profession') == 'Evangelist' ? 'selected' : '' }}>Evangelist</option>
    <option value="Farmer" {{ old('profession') == 'Farmer' ? 'selected' : '' }}>Farmer</option>
    <option value="Fashion Stylist" {{ old('profession') == 'Fashion Stylist' ? 'selected' : '' }}>Fashion Stylist</option>
    <option value="Fitness Instructor" {{ old('profession') == 'Fitness Instructor' ? 'selected' : '' }}>Fitness Instructor</option>
    <option value="Footballer" {{ old('profession') == 'Footballer' ? 'selected' : '' }}>Footballer</option>
    <option value="Freelancer" {{ old('profession') == 'Freelancer' ? 'selected' : '' }}>Freelancer</option>
    <option value="Geologist" {{ old('profession') == 'Geologist' ? 'selected' : '' }}>Geologist</option>
    <option value="Genetic Engineer" {{ old('profession') == 'Genetic Engineer' ? 'selected' : '' }}>Genetic Engineer</option>
    <option value="Historian" {{ old('profession') == 'Historian' ? 'selected' : '' }}>Historian</option>
    <option value="Horticulturist" {{ old('profession') == 'Horticulturist' ? 'selected' : '' }}>Horticulturist</option>
    <option value="Industrialist" {{ old('profession') == 'Industrialist' ? 'selected' : '' }}>Industrialist</option>
    <option value="Investor" {{ old('profession') == 'Investor' ? 'selected' : '' }}>Investor</option>
    <option value="Journalist" {{ old('profession') == 'Journalist' ? 'selected' : '' }}>Journalist</option>
    <option value="Judge" {{ old('profession') == 'Judge' ? 'selected' : '' }}>Judge</option>
    <option value="Lawyer" {{ old('profession') == 'Lawyer' ? 'selected' : '' }}>Lawyer</option>
    <option value="Leadership Trainer" {{ old('profession') == 'Leadership Trainer' ? 'selected' : '' }}>Leadership Trainer</option>
    <option value="Lecturer" {{ old('profession') == 'Lecturer' ? 'selected' : '' }}>Lecturer</option>
    <option value="Legal Adviser" {{ old('profession') == 'Legal Adviser' ? 'selected' : '' }}>Legal Adviser</option>
    <option value="Legislator" {{ old('profession') == 'Legislator' ? 'selected' : '' }}>Legislator</option>
    <option value="Librarian" {{ old('profession') == 'Librarian' ? 'selected' : '' }}>Librarian</option>
    <option value="Management Consultant" {{ old('profession') == 'Management Consultant' ? 'selected' : '' }}>Management Consultant</option>
    <option value="Mathematician" {{ old('profession') == 'Mathematician' ? 'selected' : '' }}>Mathematician</option>
    <option value="Media Personality" {{ old('profession') == 'Media Personality' ? 'selected' : '' }}>Media Personality</option>
    <option value="Mediator" {{ old('profession') == 'Mediator' ? 'selected' : '' }}>Mediator</option>
    <option value="Medical Doctor" {{ old('profession') == 'Medical Doctor' ? 'selected' : '' }}>Medical Doctor</option>
    <option value="Medical Laboratory Scientist" {{ old('profession') == 'Medical Laboratory Scientist' ? 'selected' : '' }}>Medical Laboratory Scientist</option>
    <option value="Medical Consultant" {{ old('profession') == 'Medical Consultant' ? 'selected' : '' }}>Medical Consultant</option>
    <option value="Microbiologist" {{ old('profession') == 'Microbiologist' ? 'selected' : '' }}>Microbiologist</option>
    <option value="Military Personnel" {{ old('profession') == 'Military Personnel' ? 'selected' : '' }}>Military Personnel</option>
    <option value="Musician / Music Promoter" {{ old('profession') == 'Musician / Music Promoter' ? 'selected' : '' }}>Musician / Music Promoter</option>
    <option value="Naval Officer" {{ old('profession') == 'Naval Officer' ? 'selected' : '' }}>Naval Officer</option>
    <option value="Novelist" {{ old('profession') == 'Novelist' ? 'selected' : '' }}>Novelist</option>
    <option value="Nurse" {{ old('profession') == 'Nurse' ? 'selected' : '' }}>Nurse</option>
    <option value="Oil and Gas Professional" {{ old('profession') == 'Oil and Gas Professional' ? 'selected' : '' }}>Oil and Gas Professional</option>
    <option value="Painter" {{ old('profession') == 'Painter' ? 'selected' : '' }}>Painter</option>
    <option value="Pastor" {{ old('profession') == 'Pastor' ? 'selected' : '' }}>Pastor</option>
    <option value="Poet" {{ old('profession') == 'Poet' ? 'selected' : '' }}>Poet</option>
    <option value="Petroleum Engineer" {{ old('profession') == 'Petroleum Engineer' ? 'selected' : '' }}>Petroleum Engineer</option>
    <option value="Pharmacist" {{ old('profession') == 'Pharmacist' ? 'selected' : '' }}>Pharmacist</option>
    <option value="Philanthropist" {{ old('profession') == 'Philanthropist' ? 'selected' : '' }}>Philanthropist</option>
    <option value="Physiotherapist" {{ old('profession') == 'Physiotherapist' ? 'selected' : '' }}>Physiotherapist</option>
    <option value="Photographer" {{ old('profession') == 'Photographer' ? 'selected' : '' }}>Photographer</option>
    <option value="Pilot" {{ old('profession') == 'Pilot' ? 'selected' : '' }}>Pilot</option>
    <option value="Police Officer" {{ old('profession') == 'Police Officer' ? 'selected' : '' }}>Police Officer</option>
    <option value="Political Scientist" {{ old('profession') == 'Political Scientist' ? 'selected' : '' }}>Political Scientist</option>
    <option value="Politician" {{ old('profession') == 'Politician' ? 'selected' : '' }}>Politician</option>
    <option value="Portfolio Manager" {{ old('profession') == 'Portfolio Manager' ? 'selected' : '' }}>Portfolio Manager</option>
    <option value="Professor" {{ old('profession') == 'Professor' ? 'selected' : '' }}>Professor</option>
    <option value="Public Servant" {{ old('profession') == 'Public Servant' ? 'selected' : '' }}>Public Servant</option>
    <option value="Real Estate Manager" {{ old('profession') == 'Real Estate Manager' ? 'selected' : '' }}>Real Estate Manager</option>
    <option value="Retiree" {{ old('profession') == 'Retiree' ? 'selected' : '' }}>Retiree</option>
    <option value="Royalty" {{ old('profession') == 'Royalty' ? 'selected' : '' }}>Royalty</option>
    <option value="Scholar" {{ old('profession') == 'Scholar' ? 'selected' : '' }}>Scholar</option>
    <option value="Scientist" {{ old('profession') == 'Scientist' ? 'selected' : '' }}>Scientist</option>
    <option value="Security Expert" {{ old('profession') == 'Security Expert' ? 'selected' : '' }}>Security Expert</option>
    <option value="Singer" {{ old('profession') == 'Singer' ? 'selected' : '' }}>Singer</option>
    <option value="Sociologist" {{ old('profession') == 'Sociologist' ? 'selected' : '' }}>Sociologist</option>
    <option value="Soldier" {{ old('profession') == 'Soldier' ? 'selected' : '' }}>Soldier</option>
    <option value="Songwriter" {{ old('profession') == 'Songwriter' ? 'selected' : '' }}>Songwriter</option>
    <option value="Sports Professional" {{ old('profession') == 'Sports Professional' ? 'selected' : '' }}>Sports Professional</option>
    <option value="Stock Broker" {{ old('profession') == 'Stock Broker' ? 'selected' : '' }}>Stock Broker</option>
    <option value="Stylist" {{ old('profession') == 'Stylist' ? 'selected' : '' }}>Stylist</option>
    <option value="Surgeon" {{ old('profession') == 'Surgeon' ? 'selected' : '' }}>Surgeon</option>
    <option value="Teacher" {{ old('profession') == 'Teacher' ? 'selected' : '' }}>Teacher</option>
    <option value="Technologist" {{ old('profession') == 'Technologist' ? 'selected' : '' }}>Technologist</option>
    <option value="Trader" {{ old('profession') == 'Trader' ? 'selected' : '' }}>Trader</option>
    <option value="Telecommunications Professional" {{ old('profession') == 'Telecommunications Professional' ? 'selected' : '' }}>Telecommunications Professional</option>
    <option value="Tourism Professional" {{ old('profession') == 'Tourism Professional' ? 'selected' : '' }}>Tourism Professional</option>
    <option value="Transporter" {{ old('profession') == 'Transporter' ? 'selected' : '' }}>Transporter</option>
    <option value="Writer" {{ old('profession') == 'Writer' ? 'selected' : '' }}>Writer</option>
    <option value="Unemployed" {{ old('profession') == 'Unemployed' ? 'selected' : '' }}>Unemployed</option>
    <option value="Youth Advocate" {{ old('profession') == 'Youth Advocate' ? 'selected' : '' }}>Youth Advocate</option>
    <option value="Yoga Instructor" {{ old('profession') == 'Yoga Instructor' ? 'selected' : '' }}>Yoga Instructor</option>
    <option value="Zoologist" {{ old('profession') == 'Zoologist' ? 'selected' : '' }}>Zoologist</option>
  </select>
    </div>

      <div class="fields">
        <label>Business Category</label>
        <input type="text" placeholder="Goods or Services" name="business_category" value="{{ old('business_category') }}">
      </div>

      <div class="fields">
        <label>Business Interest</label>
        <input type="text" name="business_interest" value="{{ old('business_interest') }}">
      </div>
      <div class="fields">
        <label>Branch Leader's  Name</label>
        <input type="text" name="branch_leader" value="{{ old('branch_leader') }}">
      </div>
      <div class="fields">
        <label>Current Trade</label>
        <input type="text" name="trade" value="{{ old('trade') }}">
      </div>
       <div class="fields">
        <label>Website URL</label>
        <input type="text" name="website_url" value="{{ old('website_url') }}">
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
  <x-layouts.footer/>
  <script src="{{ asset('js/header.js') }}"></script>
</div>
