<?php

	class ContactController extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			$sidebar = $this->load->view('inc/sidebar', array(
				'categories' => TRUE,
				'pricefilter' => FALSE,
			), TRUE);

			$this->layout->render('layers/contact', ['title' => 'Contact','sidebar' => $sidebar]);
		}
		
		
	}
?>