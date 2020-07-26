<?php

class Controller_Sidebar extends Controller
{

	function action_index()
	{	
		$this->view->generate('sidebar.php', 'template_view.php');
	}
}