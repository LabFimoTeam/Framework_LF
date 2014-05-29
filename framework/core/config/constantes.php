<?php

/**
 *  En este archivo se encuentran definidas las rutas absolutas de los archivos.
 *  Puedes agregar mas rutas personalizadas
 *
**/

/********* Configuraciones ***************************************************/

define('FRAMEWORKPATH', realpath(__DIR__.'/../../../').DIRECTORY_SEPARATOR);
define('CONFIGPATH', realpath(__DIR__).DIRECTORY_SEPARATOR);
define('CONFIGFILE', realpath(CONFIGPATH.'config.php').DIRECTORY_SEPARATOR);
define('LIBPATH', realpath(__DIR__.'/../lib').DIRECTORY_SEPARATOR);
define('COREBASEPATH', realpath(LIBPATH.'/base').DIRECTORY_SEPARATOR);

/*********************************************************************************/


/*********************************************Paths Aplicacion  *******************************************/

define('PUBLICPATH', REALPATH(__DIR__."/../../../public").DIRECTORY_SEPARATOR);
define('CACHEPATH', (PUBLICPATH."caches").DIRECTORY_SEPARATOR);
define('CONTROLADORESPATH', (PUBLICPATH."controladores").DIRECTORY_SEPARATOR);
define('MODELOSPATH', (PUBLICPATH."modelos").DIRECTORY_SEPARATOR);
define('STATICPATH', (PUBLICPATH."static").DIRECTORY_SEPARATOR);
define('TEMPLATESPATH', (PUBLICPATH."templates").DIRECTORY_SEPARATOR);

/*********************************************  Paths Aplicacion  *******************************************/

/*********************************************URL Aplicacion  *******************************************/

define('PUBLICURL', "/framework/public".DIRECTORY_SEPARATOR);
define('CACHEURL', (PUBLICURL."caches").DIRECTORY_SEPARATOR);
define('CONTROLADORESURL', (PUBLICURL."controladores").DIRECTORY_SEPARATOR);
define('MODELOSURL', (PUBLICURL."modelos").DIRECTORY_SEPARATOR);
define('STATICURL', (PUBLICURL."static").DIRECTORY_SEPARATOR);
define('TEMPLATESURL', (PUBLICURL."templates").DIRECTORY_SEPARATOR);

/*********************************************  Paths Aplicacion  *******************************************/


/*********************************************  Paths Server  *******************************************/

define('SERVERURL', "http://".$_SERVER['SERVER_ADDR']);

/************************* Librerias de Terceros (VENDOR) ************************/

define('VENDORPATH', realpath(__DIR__.'/../vendor').DIRECTORY_SEPARATOR);

/*********************************************************************************/
?>
