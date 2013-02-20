<?php

class Services extends Controller {

	function Services()
	{
		parent::Controller();	
		$this->load->scaffolding('services_request');
		
	}
	
	function index()
	{

	}
	

	
}


function print_r_format($array)
   {
      echo '<pre>';
      print_r($array);
      echo '</pre>';
   }
/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */