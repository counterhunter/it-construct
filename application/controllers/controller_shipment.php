<?php

class Controller_Shipment extends Controller
{

	function action_index()
	{	
		$this->view->generate('shipment.php', 'template_view.php');
	}
}