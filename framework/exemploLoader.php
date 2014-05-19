<?php if (!defined('CONFIGPATH')) exit('No direct script access allowed'); 

use com\arenybakk\ClassLoader;

/**
 * Classloader CodeIgniter library
 * 
 * @author Are Nybakk <are[at]arenybakk.com>
 * @copyright Copyright 2011, Are Nybakk
 * @license http://www.opensource.org/licenses/mit-license.php MIT license
 */
class Classloader {



  private $classLoader;
  
  
  
  public function __construct() {

    //We need the ClassLoader file
    require_once APPPATH.'renybakk/ClassLoader.php';
    
    //Enable auto loading from the classes and libraries folders
    $classLoader = new ClassLoader(Array(APPPATH.'classes', APPPATH.'libraries'));
    $classLoader->register();
    $this->classLoader = $classLoader;
    
  }
  
  
  
}