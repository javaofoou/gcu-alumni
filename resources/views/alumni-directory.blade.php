<x-layouts.app title="Alumni Directory">
    <livewire:alumni-search />
</x-layouts.app>
<style>
@media screen and (min-width: 768px) {
  .hof-img {
     width: 380px;
     height: 280px;
  }
}
.hof-img img{
    width: 100%;
    height: 100%;
    object-fit: contain;
}
</style>
 <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!--Key Moment Block-->
  <section class="highlight-section">
  <h2 class="highlight-title">Umuahian Testimonials</h2>
  <div class="highlight-scroll">
         
    <!-- Umuahian Testimonials -->
    <div class="highlight-card">
      <video controls>
        <source src="https://res.cloudinary.com/dhxdkejh3/video/upload/v1761432248/VID-20251022-WA0028_s8v0l1.mp4" type="video/mp4">
      </video>
      <p class="highlight-caption">Umuahian Testimonials</p>
    </div>

        <div class="highlight-card">
      <video controls>
        <source src="https://res.cloudinary.com/dhxdkejh3/video/upload/v1761862867/VID-20251023-WA0007_iso9sa.mp4" type="video/mp4">
      </video>
      <p class="highlight-caption">Umuahian Testimonials</p>
    </div>
  </div>
  </section>
  
  <!-- NEWS SECTION (images + event-accurate captions) -->
<section class="news-section" style="margin: 40px 0px 10px 0px;">
  <h2 class="news-header">Latest News & Announcements</h2>
  <div class="news-slider">
    <div class="news-track">
      <div class="news-item">
  <img src="images/animations/upcoming_events.jpg" alt="Upcoming Alumni Event">
  <p>
     Upcoming Alumni Conference — Join Old Boys across chapters for the 2025 GCUOBA Summit, celebrating unity, legacy, and institutional renewal. 
    Stay tuned for event details and registration updates.
  </p>
</div>
<!-- News 8 -->
<div class="news-item">
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761980768/WhatsApp-Image-2025-10-05-at-18.39.18_1_kcwvuw.jpg" alt="Perimeter Fencing Groundbreaking">
  <p>
    Perimeter Fencing Groundbreaking — The long-awaited fencing of Government College Umuahia officially commenced on October 9, 2025, with top officials of Abia State, GCUOBA, and FEDT in attendance. 
    A major milestone in securing and preserving our Alma Mater’s heritage.
  </p>
</div>

      <!-- News 1 -->
      <div class="news-item">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801455/IMG-20251025-WA0037_1_w8hvue.jpg" alt="Alumni campus meeting">
        <p>Alumni Delegation Visits Campus — Senior alumni in signature red blazers conduct a site review and strategic discussion on ongoing projects.</p>
      </div>

      <!-- News 2 -->
      <div class="news-item">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801373/IMG-20251028-WA0040_mggojy.jpg" alt="Dignitaries at event">
        <p>High-level Commissioning Event — Dignitaries and alumni leaders attend an official commissioning and partnership forum.</p>
      </div>

      <!-- News 3 -->
      <div class="news-item">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761863055/IMG-20251030-WA0032_fj9fon.jpg" alt="Commemorative group photo">
        <p>Commemorative Group Photo — Alumni and special guests gather for a photo to mark the day’s milestone activities.</p>
      </div>

      <!-- News 4 -->
      <div class="news-item">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761863054/IMG-20251025-WA0029_1_utqhbd.jpg" alt="Award presentation">
        <p>Distinguished Service Award Presented — An alumnus receives recognition for outstanding contribution to the association.</p>
      </div>

      <!-- News 5 -->
      <div class="news-item">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761863055/IMG-20251029-WA0045_2_hijjvr.jpg" alt="Evening reunion photo">
        <p>Reunion Night — A memorable evening where Old Boys reunited, celebrated fellowship, and renewed commitments to the alma mater.</p>
      </div>

      <!-- News 6 -->
      <div class="news-item">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761629962/IMG-20251020-WA0013_2_negyiv.jpg" alt="Heritage building visit">
        <p>Heritage Visit & Photographic Record — Large cohort documents the original college architecture and preserves important visual records.</p>
      </div>

      <!-- News 7 -->
      <div class="news-item">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801501/IMG-20251029-WA0046_etqni9.jpg" alt="Conference session">
        <p>Alumni Conference Sessions — Delegates attend plenary sessions and workshops focused on education, mentoring, and infrastructure.</p>
      </div>

      <!-- News 8 -->
      <div class="news-item">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761476210/FB_IMG_1761475899223_o2l5b9.jpg" alt="Alumni line-up photo">
        <p>Delegation Line-up — Official delegation photo following inspection and ceremonial activities on the playing field.</p>
      </div>

      <!-- News 9 -->
      <div class="news-item">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801416/IMG-20251028-WA0068_dxmjuf.jpg" alt="Library inspection">
        <p>Library Walkthrough — Alumni inspect the renovated library/resource centre as part of the facilities upgrade review.</p>
      </div>

    </div>
  </div>
