<?php

namespace Configuraciones;

/**
 *  En este archivo se encuentran definidas las rutas absolutas de los archivos.
 *  Puedes agregar mas rutas personalizadas
 *
**/

/********* Configuraciones ***************************************************/

 
/**
* Archivo de configuracion
*/
define('CONFIGFILE', realpath(__DIR__.'/config.php').DIRECTORY_SEPARATOR);

/**
* Path de configuracion
*/
define('CONFIGPATH', realpath(__DIR__).DIRECTORY_SEPARATOR);

/**
 * Path de las librerias
 */
define('LIBPATH', realpath(__DIR__.'/../lib').DIRECTORY_SEPARATOR);

/*********************************************************************************/

/************************* Librerias de Terceros (VENDOR) ************************/

/**
 * Twig
 */
define('VENDORPATH', realpath(__DIR__.'/../vendor').DIRECTORY_SEPARATOR);

/*********************************************************************************/
?>
