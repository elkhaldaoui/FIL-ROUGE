 <?php
   session_start();
   require_once './bootstrap.php';
   spl_autoload_register('autoload');

   function autoload($classname){
      $paths= array('./database/','./app/classes/','./controllers/','./models/');
      $part= explode('\\',$classname);
      $name= array_pop($part);
        foreach($paths as $path){
            $file= sprintf($path.'%s.php',$name);
            if(is_file($file)){
                include_once $file;
            }
        }

   }
   ?>