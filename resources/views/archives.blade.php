<x-layouts.app/>
 <style>
/* ARCHIVE SECTION */
.archive {
  max-width: 1200px;
  margin: 60px auto;
  padding: 0 20px;
}

.archive h2 {
  font-size: 28px;
  margin-bottom: 8px;
  font-weight: 700;
  border-left: 5px solid #B22222;
  padding-left: 12px;
}

.archive-sub {
  color: #555;
  margin-bottom: 25px;
  font-size: 16px;
}

/* IMAGE GRID */
.archive-grid {
  display: grid;
  gap: 15px;
  grid-template-columns: repeat(4, 1fr);
}

/* SINGLE ITEM */
.archive-item {
  overflow: hidden;
  border-radius: 14px;
  background: #fff;
  box-shadow: 0 4px 10px rgba(0,0,0,0.12);
  transition: transform .3s ease;
}

/* IMAGE */
.archive-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform .4s ease;
}

/* HOVER ZOOM */
.archive-item:hover img {
  transform: scale(1.08);
}

/* TABLET */
@media (max-width: 900px) {
  .archive-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

/* MOBILE */
@media (max-width: 600px) {
  .archive h2 {
    text-align: center;
    border-left: none;
    padding-left: 0;
    font-size: 22px;
  }

  .archive-sub {
    text-align: center;
    font-size: 15px;
  }

  .archive-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
  }

  .archive-item {
    border-radius: 12px;
  }
}

/* SMALL PHONES */
@media (max-width: 420px) {
  .archive-grid {
    grid-template-columns: 1fr;
  }
}

 </style>
 <!-- ARCHIVE SECTION -->
<section class="archive">
  <h2>Government College Umuahia Archive</h2>
  <p class="archive-sub">Cherished memories of Umuahians.</p>

  <div class="archive-grid">
    <!-- Project & Heritage Images -->
    <div class="archive-item">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801570/IMG-20251022-WA0018_1_c4m3f2.jpg" alt="Archive Image 1" />
    </div>
    <div class="archive-item">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801571/IMG-20251027-WA0046_lbad7o.jpg" alt="Archive Image 2" />
    </div>
        <div class="archive-grid">
      <div class="archive-item">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761455737/Slide28_e1gpqb.jpg" alt="Alumni Archive 10"/>
    </div>
       </div>
    <div class="archive-item">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801472/IMG-20251029-WA0032_fbxkbj.jpg" alt="Archive Image 3" />
    </div>
    <div class="archive-item">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801468/IMG-20251029-WA0034_lmjfw4.jpg" alt="Archive Image 4" />
    </div>

    <!-- Alumni & Historic Images -->
    <div class="archive-item">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801401/IMG-20251028-WA0063_bpdiqg.jpg" alt="Alumni Archive 1" />
    </div>
    <div class="archive-item">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761801339/IMG-20251028-WA0033_ndzmx8.jpg" alt="Alumni Archive 2" />
    </div>
    <div class="archive-item">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761629961/IMG-20251019-WA0000_fr3vzz.jpg" alt="Alumni Archive 3" />
    </div>
    <div class="archive-item">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761543183/Slide34_pourot.jpg" alt="Alumni Archive 4" />
    </div>
    <div class="archive-item">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761456095/Slide27_1_ezeqdc.jpg" alt="Alumni Archive 5" />
    </div>
    <div class="archive-item">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761456088/Slide7_a2bspj.jpg" alt="Alumni Archive 6" />
    </div>
    <div class="archive-item">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761455911/Slide81_e5kwf6.jpg" alt="Alumni Archive 7" />
    </div>
    <div class="archive-item">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761455893/Slide28_vidiaj.jpg" alt="Alumni Archive 8" />
    </div>
    <div class="archive-item">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761455891/Slide24_1_szj2et.jpg" alt="Alumni Archive 9" />
    </div>
    <div class="archive-item">
      <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761455737/Slide28_e1gpqb.jpg" alt="Alumni Archive 10" />
    </div>
  </div>
</section>
<x-layouts.footer/>
 <script src="{{ asset('js/header.js') }}"></script>
