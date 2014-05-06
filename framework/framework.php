<?php

namespace Framework;
use Configuraciones as Conf;
use Librerias as Lib;

require_once (__DIR__ . '/core/config/config.php');
//Config
require_once (__DIR__ . '/core/concentradorLib.php');
//Config

/**
 * Objeto Inicializador de los componentes del framework
 *  
**/

class framework {

	/**
	 *  Metodo Inicializador de Twig (Motor de Templates HTML-PHP)
	 *
	 * @param path_templates -> Path donde estan los templates a utilizar,
	 * 		 			 		esta por defecto configurado para el directorio
	 * 						    aplicacion/templates
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
		Twig_Autoloader::register();
		$loader = new \Twig_Loader_Filesystem($path_templates != "" ? $path_templates : VISTASPATH);
		
		if ($cache_enable) {
			$configTwig = array('cache' => Conf\CACHEPATH, );
		}
		$twig = new Twig_Environment($loader, $configTwig);
		return $twig;
	}

}
?>
