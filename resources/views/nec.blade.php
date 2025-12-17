 
<x-layouts.app/>
    <style>
       
    /* ===== PRESIDENT SECTION ===== */
    .president-section {
      background: var(--red);
      color: var(--white);
      padding: 70px 20px;
    }

    .president-wrapper {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      gap: 40px;
    }

    .president-image img {
      width: 320px;
      height: 320px;
      object-fit: cover;
      border-radius: 15px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.3);
      border: 4px solid var(--yellow);
    }

    .president-content {
      max-width: 650px;
    }

    .president-content h2 {
      font-size: 1.8rem;
      color: var(--yellow);
      margin-bottom: 8px;
      font-weight: 700;
    }

    .president-content h3 {
      font-size: 1.4rem;
      font-weight: 600;
      margin-bottom: 15px;
      color: var(--white);
    }

    .president-content p {
      font-size: 1rem;
      line-height: 1.7;
      margin-bottom: 12px;
    }

    .president-quote {
      margin-top: 20px;
      font-style: italic;
      font-size: 1.1rem;
      color: var(--yellow);
      text-align: right;
      font-weight: 600;
    }

    /* ===== LEADERSHIP SECTION ===== */
    section.leadership {
      max-width: 1200px;
      margin: 60px auto;
      padding: 0 20px;
      text-align: center;
    }

    section.leadership h2 {
      color: var(--red);
      font-size: 2rem;
      margin-bottom: 10px;
      text-transform: uppercase;
      font-weight: 800;
      text-shadow: 1px 1px 0 var(--yellow);
    }

    section.leadership p {
      color: #333;
      font-size: 1rem;
      margin-bottom: 40px;
    }

    .leaders-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 25px;
    }

    .leader-card {
      background: var(--white);
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      padding: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-top: 6px solid var(--red);
    }

    .leader-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      border-top-color: var(--yellow);
    }

    .leader-card img {
      width: 100%;
      height: 230px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .leader-card h4 {
      color: var(--red);
      font-size: 1.1rem;
      margin-bottom: 5px;
      font-weight: 700;
    }

    .leader-card p {
      color: #444;
      font-size: 0.95rem;
    }

    .note {
      margin-top: 30px;
      font-style: italic;
      color: #555;
      font-size: 0.95rem;
    }
    
    
    /* ===== RESPONSIVE ===== */
    @media (max-width: 900px) {
      .president-wrapper {
        flex-direction: column;
        text-align: center;
      }

      .president-content {
        max-width: 90%;
      }

      .president-content h2 {
        font-size: 1.6rem;
      }

      .president-content h3 {
        font-size: 1.2rem;
      }

      .president-image img {
        width: 280px;
        height: 280px;
      }
    }

    @media (max-width: 480px) {
      section.leadership h2 {
        font-size: 1.6rem;
      }

      .leader-card img {
        height: 200px;
      }
    }
    </style>
 <!-- ===== PRESIDENT SECTION ===== -->
  <section class="president-section">
    <div class="president-wrapper">
      
      <div class="president-image">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761128929/president_i8dcma.jpg" alt="Dr. Chinedum Ahaiwe">
      </div>

      <div class="president-content">
        <h2>Office of the National President</h2>
        <h3>Dr. Chinedum Israel Ahaiwe, FAIPH</h3>

        <p>Dr. Chinedum Ahaiwe’s journey with Government College Umuahia spans a lifetime of leadership, service, and loyalty. 
        His commitment began in Class 4 as Scout Master and Captain of Niger House, leading his team to victory in the 1973 Football Championship.</p>

        <p>He later became Deputy School Captain and School Captain (1974/75). Beyond Umuahia, he served as a founding contributor to the GCUOBA USA Chapter Constitution Drafting Committee, leading strategic restoration campaigns.</p>

        <p>A respected academic and professional, he was appointed by the Federal Government under the NUC LEADS initiative, further advancing national education development. He also served as Abuja Branch Vice Chairman, Chairman, and was elected National President in 2023.</p>

        <p>With a mission grounded in unity, transparency, and legacy preservation, Dr. Ahaiwe is committed to securing and restoring the soul of Government College Umuahia — protecting its boundaries and strengthening governance.</p>

        <div class="president-quote">“May we shine as one.”</div>
      </div>
    </div>
  </section>

  <!-- ===== NATIONAL EXECUTIVE COUNCIL ===== -->
  <section class="leadership">
    <h2><i class="fas fa-user-tie"></i> National Executive Council</h2>
    <p>A distinguished body of Old Boys entrusted with guiding and sustaining the legacy of Government College Umuahia.</p>

    <div class="leaders-grid">
     <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765946693/IMG-20251215-WA0002_gdy0ot.jpg">
      </div>
      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761128929/president_i8dcma.jpg" alt="President">
        <h4>Dr. Chinedum Ahaiwe</h4>
        <p>National President (Class of ’67) — Abuja</p>
      </div>

        <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761578384/IMG-20251027-WA0025_1_smv0pb.jpg" alt="Public Secretary">
        <h4>Igba Ndubuisi</h4>
        <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765946693/IMG-20251215-WA0004_evzz5f.jpg">
        <p>Financial Secretary</p>
        </div>
      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428211/IMG-20251023-WA0000_wr6khf.jpg" alt="Vice Chairman">
        <h4>Sir Onyi Wamah</h4>
        <p>Vice Chairman (Class of ’78) — Umuahia</p>
      </div>

      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428211/IMG-20251023-WA0001_ziczbv.jpg" alt="Second Vice Chairman">
        <h4>Eze Uwaga</h4>
        <p>2nd Vice Chairman (Class of ’77) — Port Harcourt</p>
      </div>

      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765946692/IMG-20251215-WA0006_o3ivtn.jpg" alt="Secretary">
        <h4>Chijioke Ibem-</h4>
        <p>National Publicity Secretary</p>
      </div>

        <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765946692/IMG-20251215-WA0006_o3ivtn.jpg" alt="Secretary">
        <h4>Barr. Nkem Egbuta</h4>
        <p>National General Secretary.</p>
      </div>
       
      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761512637/IMG-20251026-WA0036_be0cwc.jpg" alt="Treasurer">
        <h4>Wisdom Ikota</h4>
        <p>Treasurer (Class of ’95) — Umuahia</p>
      </div>

      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765946692/IMG-20251215-WA0020_gt8elt.jpg" alt="Welfare Officer">
        <h4>Nkemakolam Nnata</h4>
        <p>Welfare Officer</p>
      </div>


            
      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761513594/IMG-20251025-WA0031_1_rhwzan.jpg" alt="Legal Adviser">
        <h4>Chief Uche C. Ihediwa, SAN</h4>
        <p>Former Abia State Attorney General • Former NEC President</p>
      </div>

      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761512637/IMG-20251026-WA0051_zyzclo.jpg" alt="Legal Adviser">
        <h4>Ed Ukaonu</h4>
        <p>USA Chapter Representative</p>
      </div>

      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761512638/IMG-20251026-WA0050_lhclcg.jpg" alt="Patron">
        <h4>Igwe HRH Prof. Laz Ekwueme</h4>
        <p>National Grand Patron</p>
      </div>

      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765946693/IMG-20251216-WA0000_nkbsyc.jpg" alt="Legal Adviser">
        <h4>Barr. Godwin Akobueze</h4>
        <p>Legal Adviser</p>
      </div>
      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765946693/IMG-20251216-WA0006_j8wp4w.jpg" alt="Legal Adviser">
        <h4>Onyia F.C.</h4>
        <p>Assistant Secretary General</p>
      </div>
            
      <div class="leader-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761512637/IMG-20251026-WA0052_e8z4ia.jpg" alt="UK Chapter">
        <h4>Ebizie Chijioke</h4>
        <p>UK Chapter Representative</p>
      </div>
    </div>

    <p class="note"><em>Public Relations Officer (PRO) is zoned to Lagos branch for nomination.</em></p>
  </section>
<x-layouts.footer/>
<script src="{{ asset('js/header.js') }}"></script>
