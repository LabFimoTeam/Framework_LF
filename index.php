<?php

print 
"<title>Hola</title>
<h1>Hola mundo </h1>";

require_once('./framework/framework.php');
require_once('framework/core/lib/paths.php');


$d = new paths();

print "<br/><pre>";
print_r ($d->get_archivos_ruta(LIBPATH))/
print "</pre>";

foreach($d->get_archivos_ruta(LIBPATH) as $k){
	print "require_once -> ". LIBPATH."$k . . .<br/>";
	require_once LIBPATH."".$k;
}

print "<br/><pre>";
print_r ($d->leer_archivos('./framework/'));
print "</pre>";

?>
