<?php

namespace Configuraciones;

/*************** Base de datos ***********/
 $db_host = 'localhost';
 $db_user = 'usuario';
 $db_pass = 'contraseña';
 $db_name = 'mydb';
/************* Base de datos *************/


/**  Variables Globales  **/

require_once('constantes.php');

/**************************/


/*********************************************  Paths Aplicacion  *******************************************/

/**
* Directorio raiz de aplicacion 
*/
define('APPATH', realpath(dirname(dirname(dirname(dirname(__DIR__))))."/aplicacion").DIRECTORY_SEPARATOR);

/**
* Directorio de archivos de la cache
*/
define('CACHEPATH', realpath(APPATH."/aplicacion/cache").DIRECTORY_SEPARATOR);

/**
* Directorio de archivos de controladores
*/
define('CONTROLADORESPATH', realpath(APPATH."/aplicacion/controladores").DIRECTORY_SEPARATOR);

/**
* Directorio de archivos de modelos
*/
define('MODELOSPATH', realpath(APPATH."/aplicacion/modelos").DIRECTORY_SEPARATOR);


/**
* Directorio de archivos estaticos
*/
define('STATICPATH', realpath(APPATH."/aplicacion/static").DIRECTORY_SEPARATOR);

/**
* Directorio de archivos vistas
*/
define('VISTASPATH', realpath(APPATH."/aplicacion/vistas").DIRECTORY_SEPARATOR);


/*********************************************  Paths Aplicacion  *******************************************/

?>
