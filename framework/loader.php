<?php
    function __autoload($class_name) 
    {
    	print "<br/> Autoload";
        //class directories
        $directorys = array(
            __DIR__.'/core/config/',
            __DIR__.'/core/lib/',
            __DIR__.'/core/vendor/',
            __DIR__.'/core/vendor/Twig/',
        );
        
		print "<pre>";
		print_r ($directorys);
		print "</pre>";
        //for each directory
        foreach($directorys as $directory)
        {
        	print $directory.$class_name.".php<br/>";
            //see if the file exsists
            if(file_exists($directory.$class_name.'.php'))
            {
            	echo "<br/>Loading ".$directory.$class_name.".php";
                require_once($directory.$class_name . '.php');
                //only require the class once, so quit after to save effort (if you got more, then name them something else 
                return;
            }            
        }
    }
?>