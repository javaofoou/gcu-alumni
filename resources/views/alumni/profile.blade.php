<style>
/* GLOBAL COLORS */
:root {
    --red: #B30000;
    --red-dark: #8B0000;
    --black: #111;
    --grey-light: #f5f5f5;
    --text-dark: #222;
    --text-muted: #666;
}

/* WRAPPER */
.profile-wrapper {
    width: 94%;
    max-width: 1100px;
    margin: 40px auto;
    font-family: 'Inter', sans-serif;
}

/* HEADER */
.profile-header {
    display: flex;
    gap: 25px;
    background: #ffffff;
    padding: 30px;
    border-radius: 18px;
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
    align-items: center;
    border: 1px solid #eee;
}

.photo-box img {
    width: 140px;
    height: 140px;
    border-radius: 100px;
    object-fit: cover;
    border: 4px solid var(--grey-light);
}

.basic-info h2 {
    font-size: 30px;
    font-weight: 800;
    margin: 0;
    color: var(--black);
}

.nickname {
    margin-top: 4px;
    font-style: italic;
    color: var(--text-muted);
}

.entry-house {
    margin: 10px 0;
    font-size: 15.5px;
    color: var(--text-dark);
}

.divider {
    margin: 0 8px;
    opacity: 0.7;
}

/* MODERN RED BUTTON */
.btn-modern {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: var(--red);
    color: #fff;
    padding: 10px 18px;
    border-radius: 10px;
    font-weight: 600;
    text-decoration: none;
    transition: 0.25s ease;
    margin-top: 10px;
    font-size: 14.5px;
}

.btn-modern:hover {
    background: var(--red-dark);
    transform: translateY(-2px);
}

/* CARD */
.card {
    background: #ffffff;
    padding: 28px;
    border-radius: 18px;
    margin-bottom: 28px;
    box-shadow: 0 3px 15px rgba(0,0,0,0.05);
    border: 1px solid #eee;
}

.card h3 {
    margin-bottom: 15px;
    font-size: 20px;
    font-weight: 700;
    color: var(--red);
    display: flex;
    align-items: center;
    gap: 8px;
}

/* GRID STYLE */
.card-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px 25px;
}

.card-grid p {
    margin: 0;
    background: var(--grey-light);
    padding: 13px 15px;
    border-radius: 12px;
    border-left: 4px solid var(--red-dark);
    font-size: 15px;
    color: var(--text-dark);
    display: flex;
    align-items: center;
    gap: 10px;
}

.card-grid p i {
    font-size: 17px;
    color: var(--red-dark);
}

/* RESPONSIVE */
@media (max-width: 850px) {
    .profile-header {
        flex-direction: column;
        text-align: center;
    }

    .card-grid {
        grid-template-columns: 1fr;
    }
}
</style>
<x-layouts.app title="My Alumni Profile">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<div class="profile-wrapper">

    {{-- Header --}}
    <div class="profile-header">
        <div class="photo-box">
            @if($alumni['image'])
                <img src="{{ asset($alumni['image']) }}" alt="Profile Photo">
            @else
                <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1764094860/images_1_bfk9zw.jpg" alt="Default Photo">
            @endif
        </div>

        <div class="basic-info">
            <h2>{{ $alumni['name'] }}</h2>

            @if($alumni['nickname'])
                <p class="nickname">“{{ $alumni['nickname'] }}”</p>
            @endif

            <p class="entry-house">
                Entry Year: <strong>{{ $alumni['entry'] }}</strong>
                <span class="divider">•</span>
                House: <strong>{{ $alumni['house'] }}</strong>
            </p>
        </div>
    </div>

    {{-- CONTENT --}}
    <div class="profile-content">

        {{-- PERSONAL --}}
        <div class="card">
            <h3><i class="fa-solid fa-user"></i> Personal Information</h3>

            <div class="card-grid">
                <p><i class="fa-solid fa-id-card"></i> <strong>Full Name:</strong> {{ $alumni['name'] }}</p>
                <p><i class="fa-solid fa-signature"></i> <strong>Nickname:</strong> {{ $alumni['nickname'] ?? 'N/A' }}</p>
                <p><i class="fa-solid fa-users-gear"></i> <strong>Past Class Captain:</strong> {{ $alumni['past_class_captain'] ?? 'N/A' }}</p>
                <p><i class="fa-solid fa-users-gear"></i> <strong>Current Class Captain:</strong> {{ $alumni['current_class_captain'] ?? 'N/A' }}</p>
                <p><i class="fa-solid fa-school"></i> <strong>Old Principal:</strong> {{ $alumni['old_principal'] ?? 'N/A' }}</p>
            </div>
        </div>

        {{-- CONTACT --}}
        <div class="card">
            <h3><i class="fa-solid fa-phone"></i> Contact Details</h3>

            <div class="card-grid">
                <p><i class="fa-solid fa-envelope"></i> <strong>Email:</strong> {{ $alumni['email'] }}</p>
                <p><i class="fa-solid fa-mobile-screen"></i> <strong>Phone:</strong> {{ $alumni['contact'] ?? 'N/A' }}</p>
                <p><i class="fa-solid fa-house"></i> <strong>Residence:</strong> {{ $alumni['residence'] ?? 'N/A' }}</p>
                <p><i class="fa-solid fa-flag"></i> <strong>Country:</strong> {{ $alumni['country'] ?? 'N/A' }}</p>
                <p><i class="fa-solid fa-location-dot"></i> <strong>City / Location:</strong> {{ $alumni['location'] ?? 'N/A' }}</p>
            </div>
        </div>

        {{-- PROFESSIONAL --}}
        <div class="card">
            <h3><i class="fa-solid fa-briefcase"></i> Professional Information</h3>

            <div class="card-grid">
                <p><i class="fa-solid fa-user-tie"></i> <strong>Profession:</strong> {{ $alumni['profession'] ?? 'N/A' }}</p>
                <p><i class="fa-solid fa-industry"></i> <strong>Current Trade:</strong> {{ $alumni['trade'] ?? 'N/A' }}</p>
                <p><i class="fa-solid fa-list"></i> <strong>Business Category:</strong> {{ $alumni['business_category'] ?? 'N/A' }}</p>
                <p><i class="fa-solid fa-lightbulb"></i> <strong>Business Interest:</strong> {{ $alumni['business_interest'] ?? 'N/A' }}</p>
                <p><i class="fa-solid fa-industry"></i> <strong>Branch Leader:</strong> {{ $alumni['branch_leader'] ?? 'N/A' }}</p>
             
            </div>
        </div>

        {{-- IDENTITY --}}
        <div class="card">
            <h3><i class="fa-solid fa-shield-halved"></i> Identity Information</h3>

            <div class="card-grid">
                <p><i class="fa-solid fa-fingerprint"></i> <strong>NIN:</strong> {{ $alumni['nin'] ?? 'N/A' }}</p>
            </div>
        </div>

    </div>
</div>

</x-layouts.app>

   <x-layouts.footer/>

 <script src="{{ asset('js/header.js') }}"></script>
  <!-- FOOTER -->
