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
                            <li class="active"><a class="page-scroll " href="<?php echo base_url() ?>Empresa" style="font-family: FerroRosso; font-size: 30px; padding-top: 30px;">Empresa</a></li>
                            <li><a class="page-scroll " href="<?php echo base_url() ?>Eventos" style="font-family: FerroRosso; font-size: 30px; padding-top: 30px;">Eventos</a></li>
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
            <input id="idVision" class="hidden" type="text">
            <input id="idMision" class="hidden" type="text">
            <input id="idHistoria" class="hidden" type="text">
            <div class="wrapper wrapper-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #d12a11;">
                                        <h5 style="color: white">Formulario Historia</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">

                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Historia Empresa</label>
                                                <textarea id="historia" id="" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group form-group col-lg-12 col-md-12 col-sm-4 col-xs-12"><button type="submit" id="btnAddHistoria" class="btn btn-primary" style="background-color: #d12a11; color: white; ">Editar Historia</button></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #d12a11;">
                                        <h5 style="color: white">Tabla Historia</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <h2><strong>Registros de Historia</strong></h2>
                                            <div class="table-responsive">
                                                <table id="tablaHistoria" class="table table-striped table-bordered table-hover tablaHistoria">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Historia</th>
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
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #d12a11;">
                                        <h5 style="color: white">Formulario Mision</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">

                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Misión Empresa</label>
                                                <textarea id="mision" id="" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group form-group col-lg-12 col-md-12 col-sm-4 col-xs-12"><button type="submit" id="btnAddMision" class="btn btn-primary" style="background-color: #d12a11; color: white; ">Editar Misión</button></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #d12a11;">
                                        <h5 style="color: white">Tabla Mision</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <h2><strong>Registros de Misión</strong></h2>
                                            <div class="table-responsive">
                                                <table id="tablaMision" class="table table-striped table-bordered table-hover tablaMision">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Misión</th>
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
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #d12a11;">
                                        <h5 style="color: white">Formulario Visión</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">

                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Visión Empresa</label>
                                                <textarea id="vision" id="" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group form-group col-lg-12 col-md-12 col-sm-4 col-xs-12"><button type="submit" id="btnAddVision" class="btn btn-primary" style="background-color: #d12a11; color: white; ">Editar Visión</button></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="panel-body">
                                <div class="ibox">
                                    <div class="ibox-title" style="background-color: #d12a11;">
                                        <h5 style="color: white">Tabla Visión</h5>
                                    </div>
                                    <div class="ibox-content" style="padding: 0px;">
                                        <div class="row" style="padding: 20px;">
                                            <h2><strong>Registros de Visión</strong></h2>
                                            <div class="table-responsive">
                                                <table id="tablaVision" class="table table-striped table-bordered table-hover tablaVision">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Visión</th>
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
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
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
            var nombre = $("#nomAdmin").val();
            $("#cerrar").click(function(e) {
                e.preventDefault();
                cerrarSesion();
            });
            $('#form_producto').on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: "<?php echo base_url(); ?>addProducto",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        setTimeout(() => {
                            var table = $('#tablaProducto').DataTable();
                            table.ajax.reload(function(json) {
                                $('#btnAddProducto').val(json.lastInput);
                            });
                        }, 500);
                        toastr.success("", "Producto Agregado con Exito");
                    }
                });
            });

            $('.tablaHistoria').DataTable({
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
                    url: "<?php echo base_url() ?>getHistoriaAdmin",
                    type: 'GET'
                },
                "columnDefs": [{
                        "targets": 3,
                        "data": null,
                        "defaultContent": '<button class="btn btn-info" id="btnEditarHistoria"><i class="fa fa-pencil"></i></button>     <button class="btn btn-danger " id="verHistoria"><i class="fa fa-eye"></i></button>'
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

            $('.tablaVision').DataTable({
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
                    url: "<?php echo base_url() ?>getVisionAdmin",
                    type: 'GET'
                },
                "columnDefs": [{
                        "targets": 3,
                        "data": null,
                        "defaultContent": '<button class="btn btn-info" id="btnEditarVision"><i class="fa fa-pencil"></i></button>   <button class="btn btn-danger " id="verVision"><i class="fa fa-eye"></i></button>  '
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


            $('.tablaMision').DataTable({
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
                    url: "<?php echo base_url() ?>getMisionAdmin",
                    type: 'GET'
                },
                "columnDefs": [{
                        "targets": 3,
                        "data": null,
                        "defaultContent": '<button class="btn btn-info" id="btnEditarMision"><i class="fa fa-pencil"></i></button>     <button class="btn btn-danger" id="verMision"><i class="fa fa-eye"></i></button>'
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


            $("body").on("click", "#verVision", function(e) {
                e.preventDefault();
                var idVision = $(this).parent().parent().children()[0];
                var vision = $(this).parent().parent().children()[1];
                $("#idVision").val($(idVision).text());
                $("#vision").val($(vision).text());
            });

            $("body").on("click", "#verHistoria", function(e) {
                e.preventDefault();
                var idHistoria = $(this).parent().parent().children()[0];
                var historia = $(this).parent().parent().children()[1];
                $("#idHistoria").val($(idHistoria).text());
                $("#historia").val($(historia).text());
            });

            $("body").on("click", "#verMision", function(e) {
                e.preventDefault();
                var idMision = $(this).parent().parent().children()[0];
                var mision = $(this).parent().parent().children()[1];
                $("#idMision").val($(idMision).text());
                $("#mision").val($(mision).text());
            });

            $("#btnAddVision").click(function(e) {
                e.preventDefault();
                var vision = $("#vision").val();
                editarVision(vision);
                setTimeout(() => {
                    var table = $('.tablaVision').DataTable();
                    table.ajax.reload(function(json) {
                        $('#btnAddVision').val(json.lastInput);
                    });
                }, 500);
            });

            $("#btnAddHistoria").click(function(e) {
                e.preventDefault();
                var historia = $("#historia").val();
                editarHistoria(historia);
                setTimeout(() => {
                    var table = $('.tablaHistoria').DataTable();
                    table.ajax.reload(function(json) {
                        $('#btnAddHistoria').val(json.lastInput);
                    });
                }, 500);
            });

            $("#btnAddMision").click(function(e) {
                e.preventDefault();
                var mision = $("#mision").val();
                editarMision(mision);
                setTimeout(() => {
                    var table = $('.tablaMision').DataTable();
                    table.ajax.reload(function(json) {
                        $('#btnAddMision').val(json.lastInput);
                    });
                }, 500);
            });



            $("body").on("click", "#btnEditarHistoria", function(e) {
                e.preventDefault();
                var estado = $(this).parent().parent().children()[2];
                editarEstadoEmpresa("Historia", $(estado).text());
                setTimeout(() => {
                    var table = $('.tablaHistoria').DataTable();
                    table.ajax.reload(function(json) {
                        $('#tablaHistoria').val(json.lastInput);
                    });
                }, 500);
            });

            $("body").on("click", "#btnEditarVision", function(e) {
                e.preventDefault();
                var estado = $(this).parent().parent().children()[2];

                editarEstadoEmpresa("Vision", $(estado).text());
                setTimeout(() => {
                    var table = $('.tablaVision').DataTable();
                    table.ajax.reload(function(json) {
                        $('#tablaVision').val(json.lastInput);
                    });
                }, 500);
            });

            $("body").on("click", "#btnEditarMision", function(e) {
                var estado = $(this).parent().parent().children()[2];

                editarEstadoEmpresa("Mision", $(estado).text());
                setTimeout(() => {
                    var table = $('.tablaMision').DataTable();
                    table.ajax.reload(function(json) {
                        $('#btnEditarMision').val(json.lastInput);
                    });
                }, 500);
            });

        });
    </script>
</body>

</html>