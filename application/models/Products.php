<?php 

class Products extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	public function getAllProducts() {
		$query = $this->db->select('*')
						  ->from('gs_products')
						  ->order_by('id DESC')
						  ->get()
						  ->result();

		return $query;
	}

	public function getAllProductsById($id) {
		$query = $this->db->select('*')
						  ->from('gs_products')
						  ->order_by('id DESC')
						  ->where('category_id', $id)
						  ->get()
						  ->result();
		return $query;
	}
}	

?>