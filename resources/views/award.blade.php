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
  <h1>Awards</h1>
  <div class="grid">
    <!-- Insert images below -->
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469842/IMG-20251209-WA0026_i995po.jpg" alt="Award Image" />
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765677939/Screenshot_20251213_175706_Canva_ohtwj3.jpg" alt="Award Image" />
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765677937/Screenshot_20251213_175623_Canva_zjjxbn.jpg" alt="Award Image" />
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765677938/Screenshot_20251213_175647_Canva_oqrrz4.jpg" alt="Award Image" />
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765677937/Screenshot_20251213_174145_WPS_Office_wrqcrk.jpg" alt="Award Image" />
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765677938/Screenshot_20251213_175700_Canva_oufjqq.jpg" alt="Award Image" />
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765677937/Screenshot_20251213_174029_WPS_Office_hx4fgt.jpg" alt="Award Image" />
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765677937/Screenshot_20251213_175631_Canva_qczjen.jpg" alt="Award Image" />
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765677937/Screenshot_20251213_175631_Canva_qczjen.jpg" alt="Award Image" />
  <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765677942/Screenshot_20251213_175713_Canva_pojqug.jpg" alt="Award Image" />
  </div>
</div>
 <x-layouts.footer/>
 <script src="{{ asset('js/header.js') }}"></script>
