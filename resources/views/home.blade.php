<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Portafolio Cristofer Valdovino - Web Developer" />
    <meta name="author" content="" />
    <meta name="google-site-verification" content="CQxvmbrh65K3GI_16CT39lwbXLd8YB62v3syTbFfNqY" />
    <title>Cristofer Valdovino - Web Developer</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Cristofer Valdovino</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Sobre Mí</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Habilidades</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portafolio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-white font-weight-bold">¡Bienvenido!<br>Me llamo Cristofer Valdovino</h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">Desarrollador web - Programador backend - Técnico
                        Universitario en Informática</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Ver mas</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <style>
        .img-about {
            object-fit: cover;
            width: 50%;
            border-radius: 50%;
            border: 5px solid #ffffff;
        }

        @media (max-width: 516px) {
            .img-about {
                object-fit: cover;
                width: 80%;
                border-radius: 50%;
                border: 5px solid #ffffff;
            }
        }

    </style>
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Sobre Mí</h2>
                    <hr class="divider light my-4" />
                    <p class="text-white mb-5">Soy Técnico Universitario Informático egresado el 2020 de la Universidad
                        Federico Santa María. Poseo experiencia en el desarrollo de aplicaciones webs. Estoy en
                        continuo aprendizaje para especializarme en el desarrollo FullStack.
                    </p>
                    <img src="{{ asset('assets/img/yo.jpeg') }}" class="img-about" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <style>
        .img-skills {
            object-fit: contain;
            width: 100%;
            height: 64px;
        }

    </style>
    <section class="page-section" id="skills">
        <div class="container">
            <h2 class="text-center mt-0">Lenguajes y Tecnologías</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="mt-5">
                        <img src="{{ asset('assets/img/skills/html-logo.png') }}" class="img-skills" loading="lazy"
                            alt="html">
                        <h3 class="h4 mb-2">Html5</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="mt-5">
                        <img src="{{ asset('assets/img/skills/css-logo.png') }}" class="img-skills" loading="lazy"
                            alt="css">
                        <h3 class="h4 mb-2">CSS3</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="mt-5">
                        <img src="{{ asset('assets/img/skills/js-logo.png') }}" class="img-skills" loading="lazy"
                            alt="javascript">
                        <h3 class="h4 mb-2">JavaScript</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="mt-5">
                        <img src="{{ asset('assets/img/skills/bootstrap-logo.png') }}" class="img-skills"
                            loading="lazy" alt="bootstrap">
                        <h3 class="h4 mb-2">Bootstrap</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="mt-5">
                        <img src="{{ asset('assets/img/skills/php-logo.png') }}" class="img-skills" loading="lazy"
                            alt="php">
                        <h3 class="h4 mb-2">PHP</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="mt-5">
                        <img src="{{ asset('assets/img/skills/python-logo.png') }}" class="img-skills" loading="lazy"
                            alt="python">
                        <h3 class="h4 mb-2">Python</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="mt-5">
                        <img src="{{ asset('assets/img/skills/laravel-logo.png') }}" class="img-skills" loading="lazy"
                            alt="laravel">
                        <h3 class="h4 mb-2">Laravel</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="mt-5">
                        <img src="{{ asset('assets/img/skills/codeigniter-logo.png') }}" class="img-skills"
                            loading="lazy" alt="codeigniter">
                        <h3 class="h4 mb-2">Codeigniter</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="mt-5">
                        <img src="{{ asset('assets/img/skills/django-logo.png') }}" class="img-skills" loading="lazy"
                            alt="django">
                        <h3 class="h4 mb-2">Django</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="mt-5">
                        <img src="{{ asset('assets/img/skills/mysql-logo.png') }}" class="img-skills" loading="lazy"
                            alt="mysql">
                        <h3 class="h4 mb-2">MySql</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="mt-5">
                        <img src="{{ asset('assets/img/skills/digital-ocean.png') }}" class="img-skills"
                            loading="lazy" alt="Digital Ocean">
                        <h3 class="h4 mb-2">Digital Ocean</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="mt-5">
                        <img src="{{ asset('assets/img/skills/cpanel.png') }}" class="img-skills" loading="lazy"
                            alt="cpanel">
                        <h3 class="h4 mb-2">cPanelHost</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="mt-5">
                        <img src="{{ asset('assets/img/skills/react.png') }}" class="img-skills" loading="lazy"
                            alt="React">
                        <h3 class="h4 mb-2">React</h3>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 text-center">
                    <div class="mt-5">
                        <img src="{{ asset('assets/img/skills/sass.png') }}" class="img-skills" loading="lazy"
                            alt="Sass">
                        <h3 class="h4 mb-2">Sass</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .img-portafolio {
            object-fit: cover;
            width: 100%;
            height: 300px;
        }

    </style>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0 bg-primary">
            <section class="page-section bg-dark text-white">
                <div class="container d-flex justify-content-center">
                    <div class="container text-center">
                        <h2 class="mt-0">Portafolio </h2>
                        <hr class="divider my-3" />
                    </div>
                </div>
            </section>
            <div class="row no-gutters">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" target="_blank" href="https://politicaminera.cl/">
                        <img class="img-portafolio" src="assets/img/portfolio/proyectos/politica-minera-chilena.jpg"
                            alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Blog</div>
                            <div class="project-name">Política Minera Chilena</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box">
                        <img class="img-portafolio" src="assets/img/portfolio/proyectos/sicv.png" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Aplicación</div>
                            <div class="project-name">Sistema de Inventario y Ventas para Minimercados</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" target="_blank" href="https://www.string.cl/">
                        <img class="img-portafolio" src="assets/img/portfolio/proyectos/hprod.png" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Aplicación</div>
                            <div class="project-name">Sistema de Control de Producción para cliente de String</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" target="_blank" href="https://www.string.cl/">
                        <img class="img-portafolio" src="assets/img/portfolio/proyectos/lsoft.png" alt="" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Aplicación</div>
                            <div class="project-name">Sistema de Control Suministro de Alimentos de Mascotas servicio de
                                String</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">¡Estemos en contacto! </h2>
                    <hr class="divider my-4" />
                    <p class="text-muted mb-5">¿Listo para comenzar tu próximo proyecto? ¡Contactame y pongamonos en
                        marcha! </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div>+569 73382229</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                    <a class="d-block" href="mailto:c.valdovino.v@gmail.com">c.valdovino.v@gmail.com</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright © 2020 - Start Bootstrap</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
