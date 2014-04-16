<?php

class Model{
	public function getlogin(){
		if(isset($_REQUEST['user']) && isset($_REQUEST['pwd'])){
			if($_REQUEST['user'] == 'admin' && $_REQUEST['pwd'] == '123'){
				return 'login';
			}else{
				return 'invalid user';
			}
		}
	}
}
?>