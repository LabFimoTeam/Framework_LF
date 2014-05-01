<?php

print 
"<title>Hola</title>
<h1>Hola mundo </h1>";

print "<h1>Integrando cambios</h1>";
?>

<?php
require_once('framework/core/lib/myRouter.php');
require_once('./framework/framework.php');

print "<pre>";
print_r(getPaths());
print "</pre>";

print "<br/>Config path: ".CONFIGPATH;

?>
