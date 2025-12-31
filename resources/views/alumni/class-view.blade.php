<x-layouts.app title="Class of {{ $entry }}">
<style>
.classes-wrapper {
    max-width: 1200px;
    margin: 50px auto;
    padding: 0 20px;
}

/* Page Title */
.title {
    text-align: center;
    font-size: 32px;
    font-weight: 700;
    color: #ff3333;
    margin-bottom: 30px;
}

/* No Records Text */
.no-records {
    text-align: center;
    font-size: 16px;
    color: #ccc;
}

/* Alumni Grid */
.alumni-grid-modern {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 20px;
}

/* Alumni Card */
.alumni-card-modern {
    background: linear-gradient(135deg, #1a1a1a, #0f0f0f);
    border-radius: 15px;
    overflow: hidden;
    text-decoration: none;
    color: #fff;
    box-shadow: 0 4px 15px rgba(255,0,0,0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.alumni-card-modern:hover {
    transform: translateY(-5px) scale(1.02);
    box-shadow: 0 0 25px rgba(255,0,0,0.55);
}

/* Alumni Photo */
.alumni-photo {
    width: 100%;
    height: 180px;
    overflow: hidden;
}

.alumni-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.alumni-card-modern:hover .alumni-photo img {
    transform: scale(1.1);
}

/* Info Section */
.alumni-info {
    padding: 12px 10px;
    text-align: center;
}

.alumni-info h3 {
    font-size: 18px;
    margin-bottom: 6px;
}

.alumni-info p {
    font-size: 14px;
    color: #ff9999;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
}

/* Font Awesome icons for profession */
.alumni-info i {
    color: #ff3333;
}

/* Pagination */
.pagination-modern {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 25px;
}

.pagination-modern a {
    padding: 8px 14px;
    border-radius: 6px;
    border: 1px solid #ff3333;
    color: #ff3333;
    text-decoration: none;
    transition: all 0.3s ease;
}

.pagination-modern a.active {
    background: #ff3333;
    color: #fff;
}

.pagination-modern a:hover {
    background: rgba(255,51,51,0.1);
}

/* Responsive */
@media(max-width: 900px) {
    .alumni-grid-modern {
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
    }
}

@media(max-width: 600px) {
    .alumni-grid-modern {
        grid-template-columns: 1fr;
    }
}
</style>
<div class="classes-wrapper">
    <h2 class="title">Class of {{ $entry }}</h2>

    @if(count($alumni) == 0)
        <p class="no-records">No alumni records found for this year.</p>
    @endif

    <div class="alumni-grid-modern">
        @foreach($alumni as $person)
            <a href="{{ route('alumni.profile', $person['id']) }}" class="alumni-card-modern">
                <div class="alumni-photo">
                    @if(!empty($person['image']))
                        <img src="{{ $person['image'] }}" alt="{{ $person['name'] }}">
                    @else
                        <img src="https://res.cloudinary.com/dhxdkejh3/image/upload/v1764094860/images_1_bfk9zw.jpg" alt="No Photo">
                    @endif
                </div>
                <div class="alumni-info">
                    <h3>{{ $person['name'] }}</h3>
                    <p><i class="fas fa-briefcase"></i> {{ $person['profession'] ?? '—' }}</p>
                </div>
            </a>
        @endforeach
    </div>

    {{-- Pagination --}}
    @if($pages > 1)
    <div class="pagination-modern">
        @for($i = 1; $i <= $pages; $i++)
            <a href="?page={{ $i }}" class="{{ $page == $i ? 'active' : '' }}">{{ $i }}</a>
        @endfor
    </div>
    @endif
</div>
</x-layouts.app>

<x-layouts.footer/>


