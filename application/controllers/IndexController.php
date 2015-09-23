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
			$this->load->model('Products');


			$categories = $this->Category->getAllCategories();
			$products = $this->Products->getAllProducts();


			$sidebar = $this->load->view('inc/sidebar', array(
				'categories' => TRUE,
				'pricefilter' => TRUE,
				'gs_categories' => $categories 
			), TRUE);

			$this->layout->render('layer/index', [
				'title' => 'Home',
				'sidebar' => $sidebar,
				'products' => $products,
			]);
		}

		public function product($id)
		{

			$this->load->model('Category');
			$this->load->model('Products');


			$categories = $this->Category->getAllCategories();
			$product = $this->Products->getProductById($id);
			$tab_products = $this->Products->getAllTabProducts();

			$sidebar = $this->load->view('inc/sidebar', array(
				'categories' => TRUE,
				'pricefilter' => FALSE,
				'gs_categories' => $categories 
			), TRUE);

			if( $product === FALSE )
			{
				$this->request->redirectTo(base_url());
			}

			$this->layout->render('layer/product', [
				'title'		=> $product->title,
				'sidebar'	=> $sidebar,
				'product'	=> $product,
				'products'	=> $tab_products
			]);

		}
		
		
	}
?>