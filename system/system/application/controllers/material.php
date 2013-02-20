<?php

class Material extends Controller {

	function Material()
	{
		parent::Controller();	
		$this->load->scaffolding('material');
		
	}
	
	function index()
	{

	}
	
	function materials()
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