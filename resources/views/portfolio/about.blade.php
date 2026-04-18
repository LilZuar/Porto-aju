@extends('layouts.app')

@section('content')
    <main>
        <section class="about-page">
            <div class="container about-hero">
                <div class="about-hero-copy">
                    <p class="about-kicker">A little more about me</p>
                    <h1>{{ $profile['name'] }}</h1>
                    <p class="about-headline">{{ $profile['headline'] }}</p>
                    <p class="about-summary">{{ $profile['summary'] }}</p>

                    <div class="about-actions">
                        <a href="/resume/CV.pdf" download="Lazuardhi_Imani_Ahfar_Resume.pdf" class="button button-dark">Download CV</a>
                        <a href="{{ $profile['linkedin'] }}" target="_blank" rel="noreferrer" class="button button-ghost">LinkedIn</a>
                    </div>
                </div>

                <aside class="about-card">
                    <h2>Quick Info</h2>
                    <ul class="about-facts">
                        <li><span>Base</span><strong>{{ $profile['location'] }}</strong></li>
                        <li><span>Email</span><strong>{{ $profile['email'] }}</strong></li>
                        <li><span>Phone</span><strong>{{ $profile['phone'] }}</strong></li>
                        <li><span>Portfolio</span><strong><a href="{{ $profile['portfolio'] }}" target="_blank" rel="noreferrer">{{ $profile['portfolio'] }}</a></strong></li>
                    </ul>
                </aside>
            </div>

            <div class="container about-highlights">
                @foreach ($highlights as $highlight)
                    <article class="highlight-pill">{{ $highlight }}</article>
                @endforeach
            </div>

            <div class="container about-grid">
                <section class="about-panel about-story">
                    <div class="panel-heading">
                        <p>My vibe</p>
                        <h2>Casual, curious, and serious about shipping good work.</h2>
                    </div>
                    <p>
                        I like building products that solve clear problems, especially on mobile. The part I enjoy most is when technical decisions actually make the experience feel lighter for users and smoother for the team.
                    </p>
                    <p>
                        Over time, I’ve worked across iOS apps, internal tools, client projects, and product experiments. That mix made me comfortable not only writing code, but also discussing requirements, collaborating with designers, and helping projects move forward when things are still messy.
                    </p>
                </section>

                <section class="about-panel">
                    <div class="panel-heading">
                        <p>Skills</p>
                        <h2>Tools and strengths I use the most.</h2>
                    </div>

                    <div class="skill-groups">
                        @foreach ($skills as $group => $items)
                            <div class="skill-group">
                                <h3>{{ $group }}</h3>
                                <div class="skill-chips">
                                    @foreach ($items as $item)
                                        <span>{{ $item }}</span>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>

            <div class="container timeline-section">
                <div class="panel-heading">
                    <p>Experience</p>
                    <h2>What I’ve worked on so far.</h2>
                </div>

                <div class="timeline-list">
                    @foreach ($experiences as $experience)
                        <article class="timeline-card">
                            <div class="timeline-top">
                                <div>
                                    <h3>{{ $experience['role'] }}</h3>
                                    <p class="timeline-company">{{ $experience['company'] }} · {{ $experience['location'] }}</p>
                                </div>
                                <span class="timeline-period">{{ $experience['period'] }}</span>
                            </div>

                            <ul class="timeline-points">
                                @foreach ($experience['points'] as $point)
                                    <li>{{ $point }}</li>
                                @endforeach
                            </ul>
                        </article>
                    @endforeach
                </div>
            </div>

            <div class="container about-bottom-grid">
                <section class="about-panel">
                    <div class="panel-heading">
                        <p>Education</p>
                        <h2>Foundation that shaped my approach.</h2>
                    </div>

                    @foreach ($education as $item)
                        <article class="mini-card">
                            <h3>{{ $item['degree'] }}</h3>
                            <p class="mini-meta">{{ $item['school'] }} · {{ $item['period'] }}</p>
                            <p class="mini-gpa">{{ $item['meta'] }}</p>
                            <ul class="timeline-points compact">
                                @foreach ($item['points'] as $point)
                                    <li>{{ $point }}</li>
                                @endforeach
                            </ul>
                        </article>
                    @endforeach
                </section>

                <section class="about-panel">
                    <div class="panel-heading">
                        <p>Extra</p>
                        <h2>Outside of work and class.</h2>
                    </div>

                    @foreach ($organization as $item)
                        <article class="mini-card">
                            <h3>{{ $item['name'] }}</h3>
                            <p class="mini-meta">{{ $item['location'] }} · {{ $item['period'] }}</p>
                            <p>
                                I was also active in campus organization work, which helped sharpen communication, coordination, and responsibility beyond purely technical tasks.
                            </p>
                        </article>
                    @endforeach
                </section>
            </div>
        </section>

        @include('portfolio.partials.contact')
    </main>
@endsection
