<div class="directory-container">
    <h2>GCU Alumni Search</h2>

    <div class="filters">
        <input type="text" wire:model.live.debounce.400ms="q" placeholder="Search by name, profession, or house...">

        <select wire:model.live="entry">
            <option value="">Year (All)</option>
            @for ($y = 1929; $y <= date('Y'); $y++)
                <option value="{{ $y }}">{{ $y }}</option>
            @endfor
        </select>

        <select wire:model.live="profession">
    <option value="">Profession (All)</option>
    <option value="Academia">Academia</option>
    <option value="Accountant">Accountant</option>
    <option value="Activist">Activist</option>
    <option value="Actor">Actor</option>
    <option value="Administrator">Administrator</option>
    <option value="Agriculture">Agriculture</option>
    <option value="Air Force">Air Force</option>
    <option value="Anthropologist">Anthropologist</option>
    <option value="Architect">Architect</option>
    <option value="Artist">Artist</option>
    <option value="Arts">Arts</option>
    <option value="Athletics">Athletics</option>
    <option value="Automobile Engineer">Automobile Engineer</option>
    <option value="Aeronautical">Aeronautical</option>
    <option value="Engineering">Engineering</option>
    <option value="Author">Author</option>
    <option value="Aviation">Aviation</option>
    <option value="Banker">Banker</option>
    <option value="Biologist">Biologist</option>
    <option value="Biotechnologist">Biotechnologist</option>
    <option value="Botanist">Botanist</option>
    <option value="Broadcaster">Broadcaster</option>
    <option value="Businessman">Businessman</option>
    <option value="Caterer">Caterer</option>
    <option value="Chemical Engineer">Chemical Engineer</option>
    <option value="Civil Engineer">Civil Engineer</option>
    <option value="Civil Service">Civil Service</option>
    <option value="Clergy">Clergy</option>
    <option value="Computer/ IT person">Computer/ IT person</option>
    <option value="Construction">Construction</option>
    <option value="Consultant">Consultant</option>
    <option value="Craftsman">Craftsman</option>
    <option value="Diplomat">Diplomat</option>
    <option value="Economist">Economist</option>
    <option value="Educationist">Educationist</option>
    <option value="Electrical Engineer">Electrical Engineer</option>
    <option value="Entertainer">Entertainer</option>
    <option value="Entrepreneur">Entrepreneur</option>
    <option value="Environmentalist">Environmentalist</option>
    <option value="Evangelist">Evangelist</option>
    <option value="Farmer">Farmer</option>
    <option value="Fashion stylist">Fashion stylist</option>
    <option value="Fitness Instructor">Fitness Instructor</option>
    <option value="Foot expert">Foot expert</option>
    <option value="Footballer">Footballer</option>
    <option value="Free lancer">Free lancer</option>
    <option value="Geologist">Geologist</option>
    <option value="Genetic Engineer">Genetic Engineer</option>
    <option value="Hair stylist">Hair stylist</option>
    <option value="Historian">Historian</option>
    <option value="Horticulturist">Horticulturist</option>
    <option value="Industrialist">Industrialist</option>
    <option value="Investor">Investor</option>
    <option value="Journalist">Journalist</option>
    <option value="Judge">Judge</option>
    <option value="Lawyer">Lawyer</option>
    <option value="Leadership Trainer">Leadership Trainer</option>
    <option value="Lecturer">Lecturer</option>
    <option value="Legal Adviser">Legal Adviser</option>
    <option value="Legislator">Legislator</option>
    <option value="Librarian">Librarian</option>
    <option value="Management Consultant">Management Consultant</option>
    <option value="Mathematician">Mathematician</option>
    <option value="Media icon">Media icon</option>
    <option value="Mediator">Mediator</option>
    <option value="Medical Doctor">Medical Doctor</option>
    <option value="Medical Lab Technician">Medical Lab Technician</option>
    <option value="Medical Consultant">Medical Consultant</option>
    <option value="Microbiologist">Microbiologist</option>
    <option value="Military">Military</option>
    <option value="Musician/Music promoter">Musician/Music promoter</option>
    <option value="Naval Officer">Naval Officer</option>
    <option value="Novelist">Novelist</option>
    <option value="Nurse">Nurse</option>
    <option value="Oceanographer">Oceanographer</option>
    <option value="Oil and gas">Oil and gas</option>
    <option value="Painter">Painter</option>
    <option value="Para-military">Para-military</option>
    <option value="Pathogist">Pathogist</option>
    <option value="Pastor">Pastor</option>
    <option value="Poet">Poet</option>
    <option value="Petroleum Engineer">Petroleum Engineer</option>
    <option value="Pharmacist">Pharmacist</option>
    <option value="Philanthropist">Philanthropist</option>
    <option value="Physiotherapist">Physiotherapist</option>
    <option value="Photographer">Photographer</option>
    <option value="Pilot">Pilot</option>
    <option value="Police officer">Police officer</option>
    <option value="Political Scientist">Political Scientist</option>
    <option value="Politician">Politician</option>
    <option value="Portfolio Manager">Portfolio Manager</option>
    <option value="Professional">Professional</option>
    <option value="Professor">Professor</option>
    <option value="Public Servant">Public Servant</option>
    <option value="Real Estate Manager">Real Estate Manager</option>
    <option value="Retiree">Retiree</option>
    <option value="Royalty">Royalty</option>
    <option value="Scholar">Scholar</option>
    <option value="Scientist">Scientist</option>
    <option value="Sculptor">Sculptor</option>
    <option value="Security expert">Security expert</option>
    <option value="Singer">Singer</option>
    <option value="Sociologist">Sociologist</option>
    <option value="Soldier">Soldier</option>
    <option value="Songwriter">Songwriter</option>
    <option value="Sportsman">Sportsman</option>
    <option value="Sports Promoter">Sports Promoter</option>
    <option value="Stock Broker">Stock Broker</option>
    <option value="Stylist">Stylist</option>
    <option value="Surgeon">Surgeon</option>
    <option value="Teacher">Teacher</option>
    <option value="Technologist">Technologist</option>
    <option value="Trader">Trader</option>
    <option value="Telecommunication">Telecommunication</option>
    <option value="Trado-medical Consultant">Trado-medical Consultant</option>
    <option value="Tourism industry">Tourism industry</option>
    <option value="Transporter">Transporter</option>
    <option value="Writer">Writer</option>
    <option value="Unemployed">Unemployed</option>
    <option value="Youth Advocate">Youth Advocate</option>
    <option value="Yoga Instructor">Yoga Instructor</option>
    <option value="Zoologist">Zoologist</option>
        </select>

        <select wire:model.live="house">
    <option value="">House (All)</option>
    <option value="Cozens">Cozens</option>
    <option value="Erekosima">Erekosima</option>
    <option value="Extension">Extension</option>
    <option value="Fisher">Fisher</option>
    <option value="Kent">Kent</option>
    <option value="New">New</option>
    <option value="Niger">Niger</option>
    <option value="Nile">Nile</option>
    <option value="School">School</option>
    <option value="Simpson">Simpson</option>
    <option value="Wareham">Wareham</option>
        </select>

        <select wire:model.live="location">
    <option value="">City (All)</option>
    <!-- Nigeria Cities -->
    <option value="Lagos">Lagos</option>
    <option value="Lagos - Ketu">Lagos - Ketu</option>
    <option value="Lagos - Ikeja">Lagos - Ikeja</option>
    <option value="Lagos - Victoria Island">Lagos - Victoria Island</option>
    <option value="Lagos - Ikoyi">Lagos - Ikoyi</option>
    <option value="Lagos - Ojo">Lagos - Ojo</option>
    <option value="Abuja">Abuja</option>
    <option value="Port Harcourt">Port Harcourt</option>
    <option value="Owerri">Owerri</option>
    <option value="Umuahia">Umuahia</option>
    <option value="Aba">Aba</option>
    <option value="Enugu">Enugu</option>
    <option value="Onitsha">Onitsha</option>
    <option value="Awka">Awka</option>
    <!-- International -->
    <option value="US/Canada">US/Canada</option>
    <option value="New York / New Jersey">New York / New Jersey</option>
    <option value="Texas">Texas</option>
    <option value="California">California</option>
    <option value="Washington DC / Virginia">Washington DC / Virginia</option>
    <option value="Atlanta">Atlanta</option>
    <option value="Midwest">Midwest</option>
    <option value="UK / Ireland">UK / Ireland</option>
    <option value="Ireland">Ireland</option>
    <option value="England">England</option>
        </select>
    </div>

    <div class="alumni-grid">
        @forelse($alumni as $a)
        <a href="{{ route('alumni.profile', $a['id']) }}" class="alumni-card-modern">
            <div class="alumni-card">
                <div class="photo">
                    <img src="{{ $a['image'] ?? '/images/default.png' }}" alt="{{ $a['name'] }}">
                </div>
                <div class="info">
                    <h3>{{ $a['name'] }}</h3>
                    <p><strong>House:</strong> {{ $a['house'] ?? 'N/A' }}</p>
                    <p><strong>Profession:</strong> {{ $a['profession'] ?? 'N/A' }}</p>
                    <p><strong>Entry:</strong> {{ $a['entry'] ?? '-' }}</p>
                    <p><strong>City:</strong> {{ $a['location'] ?? '-' }}</p>
                </div>
            </div>
        </a>
        @empty
            <div class="no-result">No alumni found.</div>
        @endforelse
    </div>
    <!-- pagination controls -->
  <nav aria-label="Pagination">
    <ul class="pagination" role="navigation">
      <li class="page-item {{ $page <= 1 ? 'disabled' : '' }}">
    <button class="page-link small" wire:click="previousPage" @if($page <= 1) disabled @endif aria-label="Previous">‹</button>
</li>

<li class="page-item">
    <div class="pages-list">
        @php
            $start = max(1, $page - 2);
            $end = min($totalPages ?: 1, $page + 2);
        @endphp

        @if($start > 1)
            <button class="page-link" wire:click="goToPage(1)">1</button>
            @if($start > 2)
                <span style="padding:0 8px;color:#666">…</span>
            @endif
        @endif

        @for($p = $start; $p <= $end; $p++)
            <button class="page-link {{ $p == $page ? 'active' : '' }}" wire:click="goToPage({{ $p }})">
                {{ $p }}
            </button>
        @endfor

        @if($end < $totalPages)
            @if($end < $totalPages - 1)
                <span style="padding:0 8px;color:#666">…</span>
            @endif
            <button class="page-link" wire:click="goToPage({{ $totalPages }})">{{ $totalPages }}</button>
        @endif
    </div>
</li>

<li class="page-item {{ ($page >= $totalPages) ? 'disabled' : '' }}">
    <button class="page-link small" wire:click="nextPage" @if($page >= $totalPages) disabled @endif aria-label="Next">›</button>
</li>
 </ul>
  </nav>
</div>

   
