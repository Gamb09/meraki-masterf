<?php

session_start();
if(isset($_SESSION['user'])){

}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MerakiMagazine | Registro</title>
    <meta charset="utf-8">
    <meta content="" name="description" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="class/img/logo.png">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link href="class/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="class/plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="class/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="class/css/animate.css" rel="stylesheet" />
    <link href="class/css/style.css" rel="stylesheet" />
    <link href="class/css/style-responsive.css" rel="stylesheet" />
    <link href="class/css/teme.css" rel="stylesheet" id="theme" />
    <link href="class/css/custom.css" rel="stylesheet" id="theme" />
    <link rel="stylesheet" href="class/css/pace.css">
    <script src="class/plugins/pace/pace.min.js"></script>
</head>
<body class="pace-top">
    <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <div class="login-cover">
        <div class="login-cover-image"><img src="class/img/home4.jpg" data-id="login-cover-image" alt="" /></div>
        <div class="login-cover-bg"></div>
    </div>
    <div id="page-container" class="fade">
        <div class="login login-v2-reg" data-pageload-addclass="">
            <div class="login-content">
                <div class="text-center m-b-20">
                    <img src="class/img/logo2.png" alt="" class="text-center" height="60px" width="175px">
                </div>
                <form action="App/login/registro.php" method="POST" class="margin-bottom-0">
                    <h4 class="text-white text-center">Regístrate</h4>
                    <div class="form-group m-b-20 alert alert-success" style="display: none" id="exito">
                        <p class="">Registro Exitoso. <a href="index.php">Inicia Sesión</a></p>
                    </div>
                    <div class="form-group m-b-20 alert alert-danger" style="display: none" id="erroremail">
                        <p class="">Ya se encuentra registrado el Email.</p>
                    </div>
                    <div class="form-group m-b-20 alert alert-danger" style="display: none" id="recaptcha">
                        <p class="">El valor no recaptcha no se ha introducido.</p>
                    </div>
                    <div class="form-group m-b-20 alert alert-danger" style="display: none" id="error">
                        <p class="">Las contraseñas no coinciden.</p>
                    </div>
                    <div class="form-group m-b-20">
                        <input type="text" class="form-control input-lg" placeholder="Usuario" id="usuario" name="usuario" required />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="email" class="form-control input-lg" placeholder="Correo Electrónico" id="email" name="email" required />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control input-lg" placeholder="Contraseña" id="clave1" name="clave1" required />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control input-lg" onKeyUp="verificarpass()" placeholder="Repetir Contraseña" id="clave2" name="clave2" required />
                        <p class="text-danger text-right" id="verpass" style="display: none">las contraseñas no coinciden.</p>
                    </div>

                    <div class=" m-b-20 text-center">
                        <div class="g-recaptcha" data-sitekey="6LcSlDAUAAAAANTM_pkOc5wIyBYHycuwbpKhPJE5" data-theme="dark"></div>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" id="btnregistrar" class="btn btn-primary btn-block btn-lg">Regístrate</button>
                    </div>
                    <div class="m-t-20">
                        Ya tienes una cuenta? <a href="index.php">Inicia Sesión.</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="class/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="class/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="class/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="class/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="class/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="class/js/login.js"></script>
    <script src="class/js/app.js"></script>
    <script>
        function verificarpass() {

            var clave1 = $('#clave1').val();
            var clave2 = $('#clave2').val();

            if (clave1 != clave2) {
                $('#verpass').show();

            }
            if (clave1 == clave2) {
                $('#verpass').hide();
            }
        }

    </script>
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
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
    <?php if(isset($_GET['err'])){
    if($_GET['err']==2){
    ?>
    <script>
        $('#erroremail').show();
    </script>

    <?php
    }
    if($_GET['err']==1){?>
    <script>
        $('#error').show();
    </script>
    <?php
    }
    }
    ?>
    <?php if(isset($_GET['recaptcha'])){
    if($_GET['recaptcha']==0){
    ?>
    <script>
        $('#recaptcha').show();
    </script>

    <?php
    }
    }
    ?>
</body>
</html>