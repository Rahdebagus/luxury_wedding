@extends('layouts.guest.app')

@section('title', 'Upacara Mesangih Suci')

@section('meta')
<meta property="og:title" content="Upacara Mesangih Suci">
<meta property="og:description" content="Kami mengundang kehadiran Bapak/Ibu/Saudara/i untuk turut hadir, menyaksikan, dan memberikan doa restu.">
    <meta property="og:image" content="https://balineseday.my.id/img/Bersama_1.jpg">
    <meta property="og:url" content="https://balineseday.my.id">
    <meta property="og:type" content="website">
@endsection

@section('content')
    <section style="padding: 0; margin: auto , 0; ">
        {{-- Hero Section --}}
        <div class="save-date hero-cover" id="hero" style="overflow: hidden;">
            {{-- BG layers for fade --}}

            <img class="hero-bg bg-a" src="{{ asset('img/balinese.png') }}" alt="Background A" />
            <img class="hero-bg bg-b hidden" src="{{ asset('img/balinese.png') }}" alt="Background B" />

            <div class="container hero-content">
                <div class=" content-wrapper">
                    <h1 class="title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">UPACARA ADAT DEWA
                        YADNYA
                        PIODALAN NGENTEG LINGGIH MUPUK PEDAGINGAN LAN
                        MEPANDES/POTONG GIGI</h1>
                    <p class="subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">SAVE THE DATE</p>

                    <div class="invitee" data-aos="fade-up" data-aos-duration="900" data-aos-delay="450">
                        <div class="invitee-label">Invite to</div>
                        <div id="guest-name" class="invitee-name">Bapak/Ibu/Saudara/i</div>
                    </div>

                    <p class="wedding-date" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">20 Agustus 2025
                    </p>
                    <p class="wedding-location" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                        Br Tibu Tanggang, Desa Penyaringan, Kecamatan Mendoyo, Kabupaten Jembrana, Bali
                    </p>

                    <div class="open-btn-container" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                        <button class="open-invitation-icon-btn" id="open-invitation-btn" aria-label="Buka Undangan">
                            <i class="fa-solid fa-envelope-open-text" aria-hidden="true"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="{{ asset('assets/main.js') }}"></script>

    <script>
        (function() {
            const el = document.getElementById('guest-name');
            if (!el) return;

            const qs = new URLSearchParams(location.search);
            let name = qs.get('to') || qs.get('nama') || '';

            // handle plus (+) jadi spasi, trim, dan cegah script injection
            name = name.replace(/\+/g, ' ').trim();
            if (name) {
                el.textContent = name;
            }
        })();
    </script>
@endpush
