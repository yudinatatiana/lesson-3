<?php

class MainController extends Controller{

	function render() {
		$template = new Template;
        echo $template->render('shablon.html');	
	}
}