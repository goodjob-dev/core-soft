<?php 
	class Test extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function fuck()
		{
			$this->load->view('components/header', array('assets' => $this->config->item('assets')));
		}
	}
?>