<x-layouts.app title="Post Business Advert">

<style>
/* ===============================
   BUSINESS ADVERT FORM
================================ */
.advert-form-wrapper {
  max-width: 600px;
  margin: 40px auto;
  padding: 25px;
  background: #ffffff;
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

.advert-form-wrapper h2 {
  text-align: center;
  margin-bottom: 25px;
  color: #111;
  font-weight: 700;
}

.advert-form .form-group {
  margin-bottom: 18px;
}

.advert-form label {
  display: block;
  margin-bottom: 6px;
  font-size: 0.9rem;
  font-weight: 600;
  color: #333;
}

.advert-form input,
.advert-form textarea {
  width: 100%;
  padding: 12px 14px;
  border-radius: 8px;
  border: 1px solid #ddd;
  font-size: 0.95rem;
  transition: 0.25s ease;
}

.advert-form textarea {
  resize: vertical;
  min-height: 110px;
}

.advert-form input:focus,
.advert-form textarea:focus {
  border-color: #b22222;
  outline: none;
  box-shadow: 0 0 0 3px rgba(178,34,34,0.1);
}

.btn-submit {
  width: 100%;
  padding: 14px;
  border: none;
  background: linear-gradient(135deg, #b22222, #000);
  color: #fff;
  font-weight: 700;
  border-radius: 10px;
  cursor: pointer;
  transition: transform 0.2s ease, opacity 0.2s ease;
}

.btn-submit:hover {
  transform: translateY(-2px);
  opacity: 0.95;
}

/* Mobile spacing */
@media (max-width: 480px) {
  .advert-form-wrapper {
    margin: 20px 12px;
    padding: 20px;
  }
}

.success {
  color: green;
  text-align: center;
  margin-bottom: 15px;
}

.error {
  color: red;
  text-align: center;
  margin-bottom: 15px;
}
</style>

<div class="advert-form-wrapper">
    <h2>Business Update / Innovation</h2>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p class="error">{{ session('error') }}</p>
    @endif

    <form action="{{ route('adverts.store') }}" method="POST" enctype="multipart/form-data" class="advert-form">
        @csrf

        <div class="form-group">
            <label for="business_name">Business Name</label>
            <input type="text" name="business_name" id="business_name" placeholder="Business Name" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" placeholder="Phone Number" required>
        </div>

        <div class="form-group">
            <label for="description">Short Description (optional)</label>
            <textarea name="description" id="description" placeholder="Describe your business"></textarea>
        </div>

        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" name="image" id="image" required>
        </div>

        <button type="submit" class="btn-submit">Submit Advert</button>
    </form>
</div>

</x-layouts.app>
