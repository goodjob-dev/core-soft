<?php 
	class MnDashboardController extends Gs_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			$this->render('dashboard', ['title' => 'Dashboard']);
		}
		
		public function logout()
		{	
			$route = '/';
		
			if( null !== $this->session->userdata('login-credentials') )
			{
				$route = '/manage/login';
				
				$this->session->unset_userdata('login-credentials');
			}
			$this->request->redirectTo($route);
		}
	}
?>