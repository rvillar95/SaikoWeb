<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//SAIKO
$route['iniciarSesion'] = 'welcome/iniciarSesion';
$route['Administrador'] = 'welcome/administrador';
$route['Carta'] = 'welcome/carta';
$route['Galeria'] = 'welcome/galeria';
$route['Nosotros'] = 'welcome/nosotros';
$route['Horarios'] = 'welcome/horario';
$route['Redes'] = 'welcome/Redes';

$route['getMision'] = 'welcome/getMision';
$route['getVision'] = 'welcome/getVision';
$route['getNosotros'] = 'welcome/getNosotros';

$route['editarEstadoMision'] = 'welcome/editarEstadoMision';
$route['editarEstadoVision'] = 'welcome/editarEstadoVision';
$route['editarEstadoNosotros'] = 'welcome/editarEstadoNosotros';
$route['editarMision'] = 'welcome/editarMision';
$route['editarVision'] = 'welcome/editarVision';
$route['editarNosotros'] = 'welcome/editarNosotros';


$route['addGaleria'] = 'welcome/addGaleria';
$route['getGaleria'] = 'welcome/getGaleria';
$route['editarGaleria'] = 'welcome/editarGaleria';

$route['addCarta'] = 'welcome/addCarta';
$route['getCarta'] = 'welcome/getCarta';
$route['editarCarta'] = 'welcome/editarCarta';


$route['addHorario'] = 'welcome/addHorario';
$route['getHorario'] = 'welcome/getHorario';
$route['editarHorario'] = 'welcome/editarHorario';

$route['addRRSS'] = 'welcome/addRRSS';
$route['getRRSS'] = 'welcome/getRRSS';
$route['editarRRSS'] = 'welcome/editarRRSS';
$route['addPromoTiempo'] = 'welcome/addPromoTiempo';
$route['addPromoCantidad'] = 'welcome/addPromoCantidad';
$route['getPromociones'] = 'welcome/getPromociones';
$route['editarEstadoPromocion'] = 'welcome/editarEstadoPromocion';


$route['guardarToken'] = 'welcome/guardarToken';
$route['getGaleriaApp'] = 'welcome/getGaleriaApp';
$route['getCartaApp'] = 'welcome/getCartaApp';
$route['getHorarioApp'] = 'welcome/getHorarioApp';
$route['getMisionApp'] = 'welcome/getMisionApp';
$route['getVisionApp'] = 'welcome/getVisionApp';
$route['getNosotrosApp'] = 'welcome/getNosotrosApp';
$route['getPromocionesApp'] = 'welcome/getPromocionesApp';

$route['getTipoPromocion'] = 'welcome/getTipoPromocion';


$route['cobrarPromocion'] = 'welcome/cobrarPromocion';
