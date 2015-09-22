<?php 
defined('BASEPATH') OR exit('');
	
class __AuthController extends CI_Controller
{
	public function __construct()
	{	
		parent::__construct();
		
		if( null !== $this->session->userdata('login-credentials') )
		{
			$this->request->redirectTo('manage/');
		}
	}	
	
	private function check()
	{
		
	}
	
	public function form()
	{	
		$this->layout->render(
		
			'forms/login', 
			
			array(
				'title'  => 'Log in',
				'oauth'  => $this->request->getCsrf('login'),
				'errors' => ''
			), 
			
			TRUE, FALSE
		);
	}
	
	public function action()
	{
		$this->load->library('auth');
	}
	
	public function logout()
	{
		$credentials = $this->session->userdata('login-credentials');
		
		$this->request->pr($credentials);
	}
}
?>