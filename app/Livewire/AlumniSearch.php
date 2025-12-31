<?php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AlumniSearch extends Component
{
    public $q = '';
    public $entry = '';
    public $profession = '';
    public $house = '';
    public $location = '';

    public $alumni = [];

    public $page = 1;
    public $perPage = 12;
    public $totalPages = 1;
    public $total = 0;

    protected $queryString = ['q', 'entry', 'profession', 'house', 'location', 'page'];

    public function mount()
    {
        $this->search();
    }

    // Refresh results when filters change
    public function updated($property)
    {
        if ($property !== 'page') {
            $this->page = 1;
            $this->search();
        }
    }

    // Trigger search on page change
    public function updatedPage()
    {
        $this->search();
    }

    public function search()
    {
        $url = env('SUPABASE_URL') . '/rest/v1/alumni';
        $key = env('SUPABASE_KEY');

        $rangeStart = ($this->page - 1) * $this->perPage;
        $rangeEnd   = $rangeStart + $this->perPage - 1;

        $query = "?select=id,name,house,profession,country,location,entry,image";
        $filters = [];

        if ($this->q) {
            $term = urlencode($this->q);
            $filters[] = "or=(name.ilike.*{$term}*,profession.ilike.*{$term}*,house.ilike.*{$term}*)";
        }

        if ($this->entry) {
            $filters[] = "entry=eq.{$this->entry}";
        }

        if ($this->profession) {
            $filters[] = "profession=eq." . urlencode($this->profession);
        }

        if ($this->house) {
            $filters[] = "house=eq." . urlencode($this->house);
        }

        if ($this->location) {
            $filters[] = "location=eq." . urlencode($this->location);
        }

        if (!empty($filters)) {
            $query .= '&' . implode('&', $filters);
        }

        // FIX: Add 'Prefer: count=exact' to get Content-Range for pagination
        $response = Http::withHeaders([
            'apikey' => $key,
            'Authorization' => 'Bearer ' . $key,
            'Range-Unit' => 'items',
            'Range' => "$rangeStart-$rangeEnd",
            'Prefer' => 'count=exact'
        ])->get($url . $query);

        $this->alumni = $response->json() ?? [];

        // Extract total count from Content-Range header
        $contentRange = $response->header('Content-Range');
        if ($contentRange && strpos($contentRange, '/') !== false) {
            $parts = explode('/', $contentRange);
            $this->total = intval($parts[1]);
        } else {
            $this->total = 0;
        }

        $this->totalPages = max(1, ceil($this->total / $this->perPage));
    }

   // Pagination buttons
public function goToPage($pageNumber)
{
    $this->page = max(1, min($pageNumber, $this->totalPages));
    $this->search(); // 🔥 Trigger search
}

public function nextPage()
{
    if ($this->page < $this->totalPages) {
        $this->page++;
        $this->search(); // 🔥 Trigger search
    }
}

public function previousPage()
{
    if ($this->page > 1) {
        $this->page--;
        $this->search(); // 🔥 Trigger search
    }
}

    public function render()
    {
        return view('livewire.alumni-search');
    }
}
