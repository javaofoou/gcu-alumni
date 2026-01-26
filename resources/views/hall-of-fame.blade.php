  <x-layouts.app/>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <style>
    /* ===== HALL OF FAME PAGE ===== */
    .hof-card{
      width: 380px;
      height: 380px;
    }
    .hof-card img{
      width: 100%;
      height: 230px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
  </style>
  <!-- HALL OF FAME GRID -->
  <section class="hof-page">
  <div class="hof-container">

   <!-- Existing Hall of Fame Members -->
<!-- 1. Chinua Achebe -->
<div class="hof-card" onclick="openModal(1)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761623540/IMG-20251027-WA0047_bpr7pm.jpg" alt="Chinua Achebe">
  <h3>Chinua Achebe (Class of ’44)</h3>
  <p>Literary Icon & Cultural Humanist</p>
</div>

<!-- 2. Elechi Amadi -->
<div class="hof-card" onclick="openModal(2)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761283784/WhatsApp_Image_2025-10-19_at_14.47.24_a7badb18_hyuau7.jpg" alt="Elechi Amadi">
  <h3>Elechi Amadi (Class of ’48)</h3>
  <p>Novelist & Education Advocate</p>
</div>

<!-- 3. HRH Chukwemeka Ike -->
<div class="hof-card" onclick="openModal(3)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761440493/WhatsApp_Image_2025-10-19_at_14.36.43_e81c2f64_gzmoe8.jpg" alt="HRH Chukwemeka Ike">
  <h3>HRH Chukwemeka Ike (Class of ’45)</h3>
  <p>Scholar & Creative Writer</p>
</div>

<!-- 3. HRH Chukwemeka Ike -->
<div class="hof-card">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1764025772/IMG-20251124-WA0008_ienmoy.jpg" alt="HRH Chukwemeka Ike">
  <h3> General Alex Madiebo</h3>
  <p>GOC commander Biafran Army.</p>
</div>


<!-- 3. HRH Chukwemeka Ike -->
<div class="hof-card">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1764025773/IMG-20251124-WA0007_dkkhcp.jpg" alt="HRH Chukwemeka Ike">
  <h3>Mr Nelson Enwere</h3>
  <p>Model, TV host and Former Mr Nigeria, 2018.</p>
</div>

<!-- 3. HRH Chukwemeka Ike -->
<div class="hof-card">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1764025772/IMG-20251124-WA0009_lvusem.jpg" alt="HRH Chukwemeka Ike">

  <h3>Ben Enwonwu</h3>
  <p>Painter and Sculptor</p>
</div>
<!-- 4. Christopher Okigbo -->
<div class="hof-card">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1764025773/IMG-20251028-WA0026_1_cngdzb.jpg">
  <h3>Christopher Okigbo</h3>
  <p>Renowned Poet</p>
</div>
    <div class="hof-card">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765244695/WhatsApp_Image_2025-11-13_at_06.09.05_7f12f096_glwqwm.jpg">
  <h3>Obi Aguocha</h3>
  <p>Member Representing Umuahia North/Umuahia South/Ikwuano federal constituency in  Nigeria's Federal House of Representative.</p>
</div>
  <div class="hof-card">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765245114/WhatsApp_Image_2025-12-01_at_08.20.19_a6fa93ea_vmzrhp.jpg">
  <h3>Col. Austin Akobundu</h3>
  <p>Nigeria's Former Minister of State for Defense, and Current Serving Senator Representing Abia Central Senatorial District in the National Assembly.</p>
</div>
      <div class="hof-card">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765245382/WhatsApp_Image_2025-12-03_at_07.52.19_ab0a2137_ty5ci5.jpg">
  <h3>Dr Alvan E. Ikoku</h3>
  <p>Former Director for the Trade and Exchange Department- TED, Central Bank of Nigeria.</p>
</div> 
<div class="hof-card">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765245103/WhatsApp_Image_2025-12-01_at_08.21.01_287d25d4_d1pk8p.jpg">
  <h3>Williams Orioha aka 2 Shotz</h3>
  <p>Nigerian Music Artiste, Photographer and Film Maker.</p>
</div> 
<div class="hof-card" onclick="openModal(4)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761513594/IMG-20251025-WA0031_1_rhwzan.jpg" alt="Chief Uche Ihediwa">
  <h3>Chief Uche C. Ihediwa, SAN</h3>
  <p>Former NEC President & Attorney General</p>
</div>

<div class="hof-card" onclick="openModal(5)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428551/IMG-20251024-WA0000_eawrwz.jpg" alt="Sen Orji Uzor Kalu">
  <h3>Sen. Orji Uzor Kalu</h3>
  <p>Former Governor & Senator</p>
</div>

<div class="hof-card" onclick="openModal(6)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428551/IMG-20251024-WA0003_uifrf9.jpg" alt="Achike Udenwa">
  <h3>Achike Udenwa</h3>
  <p>Former Governor of Imo State</p>
</div>

<div class="hof-card" onclick="openModal(7)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428478/IMG-20251023-WA0020_1_subz4m.jpg" alt="Prof Nimi Briggs">
  <h3>Prof. Nimi Dimkpa Briggs</h3>
  <p>Former Vice Chancellor, UniPort</p>
</div>

<div class="hof-card" onclick="openModal(8)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469799/IMG-20251211-WA0033_sktm4d.jpg" alt="Ida Peterside">
  <h3>Ida Peterside</h3>
  <p>Former Super Eagles Goalkeeper</p>
</div>

<div class="hof-card" onclick="openModal(9)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761623541/IMG-20251027-WA0048_etrpuw.jpg" alt="Ikechukwu Uche">
  <h3>Ikechukwu Uche</h3>
  <p>Super Eagles Forward</p>
</div>

<div class="hof-card" onclick="openModal(10)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761541673/IMG-20251026-WA0045_xbz6k5.jpg" alt="Dr Kingsley Moghalu">
  <h3>Dr. Kingsley Moghalu</h3>
  <p>Political Leader & Economist</p>
</div>

<div class="hof-card" onclick="openModal(11)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761623540/IMG-20251028-WA0001_wlisyr.jpg" alt="Dr Obi Nwakama">
  <h3>Dr. Obi Nwakama</h3>
  <p>Poet</p>
</div>

<div class="hof-card" onclick="openModal(12)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761623540/IMG-20251028-WA0002_yoeyw9.jpg" alt="Kelechi Amadi">
  <h3>Kelechi Amadi</h3>
  <p>Painter</p>
</div>

<div class="hof-card" onclick="openModal(13)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761623540/IMG-20251028-WA0003_r2690f.jpg" alt="Okwesilieze Nwodo">
  <h3>Dr. Okwesilieze Nwodo</h3>
  <p>Former Governor of Enugu State</p>
</div>

<div class="hof-card" onclick="openModal(14)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761624192/IMG-20251028-WA0004_y62itj.jpg" alt="Laz Ekwueme">
  <h3>Professor Laz Ekweme</h3>
  <p>Musicologist & Composer</p>
</div>

<!-- Newly Added Personalities -->
<div class="hof-card" onclick="openModal(15)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801399/IMG-20251028-WA0037_eakqdu.jpg" alt="Nnamdi Kanu">
  <h3>Nnamdi Kanu</h3>
  <p>Social Activist & Pro-Democracy Advocate</p>
</div>

<div class="hof-card" onclick="openModal(16)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801314/IMG-20251028-WA0032_vshqf9.jpg" alt="Nfon Victor Mukete">
  <h3>Nfon Victor Mukete</h3>
  <p>Former Nigerian Minister of Information & Cameroonian Statesman</p>
</div>

<div class="hof-card" onclick="openModal(17)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801338/IMG-20251028-WA0027_xslwdi.jpg" alt="Chu Okongwu">
  <h3>Dr. Chu Okongwu</h3>
  <p>Two-time Minister of Finance & Minister of National Planning</p>
</div>

<div class="hof-card" onclick="openModal(18)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801312/IMG-20251028-WA0022_acl8vi.jpg" alt="Dr Josiah Onyebuchi Johnson">
  <h3>Dr. Josiah Onyebuchi Johnson (J.O.J) Okezie</h3>
  <p>Nigeria’s First Minister of Health</p>
</div>

<div class="hof-card" onclick="openModal(19)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801312/IMG-20251028-WA0023_ltxfip.jpg" alt="Dr DW Emuchay">
  <h3>Dr. D. W. Emuchay</h3>
  <p>Pioneer of Nigeria’s First Private Hospital</p>
</div>

<div class="hof-card" onclick="openModal(20)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801312/IMG-20251028-WA0024_loexku.jpg" alt="Justice Charles Onyeama">
  <h3>Justice Charles Onyeama</h3>
  <p>Former Judge, International Court of Justice (World Court)</p>
</div>

<div class="hof-card" onclick="openModal(21)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801312/IMG-20251028-WA0025_qwfmfn.jpg" alt="Jaja Nwachukwu">
  <h3>Jaja Wachukwu</h3>
  <p>Nigeria’s First Speaker, House of Representatives & First Foreign Minister</p>
</div>

<div class="hof-card" onclick="openModal(22)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801535/IMG-20251029-WA0075_gaqsim.jpg" alt="Rear Admiral Vincent Okeke">
  <h3>Rear Admiral Vincent Okeke (Class of ’78)</h3>
  <p>Director of Plans, Nigerian Defence Headquarters (Former Director of Logistics)</p>
</div>
<div class="hof-card" onclick="openModal(23)">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1762038650/IMG-20251023-WA0007_1_1_1_kb0jdn.png" alt="Ken-Saro Wiwa">
  <h3>Ken Saro Wiwa</h3>
  <p>Writer, Environmentalist & Human Rights Advocate</p>
</div>
  </div>
</section>

  <!-- MODAL TEMPLATE -->
  <div id="hofModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <div id="modalBody"></div>
    </div>
  </div>
    <x-layouts.footer/>
  
<script>

  
    const profiles = {
  1: {
    name: "Chinua Achebe (Class of ’44)",
    image: "https://res.cloudinary.com/dhxdkejh3/image/upload/v1761283811/WhatsApp_Image_2025-10-19_at_14.11.19_a4edf3a8_b8l2ny.jpg",
    title: "Literary Icon & Cultural Humanist",
    citation: "Chinua Achebe remains one of Africa’s most influential literary figures. His work redefined African narrative identity and inspired global appreciation for indigenous voice and heritage.",
    achievement: "Author of *Things Fall Apart* • Founder, African Writers Series • Global Cultural Laureate",
    quote: "“Umuahia is the crossroads where we learned to reclaim our voice and tell our own stories.”"
  },
  2: {
    name: "Elechi Amadi (Class of ’48)",
    image: "https://res.cloudinary.com/dhxdkejh3/image/upload/v1761283784/WhatsApp_Image_2025-10-19_at_14.47.24_a7badb18_hyuau7.jpg",
    title: "Novelist & Education Advocate",
    citation: "Elechi Amadi’s writing and scholarship bridged culture, identity, and community memory. His academic influence nurtured generations of thinkers.",
    achievement: "Author of *The Concubine* and *The Great Ponds* • Military Officer • Commissioner for Culture & Education",
    quote: "“The education we received at Umuahia gave us the mind to imagine and the voice to speak.”"
  },
  3: {
    name: "HRH Chukwemeka Ike (Class of ’45)",
    image: "https://res.cloudinary.com/dhxdkejh3/image/upload/v1761440493/WhatsApp_Image_2025-10-19_at_14.36.43_e81c2f64_gzmoe8.jpg",
    title: "Scholar, Administrator & Creative Writer",
    citation: "HRH Chukwemeka Ike’s contributions to literature and higher education continue to influence academic culture across generations.",
    achievement: "Registrar of WAEC • University Administrator • Author of *The Bottled Leopard* and other classics",
    quote: "“Umuahia provided the creative environment that nurtured the literary awakening of our era.”"
  },
4:{name:"Chief Uche C. Ihediwa, SAN",image:"https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428504/IMG-20251025-WA0032_sakkqz.jpg",title:"Former NEC President & Attorney General",citation:"A champion of justice and alumni unity.",achievement:"Former Attorney General, Abia State • NEC Leadership",quote:"Service is our tradition."},
5:{name:"Sen. Orji Uzor Kalu",image:"https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428551/IMG-20251024-WA0000_eawrwz.jpg",title:"Former Governor & Senator",citation:"A national statesman and influential political leader.",achievement:"Governor of Abia (1999-2007) • Senator, Abia North",quote:"Leadership is duty."},
6:{name:"Achike Udenwa",image:"https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428551/IMG-20251024-WA0003_uifrf9.jpg",title:"Former Governor of Imo State",citation:"A committed leader in governance and development.",achievement:"Governor of Imo State (1999-2007)",quote:"Umuahia shaped our discipline."},
7:{name:"Prof. Nimi Dimkpa Briggs",image:"https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428478/IMG-20251023-WA0020_1_subz4m.jpg",title:"Former Vice Chancellor, UniPort",citation:"A distinguished academic and medical scholar.",achievement:"Emeritus Professor • Vice Chancellor, UniPort",quote:"Excellence is our heritage."},
8:{name:"Ida Peterside",image:"https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428210/IMG-20251023-WA0003_gamoaa.jpg",title:"Former Super Eagles Goalkeeper",citation:"Represented Nigeria with honor.",achievement:"Super Eagles Goalkeeper",quote:"Honor on and off the field."},
9:{name:"Ikechukwu Uche",image:"https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428190/IMG-20251023-WA0002_ra54wo.jpg",title:"Super Eagles Forward",citation:"An international ambassador of Umuahian athletic excellence.",achievement:"Super Eagles Forward",quote:"We carry Umuahia with us."},
10:{name:"Dr. Kingsley Moghalu",image:"https://res.cloudinary.com/dhxdkejh3/image/upload/v1761541673/IMG-20251026-WA0045_xbz6k5.jpg",title:"Political Leader & Economist",citation:"Former Deputy Governor of the Central Bank of Nigeria and global development advocate.",achievement:"Former Deputy Governor, CBN • Founder of Sogato Strategies • Presidential Candidate (2019)",quote:"Leadership creates pathways for others."},
11: {
    name: "Dr. Obi Nwakamah",
    image: "https://res.cloudinary.com/dhxdkejh3/image/upload/v1761623540/IMG-20251028-WA0001_wlisyr.jpg",
    title: "Poet & Literary Critic",
    citation: "A distinguished poet, journalist and academic whose works have enriched African literature and public thought.",
    achievement: "Author of *The Horsemen and Other Poems* • Professor of English • Columnist, The Vanguard",
    quote: "“Poetry is the mirror of the Umuahian spirit — refined, resilient, and reflective.”"
  },
    13: {
    name: "Dr. Okwesilieze Nwodo",
    image: "https://res.cloudinary.com/dhxdkejh3/image/upload/v1761623540/IMG-20251028-WA0003_r2690f.jpg",
    title: "Former Governor, Enugu State",
    citation: "A visionary leader who brought innovation and reform to governance while promoting education and youth empowerment.",
    achievement: "Governor of Enugu State (1992–1993) • Former PDP National Chairman • Medical Doctor",
    quote: "“From Umuahia, we learned that integrity defines true leadership.”"
  },
  14: {
    name: "Professor Laz Ekwueme",
    image: "https://res.cloudinary.com/dhxdkejh3/image/upload/v1761624192/IMG-20251028-WA0004_y62itj.jpg",
    title: "Musicologist & Composer",
    citation: "A foremost scholar, composer, and choral director whose works preserved and modernized African music heritage.",
    achievement: "Professor of Music, University of Lagos • Founder of Laz Ekwueme Chorale • Cultural Icon",
    quote: "“Music is the heartbeat of our heritage — and Umuahia taught me to listen.”"
  },
  15: {
  name: "Nnamdi Kanu",
  image: "https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801399/IMG-20251028-WA0037_eakqdu.jpg",
  title: "Social Activist & Pro-Democracy Advocate",
  citation: "A passionate voice for self-determination and political reform, Nnamdi Kanu has become a symbol of civic activism and national consciousness across Nigeria and beyond.",
  achievement: "Founder, Indigenous People of Biafra (IPOB) • Human Rights Advocate • Political Commentator",
  quote: "“Freedom and justice are ideals worth every sacrifice.”"
},

16: {
  name: "Nfon Victor Mukete",
  image: "https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801314/IMG-20251028-WA0032_vshqf9.jpg",
  title: "Former Nigerian Minister of Information & Cameroonian Statesman",
  citation: "An influential leader who bridged nations through service, diplomacy, and cultural advocacy between Nigeria and Cameroon.",
  achievement: "Former Minister of Information (Nigeria) • Paramount Ruler of Kumba, Cameroon • Senior Statesman",
  quote: "“True leadership unites people beyond borders and backgrounds.”"
},

17: {
  name: "Dr. Chu Okongwu",
  image: "https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801338/IMG-20251028-WA0027_xslwdi.jpg",
  title: "Two-time Minister of Finance & Minister of National Planning",
  citation: "A brilliant economist and reformer whose leadership helped shape Nigeria’s fiscal policy and economic strategy during critical periods of development.",
  achievement: "Minister of Finance (1985–1986, 1990–1991) • Minister of National Planning • Economist and Author",
  quote: "“Sound policy is the foundation of national progress.”"
},

18: {
  name: "Dr. Josiah Onyebuchi Johnson (J.O.J. Okezie)",
  image: "https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801312/IMG-20251028-WA0022_acl8vi.jpg",
  title: "Nigeria’s First Minister of Health",
  citation: "A medical pioneer and visionary administrator who laid the foundation for Nigeria’s modern public health system.",
  achievement: "Nigeria’s First Minister of Health • Public Health Reformer • Advocate of Accessible Healthcare",
  quote: "“Good health is the truest measure of a nation’s wealth.”"
},

19: {
  name: "Dr. D. W. Emuchay",
  image: "https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801312/IMG-20251028-WA0023_ltxfip.jpg",
  title: "Pioneer of Nigeria’s First Private Hospital",
  citation: "A trailblazer in Nigerian healthcare, Dr. Emuchay founded the country’s first private hospital, setting a precedent for modern medical practice.",
  achievement: "Founder, Queen Elizabeth Hospital Aba • Medical Innovator • Healthcare Visionary",
  quote: "“Where there is care, there is hope.”"
},

20: {
  name: "Justice Charles Onyeama",
  image: "https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801312/IMG-20251028-WA0024_loexku.jpg",
  title: "Former Judge, International Court of Justice (World Court)",
  citation: "A jurist of international repute, Justice Onyeama represented Nigeria on the world stage with integrity, intellect, and fairness.",
  achievement: "Judge, International Court of Justice (1967–1976) • Justice of the Supreme Court of Nigeria • Legal Scholar",
  quote: "“Justice is universal; it binds the conscience of all humanity.”"
},

21: {
  name: "Jaja Wachukwu",
  image: "https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801312/IMG-20251028-WA0025_qwfmfn.jpg",
  title: "Nigeria’s First Speaker, House of Representatives & First Foreign Minister",
  citation: "A statesman and diplomat who played a defining role in Nigeria’s early governance and international relations.",
  achievement: "Nigeria’s First Speaker, House of Representatives • First Minister of Foreign Affairs • First Permanent Representative to the United Nations",
  quote: "“Diplomacy is the art of representing one’s people with dignity and conviction.”"
},

22: {
  name: "Rear Admiral Vincent Okeke (Class of ’78)",
  image: "https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801535/IMG-20251029-WA0075_gaqsim.jpg",
  title: "Director of Plans, Nigerian Defence Headquarters",
  citation: "A disciplined and strategic military leader whose decades of service strengthened Nigeria’s defence structure and logistics planning.",
  achievement: "Rear Admiral, Nigerian Navy • Former Director of Logistics, DHQ • Director of Plans, Defence Headquarters",
  quote: "“Discipline and honor are the anchors of every soldier’s duty.”"
},
23: {
  name: "Ken Saro-Wiwa",
  image: "https://res.cloudinary.com/dhxdkejh3/image/upload/v1762038650/IMG-20251023-WA0007_1_1_1_kb0jdn.png",
  title: "Writer, Environmentalist & Human Rights Advocate",
  citation: "A fearless voice for justice and environmental integrity, whose courage and convictions inspired global awareness on human rights and environmental activism in the Niger Delta.",
  achievement: "Founder, Movement for the Survival of the Ogoni People (MOSOP) • Award-winning Author and Broadcaster • Global Symbol of Peaceful Resistance",
  quote: "“The writer must be the conscience of his generation.”"
}

};

    function openModal(id) {
      const modal = document.getElementById("hofModal");
      const body = document.getElementById("modalBody");
      const p = profiles[id];

      body.innerHTML = `
        <img src="${p.image}" alt="${p.name}" class="modal-img">
        <h2>${p.name}</h2>
        <h4>${p.title}</h4>
        <p class="modal-citation">${p.citation}</p>
        <p><strong>Achievements:</strong> ${p.achievement}</p>
        <blockquote><i class="fas fa-quote-left"></i> ${p.quote} <i class="fas fa-quote-right"></i></blockquote>
      `;
      modal.style.display = "flex";
    }

    function closeModal() {
      document.getElementById("hofModal").style.display = "none";
    }

    window.onclick = function (event) {
      const modal = document.getElementById("hofModal");
      if (event.target === modal) modal.style.display = "none";
    };
</script>  
<script src="{{ asset('js/header.js') }}"></script>
