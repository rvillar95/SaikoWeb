<?php $user = $this->session->userdata("administrador");
header("Content-Type: text/html;charset=utf-8");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Saiko Makki | Administrador</title>

    <link rel="shortcut icon" href="<?php echo base_url() ?>lib/img/logo.png" />
    <link href="<?php echo base_url() ?>lib/css/toastr.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/sweetalert.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/fonts/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>lib/css/style.css" rel="stylesheet">
</head>

<body class="top-navigation">
    <input type="text" class="hidden" id="nomAdmin" value="<?= $user[0]->usuarioAdministrador ?>">
    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="navbar-header page-scroll">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <i class="fa fa-reorder"></i>
                        </button>

                        <img src="<?php echo base_url() ?>lib/img/logo.png" class="img-responsive" style="height: 75px; margin:5px;" />
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a class="page-scroll" href="<?php echo base_url() ?>Administrador" style=" padding-top: 30px; color:#58167D;">Promociones</a></li>
                            <li><a class="page-scroll " href="<?php echo base_url() ?>Carta" style="padding-top: 30px; color:#58167D;">Carta</a></li>
                            <li><a class="page-scroll " href="<?php echo base_url() ?>Galeria" style="padding-top: 30px; color:#58167D;">Galeria</a></li>
                            <li><a class="page-scroll " href="<?php echo base_url() ?>Nosotros" style="padding-top: 30px; color:#58167D;">Nosotros</a></li>
                            <li class="active"><a class="page-scroll " href="<?php echo base_url() ?>Horarios" style="padding-top: 30px; color:#58167D;">Horarios</a></li>
                            <li><a class="page-scroll " href="<?php echo base_url() ?>Redes" style="padding-top: 30px; color:#58167D;">Redes Sociales</a></li>
                        </ul>

                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a>
                                    <i class="fa fa-user"></i> <?= $user[0]->usuarioAdministrador ?>
                                </a>
                            </li>
                            <li>
                                <a id="cerrar">
                                    <i class="fa fa-sign-out"></i> Salir
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="wrapper wrapper-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #58167D;">
                                        <h5 style="color: white">Misión</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <!--<form id="form_producto" name="login" method="post" enctype="multipart/form-data">-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Descripcion Misión</label>
                                                <textarea required id="mision" name="nombre" placeholder="Ingrese la Misión" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="form-group form-group col-lg-12 col-md-12 col-sm-4 col-xs-12"><button type="submit" id="btnEditarMision" class="btn btn-primary" style="background-color: #58167D; color: white; ">Editar Misión</button></div>
                                            <!-- </form>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #58167D;">
                                        <h5 style="color: white">Tabla Misión</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <h2><strong>Registros de Misión</strong></h2>
                                            <div class="table-responsive">
                                                <table id="tablaMision" class="table table-striped table-bordered table-hover tablaProducto">
                                                    <thead>
                                                        <tr>
                                                            <th>Misión</th>
                                                            <th>Estado</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbodyMision">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #58167D;">
                                        <h5 style="color: white">Visión</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <!--<form id="form_producto" name="login" method="post" enctype="multipart/form-data">-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Descripcion Visión</label>
                                                <textarea required id="vision" name="vision" placeholder="Ingrese la Visión" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="form-group form-group col-lg-12 col-md-12 col-sm-4 col-xs-12"><button type="submit" id="btnEditarVision" class="btn btn-primary" style="background-color: #58167D; color: white; ">Editar Visión</button></div>
                                            <!-- </form>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #58167D;">
                                        <h5 style="color: white">Tabla Visión</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <h2><strong>Registros de Visión</strong></h2>
                                            <div class="table-responsive">
                                                <table id="tablaVision" class="table table-striped table-bordered table-hover tablaProducto">
                                                    <thead>
                                                        <tr>
                                                            <th>Visión</th>
                                                            <th>Estado</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbodyVision">
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #58167D;">
                                        <h5 style="color: white">Nosotros</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <!--<form id="form_producto" name="login" method="post" enctype="multipart/form-data">-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Descripcion Nosotros</label>
                                                <textarea required id="nosotros" name="nosotros" placeholder="Ingrese Nosotros" class="form-control" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="form-group form-group col-lg-12 col-md-12 col-sm-4 col-xs-12"><button type="submit" id="btnEditarNosotros" class="btn btn-primary" style="background-color: #58167D; color: white; ">Editar Nosotros</button></div>
                                            <!-- </form>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #58167D;">
                                        <h5 style="color: white">Tabla Nosotros</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <h2><strong>Registros de Nosotros</strong></h2>
                                            <div class="table-responsive">
                                                <table id="tablaVision" class="table table-striped table-bordered table-hover tablaProducto">
                                                    <thead>
                                                        <tr>
                                                            <th>Nosotros</th>
                                                            <th>Estado</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbodyNosotros">
                                                    </tbody>
                                                </table>
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
    <script>
        getMision();
        getVision();
    getNosotros();
        function getMision() {
            $("#tbodyMision").empty();
            $.getJSON('getMision', function(result) {
                var fila = "";
                $.each(result, function(i, o) {

                    fila += "<tr>"
                    fila += "   <td>" + o.descripcionMision + "</td>";
                    if (o.estadoMision == 1) {
                        fila += "   <td><button  id='editarEstadoMision' value='2' class='btn btn-danger'>Desactivar</button></td>";
                    } else {
                        fila += "   <td><button  id='editarEstadoMision' value='1' class='btn btn-info'>Activar</button></td>";
                    }
                    fila += "</tr>";
                    $("#tbodyMision").append(fila);
                });
            });
        }

        $("body").on("click", "#editarEstadoMision", function(e) {
            e.preventDefault();
            var resultado = $(this).val();
            $.ajax({
                url: 'editarEstadoMision',
                type: 'POST',
                dataType: 'json',
                data: {
                    "estado": resultado
                }
            }).then(function(msg) {
                if (msg.msg == "ok") {
                    getMision();
                    toastr.success("", "Actualizado con Exito")
                }
            });
        });

        function getVision() {
            $("#tbodyVision").empty();
            $.getJSON('getVision', function(result) {
                var fila = "";
                $.each(result, function(i, o) {

                    fila += "<tr>"
                    fila += "   <td>" + o.descripcionVision + "</td>";
                    if (o.estadoVision == 1) {
                        fila += "   <td><button  id='editarEstadoVision' value='2' class='btn btn-danger'>Desactivar</button></td>";
                    } else {
                        fila += "   <td><button  id='editarEstadoVision' value='1' class='btn btn-info'>Activar</button></td>";
                    }
                    fila += "</tr>";
                    $("#tbodyVision").append(fila);
                });
            });
        }

        $("body").on("click", "#editarEstadoVision", function(e) {
            e.preventDefault();
            var resultado = $(this).val();
            $.ajax({
                url: 'editarEstadoVision',
                type: 'POST',
                dataType: 'json',
                data: {
                    "estado": resultado
                }
            }).then(function(msg) {
                if (msg.msg == "ok") {
                    getVision();
                    toastr.success("", "Actualizado con Exito")
                }
            });
        });

        function getNosotros() {
            $("#tbodyNosotros").empty();
            $.getJSON('getNosotros', function(result) {
                var fila = "";
                $.each(result, function(i, o) {

                    fila += "<tr>"
                    fila += "   <td>" + o.descripcionNosotros + "</td>";
                    if (o.estadoNosotros == 1) {
                        fila += "   <td><button  id='editarEstadoNosotros' value='2' class='btn btn-danger'>Desactivar</button></td>";
                    } else {
                        fila += "   <td><button  id='editarEstadoNosotros' value='1' class='btn btn-info'>Activar</button></td>";
                    }
                    fila += "</tr>";
                    $("#tbodyNosotros").append(fila);
                });
            });
        }

        $("body").on("click", "#editarEstadoNosotros", function(e) {
            e.preventDefault();
            var resultado = $(this).val();
            $.ajax({
                url: 'editarEstadoNosotros',
                type: 'POST',
                dataType: 'json',
                data: {
                    "estado": resultado
                }
            }).then(function(msg) {
                if (msg.msg == "ok") {
                    getNosotros();
                    toastr.success("", "Actualizado con Exito")
                }
            });
        });

        $("#btnEditarNosotros").click(function(e){
            e.preventDefault();
            var resultado = $("#nosotros").val();
            $.ajax({
                url: 'editarNosotros',
                type: 'POST',
                dataType: 'json',
                data: {
                    "descripcion": resultado
                }
            }).then(function(msg) {
                if (msg.msg == "ok") {
                    getNosotros();
                    toastr.success("", "Actualizado con Exito")
                }
            });
        });

        $("#btnEditarVision").click(function(e){
            e.preventDefault();
            var resultado = $("#vision").val();
            $.ajax({
                url: 'editarVision',
                type: 'POST',
                dataType: 'json',
                data: {
                    "descripcion": resultado
                }
            }).then(function(msg) {
                if (msg.msg == "ok") {
                    getVision();
                    toastr.success("", "Actualizado con Exito")
                }
            });
        });

        $("#btnEditarMision").click(function(e){
            e.preventDefault();
            var resultado = $("#mision").val();
            $.ajax({
                url: 'editarMision',
                type: 'POST',
                dataType: 'json',
                data: {
                    "descripcion": resultado
                }
            }).then(function(msg) {
                if (msg.msg == "ok") {
                    getNosotros();
                    toastr.success("", "Actualizado con Exito")
                }
            });
        });
    </script>
</body>

</html>