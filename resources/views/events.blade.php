<x-layouts.app/>

<style>
  /* GLOBAL FIX */
  body, html {
    overflow-x: hidden;
  }

  .section {
    max-width: 1200px;
    width: 100%;
    margin: 50px auto;
    padding: 0 20px;
  }

  h2 {
    margin-bottom: 20px;
    font-size: 28px;
    border-left: 5px solid #B22222;
    padding-left: 12px;
  }

  /* MAIN GRID (Desktop Default) */
  .events-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    width: 100%;
  }

  .event-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 4px 14px rgba(0,0,0,0.1);
    transition: .3s;
    opacity: 0;
    transform: translateY(25px);
    animation: fadeInUp 0.8s ease forwards;
  }

  .event-card:hover {
    transform: translateY(-5px);
  }

  .event-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    display: block;
  }

  .event-content {
    padding: 15px 18px;
  }

  .event-content h3 {
    font-size: 18px;
    margin-bottom: 8px;
    font-weight: bold;
  }

  .event-content p {
    font-size: 14px;
    line-height: 1.5;
  }

  .event-date {
    margin-top: 10px;
    font-weight: bold;
    color: #B22222;
    font-size: 14px;
  }

  @keyframes fadeInUp {
    from {opacity: 0; transform: translateY(40px);}
    to {opacity: 1; transform: translateY(0);}
  }

  /* TABLET FIX (2 columns) */
  @media (max-width: 900px) {
    .events-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  /* MOBILE FIX (Centered, Elegant, Full Width) */
  @media (max-width: 600px) {
    h2 {
      font-size: 22px;
    }

    .events-grid {
      grid-template-columns: 1fr;
      justify-items: center;
      align-content: center;      /* Centers cards */
      width: 100%;
       position: relative;
    left: 47%;
    }

    .event-card {
      width: 100%;
      max-width: 95%;             /* Elegant full width */
      margin: 0 auto;
      border-radius: 18px;
    }

    .event-image {
      height: 170px;
      border-top-left-radius: 18px;
      border-top-right-radius: 18px;
    }

    .event-content {
      padding: 18px 20px;
    }

    .event-content h3 {
      font-size: 18px;
      text-align: center;
      font-weight: bold;
    }

    .event-content p {
      font-size: 14px;
      text-align: center;
      opacity: 0.9;
    }

    .event-date {
      text-align: center;
      font-size: 15px;
      margin-top: 12px;
    }
  }
</style>



<!-- UPCOMING EVENTS -->
<section class="section upcoming-events">
  <h2>Upcoming Events</h2>
  <div class="events-grid">

    <div class="event-card">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761129128/upcoming_events_ibi7ig.jpg" class="event-image">
      <div class="event-content">
        <h3>2025 National Convention & Award Night</h3>
        <p>A grand celebration featuring distinguished alumni and keynote sessions.</p>
        <div class="event-date">Coming Soon – 2025</div>
      </div>
    </div>

    <div class="event-card">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761129451/upcoming_cvxxdv.jpg" class="event-image">
      <div class="event-content">
        <h3>Annual GCUOBA Leadership Summit</h3>
        <p>A summit themed around innovation and mentorship.</p>
        <div class="event-date">Mid 2025</div>
      </div>
    </div>

  </div>
</section>


<!-- PAST EVENTS -->
<section class="section past-events">
  <h2>Past Events</h2>
  <div class="events-grid">

    <div class="event-card">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761863055/IMG-20251029-WA0045_2_hijjvr.jpg" class="event-image">
      <div class="event-content">
        <h3>Groundbreaking & Secretariat Commissioning</h3>
        <p>Flag-off of the GCU Fencing Project and Secretariat commissioning.</p>
        <div class="event-date">2025</div>
      </div>
    </div>

    <div class="event-card">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801501/IMG-20251029-WA0046_etqni9.jpg" class="event-image">
      <div class="event-content">
        <h3>National Alumni Visit & Inspection</h3>
        <p>Leadership visit to assess campus development.</p>
        <div class="event-date">2025</div>
      </div>
    </div>

    <div class="event-card">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801430/IMG-20251028-WA0069_egiyaw.jpg" class="event-image">
      <div class="event-content">
        <h3>FEDT Partnership Meeting</h3>
        <p>Collaboration between Alumni, School Management, and FEDT.</p>
        <div class="event-date">2025</div>
      </div>
    </div>

    <div class="event-card">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801357/IMG-20251028-WA0045_c8k5nn.jpg" class="event-image">
      <div class="event-content">
        <h3>Umuahian Heritage Seminar</h3>
        <p>Reflecting on values & leadership principles.</p>
        <div class="event-date">2024</div>
      </div>
    </div>

    <div class="event-card">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761455915/IMG_6824_yqbzy2.jpg" class="event-image">
      <div class="event-content">
        <h3>Maryland - DC Convention</h3>
        <p>Uniting Umuahians in the U.S. for fellowship.</p>
        <div class="event-date">2017</div>
      </div>
    </div>

    <div class="event-card">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761455911/Slide81_e5kwf6.jpg" class="event-image">
      <div class="event-content">
        <h3>1960s Heritage Archives</h3>
        <p>Historic photographs showcasing GCU’s golden years.</p>
        <div class="event-date">Historical</div>
      </div>
    </div>

  </div>
</section>
<x-layouts.footer/>

<script src="{{ asset('js/header.js') }}"></script>

