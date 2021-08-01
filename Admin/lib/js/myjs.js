var base_url = 'https://pascualadelivery.cl/';


function IniciarSesionAdmin() {
    var id = $("#username").val();
    var clave = $("#clave").val();
    if (id == "" || clave == "") {
        alert("Ingrese todos los datos.");
    } else {
        $.ajax({
            url: 'iniciarSesion',
            type: 'POST',
            dataType: 'json',
            data: { "id": id, "clave": clave }
        }).then(function(msg) {
            if (msg.msg == "error") {
                alert("error");
            } else if (msg.msg == "administrador") {
                window.location.href = "Administrador";
            } else if (msg.msg == "inactivo") {
                alert("Cuenta Inactiva");
            } else if (msg.msg == "nada") {
                alert("nada");
            }

        });
    }
}

function editarEstadoProducto(id, estado) {
    if (id == "" || estado == "") {
        alert("Ingrese todos los datos.");
    } else {

        $.ajax({
            url: 'editarEstadoProducto',
            type: 'POST',
            dataType: 'json',
            data: { "id": id, "estado": estado }
        }).then(function(msg) {
            if (msg.msg == "ok") {

                toastr.success("", "Actualizado con Exito")
            }
        });
    }
}

function eliminarProducto(id) {
    if (id == "") {
        alert("Ingrese todos los datos.");
    } else {
        $.ajax({
            url: 'eliminarProducto',
            type: 'POST',
            dataType: 'json',
            data: { "id": id }
        }).then(function(msg) {
            if (msg.msg == "ok") {
                toastr.success("", "Producto Eliminado")
            } else if (msg.msg == "Error") {
                toastr.warning("", "Error al Eliminar")
            }
        });
    }
}

function cerrarSesion() {
    $.ajax({
        url: 'cerrarSesion',
        type: 'POST',
        dataType: 'json',
        data: {}
    }).then(function(msg) {

    });
    window.location.href = 'Login';
}

function editarHistoria(variable) {
    if (variable == "") {
        alert("Ingrese todos los datos.");
    } else {
        $.ajax({
            url: 'editarHistoria',
            type: 'POST',
            dataType: 'json',
            data: { "variable": variable }
        }).then(function(msg) {
            if (msg.msg == "ok") {
                toastr.success("", "Actualizado con Exito")
            }
        });
    }
}

function editarVision(variable) {
    if (variable == "") {
        alert("Ingrese todos los datos.");
    } else {
        $.ajax({
            url: 'editarVision',
            type: 'POST',
            dataType: 'json',
            data: { "variable": variable }
        }).then(function(msg) {
            if (msg.msg == "ok") {
                toastr.success("", "Actualizado con Exito")
            }
        });
    }
}

function editarMision(variable) {
    if (variable == "") {
        alert("Ingrese todos los datos.");
    } else {
        $.ajax({
            url: 'editarMision',
            type: 'POST',
            dataType: 'json',
            data: { "variable": variable }
        }).then(function(msg) {
            if (msg.msg == "ok") {
                toastr.success("", "Actualizado con Exito")
            }
        });
    }
}

function editarEstadoEmpresa(tabla, estado) {
    if (tabla == "" || estado == "") {
        alert("Ingrese todos los datos.");
    } else {
        $.ajax({
            url: 'editarEstadoEmpresa',
            type: 'POST',
            dataType: 'json',
            data: { "tabla": tabla, "estado": estado }
        }).then(function(msg) {
            if (msg.msg == "ok") {
                toastr.success("", "Actualizado con Exito")
            }
        });
    }
}

function addEvento() {
    var titulo = $("#titulo").val();
    var descripcion = $("#descripcion").val();
    var link = $("#link").val();
    if (titulo == "" || descripcion == "" || link == "") {
        alert("Ingrese todos los datos.");
    } else {
        $.ajax({
            url: 'addEvento',
            type: 'POST',
            dataType: 'json',
            data: { "titulo": titulo, "descripcion": descripcion, "link": link }
        }).then(function(msg) {
            if (msg.msg == "ok") {
                toastr.success("", "Actualizado con Exito")
            }
        });
    }
}

function editarEstadoEvento(id, estado) {
    if (id == "" || estado == "") {
        alert("Ingrese todos los datos.");
    } else {

        $.ajax({
            url: 'editarEstadoEvento',
            type: 'POST',
            dataType: 'json',
            data: { "id": id, "estado": estado }
        }).then(function(msg) {
            if (msg.msg == "ok") {

                toastr.success("", "Actualizado con Exito")
            }
        });
    }
}

function editarEstadoBanner(estado) {
    if (estado == "") {
        alert("Ingrese todos los datos.");
    } else {

        $.ajax({
            url: 'editarEstadoBanner',
            type: 'POST',
            dataType: 'json',
            data: { "estado": estado }
        }).then(function(msg) {
            if (msg.msg == "ok") {

                toastr.success("", "Actualizado con Exito")
            }
        });
    }
}

function eliminarEvento(id) {
    if (id == "") {
        alert("Ingrese todos los datos.");
    } else {
        $.ajax({
            url: 'eliminarEvento',
            type: 'POST',
            dataType: 'json',
            data: { "id": id }
        }).then(function(msg) {
            if (msg.msg == "ok") {
                toastr.success("", "Evento Eliminado")
            } else if (msg.msg == "Error") {
                toastr.warning("", "Error al Eliminar")
            }
        });
    }
}

