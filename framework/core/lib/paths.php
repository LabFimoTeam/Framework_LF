<?php

/**
 * Clase que obtiene diferentes paths
 */

class paths {

    /**
     * Imprime en pantalla los path de la url actual visitada
     * NOTA: Por seguridad no usarlo ya que muestra el directorio completo
     */

    public function imprime_full_paths() {
        $dir = (isset($_GET['dir'])) ? $_GET['dir'] : "/";
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

    /*
     * Muestra los directorios en una carpeta dada
     * @param ruta
     */
     
    function leer_archivos_y_directorios($ruta) {
        $directorio = opendir(".");
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
    
    /*
     * Obtiene solo los archivos de un path
     * @param ruta
     */
     
    function leer_archivos($ruta) {
        $directorio = opendir(".");
        //ruta actual
        while ($archivo = readdir($directorio))//obtenemos un archivo y luego otro sucesivamente
        {
            if (is_dir($archivo) || $archivo == "." || $archivo == "..")//verificamos si es o no un directorio
            {
                //echo "[" . $archivo . "]<br />";
                //de ser un directorio lo envolvemos entre corchetes
            } else {
                echo $archivo . "<br />";
            }
        }
    }

}
?>
