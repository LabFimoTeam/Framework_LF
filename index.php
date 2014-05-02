<?php

print 
"<title>Hola</title>
<h1>Hola mundo </h1>";

print "<h1>Integrando cambios</h1>";
?>

<?php
require_once('./framework/framework.php');
require_once('framework/core/lib/paths.php');


$d = new paths();

print "<br/><pre>";
print_r ($d->leer_archivos('./framework/'));
print "</pre>";

?>
