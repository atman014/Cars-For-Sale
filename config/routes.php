<?php
$folderControllers = "controllers/";

//Si no se indica un controller, este es el controller que se usará
$controllerDefault = "main";

//Si no se indica una action, esta action es la que se usará
$actionDefault = "index";

if(! empty($_GET['controller']))
      $controller = $_GET['controller'];
else
      $controller = $controllerDefault;

if(! empty($_GET['action']))
      $action = $_GET['action'];
else
      $action = $actionDefault;

//Ya tenemos el controller y la action

//Formamos el nombre del fichero que contiene nuestro controller
$controller = $folderControllers . $controller . 'Controller.php';

//Incluimos el controller o detenemos todo si no existe
if(is_file($controller))
      require_once $controller;
else
      die('El controller no existe - 404 not found');

//Llamamos la action o detenemos todo si no existe
if(is_callable($action))
      $action();
else
      die('La action no existe - 404 not found');
?>
