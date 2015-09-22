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
					'items' => 'arthur'
				)
			));

			$cart = $this->session->cart;

			//$this->request->pr($cart);
			

			$this->layout->render('layers/cart', [
				'title' => 'Cart',
			]);
		}

		public function add($id) {

			$this->load->model('Products');

			$product = $this->Products->getProductById($id);
			if($product === FALSE ) {
				$this->request->redirectTo(base_url());
			}

			//array_push(, 5);
			//$this->request->pr($this->session->cart);

		}
		
		
	}
?>