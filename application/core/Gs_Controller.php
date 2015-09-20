<?php
	class Gs_Controller extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			
			if( null === $this->session->userdata('login-credentials') )
			{
				$this->request->redirectTo('/manage/login');
			}
		}
		
		public function render( $view, $params )
		{
			$this->layout->render( 'admin-layouts' . $view, $params, TRUE);
		}
	}
?>