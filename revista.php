<?php
session_start();
include("App/login/validarlogin.php");
include("App/config/database.php");
$id_tipo=$_SESSION['id_tipo'];
$conn = new Conexion();
$conn -> conectar();
$conn->query("SET NAMES 'utf8'");

$sqllimit = "SELECT * FROM revista ORDER BY id DESC LIMIT 5";
$rslimit = $conn->query($sqllimit);

$sqlrevista = "SELECT * FROM revista";

$rsrevista = $conn->query($sqlrevista);

$datos = array();







$conn -> desconectar();


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>MerakiMagazine | Ediciones</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.js"></script>
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
                                <?php include("menu.php") ?>
                            </div>
                        </div>
                    </div>
                </header>
                <?php
                if($id_tipo==1){
                include("menuadmin.php");
                }
                ?>
                <div class="c-layout-page">
                    <div class="c-layout-breadcrumbs-1 c-bgimage c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" style="background-image: url(class/img/home7.jpg)">
                        <div class="container">
                            <div class="c-page-title c-pull-center">
                                <a href="blog.php"><h1 class="c-font-uppercase c-font-bold c-font-white">Meraki Magazine Ediciones</h1></a>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-box c-size-md">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                  
                                    <---aqui metere las portadas con las descripciones->
                                </div>
                                <div class="col-md-3">
                                    
                                    <div class="c-content-ver-nav">
                                        <div class="c-content-title-1 c-theme c-title-md c-margin-t-40">
                                            <h3 class="c-font-bold c-font-uppercase">Ediciones</h3>
                                            <div class="c-line-left c-theme-bg"></div>
                                        </div>
                                        <ul class="c-menu c-arrow-dot1 c-theme">
                                            <?php if(mysqli_num_rows($rsrevista)>0){
                                                      while($revista = mysqli_fetch_array($rsrevista,MYSQLI_ASSOC)){ ?>
                                                       <li><a href="#"><?php echo $revista['titulo']; ?></a></li>

                                            <?php }} ?>
                                        </ul>
                                    </div>
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
</body>
</html>