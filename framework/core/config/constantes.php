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

define('APPATH', REALPATH(__DIR__."/../../../aplicacion").DIRECTORY_SEPARATOR);
define('CACHEPATH', (APPATH."caches").DIRECTORY_SEPARATOR);
define('CONTROLADORESPATH', (APPATH."controladores").DIRECTORY_SEPARATOR);
define('MODELOSPATH', (APPATH."modelos").DIRECTORY_SEPARATOR);
define('STATICPATH', (APPATH."static").DIRECTORY_SEPARATOR);
define('TEMPLATESPATH', (APPATH."templates").DIRECTORY_SEPARATOR);

/*********************************************  Paths Aplicacion  *******************************************/

/*********************************************URL Aplicacion  *******************************************/

define('APURL', "/framework/aplicacion".DIRECTORY_SEPARATOR);
define('CACHEURL', (APURL."caches").DIRECTORY_SEPARATOR);
define('CONTROLADORESURL', (APURL."controladores").DIRECTORY_SEPARATOR);
define('MODELOSURL', (APURL."modelos").DIRECTORY_SEPARATOR);
define('STATICURL', (APURL."static").DIRECTORY_SEPARATOR);
define('TEMPLATESURL', (APURL."templates").DIRECTORY_SEPARATOR);

/*********************************************  Paths Aplicacion  *******************************************/


/*********************************************  Paths Server  *******************************************/

define('SERVERURL', "http://".$_SERVER['SERVER_ADDR']);

/************************* Librerias de Terceros (VENDOR) ************************/

define('VENDORPATH', realpath(__DIR__.'/../vendor').DIRECTORY_SEPARATOR);

/*********************************************************************************/
?>
