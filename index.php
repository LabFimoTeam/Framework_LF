<?php

use Librerias as Lib;
use Configuraciones as Config;

print 
"<title>Hola</title>
<h1>Hola mundo </h1>";

require_once('./framework/framework.php');

$d = new Librerias\paths();

print "<br/><pre>";
//print_r ($d->get_archivos_ruta(LIBPATH))/
print "</pre>";

print "<br/><pre>";
//print_r ($d->leer_archivos('./framework/'));
print "</pre>";


class xdb extends Lib\DBAbstractModel{
	
}

?>