</section>
<!-- HALL OF FAME SHOWCASE SECTION -->
<section class="hof-showcase">
  <div class="hof-container">

    <!-- CARD 1 -->
    <div class="hof-slide active">
      <div class="hof-image">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761623540/IMG-20251027-WA0047_bpr7pm.jpg" alt="Chinua Achebe">
      </div>
      <div class="hof-quote">
        <h3>Chinua Achebe (Class of ’44)</h3>
        <p>“Umuahia is the crossroads where we learned to reclaim our voice and tell our own stories.”</p>
      </div>
    </div>

    <!-- CARD 2 -->
    <div class="hof-slide">
      <div class="hof-image">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761283784/WhatsApp_Image_2025-10-19_at_14.47.24_a7badb18_hyuau7.jpg" alt="Elechi Amadi">
      </div>
      <div class="hof-quote">
        <h3>Elechi Amadi (Class of ’48)</h3>
        <p>“The education we received at Umuahia gave us the mind to imagine and the voice to speak.”</p>
      </div>
    </div>

    <!-- CARD 3 -->
    <div class="hof-slide">
      <div class="hof-image">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761440493/WhatsApp_Image_2025-10-19_at_14.36.43_e81c2f64_gzmoe8.jpg" alt="Chukwemeka Ike">
      </div>
      <div class="hof-quote">
        <h3>HRH Chukwemeka Ike (Class of ’45)</h3>
        <p>“Umuahia provided the creative environment that nurtured the literary awakening of our era.”</p>
      </div>
    </div>

  </div>
</section>
    {{-- @if(!empty($adverts)) --}}
  {{-- <section class="business-adverts">
      <h2>Business Updates & Adverts</h2>
    @foreach($adverts as $advert)
      <div class="advert-card">
        <img src="{{ $advert['image'] }}" alt="{{ $advert['business_name'] }}">
        <h4>{{ $advert['business_name'] }}</h4>
        <p>{{ $advert['description'] }}</p>
        <a href="tel:{{ $advert['phone'] }}">Call {{ $advert['phone'] }}</a>
      </div>
    @endforeach
  </section> --}}
  @if(!empty($adverts))
