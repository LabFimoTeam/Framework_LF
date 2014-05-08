<?php


require_once('./framework/framework.php');

//$d = new Librerias\paths();

print "<br/><pre>";
//print_r ($d->get_archivos_ruta(LIBPATH))/
print "</pre>";

print "<br/><pre>";
//print_r ($d->leer_archivos('./framework/'));
print "</pre>";


print STATICPATH;
$fw = new framework();
$tg = $fw->Twig("Home", TRUE);
$tg->loadTemplate('index.html');
echo $tg->render("index.html",array('titulo' => 'Boostrap', 'STATICPATH' => SERVERURL.STATICPATH));
?>
