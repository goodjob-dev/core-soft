<?php 

class Category extends Gs_Model
{
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	public function getAllCategories() {
		$query = $this->db->select('*')
						  ->from('gs_categories')
						  ->order_by('id DESC')
						  ->get();

		return $this->get($query);
	}

	public function aliasToId($alias) {
		$query = $this->db->select('id')
						  ->from('gs_categories')
						  ->where('alias', $alias)
						  ->get();
		if($query->num_rows() == 0) {
			return FALSE;
		}
		$result = $query->result();
		return $result[0]->id;
	}

	public function getCategoryByID($id) {
		$query = $this->db->select('*')
						  ->from('gs_categories')
						  ->where('id', $id)
						  ->get();

		return $this->one($query);
	}

}	

?>