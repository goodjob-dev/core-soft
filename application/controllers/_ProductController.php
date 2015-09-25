<?php
	class _ProductController extends Gs_Controller
	{
		/**
		 * Product limit for each page
		*/
		private $pr_l = 2;
		
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			$p = $this->input->get('p');
			$l = $this->pr_l;
			$o = 0;
			
			if( null !== $p )
			{
				$l = $this->pr_l;
				$o = $l * $p;
			}
			
			$this->load->model( 'manage/_products' );
		
			$this->render('products', 
			[
				'title'    => 'Products',
				'products' => $this->_products->getAll( $l, $o )
			]);
		}

		public function add()
		{
			if($this->input->post())
			{
				

				$post = $this->input->post();


			
				$ext = pathinfo($_FILES['product_image']['name'], PATHINFO_EXTENSION);

				$data = array(
					'title'			=> $post['title'],
					'regular_price'	=> $post['regular_price'],
					'sale_price'	=> $post['sale_price'],
					'create_date'	=> time(),
					'extension'		=> $ext
				);

				$this->request->pr($data);

				//$this->load->model( 'manage/_products' );
				//$this->_products->insertProduct($data);
			}
			else
			{
				$this->load->model( 'Category' );
				$this->render('add-product', 
				[
					'title'    => 'Add product',
				], 'form');
			}
			
		}
	}
?>