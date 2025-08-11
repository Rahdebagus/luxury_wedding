<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Wedding Save the Date')</title>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />

    {{-- Vendor CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/baguettebox.js/dist/baguetteBox.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">


    {{-- Style milikmu (pindah ke public/assets/style.css) --}}
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    @stack('styles')
</head>

<body data-theme="light">

    {{-- Header/footer opsional --}}
    {{--  @includeIf('layouts.guest.header')  --}}

    <div class="">
        @yield('content')
    </div>

    {{--  @includeIf('layouts.guest.footer')  --}}

    {{-- Vendor JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.5.0/jquery.marquee.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

    {{-- JS milikmu (pindah ke public/assets/main.js) --}}
    <script src="{{ asset('assets/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script>
        const c = new Choices('#attendance', {
            searchEnabled: false,
            itemSelectText: ''
        });
    </script>


    <script>
        AOS.init({
            once: false,
            mirror: true,
            offset: 120,
            duration: 500,
            easing: 'ease-in-out'
        });
        if (window.baguetteBox) {
            baguetteBox.run('.gallery');
        }
    </script>

    @stack('scripts')
</body>

</html>
