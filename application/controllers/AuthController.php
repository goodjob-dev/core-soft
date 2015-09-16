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
		$this->layout->render('forms/login', ['title' => 'Log in'], TRUE);
	}
}
?>