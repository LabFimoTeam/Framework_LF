<?php
/**
 * Concentrador de los paths dentro del core
 * @author Erik Daniel Villegas Sanchez
 *
 */

/*************************** Directorios core **********************************/
require_once (__DIR__.'/core/config/config.php');

$locaciones = array(
	 	FRAMEWORKPATH,
	 	CONFIGPATH,
	 	LIBPATH,
		);

foreach($locaciones as $location) {
    
    /*
      $fullPath = $location . '/' . $partialPath . '.php';
      
      if(file_exists($fullPath)) {
        if($load) {
            require($fullPath);
        }
        return true;
      }
      */
      //print "<br/><hr/>".$location;
    }


/*************************** Directorios Vendor **********************************/

require_once (VENDORPATH."Twig/Autoloader.php");

 
/*********************************************************************************/
?>
