<?php
session_start();
include("App/login/validarlogin.php");
include("App/login/validaradmin.php");
include("App/config/database.php");
$conn = new Conexion();



if(isset($_POST['crear'])){

    $target_path = "class/img/revista_imagenes/";
    $target_path = $target_path . basename( $_FILES['inputportada']['name']);
    if(move_uploaded_file($_FILES['inputportada']['tmp_name'], $target_path)) {
     $conn->conectar();
     $titulo = $_POST['titulo'];
     $descripcion = $_POST['descripcion'];
     $cantidadPag=$_POST['numeropag'];
     $portada = $_FILES['inputportada']['name'];
     
              
       $fecha_actual = date("Y-m-d");


        $sqlentradarevista ="INSERT INTO revista(cantidadpag,titulo, descripcion, portada) VALUES ('".$cantidadPag."','".$titulo."','".$descripcion."','".$portada."')";

                
       $rsentradarevista = $conn->insert_delete_update($sqlentradarevista);
       $conn->desconectar();
       if($rsentradarevista==1){
            header("Location:addrevista.php?reg=1");
         }
       else{
            header("Location:addrevista.php?error=1");
           }
    } else{

        echo "Ha ocurrido un error, trate de nuevo!";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <title>MerakiMagazine | Agregar Revista</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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
    <link href="class/css/home/custom.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="class/img/logo.png">

</head>

<body id="body" class="c-layout-header-fixed c-layout-header-mobile-fixed">
    <div class="">
        <div id="">
            <div class="">
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
                <?php  include("menuadmin.php") ?>
                <div class="c-layout-page">
                    <!-- BEGIN: PAGE CONTENT -->
                    <div class="c-content-box c-size-md c-bg-white">
                        <div class="container">
                            <div class="c-content-title-1">
                                <h3 class="c-center c-font-uppercase c-font-bold">Agregar nueva edicion </h3>
                                <div class="c-line-center c-theme-bg"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="c-body">
                                        <div class="form-group m-b-20 alert alert-success" style="display: none" id="exito">
                                            <p class="">Revista publicada correctamente.</p>
                                        </div>
                                        <div class="form-group m-b-20 alert alert-danger" style="display: none" id="error">
                                            <p class="">Error al publicar Revista!.</p>
                                        </div>
                                        <form class="form-horizontal" action="addrevista.php" method="POST" enctype="multipart/form-data">

                                                 <div class="form-group">
                                                <label class="col-md-2 control-label">Numero paginas</label>
                                                <div class="col-md-8">
                                                    <input class="form-control  c-square c-theme" name="numeropag" placeholder="numeropag" type="text" required="" autocomplete="off">
                                                </div>
                                            </div>                                            

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Titulo</label>
                                                <div class="col-md-8">
                                                    <input class="form-control  c-square c-theme" name="titulo" placeholder="titulo" type="text" required="" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Descripción</label>
                                                <div class="col-md-8">
                                                    <input class="form-control  c-square c-theme" name="descripcion" placeholder="descripción" type="text" value="" required="" autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Portada</label>
                                                <div class="col-md-4">
                                                    <input type="file" id="inputportada" name="inputportada" class="c-font-14">
                                                    <div class="form-group m-b-20 alert alert-danger" style="display: none" id="errorimg">
                                                        <p class="">Error!. Tipo de archivo no aceptado</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="form-group c-margin-t-40">
                                                <div class="col-sm-offset-4 col-md-8">
                                                    <button type="submit" name="crear" id="crear" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Crear Edicion</button>
                                                </div>
                                            </div>
                                        </form>
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
    <script src="class/plugins/home/ckeditor/ckeditor.js"></script>
    <script src="class/plugins/home/ckeditor/config.js"></script>
    <script src="class/js/home/components.js" type="text/javascript"></script>
    <script src="class/js/home/components-shop.js" type="text/javascript"></script>
    <script src="class/js/home/app.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>

</body>
</html>
