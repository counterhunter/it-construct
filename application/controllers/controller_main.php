<?php

class Controller_Main extends Controller
{

	function action_index()
	{	
		$this->view->generate('index.php', 'template_view.php');
	}
}