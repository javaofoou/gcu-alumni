<x-layouts.app title="Page Not Found">
    <style>
    .error-page {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
    background: #111;
    color: #fff;
    text-align: center;
    font-family: 'Arial', sans-serif;
    padding: 20px;
}

.error-content h1 {
    font-size: 10rem;
    color: #e10600;
    margin: 0;
    font-weight: 900;
}

.error-content h2 {
    font-size: 2.5rem;
    margin: 15px 0;
    color: #fff;
}

.error-content p {
    font-size: 1.2rem;
    margin-bottom: 25px;
    color: #ccc;
}

.btn-home {
    display: inline-block;
    padding: 12px 25px;
    background: #e10600;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    border-radius: 8px;
    transition: 0.3s ease;
}

.btn-home:hover {
    background: #b10000;
}

/* Responsive */
@media(max-width:768px){
    .error-content h1 {
        font-size: 6rem;
    }
    .error-content h2 {
        font-size: 2rem;
    }
}
</style>
<div class="error-page">
    <div class="error-content">
        <h1>404</h1>
        <h2>Oops! Page Not Found</h2>
        <p>Sorry, the page you are looking for does not exist or has been moved.</p>
        <a href="{{ url('/alumni-directory') }}" class="btn-home">Go Back Home</a>
    </div>
</div>
</x-layouts.app>
