<?php
session_start();
include("App/login/validarlogin.php");
include("App/config/database.php");
$id_tipo=$_SESSION['id_tipo'];
$conn = new Conexion();
$conn -> conectar();
$conn->query("SET NAMES 'utf8'");

$sqllimit = "SELECT * FROM entradas ORDER BY id DESC LIMIT 5";
$rslimit = $conn->query($sqllimit);

$sqlcategorias = "SELECT * FROM categorias";
$rscategorias = $conn->query($sqlcategorias);

$datos = array();

if(isset($_GET['buscar'])){
    $buscar = $_GET['buscar'];
    $sql = "SELECT * FROM entradas WHERE titulo LIKE '%".$buscar."%' ";
    $rs = $conn->query($sql);
    if(mysqli_num_rows($rs)>0){
    while($entradas = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
        $datos[] = $entradas;
    }
}
}
else if(isset($_GET['categoria'])){
    $categoria = $_GET['categoria'];
    $sql = "SELECT * FROM entradas WHERE categoria='".$categoria."'";
    $rs = $conn->query($sql);
    if(mysqli_num_rows($rs)>0){
    while($entradas = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
        $datos[] = $entradas;
    }
}
}
else{
    $sql = "SELECT * FROM entradas";
    $rs = $conn->query($sql);
    if(mysqli_num_rows($rs)>0){
    while($entradas = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
        $datos[] = $entradas;
        }
    }
}

$conn -> desconectar();

require_once('App/libs/PHPPaging.lib.php');
$paging = new PHPPaging();
$paging->agregarArray($datos);
$paging->porPagina(6);
$paging->paginasAntes(4,8,15);
$paging->paginasDespues(4,8,15);
$paging->linkSeparador(" - ");
$paging->linkEstructura("?page={n}");
$paging->linkSeparadorEspecial('...');
$paging->ejecutar();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>MerakiMagazine | Blog</title>
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
                                <a href="blog.php"><h1 class="c-font-uppercase c-font-bold c-font-white">Meraki Magazine BLOG</h1></a>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-box c-size-md">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="c-content-blog-post-card-1-grid">
                                        <div class="row">
                                            <?php if ($paging->ejecutar()==true and $paging->numRegistrosMostrados() > 0){
                                            while($datos = $paging->fetchResultado()){?>
                                            <div class="col-md-6">
                                                <div class="c-content-blog-post-card-1 c-option-2 c-bordered">
                                                    <div class="c-media c-content-overlay">
                                                        <a href="detalleentrada.php?titulo=<?php echo $datos['titulo']; ?>"><img class="c-overlay-object img-responsive" src="class/img/blog/<?php echo $datos['img'] ?>" alt=""></a>
                                                    </div>
                                                    <div class="c-body">
                                                        <div class="c-title c-font-bold c-font-uppercase">
                                                            <a href="detalleentrada.php?titulo=<?php echo $datos['titulo']; ?>"><?php echo $datos['titulo'] ?></a>
                                                        </div>
                                                        <div class="c-author">
                                                            FECHA: <span class="c-font-uppercase"><?php echo $datos['fecha-creacion'] ?></span>
                                                        </div>

                                                        <div class="c-panel">
                                                            <ul class="c-tags c-theme-ul-bg">
                                                                <?php
                                                                $conn->conectar();
                                                                $sqlcat = "SELECT * FROM categorias WHERE id='".$datos['categoria']."'";
                                                                $rscat=$conn->query($sqlcat);
                                                                $cat=$rscat->fetch_assoc();
                                                                ?>
                                                                <li><a href="#"><?php echo $cat['nombre'];?></a></li>
                                                            </ul>
                                                        </div>
                                                        <p>
                                                            <?php echo $datos['descripcion'] ?>
                                                        </p>
                                                        <?php if($id_tipo==1){ ?>
                                                        <div class="">
                                                            <a href="editar.php?post=<?php echo $datos['id']?>" class="btn btn-info btn-xs" title="Editar"><i class="fa fa-cog"></i></a>
                                                            <a class="btn btn-danger btn-xs" title="Eliminar" onclick="eliminar('<?php echo $datos['id']?>','<?php echo $datos['titulo']?>')"><i class="fa fa-times"></i></a>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }} ?>
                                        </div>
                                        <div class="c-pagination">
                                            <?php  echo "<br />Paginas<br />".$paging->fetchNavegacion(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <form action="blog.php" method="GET">
                                        <div class="input-group">
                                            <input type="text" name="buscar" id="buscar" class="form-control c-square c-theme-border" placeholder="Buscar..." required="">
                                            <span class="input-group-btn">
                                                <button class="btn c-theme-btn c-theme-border c-btn-square" type="submit">Buscar!</button>
                                            </span>
                                        </div>
                                    </form>
                                    <div class="c-content-ver-nav">
                                        <div class="c-content-title-1 c-theme c-title-md c-margin-t-40">
                                            <h3 class="c-font-bold c-font-uppercase">Categorias</h3>
                                            <div class="c-line-left c-theme-bg"></div>
                                        </div>
                                        <ul class="c-menu c-arrow-dot1 c-theme">
                                            <?php if(mysqli_num_rows($rscategorias)>0){
                                            while($categorias = mysqli_fetch_array($rscategorias,MYSQLI_ASSOC)){ ?>
                                            <li><a href="blog.php?categoria=<?php echo $categorias['id']; ?>"><?php echo $categorias['nombre']; ?></a></li>
                                            <?php }} ?>
                                        </ul>
                                    </div>
                                    <div class="c-content-tab-1 c-theme c-margin-t-30">
                                        <div class="nav-justified">
                                            <ul class="nav nav-tabs nav-justified">
                                                <li class="active"><a href="#blog_recent_posts" data-toggle="tab">Entradas Recientes</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="blog_recent_posts">
                                                    <ul class="c-content-recent-posts-1">
                                                        <?php
                                                        if(mysqli_num_rows($rslimit)>0){
                                                        while($entradasrecientes = mysqli_fetch_array($rslimit,MYSQLI_ASSOC)){
                                                        ?>
                                                        <li>
                                                            <div class="c-image">
                                                                <img src="class/img/blog/<?php echo $entradasrecientes['img'] ?>" alt="" class="img-responsive">
                                                            </div>
                                                            <div class="c-post">
                                                                <a href="detalleentrada.php?titulo=<?php echo $entradasrecientes['titulo']; ?>" class="c-title">
                                                                    <?php  echo $entradasrecientes['titulo']; ?>
                                                                </a>
                                                                <div class="c-date"><?php  echo $entradasrecientes['fecha-creacion']; ?></div>
                                                            </div>
                                                        </li>
                                                        <?php
                                                        }
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
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
        function eliminar(id,nombre){
            swal({
                title: 'Quieres Eliminar La Entrada?\n'+nombre,
                text: "No puedes revertir el proceso!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'No, Cancelar!',
                confirmButtonClass: 'btn btn-info',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false
            }).then(function () {
                $.ajax({
                    type:"POST",
                    url: "consultas.php",
                    dataType:"text",
                    data:{
                        consulta:'eliminar',
                        id:id
                    }
                }).done(function(data) {
                    if(data=="true"){
                        swal(
                        'Eliminado!',
                        'La entrada se ha eliminado.',
                        'success'
                      )
                        window.location="blog.php";
                    }
                    if(data=="false"){
                        swal(
                       'Error!',
                       'Ocurrio un error al eliminar la entrada.',
                       'error'
                     )
                    }
                });
            }, function (dismiss) {
                if (dismiss === 'cancel') {
                }
            })
        }
    </script>
</body>
</html>