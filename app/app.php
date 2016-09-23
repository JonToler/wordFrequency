<?php
  date_default_timezone_set('America/Los_Angeles');
  require_once_DIR_."/../vendor/autoload.php";

  $app = new Silex\Application();

  $app->get("/hello", function(){
      return "Guten Tag!";
  })

  return $app;
 ?>
