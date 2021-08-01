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
                            <li class="active"><a class="page-scroll" href="<?php echo base_url() ?>Administrador" style=" padding-top: 30px; color:#58167D;">Promociones</a></li>
                            <li><a class="page-scroll " href="<?php echo base_url() ?>Carta" style="padding-top: 30px; color:#58167D;">Carta</a></li>
                            <li><a class="page-scroll " href="<?php echo base_url() ?>Galeria" style="padding-top: 30px; color:#58167D;">Galeria</a></li>
                            <li><a class="page-scroll " href="<?php echo base_url() ?>Nosotros" style="padding-top: 30px; color:#58167D;">Nosotros</a></li>
                            <li><a class="page-scroll " href="<?php echo base_url() ?>Horarios" style="padding-top: 30px; color:#58167D;">Horarios</a></li>
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
                        <div class="col-lg-12">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #58167D;">
                                        <h5 style="color: white">Formulario Promociones</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <!--<form id="form_producto" name="login" method="post" enctype="multipart/form-data">-->
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Titulo Promocion</label>
                                                <input type="text" required id="nombre" maxlength="100" placeholder="Ingrese un Titulo" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Descripcion Promocion</label>
                                                <textarea required id="descripcion" max="250" maxlength="100" placeholder="Ingrese una descripcion de la promoción" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Precio Antiguo</label>
                                                <input type="text" required id="antiguo" maxlength="100" placeholder="$15000" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Precio Nuevo</label>
                                                <input type="text" required id="nuevo" maxlength="100" placeholder="$12000" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Seleccione el tipo</label>
                                                <select id="tipo" class="form-control"></select>
                                            </div>
                                            <div id="cantidad" style="display: none;" class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Cantidad Tickets</label>
                                                <input type="number" required id="cant" maxlength="100" placeholder="20" class="form-control">
                                            </div>
                                            <div id="div_fechahasta" style="display: none;" class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Fecha Desde</label>
                                                <input type="datetime-local" value="<?php echo date('Y') . '-' . date('m') . '-' . date('d') . 'T' . strftime("%H:%M") ?>" min="<?php echo date('Y') . '-' . date('m') . '-' . date('d') . 'T' . strftime("%H:%M") ?>" required id="hasta" name="nuevo" maxlength="100" class="form-control">
                                            </div>
                                            <div id="div_fechadesde" style="display: none;" class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Fecha Hasta</label>
                                                <input type="datetime-local" value="<?php echo date('Y') . '-' . date('m') . '-' . date('d') . 'T' . strftime("%H:%M") ?>" min="<?php echo date('Y') . '-' . date('m') . '-' . date('d') . 'T' . strftime("%H:%M") ?>" required id="desde" name="nuevo" maxlength="100" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Foto Promocion</label>
                                                <input type="file" name="foto" id="foto" placeholder="Seleccione el archivo" class="form-control">
                                            </div>
                                            <div class="form-group form-group col-lg-12 col-md-12 col-sm-4 col-xs-12"><button type="submit" id="btnAgregarPromocion" class="btn btn-primary" style="background-color: #58167D; color: white; ">Agregar Promocion</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #58167D;">
                                        <h5 style="color: white">Tabla Promociones</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <h2><strong>Registros de Promociones</strong></h2>
                                            <div class="table-responsive">
                                                <table id="tablaPromociones" class="table table-striped table-bordered table-hover tablaPromociones">
                                                    <thead>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Descripción</th>
                                                            <th>Precio Antiguo</th>
                                                            <th>Precio Nuevo</th>
                                                            <th>C. Total</th>
                                                            <th>C. Actual</th>
                                                            <th>Total Usuarios</th>
                                                            <th>F. Inicio</th>
                                                            <th>F. Fin</th>
                                                            <th>Imagen</th>
                                                            <th>Tipo</th>
                                                            <th>Estado</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

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
        $(document).ready(function() {
            getTipo();

            $('.tablaPromociones').DataTable({
                language: {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Registros _MENU_ ",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla =(",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                        "copy": "Copiar",
                        "colvis": "Visibilidad"
                    }
                },
                "ajax": {
                    url: "<?php echo base_url() ?>getPromociones",
                    type: 'GET'

                },
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'Galeria'
                    },
                    {
                        extend: 'pdf',
                        title: 'Galeria'
                    },
                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');
                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]
            });

            function getTipo() {
                $.ajax({
                    url: 'getTipoPromocion',
                    type: 'POST',
                    dataType: 'json',
                }).then(function(msg) {
                    var fila = "";
                    fila += "<option disabled selected>Seleccione el tipo</option>";
                    $("#tipo").empty();
                    $.each(msg, function(i, o) {
                        fila += "<option value='" + o.idTipo_Promocion + "'>" + o.nombrePromocion + "</option>";
                        $("#tbodyMision").append(fila);
                    });
                    $("#tipo").append(fila);
                });
            }

            $("#tipo").change(function(e) {
                e.preventDefault();
                var seleccion = $(this).val();
                if (seleccion == 1) {
                    var divDesde = document.getElementById("div_fechadesde");
                    var divHasta = document.getElementById("div_fechahasta");
                    var cantidad = document.getElementById("cantidad");
                    divDesde.style.display = "block";
                    divHasta.style.display = "block";
                    cantidad.style.display = "none";
                } else if (seleccion == 2) {
                    var divDesde = document.getElementById("div_fechadesde");
                    var divHasta = document.getElementById("div_fechahasta");
                    var cantidad = document.getElementById("cantidad");
                    divDesde.style.display = "none";
                    divHasta.style.display = "none";
                    cantidad.style.display = "block";

                }
            });

            $("body").on("click", "#editarEstadoPromocion", function(e) {
                e.preventDefault();
                var valor = this.value;
                var variables = valor.split(",");
                var id = variables[0];
                var estado = variables[1];
                var mensaje = "";
                if (estado == 2) {
                    mensaje = "Promocion desactivada de forma exitosa";
                } else {
                    mensaje = "Promocion activada de forma exitosa";
                }
                $.ajax({
                    url: 'editarEstadoPromocion',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        "id": id,
                        "estado": estado
                    }
                }).then(function(msg) {
                    if (msg.msg == "ok") {
                        toastr.success("", mensaje);
                        setTimeout(() => {
                            var table = $('.tablaPromociones').DataTable();
                            table.ajax.reload(function(json) {
                                $('#editarEstadoPromocion').val(json.lastInput);
                            });
                        }, 500);
                    } else {
                        toastr.error("", "Error");
                    }
                });
            });

            $("#btnAgregarPromocion").click(function(e) {
                e.preventDefault();
                var file_data = $('#foto').prop('files')[0];
                var nombre = $("#nombre").val();
                var descripcion = $("#descripcion").val();
                var antiguo = $("#antiguo").val();
                var nuevo = $("#nuevo").val();
                console.log(file_data);

                if (nombre != "") {
                    if (descripcion != "") {
                        if (antiguo != "") {
                            if (nuevo != "") {

                                var tipo = $("#tipo").val();
                                if (tipo == 1) {
                                    if (file_data != undefined) {
                                        var desde = $("#desde").val();
                                        var hasta = $("#hasta").val();
                                        if (desde != "") {
                                            if (hasta != "") {
                                                var form_data = new FormData();
                                                form_data.append('foto', file_data);
                                                form_data.append('nombre', nombre);
                                                form_data.append('descripcion', descripcion);
                                                form_data.append('antiguo', antiguo);
                                                form_data.append('nuevo', nuevo);
                                                form_data.append('tipo', tipo);
                                                form_data.append('desde', desde);
                                                form_data.append('hasta', hasta);
                                                $.ajax({
                                                    url: 'addPromoTiempo',
                                                    dataType: 'text', // what to expect back from the PHP script, if anything
                                                    cache: false,
                                                    contentType: false,
                                                    processData: false,
                                                    type: 'post',
                                                    data: form_data

                                                }).then(function(msg) {
                                                    if (msg == "ok") {
                                                        swal("Exito", "Notificaciones enviadas con exito.", "success");
                                                        setTimeout(() => {
                                                            var table = $('.tablaPromociones').DataTable();
                                                            table.ajax.reload(function(json) {
                                                                $('#btnAgregarPromocion').val(json.lastInput);
                                                            });
                                                        }, 500);
                                                    } else {
                                                        swal("Error!", "Error al enviar notificación.", "error");
                                                    }
                                                });
                                            } else {
                                                swal("Error!", "Ingrese fecha desde.", "error");
                                            }
                                        } else {
                                            swal("Error!", "Ingrese fecha hasta.", "error");
                                        }
                                    } else {
                                        swal("Error!", "Ingrese la foto.", "error");
                                    }

                                } else if (tipo == 2) {

                                    var cant = $("#cant").val();
                                    if (file_data != undefined) {
                                        if (cant != "") {
                                            if (cant > 0) {
                                                var form_data = new FormData();
                                                form_data.append('foto', file_data);
                                                form_data.append('nombre', nombre);
                                                form_data.append('descripcion', descripcion);
                                                form_data.append('antiguo', antiguo);
                                                form_data.append('nuevo', nuevo);
                                                form_data.append('tipo', tipo);
                                                form_data.append('cantidad', cant);
                                                $.ajax({
                                                    url: 'addPromoCantidad',
                                                    dataType: 'text', // what to expect back from the PHP script, if anything
                                                    cache: false,
                                                    contentType: false,
                                                    processData: false,
                                                    type: 'post',
                                                    data: form_data

                                                }).then(function(msg) {
                                                    if (msg == "ok") {
                                                        swal("Exito", "Notificaciones enviadas con exito.", "success");
                                                    } else {
                                                        swal("Error!", "Error al enviar notificación.", "error");
                                                    }
                                                });
                                            } else {
                                                swal("Error!", "Ingrese un numero mayor a 0.", "error");
                                            }
                                        } else {
                                            swal("Error!", "Ingrese una cantidad.", "error");
                                        }
                                    } else {
                                        swal("Error!", "Ingrese la foto.", "error");
                                    }
                                } else if (tipo == null) {
                                    swal("Error!", "Seleccione el tipo de promoción.", "error");
                                }

                            } else {
                                swal("Error!", "Ingrese el precio nuevo.", "error");
                            }
                        } else {
                            swal("Error!", "Ingrese el precio antiguo.", "error");
                        }
                    } else {
                        swal("Error!", "Ingrese la descripcion.", "error");
                    }
                } else {
                    swal("Error!", "Ingrese el titulo.", "error");
                }




            })
        });
    </script>
</body>

</html>