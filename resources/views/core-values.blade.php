<x-layouts.app/>
  <style>
    /* ===== CORE VALUES SECTION ===== */
    section.core-values {
      max-width: 1100px;
      margin: 60px auto;
      padding: 0 20px;
    }

    .core-title {
      text-align: center;
      font-size: 2rem;
      color: var(--red);
      font-weight: 800;
      text-transform: uppercase;
      margin-bottom: 15px;
      text-shadow: 1px 1px 0 var(--yellow);
    }

    .core-sub {
      text-align: center;
      color: #444;
      margin-bottom: 50px;
      font-size: 1rem;
    }

    .values-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
    }

    .value-card {
      background: var(--white);
      border-radius: 12px;
      padding: 30px 25px;
      text-align: center;
      border-top: 6px solid var(--red);
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      transition: all 0.3s ease;
    }

    .value-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 6px 16px rgba(0,0,0,0.15);
      border-color: var(--yellow);
    }

    .value-card i {
      font-size: 2.2rem;
      color: var(--red);
      background: var(--yellow);
      border-radius: 50%;
      padding: 15px;
      margin-bottom: 20px;
    }

    .value-card h3 {
      font-size: 1.3rem;
      color: var(--black);
      margin-bottom: 12px;
    }

    .value-card p {
      font-size: 0.97rem;
      color: #444;
      line-height: 1.6;
    }

    /* ===== MISSION STATEMENT ===== */
    .mission-box {
      background: var(--red);
      color: var(--white);
      padding: 50px 25px;
      border-radius: 15px;
      text-align: center;
      margin-top: 70px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.2);
    }

    .mission-box h2 {
      font-size: 1.8rem;
      margin-bottom: 15px;
      color: var(--yellow);
      font-weight: 700;
      text-transform: uppercase;
    }

    .mission-box p {
      font-size: 1rem;
      line-height: 1.7;
      max-width: 850px;
      margin: 0 auto;
      color: black;
    }

    /* ===== FOOTER ===== */
    footer {
      background: var(--black);
      color: var(--yellow);
      text-align: center;
      padding: 35px 15px;
      font-size: 0.95rem;
      margin-top: 50px;
      border-top: 4px solid var(--red);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      header h1 { font-size: 2rem; }
      .core-title { font-size: 1.6rem; }
      .mission-box h2 { font-size: 1.5rem; }
    }

    @media (max-width: 480px) {
      .value-card { padding: 25px 15px; }
      .value-card i { font-size: 1.8rem; }
      .value-card h3 { font-size: 1.1rem; }
      .mission-box { padding: 35px 20px; }
    }
</style>
<section class="core-values">
    <h2 class="core-title">Core Values</h2>
    <p class="core-sub">These principles define who we are, guide our actions, and shape the legacy we uphold as Umuahians worldwide.</p>

    <div class="values-grid">
      <div class="value-card">
        <i class="fas fa-trophy"></i>
        <h3>Excellence</h3>
        <p>We pursue the highest standards in academics, leadership, and service — reflecting the heritage of distinction nurtured at Umuahia.</p>
      </div>

      <div class="value-card">
        <i class="fas fa-balance-scale"></i>
        <h3>Integrity</h3>
        <p>We uphold honesty, fairness, and moral courage in all dealings — standing as examples of ethical leadership in society.</p>
      </div>

      <div class="value-card">
        <i class="fas fa-users"></i>
        <h3>Brotherhood</h3>
        <p>Bound by shared history and loyalty, we foster unity and mutual respect among Umuahians across generations and borders.</p>
      </div>

      <div class="value-card">
        <i class="fas fa-hands-helping"></i>
        <h3>Service</h3>
        <p>We dedicate ourselves to the welfare of our alma mater, our communities, and the nation — giving back as a duty of gratitude.</p>
      </div>

      <div class="value-card">
        <i class="fas fa-lightbulb"></i>
        <h3>Leadership</h3>
        <p>We cultivate vision, initiative, and responsibility — inspiring others and shaping a future built on wisdom and discipline.</p>
      </div>
    </div>
    <!-- VISION BOX -->
    <div class="mission-box">
      <h2><i class="fas fa-quote-left"></i>Our Vision <i class="fas fa-quote-right"></i></h2>
      <p>To sustain an enduring legacy of excellence, unity and support, fostering lifelong connections among Alumni and empowering future Umuahian leaders.</p>
        <p>We aim to create a strong, inclusive community that promotes personal growth, professional success, and continuous engagement.</p>
    </div>
    <!-- MISSION BOX -->
    <div class="mission-box">
      <h2><i class="fas fa-quote-left"></i>Our Mission <i class="fas fa-quote-right"></i></h2>
      <p>To maintain a lifelong connection between the alumni community providing a platform for networking, professional development,<br> and pertinent community service
          especially towards our Alma mater community that defines us as true Umuahians.</p>
    </div>
   <!-- AIMS & OBJECTIVE BOX -->
    <div class="mission-box">
      <h2><i class="fas fa-quote-left"></i> Aims and Objectives<i class="fas fa-quote-right"></i></h2>
      <p>1. To bring our vast and strong Alumni member base together with an aim of providing a forum towards strengthening our professional, and business ties.
</p>
    <p>2. To assist members through networking and updating with a rapidly evolving, and tech innovative dynamic globe.
</p>
    <p>3. To contribute to the restoration of our great Alma mater; Umuahia, and to foster the legacy of her founders.</p>
    
    <p>4. To work towards the enhancement of standard of education in Umuahia.</p>
        <p>5. To establish closer ties and cooperation of varied Alumni members redirecting, 
            reconnecting such to our various global branches and identifying with closest branch and other pertinent GCUOBA branches worldwide.
</p>
        <p>6. To assist in the strengthening of the members through information and opportunity sharing, and mutual assistance.
</p>
        <p>7. To co-operate with other Alumni members that have shared values as ours eg Elton, 
            Achimota, King's, Queens' to mention a few, and a possible network with such- as agreed by our members.
</p>
    <p>8. To protect, defend and promote the culture, values, traditions, and welfare of the alumni community of Umuahia.
</p>
        <p>9. To conduct fundraisers for specific projects such as rebuilding of dilapidated buildings,<br>
            and equipping the school drawing the attention of capable but willing members, <br>
            as well as well-wishers towards the development of our great Alma mater in Government College Umuahia, and in effect its students.
</p>
        <p>10. The list is inexaustive.</p>
    </div>
  </section>
   <x-layouts.footer/>

 <script src="{{ asset('js/header.js') }}"></script>
  <!-- FOOTER -->
