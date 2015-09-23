<?php 
	class _DashboardController extends Gs_Controller
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
			if( null !== $this->session->userdata('login-credentials') )
			{	
				$this->session->unset_userdata('login-credentials');
			}
			$this->request->redirectTo('/manage/login');
		}
	}
?>