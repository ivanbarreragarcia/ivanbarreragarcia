<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hi! -->
    <meta name="author" content="Ivan Barrera">
    <meta name="description" content="Página web de Iván Barrera, desarrollador web autodidacta. Entra para ver mis proyectos">
    <!-- Keywords -->
    <meta name="keywords" content="portfolio aboutme ivan barrera junior frontend developer curriculum">
    <!-- Google verification -->
    <meta name="google-site-verification" content="-9r0TQjc2nLnG-NkYMGxM_q08infjFZ-QHm6CrCsyAk" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- Styles -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="/css/style.css?ver=<?php echo date('dmYHis') ?>" />
    <!-- Scripts -->
    <script defer src="common.js?ver=<?php echo date('dmYHis') ?>"></script>
    <script defer src="main.js?ver=<?php echo date('dmYHis') ?>"></script>
    <script defer src="https://kit.fontawesome.com/fac55ee234.js?ver=<?php echo date('dmYHis') ?>" crossorigin="anonymous"></script>
    <!-- Title -->
    <title>Ivan Barrera - Junior Front-End Dev</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <!-- Logo -->
        <div class="navbar__logo">
            <a href="#" class="navbar__logo-title">IVÁN<span>BARRERA</span></a>
        </div>

        <!-- Burger Menu -->
        <div class="navbar__hamburger">

            <!-- Burger Menu Icon -->
            <div class="navbar__hamburger__icon">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!-- Burger Menu -->
            <div class="navbar__hamburger__menu">
                <ul class="navbar__hamburger__menu-list">
                    <li class="navbar__hamburger__menu-list-item linkMenu"><a href="#" class="navbar__hamburger__menu-list-item-link burguer-link1">home</a>
                    </li>
                    <li class="navbar__hamburger__menu-list-item linkMenu"><a href="#portfolio" class="navbar__hamburger__menu-list-item-link burguer-link2">portfolio</a></li>
                    <li class="navbar__hamburger__menu-list-item linkMenu"><a href="#about" class="navbar__hamburger__menu-list-item-link burguer-link3">about me</a></li>
                    <li class="navbar__hamburger__menu-list-item linkMenu"><a href="#contact" class="navbar__hamburger__menu-list-item-link burguer-link4">contact</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Custom Menu -->
        <div class="navbar__menu">
            <ul class="navbar__menu-list">
                <li class="navbar__menu-list-item link-hover">
                    <a href="#" class="navbar__menu-list-item-link">home</a>
                </li>
                <li class="navbar__menu-list-item link-hover">
                    <a href="#portfolio" class="navbar__menu-list-item-link">portfolio</a>
                </li>
                <li class="navbar__menu-list-item link-hover">
                    <a href="#about" class="navbar__menu-list-item-link">about me</a>
                </li>
                <li class="navbar__menu-list-item link-hover">
                    <a href="#contact" class="navbar__menu-list-item-link">contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Container -->
    <main class="main">
        <section class="main__hero">
            <div class="main__hero__content">
                <div class="main__hero__content-texts">
                    <h3 class="main__hero__content-texts-subtitle">Hi, my name is Iván and I'm a</h3>
                    <h1 class="main__hero__content-texts-title">Front-End Web Developer</h1>
                </div>

                <div class="main__hero__content-image">
                    <img src="img/hero.svg" alt="" class="main__hero__content-image-img">
                </div>
            </div>
            <a href="#portfolio" class="main__hero__scroll"></a>
        </section>

        <section id="portfolio" class="main__portfolio">
            <h2 class="main__portfolio__title">Portfolio</h2>
            <div class="main__portfolio__projects">
                <article class="main__portfolio__projects-project project-1">
                    <h3 class="main__portfolio__projects-project-title">QR generator</h3>
                    <a href="/projects/qrcode/" class="main__portfolio__projects-project-link">Ver el
                        proyecto</a>
                </article>
                <article class="main__portfolio__projects-project project-2">
                    <h3 class="main__portfolio__projects-project-title">Proyecto 2</h3>
                    <a href="/projects/qrcode/" class="main__portfolio__projects-project-link">Ver el proyecto</a>
                </article>
                <article class="main__portfolio__projects-project project-3">
                    <h3 class="main__portfolio__projects-project-title">Proyecto 3</h3>
                    <a href="/projects/qrcode/" class="main__portfolio__projects-project-link">Ver el proyecto</a>
                </article>
                <article class="main__portfolio__projects-project project-4">
                    <h3 class="main__portfolio__projects-project-title">Proyecto 4</h3>
                    <a href="/projects/qrcode/" class="main__portfolio__projects-project-link">Ver el proyecto</a>
                </article>
                <article class="main__portfolio__projects-project project-5">
                    <h3 class="main__portfolio__projects-project-title">Proyecto 5</h3>
                    <a href="/projects/qrcode/" class="main__portfolio__projects-project-link">Ver el proyecto</a>
                </article>
                <article class="main__portfolio__projects-project project-6">
                    <h3 class="main__portfolio__projects-project-title">Proyecto 6</h3>
                    <a href="/projects/qrcode/" class="main__portfolio__projects-project-link">Ver el proyecto</a>
                </article>
            </div>
        </section>

        <section class="main__cta">
            <p class="prueba">CTA</p>
        </section>

        <div id="about"> </div>

        <section class="main__about">
            <p class="prueba">ABOUT ME</p>
        </section>

        <div id="contact"> </div>

        <section class="main__contact">
            <p class="prueba">CONTACT</p>
        </section>
    </main>

    <!-- Footer Container -->
    <footer class="footer">
        <div class="footer__social">
            <ul class="footer__social-list">
                <li class="footer__social-list-item"><a href="https://www.instagram.com/ibarreradev/"><i class="fa-brands fa-instagram"></i></a></li>
                <li class="footer__social-list-item"><a href="https://www.instagram.com/ibarreradev/"><i class="fa-brands fa-instagram"></i></a></li>
                <li class="footer__social-list-item"><a href="https://www.instagram.com/ibarreradev/"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="footer__copyright">
            <span class="footer__copyright-text">© Copyright - Iván Barrera</span>
        </div>
        <div class="footer__legal">
            <a href="/privacyterms/">
                Privacy & Terms</a>
        </div>
    </footer>

    <!-- to-top Button -->
    <!-- <a href="#" id="toTop" class="toTop_btn">
        <p class="hidden">go to top</p>
    </a> -->

    <!-- New to-Top Button -->
    <div class="toTop_btn" id="toTop"></div>

</body>

</html>