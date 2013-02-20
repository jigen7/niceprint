<?php

class Main extends Controller {

	function Main()
	{
		parent::Controller();	
		
		
	}
	
	function index()
	{
		 $this->load->model('material','material',true);
		 $data['query'] = $this->material->get_last_ten_entries();
		 //print_r_format($data['query']);
		 
		 
		 $this->load->view('main');
		 //echo base_url();
		 //echo "<img src='".base_url()."img/cute.jpg'/>";
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