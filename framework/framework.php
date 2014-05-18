<?php 

namespace FrameWork;
use FrameWork\Loader;
use FrameWork\Constantes as con;

require_once('ClassLoader.php');
require_once (__DIR__.'/core/config/constantes.php');



/**
 * Objeto Inicializador de los componentes del framework
 *  
**/

class framework {
	 public function __construct()
	 {
	 	$locaciones = array(
	 	FRAMEWORKPATH,
	 	CONFIGPATH,
	 	LIBPATH,
	 	VENDORPATH
		);
		
		print "<pre>";
		print_r ($locaciones);
		print "</pre>";
		
	 	$loader = new \FrameWork\Loader\ClassLoader($locaciones);
		$loader->register();
		
		
	 }
	/**
	 *  Metodo Inicializador de Twig (Motor de Templates HTML-PHP)
	 *
	 * @param path_templates -> Path donde estan los templates a utilizar,
	 * 		 			 		esta por defecto configurado para el directorio
	 * 						    aplicacion/templates, si usas subcarpetas en el
	 * 							directorio templates, solo envia el nombre de la
	 * 						    carpeta y el archivo
	 *
	 * @param chache_enable -> Habilita a Twig para almacenar vistas previamente creadas
	 * 					       Mismas que se encuentran en el directorio aplicacion/cahces/Twig
	 *                         True -> Activado | False -> Desactivado
	 *
	 * @return Twig
	 *
	 * @link  http://twig.sensiolabs.org/
	 * 
	 * @see Framework
	 *
	 * La carpeta cache por defecto esta
	 */
	public function Twig($path_templates, $cache_enable) {
	    \Twig_Autoloader::register();
		$loader = new \Twig_Loader_Filesystem($path_templates != "" ? TEMPLATESPATH.$path_templates : TEMPLATESPATH);
		$cache_enable = array();
		if ($cache_enable) {
			$configTwig = array('cache' => \CACHEPATH."TWIG", );
		}
		$twig = new Twig_Environment($loader, $cache_enable);
		return $twig;
	}

}
?>
