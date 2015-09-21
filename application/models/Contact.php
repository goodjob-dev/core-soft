<?php 

class Contact extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	public function insertMessage($data) {
		$this->db->insert('gs_contacts', $data);
	}


}	

?>