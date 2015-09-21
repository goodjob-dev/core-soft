<?php 

class Category extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	public function getAllCategories() {
		$query = $this->db->select('*')
						  ->from('gs_categories')
						  ->get()
						  ->result();

		return $query;
	}
}	

?>