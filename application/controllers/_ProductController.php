<?php
	class _ProductController extends Gs_Controller
	{
		private $product_limit = 5;
		
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{	
			$this->load->model( 'products' );
			
			$this->products->getAll();
		
			$this->render('products', []);
		}
	}
?>