<?php
session_start();
include("App/login/validarlogin.php");
include("App/config/database.php");
$conn = new Conexion();
$conn->conectar();
$conn->query("SET NAMES 'utf8'");
$query="SELECT * FROM galeria";
$resp=$conn->query($query);
$conn->desconectar();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>MerakiMagazine | Galeria</title>
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
    <link rel="shortcut icon" href="class/img/logo.png">

</head>

<body id="body" class="c-layout-header-fixed c-layout-header-mobile-fixed">
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
                <header class="c-layout-header c-layout-header-3 c-layout-header-dark-mobile" id="home" data-minimize-offset="40">
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

                                </div>
                                <?php  include("menu.php") ?>
                            </div>
                        </div>
                    </div>
                </header>
                <?php  include("menuadmin.php") ?>
                <div class="c-layout-page">
                    <div class="c-content-box c-size-md">
                        <div class="container">
                            <div class="cbp-panel">
                                <div id="filters-container" class="cbp-l-filters-alignCenter">
                                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                                        Todas <div class="cbp-filter-counter"></div>
                                    </div>
                                    <div data-filter=".lugares_turisticos" class="cbp-filter-item">
                                        lugares turisticos <div class="cbp-filter-counter"></div>
                                    </div>
                                    <div data-filter=".emprendedurismo" class="cbp-filter-item">
                                        Emprenderurismo <div class="cbp-filter-counter"></div>
                                    </div>
                                    <div data-filter=".entrevistas" class="cbp-filter-item">
                                        Entrevistas a empresarios <div class="cbp-filter-counter"></div>
                                    </div>
                                    <div data-filter=".tecnologia" class="cbp-filter-item">
                                        Tecnologia <div class="cbp-filter-counter"></div>
                                    </div>
                                    <div data-filter=".innovacion" class="cbp-filter-item">
                                        innovacion <div class="cbp-filter-counter"></div>
                                    </div>
                                    <div data-filter=".restaurantes" class="cbp-filter-item">
                                        Restaurantes <div class="cbp-filter-counter"></div>
                                    </div>
                                </div>
                                <div id="grid-container" class="cbp cbp-l-grid-masonry-projects">
                                    <?php if(mysqli_num_rows($resp)>0){
                                    while($imagen = mysqli_fetch_array($resp,MYSQLI_ASSOC)){ ?>
                                    <div class="cbp-item <?php echo $imagen['categoria'];?>">
                                        <a href="class/img/galeria/<?php echo $imagen['imagen'];?>" class="cbp-caption cbp-lightbox" data-title="<?php echo $imagen['titulo'];?>">
                                            <div class="cbp-caption-defaultWrap">
                                                <img src="class/img/galeria/<?php echo $imagen['imagen'];?>" alt="">
                                            </div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignCenter">
                                                    <div class="cbp-l-caption-body">
                                                        <div class="cbp-l-caption-title"><?php echo $imagen['titulo']?></div>
                                                        <div class="cbp-l-caption-desc"><?php echo $imagen['descripcion']?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php }} else{ ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include("footer.php"); ?>
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
    <script src="class/js/home/masonry-gallery.js" type="text/javascript"></script>
</body>
</html>