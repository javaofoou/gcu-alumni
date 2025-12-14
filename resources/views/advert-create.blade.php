<x-layouts.app title="Post Business Advert">

<div class="container">
    <h2>Business Update / Innovation</h2>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p class="error">{{ session('error') }}</p>
    @endif

    <form action="{{ route('adverts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="business_name" placeholder="Business Name" required>

        <input type="text" name="phone" placeholder="Phone Number" required>

        <textarea name="description" placeholder="Short description (optional)"></textarea>

        <input type="file" name="image" required>

        <button type="submit">Submit Advert</button>
    </form>
</div>

</x-layouts.app>