function addComentario() {
    var titulo = $("#titulo").val();
    var descripcion = $("#descripcion").val();
    var link = $("#link").val();
    if (titulo == "" || descripcion == "" || link == "") {
        alert("Ingrese todos los datos.");
    } else {
        $.ajax({
            url: 'addComentario',
            type: 'POST',
            dataType: 'json',
            data: { "titulo": titulo, "descripcion": descripcion, "link": link }
        }).then(function(msg) {
            if (msg.msg == "ok") {
                toastr.success("", "Comentario Agregado con Exito")
            }
        });
    }
}

function editarEstadoComentario(id, estado) {
    if (id == "" || estado == "") {
        alert("Ingrese todos los datos.");
    } else {

        $.ajax({
            url: 'editarEstadoComentario',
            type: 'POST',
            dataType: 'json',
            data: { "id": id, "estado": estado }
        }).then(function(msg) {
            if (msg.msg == "ok") {

                toastr.success("", "Actualizado con Exito")
            }
        });
    }
}

function eliminarComentario(id) {
    if (id == "") {
        alert("Ingrese todos los datos.");
    } else {
        $.ajax({
            url: 'eliminarComentario',
            type: 'POST',
            dataType: 'json',
            data: { "id": id }
        }).then(function(msg) {
            if (msg.msg == "ok") {
                toastr.success("", "Comentario Eliminado")
            } else if (msg.msg == "Error") {
                toastr.warning("", "Error al Eliminar")
            }
        });
    }
}

function getHistoria() {
    var url = "getHistoriaPublico";
    $("#historia").empty();
    $.getJSON(url, function(result) {
        $.each(result, function(i, o) {
            var fila = '<h1 class="tituloPascuala" style="margin: 10px; font-family: Beauty; font-size:55px;">Nuestra Historia<h1> <p class="text-justify" style="margin: 10px; font-weight:bold;">' + o.descripcionHistoria + '</p>';
            $("#historia").append(fila);
        });
    });
}

function getEventosPublico() {
    var url = "getEventosPublico";
    $("#vertical-timeline").empty();
    $.getJSON(url, function(result) {
        $.each(result, function(i, o) {
            var fila = '<div class="vertical-timeline-block">            <div class="vertical-timeline-icon navy-bg">                <i class="fa fa-users"></i>            </div>            <div class="vertical-timeline-content">                <h2>' + o.tituloEvento + '</h2>                <p>' + o.descripcionEvento + '               </p>                <a class="btn btn-primary" href="' + o.linkEvento + '" >                    Ver Album                </a>            </div>        </div>';
            $("#vertical-timeline").append(fila);
        });
    });
}

function getMision() {
    var url = "getMisionPublico";
    $("#mision").empty();
    $.getJSON(url, function(result) {
        $.each(result, function(i, o) {
            var fila = '<h1 class="tituloPascuala" style="margin: 10px; font-family: Beauty; font-size:55px;">Misión<h1>            <p class="text-justify" style="margin: 10px; font-weight:bold;">' + o.descripcionMision + '</p>';
            $("#mision").append(fila);
        });
    });
}

function getVision() {
    var url = "getVisionPublico";
    $("#vision").empty();
    $.getJSON(url, function(result) {
        $.each(result, function(i, o) {
            var fila = '<h1 class="tituloPascuala" style="margin: 10px;font-family: Beauty; font-size:55px;">Visión<h1>            <p class="text-justify" style="margin: 10px; font-weight:bold;">' + o.descripcionVision + '</p>';
            $("#vision").append(fila);
        });
    });
}

function getProductos() {
    var url = "getProductosPublico";
    $("#fotosProductos").empty();
    $.getJSON(url, function(result) {

        $.each(result, function(i, o) {

            var fila = '<div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom: 10px; ">            <h3 style="font-family: Beauty; font-size: 45px; color:#d1cbbd">' + o.nombreProducto + '</h3>            <div class="img-container">                <img src="' + o.imagenProducto + '" id="img5" onclick="javascript:funciona(this)" class="img-responsive img" alt="Pascuala Delivery">            </div>            </div>';
            $("#fotosProductos").append(fila);
        });
    });
}

function getComentarios() {
    var url = "getComentariosPublico";
    $("#comentarios").empty();
    $.getJSON(url, function(result) {
        $.each(result, function(i, o) {
            var fila = '<div class="col-lg-4 wow bounceInLeft">            <div class="bubble">                "' + o.descripcionComentario + '"            </div>            <div class="comments-avatar">                <div class="media-body">                    <div class="commens-name">                        ' + o.nombreComentario + ' </div>                    <p> <a style="color:#E5C00E" href="' + o.linkComentario + '">Ver Comentario</a> </p>                </div>            </div>        </div>';
            $("#comentarios").append(fila);
        });
    });
}

function getBanner() {
    var url = "getBannerPublico";
    $("#banner").empty();
    $.getJSON(url, function(result) {
        $.each(result, function(i, o) {
            var fila = '        <img src="' + o.imagenBanner + '" class="img-responsive" alt="">';
            $("#banner").append(fila);
        });
    });
}