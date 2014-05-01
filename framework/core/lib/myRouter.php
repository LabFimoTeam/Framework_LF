<?php

  /**
    * Router que define los paht
    *
  */

  /**
    *Regresa un array con los archivos solicitados 
  **/ 

  function getPaths(){
	 $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
	 $componentes = parse_url($url);
	 $paths = $componentes['path'];
	 return (explode('/', $paths));
  }

 function dameURL(){
	$url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
	return $url;
 }	

?>
