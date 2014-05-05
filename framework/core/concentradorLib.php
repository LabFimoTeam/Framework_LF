<?php
/**
 * Concentrador de los paths dentro del core
 * @author Erik Daniel Villegas Sanchez
 *
 */

require_once ('lib/paths.php');

use Librerias as Lib;
use Configuraciones as Conf;


$concentrador = new Librerias\paths();

/*
 * Obtiene los archivos del directorio Lib
*/

foreach (($concentrador->get_archivos_extencion(LIBPATH,"php")) as $k) {
	require_once LIBPATH . "" . $k;
}

/*
 * Obtiene los directorios del directorio de configuraciones
*/
foreach ($concentrador->get_archivos_ruta(CONFIGPATH) as $k) {
	require_once CONFIGPATH . "" . $k;
}
?>