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
	}
?>