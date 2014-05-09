<?php


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


/*********************************************Paths Aplicacion  *******************************************/

/**
* Directori raiz de aplicacion 
*/
//define('APPATH', dirname(dirname(dirname(dirname(__DIR__)))."/aplicacion").DIRECTORY_SEPARATOR);
define('APPATH', REALPATH(__DIR__."/../../../aplicacion").DIRECTORY_SEPARATOR);


/**
* Directorio de archivos de la cache
*/
define('CACHEPATH', (APPATH."caches").DIRECTORY_SEPARATOR);

/**
* Directorio de archivos de controladores
*/
define('CONTROLADORESPATH', (APPATH."controladores").DIRECTORY_SEPARATOR);

/**
* Directorio de archivos de modelos
*/
define('MODELOSPATH', (APPATH."modelos").DIRECTORY_SEPARATOR);

/**
* Directorio de archivos estaticos
*/
define('STATICPATH', (APPATH."static").DIRECTORY_SEPARATOR);

/**
* Directorio de archivos de templates
*/
define('TEMPLATESPATH', (APPATH."templates").DIRECTORY_SEPARATOR);


/*********************************************  Paths Aplicacion  *******************************************/

/*********************************************URL Aplicacion  *******************************************/

/**
* Directori raiz de aplicacion 
*/
//define('APPATH', dirname(dirname(dirname(dirname(__DIR__)))."/aplicacion").DIRECTORY_SEPARATOR);
define('APURL', "/framework/aplicacion".DIRECTORY_SEPARATOR);


/**
* URL de archivos de la cache
*/
define('CACHEURL', (APURL."caches").DIRECTORY_SEPARATOR);

/**
* URL de archivos de controladores
*/
define('CONTROLADORESURL', (APURL."controladores").DIRECTORY_SEPARATOR);

/**
* URL de archivos de modelos
*/
define('MODELOSURL', (APURL."modelos").DIRECTORY_SEPARATOR);

/**
* URL de archivos estaticos
*/
define('STATICURL', (APURL."static").DIRECTORY_SEPARATOR);

/**
* URL de archivos de templates
*/
define('TEMPLATESURL', (APURL."templates").DIRECTORY_SEPARATOR);


/*********************************************  Paths Aplicacion  *******************************************/


/*********************************************  Paths Server  *******************************************/

/**
* URL del servidor
*/
define('SERVERURL', "http://".$_SERVER['SERVER_ADDR']);

/************************* Librerias de Terceros (VENDOR) ************************/

/**
 * Twig
 */
define('VENDORPATH', realpath(__DIR__.'/../vendor').DIRECTORY_SEPARATOR);

/*********************************************************************************/
?>
