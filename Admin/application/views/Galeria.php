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
                            <li class="active"><a class="page-scroll " href="<?php echo base_url() ?>Galeria" style="padding-top: 30px; color:#58167D;">Galeria</a></li>
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
                        <div class="col-lg-4">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #58167D;">
                                        <h5 style="color: white">Formulario Galeria</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Foto Galeria</label>
                                                <input type="file" name="foto" id="foto" placeholder="Seleccione el archivo" class="form-control">
                                            </div>
                                            <div class="form-group form-group col-lg-12 col-md-12 col-sm-4 col-xs-12"><button type="submit" id="btnAddGaleria" class="btn btn-primary" style="background-color: #58167D; color: white; ">Agregar Galeria</button></div>
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
                                        <h5 style="color: white">Tabla Galeria</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <h2><strong>Registros de Galeria</strong></h2>
                                            <div class="table-responsive">
                                                <table id="tablaGaleria" class="table table-striped table-bordered table-hover tablaGaleria">
                                                    <thead>
                                                        <tr>
                                                            <th>Foto</th>
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
        $("body").on("click", "#editarEstadoGaleria", function(e) {
            e.preventDefault();
            var variable = $(this).val();
            variable = variable.split(",");
            var id = variable[0];
            var estado = variable[1];
            $.ajax({
                url: 'editarGaleria',
                type: 'POST',
                dataType: 'json',
                data: {
                    "id": id,
                    "estado": estado
                }
            }).then(function(msg) {
                if (msg.msg == "ok") {
                    setTimeout(() => {
                        var table = $('.tablaGaleria').DataTable();
                        table.ajax.reload(function(json) {
                            $('#editarEstadoGaleria').val(json.lastInput);
                        });
                    }, 500);
                    swal("Editado!", "Estado editado con exito.", "success");
                }
            });
        });

        $("#btnAddGaleria").click(function(e) {
            e.preventDefault();
            var file_data = $('#foto').prop('files')[0];

            if (file_data == undefined) {
                swal("Problemas", "Seleccione una imagen.", "error");
            } else {
                var form_data = new FormData();
                form_data.append('foto', file_data);
                $.ajax({
                    url: 'addGaleria', // point to server-side PHP script 
                    dataType: 'text', // what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function(msg) {
                        if (msg == "ok") {
                            setTimeout(() => {
                                var table = $('.tablaGaleria').DataTable();
                                table.ajax.reload(function(json) {
                                    $('#btnAddGaleria').val(json.lastInput);
                                });
                            }, 500);
                            swal("Agregado!", "Imagen subida a Galeria.", "success");
                        } else {
                            swal("Error!", "Comuniquese con soporte.", "error");
                        }

                    }
                });
            }
        });

        $('.tablaGaleria').DataTable({
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
                url: "<?php echo base_url() ?>getGaleria",
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
    </script>
</body>

</html>