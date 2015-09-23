<?php

	class ContactController extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}
		
		public function index()
		{
				$this->load->library('form_validation');

				$config = array(
					array(
						'field'	=> 'name', 
						'label'	=> 'Name', 
						'rules'	=> 'required'
					),
					array(
						'field'		=> 'email', 
						'label'		=> 'E-mail', 
						'rules'		=> 'required|valid_email'
					),					array(
						'field'		=> 'message-text', 
						'label'		=> 'Message', 
						'rules'		=> 'required|min_length[15]'
					)
				);

				$this->form_validation->set_rules($config);


				if ($this->form_validation->run() == FALSE)
				{
					$this->load->model('Category');
					$categories = $this->Category->getAllCategories();
					
					$sidebar = $this->load->view('inc/sidebar', array(
						'categories' => TRUE,
						'pricefilter' => FALSE,
						'gs_categories' => $categories 
					), TRUE);

					$this->layout->render('form/contact', ['title' => 'Contact Us','sidebar' => $sidebar]);
				}
				else
				{
					$this->load->model('Contact');

					$post = $this->input->post();
					$data = array(
						'name' => $post['name'],
						'email' => $post['email'],
						'url' => $post['url'],
						'message_text' => $post['message-text'],
					);

					$this->Contact->insertMessage($data);
					$this->request->redirectTo(base_url());

				}


				

			
			
		}
		
		
	}
?>