<?php
	class _ProductController extends Gs_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{	
			$this->render('products', []);
		}
	}
?>