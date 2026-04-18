<section id="contact" class="section section-white contact-section">
    <div class="container contact-shell">
        <div class="contact-copy">
            <h2>Let's work<br>together</h2>
            <p>Have a project in mind or want to discuss collaboration? I'd love to hear from you.</p>
        </div>

        <form action="{{ route('portfolio.contact') }}" method="POST" class="contact-form">
            @csrf

            @if (session('status'))
                <p class="form-status">{{ session('status') }}</p>
            @endif

            <label class="sr-only" for="name">Name</label>
            <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Your Name" required>
            @error('name')
                <p class="form-error">{{ $message }}</p>
            @enderror

            <label class="sr-only" for="email">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="your@email.com" required>
            @error('email')
                <p class="form-error">{{ $message }}</p>
            @enderror

            <label class="sr-only" for="message">Message</label>
            <textarea id="message" name="message" placeholder="Tell me about your project..." required>{{ old('message') }}</textarea>
            @error('message')
                <p class="form-error">{{ $message }}</p>
            @enderror

            <button type="submit" class="button button-dark button-wide">Send Message &rarr;</button>
        </form>
    </div>
</section>
