<?php 
	class SearchController extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function search() {

			$this->load->model('Category');
			$this->load->model('Products');

			$search_value = $this->input->get("q");
			$products = $this->Products->getSearchProducts($search_value);

			$categories = $this->Category->getAllCategories();
			$sidebar = $this->load->view('inc/sidebar', array(
				'categories' => TRUE,
				'pricefilter' => FALSE,
				'gs_categories' => $categories 
			), TRUE);

			$this->layout->render('layer/search', [
				'title' => 'Search',
				'sidebar' => $sidebar,
				'products' => $products
			]);
		}

	}
?>