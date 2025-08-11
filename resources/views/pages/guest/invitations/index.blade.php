@extends('layouts.guest.app')

@section('title', 'Undangan – Save the Date')

@section('content')
    {{--  NAVIGASI (Theme Toggle)  --}}
    <nav class="nav">
        <button id="theme-toggle" class="theme-toggle">
            <i class="fas fa-moon"></i>
        </button>
    </nav>

    {{--  SECTION: INVITATION / HERO  --}}
    <section class="invitation-section" id="invitation-section">
        <div class="container">
            <!-- Ornamen samping -->
            <img src="{{ asset('img/flower_left.png') }}" alt="Ornament kiri" class="side-ornament left" />
            <img src="{{ asset('img/flower_right.png') }}" alt="Ornament kanan" class="side-ornament right" />
            <img src="{{ asset('img/flower_left.png') }}" alt="Ornament kanan" class="side-ornament left-bottom" />

            <!-- Judul gaya Bali -->
            <div class="balinese-title" data-aos="fade-up" data-aos-duration="1000">
                <img src="{{ asset('img/om_swastyastu@4x.png') }}" alt="Ornament bunga" class="balinese-title-content"
                    data-aos="fade-up" data-aos-delay="1000" />
            </div>

            <!-- Deskripsi / typed text -->
            <div class="invitation-description">
                <p class="invitation-text">
                    <span id="typed-text"></span>
                </p>
            </div>

            <!-- Ornamen bawah -->
            <div class="flower_ornamen">
                <img src="{{ asset('img/flower_1.png') }}" alt="Ornament bunga" class="bottom-ornament" data-aos="fade-up"
                    data-aos-delay="1000" />
            </div>
        </div>
    </section>

    {{--  SECTION: PHOTO / PROFILE  --}}
    <section class="photo-section" id="photo-section">
        <!-- Judul section -->
        <div class="content-title">
            <div class="container">
                <h2 class="title-txt" data-aos="flip-left" data-aos-duration="800" data-aos-easing="ease-out-cubic">
                    Potong Gigi
                </h2>
                <p class="subtitle-txt" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200"
                    data-aos-easing="ease-out-cubic">
                    Upacara Mesangih Suci (Potong Gigi) putra dan putri kami
                </p>
            </div>
        </div>

        <!-- Card: NOVIA -->
        <div class="ornamen_1" data-aos="fade-up" data-aos-duration="1000">
            <div class="photo-content">
                <div class="photo-frame">
                    <img src="{{ asset('img/Noviakirana_border.png') }}" class="photo" />
                </div>
                <div class="profile-text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <h2 class="name">NOVIA</h2>
                    <p class="fullname">Ni Putu Novia Kirana Dewi</p>
                    <p class="parents">Anak dari Bapak I Gede Rantika &amp; Ibu Ni Made Warsiani</p>
                </div>
            </div>
        </div>
        <!-- Card: NADIA -->
        <div class="ornamen_1" data-aos="fade-up" data-aos-duration="1000">
            <div class="photo-content">
                <div class="photo-frame">
                    <img src="{{ asset('img/Nadia_border.png') }}" class="photo" />
                </div>
                <div class="profile-text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <h2 class="name">Nadia</h2>
                    <p class="fullname">Ni Luh Gede Nadia Suciana Putri</p>
                    <p class="parents">Anak dari Bapak I Komang Agus Sucipta &amp; Ibu⁠Ni Kade Yuliati</p>
                </div>
            </div>
        </div>
        <!-- Card: RANGGA -->
        <div class="ornamen_1" data-aos="fade-up" data-aos-duration="1000">
            <div class="photo-content">
                <div class="photo-frame">
                    <img src="{{ asset('img/Rangga_border.png') }}" class="photo" />
                </div>
                <div class="profile-text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <h2 class="name">⁠Rangga</h2>
                    <p class="fullname">⁠I Made Rangga Pradipta</p>
                    <p class="parents">Anak dari Bapak I Gede Rantika &amp; Ibu Ni Made Warsiani</p>
                </div>
            </div>
        </div>
        <!-- Card: KELVIN -->
        <div class="ornamen_1" data-aos="fade-up" data-aos-duration="1000">
            <div class="photo-content">
                <div class="photo-frame">
                    <img src="{{ asset('img/Kelvin_sucipta_border.png') }}" class="photo" />
                </div>
                <div class="profile-text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <h2 class="name">Kelvin</h2>
                    <p class="fullname">⁠I Kadek Kelvin Sucipta Putra</p>
                    <p class="parents">Anak dari Bapak I Komang Agus Sucipta &amp; Ibu⁠Ni Kade Yuliati</p>
                </div>
            </div>
        </div>

        <!-- Ornamen bawah section -->
        <div class="flower_ornamen">
            <img src="{{ asset('img/flower_2.png') }}" alt="Ornament bunga" class="bottom-ornament" data-aos="fade-up"
                data-aos-delay="1000" />
        </div>
    </section>

    {{--  SECTION: DETAIL ACARA  --}}
    <section class="details-section" id="details-section">
        <!-- Ornamen samping -->
        <img src="{{ asset('img/side-flower.png') }}" class="side-ornament left" data-aos="fade-right"
            alt="" />
        <img src="{{ asset('img/side-flower.png') }}" class="side-ornament right" data-aos="fade-left"
            alt="" />

        <div class="container">
            <!-- Ornamen atas -->
            <img src="{{ asset('img/flowers_top.png') }}" class="top-ornament" data-aos="fade-down" alt="" />

            <!-- Judul section -->
            <div class="content-title">
                <div class="container">
                    <h2 class="title-txt" data-aos="flip-left" data-aos-duration="800" data-aos-easing="ease-out-cubic">
                        Detail Acara
                    </h2>
                    <p class="subtitle-txt" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200"
                        data-aos-easing="ease-out-cubic">
                        Upacara Mesangih Suci (Potong Gigi) putra dan putri kami
                    </p>
                </div>
            </div>

            <!-- Divider -->
            <hr class="details-divider" data-aos="zoom-in" data-aos-duration="800" />

            <!-- Tanggal acara (DD | MM | YYYY) -->
            <div class="details-date" data-aos="fade-up" data-aos-delay="200">
                <span class="number">20</span>
                <span class="sep">|</span>
                <span class="number">08</span>
                <span class="sep">|</span>
                <span class="number">2025</span>
            </div>

            <!-- Divider -->
            <hr class="details-divider" data-aos="zoom-in" data-aos-duration="800" />

            <!-- Countdown acara -->
            <div class="countdown">
                <div class="countdown-item" data-aos="flip-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="count-number" id="days">0</div>
                    <div class="count-label">HARI</div>
                </div>
                <div class="countdown-item" data-aos="flip-left" data-aos-duration="800" data-aos-delay="300">
                    <div class="count-number" id="hours">0</div>
                    <div class="count-label">JAM</div>
                </div>
                <div class="countdown-item" data-aos="flip-left" data-aos-duration="800" data-aos-delay="400">
                    <div class="count-number" id="minutes">0</div>
                    <div class="count-label">MENIT</div>
                </div>
                <div class="countdown-item" data-aos="flip-left" data-aos-duration="800" data-aos-delay="500">
                    <div class="count-number" id="seconds">0</div>
                    <div class="count-label">DETIK</div>
                </div>
            </div>

            <!-- Lokasi & tombol Maps -->
            <p class="details-location" data-aos="fade-up" data-aos-delay="400">Lokasi</p>
            <button class="btn-maps" data-aos="fade-up" data-aos-delay="600"
                onclick="window.open('https://www.google.com/maps?q=-8.32331848144531,114.726905822754', '_blank')">
                Maps
            </button>

            <!-- Alamat lengkap -->
            <p class="details-address" data-aos="fade-up" data-aos-delay="800">
                Br Tibu Tanggang, Desa Penyaringan, Kecamatan Mendoyo, Kabupaten Jembrana, Bali
            </p>

            <!-- Ornamen bawah -->
            <div class="flower_ornamen">
                <img src="{{ asset('img/flower_2.png') }}" alt="Ornament bunga" class="bottom-ornament"
                    data-aos="fade-up" data-aos-delay="1000" />
            </div>
        </div>
    </section>

    {{--  SECTION: GUESTBOOK / BUKU TAMU  --}}
    <section id="guestbook-section" class="guestbook-section no-blur">
        <!-- Ornamen atas -->
        <img src="{{ asset('img/flowers_top.png') }}" alt="" class="top-ornament" data-aos="fade-down"
            data-aos-duration="800" />

        <!-- Judul section -->
        <div class="content-title">
            <div class="container">
                <h2 class="title-txt" data-aos="flip-left" data-aos-duration="800" data-aos-easing="ease-out-cubic">
                    Buku Tamu
                </h2>
                <p class="subtitle-txt" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200"
                    data-aos-easing="ease-out-cubic">
                    Upacara Mesangih Suci (Potong Gigi) putra dan putri kami
                </p>
            </div>
        </div>

        <!-- Form buku tamu -->
        <form id="guestbook-form" class="guestbook-form">
            @csrf
            <label>
                <span>Nama</span>
                <input type="text" name="name" required placeholder="Nama" />
            </label>

            <label>
                <span>Kehadiran</span>
                <select id="attendance" name="attendance">
                    <option value="">-- Pilih --</option>
                    <option value="hadir">Hadir</option>
                    <option value="tidak_hadir">Tidak Hadir</option>
                    <option value="ragu">Ragu-ragu</option>
                </select>
            </label>

            <label>
                <span>Ucapan</span>
                <textarea name="message" rows="4" required placeholder="Ucapan"></textarea>
            </label>

            <button type="submit" class="btn-submit" data-aos="zoom-in" data-aos-delay="600">Kirim</button>
        </form>

        <!-- Daftar komentar -->
        <div class="guestbook-scroll" data-aos="fade-up" data-aos-delay="800">
            <ul id="guestbook-list" class="guestbook-entries">
                <!-- daftar komentar dimuat lewat AJAX -->
            </ul>
        </div>

        <!-- Ornamen bawah -->
        <div class="flower_ornamen">
            <img src="{{ asset('img/flowers_bottom.png') }}" alt="" class="bottom-ornament" data-aos="fade-up"
                data-aos-delay="1000" />
        </div>
    </section>

    {{--  SECTION: GALLERY  --}}
    <section class="gallery-section" id="gallery-section">
        <!-- Judul section -->
        <div class="content-title">
            <div class="container">
                <h2 class="title-txt" data-aos="flip-left" data-aos-duration="800" data-aos-easing="ease-out-cubic">
                    Gallery
                </h2>
                <p class="subtitle-txt" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200"
                    data-aos-easing="ease-out-cubic">
                    Upacara Mesangih Suci (Potong Gigi) putra dan putri kami
                </p>
            </div>
        </div>

        <!-- Slider utama -->
        <div class="gallery-hero" data-aos="fade-up" data-aos-duration="800">
            <div class="swiper hero-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="{{ asset('img/Bersama_fix.jpg') }}" class="glightbox" data-gallery="hero">
                            <img src="{{ asset('img/Bersama_fix.jpg') }}" alt="Gallery Hero 1" data-aos="zoom-in"
                                data-aos-duration="600" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('img/Bersama_2.jpg') }}" class="glightbox" data-gallery="hero">
                            <img src="{{ asset('img/Bersama_2.jpg') }}" alt="Gallery Hero 2" data-aos="zoom-in"
                                data-aos-duration="600" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('img/Bersama_3.jpg') }}" class="glightbox" data-gallery="hero">
                            <img src="{{ asset('img/Bersama_3.jpg') }}" alt="Gallery Hero 3" data-aos="zoom-in"
                                data-aos-duration="600" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('img/Bersama_6.jpg') }}" class="glightbox" data-gallery="hero">
                            <img src="{{ asset('img/Bersama_6.jpg') }}" alt="Gallery Hero 4" data-aos="zoom-in"
                                data-aos-duration="600" />
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('img/Bersama_4.jpg') }}" class="glightbox" data-gallery="hero">
                            <img src="{{ asset('img/Bersama_4.jpg') }}" alt="Gallery Hero 5" data-aos="zoom-in"
                                data-aos-duration="600" />
                        </a>
                    </div>
                </div>
                <!-- Pagination swiper -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Grid gallery 4 kolom rasio 4:5 -->
        <div class="gallery-grid grid-4 ratio-4-5" data-aos="fade-up" data-aos-duration="600">
            <a href="{{ asset('img/Kelvin_sucipta.jpg') }}" class="glightbox" data-gallery="grid2" data-aos="zoom-in"
                data-aos-delay="0">
                <img src="{{ asset('img/Kelvin_sucipta.jpg') }}" alt="Grid R3-1" />
            </a>

            <a href="{{ asset('img/Noviakirana_.jpg') }}" class="glightbox" data-gallery="grid2" data-aos="zoom-in"
                data-aos-delay="100">
                <img src="{{ asset('img/Noviakirana_.jpg') }}" alt="Grid R3-2" />
            </a>

            <a href="{{ asset('img/Rangga_.jpg') }}" class="glightbox" data-gallery="grid2" data-aos="zoom-in"
                data-aos-delay="200">
                <img src="{{ asset('img/Rangga_.jpg') }}" alt="Grid R3-3" />
            </a>

            <a href="{{ asset('img/Nadia_2.jpg') }}" class="glightbox" data-gallery="grid2" data-aos="zoom-in"
                data-aos-delay="300">
                <img src="{{ asset('img/Nadia_2.jpg') }}" alt="Grid R3-4" />
            </a>
        </div>

        <div class="gallery-grid grid-4 ratio-4-5" data-aos="fade-up" data-aos-duration="600">
            <a href="{{ asset('img/Berdua_1.jpg') }}" class="glightbox" data-gallery="grid2" data-aos="zoom-in"
                data-aos-delay="0">
                <img src="{{ asset('img/Berdua_1.jpg') }}" alt="Grid R3-1" />
            </a>
            <a href="{{ asset('img/Berdua_2.jpg') }}" class="glightbox" data-gallery="grid2" data-aos="zoom-in"
                data-aos-delay="0">
                <img src="{{ asset('img/Berdua_2.jpg') }}" alt="Grid R3-1" />
            </a>
        </div>

    </section>

    {{--  AUDIO BACKGROUND (autoplay, loop, muted)  --}}
    <audio id="bg-music" autoplay loop muted playsinline preload="auto">
        <source src="{{ asset('music/Gus Teja - Beauty in Colors.mp3') }}" type="audio/mpeg">
        Your browser doesnt support audio.
    </audio>

    {{--  BOTTOM NAVIGATION (Anchor & Music Toggle)  --}}
    <div class="container">
        <nav class="bottom-nav">
            <a href="#invitation-section" class="nav-item"><i class="fas fa-home"></i></a>
            <a href="#photo-section" class="nav-item"><i class="fas fa-heart"></i></a>
            <a href="#details-section" class="nav-item"><i class="fas fa-comment-dots"></i></a>
            <a href="#guestbook-section" class="nav-item"><i class="fas fa-user"></i></a>
            <a href="#gallery-section" class="nav-item"><i class="fas fa-image"></i></a>
            <a href="#" id="music-toggle" class="nav-item">
                <i class="fas fa-volume-up"></i>
            </a>
        </nav>
    </div>
