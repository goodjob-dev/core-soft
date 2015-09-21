<?php 
	class CategoryController extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index($alias)
		{

			$this->load->model('Products');
			$this->load->model('Category');


			$id = $this->Category->aliasToId($alias);
			$products = $this->Products->getAllProductsById($id);

			$categories = $this->Category->getAllCategories();




			$sidebar = $this->load->view('inc/sidebar', array(
				'categories' => TRUE,
				'pricefilter' => TRUE,
				'gs_categories' => $categories 
			), TRUE);

			$this->layout->render('layers/index', [
				'title' => 'Home',
				'sidebar' => $sidebar,
				'products' => $products,
			]);
		}
		
		
	}
?>