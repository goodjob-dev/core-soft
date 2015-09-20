<?php 
	class IndexController extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			$sidebar = $this->load->view('inc/sidebar', array(
				'categories' => TRUE,
				'pricefilter' => TRUE,
			), TRUE);

			$this->layout->render('layers/index', ['title' => 'Home','sidebar' => $sidebar]);
		}
		
		
	}
?>