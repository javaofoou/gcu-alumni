{{-- <!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
<x-layouts.app title="Dashboard">

    <h2 style="margin-bottom:15px;">Welcome, {{ session('user_name') }}</h2>

      <livewire:alumni-search />{{-- ✅ Insert your livewire search here --}}

{{-- </x-layouts.app>
<a href="/logout">Logout</a>

<a href="{{ route('profile.edit') }}" 
style="display:inline-block;margin-bottom:20px;padding:10px 14px;background:#B22222;color:white;border-radius:6px;">
Edit Profile
</a>

</body>
</html> --}}
{{-- <x-layouts.app title="Alumni Dashboard">
<link rel="stylesheet" href="{{ asset('css/alumni-dashboard.css') }}">

<div class="dashboard-container">

    {{-- HEADER --}}
    {{-- <div class="dashboard-header">
        <div class="header-left">
            <h2>Welcome, {{ $alumni['firstname'] ?? $alumni['name'] ?? $alumni['email'] }}</h2>
            <p>Your Alumni Member Dashboard</p>
        </div>

        <div class="header-photo">
            @if(!empty($alumni['image']))
                <img src="{{$alumni['image'] }}" alt="Profile">
            @else
                <img src="{{ asset('images/default-user.png') }}" alt="Profile">
            @endif
        </div>
    </div>

    {{-- QUICK STATS --}}
    {{-- <div class="stats-section">
        <div class="stat-card">
            <h4>Entry Year</h4>
            <p>{{ $alumni['entry'] ?? 'N/A' }}</p>
        </div>

        <div class="stat-card">
            <h4>House</h4>
            <p>{{ $alumni['house'] ?? 'N/A' }}</p>
        </div>

        <div class="stat-card">
            <h4>Profession</h4>
            <p>{{ $alumni['profession'] ?? 'N/A' }}</p>
        </div>

        <div class="stat-card">
            <h4>City</h4>
            <p>{{ $alumni['location'] ?? 'N/A' }}</p>
        </div>
    </div> --}}

    {{-- DETAILS PANEL --}}
    {{-- <div class="details-panel">
        <h3>Your Profile Summary</h3>
        <div class="details-grid">
            <div class="detail"><strong>Full Name:</strong> <span>{{ $alumni['name'] ?? 'N/A' }}</span></div>
            <div class="detail"><strong>Nickname:</strong> <span>{{ $alumni['nickname'] ?? 'N/A' }}</span></div>
            <div class="detail"><strong>Email:</strong> <span>{{ $alumni['email'] ?? 'N/A' }}</span></div>
            <div class="detail"><strong>Contact:</strong> <span>{{ $alumni['contact'] ?? 'N/A' }}</span></div>
            <div class="detail"><strong>Residence:</strong> <span>{{ $alumni['residence'] ?? 'N/A' }}</span></div>
            <div class="detail"><strong>Country:</strong> <span>{{ $alumni['country'] ?? 'N/A' }}</span></div>
            <div class="detail"><strong>Business Category:</strong> <span>{{ $alumni['business_category'] ?? 'N/A' }}</span></div>
            <div class="detail"><strong>Business Interest:</strong> <span>{{ $alumni['business_interest'] ?? 'N/A' }}</span></div>
        </div>
    </div> --}}

    {{-- ALUMNI ID CARD --}}
    {{-- <div class="idcard-wrapper">
        <h3>Your Alumni ID Card</h3>
        <div class="idcard">
            <div class="idcard-header">
                <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761476209/FB_IMG_1761475995419_boq5m0.jpg" class="school-logo" alt="Logo">
                <h4>Alumni Identity Card</h4>
            </div>

            <div class="idcard-body">
                <div class="id-photo">
                    @if(!empty($alumni['image']))
                        <img src="{{$alumni['image']}}" alt="Profile">
                    @else
                        <img src="{{ asset('images/default-user.png') }}" alt="Profile">
                    @endif
                </div>

                <div class="id-details">
                    <p><strong>Name:</strong> {{ $alumni['name'] ?? 'N/A' }}</p>
                    <p><strong>Entry:</strong> {{ $alumni['entry'] ?? 'N/A' }}</p>
                    <p><strong>House:</strong> {{ $alumni['house'] ?? 'N/A' }}</p>
                    <p><strong>Profession:</strong> {{ $alumni['profession'] ?? 'N/A' }}</p>
                    <p><strong>Location:</strong> {{ $alumni['location'] ?? 'N/A' }}</p>
                    <p><strong>Email:</strong> {{ $alumni['email'] ?? 'N/A' }}</p>
                    <p><strong>Contact:</strong> {{ $alumni['contact'] ?? 'N/A' }}</p>
                    <p><strong>Business Category:</strong> {{ $alumni['business_category'] ?? 'N/A' }}</p>
                    <p><strong>Business Interest:</strong> {{ $alumni['business_interest'] ?? 'N/A' }}</p>
                </div> --}}

                {{-- QR CODE --}}
                {{-- <div class="id-qrcode">
                    <div id="qrcode"></div>
                    <button id="downloadQr" class="download-btn">Download QR</button>
                </div>
            </div>

            <div class="idcard-footer">
                <p>Issued by: {{ config('app.name') }} Alumni Association</p>
            </div>

            <div class="download-section">
                <button id="downloadID" class="download-btn">Download ID Card</button>
            </div>
        </div>
    </div> --}}

    {{-- ACTION BUTTONS --}}
{{-- <div class="dashboard-actions"><a href="/alumni/profile/{{ $alumni['id'] }}" class="btn action-blue">View Profile</a>
<a href="/profile{{ $alumni['id'] }}/edit" class="btn action-green">Edit Profile</a>
          
            <a href="{{ route('logout') }}" class="btn action-red">Logout</a>
        
    </div>
</div> --}}

{{-- QR CODE SCRIPT --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
    const qrData = `Alumni ID: {{ $alumni['id'] ?? 'N/A' }} | Email: {{ $alumni['email'] ?? 'N/A' }} | Contact: {{ $alumni['contact'] ?? 'N/A' }} | House: {{ $alumni['house'] ?? 'N/A' }}`;

    const qrcode = new QRCode(document.getElementById("qrcode"), {
        text: qrData,
        width: 200,
        height: 200,
        colorDark: "#000000",
        colorLight: "#ffffff",
    });

    document.getElementById("downloadQr").addEventListener("click", function() {
        const qrImg = document.querySelector("#qrcode img");
        if (qrImg) {
            const link = document.createElement("a");
            link.href = qrImg.src;
            link.download = `qr_{{ $alumni['id'] ?? 'user' }}.png`;
            link.click();
        }
    });

    document.getElementById("downloadID").addEventListener("click", function() {
        html2canvas(document.querySelector(".idcard")).then(canvas => {
            const link = document.createElement("a");
            link.download = `alumni_id_{{ $alumni['id'] ?? 'user' }}.png`;
            link.href = canvas.toDataURL("image/png");
            link.click();
        });
    });
</script>
</x-layouts.app> --}}
<x-layouts.app title="Alumni Dashboard">
    <link rel="stylesheet" href="{{ asset('css/alumni-dashboard.css') }}">

    {{-- Feather Icons CDN --}}
    <script src="https://unpkg.com/feather-icons"></script>

    <div class="dashboard-container">

        {{-- HEADER --}}
        <header class="dashboard-header">
            <div class="header-left">
                <h2>Welcome, {{ $alumni['firstname'] ?? $alumni['name'] ?? $alumni['email'] }}</h2>
                <p class="muted">Your Alumni Member Dashboard</p>
            </div>

            <div class="header-actions">
                <div class="header-photo">
                    @if(!empty($alumni['image']))
                        <img src="{{ $alumni['image'] }}" alt="Profile">
                    @else
                        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1764094860/images_1_bfk9zw.jpg" alt="Profile">
                    @endif
                </div>
            </div>
        </header>

        {{-- QUICK STATS --}}
        <section class="stats-section" aria-label="Quick stats">
            <div class="stat-card">
                <span class="icon" data-feather="calendar"></span>
                <div class="stat-body">
                    <h4>Entry Year</h4>
                    <p>{{ $alumni['entry'] ?? 'N/A' }}</p>
                </div>
            </div>

            <div class="stat-card">
                <span class="icon" data-feather="home"></span>
                <div class="stat-body">
                    <h4>House</h4>
                    <p>{{ $alumni['house'] ?? 'N/A' }}</p>
                </div>
            </div>

            <div class="stat-card">
                <span class="icon" data-feather="briefcase"></span>
                <div class="stat-body">
                    <h4>Profession</h4>
                    <p>{{ $alumni['profession'] ?? 'N/A' }}</p>
                </div>
            </div>

            <div class="stat-card">
                <span class="icon" data-feather="map-pin"></span>
                <div class="stat-body">
                    <h4>City</h4>
                    <p>{{ $alumni['location'] ?? 'N/A' }}</p>
                </div>
            </div>
        </section>

        {{-- DETAILS PANEL --}}
        <section class="details-panel">
            <h3>Profile Summary</h3>

            <div class="details-grid">
                <div class="detail"><span class="icon" data-feather="user"></span><strong>Full Name</strong><span>{{ $alumni['name'] ?? 'N/A' }}</span></div>
                <div class="detail"><span class="icon" data-feather="user-check"></span><strong>Nickname</strong><span>{{ $alumni['nickname'] ?? 'N/A' }}</span></div>
                <div class="detail"><span class="icon" data-feather="mail"></span><strong>Email</strong><span>{{ $alumni['email'] ?? 'N/A' }}</span></div>
                <div class="detail"><span class="icon" data-feather="phone"></span><strong>Contact</strong><span>{{ $alumni['contact'] ?? 'N/A' }}</span></div>
                <div class="detail"><span class="icon" data-feather="map"></span><strong>Residence</strong><span>{{ $alumni['residence'] ?? 'N/A' }}</span></div>
                <div class="detail"><span class="icon" data-feather="globe"></span><strong>Country</strong><span>{{ $alumni['country'] ?? 'N/A' }}</span></div>
                <div class="detail"><span class="icon" data-feather="layers"></span><strong>Business Category</strong><span>{{ $alumni['business_category'] ?? 'N/A' }}</span></div>
                <div class="detail"><span class="icon" data-feather="lightbulb"></span><strong>Business Interest</strong><span>{{ $alumni['business_interest'] ?? 'N/A' }}</span></div>
            </div>
        </section>

        {{-- ID CARD + QR (ID card centered; QR at top-right of card) --}}
        <section class="idcard-wrapper">
            <h3>Your Alumni ID Card</h3>

            <div class="idcard" id="idcard">
                <div class="idcard-header">
                    <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1761476209/FB_IMG_1761475995419_boq5m0.jpg" class="school-logo" alt="Logo">
                    <div class="id-title">
                        <h4>Alumni Identity Card</h4>
                        <p class="muted">Issued by: {{ config('app.name') }} Alumni Association</p>
                    </div>
                </div>

                <div class="idcard-body">
                    <div class="id-photo">
                        @if(!empty($alumni['image']))
                            <img src="{{$alumni['image']}}" alt="Profile">
                        @else
                            <img src="{{ asset('images/default-user.png') }}" alt="Profile">
                        @endif
                    </div>

                    <div class="id-details">
                        <p><strong>Name:</strong> {{ $alumni['name'] ?? 'N/A' }}</p>
                        <p><strong>Entry:</strong> {{ $alumni['entry'] ?? 'N/A' }}</p>
                        <p><strong>House:</strong> {{ $alumni['house'] ?? 'N/A' }}</p>
                        <p><strong>Profession:</strong> {{ $alumni['profession'] ?? 'N/A' }}</p>
                        <p><strong>Location:</strong> {{ $alumni['location'] ?? 'N/A' }}</p>
                        <p><strong>Email:</strong> {{ $alumni['email'] ?? 'N/A' }}</p>
                        <p><strong>Contact:</strong> {{ $alumni['contact'] ?? 'N/A' }}</p>
                        <p><strong>Business Category:</strong> {{ $alumni['business_category'] ?? 'N/A' }}</p>
                        <p><strong>Business Interest:</strong> {{ $alumni['business_interest'] ?? 'N/A' }}</p>
                    </div>

                    {{-- QR CODE area (moved top-right using absolute positioning) --}}
                    <div class="id-qrcode" id="qrcodeWrap">
                        <div id="qrcode"></div>
                        <button id="downloadQr" class="download-btn">Download QR</button>
                    </div>
                </div>

                <div class="download-section">
                    <button id="downloadID" class="download-btn">Download ID Card</button>
                </div>
            </div>
        </section>

        {{-- ACTION BUTTONS --}}
        <div class="dashboard-actions">
            <a href="/alumni/profile/{{ $alumni['id'] }}" class="btn action-primary"><span data-feather="eye"></span> View Profile</a>
            <a href="/profile{{ $alumni['id'] }}/edit" class="btn action-outline"><span data-feather="edit"></span> Edit Profile</a>
            <a href="{{ route('logout') }}" class="btn action-danger"><span data-feather="log-out"></span> Logout</a>
        </div>
    </div>

    {{-- SCRIPTS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <script>
        // Render feather icons
        feather.replace();

        // Build QR data (simple, safe)
        const qrData = `Alumni ID: {{ $alumni['id'] ?? 'N/A' }} | Email: {{ $alumni['email'] ?? 'N/A' }} | Contact: {{ $alumni['contact'] ?? 'N/A' }} | House: {{ $alumni['house'] ?? 'N/A' }}`;

        const qrcode = new QRCode(document.getElementById("qrcode"), {
            text: qrData,
            width: 180,
            height: 180,
            colorDark: "#7a0000",   // dark red (scannable)
            colorLight: "#ffffff"
        });

        // Download QR (works where QR is generated as image)
        document.getElementById("downloadQr").addEventListener("click", function() {
            const qrImg = document.querySelector("#qrcode img");
            if (qrImg) {
                const link = document.createElement("a");
                link.href = qrImg.src;
                link.download = `qr_{{ $alumni['id'] ?? 'user' }}.png`;
                link.click();
            } else {
                alert('QR not ready yet.');
            }
        });

        // Download whole id card as image
        document.getElementById("downloadID").addEventListener("click", function() {
            html2canvas(document.querySelector(".idcard"), { scale: 2 }).then(canvas => {
                const link = document.createElement("a");
                link.download = `alumni_id_{{ $alumni['id'] ?? 'user' }}.png`;
                link.href = canvas.toDataURL("image/png");
                link.click();
            });
        });
    </script>
    
 <x-layouts.footer/>
 <script src="{{ asset('js/header.js') }}"></script>
</x-layouts.app>

