<?php 
defined('BASEPATH') OR exit('');
	
class AuthController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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
}
?>