<?php 
	class _UsersController extends Gs_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			echo $this->render('users', []);
		}
	}
?>