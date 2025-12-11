<div class="review-form">
    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <form action="/reviews" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Your Name" required>

        <textarea name="review_text" placeholder="Write your review..." required></textarea>

        <button type="submit">Submit Review</button>
    </form>
</div>
<div class="reviews-list">
    @foreach($reviews as $review)
        <div class="review-card">
            <h3>{{ $review['name'] }}</h3>
            <p class="date">{{ $review['review_date'] }}</p>
            <p>{{ $review['review_text'] }}</p>
        </div>
    @endforeach
</div>