<section class="business-adverts">
    <h2>Business Updates & Adverts</h2>

    <div class="advert-billboard">
        @foreach($adverts as $index => $advert)
            <div class="billboard-slide {{ $index === 0 ? 'active' : '' }}">
                <img src="{{ $advert['image'] }}" alt="{{ $advert['business_name'] }}">

                <div class="billboard-overlay">
                    <h3>{{ $advert['business_name'] }}</h3>
                    <p>{{ $advert['description'] }}</p>
                    <a href="tel:{{ $advert['phone'] }}" class="call-btn">
                        Call {{ $advert['phone'] }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endif
  <!--Key Moment Block-->
  <section class="highlight-section">
  <h2 class="highlight-title">Highlights & Key Moments</h2>

  <div class="highlight-scroll">

    <!-- Old-boys anthem recitation -->
    <div class="highlight-card">
      <video controls>
        <source src="https://res.cloudinary.com/dhxdkejh3/video/upload/v1761432231/VID-20251024-WA0005_h6kxdr.mp4" type="video/mp4">
      </video>
      <p class="highlight-caption">Old Boys Anthem Recitation</p>
    </div>
    <!-- Group Picture of Alumni -->
    <div class="highlight-card">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428477/IMG-20251022-WA0013_hv3jwo.jpg" alt="">
      <p class="highlight-caption">Group Picture of Alumni</p>
    </div>
     <!-- Umuahian Testimonials -->
    <div class="highlight-card">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/U5CkoRXV1UY?si=g1B2fLS4mPZMiAS3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div> 

    <!-- Opening of the Fest and Alumni Office -->
    <div class="highlight-card">
      <video controls>
        <source src="https://res.cloudinary.com/dhxdkejh3/video/upload/v1761432235/VID-20251023-WA0008_vub7fv.mp4" type="video/mp4">
      </video>
      <p class="highlight-caption">Opening of the Fest and Alumni Office</p>
    </div>

    <!-- Chinua Achebe & Nelson Mandela Photograph -->
    <div class="highlight-card">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428479/IMG-20251025-WA0026_f21mae.jpg" alt="">
      <p class="highlight-caption">Chinua Achebe with Nelson Mandela at a Gala Event</p>
    </div>
    <!-- Chinua Achebe & Nelson Mandela Photograph -->
    <div class="highlight-card">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/YXAKBwi-EN8?si=D3u45GyRA2_zxk_Z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <!-- Old Boys Picture -->
    <div class="highlight-card">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428166/IMG-20251025-WA0034_ks4wlo.jpg" alt="">
      <p class="highlight-caption">Old Boys Group Reunion Picture</p>
    </div>
    <div class="highlight-card">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/7kTdB96QUAg?si=SqkmrP4ByCwceV4D" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <!-- Facility Inspection -->
    <div class="highlight-card">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428387/IMG-20251025-WA0027_bgihaw.jpg" alt="">
      <p class="highlight-caption">Vice Chairman GCUOBA Inspecting Newly Installed Computer Room</p>
    </div>
  </div>
</section>

  <!-- College Anthem Section -->
  <section class="anthem-section">
    <h2><i class="fas fa-music"></i> College Anthem</h2>
    <div id="anthem-text"></div>
  </section>

  <!--Class List Category-->
  <div class="year-category">
    <div class="alumni-container" id="alumniBox">
  <h2>Alumni Wall of Fame</h2>
  <div class="alumni-grid">
  <div class="alumni-box" style="background-image:url('images/gcu-crest.png');">
    <span>Class 1929</span>
  </div>

  <div class="alumni-box" style="background-image:url('https://res.cloudinary.com/dhxdkejh3/image/upload/v1761283811/WhatsApp_Image_2025-10-19_at_14.11.19_a4edf3a8_b8l2ny.jpg');">
    <span>Class 1944 – Chinua Achebe</span>
  </div>

  <div class="alumni-box" style="background-image:url('https://res.cloudinary.com/dhxdkejh3/image/upload/v1761440493/WhatsApp_Image_2025-10-19_at_14.36.43_e81c2f64_gzmoe8.jpg');">
    <span>Class 1945 – HRH Chukwemeka Ike</span>
  </div>

  <div class="alumni-box" style="background-image:url('https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428229/IMG-20251022-WA0018_ebaxnr.jpg');">
    <span>Class 1959</span>
  </div>

  <div class="alumni-box" style="background-image:url('https://res.cloudinary.com/dhxdkejh3/image/upload/v1761130085/IMG-20251019-WA0000_pkih9q.jpg');">
    <span>Class 1975</span>
  </div>

  <div class="alumni-box" style="background-image:url('https://res.cloudinary.com/dhxdkejh3/image/upload/v1761455915/IMG_6824_yqbzy2.jpg');">
    <span>Class 1988</span>
  </div>

  <div class="alumni-box" style="background-image:url('https://res.cloudinary.com/dhxdkejh3/image/upload/v1761445845/IMG-20251023-WA0060_woxdej.jpg');">
    <span>Class 1999</span>
  </div>

  <div class="alumni-box" style="background-image:url('https://res.cloudinary.com/dhxdkejh3/image/upload/v1761445837/IMG-20251023-WA0058_dkseyq.jpg');">
    <span>Class 2007</span>
  </div>

  <div class="alumni-box" style="background-image:url('https://res.cloudinary.com/dhxdkejh3/image/upload/v1761445834/IMG-20251023-WA0071_f18ndf.jpg');">
    <span>Class 2012</span>
  </div>

  <div class="alumni-box" style="background-image:url('https://res.cloudinary.com/dhxdkejh3/image/upload/v1761445834/IMG-20251023-WA0070_bskyfo.jpg');">
    <span>Class 2017</span>
  </div>
</div>
</div>
   </div>
<!-- 🔴 HISTORY OF GOVERNMENT COLLEGE UMUAHIA -->
<section class="umuahia-history" id="history">
  <div class="history-wrapper">
    <h2>History of Government College Umuahia</h2>

    <p>
      The Government College Umuahia was founded by Reverend Robert Fisher on January 29, 1929, when he opened the gates of the school to 25 students drawn from all parts of Nigeria and West Africa — with its main catchment area being Eastern Nigeria and the Southern Cameroons. Nearly 20 years after the establishment of King’s College, Lagos, the first government-owned high school by the British colonial government, three similar public schools were created — in Ibadan, Zaria, and Umuahia.
    </p>

    <div class="history-img">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761629961/IMG-20251022-WA0018_1_l2licq.jpg" alt="Government College Umuahia - Early Years">
    </div>

    <p>
      These schools were designed after the model of the famous British public schools – Eton, Harrow, and Winchester – to educate future leaders for Nigeria and the Southern Cameroons. The onus for starting the Government College Umuahia fell on Reverend Robert Fisher, an English educator, mathematician, and Anglican priest who had previously taught at Achimota College, Accra. He arrived in Umuahia in 1927 and acquired 10 square miles (26 km²) of land for the campus.
    </p>

    <p>
      Reverend Fisher served as the first principal of the college from 1929 to 1939. The GCU soon became known as the "Eton of the East" for its elite standards and selectivity. It began as a teacher training institute in 1929 but converted into a secondary school the following year.
    </p>

    <div class="history-img">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761629961/IMG-20251019-WA0000_fr3vzz.jpg" alt="Rev. Robert Fisher and first set">
      <p class="img-caption">Rev. Fisher and the First Set of Students</p>
    </div>

    <p>
      In 1940, during World War II, the college was closed and used as an internment camp for German and Italian prisoners captured in the Cameroons. It reopened in 1941, and by 1943 classes resumed at the Umudike campus after renovation. Fisher’s vision was to build a school modeled after elite British institutions, complete with a botanical garden, art gallery, and sports facilities to foster holistic education.
    </p>

    <p>
      The college’s purpose was clear: to groom future leaders across Nigeria and the Southern Cameroons. Over the years, it became a breeding ground for influential writers, politicians, scientists, and military leaders.
    </p>

    <div class="history-img">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761629962/IMG-20251027-WA0046_j4z0we.jpg" alt="Historic Government College Umuahia">
      <p class="img-caption">Historic Buildings at Government College Umuahia</p>
    </div>

    <p>
      Among its many accomplishments, the college established world-class classrooms and laboratories. Students achieved top performance in national and international examinations such as WASSCE, GCE, Cambridge, GCSE, SAT, and TOEFL. Sports played a huge role as well — with facilities for cricket, hockey, basketball, tennis, volleyball, athletics, and football.
    </p>
    <p>
      Kenneth C. Murray, an English artist and archaeologist, pioneered modern art education in Nigeria while teaching at Umuahia from 1933 to 1939. He founded the school’s art gallery, which housed works by Ibeto, Utman Ibrahim, and Ben Enwonwu’s early charcoal drawings. Unfortunately, the gallery was destroyed during the Nigerian Civil War (1967–1970), when the college temporarily served as the General Staff Headquarters of the Biafran Army.
    </p>

    <p>
      The school also ran an officer cadet corps that trained several future military officers, including General George Kurubo, General Alex Madiebo, General Patrick Anwunah, and others. 
      Government College Umuahia produced an exceptional number of literary figures who shaped African literature, including Prof. Chukwuemeka Ike, Prof. Obi Nwakanma, Dr. Elechi Amadi, and Prof. Chinua Achebe — whose legendary novel <em>Things Fall Apart</em> remains one of the greatest literary works ever written.
    </p>
    <p>
      Other distinguished alumni include Prof. Lazarus Ekwueme, Dr. D.W. Emuchay, Dr. Okwesilieze Nwodo, Dr. Achike Udenwa, Dr. Orji Uzor Kalu, and sports icons like Ikechukwu Uche, Ida Peterside, and Emmanuel Okala. 
      The legacy of Umuahia continues to shine as a symbol of excellence in education, leadership, and culture.
    </p>
  </div>
  <!-- ===== PAST PRINCIPALS SECTION ===== -->
<section class="past-principals">
  <div class="container">
    <h2><i class="fas fa-user-graduate"></i> Past Principals of Government College Umuahia</h2>
    <p class="sub-text">
      Honoring the distinguished educators whose leadership built the character, discipline, and academic excellence that define the Umuahian spirit.
    </p>

    <div class="principals-grid">
      <div class="principal-card">
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761975285/WhatsApp_Image_2025-10-31_at_10.40.54_a812a5db_xeuvdn.jpg" alt="Past Principals 1">
        <div class="principal-info">
          <h3>Rev. Robert Fisher & Successive Principals</h3>
          <p>
            The visionary leadership of Rev. Robert Fisher, our founding Principal, established the foundation for discipline, scholarship, and moral excellence that remains our legacy today.
          </p>
        </div>
      </div>

      <div class="principal-card"> 
        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761975292/WhatsApp_Image_2025-10-31_at_10.40.54_27acd008_lhldox.jpg" alt="Past Principals 2">
      </div>
      </div>
    </div>
  </div>
</section>
</section>
<!-- HALL OF FAME SECTION -->
<section class="hall-of-fame" id="hall-of-fame">
  <div class="hof-header">
    <h2><i class="fas fa-award"></i> Hall of Fame</h2>
    <p>
      Celebrating Umuahians who have distinguished themselves in leadership, scholarship, and service — 
      upholding the immortal spirit of GCU.
    </p>
  </div>
  <div class="hof-grid">
  <!-- ALUMNUS 1 -->
<div class="hof-item">
  <div class="hof-img">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801467/IMG-20251029-WA0011_p7pxuz.jpg" alt="Brigadier General George T. Kurubo"/>
  </div>
  <div class="hof-content">
    <h3><i class="fas fa-user-graduate"></i> Brigadier general George T. Kurubo.</h3>
    <p>
      The first Nigerian Chief of the Nigeria's Air Force. </p>
    <span><i class="fas fa-medal"></i> National Alumni Leadership</span>
  </div>
</div>

  <!-- ALUMNUS 2 -->
<div class="hof-item">
  <div class="hof-img">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761623540/IMG-20251027-WA0047_bpr7pm.jpg" alt="Chinua Achebe"/>
  </div>
  <div class="hof-content">
    <h3><i class="fas fa-user-graduate"></i>Chinua Achebe</h3>
    <p>
      Chinua Achebe remains one of Africa’s most influential literary figures. His work redefined African narrative identity and inspired global appreciation for indigenous voice and heritage. </p>
    <span><i class="fas fa-medal"></i> National Alumni Leadership</span>
  </div>
</div>

<!-- ALUMNUS 5 -->
<div class="hof-item">
  <div class="hof-img">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428478/IMG-20251023-WA0020_1_subz4m.jpg" alt="Prof. Nimi Dimkpa Briggs" />
  </div>
  <div class="hof-content">
    <h3><i class="fas fa-chalkboard-teacher"></i> Prof. Nimi Dimkpa Briggs</h3>
    <p>
      Emeritus Professor of Gynaecology and Obstetrics and Former Vice Chancellor of the University of Port Harcourt.
      A renowned academic who dedicated his career to advancing medical research, ethical scholarship, and university development.
    </p>
    <span><i class="fas fa-lightbulb"></i> Excellence in Academia & Medicine</span>
  </div>
</div>

<!-- ALUMNUS 6 -->
<div class="hof-item reverse">
  <div class="hof-content">
    <h3><i class="fas fa-user-shield"></i> Emeritus Professor Kesley A. Harrison</h3>
    <p>
   Former Vice-Chancellor University of Portharcourt-1989-1992, and Consultant Gynaecologist and Obstetrician.
    <span><i class="fas fa-users"></i> Alumni Service & Institutional Stewardship</span>
  </div>
  <div class="hof-img">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801460/IMG-20251029-WA0012_xukcad.jpg" alt="Kingsley A. Harrison" />
  </div>
</div>

<!-- ALUMNUS 7 -->
<div class="hof-item">
  <div class="hof-img">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801400/IMG-20251028-WA0047_jhouyx.jpg" alt="Sir Onyia Nwamah" />
  </div>
  <div class="hof-content">
    <h3><i class="fas fa-handshake"></i> Prof. Dagogo Fubara</h3>
    <p>Class of 1952</p>
    <span><i class="fas fa-building"></i> Organizational Leadership</span>
  </div>
</div>

<!-- ALUMNUS 2 -->
<div class="hof-item reverse">
  <div class="hof-content">
    <h3><i class="fas fa-user-tie"></i> Chief Uche C. Ihediwa, SAN</h3>
    <p>
      Former NEC President and Former Attorney General of Abia State. A respected legal mind recognized for his
      contributions to public service, policy reform, and promoting justice and civic responsibility.
    </p>
    <span><i class="fas fa-briefcase"></i> Distinguished Service in Law & Governance</span>
  </div>
  <div class="hof-img">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761513594/IMG-20251025-WA0031_1_rhwzan.jpg" alt="Chief Uche Ihediwa" />
  </div>
</div>

<!-- ALUMNUS 3 -->
<div class="hof-item">
  <div class="hof-img">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428551/IMG-20251024-WA0000_eawrwz.jpg" alt="Senator Orji Uzor Kalu" />
  </div>
  <div class="hof-content">
    <h3><i class="fas fa-landmark"></i> Senator Orji Uzor Kalu</h3>
    <p>
      Senator representing Abia North and Former Governor of Abia State (1999–2007). Known for his enduring influence
      in national governance, economic development, empowerment initiatives, and political leadership discourse.
    </p>
    <span><i class="fas fa-flag"></i> Public Governance & National Leadership</span>
  </div>
</div>

<!-- ALUMNUS 4 -->
<div class="hof-item reverse">
  <div class="hof-content">
    <h3><i class="fas fa-user-tie"></i> Achike Udenwa</h3>
    <p>
      Former Governor of Imo State (1999–2007). A statesman whose public service legacy reflects dedication to peace,
      regional development, and democratic governance.
    </p>
    <span><i class="fas fa-globe-africa"></i> Statesmanship & Regional Development</span>
  </div>
  <div class="hof-img">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428551/IMG-20251024-WA0003_uifrf9.jpg" alt="Achike Udenwa" />
  </div>
</div>

<!-- ALUMNUS 8 -->
<div class="hof-item reverse">
  <div class="hof-content">
    <h3><i class="fas fa-futbol"></i> Ida Peterside</h3>
    <p>
      Former Super Eagles Goalkeeper and respected sports analyst. Known for inspiring new generations of athletes
      through mentorship and advocacy for sports excellence.
    </p>
    <span><i class="fas fa-trophy"></i> Excellence in Sports & Mentorship</span>
  </div>
  <div class="hof-img">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761428210/IMG-20251023-WA0003_gamoaa.jpg" alt="Ida Peterside" />
  </div>
</div>

<!-- ALUMNUS 9 -->
<div class="hof-item">
  <div class="hof-img">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761866629/images_pysifn.jpg" alt="Ikechukwu Uche" />
  </div>
  <div class="hof-content">
    <h3><i class="fas fa-running"></i> Ikechukwu Uche</h3>
    <p>
      Former Super Eagles Forward, celebrated for his outstanding international football career and contributions
      to sports development initiatives within the country.
    </p>
    <span><i class="fas fa-medal"></i> Sports Excellence & National Representation</span>
  </div>
</div>

  </div>

  <div class="hof-footer">
    <a href="/hall-of-fame" class="hof-btn"><i class="fas fa-users"></i> View More Inductees</a>
  </div>
</section>

<!-- COUNTERS -->
 <!-- DEVELOPMENT PROJECTS SECTION -->
<section class="projects-section" id="projects">
  <div class="projects-header">
    <h2><i class="fas fa-building"></i> Great Umuahians & Development Projects</h2>
<div class="project-stats">
  <div class="stat-box">
    <i class="fas fa-tools"></i>
    <h3>Multiple Campus Projects</h3>
    <p>Completed Over the Years</p>
  </div>

  <div class="stat-box">
    <i class="fas fa-hard-hat"></i>
    <h3>Active Development Efforts</h3>
    <p>Ongoing Restoration & Upgrades</p>
  </div>

  <div class="stat-box">
    <i class="fas fa-donate"></i>
    <h3>Sustained Alumni Support</h3>
    <p>Driven by Collective Contribution</p>
  </div>
</div>

 <!-- PROJECT CARDS -->
<div class="projects-grid">

  <!-- PROJECT 1 -->
  <div class="project-card">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761445845/IMG-20251023-WA0060_woxdej.jpg" alt="Campus Identity Signage" />
    <div class="project-content">
      <h3>Rebranding & Campus Identity Signage</h3>
      <p class="donor">Initiative of the GCU Old Boys Association</p>
      <p class="desc">
        Installation of updated directional and identity signage across the campus, reinforcing
        institutional heritage and creating a more welcoming visual environment for students and visitors.
      </p>
    </div>
  </div>

  <!-- PROJECT 2 -->
  <div class="project-card">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761445844/IMG-20251023-WA0059_aklwnd.jpg" alt="Classroom Building Renovation" />
    <div class="project-content">
      <h3>Classroom Block Exterior Renovation</h3>
      <p class="donor">Sustained by Multiple Alumni Year Sets</p>
      <p class="desc">
        Structural repairs and external refurbishment of academic buildings to preserve campus architecture, 
        improve learning conditions, and ensure long-term building integrity.
      </p>
    </div>
  </div>

  <!-- PROJECT 3 -->
  <div class="project-card">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761445837/IMG-20251023-WA0058_dkseyq.jpg" alt="Roof Rehabilitation" />
    <div class="project-content">
      <h3>Roof Rehabilitation & Structural Upgrade</h3>
      <p class="donor">Supported by Alumni Maintenance Fund</p>
      <p class="desc">
        Replacement and reinforcement of roofing systems to protect key facilities from weather damage and 
        preserve the historical character of the school structures.
      </p>
    </div>
  </div>

  <!-- PROJECT 4 -->
  <div class="project-card">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761445834/IMG-20251023-WA0071_f18ndf.jpg" alt="Campus Grounds Maintenance" />
    <div class="project-content">
      <h3>Campus Grounds Restoration</h3>
      <p class="donor">Community Effort Led by Alumni Volunteers</p>
      <p class="desc">
        Rehabilitation of open fields, walkways, and assembly areas to restore the scenic environment 
        and preserve the traditional beauty of the College grounds.
      </p>
    </div>
  </div>

  <!-- PROJECT 5 -->
  <div class="project-card">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761445834/IMG-20251023-WA0070_bskyfo.jpg" alt="Walkway and Accessibility Upgrade" />
    <div class="project-content">
      <h3>Walkway Path & Accessibility Upgrade</h3>
      <p class="donor">Funded by the Class of ’85 Restoration Group</p>
      <p class="desc">
        Improved paved walkways and campus accessibility routes to enhance student mobility, 
        ensure safety, and enable easier access between core learning facilities.
      </p>
    </div>
  </div>

  <!-- PROJECT 6 -->
  <div class="project-card">
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761445833/IMG-20251023-WA0069_o8zm6z.jpg" alt="Directional & Informational Signposting" />
    <div class="project-content">
      <h3>Directional & Informational Signposting</h3>
      <p class="donor">Backed by Heritage Preservation Partners</p>
      <p class="desc">
        Installation of new signposting markers to guide movement across campus, strengthen community orientation,
        and uphold the historical identity of Government College Umuahia.
      </p>
    </div>
  </div>
</div>
</section>

<script>
  // --- Typewriter effect for anthem ---
  const anthemText = `THE IMMORTAL WORDS AND GENIUS OF YOUNG DR ED CHUKUKERE

Verse One:
We lift our voice to thee, O Lord
To Thee we sing with one accord
To grant us through Thy Son Abored
The will to shine as one.

Verse Two:
From Morning till the approach of Night
With humble minds, with all our might
We seek the gift which is thy light
The will to shine as one.

Verse Three:
As all of us, or black or white
Beseech thee now us to unite
That all may seek this gift thy light
The will to shine as one.

Verse Four:
We beg thee now to show the way
That all of us may kneel and pray
And seek and keep from day to day
The will to shine as one.`;

  let i = 0;
  const speed = 50;
  function typeWriter() {
    if (i < anthemText.length) {
      document.getElementById("anthem-text").innerHTML += anthemText.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
    }
  }
  typeWriter();



let currentSlide = 0;
const slides = document.querySelectorAll('.hof-slide');

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.remove('active');
    if (i === index) slide.classList.add('active');
  });
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length;
  showSlide(currentSlide);
}

setInterval(nextSlide, 5000); // Slide every 5 seconds

document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".billboard-slide");
    let current = 0;

    setInterval(() => {
        slides[current].classList.remove("active");
        current = (current + 1) % slides.length;
        slides[current].classList.add("active");
    }, 5000); // change every 5 seconds
});

</script>
 <x-layouts.footer/>
