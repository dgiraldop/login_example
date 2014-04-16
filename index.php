<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

 include_once("controllers/controller.php");

 $controller = new Controller();
 $controller->invoke();

?>