@extends('layouts.app')

@section('content')
    <section class="section section-muted">
        <div class="container">
            <div class="work-page-header">
                <h1>My <span>Work</span></h1>
            </div>

            <div class="work-grid">
                @foreach ($workItems as $item)
                    <a href="{{ route('portfolio.work.show', $item['slug']) }}" class="work-card">
                        <div class="work-cover-wrap">
                            <img src="/images/{{ $item['image'] }}" alt="{{ $item['title'] }}" class="work-cover work-contain">
                        </div>
                        <div class="work-copy">
                            <h2>{{ $item['title'] }}</h2>
                            <p>{{ $item['subtitle'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    @include('portfolio.partials.contact')
@endsection
