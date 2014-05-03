<?php

print 
"<title>Hola</title>
<h1>Hola mundo </h1>";

print "<h1>Integrando cambios</h1>";
?>
<<<<<<< HEAD

<?php
require_once('framework/core/lib/myRouter.php');
=======

<?php
require_once('./framework/framework.php');
require_once('framework/core/lib/paths.php');


print CONFIGPATH;

$d = new paths();

print "<br/>".LIBPATH;

print "<br/><pre>";
print_r ($d->get_archivos_ruta(LIBPATH))/
print "</pre>";

foreach($d->get_archivos_ruta(LIBPATH) as $k){
	print "require_once -> ". LIBPATH."$k . . .<br/>";
	require_once LIBPATH."".$k;
}
>>>>>>> master

print "<br/><pre>";
print_r ($d->leer_archivos('./framework/'));
print "</pre>";

?>
