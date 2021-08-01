<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Saiko Makki</title>

    <link rel="shortcut icon" href="<?php echo base_url() ?>lib/img/logo.png" />
    <link href="<?php echo base_url() ?>lib/css/toastr.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/sweetalert.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/fonts/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/style.css" rel="stylesheet">




    <!-- Animation CSS -->
    <link href="<?php echo base_url() ?>lib/css/estilosLuz.css" rel="stylesheet">

    <!--<link href="<?php echo base_url() ?>lib/css/fuente.css" rel="stylesheet">-->

    <style>
        @font-face {
            font-family: FerroRosso;
            src: url(lib/css/fonts/FerroRosso.ttf);
        }
    </style>
</head>

<body class="top-navigation">
    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="navbar-header page-scroll">
                        <img src="<?php echo base_url() ?>lib/img/logo.png" class="img-responsive" style="height: 75px; margin:5px;" />
                    </div>
                </nav>
            </div>
            <div class="wrapper wrapper-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #58167D;">

                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <div class="col-md-12">
                                                <?php if ($resultado == 1) { ?>
                                                    <h1 style="color:green;">Promoción utilizada de forma correcta!</h1>
                                                <?php } else if ($resultado == 0) { ?>
                                                    <h1 style="color:red;">Promoción ya cobrada!</h1>
                                                <?php } else if ($resultado == 3) { ?>
                                                    <h1 style="color:red;">Promocion fuera de tiempo, lo sentimos!</h1>
                                                <?php } else if ($resultado == 4) { ?>
                                                    <h1 style="color:red;">Sin stock! Lo sentimos, alguien fue mas rapido que tú.</h1>
                                                <?php } else if ($resultado == 2) { ?>
                                                    <h1 style="color:red;">Sin stock! Lo sentimos, alguien fue mas rapido que tú.</h1>
                                                <?php }  else if ($resultado == 99) { ?>
                                                    <h1 style="color:red;">Lo sentimos la promoción ya no es valida.</h1>
                                                <?php } ?>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer">
                <div>
                    <p class="m-t"> <small>Soluciones Villar &copy; 2017 - <?php echo date('Y') ?></small> </p>
                </div>
            </div>

        </div>
    </div>




    <!-- Mainly scripts -->
    <script src="<?php echo base_url() ?>lib/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url() ?>lib/js/datatables.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url() ?>lib/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>lib/js/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url() ?>lib/js/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url() ?>lib/js/inspinia.js"></script>
    <script src="<?php echo base_url() ?>lib/js/pace.min.js"></script>
    <script src="<?php echo base_url() ?>lib/js/toastr.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>lib/js/sweetalert.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>lib/js/myjs.js" type="text/javascript"></script>

</body>

</html>