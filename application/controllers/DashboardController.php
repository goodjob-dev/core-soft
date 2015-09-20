<?php 
	class DashboardController extends Gs_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			$this->render('layers/dashboard', null);
		}
		
		
	}
?>