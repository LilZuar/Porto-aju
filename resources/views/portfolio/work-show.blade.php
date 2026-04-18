@extends('layouts.app')

@section('content')
    <main class="section section-white work-detail-page">
        <div class="work-glide-wrap">
            <img src="/images/{{ $work['glide'] }}" alt="{{ $work['title'] }}" class="work-glide">
            <h1>{{ $work['title'] }}</h1>
        </div>

        <div class="container detail-grid">
            <div>
                <h2>{{ $work['subtitle'] }}</h2>
                <p>{{ $work['description'] }}</p>
            </div>

            <div class="detail-image-wrap">
                <img src="/images/{{ $work['image'] }}" alt="{{ $work['title'] }}" class="detail-image">
            </div>
        </div>

        <section class="container content-block detail-block">
            <h2>My Role</h2>
            <p>{{ $work['jobDesc'] }}</p>
        </section>

        @if (!empty($work['previews']))
            <section class="container detail-block preview-section">
                <h2>App Preview</h2>
                <p class="preview-subtitle">Screenshots from the app</p>
                <div class="preview-grid">
                    @foreach ($work['previews'] as $preview)
                        <div class="preview-card">
                            <img src="/images/{{ $preview }}" alt="{{ $work['title'] }} preview" class="preview-img">
                        </div>
                    @endforeach
                </div>
            </section>
        @endif
    </main>
@endsection
