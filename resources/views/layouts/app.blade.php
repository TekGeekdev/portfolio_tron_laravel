<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} - @yield('title_page')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/import.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;600&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="grid-background"></div>
        <nav id="main-nav">
            <div class="main-nav-wrapper">
                <a id="logo">Portfolio</a>
                <div class="navigation">
                    <ul class="navigation-links">
                        <li><a href="#">Acceuil</a></li>
                        <li><a href="#">Projets</a></li>
                        <li><a href="#">CV</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <span class="language-selected">FR</span>
                    <div class="languages">
                        <a href="#">fr</a>
                        <a href="#">en</a>
                    </div>
                </div>
                <label>
                    <input type="checkbox" aria-label="nav-mobile-button" >
                    <div class="menu-toggle">
                        <div class="menu-toggle-line"></div>
                        <div class="menu-toggle-line"></div>
                        <div class="menu-toggle-line"></div>
                    </div>
                </label>
            </div>
        </nav>
        <main>
            <header>
                <h1>Ledeur Mathieu</h1>
                <p>Développeur full stack</p>
                <a href="#">Mes Projets</a>
            </header>
            <section>
            <h2>Mes derniers projets</h2>
            <article>
                <span>01</span>
                <h3>E-commerce Platform</h3>
                <p>Plateforme e-commerce complète avec gestion des stocks et paiements sécurisés.</p>
                <ul>
                    <li>laravel</li>
                    <li>node</li>
                    <li>Mysql</li>
                </ul>
            </article>
        </section>
        <aside>
            <h2>Compétences</h2>
            <article>
                <img src="#" alt="logo backend">
                <h3>Backend</h3>
                <ul>
                    <li>PHP</li>
                    <li>Node</li>
                    <li>Mysql</li>
                </ul>
            </article>
        </aside>
        </main>
        <footer>
            <div>
                <a href="">GH</a>
                <a href="">IN</a>
                <a href="">TW</a>
                <a href="">@</a>
            </div>
        </footer>

</body>
</html>