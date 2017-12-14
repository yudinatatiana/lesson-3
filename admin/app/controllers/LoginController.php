<?php

class LoginController extends Controller{

	function beforeroute(){
		if ( $this->f3->get('SESSION.name') !== null ){

			$this->f3->reroute('/');
			exit;
		} 
	}

	function render() {

		$random = rand(1000, 10000);
		\F3::set('result',$random);
	    $template = new Template;
        echo $template->render('login.html');

	}

	function check(){

		$name = $this->f3->get("POST.name");
		$password = $this->f3->get("POST.password");
		$kapcha = $this->f3->get("POST.kapcha");
		$a = $this->f3->get("POST.a");

		if ( $a == $kapcha ){
			$messages = new Messages($this->db);
			$msg = $messages->get_password($name);

			$hash = $msg;
			if ( password_verify( $password, $hash )){	
				$this->f3->set("SESSION.name", $name);
				$this->f3->reroute('/');
			}
			else {
				$this->f3->reroute('/login');
			}
		}
		else {
			$this->f3->reroute('/login');
		}
				
	}
}