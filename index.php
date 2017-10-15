<?php
session_start();
if(isset($_SESSION['user'])){

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MerakiMagazine | Inicio</title>
    <meta charset="utf-8">
    <meta content="" name="description" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://apis.google.com/js/api:client.js"></script>
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
        <div class="login login-v2" data-pageload-addclass="animated">
            <div class="login-content">
                <div class="text-center m-b-20">
                    <img src="class/img/logo2.png" alt="" class="text-center" height="60px" width="175px">
                </div>
                <form action="App/login/login.php" method="POST" class="margin-bottom-0">
                    <h4 class="text-white text-center">Iniciar Sesión</h4>
                    <div class="form-group m-b-20">
                        <input type="text" id="usuario" name="usuario" class="form-control input-lg" placeholder="Correo Electrónico" required="" />
                    </div>
                    <div class="form-group m-b-5 ">
                        <input type="password" id="clave" name="clave" class="form-control input-lg" placeholder="Contraseña" required="" />
                    </div>
                    <div class="m-b-20 pull-right">
                        <a href="forgotpassword.php">Olvidaste tu contraseña?.</a>
                    </div>
                    <div class="form-group m-b-20" style="display: none" id="error">
                        <p class="text-danger">Usuario o Contraseña incorrectos.</p>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Iniciar Sesión</button>
                    </div>
                    <div class="m-t-20">
                        <a href="#" id="facebook" class="btn btn-fb btn-sm width-p30"><i class="fa fa-facebook left"></i> Facebook</a>
                        <a href="#" id="google" class="btn btn-gl btn-sm width-p30"><i class="fa fa-google left"></i> Google</a>
                        <div id="name"></div>
                    </div>
                    <div class="m-t-20">
                        No eres miembro? <a href="register.php">Registrate.</a>
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
        var googleUser = {};
        var startApp = function () {
            gapi.load('auth2', function () {

                auth2 = gapi.auth2.init({
                    client_id: '417777041377-d28qpta2daluh9bg5mgqgda33f9r3cf3.apps.googleusercontent.com',
                    cookiepolicy: 'single_host_origin',

                    scope: 'email'
                });
                attachSignin(document.getElementById('google'));
            });
        };

        function attachSignin(element) {
            console.log(element.id);
            auth2.attachClickHandler(element, {},
                function (googleUser) {

                    var name = googleUser.getBasicProfile().getName();
                    var id = googleUser.getBasicProfile().getId();
                    var email = googleUser.getBasicProfile().getEmail();
                    var service = "google";
                    $.ajax({
                        type: "POST",
                        url: "App/login/sociallogin.php",
                        dataType: "text",
                        data: {
                            name: name,
                            id: id,
                            email: email,
                            service: service,
                        }
                    }).done(function (data) {
                        if (data == "true") {
                            location.href = "home.php";
                        }
                    });
                }, function (error) {

                });
        }
    </script>
    <script>startApp();</script>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_LA/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script>
        $(document).ready(function () {
            window.fbAsyncInit = function () {
                FB.init({
                    appId: '864963176995087',
                    cookie: true,  // enable cookies to allow the server to access
                    status: true,                    // the session
                    xfbml: true,  // parse social plugins on this page
                    version: 'v2.10' // use graph api version 2.8
                });
            };
            var statusChangeCallback = function (response, callback) {
                console.log('statusChangeCallback');
                console.log(response);
                if (response.status === 'connected') {
                    getFacebookData();
                } else {
                    callback(false);
                }
            }
            var checkLoginState = function (callback) {
                FB.getLoginStatus(function (response) {
                    statusChangeCallback(response, function (data) {
                        callback(data);
                    });
                });
            }
            var getFacebookData = function () {
                //console.log('Welcome!  Fetching your information.... ');
                FB.api('/me', { locale: 'en_US', fields: 'name, email' }, function (response) {
                    //window.location="http://merakimagazine.net/coming/";
                    var name = response.name;
                    var id = response.id;
                    var email = response.email;
                    var service = "facebook";
                    $.ajax({
                        type: "POST",
                        url: "App/login/sociallogin.php",
                        dataType: "text",
                        data: {
                            name: name,
                            id: id,
                            email: email,
                            service: service,
                        }
                    }).done(function (data) {
                        if (data == "true") {
                            location.href = "home.php";
                        }
                    });
                });
            }
            var facebookLogin = function () {
                checkLoginState(function (response) {
                    if (!response) {
                        FB.login(function (response) {
                            if (response.status === 'connected')
                                getFacebookData();
                        }, { scope: 'email', return_scopes: true });
                    }
                })
            }
            var facebookLogout = function () {
                FB.getLoginStatus(function (response) {
                    if (response.status === 'connected') {
                        FB.logout(function (response) {
                            location.href = "../";
                        });
                    }
                });
            }
            $(document).on('click', '#facebook', function (e) {
                e.preventDefault();
                facebookLogin();
            })
            $(document).on('click', '#cerrarfb', function (e) {
                e.preventDefault();
                facebookLogout();
            })
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
</body>
</html>
