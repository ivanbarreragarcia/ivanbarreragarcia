<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hi! -->
    <meta name="author" content="Ivan Barrera">
    <meta name="description" content="Simply QRCode Generator">
    <!-- Keywords -->
    <meta name="keywords"
        content="portfolio aboutme ivan barrera junior frontend developer curriculum qr qrcode qrgenerator">
    <!-- Google verification -->
    <meta name="google-site-verification" content="-9r0TQjc2nLnG-NkYMGxM_q08infjFZ-QHm6CrCsyAk" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <!-- Styles -->
    <link rel="stylesheet" href="../../css/normalize.css?ver=<?php echo date('dmYHis')?>">
    <link rel="stylesheet" href="../../css/style.css?ver=<?php echo date('dmYHis')?>">
    <link rel="stylesheet" href="css/style.css?ver=<?php echo date('dmYHis')?>" />
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js?ver=<?php echo date('dmYHis')?>" ></script>
    <script defer src="../../common.js?ver=<?php echo date('dmYHis')?>"></script>
    <script defer src="main.js?ver=<?php echo date('dmYHis')?>"></script>
    <script defer src="https://kit.fontawesome.com/fac55ee234.js?ver=<?php echo date('dmYHis')?>"
        crossorigin="anonymous"></script>
    <!-- Title -->
    <title>QRCode Generator</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <!-- Logo -->
        <div class="navbar__logo">
            <a href="/index.html" class="navbar__logo-title">IVÁN<span>BARRERA</span></a>
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
                    <li class="navbar__hamburger__menu-list-item linkMenu"><a href="/index.php"
                            class="navbar__hamburger__menu-list-item-link burguer-link1">home</a>
                    </li>
                    <li class="navbar__hamburger__menu-list-item linkMenu"><a href="/index.php#portfolio"
                            class="navbar__hamburger__menu-list-item-link burguer-link2">portfolio</a></li>
                    <li class="navbar__hamburger__menu-list-item linkMenu"><a href="/index.php#about"
                            class="navbar__hamburger__menu-list-item-link burguer-link3">about me</a></li>
                    <li class="navbar__hamburger__menu-list-item linkMenu"><a href="/index.php#contact"
                            class="navbar__hamburger__menu-list-item-link burguer-link4">contact</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Custom Menu -->
        <div class="navbar__menu">
            <ul class="navbar__menu-list">
                <li class="navbar__menu-list-item link-hover">
                    <a href="/index.php" class="navbar__menu-list-item-link">home</a>
                </li>
                <li class="navbar__menu-list-item link-hover">
                    <a href="/index.php#portfolio" class="navbar__menu-list-item-link">portfolio</a>
                </li>
                <li class="navbar__menu-list-item link-hover">
                    <a href="/index.php#about" class="navbar__menu-list-item-link">about me</a>
                </li>
                <li class="navbar__menu-list-item link-hover">
                    <a href="/index.php#contact" class="navbar__menu-list-item-link">contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Container -->
    <main class="main">
        <div class="container">
            <div class="container__header">
                <h1 class="container__header-title">QR-Code Generator</h1>
                <h3 class="container__header-description">You only have to write the URL you want to convert to QR and press the button!</h3>
            </div>
            <form autocomplete="off" action="" class="container__form" id="container__form">
                <input type="url" name="url" id="url" class="container__form-url" placeholder="ENTER URL">
                <button class="container__form-submit">GENERATE QR CODE</button>
            </form>
            <div class="container__qrcode" id="container__qrcode">
            </div>
        </div>
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