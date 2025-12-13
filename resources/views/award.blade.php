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
    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1765469843/IMG-20251209-WA0022_lbnu4v.jpg" alt="Award Image" />
  </div>
</div>
 <x-layouts.footer/>
 <script src="{{ asset('js/header.js') }}"></script>
