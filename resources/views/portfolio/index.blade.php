@extends('layouts.app')

@section('content')
    <main>
        {{-- ======= HERO ======= --}}
        <section class="hero-section">
            <div class="container hero-grid">
                <div class="hero-copy">
                    <div class="hero-badge">Available for freelance &amp; full-time</div>
                    <p class="hero-role">Software Engineer · Mobile Programmer</p>
                    <h1>Lazuardhi<br>Imani Ahfar</h1>
                    <p class="hero-text">Welcome to Azuar's Portfolio — building impactful digital experiences for mobile and web.</p>
                    <a href="{{ route('portfolio.about') }}" class="button button-dark">Explore More &rarr;</a>
                </div>

                <div class="hero-image-wrap">
                    <img src="/images/aju2.png" alt="Lazuardhi Imani Ahfar" class="hero-image">
                </div>
            </div>
        </section>

        {{-- ======= SERVICES ======= --}}
        <section class="section section-white">
            <div class="container">
                <div class="section-intro center">
                    <h2>Services</h2>
                    <p>I help businesses and individuals build impactful digital experiences.</p>
                </div>

                <div class="services-grid">
                    @foreach ($services as $service)
                        <article class="service-card">
                            <img src="/images/{{ $service['icon'] }}" alt="{{ $service['title'] }} icon" class="service-icon">
                            <h3>{{ $service['title'] }}</h3>
                            <p>{{ $service['description'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- ======= WORK ======= --}}
        <section class="section section-muted" id="work">
            <div class="container">
                <div class="section-intro center">
                    <h2>My Latest Work</h2>
                    <p>A selection of projects I'm proud of.</p>
                </div>

                <div class="work-grid">
                    @foreach ($featuredWorkItems as $work)
                        <a href="{{ route('portfolio.work.show', $work['slug']) }}" class="work-card">
                            <div class="work-cover-wrap">
                                <img src="/images/{{ $work['image'] }}" alt="{{ $work['title'] }}" class="work-cover work-contain">
                            </div>
                            <div class="work-copy">
                                <h3>{{ $work['title'] }}</h3>
                                <p>{{ $work['subtitle'] }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        @include('portfolio.partials.contact')
    </main>
@endsection
