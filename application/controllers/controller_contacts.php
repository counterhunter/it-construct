<?php

class Controller_Contacts extends Controller
{

	function action_index()
	{	
		$this->view->generate('contacts.php', 'template_view.php');
	}
}