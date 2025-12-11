<style>
    /* ===== GENERAL LAYOUT ===== */
.review-section {
    width: 95%;
    max-width: 1000px;
    margin: auto;
    padding: 20px 0;
    font-family: "Segoe UI", Arial, sans-serif;
}

/* SUCCESS MESSAGE */
.success {
    background: #e8f5e9;
    padding: 10px 15px;
    border-left: 5px solid #2e7d32;
    border-radius: 6px;
    margin-bottom: 20px;
    color: #1b5e20;
}

/* ===== REVIEW FORM ===== */
.review-form {
    background: #ffffff;
    border-radius: 14px;
    padding: 25px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    margin-bottom: 40px;
    border-left: 5px solid #d32f2f; /* red brand */
}

.review-form input,
.review-form textarea {
    width: 100%;
    padding: 14px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 10px;
    font-size: 16px;
    transition: border-color .3s ease;
    background: #fafafa;
}

.review-form input:focus,
.review-form textarea:focus {
    border-color: #d32f2f;
    outline: none;
}

/* Submit Button */
.review-form button {
    width: 100%;
    padding: 14px;
    background: #d32f2f;
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    cursor: pointer;
    transition: background .3s ease, transform .2s ease;
    font-weight: 600;
}

.review-form button:hover {
    background: #b71c1c;
    transform: translateY(-2px);
}

/* ===== REVIEW CARDS ===== */
.reviews-list {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
}

.review-card {
    background: #ffffff;
    border-radius: 14px;
    padding: 20px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.07);
    border-left: 5px solid #d32f2f;
    transition: transform .2s ease, box-shadow .3s ease;
}

.review-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.10);
}

/* Reviewer Name */
.review-card h3 {
    margin: 0 0 5px;
    font-size: 20px;
    font-weight: 700;
    color: #d32f2f;
}

/* Review Date */
.review-card .date {
    font-size: 14px;
    color: #777;
    margin-bottom: 10px;
}

/* Review Text */
.review-card p {
    font-size: 16px;
    line-height: 1.6;
    color: #333;
}

/* ===== RESPONSIVE DESIGN ===== */
@media (min-width: 600px) {
    .review-form,
    .review-card {
        padding: 30px;
    }
}

@media (min-width: 768px) {
    .reviews-list {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .reviews-list {
        grid-template-columns: repeat(3, 1fr);
    }
}
</style>
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
