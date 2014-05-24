<?php
/**
 * Concentrador de los paths dentro del core
 * @author Erik Daniel Villegas Sanchez
 * @version 1.0 
 *
 * Version Previa Sera optimizada en siguiente version
 */

/*************************** Directorios core **********************************/
require_once (__DIR__.'/core/config/config.php');


require_once (LIBPATH.'paths.php');
require_once (COREBASEPATH.'db_base.php');

/*************************** Directorios Vendor **********************************/

require_once (VENDORPATH."Twig/Autoloader.php");

 
/*********************************************************************************/
?>
