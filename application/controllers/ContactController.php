<?php

	class ContactController extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			if($this->input->post()) {

				

			} else {

				$this->load->model('Category');
				$categories = $this->Category->getAllCategories();
				
				$sidebar = $this->load->view('inc/sidebar', array(
					'categories' => TRUE,
					'pricefilter' => FALSE,
					'gs_categories' => $categories 
				), TRUE);

				$this->layout->render('layers/contact', ['title' => 'Contact','sidebar' => $sidebar]);

			}
			
		}
		
		
	}
?>