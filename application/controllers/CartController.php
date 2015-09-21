<?php 
	class CartController extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{

			$this->session->set_userdata(array(
				'cart' => array(

				)
			));

			$cart = $this->session->cart;

			//$this->request->pr($cart);
			

			$this->layout->render('layers/cart', [
				'title' => 'Cart',
			]);
		}

		public function add($id) {

		}
		
		
	}
?>