<?php


include_once("models/model.php");

class Controller{
	public $model;

	public function __construct(){
		$this->model = new Model();
	}

	public function invoke(){
		$res = $this->model->getlogin();

		if($res == 'login'){
			include 'views/afterlogin.php';
		}else{
			include 'views/login.php';
		}
	}
}
?>