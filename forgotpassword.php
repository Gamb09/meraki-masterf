<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MerakiMagazine | Recuperar Contraseña</title>
    <meta charset="utf-8">
    <meta content="" name="description" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="shortcut icon" href="class/img/logo.png">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
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
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <div class="login-content">
                <div class="text-center m-b-20">
                    <img src="class/img/logo2.png" alt="" class="text-center" height="60px" width="175px">
                </div>
                <form action="App/login/forgotpassword.php" method="POST" class="margin-bottom-0">
                    <h4 class="text-white text-center">Recuperar Contraseña</h4>
                    <div class="form-group m-b-20 alert alert-danger" style="display: none" id="error">
                        <p class="">El Correo Electrónico introducido no se encuentra registrado.</p>
                    </div>
                    <div class="form-group m-b-20 alert alert-success" style="display: none" id="success">
                        <p class="">Se ha enviado un correo electrónico con las instrucciones para reestablecer tu contraseña. <br> Si no recibes las instrucciones dentro de un minuto o dos, revisa tu bandeja de spam o reenvia tu solicitud.</p>
                    </div>
                    <div class="form-group m-b-20">
                        <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Ingresa tu Correo Electrónico" required="" />
                    </div>

                    <div class="login-buttons">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Enviar Correo</button>
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
        $(document).ready(function () {
            App.init();
        });
    </script>
    <?php if(isset($_GET['err'])){
    ?>
    <script>
        $('#error').show();
    </script>

    <?php
    }
    ?>
    <?php if(isset($_GET['success'])){
    ?>
    <script>
        $('#success').show();
    </script>

    <?php
    }
    ?>
</body>
</html>