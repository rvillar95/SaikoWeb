<?php $user = $this->session->userdata("administrador");
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pascuala Delivery - Administrador</title>
    <link rel="shortcut icon" href="https://pascualadelivery.cl/lib/img/Logo.jpg" />
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
    <input type="text" class="hidden" id="nomAdmin" value="<?= $user[0]->nombreAdmin ?>">
    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="navbar-header page-scroll">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <i class="fa fa-reorder"></i>
                        </button>
                        <img src="<?php echo base_url() ?>lib/img/Logo.jpg" class="img-responsive img-circle" style="height: 75px; margin:5px;" />
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-left">

                            <li><a class="page-scroll" href="<?php echo base_url() ?>Administrador" style="font-family: FerroRosso; font-size: 30px; padding-top: 30px;">Producto</a></li>
                            <li><a class="page-scroll " href="<?php echo base_url() ?>Empresa" style="font-family: FerroRosso; font-size: 30px; padding-top: 30px;">Empresa</a></li>
                            <li class="active"><a class="page-scroll " href="<?php echo base_url() ?>Eventos" style="font-family: FerroRosso; font-size: 30px; padding-top: 30px;">Eventos</a></li>
                            <li><a class="page-scroll " href="<?php echo base_url() ?>Comentarios" style="font-family: FerroRosso; font-size: 30px; padding-top: 30px;">Comentarios</a></li>
                            <li><a class="page-scroll " href="<?php echo base_url() ?>Banner" style="font-family: FerroRosso; font-size: 30px; padding-top: 30px;">Banner</a></li>
                        </ul>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a>
                                    <i class="fa fa-user"></i> <?= $user[0]->nombreAdmin ?>
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
                                    <div class="ibox-title" style="background-color: #d12a11;">
                                        <h5 style="color: white">Formulario Eventos</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Titulo Evento</label>
                                                <input type="text" required id="titulo" maxlength="100" placeholder="Ingrese el titulo del evento" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Descripcion Evento</label>
                                                <input type="text" required id="descripcion" maxlength="100" placeholder="Ingrese una breve descripcion" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Link Evento</label>
                                                <input type="text" required id="link" maxlength="100" placeholder="https://www.facebook.com/pascuala.delivery/media_set/?set=a.1031167983733334" class="form-control">
                                            </div>
                                            <div class="form-group form-group col-lg-12 col-md-12 col-sm-4 col-xs-12"><button type="submit" id="btnAddEvento" class="btn btn-primary" style="background-color: #d12a11; color: white; ">Agregar Evento</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #d12a11;">
                                        <h5 style="color: white">Tabla Productos</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <h2><strong>Registros de Eventos</strong></h2>
                                            <div class="table-responsive">
                                                <table id="tablaEvento" class="table table-striped table-bordered table-hover tablaEvento">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Titulo</th>
                                                            <th>Descripcion</th>
                                                            <th>Link</th>
                                                            <th>Estado</th>
                                                            <th>Accion</th>
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
                    <p><a style="color: #E5C00E;" href="https://www.instagram.com/soluciones_villar/"><strong>&copy; 2020 Soluciones Villar</strong></a><br /></p>
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

            $("#cerrar").click(function(e) {
                e.preventDefault();
                cerrarSesion();
            });

            $("#btnAddEvento").click(function(e) {
                e.preventDefault();
                addEvento();
                setTimeout(() => {
                    var table = $('.tablaEvento').DataTable();
                    table.ajax.reload(function(json) {
                        $('#btnAddEvento').val(json.lastInput);
                    });
                }, 500);
            });

            $('.tablaEvento').DataTable({
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
                    url: "<?php echo base_url() ?>getEventos",
                    type: 'GET'
                },
                "columnDefs": [{
                        "targets": 5,
                        "data": null,
                        "defaultContent": '<button class="btn btn-info" id="btnEditar"><i class="fa fa-pencil"></i></button>     <button class="btn btn-danger " id="eliminarProducto"><i class="fa fa-times"></i></button>'
                    }

                ],
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'Lista de Empresas'
                    },
                    {
                        extend: 'pdf',
                        title: 'Lista de Empresas'
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

            $("body").on("click", "#btnEditar", function(e) {
                e.preventDefault();

                var idProducto = $(this).parent().parent().children()[0];
                var estado = $(this).parent().parent().children()[4];

                editarEstadoEvento($(idProducto).text(), $(estado).text());
                setTimeout(() => {
                    var table = $('.tablaEvento').DataTable();
                    table.ajax.reload(function(json) {
                        $('#btnEditar').val(json.lastInput);
                    });
                }, 500);
                //getParticipantesAdmin($(idJuego).text());
            });

            $("body").on("click", "#eliminarProducto", function(e) {
                e.preventDefault();
                var id = $(this).parent().parent().children()[0];
                swal({
                    title: "Esta usted seguro?",
                    text: "Podria no recuperar los datos borrados!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Si, deseo Eliminar!",
                    closeOnConfirm: false
                }, function() {
                    eliminarEvento($(id).text());
                    swal("Eliminado!", "El evento a sido eliminado.", "success");
                    setTimeout(() => {
                        var table = $('.tablaEvento').DataTable();
                        table.ajax.reload(function(json) {
                            $('#eliminarProducto').val(json.lastInput);
                        });
                    }, 500);
                });
            });

        });
    </script>
</body>

</html>