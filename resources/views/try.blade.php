@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="overlay"></div>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('build/assets/img/logo/logo-2.png') }}" alt="Logo">
        </div>
        <nav class="menu">
            <a href="#home" class="navbar-link">HOME</a>
            <a href="#about" class="navbar-link">ABOUT</a>
            <a href="#features" class="navbar-link">FEATURES</a>
            <a href="#reviews" class="navbar-link">REVIEWS</a>
            <a href="#contact" class="navbar-link">CONTACT</a>
        </nav>
    </div>

    <!-- Hero Content -->
    <div class="hero-content">
        <div class="hero-text">
            <h1>A Ride That Benefits Both <br> Nature And Its Residents.</h1>
            <p>Electric vehicles are gaining popularity and providing exceptional <br> performance.</p>
        </div>
        <div class="hero-img">
            <img src="{{ asset('build/assets/img/hero-sec.png') }}" alt="Scooter">
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <h2>INFORMATION <span>ABOUT US</span></h2>
    <p>
        "Electricsscooterbook," which is designed to promote natural cause an electric, 
        scooter, has big aims. Bring it home right now.
    </p>
    <img src="{{ asset('build/assets/img/about-sec.png') }}" alt="About Us">
</section>

<!-- Features Section -->
<section id="features" class="features-section">
    <h2>FEATURES OF <span>ELECTRIC SCOOTER</span></h2>
    <div class="features-container">
        <div class="feature-box">Eco Friendly</div>
        <div class="feature-box">Powerful Brakes</div>
        <div class="feature-box">Long Battery Life</div>
        <div class="feature-box">Cruise Control</div>
        <div class="feature-box">BLDC Motor</div>
        <div class="feature-box">Fantastic Ride</div>
    </div>
</section>

<!-- Reviews Section -->
<section id="reviews" class="reviews-section">
    <div class="review-box">
        <div class="review-avatar">
            <img src="{{ asset('build/assets/img/testimonials/1.png') }}" alt="User 1">
        </div>
        <p>"Amazing scooter! Very smooth and eco-friendly."</p>
        <div class="review-stars">★★★★★</div>
        <h4>Paras Agnihotri</h4>
    </div>
    <div class="review-box">
        <div class="review-avatar">
            <img src="{{ asset('build/assets/img/testimonials/2.png') }}" alt="User 2">
        </div>
        <p>"Battery lasts very long. Totally worth it!"</p>
        <div class="review-stars">★★★★★</div>
        <h4>Anjali Sharma</h4>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <form class="contact-form">
        <input type="text" placeholder="Full Name">
        <input type="email" placeholder="Email">
        <textarea placeholder="Your Message"></textarea>
        <button type="submit" class="apply-btn">Send Message</button>
    </form>
</section>

<!-- Footer -->
<footer>
    <p>&copy; {{ date('Y') }} Electric Scooter. All rights reserved.</p>
    <nav>
        <a href="#home">Home</a> | 
        <a href="#about">About</a> | 
        <a href="#features">Features</a> | 
        <a href="#reviews">Reviews</a> | 
        <a href="#contact">Contact</a>
    </nav>
</footer>

@endsection
