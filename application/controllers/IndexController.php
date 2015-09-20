<?php 
	class IndexController extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			$this->layout->render('layers/index', ['title' => 'Home']);
		}
		
		
	}
?>