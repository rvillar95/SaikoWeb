<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pascuala Delivery | Administrador</title>
    <link href="<?php echo base_url() ?>lib/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://pascualadelivery.cl/lib/img/Logo.jpg" />
    <!-- Animation CSS -->
    <link href="<?php echo base_url() ?>lib/css/estilosLuz.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>lib/css/fuente.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/blueimp-gallery.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="lib/css/style.css" rel="stylesheet">
</head>

<body class="black-bg">


    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding: 50px;">
            <div class="middle-box text-center loginscreen animated fadeInDown" style="z-index: 1000; padding: 20px; border: 3px solid red; background-color: black">
                <center>
                    <h1 class="logo-name"> <img src="<?php echo base_url() ?>lib/img/Logo.jpg" class="img-responsive img-circle" style="height: 100px; margin:5px;" /></h1>
                </center>

                <h3 style="color:white;">Bienvenido al Login de Pascuala Delivery</h3>
                <p style="color:white">Aca podras gestionar a tu manera, tu sitio web.
                    <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
                </p>
                <p style="color:white;">Ingresa tu Usuario y Contraseña</p>
                <form id="login" name="login" autocomplete="off" target="_top">
                    <div class="form-group">
                        <input id="username" type="text" name="j_username" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" id="clave" placeholder="Password">
                    </div>
                    <button type="submit" id="btnIngresar" style="background-color: white; color: black;" class="btn block full-width m-b">Entrar</button>
                </form>
                <strong style="color: white">Copyright</strong> <a href="https://www.solucionesvillar.cl" style="color: whitesmoke">Soluciones Villar &copy; 2018-2020</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>

    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url() ?>lib/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url() ?>lib/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>lib/js/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url() ?>lib/js/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url() ?>lib/js/inspinia.js"></script>
    <script src="<?php echo base_url() ?>lib/js/pace.min.js"></script>
    <script src="<?php echo base_url() ?>lib/js/wow.min.js"></script>
    <script src="<?php echo base_url() ?>lib/js/myjs.js"></script>

    <script>
        function check(e) {
            tecla = (document.all) ? e.keyCode : e.which;

            //Tecla de retroceso para borrar, siempre la permite
            if (tecla == 8 || tecla == 107) {
                return true;
            }

            // Patron de entrada, en este caso solo acepta numeros y letras
            patron = /[0-9]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }

        $("#btnIngresar").click(function(e) {
            e.preventDefault();

            IniciarSesionAdmin();

        });
    </script>

</body>

</html>