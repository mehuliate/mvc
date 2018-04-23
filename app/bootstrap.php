<?php
//config
  require_once 'config/config.php';

  // Load Libraries(change with autoload function)
  // require_once 'libraries/Core.php';
  // require_once 'libraries/Controller.php';
  // require_once 'libraries/Database.php';

  //autoload librari class
  spl_autoload_register(function($className){
    require_once 'libraries/'. $className . '.php';
  });