@endsection

@push('scripts')
    {{--  SCRIPTS: jQuery + Buku Tamu (AJAX)  --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        // -------------------------
        // ROUTE ENDPOINTS (Laravel)
        // -------------------------
        const routes = {
            list: "{{ route('comment.list') }}",
            store: "{{ route('comment.store') }}",
            del: "{{ route('comment.destroy', ':id') }}"
        };

        // -------------------------
        // CSRF HEADER (Ajax Setup)
        // -------------------------
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // -------------------------
        // KONSTANTA PAGINASI
        // -------------------------
        const PER_PAGE = 1000;

        // -------------------------
        // LOAD: Ambil & render komentar
        // -------------------------
        function loadComments() {
            $.get(routes.list, {
                    per_page: PER_PAGE
                })
                .done(function(res) {
                    // Handle berbagai bentuk payload: array langsung, {data: []}, atau {data: {data: []}}
                    const items = Array.isArray(res) ? res :
                        Array.isArray(res.data) ? res.data :
                        Array.isArray(res.data?.data) ? res.data.data : [];

                    renderList(items);
                })
                .fail(function(err) {
                    console.error('LOAD ERROR:', err);
                });
        }

        // -------------------------
        // RENDER: Cetak list komentar ke <ul>
        // -------------------------
        function renderList(items) {
            const ul = $('#guestbook-list').empty();

            if (!items.length) {
                ul.append('<li><em>Belum ada komentar.</em></li>');
                return;
            }

            items.forEach(c => {
                ul.append(`
            <li class="guestbook-item">
                <div class="guestbook-header">
                    <strong class="guest-name">${escapeHtml(c.name)}</strong>
                    <span class="guest-attendance">${escapeHtml(formatAttendance(c.attendance))}</span>
                </div>
                <p class="guest-message">${escapeHtml(c.message)}</p>
            </li>
        `);
            });
        }

        // -------------------------
        // UTIL: Escape HTML untuk mencegah XSS
        // -------------------------
        function escapeHtml(s) {
            return $('<div>').text(s ?? '').html();
        }

        // -------------------------
        // UTIL: Format label kehadiran
        // -------------------------
        function formatAttendance(v) {
            switch (v) {
                case 'hadir':
                    return 'Hadir';
                case 'tidak_hadir':
                    return 'Tidak Hadir';
                case 'ragu_ragu':
                    return 'Ragu-ragu';
                default:
                    return v;
            }
        }

        // -------------------------
        // EVENT: Submit form buku tamu
        // -------------------------
        $('#guestbook-form').on('submit', function(e) {
            e.preventDefault();

            $.post(routes.store, $(this).serialize())
                .done(() => {
                    this.reset(); // Reset form
                    loadComments(); // Reload list
                    const box = document.querySelector('.guestbook-scroll');
                    if (box) box.scrollTop = box.scrollHeight; // Auto scroll ke bawah
                })
                .fail(xhr => {
                    alert(xhr.responseJSON?.message || 'Terjadi kesalahan');
                });
        });

        // -------------------------
        // INIT: Muat komentar awal
        // -------------------------
        loadComments();
    </script>
@endpush
