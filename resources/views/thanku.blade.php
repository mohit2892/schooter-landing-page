@extends('layouts.app')

@section('content')
<!-- Thank You Page -->
<section class="thank-you-page">
    <div class="thank-you-container">
        <div class="thank-you-content">
            <!-- Icon -->
            <div class="thank-you-icon">
                <img src="{{ asset('build/assets/img/image.png') }}" alt="Thank You Icon" class="thank-you-img">
            </div>
            <h1>Thank you, enjoy!</h1>
            <p>Thank you for visiting our site {{ config('app.name') }}</p>
            <a href="{{ url('/') }}" class="back-home-btn">← Back Home</a>
        </div>
    </div>
</section>
@endsection
