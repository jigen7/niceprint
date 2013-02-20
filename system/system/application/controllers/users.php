<?php

class Users extends Controller {

	function Users()
	{
		parent::Controller();	
		$this->load->scaffolding('users');
		
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