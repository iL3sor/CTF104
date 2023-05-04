<?php
session_start();
require_once('controllers/base_controller.php');
class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function home()
  {
    if($_SERVER["REQUEST_METHOD"] == "GET"){
      $this->render('home');
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $this->render('blank', array('lang'=>$_POST['lang']));
    }
    else{
      $this->render('errors');
    }
  }
}
