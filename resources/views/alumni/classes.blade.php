<x-layouts.app title="Alumni by Entry Year">

<div class="classes-container">

    <h2 class="title">
        <span>🎓 Alumni by Entry Year</span>
        <p class="subtitle">From 1929 to 2019 — Explore Generations</p>
    </h2>

    <div class="year-grid-modern">
        @foreach($years as $year)
            <a href="{{ route('alumni.view.class', $year) }}" class="year-card">
                <div class="year-number">{{ $year }}</div>
                <div class="year-label">Class of {{ $year }}</div>
            </a>
        @endforeach
    </div>

</div>

</x-layouts.app>


