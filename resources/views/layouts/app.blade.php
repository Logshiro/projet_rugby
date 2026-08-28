<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- ============ SEO : title / description / canonical ============ --}}
    <title>@yield('title', 'AOL Rugby — Club de rugby officiel')</title>
    <meta name="description" content="@yield('meta_description', "L'AOL Rugby est un club de rugby engagé, formateur et convivial. Découvrez le club, ses équipes et rejoignez-nous.")">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#273387">

    {{-- Open Graph / réseaux sociaux --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="AOL Rugby">
    <meta property="og:title" content="@yield('title', 'AOL Rugby — Club de rugby officiel')">
    <meta property="og:description" content="@yield('meta_description', "L'AOL Rugby est un club de rugby engagé, formateur et convivial.")">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/og-cover.jpg') }}">
    <meta name="twitter:card" content="summary_large_image">

    {{-- Favicon --}}
    <link rel="icon" href="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/Logo_AOL.jpg') }}" type="image/png">

    {{-- Polices --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,wght@0,500;0,700;0,900;1,600&family=Lora:ital,wght@0,400;0,500;0,600;1,400&family=Courier+Prime:wght@400;700&display=swap" rel="stylesheet">
    {{-- Styles --}}
    @vite(['resources/css/aol-rugby.css'])

    {{-- Données structurées (aide Google à comprendre qu'il s'agit d'un club de sport) --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "SportsClub",
        "name": "AOL Rugby",
        "sport": "Rugby",
        "url": "{{ url('/') }}",
        "logo": "{{ \Illuminate\Support\Facades\Vite::asset('resources/images/Logo_AOL.jpg') }}",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "Adresse du stade à compléter",
            "addressLocality": "Ville à compléter",
            "postalCode": "00000",
            "addressCountry": "FR"
        },
        "sameAs": [
            "https://www.facebook.com/",
            "https://www.instagram.com/"
        ]
    }
    </script>

    @stack('head')
</head>
<body>
    <a href="#main" class="skip-link">Aller au contenu principal</a>

    @include('partials.navbar')

    <main id="main">
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts')
</body>
</html>
