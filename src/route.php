<?php
  $controller = 'pages';
  $action = 'home';
  include_once('controllers/' . $controller . '_controller.php');
  $klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
  $controller = new $klass;
  $controller->$action();
?>
