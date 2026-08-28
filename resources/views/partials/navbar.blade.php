<header class="navbar" id="site-navbar">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar__brand" aria-label="AOL Rugby — Accueil">
            @if(file_exists(resource_path('images/Logo_AOL.jpg')))
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/Logo_AOL.jpg') }}" alt="Logo AOL Rugby">
            @else
                <span class="brand-fallback" aria-hidden="true">AOL</span>
            @endif
            AOL Rugby
        </a>

        <nav aria-label="Navigation principale">
            <ul class="navbar__links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'is-active' : '' }}" @if(request()->routeIs('home')) aria-current="page" @endif>Accueil</a></li>
                <li><a href="{{ route('presentation') }}" class="{{ request()->routeIs('presentation') ? 'is-active' : '' }}" @if(request()->routeIs('presentation')) aria-current="page" @endif>Le club</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'is-active' : '' }}" @if(request()->routeIs('contact')) aria-current="page" @endif>Contact</a></li>
            </ul>
        </nav>

        <button class="navbar__toggle" id="navToggle" aria-expanded="false" aria-controls="site-navbar" aria-label="Ouvrir le menu">
            <svg class="icon-burger" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                <path d="M2 5h16M2 10h16M2 15h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
            <svg class="icon-close" width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true">
                <path d="M3 3l12 12M15 3L3 15" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
        </button>
    </div>
</header>

<script>
    (function () {
        var toggle = document.getElementById('navToggle');
        var nav = document.getElementById('site-navbar');
        if (!toggle || !nav) return;

        toggle.addEventListener('click', function () {
            var isOpen = nav.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            toggle.setAttribute('aria-label', isOpen ? 'Fermer le menu' : 'Ouvrir le menu');
            document.body.classList.toggle('nav-open', isOpen);
        });

        nav.querySelectorAll('.navbar__links a').forEach(function (link) {
            link.addEventListener('click', function () {
                nav.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
                toggle.setAttribute('aria-label', 'Ouvrir le menu');
                document.body.classList.remove('nav-open');
            });
        });
    })();
</script>