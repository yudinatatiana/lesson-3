<?php

class MainController extends Controller{

	function render() {

        /*
		$messages = new Messages($this->db);
		$msg = $messages->all();*/  //это запросы данных из Messages.php
		
		//echo password_hash("admin", PASSWORD_DEFAULT)."\n";

		$template = new Template;
        echo $template->render('admin.html');

        //$template = new Template;
        //echo $template->render('main.html');
		

	}
}