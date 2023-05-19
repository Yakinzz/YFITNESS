<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/logo-nav.png" type="image/x-icon">

        <!--=============== REMIXICON ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>YFITNESS</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
                <nav class="nav container">
                    <a href="#" class="nav__logo">
                        <img src="assets/img/logo-nav.png" alt="logo"> YFITNESS
                    </a>

                    <div class="nav__menu" id="nav-menu">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="#home" class="nav__link active-link">Inicio</a>
                            </li>
                            <li class="nav__item">
                                <a href="#program" class="nav__link">Ejercicios</a>
                            </li>
                            <li class="nav__item">
                                <a href="#choose" class="nav__link">Nosotros</a>
                            </li>
                            <li class="nav__item">
                                <a href="#pricing" class="nav__link">Rutinas YF</a>
                            </li>

                            <div class="nav__link">
                                <a href="assets/php/login_registro.php" class="button nav__button">
                                    Login
                                </a>
                            </div>
                        </ul>

                        <div class="nav__close" id="nav-close">
                            <i class="ri-close-line"></i>
                        </div>
                    </div>

                    <!-- Toggle Button -->
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__data">
                        <h2 class="home__subtitle">OBTÉN TU</h2>
                        <h1 class="home__title">CAMBIO FISICO</h1>
                        <p class="home__description">
                            Aquí te ayudaremos a mejorar y construir tu cuerpo ideal y vivir tu vida al máximo.
                        </p>
                        <a href="#" class="button button__flex">
                            Vamos allá! <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>

                    <div class="home__images">
                        <img src="assets/img/home-img.png" alt="home image" class="home__img">

                        <div class="home__triangle home__triangle-3"></div>
                        <div class="home__triangle home__triangle-2"></div>
                        <div class="home__triangle home__triangle-1"></div>
                    </div>
                </div>
            </section>

            <!--==================== LOGOS ====================-->
            <section class="logos section">
                <div class="logos__container container grid">
                    <img src="assets/img/logo1.png" alt="logo image" class="logos__img">
                    <img src="assets/img/logo2.png" alt="logo image" class="logos__img">
                    <img src="assets/img/logo3.png" alt="logo image" class="logos__img">
                    <img src="assets/img/logo4.png" alt="logo image" class="logos__img">
                </div>
            </section>

            <!--==================== PROGRAM ====================-->
            <section class="program section" id="program">
                <div class="container">
                    <div class="section__data">
                        <h2 class="section__subtitle">Nuestros Ejercicios</h2>
                        <div class="section__titles">
                            <h1 class="section__title-border">CONSTRUYE TU</h1>
                            <h1 class="section__title">MEJOR CUERPO</h1>
                        </div>
                    </div>

                    <div class="program__container grid">
                        <article class="program__card">
                            <div class="program__shape">
                                <img src="assets/img/program1.png" alt="program image" class="program__img">
                            </div>

                            <h3 class="program__title">Musculación</h3>

                            <p class="program__description">
                            Creando tensión en el músculo
                            contrayendolo y elongandolo.
                            </p>

                            <a href="#" class="program__button">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </article>

                        <article class="program__card">
                            <div class="program__shape">
                                <img src="assets/img/program2.png" alt="program image" class="program__img">
                            </div>

                            <h3 class="program__title">Cardio</h3>

                            <p class="program__description">
                            Ejercita tu ritmo cardíaco y mantenlo alto
                            por un tiempo.
                            </p>

                            <a href="#" class="program__button">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </article>

                        <article class="program__card">
                            <div class="program__shape">
                                <img src="assets/img/program3.png" alt="program image" class="program__img">
                            </div>

                            <h3 class="program__title">Estiramientos</h3>

                            <p class="program__description">
                            Estirar antes y después de la realización del ejercicio.
                            </p>

                            <a href="#" class="program__button">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </article>

                        <article class="program__card">
                            <div class="program__shape">
                                <img src="assets/img/program4.png" alt="program image" class="program__img">
                            </div>

                            <h3 class="program__title">Otros Deportes</h3>

                            <p class="program__description">
                                Abarcamos varios campos más allá del fitness.
                            </p>

                            <a href="#" class="program__button">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </article>
                    </div>
                </div>
            </section>

            <!--==================== CHOOSE US ====================-->
            <section class="choose section" id="choose">
                <div class="choose__overflow">
                    <div class="choose__container container grid">
                        <div class="choose__content">
                            <div class="section__data">
                                <h2 class="section__subtitle">La mejor razón</h2>
                                <div class="section__titles">
                                    <h1 class="section__title-border">PORQUE</h1>
                                    <h1 class="section__title">ELEGIRNOS?</h1>
                                </div>
                            </div>

                            <p class="choose__description">
                                Elige tu rutina favorita y empieza ahora. 
                                Recuerda que el único entrenamiento malo es el que no hiciste.
                            </p>

                            <div class="choose__data">
                                <div class="choose__group">
                                    <h3 class="choose__number">100+</h3>
                                    <p class="choose__subtitle">Miembros</p>
                                </div>

                                <div class="choose__group">
                                    <h3 class="choose__number">3+</h3>
                                    <p class="choose__subtitle">Entrenadores</p>
                                </div>

                                <div class="choose__group">
                                    <h3 class="choose__number">5+</h3>
                                    <p class="choose__subtitle">Rutinas</p>
                                </div>

                                <div class="choose__group">
                                    <h3 class="choose__number">20+</h3>
                                    <p class="choose__subtitle">Premios</p>
                                </div>
                            </div>
                        </div>

                        <div class="choose__images">
                            <img src="assets/img/choose-img.png" alt="choose image" class="choose__img">

                            <div class="choose__triangle choose__triangle-1"></div>
                            <div class="choose__triangle choose__triangle-2"></div>
                            <div class="choose__triangle choose__triangle-3"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PRICING ====================-->
            <section class="pricing section" id="pricing">
                <div class="container">
                    <div class="section__data">
                        <h2 class="section__subtitle">RutinasYF</h2>
                        <div class="section__titles">
                            <h1 class="section__title-border">NUESTROS</h1>
                            <h1 class="section__title">MEJORES PLANES</h1>
                        </div>
                    </div>

                    <div class="pricing__container grid">
                        <article class="pricing__card">
                            <header class="pricing__header">
                                <div class="pricing__shape">
                                    <img src="assets/img/pricing1.png" alt="pricing image" class="pricing__img">
                                </div>

                                <h1 class="pricing__title">PACK FITNESS</h1>
                                <h2 class="pricing__number">15€/mes</h2>
                            </header>

                            <ul class="pricing__list">
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> 4 entrenos a la semana
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> 1 camiseta YFITNESS
                                </li>
                                <li class="pricing__item pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> 1 mochila YFITNESS
                                </li>
                                <li class="pricing__item pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Acceso a ejercicios
                                </li>
                                <li class="pricing__item pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Estiramientos
                                </li>
                            </ul>

                            <a href="#" class="button button__flex pricing__button">
                                Obtener <i class="ri-arrow-right-line"></i>
                            </a>
                        </article>

                        <article class="pricing__card pricing__card-active">
                            <header class="pricing__header">
                                <div class="pricing__shape">
                                    <img src="assets/img/pricing2.png" alt="pricing image" class="pricing__img">
                                </div>

                                <h1 class="pricing__title">PACK LEYENDA</h1>
                                <h2 class="pricing__number">50€/mes</h2>
                            </header>

                            <ul class="pricing__list">
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> 6 entrenos a la semana
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Accesorios YFITNESS
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Suplementación semanal
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Acceso total
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Rutinas a medida
                                </li>
                            </ul>

                            <a href="#" class="button button__flex pricing__button">
                                Obtener <i class="ri-arrow-right-line"></i>
                            </a>
                        </article>

                        <article class="pricing__card">
                            <header class="pricing__header">
                                <div class="pricing__shape">
                                    <img src="assets/img/pricing3.png" alt="pricing image" class="pricing__img">
                                </div>

                                <h1 class="pricing__title">PACK PROFESIONAL</h1>
                                <h2 class="pricing__number">25€/mes</h2>
                            </header>

                            <ul class="pricing__list">
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> 5 entrenos a la semana
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Sudadera Pro YFITNESS
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Suplementación mensual
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Acceso a contenido exlusivo
                                </li>
                                <li class="pricing__item">
                                    <i class="ri-checkbox-circle-line"></i> Estiramientos y Cardio
                                </li>
                            </ul>

                            <a href="#" class="button button__flex pricing__button">
                                Obtener <i class="ri-arrow-right-line"></i>
                            </a>
                        </article>
                    </div>
                </div>
            </section>

            <!--==================== CALCULATE ====================-->
            <section class="calculate section">
                <div class="calculate__container container grid">
                    <div class="calculate__content">
                        <div class="section__titles">
                            <h1 class="section__title-border">CALCULA</h1>
                            <h1 class="section__title">TU IMC</h1>
                        </div>

                        <p class="calculate__description">
                            La calculadora del índice de masa corporal (IMC) calcula
                            índice de masa corporal a partir de su peso y altura.
                        </p>

                        <form action="" class="calculate__form" id="calculate-form">
                            <div class="calculate__box">
                                <input type="number" placeholder="Altura" class="calculate__input" id="calculate-cm">
                                <label for="" class="calculate__label">cm</label>
                            </div>
                            <div class="calculate__box">
                                <input type="number" placeholder="Peso" class="calculate__input" id="calculate-kg">
                                <label for="" class="calculate__label">kg</label>
                            </div>

                            <button type="submit" class="button button__flex">
                                Calcular Ahora <i class="ri-arrow-right-line"></i>
                            </button>

                        </form>

                        <p class="calculate__message" id="calculate-message"></p>
                    </div>

                    <img src="assets/img/calculate-img.png" alt="calculate image" class="calculate__img">
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section" id="footer">
            <div class="footer__container container grid">
                <div>
                    <a href="#" class="footer__logo">
                        <img src="assets/img/logo-nav.png" alt="logo imagen"> YFITNESS
                    </a>
                    <p class="footer__description">
                        Subscribase a nuestra comunidad aqui debajo.
                    </p>

                    <form action="" class="footer__form" id="contacto-form">
                        <input type="email" name="users_email" placeholder="Your Email" class="footer__input" id="contact-user">
                        <button type="submit" class="button">
                            Subscribirse
                        </button>
                    </form>

                    <p class="footer__message" id="contact-me"></p>
                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">
                            EJERCICIOS
                        </h3>
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Flex Muscle</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Cardio Exercise</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Basic Yoga</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Wight Lifting</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">
                            PACKS
                        </h3>
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Fitness</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Profesional</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Leyenda</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="footer__title">
                            YF
                        </h3>
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Sobre Nosotros</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Titulaciones</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Clientes</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Partners</a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>

            <div class="container">
                <div class="footer__group">
                    <ul class="footer__social">
                        <a href="www.facebook.com" target="_blank" class="footer__social-link">
                            <i class="ri-facebook-circle-fill"></i>
                        </a>
                        <a href="www.instagram.com" target="_blank" class="footer__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="www.twitter.com" target="_blank" class="footer__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </ul>

                    <span class="footer__copy">&#169; Copyright Almydev. All rights reserved</span>
                </div>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== EMAIL JS ===============-->
        
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>