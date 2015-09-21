<?php 
	class IndexController extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{

			$this->load->model('Category');
			$categories = $this->Category->getAllCategories();


			$sidebar = $this->load->view('inc/sidebar', array(
				'categories' => TRUE,
				'pricefilter' => TRUE,
				'gs_categories' => $categories 
			), TRUE);

			
			$this->load->model('Products');
			$products = $this->Products->getAllProducts();


			$this->layout->render('layers/index', [
				'title' => 'Home',
				'sidebar' => $sidebar,
				'products' => $products,
			]);
		}
		
		
	}
?>