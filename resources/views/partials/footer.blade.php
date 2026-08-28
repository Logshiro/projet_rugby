<footer class="site-footer">
    <div class="container">
        <p><strong>AOL Rugby</strong> — © {{ date('Y') }}. Tous droits réservés.</p>
        <nav aria-label="Liens de pied de page">
            <ul class="footer-links">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('presentation') }}">Le club</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</footer>
