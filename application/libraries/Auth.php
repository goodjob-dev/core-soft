<?php 

class Auth
{
	/**
	 * CodeIgniter global object
	*/
	private $CI;
	
	
	
	/**
	 * User object
	*/
	private $user;
	
	
	
	/**
	 * Constructor function:
	 * Starts validation
	*/
	public function __construct()
	{
		$this->CI = & get_instance();

		$this->startValidation();
	}
	
	
	
	/**
	 * Starts Validation
	*/
	private function startValidation()
	{
		/*
	 	 * Check if csrf is valid 
		*/
		if( ! $this->CI->request->isValid( 'login' ) )
		{
			$this->renderForm('');

			return;
		}
		
		
		/**
		 * Load form validation library
		*/
		$this->CI->load->library('form_validation');


		/*
	 	 * Initialize rules 
		*/
		$this->CI->form_validation->set_rules( 
			[
				array(
					'field' => 'username',
					'label' => 'Username',
					'rules' => 'required'
				),
				array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'required'
				),
			]
		);

		/*
	 	 * Run validation 
		*/
		if( $this->CI->form_validation->run() === FALSE ) 
		{
			$this->renderForm( validation_errors() );
			
			return FALSE;
		} 
		$this->validUser( $this->CI->input->post('username') );
		
	}
	
	
	/**
	 * Check if user exist or not
	 * 
	*/
	private function validUser( $username )
	{
		$this->CI->load->model('login');

		$user = $this->CI->login->findUser( $username );

		if( $user === FALSE )
		{
			$this->renderForm('Invalid username or password');
			
			return;
	
		}
		$this->user = $user;
		
		$this->verifyPassword( $this->CI->input->post('password') );
	}
	
	private function verifyPassword( $password )
	{
		$password = crypt( $password, $this->user->password );
		
		if( $this->user->password !== $password )
		{
			$this->renderForm('Invalid username or password');
			
			return;
		}
		$this->saveUser();
	}
	
	
	private function saveUser()
	{
		$this->CI->session->set_userdata(
			array(
				'login-credentials' => array(
					'id'       => $this->user->id,
					'name'     => $this->user->name,
				)
			)
		);
		
		$this->CI->request->redirectTo('manage/');
	}
	
	/**
	 * Renders registration form
	 *
	 * @param Errors: Validation errors
	*/
	private function renderForm( $errors )
	{
		$this->CI->layout->render( 

			'forms/login', 
			
			array(
				'errors' => $errors, 
				'oauth'  => $this->CI->request->getCsrf('login'),
				'title'  => 'Log in'
			),
			
			TRUE, FALSE
		);
	}
}

?>
