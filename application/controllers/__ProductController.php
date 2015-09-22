<?php
	class __ProductController extends Gs_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			echo 'Fuck';
			
			$this->render('products', []);
		}
	}
?>