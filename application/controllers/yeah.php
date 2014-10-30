<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Yeah extends CI_Controller {

	/**
	 * Maps to the following URL
	 * 		http://example.com/index.php/demo
	 *	- or -  
	 * 		http://example.com/index.php/demo/index
	 *	- or -
	 * This is the startup Controller of the functional Demo, change it in:
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 */
	 	
	public function index()	{
	
		/*
		 * load some helpers for the demo
		 */	

		$this->load->helper('language');
  		$this->load->helper('url');
		
		/*
		 * loads the demo language File
		 * destination: application/language/{{LANG}}/demo_lang.php
		 */	
		
		$this->lang->load('demo');

		
		/*
		 * loads the welcome template file
		 */
		 
		$this->load->view('primed_templates/welcome');
		
	}



	public function templates()	{

		$this->load->helper('url');

		$plugin = $this->uri->segment(4);
		$template = $this->uri->segment(5);
	
		
		/*
		 * loads the welcome template file
		 */
		 
		$this->load->view(''.$plugin.'/'.$template.'');
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/demo.php */