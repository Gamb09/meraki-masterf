<?php
session_start();
include("App/login/validarlogin.php");
include("App/login/validaradmin.php");
include("App/config/database.php");
$conn = new Conexion();
$conn -> conectar();
$conn->query("SET NAMES 'utf8'");
$sqlcategorias = "SELECT * FROM categorias";
$rscategorias = $conn->query($sqlcategorias);
$conn->desconectar();

if(isset($_GET['post'])){
    $conn->conectar();
    $conn->query("SET NAMES 'utf8'");
    $sqleditar = "SELECT * FROM entradas WHERE id='".$_GET['post']."'";
    $rseditar = $conn->query($sqleditar);
    $num = mysqli_num_rows($rseditar);
    if($num > 0){
        $entrada = $rseditar->fetch_assoc();
    }
    $conn->desconectar();
}

if(isset($_POST['crear'])){

    if($_FILES['inputImage']['name']==""){
           $conn->conectar();
           $conn->query("SET NAMES 'utf8'");
           $titulo = $_POST['titulo'];
           $intro = $_POST['descripcion'];
           $texto = $_POST['editor1'];
           $id_categoria = $_POST['categorias'];
           $id = $_POST['id'];
           $sql = "UPDATE entradas SET titulo='".$titulo."', descripcion='".$intro."', texto='".$texto."', categoria='".$id_categoria."' WHERE id='".$id."'";
            $rs = $conn->insert_delete_update($sql);
            $sql = "SELECT * FROM entradas WHERE id='".$id."'";
            $rs = $conn->query($sql);
            $num = mysqli_num_rows($rs);
            if($num > 0){
                $entrada = $rs->fetch_assoc();
            }
            $conn->desconectar();
    }
    else{
        $target_path = "class/img/blog/";
        $target_path = $target_path . basename( $_FILES['inputImage']['name']);
        if(move_uploaded_file($_FILES['inputImage']['tmp_name'], $target_path)) {
           $conn->conectar();
           $conn->query("SET NAMES 'utf8'");
           $img2 = $_FILES['inputImage']['name'];
           $titulo = $_POST['titulo'];
           $intro = $_POST['descripcion'];
           $texto = $_POST['editor1'];
           $id_categoria = $_POST['categorias'];
           $id = $_POST['id'];
           $sql = "UPDATE entradas SET  img='".$img2."', titulo='".$titulo."', descripcion='".$intro."', texto='".$texto."', categoria='".$id_categoria."' WHERE id='".$id."'";
            $rs = $conn->insert_delete_update($sql);
            $sql = "SELECT * FROM entradas WHERE id='".$id."'";
            $rs = $conn->query($sql);
            $num = mysqli_num_rows($rs);
            if($num > 0){
                $entrada = $rs->fetch_assoc();
            }
            $conn->desconectar();
        } else{

        echo "Ha ocurrido un error, trate de nuevo!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <title>MerakiMagazine | Editar Entrada > <?php echo $entrada['titulo']; ?></title>
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
                    <div class="c-content-box c-size-md c-bg-white">
                        <div class="container">
                            <div class="c-content-title-1">
                                <h3 class="c-center c-font-uppercase c-font-bold">Editar Entrada</h3>
                                <div class="c-line-center c-theme-bg"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="c-body">
                                        <div class="form-group m-b-20 alert alert-success" style="display: none" id="exito">
                                            <p class="">Entrada publicada correctamente.</p>
                                        </div>
                                        <div class="form-group m-b-20 alert alert-danger" style="display: none" id="error">
                                            <p class="">Error al publicar entrada!.</p>
                                        </div>
                                        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Titulo</label>
                                                <div class="col-md-8">
                                                    <input class="form-control  c-square c-theme" name="titulo" placeholder="Titulo" type="text" required="" autocomplete="off" value="<?php echo $entrada['titulo'];?>">
                                                    <input type="text" hidden="" value="<?php echo $entrada['id'];?>" name="id" id="id">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Descripción</label>
                                                <div class="col-md-8">
                                                    <input class="form-control  c-square c-theme" name="descripcion" placeholder="Descripción" type="text" required="" autocomplete="off" value="<?php echo $entrada['descripcion'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <textarea class="ckeditor form-control" id="editor1" name="editor1" rows="15" required=""><?php echo $entrada['texto'];?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile" class="col-md-2 control-label">Imagen Principal</label>
                                                <div class="col-md-4">
                                                    <input type="file" id="inputImage" name="inputImage" class="c-font-14">
                                                    <p class="help-block">
                                                        JPG, GIF, PNG
                                                    </p>
                                                    <img id="imagenEvento" src="class/img/blog/<?php echo $entrada['img']; ?>" alt="Imagen Previa" class="c-overlay-object img-responsive" height="150" width="150" />
                                                    <div class="form-group m-b-20 alert alert-danger" style="display: none" id="errorimg">
                                                        <p class="">Error!. Tipo de archivo no aceptado</p>
                                                    </div>
                                                </div>
                                                <label class="col-md-2 control-label">Categorias</label>
                                                <div class="col-md-4">
                                                    <?php
                                                    while($categorias = mysqli_fetch_array($rscategorias,MYSQLI_ASSOC)) {
                                                    ?>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" required name="categorias" id="categorias" value="<?php echo $categorias['id'] ;?>" <?php if($entrada['categoria']==$categorias['id']){ ?> checked="checked" <?php } ?> ><?php echo $categorias['nombre'] ; ?>
                                                        </label>
                                                    </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="form-group c-margin-t-40">
                                                <div class="col-sm-offset-4 col-md-8">
                                                    <button type="submit" name="crear" id="crear" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Crear Entrada</button>
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
    <script type="text/javascript">
        $.fn.checkFileType = function (options) {
            var defaults = {
                allowedExtensions: [],
                success: function (data) { },
                error: function () { }
            };
            options = $.extend(defaults, options);
            return this.each(function () {
                $(this).on('change', function () {
                    var value = $(this).val(),
                        file = value.toLowerCase(),
                        extension = file.substring(file.lastIndexOf('.') + 1);

                    if ($.inArray(extension, options.allowedExtensions) == -1) {
                        options.error();
                        $(this).focus();
                    } else {
                        options.success($(this));
                    }
                });

            });
        };
        $('#inputImage').checkFileType({
            allowedExtensions: ['jpg', 'png', 'jpeg'],
            success: function (data) {
                leerArchivo(data[0], "#imagenEvento");
                $('#errorimg').hide();
            },
            error: function () {
                $('#errorimg').show();
            }
        });
        function leerArchivo(input, selectorRender) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(selectorRender).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script src="class/js/home/masonry-gallery.js" type="text/javascript"></script>
    <?php if(isset($_GET['reg'])){
    if($_GET['reg']==1){
    ?>
    <script>
        $('#exito').show();
    </script>

    <?php
    }
    }
    ?>
    <?php if(isset($_GET['error'])){
    if($_GET['error']==1){
    ?>
    <script>
        $('#error').show();
    </script>
    <?php
    }
    }
    ?>
</body>
</html>
