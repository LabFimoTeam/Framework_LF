<?php

/**
 * Clase que obtiene diferentes paths
 */

class paths {

	/**
	 * Imprime en pantalla los path de la url actual visitada
	 * NOTA: Por seguridad no usarlo ya que muestra el directorio completo
	 */

	public function imprime_full_paths($ruta) {
		$dir = $ruta;
		$directorio = opendir($dir);
		echo "<b>Directorio actual:</b><br>$dir<br>";
		echo "<b>Archivos:</b><br>";
		while ($archivo = readdir($directorio)) {
			if ($archivo == '.')
				echo "<a href=\"?dir=.\">$archivo</a><br>";
			elseif ($archivo == '..') {
				if ($dir != '.') {
					$carpetas = split("/", $dir);
					array_pop($carpetas);
					$dir2 = join("/", $carpetas);
					echo "<a href=\"?dir=$dir2\">$archivo</a><br>";
				}
			} elseif (is_dir("$dir/$archivo"))
				echo "<a href=\"?dir=$dir/$archivo\">$archivo</a><br>";
			else
				echo "$archivo<br>";
		}
		closedir($directorio);
	}

	/**
	 * Muestra los directorios de una ruta dada
	 * @param ruta en donde buscar
	 **/

	function leer_archivos_y_directorios($ruta) {
		$directorio = opendir($ruta);
		//ruta actual

		while ($archivo = readdir($directorio))//obtenemos un archivo y luego otro sucesivamente
		{
			if (is_dir($archivo))//verificamos si es o no un directorio
			{
				echo "[" . $archivo . "]<br />";
				//de ser un directorio lo envolvemos entre corchetes
			} else {
				echo $archivo . "<br />";
			}
		}
	}

	/**
	 * Imprime solo los archivos de una ruta
	 * @param ruta en donde buscar
	 **/

	function leer_archivos($ruta) {
		$directorio = opendir($ruta);
		while ($archivo = readdir($directorio))
		{
			if (is_dir($archivo))
			//if (is_dir($archivo) || $archivo == "." || $archivo == "..")//verificamos si es o no un directorio
			{
				//echo "[" . $archivo . "]<br />";
				//de ser un directorio lo envolvemos entre corchetes
			} else {
				echo $archivo . "<br />";
			}
		}
	}

	/**
	 * Obtiene los path de la url actual, si no se especifica url en el parametro obtendra los datos actuales
	 * @param url
	 * @return Regresa un array con los path
	 */
	function get_paths_url($url="") {
		$url = ($url == "") ? "http://" . $_SERVER['HTTP_HOST'] . ":" . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'] : $url;
		print $url;
		$componentes = parse_url($url);
		$paths = $componentes['path'];
		return (explode('/', $paths));
	}

	/**
	 * Obtiene la url actual
	 * @return url actual posicionada
	 */
	function get_url() {
		$url = "http://" . $_SERVER['HTTP_HOST'] . ":" . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
		return $url;
	}

}
?>
