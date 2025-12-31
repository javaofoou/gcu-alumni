<x-layouts.app/>
<style>
     :root{
  --brand:#B22222;
  --bg:#000;
  --gold:#ffd700;
}

   body {
    font-family: Arial, sans-serif;
    background: #f5f5f5;
    margin: 0;
    padding: 0;
  }
  .gallery-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
  }
  h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
    font-size: 32px;
  }
  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
  }
  .grid img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .grid img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
  }
.subtitle {
    text-align: center;
    margin-top: -10px;
    margin-bottom: 30px;
    color: #666;
    font-size: 18px;
  }
</style>
<div class="gallery-container">
  <h1>Art Gallery</h1>
  <div class="grid">
    <!-- Insert images below -->
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1764025773/IMG-20251018-WA0051_guzdhm.jpg" alt="Art Gallery Image" />
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765470083/IMG-20251209-WA0006_j7gvpv.jpg" alt="Art Gallery Image" />
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765470082/IMG-20251209-WA0007_li8naj.jpg" alt="Art Gallery Image" />
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765470082/IMG-20251028-WA0034_1_g3334a.jpg" alt="Art Gallery Image" />
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469952/IMG-20251209-WA0009_ykdb8t.jpg" alt="Art Gallery Image" />
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469951/IMG-20251209-WA0010_ttigip.jpg" alt="Art Gallery Image" />
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469951/IMG-20251209-WA0013_nze07q.jpg" alt="Art Gallery Image" />
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469951/IMG-20251209-WA0011_oukjt9.jpg" alt="Art Gallery Image" />
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469950/IMG-20251209-WA0014_eqzrb7.jpg" alt="Art Gallery Image" />
   <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469950/IMG-20251209-WA0015_vaclcj.jpg" alt="Art Gallery Image" />
   <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469924/IMG-20251209-WA0016_g4jrkw.jpg" alt="Art Gallery Image" />
   <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469901/IMG-20251209-WA0017_iekbyk.jpg" alt="Art Gallery Image" />
   <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469877/IMG-20251209-WA0021_y1yajp.jpg" alt="Art Gallery Image" />
   <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469846/IMG-20251209-WA0018_zshfni.jpg" alt="Art Gallery Image" />
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469843/IMG-20251209-WA0019_yciznm.jpg" alt="Art Gallery Image" />
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469843/IMG-20251209-WA0022_lbnu4v.jpg" alt="Art Gallery Image" />
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469843/IMG-20251209-WA0023_k0hiyv.jpg" alt="Art Gallery Image" />
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469842/IMG-20251209-WA0026_i995po.jpg" alt="Art Gallery Image" />
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469842/IMG-20251209-WA0024_xdmjol.jpg" alt="Art Gallery Image" />
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469842/IMG-20251209-WA0025_grhw9o.jpg" alt="Art Gallery Image" />
  </div>
</div>
 <x-layouts.footer/>
 <script src="{{ asset('js/header.js') }}"></script>
