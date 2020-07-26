<?php

class Controller_About extends Controller
{

	function action_index()
	{	
		$this->view->generate('about.php', 'template_view.php');
	}
}