<?php
    session_start();
    include("App/login/validarlogin.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>MerakiMagazine</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link href="class/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="class/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/home/revo/css/revo-slider_css_settings.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/home/revo/css/revo-slider_css_layers.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/home/revo/css/revo-slider_css_navigation.css" rel="stylesheet" type="text/css" />
    <link href="class/css/home/carousel/style.min.css" rel="stylesheet" type="text/css" />
    <link href="class/css/home/carousel/style-responsive.min.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/home/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/home/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/home/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="class/plugins/home/slider-bootstrap/slider.css" rel="stylesheet" type="text/css" />
    <link href="class/css/home/plugins.css" rel="stylesheet" type="text/css" />
    <link href="class/css/home/components.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="class/css/home/themes_default.css" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="class/css/custom.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="class/img/logo.png" />

</head>

<body id="body" class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen">
    <div class="wrapper">
        <div id="loader-wrapper">
            <div id="loader">
                <img src="class/img/logocarga.png" alt="" class="mirakilogo">
                <div class="line-up"></div><div class="line-down"></div>
            </div>
            <div class="loader-section section-left"></div>
        </div>
        <div id="content">
            <div class="wrapper preload">
                <header class="c-layout-header c-layout-header-2 c-layout-header-dark-mobile c-header-transparent-dark" id="home" data-minimize-offset="40">
                    <div class="c-navbar">
                        <div class="container">
                            <div class="c-navbar-wrapper clearfix">
                                <div class="c-brand c-pull-left">
                                    <a href="home.php" class="c-logo">
                                        <img src="class/img/logo2_opt.png" alt="MERAKI" class="c-desktop-logo">
                                        <img src="class/img/logo2_opt.png" alt="MERAKI" class="c-desktop-logo-inverse">
                                        <img src="class/img/logo2_opt.png" alt="MERAKI" class="c-mobile-logo">
                                    </a>
                                    <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                        <span class="c-line"></span>
                                        <span class="c-line"></span>
                                        <span class="c-line"></span>
                                    </button>
                                    <button class="c-search-toggler" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                                <form class="c-quick-search" action="#">
                                    <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                                    <span class="c-theme-link">&times;</span>
                                </form>
                                <nav class="c-mega-menu c-mega-menu-onepage c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold" data-onepage-animation-speed="700">
                                    <ul class="nav navbar-nav c-theme-nav">
                                        <li class="c-onepage-link c-active active">
                                            <a href="#home" class="c-link">Inicio</a>
                                        </li>
                                        <li class="c-onepage-link ">
                                            <a href="#about" class="c-link">Quienes Somos</a>
                                        </li>
                                        <li class="c-onepage-link ">
                                            <a href="#Contenidos" class="c-link">Contenidos</a>
                                        </li>
                                        <li class="c-onepage-link ">
                                            <a href="#patrocinadores" class="c-link">Patrocinadores</a>
                                        </li>
                                        <li class="c-onepage-link ">
                                            <a target="_blank" href="revista/contenidos/edicion1/index.html" class="c-link">Revista</a>
                                        </li>
                                        <li class="c-onepage-link ">
                                            <a href="blog.php" class="c-link">Blog</a>
                                        </li>
                                        <li class="c-onepage-link ">
                                            <a href="galeria.php" class="c-link">Galeria</a>
                                        </li>
                                        <li class="c-onepage-link ">
                                            <a href="#works" class="c-link">Cupones</a>
                                        </li>
                                        <li class="c-onepage-link ">
                                            <a href="#contact" class="c-link">Contacto</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="c-layout-page">
                    <section class="c-layout-revo-slider c-layout-revo-slider-1" dir="ltr">
                        <div class="tp-banner-container tp-fullscreen tp-fullscreen-mobile">
                            <div class="tp-banner rev_slider" data-version="5.0">
                                <ul>
                                    <li data-transition="fade">
                                        <img src="class/img/004.jpg" alt="">
                                        <div class="tp-caption customin customout"
                                             data-x="center"
                                             data-y="center"
                                             data-hoffset=""
                                             data-voffset="-30"
                                             data-start="1500"
                                             data-transform_in="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;"
                                             data-transform_out="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;"
                                             data-splitin="none"
                                             data-splitout="none"
                                             data-elementdelay="0.1"
                                             data-endelementdelay="0.1"
                                             data-endspeed="600">
                                            <h3 class="c-main-title c-font-55 c-font-bold c-font-center c-font-uppercase c-font-white c-block">
                                                "Somos la expresión<br>
                                                verbal de tu pensamiento crítico y liberal"-gamb
                                            </h3>
                                        </div>
                                        <div class="tp-caption randomrotateout"
                                             data-x="center"
                                             data-y="center"
                                             data-hoffset=""
                                             data-voffset="120"
                                             data-transform_in="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;"
                                             data-transform_out="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;"
                                             data-start="2000"
                                             data-easing="Back.easeOut">
                                            <a href="#about" class="c-action-btn btn btn-lg c-btn-square c-btn-border-2x c-btn-white c-btn-bold c-btn-uppercase">conocenos</a>
                                        </div>
                                    </li>
                                    <li data-transition="fade">
                                        <img src="class/img/006.jpg" alt="">
                                        <div class="tp-caption customin customout"
                                             data-x="center"
                                             data-y="center"
                                             data-hoffset=""
                                             data-voffset="-30"
                                             data-start="1500"
                                             data-transform_in="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;"
                                             data-transform_out="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Back.easeOut;"
                                             data-splitin="none"
                                             data-splitout="none"
                                             data-elementdelay="0.1"
                                             data-endelementdelay="0.1"
                                             data-endspeed="600">
                                            <h3 class="c-main-title c-font-55 c-font-bold c-font-center c-font-uppercase c-font-white c-block">
                                                Meraki Magazine
                                            </h3>
                                        </div>
                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption randomrotateout"
                                             data-x="center"
                                             data-y="center"
                                             data-hoffset=""
                                             data-voffset="120"
                                             data-transform_in="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;"
                                             data-transform_out="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Back.easeOut;"
                                             data-start="2000"
                                             data-easing="Back.easeOut">
                                            <a href="revista/contenidos/edicion1/index.html" target="_blank" class="c-action-btn btn btn-lg c-btn-square c-btn-border-2x c-btn-white c-btn-bold c-btn-uppercase">Revista</a>
                                        </div>
                                    </li>
                                    <!-- END SLIDE #2 -->
                                    <!-- SLIDE #3 - VIDEO SLIDER -->
                                    <!-- SLIDE #2 -->
                                    <li data-transition="fade">
                                        <!-- MAIN IMAGE -->
                                        <img src="class/img/010.jpg" alt="">
                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption customin customout"
                                             data-x="center"
                                             data-y="center"
                                             data-hoffset=""
                                             data-voffset="-30"
                                             data-start="1500"
                                             data-transform_in="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;"
                                             data-transform_out="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Back.easeOut;"
                                             data-splitin="none"
                                             data-splitout="none"
                                             data-elementdelay="0.1"
                                             data-endelementdelay="0.1"
                                             data-endspeed="600">
                                            <h3 class="c-main-title c-font-55 c-font-bold c-font-center c-font-uppercase c-font-white c-block">
                                                Lorem ipsum dolor sit amet.<br>
                                                For every need
                                            </h3>
                                        </div>
                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption randomrotateout"
                                             data-x="center"
                                             data-y="center"
                                             data-hoffset=""
                                             data-voffset="120"
                                             data-transform_in="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;"
                                             data-transform_out="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Back.easeOut;"
                                             data-start="2000"
                                             data-easing="Back.easeOut">
                                            <a href="#" class="c-action-btn btn btn-lg c-btn-square c-btn-border-2x c-btn-white c-btn-bold c-btn-uppercase">Explore More</a>
                                        </div>
                                    </li>
                                    <!-- END SLIDE #2 -->
                                </ul>
                            </div><!-- END REVOLUTION SLIDER -->
                        </div><!-- END OF SLIDER WRAPPER -->
                    </section><!-- END: LAYOUT/SLIDERS/REVO-SLIDER-1 -->
                </div>
                <section id="about">
                    <div class="c-content-box c-size-md c-bg-grey-1">
                        <div class="c-content-feature-10">
                            <div class="c-content-title-1">
                                <h3 class="c-font-uppercase c-center c-font-bold c-txt-white">¿Quiénes somos?</h3>
                                <div class="c-line-center c-theme-bg"></div>
                                <p class="c-font-center">Somos más que tu revista quincenal....</p>
                            </div>
                            <div class="c-content-box c-size-md c-bg-white">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6 wow animated fadeInUp">
                                            <div class="c-content-title-1">
                                                <h3 class="c-font-uppercase c-font-bold">Nosotros</h3>
                                            </div>
                                            <div class="c-content-title-3 c-title-md c-theme-border">
                                                <h3 class="c-theme-font c-font-uppercase">Presentacion</h3>
                                            </div>
                                            <p>
                                                Meraki es el vocablo griego que significa “hacer algo con amor y creatividad, poniendo el alma en ello”, es por eso que quienes nos reunimos para lanzar esta revista hemos tomado la decisión de poner dicho nombre a esta publicación, la cual es parte de la empresa “Desarrollo Económico Social” DESES.
                                                Director presidente DESES.
                                            </p>
                                            <div class="c-content-title-3 c-title-md c-theme-border">
                                                <h3 class="c-theme-font c-font-uppercase">Nuestro Objetivo</h3>
                                            </div>
                                            <p>
                                                El objetivo de esta revista es llevar información de interés para los jóvenes y adultos contemporáneos, de tal forma que sirva para su formación y crecimiento personal y profesional, generando conocimientos y valores necesarios en estos tiempos difíciles para nuestra sociedad.
                                            </p>
                                        </div>
                                        <div class="col-sm-6 wow animated fadeInUp">
                                            <div class="c-content-client-logos-1">
                                                <div class="c-content-title-1">
                                                    <h3 class="c-font-uppercase c-font-bold">Meraki y siempre un poco más</h3>
                                                </div>
                                                <div class="c-content-title-3 c-title-md c-theme-border">
                                                    <h3 class="c-theme-font c-font-uppercase">Formación e Información</h3>
                                                </div>
                                                <p>
                                                    Meraki, además de ser un instrumento de información y formación, también es una oportunidad para que los jóvenes puedan expresarse, escribiendo artículos técnicos, sociales, políticos o deportivos, de tal forma que puedan generar experiencia en sus áreas especializadas del saber.
                                                </p>
                                                <div class="c-content-title-3 c-title-md c-theme-border">
                                                    <h3 class="c-theme-font c-font-uppercase">conocimiento facil al alcance de ti</h3>
                                                </div>
                                                <p>
                                                    Meraki tiene en formato electrónico y distribuida de manera quincenal y gratuita para todas aquellas personas que se hayan registrado en nuestras diferentes redes sociales. Además, contendrá una sección de cupones, el cual permitirá que nuestros lectores también ganen premios o descuentos al estar registrados o inscritos en nuestra publicación.
                                                    En esta primera edición, tenemos una serie de artículos que han sido elaborados por jóvenes, dichos escritos son muy interesantes y de mucha actualidad en áreas tales como: turismo, productividad, tecnología y otros; deseamos que esta revista sea de mucho agrado y que nuestros lectores se multipliquen más por cada nueva edición, llevando así fe y esperanza para toda nuestra sociedad.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="Contenidos">
                    <div class="c-content-box c-size-md c-bg-parallax c-servicios" style="">
                        <div class="container">
                            <div class="c-content-feature-9">
                                <div class="c-content-title-1">
                                    <h3 class="c-font-uppercase c-center c-font-bold c-font-white">Contenidos</h3>
                                    <div class="c-line-center c-theme-bg"></div>
                                    <p class="c-font-center c-text-white">Conoce un poco sobre nuestra pasión</p>
                                </div>
                                <ul class="c-list">
                                    <li>
                                        <div class="c-card">
                                            <i class="fa fa-check c-font-blue c-font-22 c-bg-blue-7 c-float-left"></i>
                                            <div class="c-content c-content-left">
                                                <h3 class="c-font-white c-font-uppercase c-font-bold">Turismo</h3>
                                                <p class="c-text-white">
                                                    Encontrarás los mejores lugares turísticos de El Salvador para viajar.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="c-card">
                                            <i class="fa fa-check c-font-blue c-font-27 c-bg-blue-7 c-float-left"></i>
                                            <div class="c-content c-content-left">
                                                <h3 class="c-font-white c-font-uppercase c-font-bold">Emprendedurismo</h3>
                                                <p class="c-text-white">
                                                    Técnicas para emprender y guías de ayuda elaboradas por expertos.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="c-card">
                                            <i class="fa fa-check c-font-blue c-font-27 c-bg-blue-7 c-float-left"></i>
                                            <div class="c-content c-content-left">
                                                <h3 class="c-font-white c-font-uppercase c-font-bold">Entrevistas</h3>
                                                <p class="c-text-white">
                                                    conoce las historias y experiencias de  emprendedores sobre cómo llegaron al éxito tips, consejos y más.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="c-list">
                                    <li>
                                        <div class="c-card">
                                            <i class="fa fa-check c-font-blue c-font-22 c-bg-blue-7 c-float-left"></i>
                                            <div class="c-content c-content-left">
                                                <h3 class="c-font-white c-font-uppercase c-font-bold">Tecnologia</h3>
                                                <p class="c-text-white">
                                                    futuras  y actuales tendencias del cambiante  mundo de la tecnología
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="c-card">
                                            <i class="fa fa-check c-font-blue c-font-27 c-bg-blue-7 c-float-left"></i>
                                            <div class="c-content c-content-left">
                                                <h3 class="c-font-white c-font-uppercase c-font-bold">Innovacion</h3>
                                                <p class="c-text-white">
                                                    Herramientas de innovación en los ámbitos emprendedores e interpersonales
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="c-card">
                                            <i class=" fa fa-check c-font-blue c-font-27 c-bg-blue-7 c-float-left"></i>
                                            <div class="c-content c-content-left">
                                                <h3 class="c-font-white c-font-uppercase c-font-bold">Restaurantes</h3>
                                                <p class="c-text-white">
                                                    La gastronomia nos complementa , aqui veras  las mejores sugerencias en restaurantes de El Salvador para salir en familia y amigos.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="patrocinadores">
                    <div class="c-content-box c-size-md c-bg-dark">
                        <div class="c-content-feature-10">
                            <div class="c-content-box c-size-md c-bg-dark">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 wow animated fade">
                                            <div class="c-content-client-logos-1">
                                                <div class="c-content-title-1">
                                                    <h3 class="c-font-uppercase c-font-bold c-text-white">Nuestros patrocinadores</h3>
                                                    <div class="c-line-left c-theme-bg"></div>
                                                </div>
                                                <div class="c-logos">
                                                    <div class="row ">
                                                        <div class="col-md-3 col-xs-6 text-center c-lg-1">
                                                            <img class="" src="class/img/pt1.png" alt="patrocinador" />
                                                        </div>
                                                        <div class="col-md-3 col-xs-6 text-center c-lg-2">
                                                            <img class="" src="class/img/pt2.png" alt="patrocinador" />
                                                        </div>
                                                        <div class="col-md-3 col-xs-6 text-center c-lg-3">
                                                            <img class="" src="class/img/pt3.png" alt="patrocinador" />
                                                        </div>
                                                        <div class="col-md-3 col-xs-6 text-center c-lg-4">
                                                            <img class="" src="class/img/pt4.png" alt="patrocinador" />
                                                        </div>
                                                    </div>
                                                    <div class="separador"></div>
                                                    <div class="row">
                                                        <div class="col-md-3 col-xs-6 text-center c-lg-1">
                                                            <img class="" src="class/img/pt5.png" alt="patrocinador" />
                                                        </div>
                                                        <div class="col-md-3 col-xs-6 text-center c-lg-2">
                                                            <img class="" src="class/img/pt6.png" alt="patrocinador" />
                                                        </div>
                                                        <div class="col-md-3 col-xs-6 text-center c-lg-3">
                                                            <img class="" src="class/img/pt7.png" alt="patrocinador" />
                                                        </div>
                                                        <div class="col-md-3 col-xs-6 text-center c-lg-4">
                                                            <img class="" src="class/img/pt8.png" alt="patrocinador" />
                                                        </div>
                                                    </div>
                                                    <div class="separador"></div>
                                                    <div class="row ">
                                                        <div class="col-md-3 col-xs-6 text-center c-lg-1">
                                                            <img class="" src="class/img/pt1.png" alt="patrocinador" />
                                                        </div>
                                                        <div class="col-md-3 col-xs-6 text-center c-lg-2">
                                                            <img class="" src="class/img/pt2.png" alt="patrocinador" />
                                                        </div>
                                                        <div class="col-md-3 col-xs-6 text-center c-lg-3">
                                                            <img class="" src="class/img/pt3.png" alt="patrocinador" />
                                                        </div>
                                                        <div class="col-md-3 col-xs-6 text-center c-lg-4">
                                                            <img class="" src="class/img/pt4.png" alt="patrocinador" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="contact">
                    <div class="c-content-box c-size-md c-bg-white">
                        <div class="container">
                            <div class="c-content-feedback-1 c-option-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="c-contact">
                                            <div class="c-content-title-1">
                                                <h3 class="c-font-uppercase c-font-bold">Contactenos</h3>
                                                <div class="c-line-left"></div>
                                                <p class="c-font-lowercase">tu opinion es muy importantes para nosotros escribenos sera un placer saber de ti.</p>
                                            </div>
                                            <div class="col-md-6 col-md-offset-3 text-center">
                                                <form action="#">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Nombre" class="form-control c-square c-theme input-lg">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Correo Eléctronico" class="form-control c-square c-theme input-lg">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea rows="8" name="mensaje" placeholder="Comentario..." class="form-control c-theme c-square input-lg"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square">Enviar</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php include("footer.php") ?>

                <div class="c-layout-go2top">
                    <i class="fa fa-arrow-up"></i>
                </div>

            </div>
        </div>
    </div>
    <script src="class/plugins/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="class/plugins/jquery/jquery-migrate-1.1.0.min.js" type="text/javascript"></script>
    <script src="class/plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="class/plugins/jquery/jquery.easing.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/revelar-animate/wow.js" type="text/javascript"></script>
    <script src="class/plugins/home/revelar-animate/reveal-animate.js" type="text/javascript"></script>
    <script src="class/plugins/home/revo/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/revo/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/revo/js/revolution.extension.slideanims.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/revo/js/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/revo/js/revolution.extension.navigation.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/revo/js/revolution.extension.video.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/revo/js/revolution.extension.parallax.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="class/plugins/home/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
    <script src="class/plugins/home/typed/typed.min.js" type="text/javascript"></script>
    <script src="class/plugins/home/slider-bootstrap/bootstrap-slider.js" type="text/javascript"></script>
    <script src="class/js/home/components.js" type="text/javascript"></script>
    <script src="class/js/home/components-shop.js" type="text/javascript"></script>
    <script src="class/js/home/app.js" type="text/javascript"></script>

    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.wrapper').addClass('loaded');
                $('#body').addClass('');
            }, 2000);

            App.init();
        });

        jQuery(function () {
            $(window).load(function () {
                $('.wrapper').removeClass('preload');
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            var slider = $('.c-layout-revo-slider .tp-banner');
            var cont = $('.c-layout-revo-slider .tp-banner-container');
            var api = slider.show().revolution({
                sliderType: "standard",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 15000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    arrows: {
                        style: "circle",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 30,
                            v_offset: 0
                        }
                    }
                },
                responsiveLevels: [2048, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [868, 768, 960, 720],
                lazyType: "none",
                shadow: 0,
                spinner: "spinner2",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        });
    </script>
</body>
</html>