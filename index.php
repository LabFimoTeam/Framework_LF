<?php


require_once('./framework/framework.php');

//$d = new Librerias\paths();



/*
print "<h1>Paths</h1>";
print "<hr/>".APPATH."<br/><hr/>";
print "<hr/>".CACHEPATH."<br/><hr/>";
print "<hr/>".CONTROLADORESPATH."<br/><hr/>";
print "<hr/>".MODELOSPATH."<br/><hr/>";
print "<hr/>".STATICPATH."<br/><hr/>";
print "<hr/>".TEMPLATESPATH."<br/><hr/>";

print "<h1>urls</h1>";
print "<hr/>".APURL."<br/><hr/>";
print "<hr/>".CACHEURL."<br/><hr/>";
print "<hr/>".CONTROLADORESURL."<br/><hr/>";
print "<hr/>".MODELOSURL."<br/><hr/>";
print "<hr/>".STATICURL."<br/><hr/>";
print "<hr/>".TEMPLATESURL."<br/><hr/>";
*/

$fw = new framework();
$tg = $fw->Twig("Home", TRUE);
$tg->loadTemplate('index.html');
echo $tg->render("index.html",array('titulo' => 'Boostrap', 'STATICURL' => STATICURL));
?>
