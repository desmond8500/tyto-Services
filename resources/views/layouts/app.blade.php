<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('sections.head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="index-page">

    @livewire('sections.header')

    <main class="main">
        {{ $slot }}
    </main>

    {{-- Footer Section --}}
    @livewire('sections.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="Selecao-1.0.0/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Selecao-1.0.0/assets/vendor/php-email-form/validate.js"></script>
    <script src="Selecao-1.0.0/assets/vendor/aos/aos.js"></script>
    <script src="Selecao-1.0.0/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="Selecao-1.0.0/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="Selecao-1.0.0/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="Selecao-1.0.0/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="Selecao-1.0.0/assets/js/main.js"></script>


    @livewireScripts
</body>

</html>
