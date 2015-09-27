<?php 
	class _ContactController extends Gs_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Contact');
		}
		
		public function index()
		{
			$messages = $this->Contact->getAllMessages();
		
			$this->render('contacts', 
			[
				'title'		=> 'Contacts',
				'messages'	=> $messages
			]);
		}

		public function view($id)
		{
			$message = $this->Contact->getMessageByID($id);

			$this->Contact->upgradeseen($id);


		
			$this->render('contact-view', 
			[
				'title'		=> 'View Message',
				'message'	=> $message
			]);
		}
	}
?>