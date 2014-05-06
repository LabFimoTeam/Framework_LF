<?php

use Librerias as Lib;
use Configuraciones as Config;
use Framework as Fmw;

print 
"<title>Hola</title>
<h1>Hola mundo </h1>";

require_once('./framework/framework.php');

//$d = new Librerias\paths();

print "<br/><pre>";
//print_r ($d->get_archivos_ruta(LIBPATH))/
print "</pre>";

print "<br/><pre>";
//print_r ($d->leer_archivos('./framework/'));
print "</pre>";

print "<br/>";

print Config\APPATH;

//$fw = new Framework\framework();
//$tg = $fw->Twig("", TRUE);
//$tg->loadTemplate('index.html');

?>
