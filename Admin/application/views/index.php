<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Menu Administrador</title>
    <link href="<?php echo base_url() ?>lib/css/toastr.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/fonts/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/style.css" rel="stylesheet">
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"><img src="<?php echo base_url() ?>lib/img/logo.png" alt=""></h1>

            </div>
            <h3>Bienvenido</h3>
            <p>Aca podras gestionar tu aplicacion movil.</p>
            <p>Ingresa con tu usuario y clave</p>
            <form class="m-t" role="form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Usuario" id="usuario" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Clave" id="clave" required="">
                </div>
                <button type="submit" id="btnIngresar" class="btn btn-primary block full-width m-b">Ingresar</button>
            </form>
            <p class="m-t"> <small>Soluciones Villar &copy; 2017 - <?php echo date('Y') ?></small> </p>
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="<?php echo base_url() ?>lib/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url() ?>lib/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>lib/js/toastr.min.js" type="text/javascript"></script>

</body>
<script>
    $("#btnIngresar").click(function(e) {
        e.preventDefault();
        var usuario = $("#usuario").val();
        var clave = $("#clave").val();
        if (usuario == "" || clave == "") {
            toastr.error("", "Ingrese todos los datos.")
        } else {
            $.ajax({
                url: 'iniciarSesion',
                type: 'POST',
                dataType: 'json',
                data: {
                    "usuario": usuario,
                    "clave": clave
                }
            }).then(function(msg) {
                if (msg.msg == "error") {
                    toastr.error("", "Usuario o clave incorrectos.")
                } else if (msg.msg == "administrador") {
                    window.location.href = "Administrador";
                } 

            });
        }
    });
</script>

</html>