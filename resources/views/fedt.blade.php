 <x-layouts.header/>
 
    <style>
    /* ===== MAIN SECTION ===== */
    section.fedt-info {
      max-width: 1100px;
      margin: 60px auto;
      padding: 0 20px;
    }

    .fedt-info h2 {
      text-align: center;
      color: var(--red);
      font-size: 2rem;
      margin-bottom: 15px;
      font-weight: 800;
      text-shadow: 1px 1px 0 var(--yellow);
    }

    .fedt-info p {
      color: #333;
      text-align: center;
      margin-bottom: 40px;
      font-size: 1rem;
    }

    /* ===== IMAGE STRIP ===== */
    .fedt-gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
      margin-bottom: 50px;
    }

    .fedt-gallery img {
      width: 320px;
      height: 220px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      border: 3px solid var(--white);
      transition: transform 0.3s ease;
    }

    .fedt-gallery img:hover {
      transform: scale(1.05);
      border-color: var(--yellow);
    }

    /* ===== LEADERSHIP GRID ===== */
    .leaders-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 25px;
      margin-top: 30px;
    }

    .leader-card {
      background: var(--white);
      text-align: center;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      border-top: 6px solid var(--red);
      padding: 25px 15px;
    }

    .leader-card:hover {
      transform: translateY(-6px);
      border-top-color: var(--yellow);
      box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    }

    .leader-card img {
      width: 100%;
      height: 230px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .leader-card h4 {
      font-size: 1.1rem;
      font-weight: 700;
      color: var(--red);
      margin-bottom: 6px;
    }

    .leader-card p {
      font-size: 0.95rem;
      color: #444;
    }

    /* ===== STATEMENT BOX ===== */
    .statement-box {
      background: var(--red);
      color: var(--white);
      text-align: center;
      padding: 50px 25px;
      border-radius: 12px;
      margin: 70px auto;
      max-width: 1000px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.3);
    }

    .statement-box h3 {
      font-size: 1.8rem;
      color: var(--yellow);
      margin-bottom: 15px;
      font-weight: 700;
    }

    .statement-box p {
      font-size: 1rem;
      line-height: 1.8;
      max-width: 850px;
      color: black;
      margin: 0 auto;
    }
    @media (max-width: 768px) {
      .fedt-gallery img {
        width: 100%;
        height: auto;
      }
        .leaders-grid {
            grid-template-columns: 1fr;
        }
    }
       /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      .leader-card img { height: 200px; }
      .statement-box h3 { font-size: 1.5rem; }
    }

    @media (max-width: 480px) {
      .fedt-gallery img { width: 90%; height: auto; }
    }
       </style>
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">

<img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761974389/fishertrustlogo_k6jmss.jpg" alt="FEDT Logo">
    <h1><i class="fas fa-university"></i> THE FISHER EDUCATIONAL DEVELOPMENT TRUST (FEDT)</h1>
    <p>
      A distinguished body of Old Boys and state representatives dedicated to the preservation, development,
      and advancement of the legacy of Government College Umuahia.
    </p>

  <!-- ===== MAIN SECTION ===== -->
  <section class="fedt-info">
    <h2>The Board of Trustees</h2>
    <p>
      The Fisher Educational Development Trust (FEDT) Board is a distinguished assembly of accomplished alumni and state nominees,
      entrusted with guiding the school’s growth and ensuring educational excellence.
    </p>

    <!-- Image Gallery -->
    <div class="fedt-gallery">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761973793/WhatsApp_Image_2025-10-27_at_09.00.31_9963313d_x1xeya.jpg" alt="FEDT Group 1">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761973570/WhatsApp_Image_2025-10-28_at_05.13.47_1feac659_yi3vu3.jpg" alt="FEDT Group 2">
    </div>

    <!-- Leadership Grid -->
    <div class="leaders-grid">
      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761578384/IMG-20251027-WA0026_1_o5noud.jpg" alt="Dr. Eugene Ndimele">
        <h4>Dr. Eugene Ndimele</h4>
        <p>Chairman, FEDT Board</p>
      </div>

      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761578384/IMG-20251027-WA0028_azmyno.jpg" alt="Sir Kingsley Agomuo">
        <h4>Sir Kingsley Agomuo</h4>
        <p>Vice Chairman, FEDT Board</p>
      </div>

      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761578384/IMG-20251027-WA0027_1_sregoe.jpg" alt="Engr. Ikechukwu Ugwuegede">
        <h4>Engr. Ikechukwu Ugwuegede</h4>
        <p>Secretary, FEDT Board</p>
      </div>

      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761623540/IMG-20251028-WA0000_azevv3.jpg" alt="Prof. Emeka Aniagolu">
        <h4>Prof. Emeka Aniagolu</h4>
        <p>Member, FEDT Board</p>
      </div>

      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761578383/IMG-20251027-WA0029_irq32m.jpg" alt="Justice Obisike Oji">
        <h4>Justice Obisike Oji</h4>
        <p>Member, FEDT Board</p>
      </div>
    </div>

    <!-- Statement -->
    <div class="statement-box">
      <h3>About the Board</h3>
      <p>
        The Board was formally inaugurated by the Government of Abia State in conjunction with the National President of GCUOBA.
        The Board comprises Dr. Eugene Ndimele (Chairman), Sir Kingsley Agomuo (Vice Chairman), Engr. Ikechukwu Ugwuegede (Secretary),
        Mazi Ugochukwu Okoroafor, Dr. Okey Madukwe, Emeritus Prof. Son-go Teme, Justice Obisike Oji, and Prof. Emeka Aniagolu as members.
      </p>
    </div>
  </section>
 <x-layouts.footer/>
 <script src="{{ asset('js/header.js') }}"></script>