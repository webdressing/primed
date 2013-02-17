<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Demo extends CI_Controller {

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
		 * only for the welcome-page to be sure that everything is loaded...
		 * not the best solution in the world, but it solves a problem with the 
		 * translation paths (ajax mode)
		 */	
	
		if ($this->uri->total_segments() < 2) {
			redirect('demo/index', 'refresh');
		}
	
		/*
		 * loads the demo language File
		 * destination: application/language/{{LANG}}/demo_lang.php
		 */	
		
		$this->lang->load('demo');
		
		/*
		 * loads the welcome template file
		 */
		 
		$this->load->view('demo_templates/welcome');
		
	}
	
	public function samples()	{
	
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
		 * loads the demo template file
		 */
		 
		$this->load->view('demo_templates/samples');
	}
	
	public function ajax()	{
	
		/*
		 * this is an ajax-call from the welcome-template to switch language
		 */	

		$this->load->helper('language');
  		$this->load->helper('url');
  		
  		/*
		 * check if we got a language submittet, if not found, use english as default
		 */
  		
  		if ($this->uri->total_segments() == 4) {
			$this->lang->load('demo', $this->uri->segment(4, 'english'));
		} else {
			$this->lang->load('demo');
		}

		/*
		 * send result... 
		 */
		
		$data = '<h1>'.$this->lang->line('headline').'</h1><p>'.$this->lang->line('welcome_p1').'</p><p>'.$this->lang->line('welcome_p2').'</p><p>'.$this->lang->line('enjoy').'</p>';
        sleep(1);
        echo $data;
	}
	
	/*
	 * some more demos loaded inside CI
	 * destination: application/views/
	 */
	 
	public function example_fluid()	{
		$this->load->helper('url');		 
		$this->load->view('samples/example_fluid');
	}
	
	public function example_narrow()	{
		$this->load->helper('url');		 
		$this->load->view('samples/example_narrow');
	}
	
	public function example_login()	{
		$this->load->helper('url');		 
		$this->load->view('samples/example_login');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/demo.php */