<?php 

class Contact extends Gs_Model
{
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	public function insertMessage($data) {
		$this->db->insert('gs_contacts', $data);
	}

	public function getAllMessages() {
		$query = $this->db->select('*')
						  ->from('gs_contacts')
						  ->order_by('id DESC')
						  ->get();

		return $this->get($query);
	}

	public function getMessageByID($id) {
		$query = $this->db->select('*')
						  ->from('gs_contacts')
						  ->where('id', $id)
						  ->get();
		return $this->one($query);
	}

	public function upgradeseen($id) {
		if ( is_null($id)){
			return false;
		}

		$this->db->where('id', $id);
		$this->db->update('gs_contacts', array('seen' => 1)); 
	}

	public function unreadMessageCount() {
		$query = $this->db->query("SELECT COUNT(*) as count FROM gs_contacts WHERE seen=0");
		return $this->one($query)->count;
	}


}	

?>