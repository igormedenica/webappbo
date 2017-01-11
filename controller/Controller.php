<?php

include_once('model/Model.php');

class Controller
{
	public $model;

	public function __construct()
	{
		$this->model = new Model();
	}

	public function invoke()
	{
		$log = $this->model->getLogin();

		if($log == 'login')
		{
                        ob_end_clean();
			include "view/home.php";
		}
		else
		{
                        ob_end_clean();
			include "view/login.php";
		}

               $reg = $this->model->getRegister();
               
 		if($reg == 'register')
		{
                       ob_end_clean();
			include "view/login.php";
		}
		else if(reg == 'error')
		{
                        ob_end_clean();
			include "view/register.php";
		}
               
               $link = $_POST['page'];
               if($link == 'Register')
               {
                  ob_end_clean();
                  include "view/register.php";
               }
               
               $show = $_GET['show'];
               $all = $this->model->allUser();
               if($show == 'alluser')
               {
                  ob_end_clean();
                  include "view/alluser.php";
               }
              else if($show == 'home')
              {
                  ob_end_clean();
                  include "view/home.php";
              }
              else if($show == 'logout')
              {
                  session_destroy();
                  ob_end_clean();
                  $log = 'logout';
                  $_SESSION['login'] == "0";
                  header("Location: http://igorhookah.hol.es/backoffice/");
              }
	}


}

?>			