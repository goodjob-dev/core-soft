<?php 
	class SearchController extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			echo "ok";
			
			$this->layout->render('layers/search', [
				'title' => 'Search',
			]);
		}

	}
?>