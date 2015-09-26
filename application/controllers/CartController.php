<?php 
	class CartController extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		
		public function index()
		{	
			
		
			$this->layout->render('layer/cart', [
				'title'    => 'Cart',
				'products' => ''
			]);
		}
		
		
		public function add()
		{
			
		}
		
		public function delete()
		{
			
		}
		
		public function update()
		{
			
		}
	}
?>