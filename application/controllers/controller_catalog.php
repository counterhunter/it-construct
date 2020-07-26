<?php

class Controller_Catalog extends Controller
{

	function action_index()
	{	
		$this->view->generate('catalog.php', 'template_view.php');
	}
}